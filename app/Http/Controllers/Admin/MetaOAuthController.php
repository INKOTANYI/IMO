<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialAccount;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class MetaOAuthController extends Controller
{
    public function redirect(Request $request): RedirectResponse
    {
        $appId = config('services.meta.app_id');
        $redirectUri = config('services.meta.redirect');
        $version = config('services.meta.graph_version', 'v20.0');
        abort_unless($appId && $redirectUri, 500, 'Meta App not configured');

        $state = Str::random(40);
        $request->session()->put('meta_oauth_state', $state);

        $scopes = [
            'pages_manage_posts',
            'pages_read_engagement',
            'pages_show_list',
            'instagram_basic',
            'instagram_content_publish',
        ];

        $url = sprintf(
            'https://www.facebook.com/%s/dialog/oauth?client_id=%s&redirect_uri=%s&state=%s&scope=%s',
            $version,
            urlencode($appId),
            urlencode($redirectUri),
            urlencode($state),
            urlencode(implode(',', $scopes))
        );

        return redirect()->away($url);
    }

    public function callback(Request $request): RedirectResponse
    {
        $version = config('services.meta.graph_version', 'v20.0');
        $appId = config('services.meta.app_id');
        $appSecret = config('services.meta.app_secret');
        $redirectUri = config('services.meta.redirect');
        $state = $request->session()->pull('meta_oauth_state');

        if (!$state || $state !== $request->get('state')) {
            return redirect()->route('admin.social.accounts.index')->with('error', 'Invalid OAuth state');
        }

        $code = $request->get('code');
        if (!$code) {
            return redirect()->route('admin.social.accounts.index')->with('error', 'Authorization cancelled');
        }

        // Exchange code for access token
        $tokenRes = Http::asForm()->post("https://graph.facebook.com/$version/oauth/access_token", [
            'client_id' => $appId,
            'client_secret' => $appSecret,
            'redirect_uri' => $redirectUri,
            'code' => $code,
        ]);

        if (!$tokenRes->ok()) {
            return redirect()->route('admin.social.accounts.index')->with('error', 'Failed to exchange token');
        }

        $accessToken = $tokenRes->json('access_token');

        // Fetch managed pages
        $pagesRes = Http::get("https://graph.facebook.com/$version/me/accounts", [
            'access_token' => $accessToken,
        ]);

        if (!$pagesRes->ok()) {
            return redirect()->route('admin.social.accounts.index')->with('error', 'Failed to fetch pages');
        }

        // Temporarily stash token & pages in session; next step picks page to connect
        $request->session()->put('meta_user_token', $accessToken);
        $request->session()->put('meta_pages', $pagesRes->json('data', []));

        return redirect()->route('admin.social.accounts.index')->with('status', 'Select a page to connect');
    }

    public function connectPage(Request $request): RedirectResponse
    {
        $version = config('services.meta.graph_version', 'v20.0');
        $userToken = $request->session()->get('meta_user_token');
        $pageId = $request->input('page_id');

        if (!$userToken || !$pageId) {
            return back()->with('error', 'Missing selection');
        }

        // Get page access token
        $pageRes = Http::get("https://graph.facebook.com/$version/$pageId", [
            'fields' => 'name,access_token,instagram_business_account',
            'access_token' => $userToken,
        ]);

        if (!$pageRes->ok()) {
            return back()->with('error', 'Failed to get page token');
        }

        $page = $pageRes->json();

        // Save Facebook Page account
        SocialAccount::updateOrCreate(
            ['provider' => 'facebook', 'account_id' => $pageId],
            [
                'name' => $page['name'] ?? null,
                'username' => null,
                'access_token' => encrypt($page['access_token'] ?? ''),
                'status' => 'active',
            ]
        );

        // If IG Business connected, save Instagram account
        if (!empty($page['instagram_business_account']['id'])) {
            $igId = $page['instagram_business_account']['id'];
            $igRes = Http::get("https://graph.facebook.com/$version/$igId", [
                'fields' => 'username',
                'access_token' => $page['access_token'],
            ]);
            $igUsername = $igRes->ok() ? ($igRes->json('username') ?? null) : null;

            SocialAccount::updateOrCreate(
                ['provider' => 'instagram', 'account_id' => $igId],
                [
                    'name' => null,
                    'username' => $igUsername,
                    'access_token' => encrypt($page['access_token'] ?? ''),
                    'status' => 'active',
                ]
            );
        }

        // Clear session
        $request->session()->forget(['meta_user_token','meta_pages']);

        return redirect()->route('admin.social.accounts.index')->with('status', 'Account connected');
    }
}

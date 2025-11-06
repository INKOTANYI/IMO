<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialAccount;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SocialAccountsController extends Controller
{
    public function index(Request $request): View
    {
        $accounts = SocialAccount::orderBy('provider')->get();
        return view('admin.social.accounts.index', compact('accounts'));
    }

    public function disconnect(SocialAccount $account): RedirectResponse
    {
        $account->update(['status' => 'revoked', 'access_token' => null, 'refresh_token' => null, 'token_expires_at' => null]);
        return back()->with('status', 'Account disconnected');
    }
}

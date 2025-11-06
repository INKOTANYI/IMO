<?php

namespace App\Services;

use App\Models\MediaFile;
use App\Models\SocialAccount;
use App\Models\SocialPost;
use Illuminate\Support\Facades\Http;

class MetaPublisher
{
    public function publish(SocialAccount $account, SocialPost $post): array
    {
        $version = config('services.meta.graph_version', 'v20.0');
        $token = decrypt($account->access_token);

        if ($account->provider === 'facebook') {
            $firstMedia = $post->media()->first();
            if ($firstMedia && str_starts_with((string) $firstMedia->mime, 'image/')) {
                // Upload photo to Page using a public URL to the image
                $photoEndpoint = "https://graph.facebook.com/$version/{$account->account_id}/photos";
                $imageUrl = asset('storage/'.$firstMedia->path);
                $photoParams = [
                    'url' => $imageUrl,
                    'message' => (string) $post->content,
                    'published' => 'true',
                    'access_token' => $token,
                ];
                $res = Http::asForm()->post($photoEndpoint, $photoParams);
                if (!$res->ok()) {
                    throw new \RuntimeException('Facebook photo publish failed: '.$res->body());
                }
                return $res->json();
            }

            // Publish to Facebook Page feed (text/link)
            $endpoint = "https://graph.facebook.com/$version/{$account->account_id}/feed";
            $params = [
                'message' => $post->content,
                'access_token' => $token,
            ];
            if ($post->link_url) {
                $params['link'] = $post->link_url;
            }
            $res = Http::asForm()->post($endpoint, $params);
            if (!$res->ok()) {
                throw new \RuntimeException('Facebook publish failed: '.$res->body());
            }
            return $res->json();
        }

        if ($account->provider === 'instagram') {
            // Minimal MVP: publish first image if available
            $media = $post->media()->first();
            if (!$media) {
                throw new \RuntimeException('Instagram requires media');
            }
            $imageUrl = asset('storage/'.$media->path);

            // 1) Create media container
            $containerRes = Http::asForm()->post("https://graph.facebook.com/$version/{$account->account_id}/media", [
                'image_url' => $imageUrl,
                'caption' => (string) $post->content,
                'access_token' => $token,
            ]);
            if (!$containerRes->ok()) {
                throw new \RuntimeException('IG container failed: '.$containerRes->body());
            }
            $containerId = $containerRes->json('id');

            // 2) Publish container
            $publishRes = Http::asForm()->post("https://graph.facebook.com/$version/{$account->account_id}/media_publish", [
                'creation_id' => $containerId,
                'access_token' => $token,
            ]);
            if (!$publishRes->ok()) {
                throw new \RuntimeException('IG publish failed: '.$publishRes->body());
            }
            return $publishRes->json();
        }

        throw new \InvalidArgumentException('Unsupported provider');
    }
}

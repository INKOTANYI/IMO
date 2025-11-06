<?php

namespace App\Jobs;

use App\Models\SocialAccount;
use App\Models\SocialPost;
use App\Models\SocialPostTarget;
use App\Services\MetaPublisher;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class PublishPostJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public int $postId) {}

    public function handle(MetaPublisher $publisher): void
    {
        $post = SocialPost::with(['media','targets.account'])->find($this->postId);
        if (!$post) return;

        $post->update(['status' => 'publishing']);

        foreach ($post->targets as $target) {
            /** @var SocialPostTarget $target */
            $account = $target->account; /** @var SocialAccount $account */
            try {
                if (in_array($account->provider, ['facebook','instagram'])) {
                    $result = $publisher->publish($account, $post);
                    $target->update([
                        'status' => 'published',
                        'external_post_id' => $result['id'] ?? null,
                        'error_message' => null,
                    ]);
                } else {
                    $target->update(['status' => 'failed', 'error_message' => 'Unsupported provider']);
                }
            } catch (\Throwable $e) {
                Log::error('Publish failed', ['post' => $post->id, 'target' => $target->id, 'error' => $e->getMessage()]);
                $target->update(['status' => 'failed', 'error_message' => $e->getMessage()]);
            }
        }

        // Set post final status
        $failed = $post->targets()->where('status','failed')->exists();
        $publishing = $post->targets()->where('status','publishing')->exists();
        $post->update(['status' => $publishing ? 'publishing' : ($failed ? 'failed' : 'published'), 'published_at' => now()]);
    }
}

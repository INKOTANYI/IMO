<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MediaFile;
use App\Models\SocialAccount;
use App\Models\SocialPost;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class SocialPostsController extends Controller
{
    public function index(): View
    {
        $posts = SocialPost::with(['author','targets.account'])->orderByDesc('id')->paginate(20);
        return view('admin.social.posts.index', compact('posts'));
    }

    public function create(): View
    {
        $accounts = SocialAccount::where('status','active')->orderBy('provider')->get();
        return view('admin.social.posts.create', compact('accounts'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'content' => ['nullable','string','max:1000'],
            'link_url' => ['nullable','url'],
            'scheduled_at' => ['nullable','date'],
            'accounts' => ['required','array','min:1'],
            'accounts.*' => ['integer','exists:social_accounts,id'],
            'media.*' => ['nullable','file','mimes:jpg,jpeg,png,gif,webp,mp4,mov','max:10240'],
        ]);

        $post = SocialPost::create([
            'author_user_id' => $request->user()->id,
            'content' => $validated['content'] ?? null,
            'link_url' => $validated['link_url'] ?? null,
            'status' => isset($validated['scheduled_at']) ? 'scheduled' : 'publishing',
            'scheduled_at' => $validated['scheduled_at'] ?? null,
        ]);

        // attach targets
        $post->targets()->createMany(
            collect($validated['accounts'])->map(fn($id) => ['social_account_id' => $id, 'status' => isset($validated['scheduled_at']) ? 'scheduled' : 'publishing'])->all()
        );

        // upload media
        if ($request->hasFile('media')) {
            $order = 0;
            foreach ($request->file('media') as $file) {
                if (!$file) continue;
                $path = $file->store('social-media','public');
                $media = MediaFile::create([
                    'disk' => 'public',
                    'path' => $path,
                    'mime' => $file->getClientMimeType(),
                    'size' => $file->getSize(),
                    'created_by_user_id' => $request->user()->id,
                ]);
                $post->media()->attach($media->id, ['sort_order' => $order++]);
            }
        }

        // Dispatch publish job
        if (!empty($validated['scheduled_at'])) {
            \App\Jobs\PublishPostJob::dispatch($post->id)->delay($post->scheduled_at);
            $msg = 'Post scheduled';
        } else {
            \App\Jobs\PublishPostJob::dispatch($post->id);
            $msg = 'Post publishing';
        }

        return redirect()->route('admin.social.posts.index')->with('status',$msg);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MediaFile;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MediaController extends Controller
{
    public function index(): View
    {
        $media = MediaFile::orderByDesc('id')->paginate(24);
        return view('admin.social.media.index', compact('media'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'media.*' => ['required','file','mimes:jpg,jpeg,png,gif,webp,mp4,mov','max:10240'],
        ]);

        $created = [];
        if ($request->hasFile('media')) {
            foreach ($request->file('media') as $file) {
                $path = $file->store('social-media', 'public');
                $created[] = MediaFile::create([
                    'disk' => 'public',
                    'path' => $path,
                    'mime' => $file->getClientMimeType(),
                    'size' => $file->getSize(),
                    'created_by_user_id' => $request->user()->id,
                ]);
            }
        }

        return back()->with('status', count($created).' file(s) uploaded');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Content\ContentRegistry;
use App\Content\MediaUploader;
use App\Http\Controllers\Controller;
use App\Models\MediaAsset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function index(Request $request)
    {
        $media = MediaAsset::query()->when($request->filled('search'), fn ($query) => $query->where('name', 'like', '%'.$request->string('search').'%'))->latest()->paginate(24)->withQueryString();

        return view('admin.media.index', compact('media'));
    }

    public function store(Request $request, MediaUploader $uploader)
    {
        $request->validate(['file' => ['required', 'file']]);
        $uploader->store($request->file('file'));

        return back()->with('status', 'Upload added to the media library.');
    }

    public function destroy(MediaAsset $media, ContentRegistry $registry)
    {
        abort_unless($media->is_uploaded, 403, 'Default assets are kept for fresh installations.');
        foreach ($registry->all() as $module) {
            if (! empty($module['group_only'])) {
                continue;
            }
            $inUse = DB::table($module['table'])->where(function ($query) use ($module, $media) {
                foreach ($module['fields'] as $name => $field) {
                    if (! in_array($field['type'], ['boolean', 'number'])) {
                        $query->orWhere('content_'.$name, 'like', '%'.$media->path.'%');
                    }
                }
            })->exists();
            if ($inUse) {
                return back()->withErrors(['file' => 'This file is referenced by content (including hidden or trashed items). Replace those references before deleting it.']);
            }
        }
        Storage::disk('public')->delete(substr($media->path, strlen('storage/')));
        $media->delete();

        return back()->with('status', 'Unused upload deleted.');
    }
}

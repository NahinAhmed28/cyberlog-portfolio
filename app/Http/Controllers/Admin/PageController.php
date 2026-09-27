<?php

namespace App\Http\Controllers\Admin;

use App\Content\PageEditor;
use App\Http\Controllers\Controller;
use App\Models\MediaAsset;
use App\Models\Page;

class PageController extends Controller
{
    public function show(Page $page)
    {
        $page->load(['sections.contents' => fn ($query) => $query->withTrashed(), 'sections.pages']);
        $sections = $page->sections->filter(fn ($section) => ! empty(config('content_modules.'.$section->key.'.fields')));

        if ($page->slug === 'navigation') {
            $sections = $sections->where('key', 'nav');
        }

        $pageMedia = app(PageEditor::class)->media($sections);
        $media = MediaAsset::latest()->get(['path', 'name', 'mime_type']);

        return view('admin.pages.show', compact('page', 'sections', 'pageMedia', 'media'));
    }
}

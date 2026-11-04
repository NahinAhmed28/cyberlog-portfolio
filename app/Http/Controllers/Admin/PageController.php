<?php

namespace App\Http\Controllers\Admin;

use App\Content\FrontendContentOrder;
use App\Content\PageComposition;
use App\Content\PageEditor;
use App\Http\Controllers\Controller;
use App\Models\MediaAsset;
use App\Models\Page;
use App\Models\PageBlock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PageController extends Controller
{
    public function show(Page $page)
    {
        app(PageComposition::class)->initialize($page);
        $blocks = PageBlock::withTrashed()->where('page_id', $page->id)->orderBy('sort_order')->orderBy('id')->get();
        $page->load(['sections.contents' => fn ($query) => $query->withTrashed(), 'sections.pages']);
        $sections = $page->sections->filter(fn ($section) => ! empty(config('content_modules.'.$section->key.'.fields')));
        $sections = app(FrontendContentOrder::class)->sections($page, $sections);

        if ($page->slug === 'navigation') {
            $sections = $sections->where('key', 'nav');
        }

        $pageMedia = app(PageEditor::class)->media($sections);
        $media = MediaAsset::latest()->get(['path', 'name', 'mime_type']);

        return view('admin.pages.show', compact('page', 'sections', 'pageMedia', 'media', 'blocks'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate(['title' => ['required', 'string', 'max:255'], 'slug' => ['required', 'regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/', 'max:180', 'unique:pages,slug'], 'seo_title' => ['nullable', 'string', 'max:255'], 'seo_description' => ['nullable', 'string', 'max:1000']]);
        $path = '/services/'.$data['slug'];
        abort_if(Route::getRoutes()->match(Request::create($path))->getName() !== 'custom.service', 422, 'This URL is already used by a service.');
        $page = Page::create($data + ['path' => $path, 'kind' => 'page', 'is_custom' => true, 'sort_order' => 100]);

        return redirect()->route('admin.pages.show', $page)->with('status', 'Service page created. Add sections, then use Navigation to insert its link.');
    }

    public function seo(Request $request, Page $page)
    {
        $page->update($request->validate(['seo_title' => ['nullable', 'string', 'max:255'], 'seo_description' => ['nullable', 'string', 'max:1000']]));

        return back()->with('status', 'SEO settings saved.');
    }
}

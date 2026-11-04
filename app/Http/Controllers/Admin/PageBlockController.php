<?php

namespace App\Http\Controllers\Admin;

use App\Content\ContentRegistry;
use App\Content\ContentValidator;
use App\Content\MediaUploader;
use App\Http\Controllers\Controller;
use App\Models\MediaAsset;
use App\Models\Page;
use App\Models\PageBlock;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class PageBlockController extends Controller
{
    public function create(Page $page)
    {
        return $this->form($page, new PageBlock(['type' => 'cards', 'is_visible' => true, 'sort_order' => 100]));
    }

    public function edit(Page $page, PageBlock $block)
    {
        abort_unless($block->page_id === $page->id && $block->type !== 'legacy', 404);

        return $this->form($page, $block);
    }

    private function form(Page $page, PageBlock $block)
    {
        $definition = ['fields' => config('section_library.fields')];
        $data = $block->data ?: app(ContentRegistry::class)->emptyRecord($definition);
        $media = MediaAsset::latest()->get(['path', 'name', 'mime_type']);

        return view('admin.pages.block-edit', compact('page', 'block', 'data', 'definition', 'media'));
    }

    public function store(Request $request, Page $page)
    {
        return $this->save($request, $page, new PageBlock(['page_id' => $page->id]));
    }

    public function update(Request $request, Page $page, PageBlock $block)
    {
        abort_unless($block->page_id === $page->id && $block->type !== 'legacy', 404);

        return $this->save($request, $page, $block);
    }

    private function save(Request $request, Page $page, PageBlock $block)
    {
        $meta = $request->validate(['title' => ['required', 'string', 'max:255'], 'type' => ['required', Rule::in(array_keys(config('section_library.types')))], 'sort_order' => ['required', 'integer', 'between:0,1000000'], 'is_visible' => ['required', 'boolean'], 'data' => ['required', 'array']]);
        $definition = ['fields' => config('section_library.fields')];
        $data = app(ContentValidator::class)->validate($meta['data'], $definition);
        $files = Arr::dot($request->allFiles()['uploads'] ?? []);
        foreach ($files as $path => $file) {
            $field = app(ContentRegistry::class)->fieldAt($definition, $path);
            abort_unless($field && in_array($field['type'], ['image', 'video']), 422);
            $allowed = $field['type'] === 'image' ? 'jpg,jpeg,png,gif,webp' : 'mp4,webm';
            validator(['file' => $file], ['file' => ['file', 'mimes:'.$allowed, 'extensions:'.$allowed, 'max:51200']])->validate();
        }
        foreach ($files as $path => $file) {
            Arr::set($data, $path, app(MediaUploader::class)->store($file)->path);
        }
        $block->fill(Arr::except($meta, ['data']));
        $block->anchor ??= 'section-'.Str::uuid();
        $block->data = $data;
        $block->save();

        return redirect()->route('admin.pages.show', $page)->with('status', 'Section saved. Your changes are live.');
    }

    public function action(Request $request, Page $page, int $id)
    {
        $block = PageBlock::withTrashed()->where('page_id', $page->id)->findOrFail($id);
        $request->validate(['action' => ['required', Rule::in(['hide', 'show', 'delete', 'restore', 'duplicate'])]]);
        switch ($request->input('action')) {
            case 'hide': $block->update(['is_visible' => false]);
                break;
            case 'show': $block->update(['is_visible' => true]);
                break;
            case 'delete': $block->delete();
                break;
            case 'restore': $block->restore();
                break;
            case 'duplicate':
                $copy = $block->replicate();
                $copy->title .= ' (copy)';
                $copy->anchor = 'section-'.Str::uuid();
                $copy->sort_order++;
                $copy->save();
                break;
        }

        return back()->with('status', 'Section updated.');
    }

    public function reorder(Request $request, Page $page)
    {
        $data = $request->validate(['ids' => ['required', 'array'], 'ids.*' => ['integer', 'distinct']]);
        DB::transaction(function () use ($data, $page) {
            $expected = PageBlock::where('page_id', $page->id)->lockForUpdate()->pluck('id')->sort()->values()->all();
            $ids = array_map('intval', $data['ids']);
            $actual = $ids;
            sort($actual);
            abort_unless($actual === $expected, 422, 'Sections changed. Reload before reordering.');
            foreach ($ids as $order => $id) {
                PageBlock::whereKey($id)->update(['sort_order' => ($order + 1) * 10]);
            }
        });

        return response()->json(['saved' => true]);
    }
}

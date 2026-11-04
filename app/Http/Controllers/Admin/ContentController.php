<?php

namespace App\Http\Controllers\Admin;

use App\Content\ContentRegistry;
use App\Content\ContentRepository;
use App\Content\ContentValidator;
use App\Content\EditorSchema;
use App\Content\FrontendContentOrder;
use App\Content\MediaUploader;
use App\Content\PageComposition;
use App\Content\PageEditor;
use App\Http\Controllers\Controller;
use App\Models\ContentAudit;
use App\Models\ContentEntry;
use App\Models\MediaAsset;
use App\Models\Page;
use App\Models\PageContent;
use App\Models\PageSection;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ContentController extends Controller
{
    public function __construct(private ContentRegistry $registry) {}

    public function index(Request $request, string $module)
    {
        $definition = $this->registry->get($module);
        $query = ContentEntry::forModule($module)->newQuery();
        if ($request->boolean('trash')) {
            $query->onlyTrashed();
        }
        $entries = $query->orderBy('sort_order')->orderBy('id')->paginate(20)->withQueryString();
        $children = collect($this->registry->all())->filter(fn ($child) => $child['parent'] === $module);

        return view('admin.content.index', compact('module', 'definition', 'entries', 'children'));
    }

    public function create(string $module)
    {
        $definition = $this->registry->get($module);
        abort_unless($definition['repeatable'] || ! ContentEntry::forModule($module)->newQuery()->exists(), 404);
        $entry = ContentEntry::forModule($module);
        $data = $this->registry->emptyRecord($definition);

        return $this->form($module, $definition, $entry, $data);
    }

    public function edit(string $module, int $id)
    {
        $definition = $this->registry->get($module);
        $entry = ContentEntry::forModule($module)->newQuery()->findOrFail($id);

        return $this->form($module, $definition, $entry, $entry->contentData($definition));
    }

    private function form($module, $definition, $entry, $data)
    {
        $definition['fields'] = app(FrontendContentOrder::class)->fields($module, $definition);
        $definition['fields'] = app(EditorSchema::class)->fields($module, $definition['fields']);
        $definition['title'] = app(PageEditor::class)->sectionTitle($module, $definition['title']);
        $media = MediaAsset::orderByDesc('id')->get(['path', 'name', 'mime_type']);

        $section = PageSection::where('key', $module)->firstOrFail();
        $page = $section->pages()->where('slug', request('page'))->first() ?? $section->pages()->orderBy('sort_order')->firstOrFail();

        $definition['fields'] = app(EditorSchema::class)->fields($module, $definition['fields'], app(PageComposition::class)->source($page));
        if (request()->filled('section_anchor')) {
            $selected = collect($definition['fields'])->where('anchor', request('section_anchor'))->all();
            if ($selected) {
                $definition['fields'] = $selected;
            }
        }

        return view('admin.content.edit', compact('module', 'definition', 'entry', 'data', 'media', 'page'));
    }

    public function store(Request $request, string $module)
    {
        $definition = $this->registry->get($module);
        abort_unless($definition['repeatable'] || ! ContentEntry::forModule($module)->newQuery()->withTrashed()->exists(), 409);
        $entry = ContentEntry::forModule($module);
        $entry->seed_key = $definition['repeatable'] ? (string) Str::uuid() : 'default';

        return $this->save($request, $module, $entry);
    }

    public function update(Request $request, string $module, int $id)
    {
        return $this->save($request, $module, ContentEntry::forModule($module)->newQuery()->findOrFail($id));
    }

    public function media(Request $request, Page $page, PageContent $entry)
    {
        abort_unless($page->sections()->where('page_sections.id', $entry->page_section_id)->exists(), 404);
        $request->validate(['field_path' => ['required', 'string'], 'media_value' => ['nullable', 'string'], 'version' => ['required', 'string']]);
        $module = $entry->section->key;
        $definition = $this->registry->get($module);
        $path = $request->string('field_path')->toString();
        $field = $this->registry->fieldAt($definition, $path);
        abort_unless($field && in_array($field['type'], ['image', 'video']) && Arr::has($entry->data, $path), 422);
        $data = $entry->contentData($definition);
        Arr::set($data, $path, $request->input('media_value', ''));
        $request->merge(['data' => $data, 'sort_order' => $entry->sort_order, 'is_visible' => $entry->is_visible]);
        $uploads = $request->hasFile('file') ? [$path => $request->file('file')] : [];

        return $this->save($request, $module, $entry, $page, $uploads);
    }

    private function save(Request $request, string $module, ContentEntry $entry, ?Page $returnPage = null, ?array $mediaUploads = null)
    {
        $definition = $this->registry->get($module);
        $request->validate(['sort_order' => ['required', 'integer', 'between:0,1000000'], 'is_visible' => ['required', 'boolean'], 'data' => ['required', 'array']]);
        $input = $request->input('data');
        if ($entry->exists && $request->filled('section_anchor') && $request->filled('page')) {
            $page = Page::where('slug', $request->input('page'))->firstOrFail();
            abort_unless($page->sections()->where('key', $module)->exists(), 422);
            $fields = app(EditorSchema::class)->fields($module, $definition['fields'], app(PageComposition::class)->source($page));
            $selected = collect($fields)->where('anchor', $request->input('section_anchor'))->keys()->all();
            if ($selected) {
                $input = array_replace(Arr::except($entry->contentData($definition), $selected), Arr::only($input, $selected));
            }
        }
        $data = app(ContentValidator::class)->validate($input, $definition);
        if ($module === 'services' && empty($data['route'])) {
            $data['route'] = Str::slug($data['title'] ?? '').'-'.Str::lower(Str::random(6));
        }
        // Validate every upload before storing any of them.
        $files = $mediaUploads ?? Arr::dot($request->allFiles()['uploads'] ?? []);
        foreach ($files as $path => $file) {
            $field = $this->registry->fieldAt($definition, $path);
            abort_unless($field && in_array($field['type'], ['image', 'video']), 422);
            $allowed = $field['type'] === 'image' ? 'jpg,jpeg,png,gif,webp' : 'mp4,webm';
            validator(['upload' => $file], ['upload' => ['file', 'mimes:'.$allowed, 'extensions:'.$allowed, 'max:51200']])->validate();
        }
        $before = $entry->exists ? $entry->contentData($definition) : null;
        DB::transaction(function () use ($entry, $request, $definition, $module, $data, $before, $files) {
            // Reject a stale tab instead of silently overwriting another editor's work.
            if ($entry->exists) {
                $current = $entry->newQuery()->lockForUpdate()->findOrFail($entry->id);
                abort_unless(hash_equals($current->editVersion(), (string) $request->input('version')), 409, 'This content changed since you opened it. Reload before saving.');
            }
            foreach ($files as $path => $file) {
                Arr::set($data, $path, app(MediaUploader::class)->store($file)->path);
            }
            foreach ($data as $key => $value) {
                $entry->setAttribute('content_'.$key, $value);
            }
            $entry->sort_order = $request->integer('sort_order');
            $entry->is_visible = $definition['repeatable'] ? $request->boolean('is_visible') : true;
            $entry->save();
            ContentAudit::create(['user_id' => auth()->id(), 'module' => $module, 'entry_id' => $entry->id, 'action' => $before === null ? 'created' : 'updated', 'before' => $before, 'after' => $data]);
        });
        app(ContentRepository::class)->forget($module);

        if ($returnPage) {
            return redirect(route('admin.pages.show', $returnPage).'#page-media')->with('status', 'Media saved. Your website now uses this file.');
        }

        return redirect()->route('admin.content.edit', [$module, $entry->id, 'page' => $request->input('page'), 'section_anchor' => $request->input('section_anchor')])->with('status', 'Content saved. Your changes are live on the public site.');
    }

    public function destroy(string $module, int $id)
    {
        $definition = $this->registry->get($module);
        $entry = ContentEntry::forModule($module)->newQuery()->findOrFail($id);
        DB::transaction(function () use ($entry, $module, $definition) {
            ContentAudit::create(['user_id' => auth()->id(), 'module' => $module, 'entry_id' => $entry->id, 'action' => 'deleted', 'before' => $entry->contentData($definition)]);
            $entry->delete();
        });
        app(ContentRepository::class)->forget($module);

        return back()->with('status', 'Moved to trash. You can restore it from this section’s trash view.');
    }

    public function itemAction(Request $request, string $module, int $id)
    {
        $definition = $this->registry->get($module);
        abort_unless($definition['repeatable'], 422);
        $entry = ContentEntry::forModule($module)->newQuery()->findOrFail($id);
        $request->validate(['action' => ['required', 'in:duplicate,hide,show']]);
        $before = $entry->contentData($definition);
        if ($request->input('action') === 'duplicate') {
            $entry = $entry->replicate();
            $entry->seed_key = (string) Str::uuid();
            $entry->sort_order++;
        } else {
            $entry->is_visible = $request->input('action') === 'show';
        }
        $entry->save();
        ContentAudit::create(['user_id' => auth()->id(), 'module' => $module, 'entry_id' => $entry->id, 'action' => $request->input('action'), 'before' => $before, 'after' => $entry->contentData($definition)]);
        app(ContentRepository::class)->forget($module);

        return back()->with('status', 'Item updated.');
    }

    public function reorderItems(Request $request, string $module)
    {
        $definition = $this->registry->get($module);
        abort_unless($definition['repeatable'], 422);
        $data = $request->validate(['ids' => ['required', 'array'], 'ids.*' => ['integer', 'distinct']]);
        DB::transaction(function () use ($module, $data) {
            $query = ContentEntry::forModule($module)->newQuery();
            $expected = (clone $query)->lockForUpdate()->pluck('id')->map(fn ($id) => (int) $id)->sort()->values()->all();
            $ids = array_map('intval', $data['ids']);
            $actual = $ids;
            sort($actual);
            abort_unless($actual === $expected, 422, 'Content changed. Reload before reordering.');
            foreach ($ids as $order => $id) {
                (clone $query)->whereKey($id)->update(['sort_order' => ($order + 1) * 10]);
            }
        });
        app(ContentRepository::class)->forget($module);

        return response()->json(['saved' => true]);
    }

    public function restore(string $module, int $id)
    {
        $entry = ContentEntry::forModule($module)->newQuery()->onlyTrashed()->findOrFail($id);
        $entry->restore();
        ContentAudit::create(['user_id' => auth()->id(), 'module' => $module, 'entry_id' => $id, 'action' => 'restored']);
        app(ContentRepository::class)->forget($module);

        return back()->with('status', 'Content restored.');
    }
}

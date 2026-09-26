<?php

namespace App\Http\Controllers\Admin;

use App\Content\ContentRegistry;
use App\Content\ContentRepository;
use App\Content\ContentValidator;
use App\Content\MediaUploader;
use App\Http\Controllers\Controller;
use App\Models\ContentAudit;
use App\Models\ContentEntry;
use App\Models\MediaAsset;
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
        $media = MediaAsset::orderByDesc('id')->get(['path', 'name']);

        return view('admin.content.edit', compact('module', 'definition', 'entry', 'data', 'media'));
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

    private function save(Request $request, string $module, ContentEntry $entry)
    {
        $definition = $this->registry->get($module);
        $request->validate(['sort_order' => ['required', 'integer', 'between:0,1000000'], 'is_visible' => ['required', 'boolean'], 'data' => ['required', 'array']]);
        $data = app(ContentValidator::class)->validate($request->input('data'), $definition);
        // Validate every upload before storing any of them.
        $files = Arr::dot($request->allFiles()['uploads'] ?? []);
        foreach ($files as $path => $file) {
            $field = $this->registry->fieldAt($definition, $path);
            abort_unless($field && in_array($field['type'], ['image', 'video']), 422);
            $allowed = $field['type'] === 'image' ? 'jpg,jpeg,png,gif,webp' : 'mp4,webm';
            validator(['upload' => $file], ['upload' => ['file', 'mimes:'.$allowed, 'extensions:'.$allowed, 'max:51200']])->validate();
        }
        foreach ($files as $path => $file) {
            Arr::set($data, $path, app(MediaUploader::class)->store($file)->path);
        }
        $before = $entry->exists ? $entry->contentData($definition) : null;
        DB::transaction(function () use ($entry, $request, $definition, $module, $data, $before) {
            // Reject a stale tab instead of silently overwriting another editor's work.
            if ($entry->exists) {
                $current = $entry->newQuery()->lockForUpdate()->findOrFail($entry->id);
                abort_unless(hash_equals($current->editVersion(), (string) $request->input('version')), 409, 'This content changed since you opened it. Reload before saving.');
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

        return redirect()->route('admin.content.edit', [$module, $entry->id])->with('status', 'Content saved. Your changes are live on the public site.');
    }

    public function destroy(string $module, int $id)
    {
        $definition = $this->registry->get($module);
        abort_unless($definition['repeatable'], 403);
        $entry = ContentEntry::forModule($module)->newQuery()->findOrFail($id);
        DB::transaction(function () use ($entry, $module, $definition) {
            ContentAudit::create(['user_id' => auth()->id(), 'module' => $module, 'entry_id' => $entry->id, 'action' => 'deleted', 'before' => $entry->contentData($definition)]);
            $entry->delete();
        });
        app(ContentRepository::class)->forget($module);

        return back()->with('status', 'Moved to trash. You can restore it from this section’s trash view.');
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

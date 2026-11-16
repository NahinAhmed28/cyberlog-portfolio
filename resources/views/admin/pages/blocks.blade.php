<div class="d-flex gap-2 mb-3"><a class="btn btn-primary" href="{{ route('admin.blocks.create', $page) }}">Add section from library</a><a class="btn btn-outline-primary" href="{{ route('admin.pages.create') }}">Create service page</a></div>
<p class="text-muted">Sections follow the website from top to bottom. Drag the handle to reorder. Open a section to edit all its content.</p><p id="section-save-status" role="status"></p>
<div data-section-list>
@foreach($blocks->whereNull('deleted_at') as $block)
<details class="card mb-3" data-block-id="{{ $block->id }}" draggable="true">
<summary class="card-header"><span title="Drag to reorder">&#x2630;</span> <strong>{{ $block->title }}</strong> <span class="badge text-bg-light">{{ $block->is_visible ? 'Published' : 'Hidden' }}</span><span class="small text-muted ms-3">{{ Str::limit($block->data['heading'] ?? (($blockSections[$block->id] ?? collect())->flatMap(fn($s) => $s->contents->whereNull('deleted_at')->map(fn($e) => app(\App\Content\PageEditor::class)->preview($s, $e->data)))->first() ?? ''), 80) }}</span></summary>
<div class="card-body">
<div class="d-flex flex-wrap gap-2 mb-3">
@if($block->type !== 'legacy')<a class="btn btn-sm btn-primary" href="{{ route('admin.blocks.edit', [$page, $block]) }}">Edit section</a>@endif
<a class="btn btn-sm btn-outline-secondary" href="{{ url($page->path).'#'.$block->anchor }}" target="_blank" rel="noopener">View on website</a>
@foreach([$block->is_visible ? 'hide' : 'show' => $block->is_visible ? 'Hide' : 'Show', 'duplicate' => 'Duplicate', 'delete' => 'Delete'] as $action => $label)
<form method="post" action="{{ route('admin.blocks.action', [$page, $block->id]) }}" @if($action === 'delete') data-confirm="Move this section to trash?" @endif>@csrf<input type="hidden" name="action" value="{{ $action }}"><button class="btn btn-sm btn-outline-secondary">{{ $label }}</button></form>
@endforeach
</div>
@if($block->type === 'legacy')
<p class="small text-muted">This section uses the existing website content. Duplicated legacy sections share their text and items.</p>
@include('admin.pages.module-sections', ['moduleSections' => $blockSections[$block->id] ?? collect()])
@endif
</div></details>
@endforeach
</div>
@if($blocks->whereNotNull('deleted_at')->isNotEmpty())<details class="card mb-3"><summary class="card-header">Deleted sections (restore)</summary><div class="card-body">@foreach($blocks->whereNotNull('deleted_at') as $block)<form method="post" action="{{ route('admin.blocks.action', [$page, $block->id]) }}" class="mb-2">@csrf<input type="hidden" name="action" value="restore">{{ $block->title }} <button class="btn btn-sm btn-outline-primary">Restore</button></form>@endforeach</div></details>@endif
<details class="card mb-3"><summary class="card-header">SEO settings</summary><form class="card-body" action="{{ route('admin.pages.seo', $page) }}" method="post">@csrf @method('PUT')<label class="form-label" for="seo-title">SEO page title</label><input id="seo-title" name="seo_title" value="{{ old('seo_title', $page->seo_title) }}" class="form-control mb-3"><label class="form-label" for="seo-description">SEO meta description</label><textarea id="seo-description" name="seo_description" class="form-control mb-3">{{ old('seo_description', $page->seo_description) }}</textarea><button class="btn btn-primary">Save SEO settings</button></form></details>
@foreach($otherSections->groupBy('editor_category') as $category => $categorySections)
<details class="card mb-3"><summary class="card-header fw-semibold">{{ $category }}</summary><div class="card-body">
    @include('admin.pages.module-sections', ['moduleSections' => $categorySections])
</div></details>
@endforeach
@push('scripts')
<script>
(() => {
    let dragged;
    const list = document.querySelector('[data-section-list]');
    list.querySelectorAll('[data-block-id]').forEach(row => {
        row.addEventListener('dragstart', event => { if (event.target.closest('a,button,input,textarea')) return event.preventDefault(); dragged = row; });
        row.addEventListener('dragover', event => event.preventDefault());
        row.addEventListener('drop', async event => {
            event.preventDefault();
            if (!dragged || dragged === row) return;
            list.insertBefore(dragged, row);
            const status = document.getElementById('section-save-status'); status.textContent = 'Saving section order...';
            try {
                const response = await fetch({{ Illuminate\Support\Js::from(route('admin.blocks.reorder', $page)) }}, {method:'POST', headers:{'Content-Type':'application/json','Accept':'application/json','X-CSRF-TOKEN':{{ Illuminate\Support\Js::from(csrf_token()) }}}, body:JSON.stringify({ids:[...list.children].map(el => el.dataset.blockId)})});
                if (!response.ok) throw new Error();
                status.textContent = 'Section order saved.';
            } catch { status.textContent = 'Could not save order. Reload and try again.'; }
        });
    });
})();
</script>
@endpush

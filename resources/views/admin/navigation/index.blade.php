@extends('admin.layout')
@section('title', 'Navigation')
@section('content')
<div class="admin-page-heading"><div><h1>Navigation</h1><p class="text-muted">Edit the navbar, dropdown menus and submenu links.</p></div><a class="btn btn-primary" href="{{ route('admin.navigation.create') }}">+ Add menu item</a></div>
<a class="btn btn-primary mb-4" href="{{ route('admin.pages.create') }}">Create service page</a>
<a class="btn btn-outline-secondary mb-4" href="{{ route('admin.pages.show', 'navigation') }}">Logo & navigation settings</a>
<p class="text-muted">Use <strong>Add menu item</strong> for a top-level link, or <strong>Add submenu</strong> beneath a dropdown. The arrow buttons change the display order.</p>
<p id="menu-save-status" role="status"></p>
<a class="btn btn-sm btn-outline-secondary mb-2" href="{{ route('admin.navigation.create', ['insert_first' => 1]) }}">Insert item here (first)</a>
<div class="card"><div class="card-body">
@forelse($items as $root)
    @foreach(collect([$root])->concat($root->children) as $item)
        <div draggable="true" data-menu-item="{{ $item->id }}" data-parent="{{ $item->parent_id }}" class="d-flex justify-content-between align-items-center gap-3 border-bottom py-3 {{ $item->parent_id ? 'ms-4 ps-3 border-start' : '' }}">
            <div><span class="text-muted me-2" title="Drag to reorder">&#x2630;</span><strong>{{ $item->type === 'divider' ? '— Divider —' : $item->label }}</strong><div class="small text-muted">{{ $item->type }} · {{ $item->is_visible ? 'Published' : 'Hidden' }} · Order {{ $item->sort_order }} @if($item->type === 'link' || $item->type === 'button') · {{ $item->url }} @endif</div></div>
            <div class="d-flex flex-wrap gap-2">
                @if($item->type === 'dropdown')<a class="btn btn-sm btn-outline-primary" href="{{ route('admin.navigation.create', ['parent_id' => $item->id]) }}">+ Add submenu</a><a class="btn btn-sm btn-outline-secondary" href="{{ route('admin.navigation.create', ['parent_id' => $item->id, 'insert_first' => 1]) }}">Insert first submenu</a>@endif
                @foreach(['up' => 'Move up', 'down' => 'Move down'] as $direction => $label)<form method="post" action="{{ route('admin.navigation.move', $item) }}">@csrf<input type="hidden" name="direction" value="{{ $direction }}"><button class="btn btn-sm btn-outline-secondary" aria-label="{{ $label }}: {{ $item->label }}" title="{{ $label }}">{{ $direction === 'up' ? '↑' : '↓' }}</button></form>@endforeach
                <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.navigation.edit', $item) }}">Edit</a><form method="post" action="{{ route('admin.navigation.destroy', $item) }}" data-confirm="Delete this menu item and its submenus?">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Delete</button></form>
            </div>
        </div>
        <a class="btn btn-sm btn-link {{ $item->parent_id ? 'ms-4' : '' }}" href="{{ route('admin.navigation.create', ['parent_id' => $item->parent_id, 'after_id' => $item->id]) }}">Insert item here</a>
    @endforeach
@empty<p class="text-muted">No menu items yet. Add the first link above.</p>@endforelse
</div></div>
@endsection

@push('scripts')
<script>
(() => {
    let dragged;
    document.querySelectorAll('[data-menu-item]').forEach(row => {
        row.addEventListener('dragstart', event => { dragged = row; event.dataTransfer.effectAllowed = 'move'; });
        row.addEventListener('dragover', event => { if (dragged && dragged.dataset.parent === row.dataset.parent) event.preventDefault(); });
        row.addEventListener('drop', async event => {
            event.preventDefault();
            if (!dragged || dragged === row || dragged.dataset.parent !== row.dataset.parent) return;
            const ids = [...document.querySelectorAll('[data-menu-item]')].filter(el => el.dataset.parent === row.dataset.parent).map(el => el.dataset.menuItem);
            ids.splice(ids.indexOf(dragged.dataset.menuItem), 1);
            ids.splice(ids.indexOf(row.dataset.menuItem), 0, dragged.dataset.menuItem);
            const status = document.getElementById('menu-save-status');
            status.textContent = 'Saving menu order...';
            try {
                const response = await fetch({{ Illuminate\Support\Js::from(route('admin.navigation.reorder')) }}, {
                    method: 'POST', headers: {'Content-Type': 'application/json', 'Accept': 'application/json', 'X-CSRF-TOKEN': {{ Illuminate\Support\Js::from(csrf_token()) }}},
                    body: JSON.stringify({ids, parent_id: row.dataset.parent || null})
                });
                if (!response.ok) throw new Error();
                location.reload();
            } catch { status.textContent = 'Order could not be saved. Reload and try again.'; }
        });
    });
})();
</script>
@endpush

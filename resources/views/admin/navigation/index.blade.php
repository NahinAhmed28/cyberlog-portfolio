@extends('admin.layout')
@section('title', 'Navigation')
@section('content')
<div class="admin-page-heading"><div><h1>Navigation</h1><p class="text-muted">Edit the navbar, dropdown menus and submenu links.</p></div><a class="btn btn-primary" href="{{ route('admin.navigation.create') }}">+ Add menu item</a></div>
<a class="btn btn-outline-secondary mb-4" href="{{ route('admin.pages.show', 'navigation') }}">Logo & navigation settings</a>
<p class="text-muted">Use <strong>Add menu item</strong> for a top-level link, or <strong>Add submenu</strong> beneath a dropdown. The arrow buttons change the display order.</p>
<div class="card"><div class="card-body">
@forelse($items as $root)
    @foreach(collect([$root])->concat($root->children) as $item)
        <div class="d-flex justify-content-between align-items-center gap-3 border-bottom py-3 {{ $item->parent_id ? 'ms-4 ps-3 border-start' : '' }}">
            <div><strong>{{ $item->type === 'divider' ? '— Divider —' : $item->label }}</strong><div class="small text-muted">{{ $item->type }} · {{ $item->is_visible ? 'Published' : 'Hidden' }} · Order {{ $item->sort_order }} @if($item->type === 'link' || $item->type === 'button') · {{ $item->url }} @endif</div></div>
            <div class="d-flex flex-wrap gap-2">
                @if($item->type === 'dropdown')<a class="btn btn-sm btn-outline-primary" href="{{ route('admin.navigation.create', ['parent_id' => $item->id]) }}">+ Add submenu</a>@endif
                @foreach(['up' => 'Move up', 'down' => 'Move down'] as $direction => $label)<form method="post" action="{{ route('admin.navigation.move', $item) }}">@csrf<input type="hidden" name="direction" value="{{ $direction }}"><button class="btn btn-sm btn-outline-secondary" aria-label="{{ $label }}: {{ $item->label }}" title="{{ $label }}">{{ $direction === 'up' ? '↑' : '↓' }}</button></form>@endforeach
                <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.navigation.edit', $item) }}">Edit</a><form method="post" action="{{ route('admin.navigation.destroy', $item) }}" data-confirm="Delete this menu item and its submenus?">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Delete</button></form>
            </div>
        </div>
    @endforeach
@empty<p class="text-muted">No menu items yet. Add the first link above.</p>@endforelse
</div></div>
@endsection

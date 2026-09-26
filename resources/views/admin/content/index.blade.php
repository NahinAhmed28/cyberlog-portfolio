@extends('admin.layout')
@section('title', $definition['title'])
@section('content')
<div class="admin-page-heading"><div><p class="admin-eyebrow">{{ $definition['group'] }}</p><h1>{{ $definition['title'] }}</h1><p class="text-muted">{{ $definition['repeatable'] ? 'Manage items, their display order, and visibility.' : 'Update the text, links, and media in this section.' }}</p></div>
    @if($definition['repeatable'] || $entries->isEmpty())<a class="btn btn-primary" href="{{ route('admin.content.create', $module) }}">{{ $definition['repeatable'] ? '+ Add item' : 'Set up content' }}</a>@endif
</div>
@if($children->isNotEmpty())<div class="d-flex flex-wrap gap-2 mb-4">@foreach($children as $key => $child)<a class="btn btn-sm btn-outline-secondary" href="{{ route('admin.content.index', $key) }}">{{ $child['title'] }} →</a>@endforeach</div>@endif
@if($definition['repeatable'])<div class="mb-3"><a href="{{ route('admin.content.index', $module) }}" class="me-3">Current items</a><a href="{{ route('admin.content.index', [$module, 'trash' => 1]) }}">Trash</a></div>@endif
<div class="card"><div class="table-responsive"><table class="table align-middle mb-0"><thead><tr><th>Content</th><th>Order</th><th>Visibility</th><th class="text-end">Actions</th></tr></thead><tbody>
@forelse($entries as $entry)
    @php
        $row = $entry->contentData($definition);
        $display = collect($row)->filter(fn($value, $name) => is_string($value) && $value !== '' && !in_array($definition['fields'][$name]['type'], ['image','video','url','icon','color']))->first() ?: $definition['title'];
        $preview = collect($row)->filter(fn($value, $name) => $value && $definition['fields'][$name]['type'] === 'image')->first();
    @endphp
    <tr><td><div class="d-flex align-items-center gap-3">@if($preview)<img class="admin-thumb" src="{{ asset($preview) }}" alt="">@endif<div><strong>{{ \Illuminate\Support\Str::limit(strip_tags($display), 100) }}</strong><div class="small text-muted">Updated {{ $entry->updated_at->diffForHumans() }}</div></div></div></td><td>{{ $entry->sort_order }}</td><td><span class="badge {{ $entry->is_visible ? 'text-bg-success' : 'text-bg-secondary' }}">{{ $entry->is_visible ? 'Visible' : 'Hidden' }}</span></td><td><div class="d-flex justify-content-end gap-2">
        @if($entry->trashed())<form method="post" action="{{ route('admin.content.restore', [$module, $entry->id]) }}">@csrf<button class="btn btn-sm btn-outline-primary">Restore</button></form>
        @else<a class="btn btn-sm btn-outline-primary" href="{{ route('admin.content.edit', [$module, $entry->id]) }}">Edit</a>
            @if($definition['repeatable'])<form method="post" action="{{ route('admin.content.destroy', [$module, $entry->id]) }}" data-confirm="Move this item to trash?">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Trash</button></form>@endif
        @endif
    </div></td></tr>
@empty<tr><td colspan="4" class="text-center text-muted py-5">{{ request('trash') ? 'No items in the trash.' : 'No items yet. Add the first one to display it on the website.' }}</td></tr>@endforelse
</tbody></table></div></div>
<div class="mt-3">{{ $entries->links() }}</div>
@endsection

@extends('admin.layout')
@section('title', $page->title)
@section('content')
<div class="admin-page-heading">
    <div><h1>{{ $page->title }}</h1><p class="text-muted mb-0">Manage this {{ $page->kind === 'page' ? 'page' : 'area' }}'s text, images and content.</p></div>
    @if($page->path)<a class="btn btn-outline-secondary" href="{{ url($page->path) }}" target="_blank" rel="noopener">View page ↗</a>@endif
</div>
@if($page->slug === 'navigation')<a class="btn btn-primary mb-4" href="{{ route('admin.navigation.index') }}">Manage menus and submenus</a>@endif
<div class="alert alert-light border mb-4">Open a section and choose <strong>Edit</strong> to change its text or links. Use <strong>Add item</strong> for another card. Changes appear on your website when you save.</div>
<div class="d-flex flex-wrap gap-2 mb-4"><a class="btn btn-outline-primary" href="#page-media" data-open-panel="page-media">Images, videos & logos</a><a class="btn btn-outline-secondary" href="{{ route('admin.navigation.index') }}">Edit menus & submenus</a><a class="btn btn-outline-secondary" href="{{ route('admin.pages.show', 'footer') }}">Edit footer</a></div>
@include('admin.pages.media')
<div class="mb-4"><label class="form-label" for="page-section-search">Find content on this page</label><input id="page-section-search" class="form-control" placeholder="Search sections…" data-page-search></div>
@foreach($sections->groupBy(fn($section) => app(\App\Content\PageEditor::class)->group($section, $page)) as $groupName => $group)
    @if($groupName !== 'Page content')<details class="mt-4"><summary class="text-muted mb-3">{{ $groupName }}</summary>@endif
    @foreach($group as $section)
        @php
            $definition = config('content_modules.'.$section->key);
        @endphp
        <details class="card mb-3 page-content-section" data-page-section id="section-{{ $section->key }}">
            <summary class="card-header d-flex justify-content-between align-items-center gap-3"><span class="fw-semibold">{{ $section->editor_title }}</span><span class="badge text-bg-light">{{ $section->contents->whereNull('deleted_at')->count() }} {{ $definition['repeatable'] ? 'items' : 'record' }}</span></summary>
            <div class="card-body">
                @if($section->pages->count() > 1)<p class="small text-muted">Shared content: changes also appear on other pages using this section.</p>@endif
                @foreach($section->contents as $entry)
                    @php
                        $data = $entry->contentData($definition);
                        $label = collect($data)->filter(fn($value, $name) => is_string($value) && $value !== '' && !in_array($definition['fields'][$name]['type'], ['image','video','url','icon','color']))->first() ?: $section->editor_title;
                    @endphp
                    <div class="d-flex justify-content-between align-items-center gap-3 border-bottom py-3">
                        <div><strong>{{ Str::limit(strip_tags($label), 100) }}</strong><div class="small text-muted">{{ $entry->trashed() ? 'In trash' : ($entry->is_visible ? 'Published' : 'Hidden') }}</div></div>
                        <div class="d-flex gap-2 flex-shrink-0">
                            @if($entry->trashed())
                                <form method="post" action="{{ route('admin.content.restore', [$section->key, $entry->id]) }}">@csrf<button class="btn btn-sm btn-outline-primary">Restore</button></form>
                            @else
                                <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.content.edit', [$section->key, $entry->id, 'page' => $page->slug]) }}">Edit</a>
                                <form method="post" action="{{ route('admin.content.destroy', [$section->key, $entry->id]) }}" data-confirm="Move this content to trash?">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Delete</button></form>
                            @endif
                        </div>
                    </div>
                @endforeach
                @if($definition['repeatable'] || $section->contents->isEmpty())
                    <a class="btn btn-primary btn-sm mt-3" href="{{ route('admin.content.create', [$section->key, 'page' => $page->slug]) }}">+ Add {{ $definition['repeatable'] ? 'item' : 'content' }}</a>
                @endif
            </div>
        </details>
    @endforeach
    @if($groupName !== 'Page content')</details>@endif
@endforeach
@endsection

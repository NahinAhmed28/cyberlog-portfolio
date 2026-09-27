@extends('admin.layout')
@section('title', $definition['title'])
@section('content')
<a href="{{ route('admin.pages.show', $page) }}" class="small">← Back to {{ $page->title }}</a>
<div class="admin-page-heading mt-3"><div><p class="admin-eyebrow">{{ $definition['group'] }}</p><h1>{{ $entry->exists ? 'Edit' : 'Add to' }} {{ $definition['title'] }}</h1><p class="text-muted">{{ $definition['title'] }}</p></div></div>
<form method="post" enctype="multipart/form-data" action="{{ $entry->exists ? route('admin.content.update', [$module, $entry->id]) : route('admin.content.store', $module) }}" data-content-form>
    <input type="hidden" name="page" value="{{ $page->slug }}">
    @csrf @if($entry->exists) @method('PUT') @endif
    <input type="hidden" name="version" value="{{ $entry->exists ? $entry->editVersion() : '' }}">
    <div class="row g-4">
        <div class="col-xl-9"><div class="card card-body admin-fields">
            @php($formData = old('data', $data))
            @foreach(collect($definition['fields'])->groupBy(fn($field, $key) => app(\App\Content\PageEditor::class)->advanced($key, $field), preserveKeys: true)->sortKeys() as $advanced => $fields)
                @if($advanced)<details class="border rounded p-3 mt-3"><summary class="fw-semibold mb-3">Design settings (optional)</summary><p class="small text-muted">These settings affect appearance. You can leave them as they are when changing text, links or images.</p>@endif
            @foreach($fields as $key => $field)
                @if($module === 'nav' && ! in_array($key, ['img_media', 'img_alt', 'button_label', 'icon', 'destination']))
                    <input type="hidden" name="data[{{ $key }}]" value="{{ $formData[$key] ?? '' }}">
                @else
                @include('admin.content.field', ['field' => $field, 'name' => 'data['.$key.']', 'path' => $key, 'value' => $formData[$key] ?? app(\App\Content\ContentRegistry::class)->emptyValue($field)])
                @endif
            @endforeach
                @if($advanced)</details>@endif
            @endforeach
        </div></div>
        <div class="col-xl-3"><div class="card card-body admin-save-panel">
            <h2 class="h6">Publishing</h2><p class="small text-muted">Saving updates this content on the live website.</p>
            <label class="form-label" for="sort-order">Position in the list</label><input type="number" min="0" max="1000000" id="sort-order" class="form-control mb-3" name="sort_order" value="{{ old('sort_order', $entry->sort_order ?? 100) }}" required>
            <p class="form-text">Smaller numbers appear first.</p>
            <input type="hidden" name="is_visible" value="{{ $definition['repeatable'] ? 0 : 1 }}">
            @if($definition['repeatable'])<div class="form-check mb-4"><input class="form-check-input" type="checkbox" name="is_visible" value="1" id="is-visible" @checked(old('is_visible', $entry->is_visible ?? true))><label for="is-visible" class="form-check-label">Show on website</label></div>@endif
            <button class="btn btn-primary" type="submit">Save changes</button><a class="btn btn-link mt-2" href="{{ route('admin.pages.show', $page) }}">Cancel</a>
            <span class="small text-muted mt-3" data-dirty-status></span>
        </div></div>
    </div>
</form>
<datalist id="media-library">@foreach($media as $asset)<option value="{{ $asset->path }}">{{ $asset->name }}</option>@endforeach</datalist>
@endsection

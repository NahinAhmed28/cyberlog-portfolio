@extends('admin.layout')
@section('title', $page->title.' - Section editor')
@section('content')
<h1>{{ $page->title }} &rsaquo; {{ $block->title ?: 'Add section' }}</h1>
<form method="post" enctype="multipart/form-data" action="{{ $block->exists ? route('admin.blocks.update', [$page, $block]) : route('admin.blocks.store', $page) }}" data-content-form>
@csrf @if($block->exists) @method('PUT') @endif
<div class="card card-body mb-4">
<label for="block-title" class="form-label">Section name in the editor</label><input id="block-title" name="title" value="{{ old('title', $block->title) }}" required class="form-control mb-3">
<label for="block-type" class="form-label">Section layout</label><select id="block-type" name="type" class="form-select mb-3">@foreach(config('section_library.types') as $key => $label)<option value="{{ $key }}" @selected(old('type', $block->type) === $key)>{{ $label }}</option>@endforeach</select>
<label for="block-order" class="form-label">Position on this page</label><input id="block-order" type="number" name="sort_order" value="{{ old('sort_order', $block->sort_order) }}" class="form-control mb-3" required min="0" max="1000000">
<input type="hidden" name="is_visible" value="0"><label><input type="checkbox" name="is_visible" value="1" @checked(old('is_visible', $block->is_visible))> Show section on website</label>
</div>
<div class="card card-body">@foreach($definition['fields'] as $key => $field)
@include('admin.content.field', ['field' => $field, 'name' => 'data['.$key.']', 'path' => $key, 'value' => old('data.'.$key, $data[$key] ?? null)])
@endforeach</div><button class="btn btn-primary mt-3">Save section</button>
</form>
@endsection

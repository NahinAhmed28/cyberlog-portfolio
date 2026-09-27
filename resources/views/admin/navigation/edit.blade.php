@extends('admin.layout')
@section('title', 'Edit navigation')
@section('content')
<a href="{{ route('admin.navigation.index') }}">← Navigation</a>
<h1 class="my-4">{{ $item->exists ? 'Edit' : 'Add' }} menu item</h1>
<p class="text-muted">A main menu appears at the top of the website. A submenu appears beneath a dropdown such as Services or Company.</p>
<form method="post" action="{{ $item->exists ? route('admin.navigation.update', $item) : route('admin.navigation.store') }}" class="card card-body admin-account-form" data-content-form>
@csrf @if($item->exists) @method('PUT') @endif
<label class="form-label" for="nav-label">Label</label><input id="nav-label" name="label" class="form-control mb-3" value="{{ old('label', $item->label) }}" required maxlength="255">
<label class="form-label" for="nav-parent">Location</label><select id="nav-parent" name="parent_id" class="form-select mb-3"><option value="">Main navbar</option>@foreach($parents as $parent)<option value="{{ $parent->id }}" @selected(old('parent_id', $item->parent_id) == $parent->id)>Under {{ $parent->label }}</option>@endforeach</select>
<label class="form-label" for="nav-type">Type</label><select id="nav-type" name="type" class="form-select mb-3">@foreach(['link' => 'Link', 'dropdown' => 'Dropdown menu', 'button' => 'Button', 'divider' => 'Submenu divider'] as $value => $label)<option value="{{ $value }}" @selected(old('type', $item->type) === $value)>{{ $label }}</option>@endforeach</select>
<div class="mb-3">@include('admin.content.link-input', ['inputId' => 'nav-url', 'name' => 'url', 'value' => old('url', $item->url)])</div>
<p class="form-text">Dropdown headings and dividers do not need a destination; use # for those items.</p>
<label class="form-label" for="nav-order">Display order</label><input id="nav-order" name="sort_order" type="number" min="0" max="1000000" class="form-control mb-3" value="{{ old('sort_order', $item->sort_order) }}" required>
@foreach(['is_visible' => 'Show on website', 'new_tab' => 'Open link in a new tab'] as $field => $label)<input type="hidden" name="{{ $field }}" value="0"><div class="form-check mb-3"><input id="nav-{{ $field }}" class="form-check-input" type="checkbox" name="{{ $field }}" value="1" @checked(old($field, $item->$field))><label class="form-check-label" for="nav-{{ $field }}">{{ $label }}</label></div>@endforeach
<button class="btn btn-primary">Save menu item</button>
</form>
@endsection

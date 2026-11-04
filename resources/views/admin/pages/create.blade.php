@extends('admin.layout')
@section('title', 'Create service page')
@section('content')
<h1>Create service page</h1><form method="post" action="{{ route('admin.pages.store') }}" class="card card-body">@csrf
@foreach(['title' => 'Service page title', 'slug' => 'URL slug (lowercase words separated by hyphens)', 'seo_title' => 'SEO page title', 'seo_description' => 'SEO meta description'] as $key => $label)
<label for="page-{{ $key }}" class="form-label">{{ $label }}</label><input id="page-{{ $key }}" name="{{ $key }}" value="{{ old($key) }}" class="form-control mb-3" @required(in_array($key, ['title','slug']))>
@endforeach<button class="btn btn-primary">Create service page</button></form>
@endsection

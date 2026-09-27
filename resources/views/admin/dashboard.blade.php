@extends('admin.layout')
@section('title', 'Pages')
@section('content')
<div class="admin-page-heading"><div><h1>Your portfolio pages</h1><p class="text-muted">Choose a page to manage its content. Menus and footer have their own editors.</p></div></div>
<div class="d-flex flex-wrap gap-2 mb-4">
    <a class="btn btn-outline-secondary" href="{{ route('admin.navigation.index') }}">Navigation & submenus</a>
    <a class="btn btn-outline-secondary" href="{{ route('admin.pages.show', 'footer') }}">Footer</a>
    <a class="btn btn-outline-secondary" href="{{ route('admin.media.index') }}">Media library &middot; {{ $mediaCount }}</a>
    <a class="btn btn-outline-secondary" href="{{ route('admin.inquiries.index') }}">New inquiries &middot; {{ $newInquiries }}</a>
</div>
<div class="admin-page-grid">
@foreach($pages as $page)
    <a class="card admin-page-card" data-page-card href="{{ route('admin.pages.show', $page) }}"><h2 class="h5 mb-2">{{ $page->title }}</h2><p class="small text-muted mb-3">{{ $page->path }}</p><span class="small">Manage page &rarr;</span></a>
@endforeach
</div>
<div class="card mt-4"><div class="card-header"><h2 class="h6 mb-0">Recent changes</h2></div><div class="card-body">
@forelse($recent as $audit)<p class="small mb-2"><strong>{{ config('content_modules.'.$audit->module.'.title', $audit->module) }}</strong> &middot; {{ ucfirst($audit->action) }} by {{ $audit->user?->name ?? 'Administrator' }} &middot; {{ $audit->created_at->diffForHumans() }}</p>@empty<p class="text-muted mb-0">Your saved content changes appear here.</p>@endforelse
</div></div>
@endsection

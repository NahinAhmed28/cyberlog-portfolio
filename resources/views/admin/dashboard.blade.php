@extends('admin.layout')
@section('title', 'Overview')
@section('content')
<div class="admin-page-heading"><div><p class="admin-eyebrow">Your website, in one place</p><h1>Content overview</h1><p class="text-muted">Choose a page or feature to update its copy, media, and repeating content.</p></div></div>
<div class="row g-3 mb-4">
    <div class="col-md-4"><div class="card card-body"><span class="text-muted">Content sections</span><strong class="fs-2">{{ $modules->flatten(1)->count() }}</strong></div></div>
    <div class="col-md-4"><a class="card card-body text-decoration-none" href="{{ route('admin.media.index') }}"><span class="text-muted">Media assets</span><strong class="fs-2">{{ $mediaCount }}</strong></a></div>
    <div class="col-md-4"><a class="card card-body text-decoration-none" href="{{ route('admin.inquiries.index') }}"><span class="text-muted">New inquiries</span><strong class="fs-2">{{ $newInquiries }}</strong></a></div>
</div>
<div class="row g-4">
    <div class="col-xl-8">
        <label for="module-search" class="form-label">Find content</label><input class="form-control mb-4" id="module-search" data-module-search placeholder="Search pages, logos, pricing, testimonials…">
        @foreach($modules as $group => $definitions)
            <section class="card mb-3" data-module-group>
                <div class="card-header"><h2 class="h6 mb-0">{{ $group }}</h2></div>
                <div class="list-group list-group-flush">
                    @foreach($definitions as $key => $definition)
                        <a class="list-group-item list-group-item-action d-flex justify-content-between gap-3 py-3" data-module-item href="{{ route('admin.content.index', $key) }}"><span>{{ $definition['title'] }}</span><span class="badge rounded-pill {{ $definition['repeatable'] ? 'text-bg-light' : 'text-bg-secondary' }}">{{ $definition['repeatable'] ? 'Collection' : 'Page copy' }}</span></a>
                    @endforeach
                </div>
            </section>
        @endforeach
    </div>
    <div class="col-xl-4"><div class="card"><div class="card-header"><h2 class="h6 mb-0">Recent changes</h2></div><div class="card-body">
        @forelse($recent as $audit)
            <div class="border-bottom pb-3 mb-3"><strong class="d-block small">{{ config('content_modules.'.$audit->module.'.title', $audit->module) }}</strong><span class="small text-muted">{{ ucfirst($audit->action) }} by {{ $audit->user?->name ?? 'Administrator' }}<br>{{ $audit->created_at->diffForHumans() }}</span></div>
        @empty<p class="text-muted mb-0">Changes made in the admin panel will appear here.</p>@endforelse
    </div></div></div>
</div>
@endsection

@extends('admin.layout')
@section('title', 'Media library')
@section('content')
<div class="admin-page-heading"><div><p class="admin-eyebrow">Images, logos & video</p><h1>Media library</h1><p class="text-muted">Upload files here or replace them directly while editing a section.</p></div></div>
<div class="card card-body mb-4"><form method="post" enctype="multipart/form-data" action="{{ route('admin.media.store') }}" class="row g-3 align-items-end">@csrf<div class="col-md-9"><label for="new-file" class="form-label">Image or video · up to 50 MB</label><input class="form-control" id="new-file" type="file" name="file" accept=".jpg,.jpeg,.png,.gif,.webp,.mp4,.webm" required></div><div class="col-md-3"><button class="btn btn-primary w-100">Upload file</button></div></form></div>
<form class="d-flex gap-2 mb-4"><input class="form-control" type="search" aria-label="Find media" name="search" value="{{ request('search') }}" placeholder="Search by filename"><button class="btn btn-outline-secondary">Search</button></form>
<div class="row g-3">
@forelse($media as $asset)<div class="col-sm-6 col-lg-4 col-xl-3"><article class="card h-100">
    @if(str_starts_with($asset->mime_type ?? '', 'video/'))<video class="admin-library-preview" src="{{ asset($asset->path) }}" controls preload="metadata"></video>@else<img class="admin-library-preview" src="{{ asset($asset->path) }}" alt="{{ $asset->name }}" loading="lazy">@endif
    <div class="card-body"><h2 class="h6 text-break">{{ $asset->name }}</h2><input class="form-control form-control-sm mb-2" value="{{ $asset->path }}" readonly aria-label="Media path" onclick="this.select()"><span class="small text-muted">{{ $asset->is_uploaded ? 'Uploaded' : 'Default asset' }}</span>
        @if($asset->is_uploaded)<form class="mt-3" method="post" action="{{ route('admin.media.destroy', $asset) }}" data-confirm="Delete this unused upload? This removes its file.">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Delete unused file</button></form>@endif
    </div></article></div>@empty<div class="col"><p class="text-muted">No media found.</p></div>@endforelse
</div><div class="mt-4">{{ $media->links() }}</div>
@endsection

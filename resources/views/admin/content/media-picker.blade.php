<div class="modal fade" id="media-picker" tabindex="-1" aria-labelledby="media-picker-title" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable"><div class="modal-content">
        <div class="modal-header"><h2 class="modal-title fs-5" id="media-picker-title">Choose an image, logo or video</h2><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
        <div class="modal-body">
            <label class="form-label" for="media-picker-search">Find a file</label><input id="media-picker-search" class="form-control mb-4" placeholder="Search by file name" data-media-search>
            <div class="admin-media-grid">
                @foreach($media as $asset)
                    @php($isVideo = str_starts_with($asset->mime_type ?? '', 'video/'))
                    <button type="button" class="admin-media-choice" data-media-choice data-type="{{ $isVideo ? 'video' : 'image' }}" data-path="{{ $asset->path }}" data-url="{{ asset($asset->path) }}" data-name="{{ $asset->name }}">
                        @if($isVideo)<video src="{{ asset($asset->path) }}" preload="none" muted></video><span class="badge text-bg-secondary">Video</span>
                        @else<img src="{{ asset($asset->path) }}" alt="" loading="lazy">@endif
                        <span class="d-block small mt-2 text-break">{{ $asset->name }}</span>
                    </button>
                @endforeach
            </div>
            <p class="text-muted small mt-3" data-media-empty hidden>No matching files. Close this window to upload a new file.</p>
        </div>
    </div></div>
</div>

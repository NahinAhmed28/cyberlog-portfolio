<div data-media-field data-media-type="{{ $type }}">
    <div class="admin-media-current mb-3" data-media-preview>
        @if($value)
            @if($type === 'video')<video src="{{ asset($value) }}" controls preload="metadata" class="admin-media-preview"></video>
            @else<img src="{{ asset($value) }}" alt="Current image" class="admin-media-preview">@endif
        @else<span class="text-muted small">No {{ $type === 'video' ? 'video' : 'image' }} selected yet.</span>@endif
    </div>
    <div class="d-flex flex-wrap gap-2 mb-3"><button type="button" class="btn btn-sm btn-outline-primary" data-choose-media>Choose from media library</button></div>
    <label class="form-label small" for="{{ $inputId }}-upload">Or upload a new {{ $type === 'video' ? 'video' : 'image or logo' }}</label>
    <input id="{{ $inputId }}-upload" type="file" class="form-control form-control-sm" name="{{ $uploadName }}" accept="{{ $type === 'image' ? '.jpg,.jpeg,.png,.gif,.webp' : '.mp4,.webm' }}" data-media-upload>
    <div class="form-text mb-2">{{ $type === 'image' ? 'JPG, PNG, GIF or WebP' : 'MP4 or WebM' }}, up to 50 MB. Click Save to apply your choice.</div>
    <div class="small text-muted" data-media-selection>{{ $value ? basename($value) : '' }}</div>
    <details class="mt-3"><summary class="small text-muted">Use a web address or file path instead</summary><label class="visually-hidden" for="{{ $inputId }}">Media address</label><input id="{{ $inputId }}" name="{{ $name }}" value="{{ $value }}" class="form-control mt-2" data-media-path></details>
</div>

<details class="card mb-4" id="page-media">
    <summary class="card-header fw-semibold">Images, videos & logos <span class="badge text-bg-light ms-2">{{ count($pageMedia) }}</span></summary>
    <div class="card-body">
        <p class="text-muted">Choose the picture or video you want to change, then upload a replacement or select an existing file. Change and save one file at a time. Each Save button changes only that file.</p>
        <label class="form-label" for="page-media-search">Find an image, logo or video on this page</label><input id="page-media-search" class="form-control mb-4" placeholder="Search by section or item name" data-page-media-search>
        <div class="admin-page-media-grid">
            @foreach($pageMedia as $item)
                <form class="card card-body page-media-item" data-page-media-item data-media-description="{{ $item['title'].' '.$item['section']->editor_title.' '.$item['role'].' '.basename($item['value']) }}" method="post" enctype="multipart/form-data" action="{{ route('admin.pages.media', [$page, $item['entry']]) }}">
                    @csrf @method('PUT')
                    <input type="hidden" name="field_path" value="{{ $item['path'] }}"><input type="hidden" name="version" value="{{ $item['entry']->editVersion() }}">
                    <h3 class="h6">{{ $item['title'] }}</h3><p class="small text-muted">{{ $item['section']->editor_title }} &middot; {{ $item['role'] }}</p>
                    @if($item['section']->pages->where('kind', 'page')->count() > 1)<p class="small alert alert-info py-2">Used on more than one page. Replacing it updates those pages too.</p>@endif
                    @include('admin.content.media-input', ['type' => $item['field']['type'], 'value' => $item['value'], 'name' => 'media_value', 'uploadName' => 'file', 'inputId' => 'page-media-'.$item['entry']->id.'-'.md5($item['path'])])
                    <button class="btn btn-primary btn-sm mt-3">Save {{ $item['field']['type'] === 'video' ? 'video' : 'image / logo' }}</button>
                </form>
            @endforeach
        </div>
        @if(!count($pageMedia))<p class="text-muted">This page has no image or video fields yet. Add an item in the relevant section below to include one.</p>@endif
    </div>
</details>

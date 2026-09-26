@php($inputId = 'field-'.md5($name))
@if($field['type'] === 'object')
    <fieldset class="admin-object mb-4"><legend class="h6">{{ $field['label'] }}</legend>
        @foreach($field['fields'] as $childKey => $childField)
            @include('admin.content.field', ['field' => $childField, 'name' => $name.'['.$childKey.']', 'path' => $path.'.'.$childKey, 'value' => $value[$childKey] ?? app(\App\Content\ContentRegistry::class)->emptyValue($childField)])
        @endforeach
    </fieldset>
@elseif($field['type'] === 'list')
    @php($token = '__ITEM_'.md5($path).'__')
    <fieldset class="admin-list mb-4" data-list data-token="{{ $token }}" data-next="{{ count($value ?? []) }}"><legend class="h6">{{ $field['label'] }}</legend>
        <div data-list-items>
            @foreach($value ?? [] as $itemIndex => $itemValue)
                <div class="admin-list-item" data-list-item>
                    <div class="admin-list-tools"><button type="button" class="btn btn-sm btn-outline-secondary" data-move="up" aria-label="Move up">↑</button><button type="button" class="btn btn-sm btn-outline-secondary" data-move="down" aria-label="Move down">↓</button><button type="button" class="btn btn-sm btn-outline-danger" data-remove>Remove</button></div>
                    @include('admin.content.field', ['field' => $field['item'], 'name' => $name.'['.$itemIndex.']', 'path' => $path.'.'.$itemIndex, 'value' => $itemValue])
                </div>
            @endforeach
        </div>
        <template data-list-template><div class="admin-list-item" data-list-item><div class="admin-list-tools"><button type="button" class="btn btn-sm btn-outline-secondary" data-move="up" aria-label="Move up">↑</button><button type="button" class="btn btn-sm btn-outline-secondary" data-move="down" aria-label="Move down">↓</button><button type="button" class="btn btn-sm btn-outline-danger" data-remove>Remove</button></div>
            @include('admin.content.field', ['field' => $field['item'], 'name' => $name.'['.$token.']', 'path' => $path.'.'.$token, 'value' => app(\App\Content\ContentRegistry::class)->emptyValue($field['item'])])
        </div></template>
        <button type="button" class="btn btn-sm btn-outline-primary" data-add>+ Add {{ strtolower($field['item']['label'] ?: 'item') }}</button>
    </fieldset>
@else
    <div class="mb-4" @if(in_array($field['type'], ['image','video'])) data-media-field @endif>
        <label class="form-label" for="{{ $inputId }}">{{ $field['label'] }}</label>
        @if($field['type'] === 'boolean')
            <select id="{{ $inputId }}" name="{{ $name }}" class="form-select"><option value="0" @selected(!$value)>No</option><option value="1" @selected($value)>Yes</option></select>
        @elseif(in_array($field['type'], ['textarea', 'richtext']))
            <textarea id="{{ $inputId }}" class="form-control" name="{{ $name }}" rows="{{ $field['type'] === 'richtext' ? 5 : 3 }}">{{ $value }}</textarea>
            @if($field['type'] === 'richtext')<div class="form-text">Basic formatting supported: paragraphs, spans, bold, emphasis, and lists. Scripts and embedded HTML are removed.</div>@endif
        @else
            <input id="{{ $inputId }}" class="form-control" type="{{ $field['type'] === 'number' ? 'number' : 'text' }}" @if($field['type'] === 'number') step="any" @endif name="{{ $name }}" value="{{ $value }}" @if(in_array($field['type'], ['image','video'])) list="media-library" data-media-path @endif>
            @if(in_array($field['type'], ['image','video']))
                <div class="mt-2 d-flex flex-wrap gap-3 align-items-center">
                    @if($value && $field['type'] === 'image')<img class="admin-media-preview" src="{{ asset($value) }}" alt="Current image">@endif
                    @if($value && $field['type'] === 'video')<video class="admin-media-preview" src="{{ asset($value) }}" controls preload="metadata"></video>@endif
                    <div><label class="form-label small" for="{{ $inputId }}-upload">Upload a replacement</label><input id="{{ $inputId }}-upload" type="file" class="form-control form-control-sm" name="{{ preg_replace('/^data/', 'uploads', $name) }}" accept="{{ $field['type'] === 'image' ? '.jpg,.jpeg,.png,.gif,.webp' : '.mp4,.webm' }}"><div class="form-text">Choose a library path above, paste a URL, or upload a file (up to 50 MB).</div></div>
                </div>
            @elseif($field['type'] === 'icon')<div class="form-text">Font Awesome classes, for example: fas fa-shield-halved.</div>
            @elseif($field['type'] === 'url')<div class="form-text">Use a full URL, a site path such as /contact, or an anchor such as #calculator.</div>@endif
        @endif
    </div>
@endif

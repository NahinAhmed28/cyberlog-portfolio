@php($inputId = 'field-'.preg_replace('/[^a-zA-Z0-9_-]/', '-', $name))
@if($field['type'] === 'object')
    <fieldset class="admin-object mb-4"><legend class="h6">{{ app(\App\Content\PageEditor::class)->label($field, $path) }}</legend>
        @foreach($field['fields'] as $childKey => $childField)
            @include('admin.content.field', ['field' => $childField, 'name' => $name.'['.$childKey.']', 'path' => $path.'.'.$childKey, 'value' => $value[$childKey] ?? app(\App\Content\ContentRegistry::class)->emptyValue($childField)])
        @endforeach
    </fieldset>
@elseif($field['type'] === 'list')
    @php($token = '__ITEM_'.md5($path).'__')
    <fieldset class="admin-list mb-4" data-list data-token="{{ $token }}" data-next="{{ count($value ?? []) }}"><legend class="h6">{{ app(\App\Content\PageEditor::class)->label($field, $path) }}</legend>
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
    <div class="mb-4">
        <label class="form-label" for="{{ $inputId }}">{{ app(\App\Content\PageEditor::class)->label($field, $path) }}</label>
        @if(in_array($field['type'], ['image', 'video']))
            @include('admin.content.media-input', ['type' => $field['type'], 'uploadName' => preg_replace('/^data/', 'uploads', $name)])
        @elseif($field['type'] === 'url')
            @include('admin.content.link-input')
        @elseif(($module ?? '') === 'services' && $path === 'group')
            <select id="{{ $inputId }}" name="{{ $name }}" class="form-select">@foreach(['primary' => 'Main services', 'offensive' => 'Offensive security', 'defensive' => 'Defensive security'] as $category => $label)<option value="{{ $category }}" @selected($value === $category)>{{ $label }}</option>@endforeach</select>
        @elseif($field['type'] === 'boolean')
            <select id="{{ $inputId }}" name="{{ $name }}" class="form-select"><option value="0" @selected(!$value)>No</option><option value="1" @selected($value)>Yes</option></select>
        @elseif($field['type'] === 'richtext')
            <div data-rich-field>
                <div class="btn-group btn-group-sm mb-2" role="group" aria-label="Text formatting">@foreach(['bold' => 'Bold', 'italic' => 'Italic', 'insertUnorderedList' => 'Bullet list', 'insertOrderedList' => 'Numbered list', 'removeFormat' => 'Clear formatting'] as $command => $label)<button type="button" class="btn btn-outline-secondary" data-rich-command="{{ $command }}">{{ $label }}</button>@endforeach</div>
                <div class="form-control admin-rich-editor" contenteditable="true" role="textbox" aria-multiline="true" aria-label="{{ app(\App\Content\PageEditor::class)->label($field, $path) }}" data-rich-editor>{!! \App\Content\SafeContent::html($value ?? '') !!}</div>
                <details class="mt-2"><summary class="small text-muted">HTML source (advanced)</summary><textarea id="{{ $inputId }}" class="form-control mt-2" name="{{ $name }}" rows="4" data-rich-source>{{ $value }}</textarea></details>
            </div>
        @elseif($field['type'] === 'textarea')
            <textarea id="{{ $inputId }}" class="form-control" name="{{ $name }}" rows="3">{{ $value }}</textarea>
        @else
            <input id="{{ $inputId }}" class="form-control" type="{{ $field['type'] === 'number' ? 'number' : 'text' }}" @if($field['type'] === 'number') step="any" @endif name="{{ $name }}" value="{{ $value }}" @if(in_array($field['type'], ['image','video'])) list="media-library" data-media-path @endif>
            @if($field['type'] === 'icon')<div class="form-text">Font Awesome classes, for example: fas fa-shield-halved.</div>
            @elseif($field['type'] === 'url')<div class="form-text">Use a full URL, a site path such as /contact, or an anchor such as #calculator.</div>@endif
        @endif
    </div>
@endif

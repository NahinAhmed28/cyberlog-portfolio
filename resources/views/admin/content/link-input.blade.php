<div data-link-field>
    <label class="form-label small" for="{{ $inputId }}-page">Choose a page on this website</label>
    <select id="{{ $inputId }}-page" class="form-select mb-2" data-link-page>
        <option value="">Another website, email, phone or custom link</option>
        @foreach(app(\App\Content\PageEditor::class)->pages() as $linkPage)<option value="{{ $linkPage->path }}" @selected($value === $linkPage->path || $value === url($linkPage->path))>{{ $linkPage->title }}</option>@endforeach
    </select>
    <label class="form-label small" for="{{ $inputId }}">Web address or link</label><input id="{{ $inputId }}" class="form-control" name="{{ $name }}" value="{{ $value }}" data-link-url>
    <div class="form-text">For another website, paste its full address. For email, use mailto:name@example.com; for phone, use tel:+123456789.</div>
</div>

(() => {
    'use strict';
    document.querySelectorAll('[data-confirm]').forEach(form => form.addEventListener('submit', event => {
        if (!window.confirm(form.dataset.confirm)) event.preventDefault();
    }));
    function search(input, itemSelector, groupSelector) {
        input?.addEventListener('input', () => {
            const query = input.value.trim().toLowerCase();
            document.querySelectorAll(itemSelector).forEach(item => { item.hidden = !item.textContent.toLowerCase().includes(query); });
            document.querySelectorAll(groupSelector).forEach(group => {
                group.hidden = !Array.from(group.querySelectorAll(itemSelector)).some(item => !item.hidden);
                if (query && group.tagName === 'DETAILS') group.open = true;
            });
        });
    }
    search(document.querySelector('[data-nav-search]'), '[data-nav-item]', '.admin-nav-group');
    search(document.querySelector('[data-module-search]'), '[data-module-item]', '[data-module-group]');
    let dirty = false;
    const form = document.querySelector('[data-content-form]');
    function markDirty() {
        dirty = true;
        const status = document.querySelector('[data-dirty-status]');
        if (status) status.textContent = 'You have unsaved changes.';
    }
    form?.addEventListener('input', markDirty);
    form?.addEventListener('change', markDirty);
    form?.addEventListener('submit', () => { dirty = false; });
    window.addEventListener('beforeunload', event => {
        if (dirty) { event.preventDefault(); event.returnValue = ''; }
    });
    document.addEventListener('click', event => {
        const button = event.target.closest('[data-add], [data-remove], [data-move]');
        if (!button) return;
        const list = button.closest('[data-list]');
        if (!list) return;
        const items = list.querySelector(':scope > [data-list-items]');
        if (button.hasAttribute('data-add')) {
            if (items.children.length >= 100) return;
            const template = list.querySelector(':scope > template');
            const index = Number(list.dataset.next || 0);
            list.dataset.next = index + 1;
            const holder = document.createElement('template');
            holder.innerHTML = template.innerHTML.replaceAll(list.dataset.token, String(index));
            items.append(holder.content.cloneNode(true));
        } else {
            const item = button.closest('[data-list-item]');
            if (button.hasAttribute('data-remove')) item.remove();
            else if (button.dataset.move === 'up' && item.previousElementSibling) items.insertBefore(item, item.previousElementSibling);
            else if (button.dataset.move === 'down' && item.nextElementSibling) items.insertBefore(item.nextElementSibling, item);
        }
        markDirty();
    });
})();

// Filter the current page's sections without expanding the global sidebar.
document.querySelector('[data-page-search]')?.addEventListener('input', function () {
    const query = this.value.toLowerCase().trim();
    document.querySelectorAll('[data-page-section]').forEach(section => {
        section.hidden = !section.textContent.toLowerCase().includes(query);
        if (query && !section.hidden && section.parentElement.tagName === 'DETAILS') section.parentElement.open = true;
    });
});

// Shared helpers for page links and visual media selection, including newly added list items.
(() => {
    let mediaField = null;
    const pendingMediaForms = new Set();
    const picker = document.getElementById('media-picker');
    function preview(field, url, label) {
        const container = field.querySelector('[data-media-preview]');
        const node = document.createElement(field.dataset.mediaType === 'video' ? 'video' : 'img');
        node.className = 'admin-media-preview';
        node.src = url;
        if (node.tagName === 'VIDEO') { node.controls = true; node.preload = 'metadata'; }
        else node.alt = 'Selected image';
        container.replaceChildren(node);
        field.querySelector('[data-media-selection]').textContent = label;
    }
    function filterLibrary() {
        if (!picker || !mediaField) return;
        const search = picker.querySelector('[data-media-search]').value.toLowerCase().trim();
        let count = 0;
        picker.querySelectorAll('[data-media-choice]').forEach(choice => {
            choice.hidden = choice.dataset.type !== mediaField.dataset.mediaType || !choice.dataset.name.toLowerCase().includes(search);
            if (!choice.hidden) count++;
        });
        picker.querySelector('[data-media-empty]').hidden = count > 0;
    }
    document.addEventListener('click', event => {
        const format = event.target.closest('[data-rich-command]');
        if (format) {
            const field = format.closest('[data-rich-field]');
            const editor = field.querySelector('[data-rich-editor]');
            editor.focus();
            document.execCommand(format.dataset.richCommand, false);
            const source = field.querySelector('[data-rich-source]');
            source.value = editor.innerHTML;
            source.dispatchEvent(new Event('change', {bubbles:true}));
        }
        const open = event.target.closest('[data-choose-media]');
        if (open && picker) {
            mediaField = open.closest('[data-media-field]');
            picker.querySelector('[data-media-search]').value = '';
            filterLibrary();
            bootstrap.Modal.getOrCreateInstance(picker).show();
        }
        const choice = event.target.closest('[data-media-choice]');
        if (choice && mediaField) {
            const input = mediaField.querySelector('[data-media-path]');
            input.value = choice.dataset.path;
            mediaField.querySelector('[data-media-upload]').value = '';
            preview(mediaField, choice.dataset.url, choice.dataset.name);
            input.dispatchEvent(new Event('change', {bubbles:true}));
            bootstrap.Modal.getOrCreateInstance(picker).hide();
        }
        const panelButton = event.target.closest('[data-open-panel]');
        if (panelButton) document.getElementById(panelButton.dataset.openPanel).open = true;
    });
    document.addEventListener('mousedown', event => {
        if (event.target.closest('[data-rich-command]')) event.preventDefault();
    });
    document.addEventListener('focusin', event => {
        if (event.target.matches('[data-rich-editor]')) document.execCommand('defaultParagraphSeparator', false, 'p');
    });
    document.addEventListener('input', event => {
        if (event.target.matches('[data-rich-editor]')) event.target.closest('[data-rich-field]').querySelector('[data-rich-source]').value = event.target.innerHTML;
        if (event.target.matches('[data-rich-source]')) {
            // Source edits are applied on save through the server's HTML sanitizer.
            const field = event.target.closest('[data-rich-field]');
            const editor = field.querySelector('[data-rich-editor]');
            editor.textContent = 'HTML source changed. Save to view the formatted result.';
            editor.contentEditable = 'false';
            field.querySelectorAll('[data-rich-command]').forEach(button => button.disabled = true);
        }
    });
    document.addEventListener('paste', event => {
        if (event.target.closest('[data-rich-editor]')) {
            event.preventDefault();
            document.execCommand('insertText', false, event.clipboardData.getData('text/plain'));
        }
    });
    document.addEventListener('change', event => {
        const changedForm = event.target.closest('[data-page-media-item]');
        if (changedForm) pendingMediaForms.add(changedForm);
        if (event.target.matches('[data-link-page]') && event.target.value) {
            const input = event.target.closest('[data-link-field]').querySelector('[data-link-url]');
            input.value = event.target.value;
            input.dispatchEvent(new Event('input', {bubbles:true}));
        }
        if (event.target.matches('[data-media-upload]') && event.target.files[0]) {
            const field = event.target.closest('[data-media-field]');
            if (field.dataset.previewUrl) URL.revokeObjectURL(field.dataset.previewUrl);
            field.dataset.previewUrl = URL.createObjectURL(event.target.files[0]);
            preview(field, field.dataset.previewUrl, event.target.files[0].name + ' — ready to save');
        }
    });
    document.addEventListener('submit', event => {
        if (!event.target.matches('[data-page-media-item]')) return;
        const others = Array.from(pendingMediaForms).some(form => form !== event.target);
        if (others && !window.confirm('Other media cards have unsaved choices. Save this file and discard those other choices?')) {
            event.preventDefault();
            return;
        }
        pendingMediaForms.clear();
    });
    window.addEventListener('beforeunload', event => {
        if (pendingMediaForms.size) {event.preventDefault();event.returnValue = '';}
    });
    picker?.querySelector('[data-media-search]').addEventListener('input', filterLibrary);
    document.querySelector('[data-page-media-search]')?.addEventListener('input', function () {
        const query = this.value.toLowerCase().trim();
        document.querySelectorAll('[data-page-media-item]').forEach(item => item.hidden = !item.dataset.mediaDescription.toLowerCase().includes(query));
    });
    if (location.hash === '#page-media') document.getElementById('page-media')?.setAttribute('open', '');
})();

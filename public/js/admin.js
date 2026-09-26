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

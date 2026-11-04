@foreach($moduleSections as $section)
        @php
            $definition = config('content_modules.'.$section->key);
        @endphp
        <details class="card mb-3 page-content-section" data-page-section id="section-{{ $section->key }}">
            <summary class="card-header d-flex justify-content-between align-items-center gap-3"><span class="fw-semibold">{{ $section->editor_title }}</span><span class="badge text-bg-light">{{ $section->contents->whereNull('deleted_at')->count() }} {{ $definition['repeatable'] ? 'items' : 'record' }}</span></summary>
            <div class="card-body" @if($definition['repeatable']) data-content-items="{{ route('admin.content.reorder', $section->key) }}" @endif>
                @if($section->pages->count() > 1)<p class="small text-muted">Shared content: changes also appear on other pages using this section.</p>@endif
                @foreach($section->contents as $entry)
                    @php
                        $data = $entry->contentData($definition);
                        $label = collect($data)->filter(fn($value, $name) => is_string($value) && $value !== '' && !in_array($definition['fields'][$name]['type'], ['image','video','url','icon','color']))->first() ?: $section->editor_title;
                    @endphp
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 border-bottom py-3" @if($definition['repeatable'] && ! $entry->trashed()) draggable="true" data-content-id="{{ $entry->id }}" @endif>
                        <div><strong>{{ Str::limit(strip_tags($label), 100) }}</strong><div class="small text-muted">{{ $entry->trashed() ? 'In trash' : ($entry->is_visible ? 'Published' : 'Hidden') }}</div></div>
                        <div class="d-flex gap-2 flex-shrink-0">
                            @if($entry->trashed())
                                <form method="post" action="{{ route('admin.content.restore', [$section->key, $entry->id]) }}">@csrf<button class="btn btn-sm btn-outline-primary">Restore</button></form>
                            @else
                                @if($definition['repeatable'])
                                @foreach(['duplicate' => 'Duplicate', $entry->is_visible ? 'hide' : 'show' => $entry->is_visible ? 'Hide' : 'Show'] as $action => $actionLabel)
                                <form method="post" action="{{ route('admin.content.action', [$section->key, $entry->id]) }}">@csrf<input type="hidden" name="action" value="{{ $action }}"><button class="btn btn-sm btn-outline-secondary">{{ $actionLabel }}</button></form>
                                @endforeach
                                @endif
                                <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.content.edit', [$section->key, $entry->id, 'page' => $page->slug, 'section_anchor' => $block->anchor ?? null]) }}">Edit</a>
                                <form method="post" action="{{ route('admin.content.destroy', [$section->key, $entry->id]) }}" data-confirm="Move this content to trash?">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger">Delete</button></form>
                            @endif
                        </div>
                    </div>
                @endforeach
                @if($definition['repeatable'] || $section->contents->isEmpty())
                    <a class="btn btn-primary btn-sm mt-3" href="{{ route('admin.content.create', [$section->key, 'page' => $page->slug, 'section_anchor' => $block->anchor ?? null]) }}">+ Add {{ $definition['repeatable'] ? 'item' : 'content' }}</a>
                @endif
            </div>
        </details>
    @endforeach


@php
    $clients = content_items('clients_client_strip_clients');
@endphp

<section class="page-section" id="clients">
    <div class="container">

        <p class="section-eyebrow text-center mb-2">{{ content('clients_client_strip', 'paragraph') }}</p>
        

        <div class="cl-logo-panel" data-reveal>
            <div class="cl-logo-grid">
                @foreach ($clients as $c)
                    <a class="cl-logo-link" href="{{ $c['url'] }}"
                       @if ($c['url'] !== '#') target="_blank" rel="noopener" @endif
                       title="{{ $c['name'] }}" aria-label="{{ $c['name'] }}">
                        <img class="cl-logo" src="{{ asset($c['logo']) }}"
                             alt="{{ $c['name'] }}" width="200" height="56" loading="lazy">
                    </a>
                @endforeach
            </div>
        </div>
        

    </div>
</section>

@push('styles')
<style>
    .cl-logo-panel { border: 1px solid var(--line); border-radius: 8px; overflow: hidden; background: rgba(15, 27, 52, 0.35); }
    .cl-logo-grid { display: grid; grid-template-columns: repeat(2, 1fr); }
    @media (min-width: 576px) { .cl-logo-grid { grid-template-columns: repeat(3, 1fr); } }
    @media (min-width: 768px) { .cl-logo-grid { grid-template-columns: repeat(4, 1fr); } }
    @media (min-width: 992px) { .cl-logo-grid { grid-template-columns: repeat(7, 1fr); } }

    .cl-logo-link {
        display: grid; place-items: center;
        min-height: 96px; padding: 1.25rem 1rem;
        border-right: 1px solid var(--line);
        border-bottom: 1px solid var(--line);
        transition: background .25s var(--ease);
    }
    .cl-logo-link:hover { background: rgba(91, 140, 255, 0.08); }

    /* WHITE by default, original color + slight zoom on hover */
    .cl-logo {
        max-width: 100%; height: auto;
        filter: brightness(0) invert(1);
        opacity: .6;
        transition: filter .3s var(--ease), opacity .3s var(--ease), transform .3s var(--ease);
    }
    .cl-logo-link:hover .cl-logo { filter: none; opacity: 1; transform: scale(1.04); }
</style>
@endpush

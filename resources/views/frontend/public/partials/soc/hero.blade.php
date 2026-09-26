
@php
    $contact = Route::has('public.contact') ? route('public.contact') : (Route::has('contact') ? route('contact') : '#');
@endphp
<header class="cl-hero cl-soc-hero" id="page-top">
    <canvas class="cl-soc-net" data-net aria-hidden="true"></canvas>

    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <p class="section-eyebrow mb-3" data-reveal data-hero>{{ content('soc_hero', 'paragraph') }}</p>
                <h1 class="cl-soc-h mb-3" data-reveal data-hero>{{ content('soc_hero', 'heading') }} <span class="grad-text">{{ content('soc_hero', 'label') }}</span></h1>
                <p class="lead text-muted mb-4" data-reveal data-hero>
                    {{ content('soc_hero', 'paragraph_2') }}
                </p>

                

                <div class="d-flex flex-wrap gap-3" data-reveal data-hero>
                    <a class="btn btn-xl text-white fw-bold btn cl-nav-cta" href="{{ content('soc_hero', 'destination') }}">{{ content('soc_hero', 'link_label') }}</a>
                    <a class="btn btn-outline-light btn-xl" href="{{ content('soc_hero', 'a_href') }}"><i class="{{ content('soc_hero', 'icon') }}"></i> {{ content('soc_hero', 'link_label_2') }}</a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="cl-soc-live" data-reveal data-hero>
                    <div class="cl-soc-live-top">
                        <span></span>
                        <strong>{{ content('soc_hero', 'label_2') }}</strong>
                    </div>
                    <div class="cl-soc-live-stats">
                        <div><strong data-soc-stat="alerts">{{ content('soc_hero', 'label_3') }}</strong><span>{{ content('soc_hero', 'label_4') }}</span></div>
                        <div><strong data-soc-stat="mttr">{{ content('soc_hero', 'label_5') }}</strong><span>{{ content('soc_hero', 'label_6') }}</span></div>
                        <div><strong data-soc-stat="blocked">{{ content('soc_hero', 'label_7') }}</strong><span>{{ content('soc_hero', 'label_8') }}</span></div>
                    </div>
                    <div class="cl-soc-bars" aria-hidden="true">
                        @foreach (content_items('soc_hero_height_items') as $height)
                            <span style="--h: {{ $height }}%;"></span>
                        @endforeach
                    </div>
                    <div class="cl-soc-log" data-soc-live-log aria-live="polite" aria-label="{{ content('soc_hero', 'div_aria_label') }}">
                        @foreach (content_items('soc_hero_soc_log') as $contentRow)
<p>{{ $contentRow['paragraph'] }} <span>{{ $contentRow['label'] }}</span> {{ $contentRow['paragraph_2'] }}</p>
@endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@push('styles')
<style>
    .cl-soc-hero { position: relative; overflow: hidden; padding-top: 9rem; padding-bottom: 5rem; }
    .cl-soc-net { position: absolute; inset: 0; width: 100%; height: 100%; z-index: 0; }
    .cl-soc-hero .container { position: relative; z-index: 2; }
    .cl-soc-h { font-family: 'Chakra Petch', sans-serif; font-weight: 700; font-size: clamp(2.2rem, 5vw, 3.6rem); color: var(--white); line-height: 1.05; }
    .cl-nav-cta.btn-xl{ padding: 1rem 1.75rem;font-size: 1.25rem; }
    .cl-soc-chip {
        display: inline-flex; align-items: center; gap: .5rem;
        font-family: 'IBM Plex Mono', monospace; font-size: .8rem; color: var(--white);
        background: rgba(255, 255, 255, 0.04); border: 1px solid var(--line);
        border-left: 3px solid var(--blue-bright); border-radius: 8px; padding: .5rem .9rem;
    }
    .cl-soc-chip i { color: var(--blue-bright); }
    .cl-soc-live {
        border: 1.5px solid transparent;
        border-radius: 10px;
        overflow: hidden;
        background:
            linear-gradient(160deg, rgba(9, 18, 38, .94), rgba(7, 15, 29, .96)) padding-box,
            linear-gradient(130deg, var(--blue), rgba(189, 123, 255, .78)) border-box;
    }
    .cl-soc-live-top {
        display: flex;
        align-items: center;
        gap: .55rem;
        padding: .78rem 1rem;
        border-bottom: 1px solid var(--line);
        color: var(--muted);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .75rem;
        text-transform: uppercase;
        letter-spacing: .06em;
    }
    .cl-soc-live-top span {
        width: 9px;
        height: 9px;
        border-radius: 50%;
        background: var(--blue-bright);
        box-shadow: 0 0 14px rgba(109, 156, 255, .75);
    }
    .cl-soc-live-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        border-bottom: 1px solid var(--line);
    }
    .cl-soc-live-stats div {
        padding: 1rem;
        text-align: center;
        border-right: 1px solid var(--line);
    }
    .cl-soc-live-stats div:last-child { border-right: 0; }
    .cl-soc-live-stats strong {
        display: block;
        color: var(--warm-soft);
        font-family: 'Chakra Petch', sans-serif;
        font-size: clamp(1.35rem, 2.4vw, 1.85rem);
        line-height: 1;
    }
    .cl-soc-live-stats span {
        color: var(--muted);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .66rem;
        text-transform: uppercase;
    }
    .cl-soc-bars {
        display: flex;
        align-items: end;
        gap: .42rem;
        height: 94px;
        padding: 1.25rem 1rem .7rem;
    }
    .cl-soc-bars span {
        flex: 1;
        height: var(--h);
        min-height: 10px;
        border-radius: 3px 3px 0 0;
        background: linear-gradient(180deg, #6d9cff, rgba(47, 107, 255, .34));
        box-shadow: 0 0 12px rgba(109, 156, 255, .28);
        transition: height .65s var(--ease), background .35s ease, box-shadow .35s ease;
    }
    .cl-soc-log {
        padding: .75rem 1rem 1rem;
        border-top: 1px solid var(--line);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .72rem;
    }
    .cl-soc-log p { margin: .14rem 0; color: var(--muted); }
    .cl-soc-log span { color: var(--red-soft); }
    .cl-soc-log p.is-new { animation: cl-soc-log-in .38s var(--ease) both; }
    .cl-soc-live-top span { animation: cl-soc-live-pulse 1.6s ease-in-out infinite; }
    @keyframes cl-soc-log-in {
        from { opacity: 0; transform: translateY(-8px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes cl-soc-live-pulse {
        50% { opacity: .45; box-shadow: 0 0 5px rgba(109, 156, 255, .35); }
    }
    @media (max-width: 767.98px) {
        .cl-soc-live-stats { grid-template-columns: 1fr; }
        .cl-soc-live-stats div { border-right: 0; border-bottom: 1px solid var(--line); }
        .cl-soc-live-stats div:last-child { border-bottom: 0; }
    }
    @media (prefers-reduced-motion: reduce) {
        .cl-soc-log p.is-new, .cl-soc-live-top span { animation: none; }
        .cl-soc-bars span { transition: none; }
    }
</style>
@endpush

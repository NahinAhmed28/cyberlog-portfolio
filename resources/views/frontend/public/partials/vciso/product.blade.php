
@php
    $modules = content_items('vciso_product_modules');
@endphp

<section class="page-section cl-vciso-product" id="vciso-platform">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>{{ content('vciso_product', 'paragraph') }}</p>
        <h2 class="page-section-heading text-center text-secondary mb-5" data-reveal>
            {{ content('vciso_product', 'heading') }}
        </h2>

        <div class="cl-vm-card" data-reveal>
            <div class="accordion" id="vmAccordion">
                @foreach ($modules as $i => $m)
                    <div class="cl-vm-item">
                        <button id="vm-toggle-{{ $i }}" class="cl-vm-toggle collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#vm{{ $i }}"
                                aria-expanded="false" aria-controls="vm{{ $i }}">
                            <i class="{{ content('vciso_product', 'icon') }}" aria-hidden="true"></i>
                            <span>{{ $m['name'] }}</span>
                        </button>

                        <div id="vm{{ $i }}" class="collapse" data-bs-parent="#vmAccordion" role="region" aria-labelledby="vm-toggle-{{ $i }}">
                            <div class="cl-vm-panel">
                                <div class="row gx-4 gx-lg-5 align-items-center">
                                    <div class="{{ $m['screenshot'] ? 'col-lg-7' : 'col-12' }}">
                                        <h3 class="cl-vm-headline">{!! $m['headline'] !!}</h3>
                                        <p class="cl-vm-body">{{ $m['body'] }}</p>
                                        <ul class="cl-vm-points list-unstyled mb-0">
                                            @foreach ($m['points'] as $p)
                                                <li><i class="{{ content('vciso_product', 'icon_2') }}"></i>{{ $p }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @if ($m['screenshot'])
                                        <div class="col-lg-5">
                                            <figure class="cl-vm-screenshot cl-vm-team-{{ $m['team'] }}">
                                                <img src="{{ asset($m['screenshot']) }}"
                                                     alt="{{ $m['name'] }} dashboard screenshot"
                                                     loading="lazy"
                                                     decoding="async">
                                            </figure>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
    /* Section blends with the page background (no stark panel). */
    .cl-vciso-product {
        position: relative;
        overflow: hidden;
        background:
            radial-gradient(780px 420px at 12% 12%, rgba(109, 156, 255, 0.08), transparent 62%),
            radial-gradient(740px 420px at 92% 92%, rgba(228, 31, 61, 0.11), transparent 62%),
            linear-gradient(180deg, rgba(5, 12, 23, 0.96), rgba(7, 17, 31, 1));
    }
    .cl-vm-card {
        border: 1px solid var(--line-soft);
        border-radius: 14px;
        overflow: hidden;
        background: linear-gradient(160deg, rgba(11, 20, 48, 0.5), rgba(7, 15, 29, 0.55));
    }

    .cl-vm-item { border-bottom: 1px solid var(--line-soft); }
    .cl-vm-item:last-child { border-bottom: 0; }

    .cl-vm-toggle {
        display: flex;
        align-items: center;
        gap: .9rem;
        width: 100%;
        padding: 1.15rem 1.4rem;
        border: 0;
        background: transparent;
        color: var(--white);
        font-family: 'Chakra Petch', sans-serif;
        font-weight: 700;
        font-size: 1.08rem;
        text-align: left;
        cursor: pointer;
        transition: background .2s var(--ease), color .2s var(--ease);
    }
    .cl-vm-toggle:hover { background: rgba(47, 107, 255, 0.06); }
    .cl-vm-toggle[aria-expanded="true"] { color: var(--warm-soft); background: rgba(16, 31, 58, 0.5); }

    .cl-vm-plus {
        flex: 0 0 auto;
        font-size: .8rem;
        color: var(--red-soft);
        transition: transform .25s var(--ease);
    }
    .cl-vm-toggle[aria-expanded="true"] .cl-vm-plus { transform: rotate(45deg); }

    .cl-vm-panel { padding: .5rem 1.4rem 1.9rem; }
    .cl-vm-panel > .row { row-gap: 1.5rem; }

    .cl-vm-headline {
        font-family: 'Chakra Petch', sans-serif;
        font-size: clamp(1.35rem, 2.6vw, 2rem);
        line-height: 1.15;
        color: var(--white);
        margin-bottom: .9rem;
    }
    .cl-vm-hl { color: var(--blue-bright); text-shadow: 0 0 22px rgba(47, 107, 255, 0.35); }

    .cl-vm-body { color: var(--muted); margin-bottom: 1.1rem; max-width: 640px; }

    .cl-vm-points li {
        display: flex;
        align-items: flex-start;
        gap: .65rem;
        color: var(--text);
        margin-bottom: .55rem;
    }
    .cl-vm-points li:last-child { margin-bottom: 0; }
    .cl-vm-points i { color: var(--warm-soft); margin-top: .26rem; flex: 0 0 auto; }

    .cl-vm-screenshot {
        position: relative;
        margin: 0;
        overflow: hidden;
        border: 1px solid rgba(109, 156, 255, .34);
        border-radius: 10px;
        background: #07111f;
        box-shadow: 0 24px 60px rgba(0, 0, 0, .4), 0 0 26px rgba(47, 107, 255, .08);
    }
    .cl-vm-screenshot.cl-vm-team-red {
        border-color: rgba(228, 31, 61, .34);
        box-shadow: 0 24px 60px rgba(0, 0, 0, .4), 0 0 26px rgba(228, 31, 61, .08);
    }
    .cl-vm-screenshot img {
        display: block;
        width: 100%;
        height: auto;
        object-fit: contain;
    }

    /* Module visual — mini console (blends, no invented copy) */
    .cl-vm-visual {
        border: 1px solid var(--line);
        border-radius: 10px;
        overflow: hidden;
        background: rgba(5, 12, 23, 0.85);
        box-shadow: 0 24px 60px rgba(0, 0, 0, 0.4);
    }
    .cl-vm-visual-top {
        display: flex;
        align-items: center;
        gap: .4rem;
        padding: .7rem .9rem;
        border-bottom: 1px solid var(--line);
        background: rgba(255, 255, 255, 0.03);
    }
    .cl-vm-visual-top span { width: 8px; height: 8px; border-radius: 50%; background: var(--red-soft); opacity: .75; }
    .cl-vm-visual-top span:nth-child(2) { background: var(--warm-soft); }
    .cl-vm-visual-top span:nth-child(3) { background: var(--blue-bright); }
    .cl-vm-visual-top strong {
        margin-left: .5rem;
        color: var(--muted);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .68rem;
        letter-spacing: .1em;
    }
    .cl-vm-visual-top strong {
        flex: 1;
        min-width: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .cl-vm-top-icon { flex: 0 0 auto; font-size: .9rem; }
    .cl-vm-team-blue .cl-vm-top-icon { color: var(--blue-bright); filter: drop-shadow(0 0 10px rgba(47, 107, 255, 0.5)); }
    .cl-vm-team-red .cl-vm-top-icon { color: var(--red-soft); filter: drop-shadow(0 0 10px rgba(228, 31, 61, 0.5)); }

    /* Module telemetry rows — each console reads like that module's dashboard */
    .cl-vmc { display: grid; gap: .55rem; padding: .95rem; }
    .cl-vmc-row {
        display: flex;
        align-items: center;
        gap: .7rem;
        padding: .62rem .78rem;
        border: 1px solid var(--line-soft);
        border-radius: 6px;
        background: rgba(16, 31, 58, 0.5);
    }
    .cl-vmc-row b {
        flex: 0 0 auto;
        color: var(--white);
        font-family: 'IBM Plex Mono', monospace;
        font-weight: 600;
        font-size: .64rem;
        letter-spacing: .1em;
    }
    .cl-vmc-row span {
        flex: 1;
        min-width: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        color: var(--muted);
        font-size: .78rem;
    }
    .cl-vmc-chip {
        flex: 0 0 auto;
        font-style: normal;
        font-family: 'IBM Plex Mono', monospace;
        font-size: .6rem;
        letter-spacing: .08em;
        padding: .22rem .5rem;
        border-radius: 4px;
        border: 1px solid;
    }
    .cl-vmc-chip.blue { color: var(--blue-bright); border-color: rgba(47, 107, 255, 0.45); background: rgba(47, 107, 255, 0.12); }
    .cl-vmc-chip.red { color: var(--red-soft); border-color: rgba(228, 31, 61, 0.45); background: rgba(228, 31, 61, 0.12); }
    .cl-vmc-chip.warm { color: var(--warm-soft); border-color: rgba(255, 191, 27, 0.4); background: rgba(255, 138, 0, 0.1); }

    /* Rows tick in when a module opens */
    .collapse .cl-vmc-row { opacity: 0; transform: translateY(8px); }
    .collapse.show .cl-vmc-row { animation: clVmcIn .45s var(--ease) both; }
    .collapse.show .cl-vmc-row:nth-child(2) { animation-delay: .14s; }
    .collapse.show .cl-vmc-row:nth-child(3) { animation-delay: .28s; }
    @keyframes clVmcIn { to { opacity: 1; transform: none; } }

    .cl-vm-visual-status {
        padding: .65rem .9rem;
        border-top: 1px solid var(--line);
        color: var(--muted);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .68rem;
        letter-spacing: .12em;
    }
    .cl-vm-dot {
        display: inline-block;
        width: 8px;
        height: 8px;
        margin-right: .35rem;
        border-radius: 50%;
        background: var(--blue-bright);
        box-shadow: 0 0 10px rgba(47, 107, 255, 0.7);
        animation: clVmPulse 1.8s ease-in-out infinite;
    }
    .cl-vm-team-red .cl-vm-dot {
        background: var(--red-soft);
        box-shadow: 0 0 10px rgba(228, 31, 61, 0.7);
    }
    @keyframes clVmPulse { 50% { opacity: .35; } }

    @media (max-width: 991.98px) {
        .cl-vm-panel { padding: .25rem 1.1rem 1.5rem; }
        .cl-vm-toggle { padding: 1rem 1.1rem; }
    }
    @media (prefers-reduced-motion: reduce) {
        .cl-vm-dot { animation: none !important; }
        .collapse .cl-vmc-row { opacity: 1 !important; transform: none !important; animation: none !important; }
    }
</style>
@endpush

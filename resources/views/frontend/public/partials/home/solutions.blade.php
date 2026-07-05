{{-- Home > Security Solutions — 9 service cards from config/cyberlog_services.php. --}}
@php
    $solutions = config('cyberlog_services', []);
    $svcUrl = fn ($route) => Route::has($route) ? route($route) : '#';
@endphp

<section class="page-section cl-solutions-section" id="solutions">
    <div class="container">
        <div class="cl-solutions-head">
            <div>
                <p class="section-eyebrow mb-2" data-reveal>Security Solutions</p>
                <h2 class="page-section-heading text-secondary mb-0" data-reveal>Explore Our <span class="cl-title-accent">Security Solutions</span></h2>
            </div>
            <p class="cl-solutions-copy text-muted mb-0" data-reveal>
                Cyberlog helps organizations monitor threats, validate security risks, strengthen defenses, improve compliance, and build long-term cyber resilience.
            </p>
        </div>

        <div class="cl-solutions-grid">
            @foreach ($solutions as $solution)
                <a class="cl-solution-tile" href="{{ $svcUrl($solution['route']) }}" data-reveal>
                    <div class="cl-solution-top">
                        <span class="cl-solution-mark"><i class="fas {{ $solution['icon'] }}"></i></span>
                        <span class="cl-solution-kicker">{{ $solution['kicker'] }}</span>
                    </div>
                    <h3 class="cl-solution-title">{!! $solution['title'] !!}</h3>
                    <p class="cl-solution-desc">{{ $solution['desc'] }}</p>
                    <div class="cl-solution-features">
                        @foreach ($solution['tags'] as $feature)
                            <span>{{ $feature }}</span>
                        @endforeach
                    </div>
                    <span class="cl-solution-link">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>
            @endforeach
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-solutions-section {
        background:
            radial-gradient(900px 460px at 88% 14%, rgba(109, 156, 255, .07), transparent 62%),
            rgba(5, 12, 23, .66);
    }
    .cl-solutions-head {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(280px, 460px);
        gap: 2rem;
        align-items: end;
        margin-bottom: 2rem;
    }
    .cl-solutions-copy { font-size: .98rem; line-height: 1.7; }

    .cl-solutions-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 1rem;
    }
    .cl-solution-tile {
        min-height: 300px;
        display: flex;
        flex-direction: column;
        padding: 1.35rem;
        border: 1px solid var(--line);
        border-radius: 8px;
        background:
            linear-gradient(160deg, rgba(16, 31, 58, 0.96), rgba(8, 18, 34, 0.95)) padding-box,
            linear-gradient(130deg, rgba(109, 156, 255, 0.45), rgba(228, 31, 61, 0.2)) border-box;
        color: var(--text);
        text-decoration: none;
        overflow: hidden;
        position: relative;
        transition: transform .24s var(--ease), border-color .24s var(--ease), box-shadow .24s var(--ease);
    }
    .cl-solution-tile::before {
        content: "";
        position: absolute;
        inset: 0 0 auto;
        height: 3px;
        background: linear-gradient(90deg, var(--blue-bright), var(--red-soft));
        transform: scaleX(.28);
        transform-origin: left;
        transition: transform .28s var(--ease);
    }
    .cl-solution-tile:hover {
        transform: translateY(-5px);
        border-color: rgba(109, 156, 255, 0.52);
        box-shadow: 0 1rem 2.2rem rgba(0, 0, 0, 0.34);
        color: var(--text);
    }
    .cl-solution-tile:hover::before { transform: scaleX(1); }

    .cl-solution-top { display: flex; align-items: center; justify-content: space-between; gap: 1rem; margin-bottom: 1.2rem; }
    .cl-solution-mark {
        width: 46px; height: 46px;
        display: grid; place-items: center;
        border-radius: 8px;
        background: var(--blue-dim);
        color: var(--blue-bright);
        border: 1px solid rgba(109, 156, 255, 0.22);
        font-size: 1.08rem;
    }
    .cl-solution-kicker {
        font-family: 'IBM Plex Mono', monospace;
        font-size: .66rem;
        letter-spacing: .12em;
        text-transform: uppercase;
        color: var(--warm-soft);
        text-align: right;
    }
    .cl-solution-title {
        font-family: 'Chakra Petch', sans-serif;
        color: var(--white);
        font-size: 1.18rem;
        line-height: 1.2;
        margin-bottom: .7rem;
    }
    .cl-solution-desc { color: var(--muted); font-size: .9rem; line-height: 1.55; margin-bottom: 1.1rem; }
    .cl-solution-features { display: flex; flex-wrap: wrap; gap: .45rem; margin-top: auto; margin-bottom: 1.1rem; }
    .cl-solution-features span {
        font-size: .72rem;
        color: var(--text);
        border: 1px solid var(--line);
        border-radius: 999px;
        padding: .28rem .62rem;
        background: rgba(255, 255, 255, 0.035);
    }
    .cl-solution-link {
        display: inline-flex;
        align-items: center;
        gap: .45rem;
        color: var(--blue-bright);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .82rem;
        font-weight: 600;
    }
    .cl-solution-link i { transition: transform .2s var(--ease); }
    .cl-solution-tile:hover .cl-solution-link i { transform: translateX(4px); }

    @media (max-width: 991.98px) {
        .cl-solutions-head { grid-template-columns: 1fr; align-items: start; }
        .cl-solutions-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    }
    @media (max-width: 575.98px) {
        .cl-solutions-grid { grid-template-columns: 1fr; }
        .cl-solution-tile { min-height: 0; }
    }
</style>
@endpush

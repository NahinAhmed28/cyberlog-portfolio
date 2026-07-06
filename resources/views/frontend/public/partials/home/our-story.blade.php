{{-- Home > Our Story (ref: underdefense.com/about-us)
     Rising growth timeline adapted from the reference's "Story of Our Growth" chart. --}}
@php
    $milestones = [
        [
            'year' => '2022',
            'title' => 'The foundation of a cyber vision',
            'text' => "Cyberlog began with a clear mission to support Bangladesh's growing digital ecosystem through practical, impact-driven cybersecurity.",
            'x' => 9,
            'y' => 84,
            'tone' => '#ffbf1b',
            'toneRgb' => '255, 191, 27',
        ],
        [
            'year' => '2023',
            'title' => 'Building industry presence',
            'text' => 'Cyberlog strengthened its market presence, expanded professional networks, and became recognized as a specialized cybersecurity company.',
            'x' => 27,
            'y' => 72,
            'tone' => '#6d9cff',
            'toneRgb' => '109, 156, 255',
        ],
        [
            'year' => '2024',
            'title' => 'Contributing to national cyber capacity',
            'text' => 'The company expanded its role through awareness, capacity building, advisory involvement, and contribution to cybersecurity maturity across institutions.',
            'x' => 48,
            'y' => 60,
            'tone' => '#42e6a4',
            'toneRgb' => '66, 230, 164',
        ],
        [
            'year' => '2025',
            'title' => 'Trusted across critical sectors',
            'text' => 'Cyberlog entered a stronger growth phase, earning trust across government, finance, education, enterprise, and critical sectors as a long-term cybersecurity partner.',
            'x' => 67,
            'y' => 50,
            'tone' => '#ffbf1b',
            'toneRgb' => '255, 191, 27',
        ],
        [
            'year' => '2026',
            'title' => 'Scaling cyber resilience',
            'text' => 'Cyberlog is moving toward a structured, product-led, and partnership-driven future to become a trusted cybersecurity brand for enterprises and critical digital infrastructure.',
            'x' => 86,
            'y' => 40,
            'tone' => '#42e6a4',
            'toneRgb' => '66, 230, 164',
        ],
    ];
@endphp

<section class="page-section cl-story-section" id="our-story">
    <div class="container">
        <div class="cl-story-head">
            <div>
                <p class="section-eyebrow mb-2" data-reveal>Our Story</p>
                <h2 class="cl-story-title" data-reveal>
                    The Story of<br><span>Our Growth</span>
                </h2>
            </div>
        </div>

        <div class="cl-story-chart" data-reveal>
            <svg class="cl-story-lines" viewBox="0 0 1000 440" preserveAspectRatio="none" aria-hidden="true">
                <defs>
                    <linearGradient id="clStoryLine" x1="0" y1="0" x2="1" y2="0">
                        <stop offset="0%" style="stop-color: var(--warm)" />
                        <stop offset="58%" style="stop-color: var(--warm-soft)" />
                        <stop offset="100%" style="stop-color: var(--red-soft)" />
                    </linearGradient>
                </defs>
                <path class="cl-story-terrain" d="M0 420 C100 360 180 390 275 320 C360 260 455 320 560 240 C660 155 735 185 815 95 C890 30 945 48 1000 8 L1000 440 L0 440 Z" />
                <path class="cl-story-grid-line" d="M0 405 C100 350 190 372 285 315 C390 255 460 298 570 230 C670 150 740 172 820 86 C890 24 950 42 1000 10" />
                <path class="cl-story-growth-line" pathLength="1" d="M0 405 C100 350 190 372 285 315 C390 255 460 298 570 230 C670 150 740 172 820 86 C890 24 950 42 1000 10" />
            </svg>

            @foreach ($milestones as $milestone)
                <article class="cl-story-milestone" style="--x: {{ $milestone['x'] }}%; --y: {{ $milestone['y'] }}%; --tone: {{ $milestone['tone'] }}; --tone-rgb: {{ $milestone['toneRgb'] }};">
                    <span class="cl-story-dot" aria-hidden="true"></span>
                    <div class="cl-story-stem" aria-hidden="true"></div>
                    <div class="cl-story-card">
                        <span class="cl-story-year">{{ $milestone['year'] }}</span>
                        <h3>{{ $milestone['title'] }}</h3>
                        <p>{{ $milestone['text'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="cl-story-stats" data-reveal>
            <div><strong>14+</strong><span>Enterprise and government clients</span></div>
            <div><strong>24/7</strong><span>Security operations coverage</span></div>
            <div><strong>500+</strong><span>Users protected across services</span></div>
        </div>
    </div>
</section>

@push('styles')
<style>
    /* Whole section (title → chart → stats) sized to fit one screen height. */
    .cl-story-section {
        overflow-x: clip;
        overflow-y: visible;
        padding-top: clamp(2rem, 4vh, 3.25rem);
        padding-bottom: clamp(2rem, 4vh, 3.25rem);
        background:
            radial-gradient(800px 420px at 82% 12%, rgba(255, 72, 101, 0.12), transparent 58%),
            linear-gradient(180deg, rgba(7, 17, 31, 0.34), rgba(11, 24, 48, 0.72));
    }
    .cl-story-head {
        display: flex;
        align-items: flex-end;
        margin-bottom: 1.3rem;
    }
    .cl-story-title {
        margin: 0;
        font-family: 'Chakra Petch', sans-serif;
        font-size: clamp(2rem, 4.6vw, 3.5rem);
        line-height: .9;
        text-transform: uppercase;
        color: var(--white);
    }
    .cl-story-title span { color: var(--warm-soft); }
    .cl-story-intro { line-height: 1.7; }

    /* No boxed panel — the growth chart blends straight into the section background. */
    .cl-story-chart {
        position: relative;
        /* vh-based so the chart scales with the screen instead of forcing a scroll */
        min-height: clamp(430px, 54vh, 600px);
        overflow: visible;
    }
    .cl-story-chart::before {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        background:
            linear-gradient(rgba(130, 165, 220, 0.055) 1px, transparent 1px),
            linear-gradient(90deg, rgba(130, 165, 220, 0.045) 1px, transparent 1px);
        background-size: 54px 54px, 54px 54px;
        opacity: .72;
        -webkit-mask-image: radial-gradient(ellipse at 50% 60%, rgba(0, 0, 0, .95), transparent 82%);
        mask-image: radial-gradient(ellipse at 50% 60%, rgba(0, 0, 0, .95), transparent 82%);
    }
    .cl-story-lines {
        position: absolute;
        inset: auto 0 0;
        width: 100%;
        height: 78%;
        overflow: visible;
    }
    .cl-story-terrain { fill: rgba(109, 156, 255, 0.055); }
    .cl-story-grid-line {
        fill: none;
        stroke: rgba(130, 165, 220, 0.14);
        stroke-width: 26;
        stroke-linecap: round;
    }
    .cl-story-growth-line {
        fill: none;
        stroke: url(#clStoryLine);
        stroke-width: 6;
        stroke-linecap: round;
        stroke-dasharray: 1;
        stroke-dashoffset: 1;
        animation: clStoryDraw 1.5s var(--ease) .25s forwards;
        filter: drop-shadow(0 5px 8px rgba(255, 138, 0, 0.24));
    }
    @keyframes clStoryDraw { to { stroke-dashoffset: 0; } }

    .cl-story-milestone {
        position: absolute;
        left: clamp(9rem, var(--x), calc(100% - 9rem));
        top: 0;
        height: var(--y);
        width: clamp(236px, 20vw, 292px);
        transform: translateX(-50%);
        color: var(--text);
    }
    .cl-story-dot {
        position: absolute;
        left: 50%;
        bottom: -6px;
        width: 12px;
        height: 12px;
        transform: translate(-50%, -50%);
        border-radius: 999px;
        background: var(--tone);
        box-shadow:
            0 0 0 5px rgba(7, 17, 31, 0.78),
            0 0 22px rgba(var(--tone-rgb), 0.62);
        z-index: 3;
    }
    .cl-story-stem {
        position: absolute;
        left: 50%;
        top: auto;
        bottom: 0;
        height: 2.45rem;
        width: 1px;
        margin-inline: auto;
        background: linear-gradient(180deg, rgba(var(--tone-rgb), 0.08), rgba(var(--tone-rgb), 0.74));
    }
    /* Readable glass cards — larger type per feedback */
    .cl-story-card {
        position: absolute;
        left: 0;
        right: 0;
        top: auto;
        bottom: 2.45rem;
        padding: .9rem 1rem;
        overflow-wrap: anywhere;
        border: 1px solid rgba(var(--tone-rgb), .24);
        border-left: 2px solid rgba(var(--tone-rgb), 0.72);
        border-radius: 8px;
        background:
            radial-gradient(220px 140px at 0% 0%, rgba(var(--tone-rgb), .14), transparent 72%),
            rgba(9, 18, 33, 0.72);
        -webkit-backdrop-filter: blur(5px);
        backdrop-filter: blur(5px);
        box-shadow: 0 16px 38px rgba(0, 0, 0, .28), 0 0 24px rgba(var(--tone-rgb), .08);
    }
    .cl-story-year {
        display: block;
        margin-bottom: .5rem;
        font-family: 'IBM Plex Mono', monospace;
        font-weight: 700;
        color: var(--tone);
        font-size: .95rem;
    }
    .cl-story-card h3 {
        color: var(--white);
        font-size: clamp(.98rem, 1.08vw, 1.08rem);
        line-height: 1.22;
        margin-bottom: .5rem;
    }
    .cl-story-card p {
        color: rgba(247, 251, 255, .86);
        font-size: .88rem;
        line-height: 1.5;
        margin: 0;
    }

    .cl-story-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        margin-top: .9rem;
    }
    .cl-story-stats div {
        display: flex;
        align-items: center;
        gap: .85rem;
        padding: .7rem 1rem;
        border: 1px solid var(--line);
        border-radius: 8px;
        background: rgba(16, 31, 58, 0.72);
    }
    .cl-story-stats strong {
        font-family: 'Chakra Petch', sans-serif;
        color: var(--warm-soft);
        font-size: 1.9rem;
        line-height: 1;
    }
    .cl-story-stats span { color: var(--text); font-size: .95rem; line-height: 1.4; }

    @media (max-width: 991.98px) {
        .cl-story-head { align-items: flex-start; }
        .cl-story-chart {
            min-height: 0;
            padding: 0;
        }
        .cl-story-lines { display: none; }
        .cl-story-milestone {
            position: relative;
            left: auto;
            top: auto;
            width: auto;
            transform: none;
            display: grid;
            grid-template-columns: 70px minmax(0, 1fr);
            gap: 1rem;
            padding: 1rem 0;
            border-bottom: 1px solid var(--line);
        }
        .cl-story-milestone:last-child { border-bottom: 0; }
        .cl-story-stem, .cl-story-dot { display: none; }
        .cl-story-card {
            position: static;
            grid-column: 2;
            padding: 0;
        }
        .cl-story-year {
            grid-column: 1;
            grid-row: 1;
            margin: 0;
            padding-top: .05rem;
        }
    }
    @media (max-width: 767.98px) {
        .cl-story-stats { grid-template-columns: 1fr; }
    }
    @media (prefers-reduced-motion: reduce) {
        .cl-story-growth-line { animation: none !important; stroke-dashoffset: 0; }
    }
</style>
@endpush

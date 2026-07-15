@php
    // Left side — Defensive (Blue Team); Right side — Offensive & Assessment (Red Team)
    $leftNodes = [
        ['icon' => 'fa-desktop', 'label' => 'Security Operations Center (SOC)', 'x' => 16, 'y' => 18],
        ['icon' => 'fa-bolt', 'label' => 'Incident Response', 'x' => 9, 'y' => 41],
        ['icon' => 'fa-shield-virus', 'label' => 'Firewall Management', 'x' => 14, 'y' => 66],
        ['icon' => 'fa-database', 'label' => 'Data Protection & Backup', 'x' => 27, 'y' => 84],
    ];

    $rightNodes = [
        ['icon' => 'fa-bug', 'label' => 'VAPT (Vulnerability Assessment & Penetration Testing)', 'x' => 84, 'y' => 18],
        ['icon' => 'fa-satellite-dish', 'label' => 'Threat Intelligence', 'x' => 91, 'y' => 41],
        ['icon' => 'fa-triangle-exclamation', 'label' => 'Risk Assessment', 'x' => 86, 'y' => 66],
        ['icon' => 'fa-graduation-cap', 'label' => 'Capacity Building (Training)', 'x' => 73, 'y' => 84],
    ];
@endphp

<header class="cl-vciso-hero" id="page-top">
    <div class="container">
        <div class="row align-items-center g-5 cl-vciso-hero-row">
            <div class="col-lg-5">
                <p class="section-eyebrow mb-3" data-reveal data-hero>Virtual CISO</p>
                <h1 class="cl-vciso-title mb-4" data-reveal data-hero>
                    Executive <span>Security <br class="cl-vciso-mobile-break">Leadership</span>
                    <br class="cl-vciso-mobile-break">Without the
                    <br class="cl-vciso-mobile-break">Full-Time Cost
                </h1>
                <p class="lead text-muted mb-4" data-reveal data-hero>
                    Cyberlog's vCISO service gives your organization a senior security leader to own
                    strategy, governance, compliance, risk reporting, and operational security maturity.
                </p>

                <div class="cl-vciso-actions" data-reveal data-hero>
                    <a class="btn cl-vciso-primary" href="{{ route('contact') }}">
                        <i class="fas fa-headset me-2"></i>Talk to a vCISO
                    </a>
                    <a class="btn cl-vciso-secondary" href="#vciso-platform">
                        <i class="fas fa-diagram-project me-2"></i>Explore Model
                    </a>
                </div>

                <div class="cl-vciso-proof" data-reveal data-hero>
                    <span><strong>Board</strong> ready reporting</span>
                    <span><strong>ISO</strong> and GRC guidance</span>
                    <span><strong>SOC</strong> aligned oversight</span>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="cl-vciso-visual-stack">
                    <figure class="cl-vciso-dashboard">
                        <img
                            src="{{ asset('assets/img/vciso/client-dashboard.svg') }}"
                            alt="Cyberlog vCISO client dashboard showing a live cyber threat map, attack feed, and integrated security services"
                            loading="eager"
                            decoding="async">
                    </figure>
                </div>
            </div>
        </div>

        <div class="cl-vciso-diagram-row">
            <div class="cl-vciso-diagram" aria-label="vCISO service coverage diagram">
                <svg class="cl-vciso-lines" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <path d="M50 50 C36 48 30 20 16 18" />
                    <path d="M50 50 C34 50 25 41 9 41" />
                    <path d="M50 50 C34 54 29 66 14 66" />
                    <path d="M50 50 C41 64 38 82 27 84" />
                    <path d="M50 50 C64 48 70 20 84 18" />
                    <path d="M50 50 C66 50 75 41 91 41" />
                    <path d="M50 50 C66 54 71 66 86 66" />
                    <path d="M50 50 C59 64 62 82 73 84" />
                </svg>

                <div class="cl-vciso-core" aria-label="vCISO core">
                    <span class="cl-vciso-ring"></span>
                    <span class="cl-vciso-ring cl-vciso-ring-two"></span>
                    <div class="cl-vciso-core-badge">
                        <img src="{{ asset('assets/img/cyberlog-logo.png') }}" alt="Cyberlog">
                        <strong>vCISO</strong>
                    </div>
                </div>

                @foreach ($leftNodes as $node)
                    <div class="cl-vciso-node cl-vciso-node-left" style="--x: {{ $node['x'] }}%; --y: {{ $node['y'] }}%;">
                        <i class="fas {{ $node['icon'] }}"></i>
                        <span>{{ $node['label'] }}</span>
                    </div>
                @endforeach

                @foreach ($rightNodes as $node)
                    <div class="cl-vciso-node cl-vciso-node-right" style="--x: {{ $node['x'] }}%; --y: {{ $node['y'] }}%;">
                        <span>{{ $node['label'] }}</span>
                        <i class="fas {{ $node['icon'] }}"></i>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</header>

@push('styles')
<style>
    .cl-vciso-hero {
        position: relative;
        min-height: 0;
        display: flex;
        align-items: center;
        overflow: hidden;
        padding: 8rem 0 4.5rem;
        background:
            radial-gradient(850px 460px at 82% 10%, rgba(255, 72, 101, 0.15), transparent 62%),
            radial-gradient(700px 420px at 8% 92%, rgba(109, 156, 255, 0.12), transparent 66%),
            linear-gradient(180deg, rgba(7, 17, 31, 0.98), rgba(11, 24, 48, 0.92));
    }
    .cl-vciso-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        background:
            linear-gradient(rgba(130, 165, 220, 0.045) 1px, transparent 1px),
            linear-gradient(90deg, rgba(130, 165, 220, 0.035) 1px, transparent 1px);
        background-size: 56px 56px;
        mask-image: radial-gradient(circle at 62% 42%, rgba(0, 0, 0, .92), transparent 74%);
    }
    .cl-vciso-hero .container {
        position: relative;
        z-index: 1;
    }
    .cl-vciso-hero-row {
        min-height: 390px;
    }
    .cl-vciso-title {
        font-size: clamp(2rem, 2.75vw, 2.8rem);
        line-height: 1.02;
        margin: 0 0 .75rem;
    }
    .cl-vciso-title span {
        display: inline-block;
        color: var(--warm-soft);
        text-shadow: 0 0 26px rgba(255, 138, 0, 0.32);
    }
    .cl-vciso-mobile-break {
        display: none;
    }
    .cl-vciso-actions {
        display: flex;
        flex-wrap: wrap;
        gap: .58rem;
        margin-bottom: .78rem;
    }
    .cl-vciso-primary,
    .cl-vciso-secondary {
        border-radius: var(--r);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .72rem;
        letter-spacing: .04em;
        padding: .58rem .8rem;
    }
    .cl-vciso-primary {
        color: #fff !important;
        background: linear-gradient(120deg, var(--red), var(--red-soft));
        border: 1px solid var(--red-soft);
        box-shadow: 0 14px 34px rgba(228, 31, 61, 0.28);
    }
    .cl-vciso-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 18px 42px rgba(228, 31, 61, 0.38);
    }
    .cl-vciso-secondary {
        color: var(--white) !important;
        background: rgba(16, 31, 58, 0.74);
        border: 1px solid var(--line);
    }
    .cl-vciso-secondary:hover {
        border-color: var(--warm-soft);
        background: rgba(16, 31, 58, 0.94);
        transform: translateY(-2px);
    }
    .cl-vciso-proof {
        display: flex;
        flex-wrap: wrap;
        gap: .42rem;
        color: var(--muted);
        font-size: .72rem;
    }
    .cl-vciso-proof span {
        padding: .34rem .48rem;
        border: 1px solid var(--line);
        background: rgba(16, 31, 58, 0.58);
        border-radius: var(--r);
    }
    .cl-vciso-proof strong {
        color: var(--warm-soft);
    }
    .cl-vciso-visual-stack {
        display: grid;
        gap: 1.15rem;
        width: min(58vw, 860px);
        max-width: 100%;
        margin-left: auto;
    }
    .cl-vciso-hero .lead {
        max-width: 560px;
        margin-bottom: .82rem !important;
        font-size: clamp(.9rem, 1.12vw, .98rem);
        line-height: 1.46;
    }
    .cl-vciso-dashboard {
        position: relative;
        width: 100%;
        max-width: 100%;
        margin: 0;
        overflow: hidden;
        border: 1px solid rgba(61, 190, 255, 0.22);
        border-radius: 14px;
        background: rgba(4, 13, 26, 0.82);
        box-shadow:
            0 28px 70px rgba(0, 0, 0, 0.42),
            0 0 42px rgba(0, 202, 255, 0.12),
            inset 0 1px 0 rgba(255, 255, 255, 0.07);
    }
    .cl-vciso-dashboard::before {
        content: "";
        position: absolute;
        inset: 0;
        z-index: 1;
        pointer-events: none;
        background:
            linear-gradient(90deg, rgba(109, 156, 255, 0.18), transparent 18%, transparent 78%, rgba(12, 199, 145, 0.12)),
            linear-gradient(180deg, rgba(255, 255, 255, 0.1), transparent 24%);
        mix-blend-mode: screen;
        opacity: .55;
    }
    .cl-vciso-dashboard::after {
        content: "";
        position: absolute;
        inset: auto 6% 0;
        z-index: 1;
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(45, 216, 243, 0.75), transparent);
        box-shadow: 0 0 24px rgba(45, 216, 243, 0.42);
    }
    .cl-vciso-dashboard img {
        display: block;
        width: 100%;
        height: auto;
        aspect-ratio: 1900 / 867;
        object-fit: cover;
    }
    .cl-vciso-diagram-row {
        margin-top: clamp(2rem, 4vw, 3rem);
    }

    /* Legacy diagram styles remain available for older cached markup. */
    .cl-vciso-diagram {
        position: relative;
        min-height: clamp(390px, 38vw, 560px);
        max-width: 1120px;
        margin: 0 auto;
        background:
            radial-gradient(circle at 50% 50%, rgba(255, 72, 101, 0.14), transparent 24%),
            radial-gradient(circle at 50% 50%, rgba(109, 156, 255, 0.09), transparent 38%);
    }
    .cl-vciso-diagram::before {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        background:
            radial-gradient(circle at 50% 50%, transparent 0 13%, rgba(255, 72, 101, 0.07) 13.4% 14%, transparent 14.4% 100%),
            radial-gradient(circle at 50% 50%, transparent 0 23%, rgba(109, 156, 255, 0.06) 23.4% 24%, transparent 24.4% 100%);
    }
    .cl-vciso-lines {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }
    .cl-vciso-lines path {
        fill: none;
        stroke: rgba(130, 165, 220, 0.28);
        stroke-width: .32;
        stroke-linecap: round;
        stroke-dasharray: 2 4;
        animation: clVcisoSignal 4.8s linear infinite;
    }
    /* Left = Defensive (Blue Team), Right = Offensive & Assessment (Red Team) */
    .cl-vciso-lines path:nth-child(-n+4) {
        stroke: rgba(109, 156, 255, 0.32);
    }
    .cl-vciso-lines path:nth-child(n+5) {
        stroke: rgba(255, 72, 101, 0.3);
        animation-delay: 1.2s;
    }
    @keyframes clVcisoSignal {
        to { stroke-dashoffset: -18; }
    }
    .cl-vciso-core {
        position: absolute;
        left: 50%;
        top: 50%;
        width: 160px;
        height: 160px;
        transform: translate(-50%, -50%);
        display: grid;
        place-items: center;
        z-index: 3;
    }
    .cl-vciso-ring {
        position: absolute;
        inset: 8px;
        border-radius: 50%;
        border: 1px solid rgba(255, 72, 101, 0.36);
        animation: clVcisoRing 4.4s ease-in-out infinite;
    }
    .cl-vciso-ring-two {
        inset: 24px;
        border-color: rgba(109, 156, 255, 0.34);
        animation-delay: 1.1s;
    }
    @keyframes clVcisoRing {
        50% { transform: scale(1.08); opacity: .42; }
    }
    .cl-vciso-core-badge {
        width: 112px;
        height: 112px;
        border-radius: 50%;
        display: grid;
        place-items: center;
        align-content: center;
        gap: .3rem;
        border: 1px solid rgba(255, 191, 27, 0.38);
        background: radial-gradient(circle at 50% 26%, rgba(255, 191, 27, 0.16), rgba(7, 17, 31, 0.92));
        box-shadow: 0 0 36px rgba(255, 72, 101, 0.28);
    }
    .cl-vciso-core-badge img {
        display: block;
        max-width: 62%;
        height: auto;
        filter: drop-shadow(0 0 10px rgba(255, 191, 27, 0.25));
    }
    .cl-vciso-core-badge strong {
        color: var(--white);
        font-family: 'Chakra Petch', sans-serif;
        letter-spacing: .08em;
        font-size: .88rem;
    }
    .cl-vciso-node {
        position: absolute;
        left: var(--x);
        top: var(--y);
        z-index: 2;
        width: min(220px, 31vw);
        min-height: 58px;
        display: flex;
        align-items: center;
        gap: .72rem;
        padding: .82rem .95rem;
        border: 1px solid var(--line);
        border-radius: 6px;
        background: rgba(11, 19, 35, 0.86);
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        box-shadow: 0 16px 34px rgba(0, 0, 0, 0.34);
        transform: translate(-50%, -50%);
        transition: transform .25s var(--ease), border-color .25s var(--ease);
    }
    .cl-vciso-node:hover {
        transform: translate(-50%, -54%);
        border-color: var(--warm-soft);
    }
    .cl-vciso-node i {
        width: 34px;
        height: 34px;
        display: grid;
        place-items: center;
        flex: 0 0 auto;
        border-radius: 6px;
        color: var(--red-soft);
        background: rgba(255, 72, 101, 0.14);
        box-shadow: inset 0 0 16px rgba(255, 72, 101, 0.16);
    }
    /* Defensive (Blue Team) side */
    .cl-vciso-node-left i {
        color: var(--blue-bright);
        background: rgba(47, 107, 255, 0.16);
        box-shadow: inset 0 0 16px rgba(47, 107, 255, 0.18);
    }
    .cl-vciso-node-left:hover { border-color: var(--blue-bright); }
    .cl-vciso-node span {
        color: var(--text);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .78rem;
        font-weight: 600;
        line-height: 1.25;
    }
    .cl-vciso-node-right {
        justify-content: flex-end;
        text-align: right;
    }
    @media (max-width: 991.98px) {
        .cl-vciso-hero {
            min-height: 0;
            padding: 8rem 0 4rem;
        }
        .cl-vciso-visual-stack {
            width: 100%;
            margin-top: 1rem;
        }
        .cl-vciso-dashboard {
            width: 100%;
        }
        .cl-vciso-diagram {
            min-height: 0;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: .75rem;
            padding: 1rem;
        }
        .cl-vciso-lines,
        .cl-vciso-core,
        .cl-vciso-diagram::before {
            display: none;
        }
        .cl-vciso-node {
            position: static;
            width: auto;
            min-height: 0;
            transform: none;
        }
        .cl-vciso-node:hover {
            transform: none;
        }
    }
    @media (max-width: 575.98px) {
        .cl-vciso-title {
            font-size: clamp(2.05rem, 11vw, 2.65rem);
            line-height: 1.04;
            overflow-wrap: normal;
        }
        .cl-vciso-title span {
            display: block;
        }
        .cl-vciso-mobile-break {
            display: block;
        }
        .cl-vciso-actions,
        .cl-vciso-actions .btn {
            width: 100%;
        }
        .cl-vciso-diagram {
            grid-template-columns: 1fr;
        }
        .cl-vciso-visual-stack {
            gap: .85rem;
        }
        .cl-vciso-dashboard {
            border-radius: 10px;
        }
        .cl-vciso-dashboard img {
            width: 150%;
            max-width: none;
            transform: translateX(-18%);
        }
        .cl-vciso-node-right {
            justify-content: flex-start;
            text-align: left;
        }
        .cl-vciso-node-right span {
            order: 2;
        }
        .cl-vciso-node-right i {
            order: 1;
        }
    }
    @media (prefers-reduced-motion: reduce) {
        .cl-vciso-lines path,
        .cl-vciso-ring {
            animation: none !important;
        }
    }
</style>
@endpush

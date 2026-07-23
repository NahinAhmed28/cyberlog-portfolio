{{-- VAPT > Security posture diagram - reference-style center hub + connected items --}}
@php
    $nodes = [
        ['side' => 'left', 'slot' => '1', 'icon' => 'fa-window-maximize', 'label' => 'Web Application Testing', 'color' => '#8f4dff', 'rgb' => '143, 77, 255'],
        ['side' => 'left', 'slot' => '2', 'icon' => 'fa-plug', 'label' => 'API Security Testing', 'color' => '#a051ff', 'rgb' => '160, 81, 255'],
        ['side' => 'left', 'slot' => '3', 'icon' => 'fa-mobile-screen-button', 'label' => 'Mobile Application Testing', 'color' => '#7d3cff', 'rgb' => '125, 60, 255'],
        ['side' => 'left', 'slot' => '4', 'icon' => 'fa-network-wired', 'label' => 'Network Penetration Testing', 'color' => '#9c5cff', 'rgb' => '156, 92, 255'],
        ['side' => 'right', 'slot' => '1', 'icon' => 'fa-cloud', 'label' => 'Cloud Security Testing', 'color' => '#ff4f68', 'rgb' => '255, 79, 104'],
        ['side' => 'right', 'slot' => '2', 'icon' => 'fa-sliders', 'label' => 'Configuration Review', 'color' => '#ff6b78', 'rgb' => '255, 107, 120'],
        ['side' => 'right', 'slot' => '3', 'icon' => 'fa-bug', 'label' => 'Vulnerability Validation', 'color' => '#ff475f', 'rgb' => '255, 71, 95'],
        ['side' => 'right', 'slot' => '4', 'icon' => 'fa-rotate', 'label' => 'Remediation Retesting', 'color' => '#ff7a4e', 'rgb' => '255, 122, 78'],
    ];
@endphp

<section class="page-section cl-vapt-posture" id="posture">
    <div class="container">
        <div class="cl-vp-map" data-reveal>
            <svg class="cl-vp-wire" viewBox="0 0 1200 540" preserveAspectRatio="none" aria-hidden="true">
                <defs>
                    <linearGradient id="clVpLeftWire" x1="0" x2="1" y1="0" y2="0">
                        <stop offset="0" stop-color="#8f4dff" stop-opacity=".15"/>
                        <stop offset=".52" stop-color="#8f4dff" stop-opacity=".72"/>
                        <stop offset="1" stop-color="#ff4f68" stop-opacity=".18"/>
                    </linearGradient>
                    <linearGradient id="clVpRightWire" x1="1" x2="0" y1="0" y2="0">
                        <stop offset="0" stop-color="#ff4f68" stop-opacity=".15"/>
                        <stop offset=".52" stop-color="#ff4f68" stop-opacity=".74"/>
                        <stop offset="1" stop-color="#8f4dff" stop-opacity=".18"/>
                    </linearGradient>
                </defs>

                <g class="cl-vp-wire-left">
                    <path d="M365 84 H455 C500 84 512 112 512 148 V220 C512 244 532 255 552 258"/>
                    <path d="M304 184 H444 C486 184 512 204 512 232 C512 248 532 257 552 260"/>
                    <path d="M304 356 H444 C486 356 512 336 512 308 C512 290 532 280 552 274"/>
                    <path d="M365 456 H455 C500 456 512 428 512 392 V320 C512 296 532 282 552 276"/>
                </g>
                <g class="cl-vp-wire-right">
                    <path d="M835 84 H745 C700 84 688 112 688 148 V220 C688 244 668 255 648 258"/>
                    <path d="M896 184 H756 C714 184 688 204 688 232 C688 248 668 257 648 260"/>
                    <path d="M896 356 H756 C714 356 688 336 688 308 C688 290 668 280 648 274"/>
                    <path d="M835 456 H745 C700 456 688 428 688 392 V320 C688 296 668 282 648 276"/>
                </g>

                <g class="cl-vp-wire-dots">
                    <circle cx="365" cy="84" r="3"/><circle cx="304" cy="184" r="3"/><circle cx="304" cy="356" r="3"/><circle cx="365" cy="456" r="3"/>
                    <circle cx="835" cy="84" r="3"/><circle cx="896" cy="184" r="3"/><circle cx="896" cy="356" r="3"/><circle cx="835" cy="456" r="3"/>
                    <circle cx="512" cy="232" r="3"/><circle cx="512" cy="308" r="3"/><circle cx="688" cy="232" r="3"/><circle cx="688" cy="308" r="3"/>
                </g>
            </svg>

            <div class="cl-vp-hub" aria-hidden="true">
                <div class="cl-vp-core">
                    <strong>VAPT</strong>
                </div>
            </div>

            @foreach ($nodes as $node)
                <div class="cl-vp-node cl-vp-node-{{ $node['side'] }} cl-vp-slot-{{ $node['slot'] }}"
                     style="--node: {{ $node['color'] }}; --node-rgb: {{ $node['rgb'] }};">
                    <span class="cl-vp-icon"><i class="fas {{ $node['icon'] }}"></i></span>
                    <span class="cl-vp-text">{{ $node['label'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-vapt-posture .container {
        max-width: 1240px;
    }
    .cl-vp-map {
        position: relative;
        min-height: 540px;
        margin: 0 auto;
        border: 1px solid rgba(255, 255, 255, .09);
        border-radius: 12px;
        overflow: hidden;
        background:
            radial-gradient(360px 300px at 50% 50%, rgba(255, 72, 101, .14), transparent 68%),
            radial-gradient(420px 320px at 28% 34%, rgba(143, 77, 255, .13), transparent 68%),
            radial-gradient(420px 320px at 72% 36%, rgba(255, 79, 104, .12), transparent 68%),
            linear-gradient(180deg, rgba(11, 14, 18, .96), rgba(5, 8, 12, .98));
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .04), 0 24px 70px rgba(0, 0, 0, .34);
    }
    .cl-vp-map::before {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        background:
            linear-gradient(90deg, rgba(255,255,255,.025) 1px, transparent 1px),
            linear-gradient(rgba(255,255,255,.018) 1px, transparent 1px);
        background-size: 58px 58px;
        opacity: .26;
        mask-image: radial-gradient(circle at 50% 50%, #000, transparent 76%);
    }
    .cl-vp-map::after {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        background: radial-gradient(ellipse at center, transparent 0 48%, rgba(0, 0, 0, .34) 100%);
    }
    .cl-vp-wire {
        position: absolute;
        inset: 0;
        z-index: 1;
        width: 100%;
        height: 100%;
        opacity: .92;
    }
    .cl-vp-wire path {
        fill: none;
        stroke-width: 1.15;
        stroke-linecap: round;
        stroke-linejoin: round;
    }
    .cl-vp-wire-left path { stroke: url(#clVpLeftWire); }
    .cl-vp-wire-right path { stroke: url(#clVpRightWire); }
    .cl-vp-wire-dots circle {
        fill: #ff4f68;
        filter: drop-shadow(0 0 6px rgba(255, 79, 104, .72));
    }
    .cl-vp-wire-dots circle:nth-child(-n+4),
    .cl-vp-wire-dots circle:nth-child(9),
    .cl-vp-wire-dots circle:nth-child(10) {
        fill: #8f4dff;
        filter: drop-shadow(0 0 6px rgba(143, 77, 255, .76));
    }

    .cl-vp-node {
        position: absolute;
        z-index: 3;
        width: min(29vw, 292px);
        min-height: 76px;
        display: flex;
        align-items: center;
        gap: .85rem;
        padding: .95rem 1rem;
        border: 1px solid rgba(var(--node-rgb), .26);
        border-radius: 11px;
        background:
            radial-gradient(160px 90px at 8% 50%, rgba(var(--node-rgb), .16), transparent 72%),
            linear-gradient(180deg, rgba(20, 23, 30, .76), rgba(10, 13, 18, .86));
        color: var(--white);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .04), 0 16px 38px rgba(0, 0, 0, .32);
        -webkit-backdrop-filter: blur(8px);
        backdrop-filter: blur(8px);
        transition: transform .25s var(--ease), border-color .25s var(--ease), box-shadow .25s var(--ease);
    }
    .cl-vp-node::after {
        content: "";
        position: absolute;
        top: 50%;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--node);
        box-shadow: 0 0 12px rgba(var(--node-rgb), .9);
        transform: translateY(-50%);
    }
    .cl-vp-node-left::after { right: -19px; }
    .cl-vp-node-right::after { left: -19px; }
    .cl-vp-node:hover {
        transform: translateY(-4px);
        border-color: rgba(var(--node-rgb), .58);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .06), 0 22px 48px rgba(0, 0, 0, .4), 0 0 24px rgba(var(--node-rgb), .14);
    }
    .cl-vp-node-left.cl-vp-slot-1 { top: 32px; left: 7.4%; }
    .cl-vp-node-left.cl-vp-slot-2 { top: 132px; left: 2.4%; }
    .cl-vp-node-left.cl-vp-slot-3 { bottom: 132px; left: 2.4%; }
    .cl-vp-node-left.cl-vp-slot-4 { bottom: 32px; left: 7.4%; }
    .cl-vp-node-right.cl-vp-slot-1 { top: 32px; right: 7.4%; }
    .cl-vp-node-right.cl-vp-slot-2 { top: 132px; right: 2.4%; }
    .cl-vp-node-right.cl-vp-slot-3 { bottom: 132px; right: 2.4%; }
    .cl-vp-node-right.cl-vp-slot-4 { bottom: 32px; right: 7.4%; }
    .cl-vp-node-right {
        flex-direction: row-reverse;
        text-align: right;
        background:
            radial-gradient(160px 90px at 92% 50%, rgba(var(--node-rgb), .16), transparent 72%),
            linear-gradient(180deg, rgba(20, 23, 30, .76), rgba(10, 13, 18, .86));
    }
    .cl-vp-icon {
        flex: 0 0 auto;
        width: 42px;
        height: 42px;
        display: grid;
        place-items: center;
        border: 1px solid rgba(var(--node-rgb), .22);
        border-radius: 11px;
        color: #ffffff;
        background:
            radial-gradient(circle at 50% 50%, rgba(var(--node-rgb), .42), rgba(var(--node-rgb), .13) 60%, rgba(255,255,255,.02)),
            rgba(var(--node-rgb), .08);
        box-shadow: inset 0 0 16px rgba(255, 255, 255, .06), 0 0 18px rgba(var(--node-rgb), .28);
    }
    .cl-vp-text {
        display: block;
        color: #f7fbff;
        font-family: 'Chakra Petch', sans-serif;
        font-size: .95rem;
        font-weight: 700;
        line-height: 1.25;
    }

    .cl-vp-hub {
        position: absolute;
        z-index: 4;
        top: 50%;
        left: 50%;
        width: 210px;
        aspect-ratio: 1;
        display: grid;
        place-items: center;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        background:
            repeating-radial-gradient(circle, rgba(255,255,255,.075) 0 1px, transparent 1px 28px),
            radial-gradient(circle, rgba(255, 79, 104, .17), transparent 63%);
        box-shadow:
            0 0 0 22px rgba(255, 255, 255, .025),
            0 0 0 48px rgba(255, 79, 104, .05),
            0 0 0 72px rgba(143, 77, 255, .035),
            0 0 76px rgba(255, 79, 104, .22);
    }
    .cl-vp-hub::before,
    .cl-vp-hub::after {
        content: "";
        position: absolute;
        inset: 30px;
        border-radius: 50%;
        border: 1px solid rgba(255, 255, 255, .09);
        animation: clVpPulse 4.8s ease-in-out infinite;
    }
    .cl-vp-hub::after {
        inset: 12px;
        border-color: rgba(255, 79, 104, .16);
        animation-delay: -2.2s;
    }
    .cl-vp-core {
        position: relative;
        z-index: 2;
        width: 112px;
        aspect-ratio: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border: 1px solid rgba(255, 255, 255, .16);
        border-radius: 50%;
        background:
            radial-gradient(circle at 50% 42%, rgba(255, 255, 255, .16), transparent 36%),
            linear-gradient(145deg, rgba(255, 79, 104, .2), rgba(143, 77, 255, .12)),
            rgba(22, 18, 24, .9);
        box-shadow: inset 0 0 24px rgba(255, 255, 255, .06), 0 0 28px rgba(255, 79, 104, .2);
    }
    .cl-vp-core span {
        color: rgba(255, 255, 255, .64);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .56rem;
        letter-spacing: .2em;
        text-transform: uppercase;
    }
    .cl-vp-core i {
        margin: .38rem 0 .24rem;
        color: #fff;
        font-size: 2rem;
        filter: drop-shadow(0 0 14px rgba(255, 79, 104, .58));
    }
    .cl-vp-core strong {
        color: var(--white);
        font-family: 'Chakra Petch', sans-serif;
        font-size: 1rem;
        letter-spacing: .18em;
        line-height: 1;
    }

    @keyframes clVpPulse {
        0%, 100% { opacity: .52; transform: scale(.96); }
        50% { opacity: 1; transform: scale(1.04); }
    }

    @media (max-width: 991.98px) {
        .cl-vp-map {
            min-height: 0;
            display: grid;
            gap: 1rem;
            padding: 1.25rem;
        }
        .cl-vp-wire {
            display: none;
        }
        .cl-vp-hub,
        .cl-vp-node {
            position: relative;
            inset: auto !important;
            top: auto !important;
            right: auto !important;
            bottom: auto !important;
            left: auto !important;
            transform: none;
            width: min(100%, 520px);
            margin-inline: auto;
        }
        .cl-vp-hub {
            order: 1;
            width: 184px;
            margin-bottom: .45rem;
        }
        .cl-vp-node {
            min-height: 68px;
        }
        .cl-vp-node::after {
            display: none;
        }
        .cl-vp-node-right {
            text-align: left;
            flex-direction: row;
            background:
                radial-gradient(160px 90px at 8% 50%, rgba(var(--node-rgb), .16), transparent 72%),
                linear-gradient(180deg, rgba(20, 23, 30, .76), rgba(10, 13, 18, .86));
        }
        .cl-vp-slot-1 { order: 2; }
        .cl-vp-slot-2 { order: 3; }
        .cl-vp-slot-3 { order: 4; }
        .cl-vp-slot-4 { order: 5; }
        .cl-vp-node-right.cl-vp-slot-1 { order: 6; }
        .cl-vp-node-right.cl-vp-slot-2 { order: 7; }
        .cl-vp-node-right.cl-vp-slot-3 { order: 8; }
        .cl-vp-node-right.cl-vp-slot-4 { order: 9; }
    }

    @media (max-width: 575.98px) {
        .cl-vp-map {
            padding: 1rem;
            border-radius: 10px;
        }
        .cl-vp-text {
            font-size: .88rem;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .cl-vp-hub::before,
        .cl-vp-hub::after {
            animation: none !important;
        }
    }
</style>
@endpush

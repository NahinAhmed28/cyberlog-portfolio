{{-- VAPT › Security Posture Diagram (ref: buguard.io) — center hub + 8 items --}}
@php
    $left = [
        ['fa-window-maximize', 'Web Application Testing'],
        ['fa-plug', 'API Security Testing'],
        ['fa-mobile-screen-button', 'Mobile Application Testing'],
        ['fa-network-wired', 'Network Penetration Testing'],
    ];
    $right = [
        ['fa-cloud', 'Cloud Security Testing'],
        ['fa-sliders', 'Configuration Review'],
        ['fa-bug', 'Vulnerability Validation'],
        ['fa-rotate', 'Remediation Retesting'],
    ];
@endphp

<section class="page-section cl-vapt-posture" id="posture">
    <div class="container">
        <div class="cl-vp" data-reveal>
            <div class="cl-vp-col cl-vp-left">
                @foreach ($left as $item)
                    <div class="cl-vp-node"><i class="fas {{ $item[0] }}"></i><span>{{ $item[1] }}</span></div>
                @endforeach
            </div>

            <div class="cl-vp-hub">
                <div class="cl-vp-core">
                    <span>Cyberlog</span>
                    <strong>VAPT</strong>
                </div>
            </div>

            <div class="cl-vp-col cl-vp-right">
                @foreach ($right as $item)
                    <div class="cl-vp-node"><i class="fas {{ $item[0] }}"></i><span>{{ $item[1] }}</span></div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-vapt-posture {
        background:
            radial-gradient(860px 480px at 50% 42%, rgba(255, 72, 101, .12), transparent 62%),
            radial-gradient(720px 420px at 18% 18%, rgba(109, 70, 255, .1), transparent 66%),
            linear-gradient(180deg, rgba(6, 12, 22, .98), rgba(9, 18, 34, .98));
    }
    .cl-vp {
        position: relative;
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        gap: clamp(1.75rem, 5vw, 5rem);
        align-items: center;
        max-width: 1120px;
        min-height: 470px;
        margin: 0 auto;
        padding: clamp(1.5rem, 4vw, 3rem);
        border: 1px solid rgba(130, 165, 220, .12);
        border-radius: 10px;
        background:
            radial-gradient(circle at 50% 50%, rgba(255, 72, 101, .08), transparent 34%),
            linear-gradient(180deg, rgba(3, 8, 15, .25), rgba(3, 8, 15, .1));
        overflow: hidden;
    }
    .cl-vp::before,
    .cl-vp::after {
        content: "";
        position: absolute;
        inset: 12%;
        border: 1px solid rgba(255, 72, 101, .1);
        border-radius: 50%;
        pointer-events: none;
    }
    .cl-vp::after {
        inset: 23%;
        border-color: rgba(109, 156, 255, .11);
    }
    .cl-vp-col {
        position: relative;
        z-index: 2;
        display: flex;
        flex-direction: column;
        gap: 1.1rem;
    }
    .cl-vp-node {
        position: relative;
        display: flex;
        align-items: center;
        gap: .9rem;
        min-height: 72px;
        padding: 1rem 1.15rem;
        border: 1px solid rgba(130, 165, 220, .16);
        border-radius: 8px;
        background: rgba(7, 17, 31, .72);
        color: var(--white);
        font-weight: 600;
        transition: transform .25s var(--ease), border-color .25s var(--ease);
    }
    .cl-vp-node::before {
        content: "";
        position: absolute;
        top: 50%;
        width: clamp(2.4rem, 4vw, 4.2rem);
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(255, 72, 101, .38), transparent);
    }
    .cl-vp-node::after {
        content: "";
        position: absolute;
        top: calc(50% - 3px);
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: var(--red-soft);
        box-shadow: 0 0 14px rgba(255, 72, 101, .62);
    }
    .cl-vp-node:hover { transform: translateY(-3px); border-color: var(--red-soft); }
    .cl-vp-left .cl-vp-node:nth-child(even) { transform: translateX(-8%); }
    .cl-vp-right .cl-vp-node:nth-child(even) { transform: translateX(8%); }
    .cl-vp-left .cl-vp-node::before { right: calc(-1 * clamp(2.4rem, 4vw, 4.2rem)); }
    .cl-vp-left .cl-vp-node::after { right: calc(-1 * clamp(2.4rem, 4vw, 4.2rem)); }
    .cl-vp-right .cl-vp-node::before { left: calc(-1 * clamp(2.4rem, 4vw, 4.2rem)); }
    .cl-vp-right .cl-vp-node::after { left: calc(-1 * clamp(2.4rem, 4vw, 4.2rem)); }
    .cl-vp-node i {
        flex: 0 0 auto; width: 38px; height: 38px; display: grid; place-items: center;
        border-radius: 9px;
        background: linear-gradient(145deg, rgba(109, 70, 255, .34), rgba(228, 31, 61, .24));
        color: var(--white);
        font-size: 1rem;
        box-shadow: inset 0 0 18px rgba(255, 255, 255, .06);
    }
    .cl-vp-node span { font-size: .92rem; }

    .cl-vp-hub {
        position: relative;
        z-index: 3;
        text-align: center;
    }
    .cl-vp-core {
        position: relative;
        width: clamp(128px, 16vw, 174px);
        aspect-ratio: 1;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        border: 1px solid rgba(255, 72, 101, .42);
        background:
            radial-gradient(circle at 50% 44%, rgba(255, 72, 101, .22), transparent 44%),
            rgba(13, 19, 28, .92);
        box-shadow:
            0 0 0 26px rgba(255, 255, 255, .035),
            0 0 0 54px rgba(255, 255, 255, .022),
            0 0 64px rgba(255, 72, 101, .22);
    }
    .cl-vp-core span,
    .cl-vp-core strong {
        font-family: 'Chakra Petch', sans-serif;
        text-transform: uppercase;
        line-height: 1;
    }
    .cl-vp-core span {
        color: var(--muted);
        font-size: .78rem;
        letter-spacing: .18em;
    }
    .cl-vp-core strong {
        margin-top: .35rem;
        color: var(--white);
        font-size: clamp(1.7rem, 3vw, 2.2rem);
    }

    @media (max-width: 767.98px) {
        .cl-vp { grid-template-columns: 1fr; gap: 1rem; min-height: 0; }
        .cl-vp-hub { order: -1; margin-bottom: .5rem; }
        .cl-vp-left .cl-vp-node:nth-child(even),
        .cl-vp-right .cl-vp-node:nth-child(even) { transform: none; }
        .cl-vp-node::before,
        .cl-vp-node::after { display: none; }
    }
</style>
@endpush

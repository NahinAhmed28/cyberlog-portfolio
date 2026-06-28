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
        <div class="text-center mb-5">
            <p class="section-eyebrow mb-2" data-reveal>Security Posture Diagram</p>
            <h2 class="page-section-heading text-secondary mb-3" data-reveal>From Exposure to Verified Remediation</h2>
            <p class="text-muted lead-narrow mb-0" data-reveal>
                VAPT is not just scanning. Cyberlog maps your attack surface, validates the real
                business impact, and helps your team raise its security posture with evidence.
            </p>
        </div>

        <div class="cl-vp" data-reveal>
            <div class="cl-vp-col">
                @foreach ($left as $item)
                    <div class="cl-vp-node"><i class="fas {{ $item[0] }}"></i><span>{{ $item[1] }}</span></div>
                @endforeach
            </div>

            <div class="cl-vp-hub">
                <div class="cl-vp-core"><i class="fas fa-shield-halved"></i></div>
                <strong>Cyberlog VAPT</strong>
            </div>

            <div class="cl-vp-col">
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
            radial-gradient(760px 420px at 50% 40%, rgba(255, 72, 101, .1), transparent 60%),
            linear-gradient(180deg, rgba(7, 17, 31, .96), rgba(11, 24, 48, .9));
    }
    .cl-vp {
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        gap: clamp(1rem, 4vw, 3.5rem);
        align-items: center;
        max-width: 1040px;
        margin: 0 auto;
    }
    .cl-vp-col { display: flex; flex-direction: column; gap: 1rem; }
    .cl-vp-node {
        display: flex; align-items: center; gap: .8rem;
        padding: 1rem 1.15rem;
        border: 1px solid var(--line); border-radius: 10px;
        background: linear-gradient(160deg, var(--surface), var(--bg-alt));
        color: var(--white); font-weight: 500;
        transition: transform .25s var(--ease), border-color .25s var(--ease);
    }
    .cl-vp-node:hover { transform: translateY(-3px); border-color: var(--red-soft); }
    .cl-vp-node i {
        flex: 0 0 auto; width: 38px; height: 38px; display: grid; place-items: center;
        border-radius: 9px; background: var(--blue-dim); color: var(--warm-soft); font-size: 1rem;
    }
    .cl-vp-node span { font-size: .92rem; }

    .cl-vp-hub { text-align: center; }
    .cl-vp-core {
        width: clamp(120px, 16vw, 180px); aspect-ratio: 1; margin: 0 auto 1rem;
        display: grid; place-items: center; border-radius: 50%;
        border: 2px solid var(--red-soft);
        background: radial-gradient(circle at 50% 35%, rgba(228, 31, 61, .28), rgba(7, 17, 31, .96) 72%);
        box-shadow: 0 0 60px rgba(228, 31, 61, .35), inset 0 0 40px rgba(228, 31, 61, .25);
    }
    .cl-vp-core i { font-size: clamp(2.4rem, 5vw, 3.6rem); color: #fff; filter: drop-shadow(0 0 14px rgba(255, 138, 0, .5)); }
    .cl-vp-hub strong {
        font-family: 'Chakra Petch', sans-serif; color: var(--white);
        font-size: 1.4rem; letter-spacing: .02em;
    }

    @media (max-width: 767.98px) {
        .cl-vp { grid-template-columns: 1fr; gap: 1rem; }
        .cl-vp-hub { order: -1; margin-bottom: .5rem; }
    }
</style>
@endpush

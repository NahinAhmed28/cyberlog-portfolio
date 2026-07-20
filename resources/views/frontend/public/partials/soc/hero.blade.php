{{-- SOC › Hero — heading + particle picture (box removed per feedback) --}}
@php
    $contact = Route::has('public.contact') ? route('public.contact') : (Route::has('contact') ? route('contact') : '#');
@endphp
<header class="cl-hero cl-soc-hero" id="page-top">
    <canvas class="cl-soc-net" data-net aria-hidden="true"></canvas>

    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <p class="section-eyebrow mb-3" data-reveal data-hero>Security Operations Center</p>
                <h1 class="cl-soc-h mb-3" data-reveal data-hero>24/7 <span class="grad-text">SOC</span></h1>
                <p class="lead text-muted mb-4" data-reveal data-hero>
                    Cyberlog provides fully managed and co-managed SOC support, SOC solution to monitor security events, detect threats, reduce alert noise, and support faster incident response.
                </p>

                {{--<div class="d-flex flex-wrap gap-2 mb-4" data-reveal data-hero>
                    <span class="cl-soc-chip"><i class="fas fa-wave-square"></i>Threat Detection</span>
                    <span class="cl-soc-chip"><i class="fas fa-hand-fist"></i>Incident Response</span>
                    <span class="cl-soc-chip"><i class="fas fa-desktop"></i>SIEM Monitoring</span>
                    <span class="cl-soc-chip"><i class="fas fa-crosshairs"></i>Threat Hunting</span>
                    <span class="cl-soc-chip"><i class="fas fa-fingerprint"></i>Digital Forensics</span>
                    <span class="cl-soc-chip"><i class="fas fa-network-wired"></i>Network Forensics</span>
                </div>--}}

                <div class="d-flex flex-wrap gap-3" data-reveal data-hero>
                    <a class="btn btn-xl text-white fw-bold btn cl-nav-cta" href="{{ $contact }}">Talk to an Expert</a>
                    <a class="btn btn-outline-light btn-xl" href="#calculator"><i class="fas fa-calculator me-1"></i> SOC Cost Calculator</a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="cl-soc-live" data-reveal data-hero>
                    <div class="cl-soc-live-top">
                        <span></span>
                        <strong>SOC // Live Operations</strong>
                    </div>
                    <div class="cl-soc-live-stats">
                        <div><strong>1204</strong><span>Alerts Triaged</span></div>
                        <div><strong>0.5h</strong><span>Mean MTTR</span></div>
                        <div><strong>38</strong><span>Threats Blocked</span></div>
                    </div>
                    <div class="cl-soc-bars" aria-hidden="true">
                        @foreach ([24, 46, 34, 22, 38, 44, 31, 58, 36, 52, 61, 68, 35, 28, 42] as $height)
                            <span style="--h: {{ $height }}%;"></span>
                        @endforeach
                    </div>
                    <div class="cl-soc-log">
                        <p>13:15:50 <span>[VERIFIED]</span> MFA challenge - success</p>
                        <p>13:15:48 <span>[WATCHED]</span> CVE-2026-1100 - 36 hosts</p>
                        <p>13:15:46 <span>[QUARANTINE]</span> malware sample - sandbox-07</p>
                        <p>13:15:44 <span>[BLOCKED]</span> brute-force - 203.0.113.*</p>
                        <p>13:15:42 <span>[DENIED]</span> lateral move - host-1142</p>
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
    }
    .cl-soc-log {
        padding: .75rem 1rem 1rem;
        border-top: 1px solid var(--line);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .72rem;
    }
    .cl-soc-log p { margin: .14rem 0; color: var(--muted); }
    .cl-soc-log span { color: var(--red-soft); }
    @media (max-width: 767.98px) {
        .cl-soc-live-stats { grid-template-columns: 1fr; }
        .cl-soc-live-stats div { border-right: 0; border-bottom: 1px solid var(--line); }
        .cl-soc-live-stats div:last-child { border-bottom: 0; }
    }
</style>
@endpush

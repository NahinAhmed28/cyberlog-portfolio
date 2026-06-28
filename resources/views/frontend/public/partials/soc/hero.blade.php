{{-- SOC › Hero — heading + particle picture (box removed per feedback) --}}
@php
    $contact = Route::has('public.contact') ? route('public.contact') : (Route::has('contact') ? route('contact') : '#');
@endphp
<header class="cl-hero cl-soc-hero" id="page-top">
    <canvas class="cl-soc-net" data-net aria-hidden="true"></canvas>

    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-9">
                <p class="section-eyebrow mb-3" data-reveal data-hero>Security Operations Center</p>
                <h1 class="cl-soc-h mb-3" data-reveal data-hero>24/7 <span class="grad-text">SOC as a Service</span></h1>
                <p class="lead text-muted mb-4 mx-auto" style="max-width: 720px;" data-reveal data-hero>
                    Cyberlog provides fully managed and co-managed SOC support to monitor security events,
                    detect threats, reduce alert noise, and support faster incident response.
                </p>

                <div class="d-flex flex-wrap gap-2 justify-content-center mb-4" data-reveal data-hero>
                    <span class="cl-soc-chip"><i class="fas fa-wave-square"></i>Threat Detection</span>
                    <span class="cl-soc-chip"><i class="fas fa-hand-fist"></i>Incident Response</span>
                    <span class="cl-soc-chip"><i class="fas fa-desktop"></i>SIEM Monitoring</span>
                    <span class="cl-soc-chip"><i class="fas fa-crosshairs"></i>Threat Hunting</span>
                    <span class="cl-soc-chip"><i class="fas fa-fingerprint"></i>Digital Forensics</span>
                    <span class="cl-soc-chip"><i class="fas fa-network-wired"></i>Network Forensics</span>
                </div>

                <div class="d-flex flex-wrap gap-3 justify-content-center" data-reveal data-hero>
                    <a class="btn btn-primary btn-xl text-white fw-bold" href="{{ $contact }}">Talk to an Expert</a>
                    <a class="btn btn-outline-light btn-xl" href="#calculator"><i class="fas fa-calculator me-1"></i> SOC Cost Calculator</a>
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

    .cl-soc-chip {
        display: inline-flex; align-items: center; gap: .5rem;
        font-family: 'IBM Plex Mono', monospace; font-size: .8rem; color: var(--white);
        background: rgba(255, 255, 255, 0.04); border: 1px solid var(--line);
        border-left: 3px solid var(--blue-bright); border-radius: 8px; padding: .5rem .9rem;
    }
    .cl-soc-chip i { color: var(--blue-bright); }
</style>
@endpush

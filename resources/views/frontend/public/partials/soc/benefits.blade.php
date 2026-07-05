{{-- SOC › Benefits — borderless cards per feedback (ref: underdefense.com) --}}
@php
    $benefits = [
        ['fa-bolt', 'Real-Time Threat Detection', 'Monitor logs, alerts, and security events to detect threats before they cause serious impact.'],
        ['fa-layer-group', 'Centralized Security Visibility', 'Bring logs from servers, networks, endpoints, and applications into one monitoring environment.'],
        ['fa-volume-xmark', 'Reduced Alert Noise', 'Use customized alert rules to reduce false positives and help teams focus on real threats.'],
        ['fa-hand-fist', 'Faster Incident Response', 'Support alert triage, investigation, containment, and response when suspicious activity is detected.'],
        ['fa-crosshairs', 'Proactive Threat Hunting', 'Look beyond routine alerts to identify hidden threats, unusual behavior, and attack patterns.'],
        ['fa-fingerprint', 'Forensics Support', 'Support digital and network forensics to investigate incidents and understand root cause.'],
    ];
@endphp

<section class="page-section" id="benefits">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>Why Cyberlog SOC</p>
        <h2 class="page-section-heading text-center text-secondary mb-5" data-reveal>SOC Benefits</h2>

        <div class="cl-socben-panel" data-reveal>
            @foreach ($benefits as $b)
                <div class="cl-socben">
                    <i class="fas {{ $b[0] }}"></i>
                    <h5>{{ $b[1] }}</h5>
                    <p>{{ $b[2] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-socben-panel {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
    }
    .cl-socben {
        padding: 1.85rem;
        border-radius: 8px;
        background: rgba(16, 31, 58, .72);
        box-shadow: 0 18px 42px rgba(5, 20, 60, .28);
    }
    .cl-socben i { color: var(--blue-bright); font-size: 1.4rem; margin-bottom: .9rem; display: block; }
    .cl-socben h5 { font-family: 'Chakra Petch', sans-serif; color: var(--white); font-size: 1.05rem; margin-bottom: .5rem; }
    .cl-socben p { color: var(--muted); font-size: .9rem; line-height: 1.55; margin: 0; }

    @media (max-width: 767.98px) {
        .cl-socben-panel { grid-template-columns: 1fr; }
    }
</style>
@endpush

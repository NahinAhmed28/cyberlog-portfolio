{{-- SOC › Custom pricing tiers --}}
@php
$plans = [
    [
        'Essential', 
        'For organizations starting with structured SOC monitoring and basic security visibility.', 
        [
            'SIEM setup and configuration', 
            'Log collection from key systems', 
            'Alert monitoring and triage', 
            'Monthly security summary', 
            'Basic incident guidance'
        ], 
        false
    ],
    [
        'Advanced', 
        'For organizations that need stronger detection, response support, and threat intelligence.', 
        [
            'Everything in Essential', 
            'Custom detection rules', 
            'Threat intelligence support', 
            'Incident investigation support', 
            'Regular tuning and reporting', 
            'Remediation guidance'
        ], 
        false // Most Popular
    ],
    [
        'Enterprise', 
        'For high-risk, regulated, or large environments that need full SOC coverage and response readiness.', 
        [
            'Everything in Advanced', 
            'Dedicated SOC analyst support', 
            'Proactive threat hunting', 
            'Digital and network forensics support', 
            'Incident response retainer', 
            'Executive reporting',
            'Compliance & audit support (ISO 27001, regulatory reporting)'
        ], 
        false
    ],
];
    $contact = Route::has('public.contact') ? route('public.contact') : (Route::has('contact') ? route('contact') : '#');
@endphp

<section class="page-section" id="pricing">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>Pricing</p>
        <h2 class="page-section-heading text-center text-secondary mb-5" data-reveal>Custom SOC Plans</h2>
        <div class="row g-4 justify-content-center">
            @foreach ($plans as $plan)
                <div class="col-md-6 col-lg-4">
                    <div class="cl-price-card {{ $plan[3] ? 'featured' : '' }} h-100 d-flex flex-column">
                        @if ($plan[3])<span class="badge bg-primary mb-2 align-self-center">Most Popular</span>@endif
                        <h4 class="fw-bold">{{ $plan[0] }}</h4>
                        <p class="text-muted">{{ $plan[1] }}</p>
                        <div class="cl-stat-num mb-3">Custom</div>
                        <ul class="list-unstyled text-start mb-4">
                            @foreach ($plan[2] as $feat)
                                <li class="mb-2"><i class="fas fa-circle-check text-primary me-2"></i>{!! $feat !!}</li>
                            @endforeach
                        </ul>
                        <a class="btn {{ $plan[3] ? 'btn-primary text-white' : 'btn-primary text-white' }} mt-auto fw-bold" href="{{ $contact }}">Get a Quote</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

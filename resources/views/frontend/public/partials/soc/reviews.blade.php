{{-- SOC › Reviews / testimonials (ref: underdefense.com) --}}
@php
    $reviews = [
        ['Cyberlog helped us bring our logs, alerts, and monitoring into one clear SOC workflow. Our team now has better visibility across critical systems.', 'Head of IT, Enterprise Organization', 'Security Visibility'],
        ['The SOC team improved our alert triage process and helped us focus on real threats instead of wasting time on unnecessary alerts.', 'IT Operations Lead, Financial Sector', 'Alert Triage'],
        ["Cyberlog's incident response support gave us practical guidance during suspicious activity. Their reporting was clear, actionable, and useful for management.", 'Security Manager, Regulated Organization', 'Incident Response'],
    ];
@endphp

<section class="page-section bg-light" id="reviews">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>Client Feedback</p>
        <h2 class="page-section-heading text-center text-secondary mb-2" data-reveal>What Clients Value About <span class="cl-title-accent">Cyberlog SOC</span></h2>
        <p class="text-center text-muted mb-5" data-reveal>Cyberlog SOC helps organizations improve visibility, reduce alert noise, and respond to security incidents with confidence.</p>

        <div class="row g-4">
            @foreach ($reviews as $r)
                <div class="col-md-4">
                    <div class="cl-review h-100 d-flex flex-column">
                        <div class="cl-stars mb-2">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="fst-italic">&ldquo;{{ $r[0] }}&rdquo;</p>
                        <div class="mt-auto">
                            <div class="fw-bold text-white">{{ $r[1] }}</div>
                            <span class="badge mt-2">{!! $r[2] !!}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

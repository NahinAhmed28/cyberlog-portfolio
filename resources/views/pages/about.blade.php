@extends('layouts.portfolio')

@section('title', 'About Us — Cyberlog')

@section('content')

@include('partials.page-hero', [
    'eyebrow' => 'About Us',
    'heading' => 'Defending What <span class="text-teal">Matters Most</span>',
    'subheading' => 'Cyberlog is a cyber defense partner for enterprises, government, and financial institutions — combining offensive security, managed operations, and compliance expertise.',
    'centered' => true,
])

{{-- Who We Are + Statistics --}}
<section class="page-section" id="story">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <p class="section-eyebrow mb-2">Who We Are</p>
                <h2 class="fw-bold text-secondary mb-3">Building digital resilience, one engagement at a time</h2>
                <p class="text-muted mb-0">
                    Cyberlog Limited is a Bangladesh-based cybersecurity company delivering enterprise-grade
                    protection for organizations navigating an evolving threat landscape. From offensive
                    testing like VAPT and Red Teaming to defensive operations like SOC and incident response,
                    we combine technical depth with practical, business-focused guidance. Our team has secured
                    critical government institutions, financial exchanges, and private enterprises across
                    Bangladesh, building digital resilience one engagement at a time.
                </p>
            </div>
            <div class="col-lg-6">
                {{-- TODO: confirm real figures with the Cyberlog team --}}
                <div class="row g-3">
                    @foreach ([
                        ['5+', 'Years defending Bangladesh'],
                        ['14+', 'Enterprise &amp; government clients'],
                        ['24/7', 'Security operations coverage'],
                        ['93', 'ISO 27001 controls implemented'],
                    ] as $m)
                        <div class="col-6"><div class="cl-benefit text-center"><div class="cl-stat-num">{{ $m[0] }}</div><div class="cl-stat-label">{!! $m[1] !!}</div></div></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Our Values --}}
<section class="page-section bg-navy-soft text-white" id="values">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Our Values</p>
        <h2 class="page-section-heading text-center text-uppercase text-white mb-5">What Drives Us</h2>
        <div class="row g-4">
            @foreach ([
                ['fa-eye', 'Vigilance', 'We stay alert to emerging threats around the clock, so our clients never have to face a security incident unprepared.'],
                ['fa-scale-balanced', 'Integrity', 'We operate with honesty, transparency, and ethical conduct in every engagement, earning the trust placed in us by government and enterprise clients alike.'],
                ['fa-bullseye', 'Precision', 'We deliver accurate, evidence-based findings and practical recommendations our clients can act on immediately, not guesswork dressed up as analysis.'],
            ] as $v)
                <div class="col-md-4">
                    <div class="cl-step h-100 text-center">
                        <i class="fas {{ $v[0] }} text-teal mb-3" style="font-size:2rem;"></i>
                        <h4 class="fw-bold">{{ $v[1] }}</h4>
                        <p class="text-white-50 mb-0">{{ $v[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Industry coverage and client grid, ordered per About page feedback. --}}
@include('partials.about-industries-clients')

@include('partials.reviews')

@include('partials.talk-to-expert')

@endsection

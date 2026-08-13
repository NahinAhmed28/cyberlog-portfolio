@extends('layouts.portfolio')

@section('title', 'IT Security Audit & ISO/IEC 27001 — Cyberlog')

@section('content')
<style>
    .cl-nav-cta.btn-xl {
    padding: 1rem 1.75rem;
    font-size: 1.25rem;
}

.cl-step{padding:0px;}
</style>

{{-- Section 1 — Hero (same treatment as SOC: centered, box removed) --}}


<header class="cl-hero text-white py-5" id="hero">
    <div class="container py-5">
        <div class="row align-items-center g-5 ">
            <div class="col-lg-7">
                    <p class="section-eyebrow mb-3">IT Security Audit & ISO/IEC 27001</p>
                <h1 class="cl-hero-heading text-start mb-3">Strengthen Security Controls and <span class="text-teal">Prepare for Compliance</span></h1>
                <p class="lead text-white-50 mb-4">Cyberlog helps organizations review IT systems, identify security gaps, improve governance, and prepare for ISO/IEC 27001 implementation and audit readiness.</p>


                <div class="d-flex flex-wrap gap-3">
                    <a class="btn btn-xl text-white fw-bold btn cl-nav-cta"
                       href="{{ route('contact') }}">
                       Talk to an Expert
                    </a>
                </div>
            </div>


                <div class="col-lg-5 d-none d-lg-block">
                    <div class="cl-step text-center">
                       
                       
                                <video width="100%" height="auto" autoplay muted loop playsinline>
    <source src="{{ asset('assets/img/services/iso27001.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
</video>
                    </div>
                </div>
  
        </div>
    </div>
</header>
{{-- Section 2 — Client --}}
@include('partials.clients')

{{-- Section 3 — Importance --}}
<section class="page-section" id="importance">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Importance</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Why Your Organization Needs ISO 27001</h2>
        <div class="row g-4">
            @foreach ([
                ['fa-lock', 'Protect Sensitive Information', 'ISO 27001 helps organizations manage information security risks and protect customer, business, and operational data.'],
                ['fa-handshake-angle', 'Build Customer Confidence', 'A structured ISMS shows clients, partners, and stakeholders that your organization takes security seriously.'],
                ['fa-scale-balanced', 'Meet Compliance Requirements', 'ISO 27001 supports audit readiness, regulatory alignment, and stronger governance across security processes.'],
                ['fa-magnifying-glass-chart', 'Reduce Security Gaps', 'It helps identify weak controls, unclear responsibilities, and process gaps before they become serious risks.'],
                ['fa-list-check', 'Improve Internal Discipline', 'Policies, procedures, risk registers, and control ownership make security easier to manage across teams.'],
                ['fa-certificate', 'Prepare for Certification', 'A proper implementation roadmap helps your organization move confidently toward ISO 27001 certification.'],
            ] as $v)
                <div class="col-md-6 col-lg-4">
                    {{--<div class="cl-benefit h-100 text-center">--}}
                    <div>
                        <i class="fas {{ $v[0] }} mb-3" style="font-size:2rem;"></i>
                        <h5 class="fw-bold">{{ $v[1] }}</h5>
                        <p class="text-muted small mb-0">{{ $v[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Section 4 — Our Approach --}}
<section class="page-section bg-light" id="journey">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Our Approach</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">The ISO 27001 Readiness Journey</h2>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="cl-journey">
                    @foreach ([
                        ['Gap Assessment', 'Review current security controls, policies, processes, and documentation against ISO/IEC 27001 requirements.'],
                        ['ISMS Scope &amp; Planning', 'Define the ISMS scope, business context, assets, responsibilities, and implementation roadmap.'],
                        ['Risk Assessment &amp; Treatment', 'Identify information security risks, evaluate impact, and prepare a practical risk treatment plan.'],
                        ['Policy &amp; Control Implementation', 'Develop required policies, procedures, control documents, and supporting evidence for ISMS readiness.'],
                        ['Internal Audit &amp; Management Review', 'Check ISMS effectiveness through internal audit, evidence review, and management-level evaluation.'],
                        ['Certification Audit Support', 'Prepare your team for external audit stages with required documents, records, and control evidence.'],
                        ['Continuous Improvement', 'Maintain audit readiness through monitoring, corrective actions, and regular ISMS improvement.'],
                    ] as $step)
                        <div class="cl-journey-item">
                            <h5 class="fw-bold mb-1">{!! $step[0] !!}</h5>
                            <p class="text-muted mb-0">{{ $step[1] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row g-4 text-center mt-4">
            <div class="col-md-6"><div class="cl-benefit"><div class="cl-stat-num">93</div><div class="cl-stat-label">Annex A Controls Reviewed</div></div></div>
            <div class="col-md-6"><div class="cl-benefit"><div class="cl-stat-num">ISMS</div><div class="cl-stat-label">Prepared for Certification Readiness</div></div></div>
        </div>
    </div>
</section>

{{-- Pricing section removed per feedback --}}

@include('partials.talk-to-expert', ['title' => 'Pursuing ISO 27001?', 'text' => "Let's map your fastest path to certification."])

@endsection

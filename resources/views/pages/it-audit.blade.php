@extends('layouts.portfolio')

@section('title', 'IT Security Audit & ISO/IEC 27001 — Cyberlog')

@section('content')

{{-- Section 1 — Hero (same treatment as SOC: centered, box removed) --}}
@include('partials.page-hero', [
    'eyebrow' => 'IT Security Audit & ISO/IEC 27001',
    'heading' => 'Strengthen Security Controls and <span class="text-teal">Prepare for Compliance</span>',
    'subheading' => 'Cyberlog helps organizations review IT systems, identify security gaps, improve governance, and prepare for ISO/IEC 27001 implementation and audit readiness.',
    'badges' => ['ISO 27001', 'Gap Assessment', 'Risk Treatment', 'Audit Readiness'],
    'centered' => true,
])

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
                    <div class="cl-benefit h-100 text-center">
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

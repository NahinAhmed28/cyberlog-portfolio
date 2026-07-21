@extends('layouts.portfolio')

@section('title', 'Awareness & Security Training - Cyberlog')

@section('content')

{{-- Section 1 — Hero --}}
@include('partials.page-hero', [
    'eyebrow' => 'Services',
    'heading' => 'Awareness &amp; <span class="text-teal">Security Training</span>',
    'subheading' => "Strengthen your organization's human firewall with practical, role-based cybersecurity training built on real-world attack scenarios.",
    //'badges' => ['Awareness Training', 'Phishing Simulation', 'Role-based Curriculum'],
    'primaryCta' => ['label' => 'Talk to an Expert', 'url' => route('contact')],
    'heroIcon' => 'fas fa-graduation-cap',
    'heroCaption' => 'Security awareness training',
    'centered' => false,
    'noCenteredHeading' => true
])

{{-- Section 2 — Client --}}
@include('partials.clients')

{{-- Section 3 — Importance --}}
<section class="page-section bg-navy-soft text-white" id="importance">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">WHY IT MATTERS</p>
        <h2 class="page-section-heading text-center text-uppercase text-white mb-5">WHY IT MATTERS</h2>
        <div class="row g-4">
            @foreach ([
                ['fa-users', 'Human Risk', 'People remain the most targeted attack surface in any organization.'],
                ['fa-circle-exclamation', 'Costly Mistakes', 'A single untrained click can undo millions spent on technical defenses.'],
                ['fa-shield-halved', 'Active Defense', 'Awareness training turns employees into defenders, not liabilities.'],
                ['fa-repeat', 'Lasting Behavior', 'Practical, scenario-based learning builds habits that stick beyond the session.'],
            ] as $item)
                <div class="col-md-6 col-lg-3">
                    <div class="cl-solution-card h-100 text-center">
                        <div class="cl-solution-icon mx-auto"><i class="fas {{ $item[0] }}"></i></div>
                        <h5 class="fw-bold">{{ $item[1] }}</h5>
                        <p class="text-muted small mb-0">{{ $item[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Section 4 — Our Way of Conducting Training --}}
<section class="page-section" id="approach">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Our Way of Conducting Training</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">How We Train Your Team</h2>
        <div class="row g-4">
            @foreach ([
                ['fa-clipboard-list', 'Baseline', 'Phishing simulation and awareness assessment to establish your starting point.'],
                ['fa-chalkboard-user', 'Train', 'Role-based, bite-sized modules covering real-world threats and best practices.'],
                ['fa-fish', 'Simulate', 'Ongoing phishing exercises that reinforce learning in real-world context.'],
                ['fa-chart-simple', 'Track', 'Post-training metrics that prove awareness is improving over time.'],
            ] as $w)
                <div class="col-md-6 col-lg-3">
                    <div class="cl-solution-card h-100 text-center">
                        <div class="cl-solution-icon mx-auto"><i class="fas {{ $w[0] }}"></i></div>
                        <h5 class="fw-bold">{{ $w[1] }}</h5>
                        <p class="text-muted small mb-0">{{ $w[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Section 5 — Professional Courses 
<section class="page-section bg-light" id="courses">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Professional Courses</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Learn Cyber Security From <span class="cl-title-accent">Industry Experts</span></h2>
        <div class="row g-4 justify-content-center">
            @foreach ([
                ['fa-user-secret', 'Certified Ethical Hacker (CEH)', 'Hands-on ethical hacking foundations for learners preparing to assess and secure real systems.', '15,000 BDT', '10,000 BDT', '33% off'],
                ['fa-headset', 'Certified SOC Analyst (CSA)', 'Practical SOC analyst training for monitoring, triage, alert handling, and security operations readiness.', '10,000 BDT', '7,000 BDT', '30% off'],
            ] as $course)
                <div class="col-md-6 col-lg-5">
                    <div class="cl-price-card h-100 d-flex flex-column text-start">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="cl-solution-icon mb-0"><i class="fas {{ $course[0] }}"></i></div>
                            <div>
                                <span class="badge bg-primary mb-2">{{ $course[5] }}</span>
                                <h4 class="fw-bold mb-0">{{ $course[1] }}</h4>
                            </div>
                        </div>
                        <p class="text-muted">{{ $course[2] }}</p>
                        <div class="mt-auto">
                            <div class="text-muted small text-decoration-line-through">{{ $course[3] }}</div>
                            <div class="cl-stat-num">{{ $course[4] }}</div>
                            <a class="btn btn-primary text-white fw-bold mt-3" href="{{ route('contact') }}">Ask About This Course</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
--}}
<section class="page-section bg-navy-soft text-white" id="impact">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <p class="section-eyebrow mb-2">Measurable Impact</p>
                <h2 class="fw-bold mb-3">Training that moves the needle</h2>
                <p class="text-white-50 mb-0">
                    Our capacity building program for the IT team of Bangladesh Investment Development
                    Authority (BIDA) delivered measurable gains in cybersecurity readiness and
                    institutional resilience.
                </p>
            </div>
            <div class="col-lg-7">
                <div class="row g-3">
                    @foreach ([
                        ['250%+', "Increase in employees' cybersecurity skills"],
                        ['12', 'Security areas reviewed'],
                        ['200+', 'Employees trained (Adcomm Limited)'],
                        ['85%', 'Reduction in phishing click-through'],
                    ] as $s)
                        <div class="col-6">
                            <div class="cl-step text-center">
                                <div class="cl-stat-num">{{ $s[0] }}</div>
                                <div class="text-white-50 small">{{ $s[1] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 6 removed: Trusted-by client strip (per request) --}}

{{-- Section 7 — Case Strategy (ref: cira.ca) --}}
<section class="page-section bg-light" id="get-started">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Get Started</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Get Your Staff Started With Training Today</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="cl-price-card h-100 d-flex flex-column">
                    <h4 class="fw-bold">Enterprise</h4>
                    <p class="text-muted">50+ employees</p>
                    <ul class="list-unstyled text-start mb-4">
                        <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Department-specific training tracks and reporting</li>
                        <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Dedicated program coordinator</li>
                        <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Custom phishing simulation campaigns</li>
                        <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Multiple admin access</li>
                        <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Designed to support large organizations</li>
                    </ul>
                    <a class="btn btn-primary text-white fw-bold mt-auto" href="{{ route('contact') }}">Get a Quote</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="cl-price-card h-100 d-flex flex-column">
                    <h4 class="fw-bold">Small Teams</h4>
                    <p class="text-muted">5-50 employees</p>
                    <ul class="list-unstyled text-start mb-4">
                        <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Simple, fast setup</li>
                        <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Pre-configured training curriculum</li>
                        <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Full access to the training module library</li>
                        <li class="mb-2"><i class="fas fa-check text-teal me-2"></i>Designed with small teams in mind</li>
                    </ul>
                    <a class="btn btn-primary fw-bold mt-auto" href="{{ route('contact') }}">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section 8 — Contact Us (ref: cira.ca) --}}
<section class="page-section" id="contact">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Us</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-envelope"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6"><input class="form-control" type="text" placeholder="First name *"></div>
                        <div class="col-md-6"><input class="form-control" type="text" placeholder="Last name *"></div>
                        <div class="col-md-6"><input class="form-control" type="text" placeholder="Company name *"></div>
                        <div class="col-md-6"><input class="form-control" type="text" placeholder="Province / City"></div>
                        <div class="col-md-6"><input class="form-control" type="email" placeholder="Email *"></div>
                        <div class="col-md-6"><input class="form-control" type="tel" placeholder="Phone number"></div>
                        <div class="col-12"><textarea class="form-control" rows="4" placeholder="Message"></textarea></div>
                        <div class="col-12"><button class="btn btn-primary btn-xl text-white fw-bold" type="submit">Send Message</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

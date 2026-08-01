@extends('frontend.public.layouts.public')

@section('title', 'Cyberlog - AI & Automation')

@section('content')

@php
    $contact = Route::has('public.contact') ? route('public.contact') : (Route::has('contact') ? route('contact') : '#');
@endphp
<header class="cl-hero cl-soc-hero" id="page-top">
    <canvas class="cl-soc-net" data-net aria-hidden="true"></canvas>

    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <p class="section-eyebrow mb-3" data-reveal data-hero>AI & Automation</p>
                <h1 class="cl-soc-h mb-3" data-reveal data-hero>AI & <span class="grad-text">Automation</span></h1>
                <p class="lead text-muted mb-4" data-reveal data-hero>
                    Cyberlog designs and builds intelligent automation systems for government, enterprise, and public service delivery, from smart city platforms and city corporation automation to workflow and workshop management systems. We turn manual, disconnected processes into smart, connected, and self-managing operations.
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
                </div>
            </div>

            <div class="col-lg-6">
                <figure class="cl-ai-hero-visual mb-0" data-reveal data-hero>
                    <img src="{{ asset('assets/img/services/ai-automation-flow.svg') }}"
                         alt="Animated AI automation workflow connecting data, intelligence, and business actions">
                </figure>
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
    .cl-ai-hero-visual {
        position: relative; padding: 1rem; overflow: hidden;
        border: 1px solid rgba(109, 156, 255, .22); border-radius: 12px;
        background: rgba(7, 15, 29, .58);
        box-shadow: 0 30px 80px rgba(0, 0, 0, .38), 0 0 42px rgba(47, 107, 255, .09);
    }
    .cl-ai-hero-visual img { display: block; width: 100%; height: auto; }
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
<style>
    /* ====================================================
   EVOLUTION
==================================================== */

.evolution-card{
    position:relative;
    background:linear-gradient(180deg,#0d1627,#0b1321);
    border:1px solid var(--line);
    border-radius:16px;
    padding:36px;
    overflow:hidden;
}

.evolution-card::before{
    content:"";
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:2px;
    background:linear-gradient(90deg,
        transparent,
        var(--blue-bright),
        transparent);
}

.evolution-header{
    display:flex;
    align-items:center;
    gap:.65rem;
    margin-bottom:40px;

    font-size:.75rem;
    font-family:"IBM Plex Mono", monospace;
    letter-spacing:.15em;
    text-transform:uppercase;
    color:var(--muted);
}

.pulse-dot{
    width:8px;
    height:8px;
    border-radius:50%;
    background:var(--red-soft);
    animation:pulse 2s infinite;
}

@keyframes pulse{
    50%{
        transform:scale(.7);
        opacity:.4;
    }
}

/* Timeline */

.timeline{
    position:relative;

    display:grid;
    grid-template-columns:repeat(7,1fr);

    gap:0;
}

.timeline-line{
    position:absolute;

    left:5%;
    right:5%;
    top:7px;

    height:3px;

    background:linear-gradient(90deg,
        var(--blue),
        var(--blue-bright),
        var(--red-soft));

    border-radius:20px;
}

.timeline-item{
    position:relative;
    z-index:2;

    display:flex;
    flex-direction:column;
    align-items:center;
    text-align:center;

    padding-top:0;
}

.timeline-dot{
    width:16px;
    height:16px;

    border-radius:50%;

    background:#09111f;
    border:3px solid var(--blue-bright);

    margin-bottom:18px;

    transition:.3s;
}

.timeline-item.active .timeline-dot{
    background:var(--warm-soft);
    border-color:var(--warm-soft);
    box-shadow:0 0 22px rgba(255,191,27,.45);
}

.timeline-year{
    font-size:1rem;
    font-weight:700;
    color:#fff;
    margin-bottom:.65rem;
}

.timeline-text{
    max-width:140px;

    font-size:.8rem;
    line-height:1.6;

    color:var(--muted);
}

/* ==========================================
   Responsive
========================================== */

@media (max-width:991px){

    .timeline{
        grid-template-columns:repeat(4,1fr);
        row-gap:40px;
    }

    .timeline-line{
        display:none;
    }
}

@media (max-width:576px){

    .evolution-card{
        padding:28px 20px;
    }

    .timeline{
        grid-template-columns:repeat(2,1fr);
        row-gap:34px;
    }

    .timeline-text{
        max-width:130px;
        font-size:.78rem;
    }
}
</style>
@endpush

<!-- Evolution Section -->
<section class="page-section bg-navy text-white" id="evolution">
    <div class="container">

        <p class="section-eyebrow text-center mb-2">
            The Evolution
        </p>

        <h2 class="page-section-heading text-center text-uppercase text-white mb-3">
            From Manual Operations to
            <span class="cl-title-accent">Intelligent Automation</span>
        </h2>

        <p class="text-center text-muted mx-auto mb-5"
           style="max-width:760px;">
            How institutions and industries have moved from disconnected,
            paper-based processes toward smart, self-operating systems.
        </p>

        <div class="evolution-card">

            <div class="evolution-header">
                <span class="pulse-dot"></span>
                Evolution // 2015 – 2026
            </div>

            <div class="timeline">

                <div class="timeline-line"></div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-year">2015</div>
                    <div class="timeline-text">
                        Manual, paper-based processes and disconnected departments
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-year">2017</div>
                    <div class="timeline-text">
                        Early digitization of records and internal workflows
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-year">2019</div>
                    <div class="timeline-text">
                        Web and mobile platforms replace manual service delivery
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-year">2021</div>
                    <div class="timeline-text">
                        Integrated systems connect departments and data
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-year">2023</div>
                    <div class="timeline-text">
                        Automation reduces repetitive manual work
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-year">2025</div>
                    <div class="timeline-text">
                        AI-assisted tools support daily decision-making
                    </div>
                </div>

                <div class="timeline-item active">
                    <div class="timeline-dot"></div>
                    <div class="timeline-year">2026</div>
                    <div class="timeline-text">
                        Smart, self-operating systems become industry standard
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<section class="page-section bg-navy-soft text-white" id="benefits">
    <div class="container">

        <p class="section-eyebrow text-center mb-2">
            WHY CYBERLOG AI & AUTOMATION
        </p>

        <h2 class="page-section-heading text-center text-uppercase text-white mb-3">
            AI & Automation
            <span class="cl-title-accent">Benefits</span>
        </h2>

        <p class="text-center text-muted mx-auto mb-5" style="max-width:760px;">
            Our AI-powered solutions help organizations automate operations,
            improve efficiency, reduce costs, and make smarter decisions through
            connected digital systems.
        </p>

        <div class="row g-4 cl-ai-benefit-grid">

            <!-- 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="cl-ai-benefit-card h-100">

                    <div class="cl-solution-icon">
                        <i class="fas fa-bolt"></i>
                    </div>

                    <h5 class="fw-bold mb-3">
                        Faster Service Delivery
                    </h5>

                    <p class="text-muted small mb-0">
                        Automated workflows dramatically reduce processing time by
                        replacing slow manual tasks with intelligent, instant
                        execution.
                    </p>

                </div>
            </div>

            <!-- 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="cl-ai-benefit-card h-100">

                    <div class="cl-solution-icon">
                        <i class="fas fa-sitemap"></i>
                    </div>

                    <h5 class="fw-bold mb-3">
                        Centralized Management
                    </h5>

                    <p class="text-muted small mb-0">
                        Connect departments, services, and locations through one
                        unified platform instead of disconnected systems.
                    </p>

                </div>
            </div>

            <!-- 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="cl-ai-benefit-card h-100">

                    <div class="cl-solution-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>

                    <h5 class="fw-bold mb-3">
                        Reduced Manual Errors
                    </h5>

                    <p class="text-muted small mb-0">
                        Automation eliminates repetitive data entry and minimizes
                        costly human errors throughout daily operations.
                    </p>

                </div>
            </div>

            <!-- 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="cl-ai-benefit-card h-100">

                    <div class="cl-solution-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>

                    <h5 class="fw-bold mb-3">
                        Real-Time Monitoring
                    </h5>

                    <p class="text-muted small mb-0">
                        Live dashboards provide instant visibility into operations,
                        helping leaders make faster, data-driven decisions.
                    </p>

                </div>
            </div>

            <!-- 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="cl-ai-benefit-card h-100">

                    <div class="cl-solution-icon">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </div>

                    <h5 class="fw-bold mb-3">
                        Scalable Smart Systems
                    </h5>

                    <p class="text-muted small mb-0">
                        Grow from a single department to enterprise-wide deployment
                        without rebuilding your digital infrastructure.
                    </p>

                </div>
            </div>

            <!-- 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="cl-ai-benefit-card h-100">

                    <div class="cl-solution-icon">
                        <i class="fas fa-coins"></i>
                    </div>

                    <h5 class="fw-bold mb-3">
                        Cost & Resource Efficiency
                    </h5>

                    <p class="text-muted small mb-0">
                        Reduce operational costs while allowing teams to focus on
                        strategic, high-value work instead of repetitive tasks.
                    </p>

                </div>
            </div>

        </div>

    </div>
</section>

<section class="page-section cl-proof-reviews" id="client-feedback">
    <div class="container">

        <p class="section-eyebrow text-center mb-2">
            CLIENT FEEDBACK
        </p>

        <h2 class="page-section-heading cl-proof-title text-center mb-3">
            Our Clients
            <span class="cl-title-accent">Say It Best</span>
        </h2>

        <p class="text-center text-muted mx-auto mb-5" style="max-width:760px;">
            Cyberlog's AI and automation solutions help organizations modernize
            operations, reduce manual work, and deliver faster, smarter services.
        </p>

        <div class="row g-4 cl-proof-grid">

            <!-- Review 1 -->
            <div class="col-lg-4">
                <article class="cl-proof-card h-100" data-reveal>

                    <div class="cl-proof-badge" aria-hidden="true">
                        <i class="fas fa-city"></i>
                    </div>

                    <h3 class="cl-proof-award">
                        Smart City Chuadanga
                    </h3>

                    <div class="cl-proof-rating" aria-label="5.0 out of 5 stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span class="ms-2 fw-semibold">5.0</span>
                    </div>

                    <p class="cl-proof-quote">
                        “Cyberlog helped us digitize and automate our city service
                        workflows. What once took days now happens in real time,
                        giving our team a single platform to manage everything.”
                    </p>

                </article>
            </div>

            <!-- Review 2 -->
            <div class="col-lg-4">
                <article class="cl-proof-card h-100" data-reveal>

                    <div class="cl-proof-badge" aria-hidden="true">
                        <i class="fas fa-flask"></i>
                    </div>

                    <h3 class="cl-proof-award">
                        Bangladesh Petroleum Institute
                    </h3>

                    <div class="cl-proof-rating" aria-label="5.0 out of 5 stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span class="ms-2 fw-semibold">5.0</span>
                    </div>

                    <p class="cl-proof-quote">
                        “Cyberlog automated our reporting and internal processes,
                        improving visibility across operations while significantly
                        reducing repetitive manual work.”
                    </p>

                </article>
            </div>

            <!-- Review 3 -->
            <div class="col-lg-4">
                <article class="cl-proof-card h-100" data-reveal>

                    <div class="cl-proof-badge" aria-hidden="true">
                        <i class="fas fa-industry"></i>
                    </div>

                    <h3 class="cl-proof-award">
                        Akij Venture Ltd.
                    </h3>

                    <div class="cl-proof-rating" aria-label="5.0 out of 5 stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span class="ms-2 fw-semibold">5.0</span>
                    </div>

                    <p class="cl-proof-quote">
                        “Cyberlog delivered an automation platform that perfectly
                        matched our workflow. The solution streamlined operations
                        and improved efficiency across the organization.”
                    </p>

                </article>
            </div>

        </div>

    </div>
</section>

@include('partials.talk-to-expert', [
    'title' => 'Ready to put AI to work?',
    'text' => 'Talk with our experts about a practical automation roadmap built around your existing workflows.'
])

@push('styles')
<style>
    .cl-ai-benefit-card {
        position: relative; padding: 1.85rem; border: 0; border-radius: 8px;
        background: transparent; box-shadow: none; transition: transform .22s var(--ease);
    }
    .cl-ai-benefit-card:hover { transform: translateY(-3px); }
    .cl-ai-benefit-card .cl-solution-icon {
        width: 42px; height: 42px; display: grid; place-items: center; margin-bottom: 1rem;
        border: 1px solid rgba(109, 156, 255, .28); border-radius: 10px;
        color: #dceaff; background: rgba(109, 156, 255, .08); font-size: 1.2rem;
        box-shadow: 0 0 18px rgba(109, 156, 255, .14);
    }
    .cl-ai-benefit-card h5 {
        color: #fff; font-family: 'Chakra Petch', sans-serif; font-size: 1.05rem;
        text-shadow: 0 0 14px rgba(255, 255, 255, .16);
    }
    .cl-ai-benefit-card p { color: rgba(247, 251, 255, .88) !important; font-size: .92rem !important; line-height: 1.6; }
    #client-feedback .cl-proof-badge { font-size: 1.2rem; }
    #client-feedback .cl-proof-award { max-width: 19rem; font-size: 1.02rem; }
    @media (prefers-reduced-motion: reduce) { .cl-ai-benefit-card { transition: none; } }
</style>
@endpush

@endsection

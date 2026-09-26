@extends('frontend.public.layouts.public')

@section('title', content('page_ai_automation', 'title'))

@section('content')

@php
    $contact = Route::has('public.contact') ? route('public.contact') : (Route::has('contact') ? route('contact') : '#');
@endphp
<header class="cl-hero cl-soc-hero" id="page-top">
    <canvas class="cl-soc-net" data-net aria-hidden="true"></canvas>

    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <p class="section-eyebrow mb-3" data-reveal data-hero>{{ content('page_ai_automation', 'paragraph') }}</p>
                <h1 class="cl-soc-h mb-3" data-reveal data-hero>{{ content('page_ai_automation', 'heading') }} <span class="grad-text">{{ content('page_ai_automation', 'label') }}</span></h1>
                <p class="lead text-muted mb-4" data-reveal data-hero>
                    {{ content('page_ai_automation', 'paragraph_2') }}
                </p>

                

                <div class="d-flex flex-wrap gap-3" data-reveal data-hero>
                    <a class="btn btn-xl text-white fw-bold btn cl-nav-cta" href="{{ content('page_ai_automation', 'destination') }}">{{ content('page_ai_automation', 'link_label') }}</a>
                </div>
            </div>

            <div class="col-lg-6">
                <figure class="cl-ai-hero-visual mb-0" data-reveal data-hero>
                    
    <video width="100%" height="auto" autoplay muted loop playsinline>
    <source src="{{ asset(content('page_ai_automation', 'source_media')) }}" type="video/mp4">
    {{ content('page_ai_automation', 'video_text') }}
</video>
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
        position: relative; margin: 0 !important; overflow: hidden;
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


<section class="page-section bg-navy text-white" id="evolution">
    <div class="container">

        <p class="section-eyebrow text-center mb-2">
            {{ content('page_ai_automation', 'paragraph_3') }}
        </p>

        <h2 class="page-section-heading text-center text-uppercase text-white mb-3">
            {{ content('page_ai_automation', 'heading_2') }}
            <span class="cl-title-accent">{{ content('page_ai_automation', 'label_2') }}</span>
        </h2>

        <p class="text-center text-muted mx-auto mb-5"
           style="max-width:760px;">
            {{ content('page_ai_automation', 'paragraph_4') }}
        </p>

        <div class="evolution-card">

            <div class="evolution-header">
                <span class="pulse-dot"></span>
                {{ content('page_ai_automation', 'div_text') }}
            </div>

            <div class="timeline">

                <div class="timeline-line"></div>

                @foreach (content_items('page_ai_automation_timeline') as $contentRow)
<div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-year">{{ $contentRow['div_text'] }}</div>
                    <div class="timeline-text">
                        {{ $contentRow['div_text_2'] }}
                    </div>
                </div>
@endforeach

                <div class="timeline-item active">
                    <div class="timeline-dot"></div>
                    <div class="timeline-year">{{ content('page_ai_automation', 'div_text_14') }}</div>
                    <div class="timeline-text">
                        {{ content('page_ai_automation', 'div_text_15') }}
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<section class="page-section bg-navy-soft text-white" id="benefits">
    <div class="container">

        <p class="section-eyebrow text-center mb-2">
            {{ content('page_ai_automation', 'paragraph_5') }}
        </p>

        <h2 class="page-section-heading text-center text-uppercase text-white mb-3">
            {{ content('page_ai_automation', 'heading_3') }}
            <span class="cl-title-accent">{{ content('page_ai_automation', 'label_3') }}</span>
        </h2>

        <p class="text-center text-muted mx-auto mb-5" style="max-width:760px;">
            {{ content('page_ai_automation', 'paragraph_6') }}
        </p>

        <div class="row g-4 cl-ai-benefit-grid">

            
            @foreach (content_items('page_ai_automation_cards_2') as $contentRow)
<div class="col-md-6 col-lg-4">
                <div class="cl-ai-benefit-card h-100">

                    <div class="cl-solution-icon">
                        <i class="{{ $contentRow['icon'] }}"></i>
                    </div>

                    <h5 class="fw-bold mb-3">
                        {{ $contentRow['h5_text'] }}
                    </h5>

                    <p class="text-muted small mb-0">
                        {{ $contentRow['paragraph'] }}
                    </p>

                </div>
            </div>
@endforeach

        </div>

    </div>
</section>

<section class="page-section cl-proof-reviews" id="client-feedback">
    <div class="container">

        <p class="section-eyebrow text-center mb-2">
            {{ content('page_ai_automation', 'paragraph_13') }}
        </p>

        <h2 class="page-section-heading cl-proof-title text-center mb-3">
            {{ content('page_ai_automation', 'heading_4') }}
            <span class="cl-title-accent">{{ content('page_ai_automation', 'label_4') }}</span>
        </h2>

        <p class="text-center text-muted mx-auto mb-5" style="max-width:760px;">
            {{ content('page_ai_automation', 'paragraph_14') }}
        </p>

        <div class="row g-4 cl-proof-grid">

            
            @foreach (content_items('page_ai_automation_cards') as $contentRow)
<div class="col-lg-4" data-reveal="pop">
                <article class="cl-proof-card h-100">

                    <div class="cl-proof-badge" aria-hidden="true">
                        <img src="{{ asset($contentRow['img_media']) }}" alt="" loading="lazy" decoding="async">
                    </div>

                    <h3 class="cl-proof-award">
                        {{ $contentRow['heading'] }}
                    </h3>

                    <div class="cl-proof-rating" aria-label="{{ $contentRow['div_aria_label'] }}">
                        <i class="{{ $contentRow['icon'] }}"></i>
                        <i class="{{ $contentRow['icon_2'] }}"></i>
                        <i class="{{ $contentRow['icon_3'] }}"></i>
                        <i class="{{ $contentRow['icon_4'] }}"></i>
                        <i class="{{ $contentRow['icon_5'] }}"></i>
                        <span class="ms-2 fw-semibold">{{ $contentRow['label'] }}</span>
                    </div>

                    <p class="cl-proof-quote">
                        {{ $contentRow['paragraph'] }}
                    </p>

                </article>
            </div>
@endforeach

            
            <div class="col-lg-4" data-reveal="pop">
                <article class="cl-proof-card h-100">

                    <div class="cl-proof-badge" aria-hidden="true">
                        
                        <img src="{{ asset(content('page_ai_automation', 'img_media_3')) }}" alt="" width="272" height="94" loading="lazy" decoding="async">
                    </div>

                    <h3 class="cl-proof-award">
                        {{ content('page_ai_automation', 'heading_7') }}
                    </h3>

                    <div class="cl-proof-rating" aria-label="{{ content('page_ai_automation', 'div_aria_label_3') }}">
                        <i class="{{ content('page_ai_automation', 'icon_17') }}"></i>
                        <i class="{{ content('page_ai_automation', 'icon_18') }}"></i>
                        <i class="{{ content('page_ai_automation', 'icon_19') }}"></i>
                        <i class="{{ content('page_ai_automation', 'icon_20') }}"></i>
                        <i class="{{ content('page_ai_automation', 'icon_21') }}"></i>
                        <span class="ms-2 fw-semibold">{{ content('page_ai_automation', 'label_7') }}</span>
                    </div>

                    <p class="cl-proof-quote">
                        {{ content('page_ai_automation', 'paragraph_17') }}
                    </p>

                </article>
            </div>

        </div>

    </div>
</section>

@include('partials.talk-to-expert', [
    'title' => content('page_ai_automation', 'title_2'),
    'text' => content('page_ai_automation', 'text')
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
    #client-feedback .cl-proof-card { padding-top: 5rem; }
    #client-feedback .cl-proof-card:hover { transform: translateY(-8px) scale(1.015); }
    #client-feedback .cl-proof-badge {
        width: 96px;
        height: 96px;
        top: -42px;
    }
    #client-feedback .cl-proof-badge img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    #client-feedback .cl-proof-award { max-width: 19rem; font-size: 1.02rem; }
    html.js #client-feedback [data-reveal="pop"] {
        opacity: 0;
        transform: translateY(36px) scale(.9);
        transform-origin: center bottom;
    }
    html.js #client-feedback [data-reveal="pop"].is-in {
        opacity: 1;
        transform: none;
        transition: opacity .45s ease-out, transform .65s cubic-bezier(.18, .85, .3, 1.15);
    }
    @media (max-width: 991.98px) {
        #client-feedback .cl-proof-grid { row-gap: 3rem; }
    }
    @media (prefers-reduced-motion: reduce) {
        .cl-ai-benefit-card { transition: none; }
        #client-feedback .cl-proof-card:hover { transform: none; }
    }
</style>
@endpush

@endsection

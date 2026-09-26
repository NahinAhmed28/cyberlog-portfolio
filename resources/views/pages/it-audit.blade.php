@extends('layouts.portfolio')

@section('title', content('page_it_audit', 'title'))

@section('content')
<style>
    .cl-nav-cta.btn-xl {
    padding: 1rem 1.75rem;
    font-size: 1.25rem;
}

.cl-step{padding:0px;}
</style>




<header class="cl-hero text-white py-5" id="hero">
    <div class="container py-5">
        <div class="row align-items-center g-5 ">
            <div class="col-lg-7">
                    <p class="section-eyebrow mb-3">{{ content('page_it_audit', 'paragraph') }}</p>
                <h1 class="cl-hero-heading text-start mb-3">{{ content('page_it_audit', 'heading') }} <span class="text-teal">{{ content('page_it_audit', 'label') }}</span></h1>
                <p class="lead text-white-50 mb-4">{{ content('page_it_audit', 'paragraph_2') }}</p>


                <div class="d-flex flex-wrap gap-3">
                    <a class="btn btn-xl text-white fw-bold btn cl-nav-cta"
                       href="{{ content('page_it_audit', 'link_url') }}">
                       {{ content('page_it_audit', 'link_label') }}
                    </a>
                </div>
            </div>


                <div class="col-lg-5 d-none d-lg-block">
                    <div class="cl-step text-center">
                       
                       
                                <video width="100%" height="auto" autoplay muted loop playsinline>
    <source src="{{ asset(content('page_it_audit', 'source_media')) }}" type="video/mp4">
    {{ content('page_it_audit', 'video_text') }}
</video>
                    </div>
                </div>
  
        </div>
    </div>
</header>

@include('partials.clients')


<section class="page-section" id="importance">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('page_it_audit', 'paragraph_3') }}</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">{{ content('page_it_audit', 'heading_2') }}</h2>
        <div class="row g-4">
            @foreach (content_items('page_it_audit_v_items') as $v)
                <div class="col-md-6 col-lg-4">
                    
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


<section class="page-section bg-light" id="journey">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('page_it_audit', 'paragraph_4') }}</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">{{ content('page_it_audit', 'heading_3') }}</h2>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="cl-journey">
                    @foreach (content_items('page_it_audit_step_items') as $step)
                        <div class="cl-journey-item">
                            <h5 class="fw-bold mb-1">{!! $step[0] !!}</h5>
                            <p class="text-muted mb-0">{{ $step[1] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row g-4 text-center mt-4">
            @foreach (content_items('page_it_audit_links') as $contentRow)
<div class="col-md-6"><div class="cl-benefit"><div class="cl-stat-num">{{ $contentRow['div_text'] }}</div><div class="cl-stat-label">{{ $contentRow['div_text_2'] }}</div></div></div>
@endforeach
        </div>
    </div>
</section>



@include('partials.talk-to-expert', ['title' => content('page_it_audit', 'title_2'), 'text' => content('page_it_audit', 'text')])

@endsection

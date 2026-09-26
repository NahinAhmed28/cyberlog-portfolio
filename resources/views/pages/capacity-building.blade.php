@extends('layouts.portfolio')

@section('title', content('page_capacity_building', 'title'))

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
                    <p class="section-eyebrow mb-3">{{ content('page_capacity_building', 'paragraph') }}</p>
                <h1 class="cl-hero-heading text-start mb-3">{{ content('page_capacity_building', 'heading') }} <span class="text-teal">{{ content('page_capacity_building', 'label') }}</span></h1>
                <p class="lead text-white-50 mb-4">{{ content('page_capacity_building', 'paragraph_2') }}</p>


                <div class="d-flex flex-wrap gap-3">
                    <a class="btn btn-xl text-white fw-bold btn cl-nav-cta"
                       href="{{ content('page_capacity_building', 'link_url') }}">
                       {{ content('page_capacity_building', 'link_label') }}
                    </a>
                </div>
            </div>


                <div class="col-lg-5 d-none d-lg-block">
                    <div class="cl-step text-center">
                       
                       
                                <video width="100%" height="auto" autoplay muted loop playsinline>
    <source src="{{ asset(content('page_capacity_building', 'source_media')) }}" type="video/mp4">
    {{ content('page_capacity_building', 'video_text') }}
</video>
                   
                    </div>
                </div>
  
        </div>
    </div>
</header>


@include('partials.clients')


<section class="page-section bg-navy-soft text-white" id="importance">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('page_capacity_building', 'paragraph_3') }}</p>
        <h2 class="page-section-heading text-center text-uppercase text-white mb-5">{{ content('page_capacity_building', 'heading_2') }}</h2>
        <div class="row g-4">
            @foreach (content_items('page_capacity_building_item_items') as $item)
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


<section class="page-section" id="approach">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('page_capacity_building', 'paragraph_4') }}</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">{{ content('page_capacity_building', 'heading_3') }}</h2>
        <div class="row g-4">
            @foreach (content_items('page_capacity_building_w_items') as $w)
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





<section class="page-section bg-light" id="get-started">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('page_capacity_building', 'paragraph_5') }}</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">{{ content('page_capacity_building', 'heading_4') }}</h2>
        <div class="row g-4 justify-content-center">
@foreach(content_items('training_packages') as $package)
<div class="col-md-6 col-lg-5"><div class="cl-price-card h-100 d-flex flex-column"><h4 class="fw-bold">{{ $package['title'] }}</h4><p class="text-muted">{{ $package['description'] }}</p><ul class="list-unstyled text-start mb-4">@foreach($package['features'] as $feature)<li class="mb-2"><i class="fas fa-check text-teal me-2"></i>{{ $feature }}</li>@endforeach</ul><a class="btn btn-primary {{ ! empty($package['button_white_text']) ? 'text-white ' : '' }}fw-bold mt-auto" href="{{ $package['button_url'] }}">{{ $package['button_label'] }}</a></div></div>
@endforeach
</div></div>
</section>



@include('partials.talk-to-expert', ['title' => content('page_capacity_building', 'title_2'), 'text' => content('page_capacity_building', 'text')])

@endsection

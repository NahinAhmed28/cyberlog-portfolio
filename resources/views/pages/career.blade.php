@extends('layouts.portfolio')

@section('title', content('page_career', 'title'))

@section('content')

@include('partials.page-hero', [
    'eyebrow' => content('page_career', 'eyebrow'),
    'heading' => content('page_career', 'heading'),
    'subheading' => content('page_career', 'subheading'),
    'primaryCta' => ['label' => content('page_career', 'label'), 'url' => content('page_career', 'url')],
    'heroIcon' => content('page_career', 'hero_icon'),
    'heroCaption' => content('page_career', 'hero_caption'),
    'noCenteredHeading' => true
])


<section class="page-section" id="why-join">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('page_career', 'paragraph') }}</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">{{ content('page_career', 'heading_2') }}</h2>
        <div class="row g-4">
            @foreach (content_items('page_career_w_items') as $w)
                <div class="col-md-4">
                    <div class="cl-benefit h-100 text-center">
                        <i class="fas {{ $w[0] }} mb-3" style="font-size:2rem;"></i>
                        <h5 class="fw-bold">{!! $w[1] !!}</h5>
                        <p class="text-muted small mb-0">{{ $w[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<section class="page-section" id="why-join">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('page_career', 'paragraph_2') }}</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">{{ content('page_career', 'heading_3') }}</h2>
        <div class="row g-4">
            @foreach (content_items('page_career_w_items_2') as $w)
                <div class="col-md-4">
                    <div class="cl-benefit h-100 text-center">
                        <i class="fas {{ $w[0] }} mb-3" style="font-size:2rem;"></i>
                        <h5 class="fw-bold">{!! $w[1] !!}</h5>
                        <p class="text-muted small mb-0">{{ $w[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<section class="page-section bg-light" id="openings">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('page_career', 'paragraph_3') }}</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">{{ content('page_career', 'heading_4') }}</h2>
        <div class="row g-3 justify-content-center">
            @foreach (content_items('page_career_job_items') as $job)
                <div class="col-lg-9">
                    <div class="cl-client-card justify-content-between p-4">
                        <div>
                            <h5 class="fw-bold mb-1 text-secondary">{{ $job[0] }}</h5>
                            <span class="text-muted small me-3"><i class="{{ content('page_career', 'icon') }}"></i>{{ $job[1] }}</span>
                            <span class="badge bg-light text-secondary border">{{ $job[2] }}</span>
                        </div>
                        <a class="btn btn-primary text-white fw-bold" href="{{ content('page_career', 'link_url') }}">{{ content('page_career', 'link_label') }}</a>
                    </div>
                </div>
            @endforeach
        </div>
        <p class="text-center text-muted mt-4 mb-0">
            {{ content('page_career', 'paragraph_4') }} <a class="text-teal fw-semibold" href="{{ content('page_career', 'link_url_2') }}">{{ content('page_career', 'link_label_2') }}</a>.
        </p>
    </div>
</section>

@endsection

@extends('layouts.portfolio')

@section('title', 'Services — Cyberlog')

@section('content')

{{-- Hero — box removed per feedback (centered, single column) --}}
@include('partials.page-hero', [
    'eyebrow' => 'Our Services',
    'heading' => 'Full-Spectrum <span class="text-teal">Cyber Defense</span>',
    'subheading' => 'From offensive testing to managed operations and compliance, Cyberlog delivers the services that protect enterprises, government, and critical infrastructure.',
    'centered' => true,
])

<section class="page-section" id="all-services">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Security Solutions</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Explore Our <span class="cl-title-accent">Security Solutions</span></h2>

        <div class="row g-4">
            @foreach (config('cyberlog_services', []) as $sol)
                @php $href = Route::has($sol['route']) ? route($sol['route']) : '#'; @endphp
                <div class="col-md-6 col-lg-4">
                    <a class="cl-solution-card h-100" href="{{ $href }}">
                        <div class="cl-solution-icon"><i class="fas {{ $sol['icon'] }}"></i></div>
                        <h4 class="h5">{!! $sol['title'] !!}</h4>
                        <p class="text-muted mb-3">{{ $sol['desc'] }}</p>
                        <span class="text-teal fw-semibold">Learn more <i class="fas fa-arrow-right ms-1"></i></span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Our Security Engagement Process (shared with the home page) --}}
@include('frontend.public.partials.home.tech-diagram')

@include('partials.talk-to-expert')

@endsection

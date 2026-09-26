@extends('layouts.portfolio')

@section('title', content('page_services', 'title'))

@section('content')

@php
    $solutions = collect(content_items('services'))
        ->reject(fn ($service) => $service['route'] === 'secure-web-development');

    $serviceHref = function ($service) {
        if (!empty($service['url'])) return content_service_url($service);
        $groupRoutes = content('page_services', 'group_routes');

        $group = $service['group'] ?? null;
        if (isset($groupRoutes[$group]) && Route::has($groupRoutes[$group])) {
            return route($groupRoutes[$group]);
        }

        if (Route::has($service['route'])) {
            return route($service['route']);
        }

        return content_service_url($service);
    };
@endphp



<section class="page-section" id="all-services">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('page_services', 'paragraph') }}</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">{{ content('page_services', 'heading') }} <span class="cl-title-accent">{{ content('page_services', 'label') }}</span></h2>

        <div class="row g-4">
            @foreach ($solutions as $sol)
                <div class="col-md-6 col-lg-4">
                    <a class="cl-solution-card h-100" href="{{ $serviceHref($sol) }}">
                        <div class="cl-solution-icon"><i class="fas {{ $sol['icon'] }}"></i></div>
                        <h4 class="h5">{!! $sol['title'] !!}</h4>
                        <p class="text-muted mb-3">{{ $sol['desc'] }}</p>
                        <span class="text-teal fw-semibold">{{ content('page_services', 'label_2') }} <i class="{{ content('page_services', 'icon') }}"></i></span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

@include('partials.talk-to-expert')

@endsection

@extends('frontend.public.layouts.public')

@section('title', 'SOC as a Service — 24/7 Security Operations — Cyberlog')

@section('content')

{{-- Section 1 — Hero --}}
@include('frontend.public.partials.soc.hero')

{{-- Section 2 — Client (As like Home Page) --}}
@include('partials.clients')

{{-- Section 3 — Comparison --}}
@include('frontend.public.partials.soc.comparison')

{{-- Section 4 — Service Calculator --}}
@include('frontend.public.partials.soc.calculator')

{{-- Section 5 — Matrix --}}
@include('frontend.public.partials.soc.matrix')

{{-- Section 6 — Benefits --}}
@include('frontend.public.partials.soc.benefits')

{{-- Section 7 (New System Sensor) removed per feedback --}}

{{-- Section 8 — Talk to the Expert (form) --}}
@include('frontend.public.partials.soc.expert')

{{-- Section 9 — Pricing --}}
@include('frontend.public.partials.soc.pricing')

{{-- Section 10 — Reviews --}}
@include('frontend.public.partials.soc.reviews')

{{-- Closing CTA --}}
<section class="page-section">
    <div class="container">
        <div class="cl-cta d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3" data-reveal>
            <div>
                <h3 class="fw-bold mb-1">Still evaluating SOC options?</h3>
                <p class="mb-0 text-white-50">We'll walk you through the pros, cons, and pricing — no pressure.</p>
            </div>
            <a class="btn btn-primary btn-xl text-white fw-bold" href="{{ Route::has('public.contact') ? route('public.contact') : (Route::has('contact') ? route('contact') : '#') }}">Talk to an Expert</a>
        </div>
    </div>
</section>

@endsection

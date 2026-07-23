@extends('frontend.public.layouts.public')

@section('title', 'SOC as a Service — 24/7 Security Operations — Cyberlog')

@section('content')

{{-- Section 1 — Hero --}}
@include('frontend.public.partials.soc.hero')

{{-- New Section — Managed Services by the Numbers --}}

{{-- Section 2 — Client (As like Home Page) --}}
@include('partials.clients')

{{-- Section 3 — Comparison --}}
@include('frontend.public.partials.soc.comparison')

{{-- Section 4 — Service Calculator --}}
@include('frontend.public.partials.soc.calculator')

{{-- Section 5 — Matrix --}}
@include('frontend.public.partials.soc.matrix')

{{-- Managed Services by the Numbers --}}
@include('frontend.public.partials.soc.numbers')

{{-- Section 6 — Benefits --}}
@include('frontend.public.partials.soc.benefits')

{{-- Section 7 (New System Sensor) removed per feedback --}}

{{-- Section 8 — Pricing --}}
@include('frontend.public.partials.soc.pricing')

{{-- Section 9 — Reviews --}}
@include('frontend.public.partials.soc.reviews')

{{-- Closing CTA — use shared partial for consistent CTA across services --}}
@include('partials.talk-to-expert', [
    'title' => 'Still evaluating SOC options?',
    'text' => "We'll walk you through the pros, cons, and pricing — no pressure."
])

@endsection

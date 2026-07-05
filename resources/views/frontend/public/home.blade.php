@extends('frontend.public.layouts.public')

@section('title', 'Cyberlog — Build Cyber Resilience Before Attackers Build Access')

@section('content')

{{-- Home page arranged per client serial order (Home Page correction doc). --}}

{{-- 1. Hero / Landing --}}
@include('frontend.public.partials.home.hero')

{{-- 2. Our Clients (card shuffle) — appears right after the hero --}}
@include('partials.clients', ['clientAnimation' => 'shuffle'])

{{-- 3. Client Card (client success stories) --}}
@include('frontend.public.partials.home.case-cards')

{{-- 4. Technical Diagram (engagement process) --}}
@include('frontend.public.partials.home.tech-diagram')

{{-- 5. Security Solutions (Explore Our Security Solutions) --}}
@include('frontend.public.partials.home.solutions')

{{-- 6. Our Story (timeline) --}}
@include('frontend.public.partials.home.our-story')

{{-- Removed per client feedback ("some slides should not be included"):
     assessment, network (attack-surface), threats, defend-as-one, cta-banner --}}


@endsection

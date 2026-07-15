@extends('frontend.public.layouts.public')

@section('title', 'Cyberlog - Smarter Intelligence. Stronger Security.')

@section('content')

{{-- Home page arranged per client serial order (Home Page correction doc). --}}

{{-- 1. Hero / Landing --}}
@include('frontend.public.partials.home.hero')

{{-- 2. Our Clients - old sliding logo animation, restored under the hero --}}
@include('partials.clients')

{{-- 3. Website screenshot shuffle - no logos and no loading placeholder --}}
@include('frontend.public.partials.clients.deck')

{{-- 4. Technical Diagram (engagement process) --}}
@include('frontend.public.partials.home.tech-diagram')

{{-- 5. Security Solutions (Explore Our Security Solutions) --}}
@include('frontend.public.partials.home.solutions')

{{-- 6. Our Story (timeline) --}}
@include('frontend.public.partials.home.our-story')

{{-- Removed per client feedback ("some slides should not be included"):
     assessment, network (attack-surface), threats, defend-as-one, cta-banner --}}

@endsection

{{-- Home only: hide the "//" mono taglines (section eyebrows) per feedback.
     Scoped here so shared partials keep their labels on other pages. --}}
@push('styles')
<style>
    .section-eyebrow,
    .process-label { display: none !important; }
</style>
@endpush

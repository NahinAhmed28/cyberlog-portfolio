@extends('frontend.public.layouts.public')

@section('title', content('page_home', 'title'))

@section('content')




@include('frontend.public.partials.home.hero')


@include('partials.clients')


@include('frontend.public.partials.clients.deck')


@include('frontend.public.partials.home.tech-diagram')


@include('frontend.public.partials.home.solutions')


@include('frontend.public.partials.home.our-story')



@endsection


@push('styles')
<style>
    .section-eyebrow,
    .process-label { display: none !important; }
</style>
@endpush

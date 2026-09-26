@extends('frontend.public.layouts.public')

@section('title', content('page_vapt', 'title'))
@section('meta_description', content('page_vapt', 'meta_description'))

@section('content')


@include('frontend.public.partials.vapt.hero')


@include('partials.clients')


@include('frontend.public.partials.vapt.posture')


@include('frontend.public.partials.vapt.numbers')


@include('frontend.public.partials.vapt.calculator')


@include('frontend.public.partials.vapt.matrix')


@include('frontend.public.partials.vapt.boxes')


@include('frontend.public.partials.vapt.benefits')




@include('frontend.public.partials.vapt.reviews')

@include('partials.talk-to-expert', [
    'title' => content('page_vapt', 'title_2'),
    'text' => content('page_vapt', 'text')
])

@endsection

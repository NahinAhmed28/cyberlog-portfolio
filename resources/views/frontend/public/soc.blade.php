@extends('frontend.public.layouts.public')

@section('title', content('page_soc', 'title'))

@section('content')


@include('frontend.public.partials.soc.hero')




@include('partials.clients')


@include('frontend.public.partials.soc.comparison')


@include('frontend.public.partials.soc.calculator')


@include('frontend.public.partials.soc.matrix')


@include('frontend.public.partials.soc.numbers')


@include('frontend.public.partials.soc.benefits')




@include('frontend.public.partials.soc.pricing')


@include('frontend.public.partials.soc.reviews')


@include('partials.talk-to-expert', [
    'title' => content('page_soc', 'title_2'),
    'text' => content('page_soc', 'text')
])

@endsection

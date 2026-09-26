@extends('frontend.public.layouts.public')

@section('title', content('page_vciso', 'title'))
@section('meta_description', content('page_vciso', 'meta_description'))

@section('content')


@include('frontend.public.partials.vciso.hero')


@include('frontend.public.partials.vciso.product')

@include('partials.talk-to-expert', [
    'title' => content('page_vciso', 'title_2'),
    'text' => content('page_vciso', 'text')
])

@endsection

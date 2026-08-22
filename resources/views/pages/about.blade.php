@extends('layouts.portfolio')

@section('title', 'About Us — Cyberlog')

@section('content')

{{--@include('partials.page-hero', [
    'eyebrow' => 'About Us',
    'heading' => 'Defending What <span class="text-teal">Matters Most</span>',
    'subheading' => 'Cyberlog is a cyber defense partner for enterprises, government, and financial institutions — combining offensive security, managed operations, and compliance expertise.',
    'centered' => true,
])--}}

{{-- Industry coverage and client grid, ordered per About page feedback. --}}
@include('partials.about-industries-clients')

@include('partials.reviews')

@include('partials.talk-to-expert')

@endsection

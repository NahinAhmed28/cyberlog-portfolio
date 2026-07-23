@extends('frontend.public.layouts.public')

@section('title', 'Prohoree 365 - Unified Cybersecurity Solution - Cyberlog')
@section('meta_description', "Prohoree 365 is Cyberlog's unified cybersecurity solution, bringing security leadership, risk governance, compliance, SOC alignment, and security operations into one platform.")

@section('content')

{{-- Section 1: Diagram-led hero inspired by the ViserX home structure. --}}
@include('frontend.public.partials.vciso.hero')

{{-- Section 2: Product-style vCISO operating model inspired by Buguard layouts. --}}
@include('frontend.public.partials.vciso.product')

@include('partials.talk-to-expert', [
    'title' => 'Need a CISO without the full-time cost?',
    'text' => 'Cyberlog gives you executive security leadership, practical governance, and measurable progress from day one.'
])

@endsection

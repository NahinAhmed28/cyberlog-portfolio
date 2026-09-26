@extends('frontend.public.layouts.public')

@section('title', content('page_clients', 'title'))

@section('content')


<header class="cl-hero" id="clients-top">
    <div class="container text-center">
        <p class="cl-hero-eyebrow mb-3" data-reveal data-hero>{{ content('page_clients', 'paragraph') }}</p>
        <h1 class="cl-hero-heading mb-3" data-reveal data-hero>
            {{ content('page_clients', 'heading') }} <span class="accent">{{ content('page_clients', 'label') }}</span>
        </h1>
        
        <p class="lead text-muted lead-narrow mb-0" data-reveal data-hero>
            {{ content('page_clients', 'paragraph_2') }}
        </p>
    </div>
</header>


@include('partials.clients')


@include('frontend.public.partials.clients.deck')

@endsection

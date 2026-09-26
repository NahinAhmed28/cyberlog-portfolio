@extends('layouts.portfolio')

@section('title', content('page_offensive_security_services', 'title'))

@section('content')

@php
    $catalogue = collect(content_items('services'))->keyBy('route');
    $items = content_items('page_offensive_security_services_items');

    $services = collect($items)->filter(fn ($item) => $catalogue->has($item['route']))->map(function ($item) use ($catalogue) {
        $cfg = $catalogue->get($item['route'], []);
        return array_merge($cfg, [
            'image' => $item['image'],
            'imageAlt' => $item['imageAlt'],
            'lead' => $item['lead'],
            'points' => $item['points'],
        ]);
    })->all();
@endphp

@include('pages.partials.security-service-group', [
    'theme' => 'offensive',
    'eyebrow' => content('page_offensive_security_services', 'eyebrow'),
    'title' => content('page_offensive_security_services', 'title_2'),
    'summary' => content('page_offensive_security_services', 'summary'),
    'heroIcon' => content('page_offensive_security_services', 'hero_icon'),
    'heroImage' => content('page_offensive_security_services', 'hero_image'),
    'heroImageAlt' => content('page_offensive_security_services', 'hero_image_alt'),
    'services' => $services,
    'switchHref' => null,
    'switchLabel' => null,
    'ctaTitle' => content('page_offensive_security_services', 'cta_title'),
    'ctaText' => content('page_offensive_security_services', 'cta_text'),
])

@endsection

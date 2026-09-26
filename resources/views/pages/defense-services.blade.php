@extends('layouts.portfolio')

@section('title', content('legacy_pages_defense_services', 'title'))

@section('content')

@php
    $offensive = content_items('legacy_pages_defense_services_offensive');

    $defensive = content_items('legacy_pages_defense_services_defensive');
@endphp


<section class="page-section cl-ds-first" id="offensive">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('legacy_pages_defense_services', 'paragraph') }}</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">{{ content('legacy_pages_defense_services', 'heading') }} <span class="cl-title-accent">{{ content('legacy_pages_defense_services', 'label') }}</span></h2>

        @foreach ($offensive as $block)
            <div class="row g-4 g-lg-5 align-items-center cl-ds-row">
                <div class="col-lg-6 {{ $loop->odd ? '' : 'order-lg-2' }}">
                    <h3 class="cl-ds-title">{{ $block['title'] }}</h3>
                    <ul class="cl-ds-points list-unstyled">
                        @foreach ($block['points'] as $p)
                            <li><i class="{{ content('legacy_pages_defense_services', 'icon') }}"></i>{{ $p }}</li>
                        @endforeach
                    </ul>
                    <div class="cl-ds-related">
                        <span class="cl-ds-rel-label">{{ content('legacy_pages_defense_services', 'label_2') }}</span>
                        @foreach ($block['related'] as $rel)
                            <span class="cl-ds-rel">{{ $rel }}</span>@if (! $loop->last)<span class="cl-ds-dot">{{ content('legacy_pages_defense_services', 'label_3') }}</span>@endif
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 {{ $loop->odd ? '' : 'order-lg-1' }}">
                    <div class="cl-ds-visual cl-ds-visual-red" aria-label="{{ $block['title'] }}">
                        <i class="fas {{ $block['icon'] }}"></i>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<section class="page-section bg-light" id="defensive">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('legacy_pages_defense_services', 'paragraph_2') }}</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">{{ content('legacy_pages_defense_services', 'heading_2') }} <span class="cl-title-accent">{{ content('legacy_pages_defense_services', 'label_4') }}</span></h2>

        @foreach ($defensive as $block)
            <div class="row g-4 g-lg-5 align-items-center cl-ds-row">
                <div class="col-lg-6 {{ $loop->odd ? '' : 'order-lg-2' }}">
                    <h3 class="cl-ds-title">{{ $block['title'] }}</h3>
                    <ul class="cl-ds-points list-unstyled">
                        @foreach ($block['points'] as $p)
                            <li><i class="{{ content('legacy_pages_defense_services', 'icon_2') }}"></i>{{ $p }}</li>
                        @endforeach
                    </ul>
                    <div class="cl-ds-related">
                        <span class="cl-ds-rel-label">{{ content('legacy_pages_defense_services', 'label_5') }}</span>
                        @foreach ($block['related'] as $rel)
                            <span class="cl-ds-rel">{{ $rel }}</span>@if (! $loop->last)<span class="cl-ds-dot">{{ content('legacy_pages_defense_services', 'label_6') }}</span>@endif
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 {{ $loop->odd ? '' : 'order-lg-1' }}">
                    <div class="cl-ds-visual cl-ds-visual-blue" aria-label="{{ $block['title'] }}">
                        <i class="fas {{ $block['icon'] }}"></i>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

@include('partials.talk-to-expert', ['title' => content('legacy_pages_defense_services', 'title_2'), 'text' => content('legacy_pages_defense_services', 'text')])

@endsection

@push('styles')
<style>
    .cl-ds-first { padding-top: 9rem; }

    .cl-ds-row { margin-bottom: 3.5rem; }
    .cl-ds-row:last-child { margin-bottom: 0; }

    .cl-ds-title {
        display: inline-block;
        font-family: 'Chakra Petch', sans-serif;
        font-weight: 700;
        font-size: clamp(1.35rem, 2.4vw, 1.85rem);
        color: var(--white);
        margin-bottom: 1.1rem;
    }

    .cl-ds-points { margin-bottom: 1.1rem; }
    .cl-ds-points li {
        display: flex; align-items: flex-start; gap: .65rem;
        color: var(--text); margin-bottom: .7rem;
    }
    .cl-ds-points i { color: var(--red-soft); margin-top: .28rem; flex: 0 0 auto; }
    .cl-ds-points i.blue { color: var(--blue-bright); }

    .cl-ds-related { color: var(--muted); font-size: .85rem; }
    .cl-ds-rel-label {
        font-family: 'IBM Plex Mono', monospace; font-size: .72rem;
        letter-spacing: .1em; text-transform: uppercase; margin-right: .5rem;
    }
    .cl-ds-rel { color: var(--white); }
    .cl-ds-dot { margin: 0 .5rem; color: var(--muted); }

    .cl-ds-visual {
        display: grid; place-items: center;
        min-height: 250px; height: 100%;
        border-radius: 8px;
        border: 1px solid var(--line);
        overflow: hidden;
        transition: transform .3s var(--ease), border-color .3s var(--ease), box-shadow .3s var(--ease);
    }
    .cl-ds-visual:hover { transform: translateY(-5px); box-shadow: 0 24px 60px rgba(0, 0, 0, .4); }
    .cl-ds-visual i { font-size: clamp(3.4rem, 6vw, 5rem); }

    .cl-ds-visual-red {
        background:
            repeating-conic-gradient(from 0deg at 50% 50%, rgba(228, 31, 61, .16) 0deg 4deg, transparent 4deg 14deg),
            radial-gradient(circle at 50% 50%, rgba(228, 31, 61, .3), rgba(7, 17, 31, .96) 68%);
    }
    .cl-ds-visual-red:hover { border-color: var(--red-soft); }
    .cl-ds-visual-red i { color: var(--red-soft); filter: drop-shadow(0 0 22px rgba(228, 31, 61, .45)); }

    .cl-ds-visual-blue {
        background:
            repeating-conic-gradient(from 0deg at 50% 50%, rgba(47, 107, 255, .14) 0deg 4deg, transparent 4deg 14deg),
            radial-gradient(circle at 50% 50%, rgba(47, 107, 255, .28), rgba(7, 17, 31, .96) 68%);
    }
    .cl-ds-visual-blue:hover { border-color: var(--blue-bright); }
    .cl-ds-visual-blue i { color: var(--blue-bright); filter: drop-shadow(0 0 22px rgba(47, 107, 255, .45)); }

    @media (max-width: 991.98px) {
        .cl-ds-first { padding-top: 7rem; }
        .cl-ds-visual { min-height: 200px; }
        .cl-ds-row { margin-bottom: 2.75rem; }
    }
</style>
@endpush

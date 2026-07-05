@extends('layouts.portfolio')

@section('title', 'Offensive & Defensive Security Services - Cyberlog')

@section('content')

@php
    $svcUrl = fn ($r) => Route::has($r) ? route($r) : '#';

    $offensive = [
        [
            'title'   => 'Red Team Assessment',
            'route'   => 'red-team',
            'icon'    => 'fa-user-secret',
            'points'  => ['Authorized, controlled attack simulations', 'Tests people, processes, and technology', 'Validates real-world defense readiness'],
            'related' => ['Ethical Hacking', 'Social Engineering', 'Vulnerability Exploitation'],
        ],
        [
            'title'   => 'Web, API & Mobile Application Security Testing',
            'route'   => 'app-security-testing',
            'icon'    => 'fa-mobile-screen-button',
            'points'  => ['Full-stack testing across web, API, and mobile', 'Mapped to the OWASP Top 10', 'Manual and automated assessment'],
            'related' => ['Web App Scanning', 'API Testing', 'Mobile Application Testing'],
        ],
        [
            'title'   => 'Network Security Assessment',
            'route'   => 'network-security',
            'icon'    => 'fa-network-wired',
            'points'  => ['Internal and external network testing', 'Identifies misconfigurations and exposed services', 'Hands-on exploitation, not just scanning'],
            'related' => ['Server-Side Testing', 'Penetration Testing'],
        ],
    ];

    $defensive = [
        [
            'title'   => 'Threat Intelligence',
            'route'   => 'threat-intelligence',
            'icon'    => 'fa-satellite-dish',
            'points'  => ['Continuous monitoring of emerging threats', 'Detects leaked credentials and exposed assets', 'Early warning for proactive defense'],
            'related' => ['Threat Hunting', 'SIEM Solution'],
        ],
        [
            'title'   => 'Digital Forensics & Incident Response',
            'route'   => 'digital-forensics',
            'icon'    => 'fa-fingerprint',
            'points'  => ['Investigates cyber incidents and evidence', 'Supports containment and root-cause analysis', 'Guides recovery and prevention actions'],
            'related' => ['Incident Response', 'Evidence Analysis', 'Containment Support'],
        ],
    ];
@endphp

{{-- No hero per feedback - CrowdStrike-style alternating service blocks. --}}
<section class="page-section cl-ds-first" id="offensive">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">What We Test</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Offensive <span class="cl-title-accent">Security Services</span></h2>

        @foreach ($offensive as $block)
            <div class="row g-4 g-lg-5 align-items-center cl-ds-row">
                <div class="col-lg-6 {{ $loop->odd ? '' : 'order-lg-2' }}">
                    <a class="cl-ds-title" href="{{ $svcUrl($block['route']) }}">{{ $block['title'] }} <i class="fas fa-arrow-right"></i></a>
                    <ul class="cl-ds-points list-unstyled">
                        @foreach ($block['points'] as $p)
                            <li><i class="fas fa-circle-plus"></i>{{ $p }}</li>
                        @endforeach
                    </ul>
                    <div class="cl-ds-related">
                        <span class="cl-ds-rel-label">Related:</span>
                        @foreach ($block['related'] as $rel)
                            <span class="cl-ds-rel">{{ $rel }}</span>@if (! $loop->last)<span class="cl-ds-dot">&middot;</span>@endif
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 {{ $loop->odd ? '' : 'order-lg-1' }}">
                    <a class="cl-ds-visual cl-ds-visual-red" href="{{ $svcUrl($block['route']) }}" aria-label="{{ $block['title'] }}">
                        <i class="fas {{ $block['icon'] }}"></i>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</section>

<section class="page-section bg-light" id="defensive">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">What We Defend</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Defensive <span class="cl-title-accent">Security Services</span></h2>

        @foreach ($defensive as $block)
            <div class="row g-4 g-lg-5 align-items-center cl-ds-row">
                <div class="col-lg-6 {{ $loop->odd ? '' : 'order-lg-2' }}">
                    <a class="cl-ds-title" href="{{ $svcUrl($block['route']) }}">{{ $block['title'] }} <i class="fas fa-arrow-right"></i></a>
                    <ul class="cl-ds-points list-unstyled">
                        @foreach ($block['points'] as $p)
                            <li><i class="fas fa-circle-plus blue"></i>{{ $p }}</li>
                        @endforeach
                    </ul>
                    <div class="cl-ds-related">
                        <span class="cl-ds-rel-label">Related:</span>
                        @foreach ($block['related'] as $rel)
                            <span class="cl-ds-rel">{{ $rel }}</span>@if (! $loop->last)<span class="cl-ds-dot">&middot;</span>@endif
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 {{ $loop->odd ? '' : 'order-lg-1' }}">
                    <a class="cl-ds-visual cl-ds-visual-blue" href="{{ $svcUrl($block['route']) }}" aria-label="{{ $block['title'] }}">
                        <i class="fas {{ $block['icon'] }}"></i>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</section>

@include('partials.talk-to-expert', ['title' => 'Under attack or want to be ready?', 'text' => 'Our security team can help you test exposure, strengthen monitoring, and respond faster.'])

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
        text-decoration: none;
        margin-bottom: 1.1rem;
        transition: color .2s var(--ease);
    }
    .cl-ds-title:hover { color: var(--warm-soft); }
    .cl-ds-title i { font-size: .8em; margin-left: .4rem; transition: transform .2s var(--ease); }
    .cl-ds-title:hover i { transform: translateX(5px); }

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

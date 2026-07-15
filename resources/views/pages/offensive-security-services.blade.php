@extends('layouts.portfolio')

@section('title', 'Offensive Security Services - Cyberlog')

@section('content')

@php
    $catalogue = collect(config('cyberlog_services', []))->keyBy('route');
    $items = [
        [
            'route' => 'red-team',
            'image' => 'assets/img/services/offensive-red-team-reference.png',
            'imageAlt' => 'Red team assessment attack simulation visual',
            'lead' => 'Simulate realistic attack behavior before real attackers do.',
            'points' => [
                'Authorized adversary emulation across people, process, and technology',
                'Social engineering, exploitation, privilege escalation, and lateral movement scenarios',
                'Detection and response gap reporting with practical remediation priorities',
            ],
        ],
        [
            'route' => 'app-security-testing',
            'image' => 'assets/img/services/offensive-app-security-reference.png',
            'imageAlt' => 'Application security testing visual for web API and mobile platforms',
            'lead' => 'Validate exploitable weaknesses across digital products.',
            'points' => [
                'Web, API, Android, and iOS security testing aligned with OWASP risk areas',
                'Authentication, authorization, session, input, and data exposure validation',
                'Developer-ready findings with proof, business impact, and retest guidance',
            ],
        ],
        [
            'route' => 'network-security',
            'image' => 'assets/img/services/offensive-network-security-reference.png',
            'imageAlt' => 'Network security assessment visual with firewall and infrastructure nodes',
            'lead' => 'Map infrastructure exposure and reduce attack paths.',
            'points' => [
                'Internal and external network assessment across services, servers, and access layers',
                'Firewall, wireless, segmentation, and configuration review',
                'Prioritized remediation for exposed services and reachable attack paths',
            ],
        ],
    ];

    $services = collect($items)->map(function ($item) use ($catalogue) {
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
    'eyebrow' => 'Offensive Security',
    'title' => 'Offensive Security Services',
    'summary' => 'Purpose-built testing services that identify exploitable weaknesses, validate real attack paths, and help teams fix risk with evidence-backed reporting.',
    'heroIcon' => 'fa-user-secret',
    'heroImage' => 'assets/img/services/offensive-security-services-hero.png',
    'heroImageAlt' => 'Offensive security red team command environment with exploit paths and attack simulation dashboards',
    'services' => $services,
    'switchHref' => null,
    'switchLabel' => null,
    'ctaTitle' => 'Ready to test your exposure?',
    'ctaText' => 'Cyberlog can scope a practical offensive security engagement for your applications, infrastructure, and team readiness.',
])

@endsection

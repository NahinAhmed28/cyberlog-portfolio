@extends('layouts.portfolio')

@section('title', 'Defensive Security Services - Cyberlog')

@section('content')

@php
    $catalogue = collect(config('cyberlog_services', []))->keyBy('route');
    $items = [
        [
            'route' => 'threat-intelligence',
            'image' => 'assets/img/services/defensive-threat-intelligence-reference.png',
            'imageAlt' => 'Threat intelligence monitoring visual with global signals and alert indicators',
            'lead' => 'Turn external threat signals into early warning and action.',
            'points' => [
                'Monitor emerging threats, attacker infrastructure, phishing campaigns, and exposed assets',
                'Detect leaked credentials and cyber risk signals affecting your organization',
                'Deliver actionable intelligence briefings for proactive security decisions',
            ],
        ],
        [
            'route' => 'digital-forensics',
            'image' => 'assets/img/services/defensive-digital-forensics-reference.png',
            'imageAlt' => 'Digital forensics and incident response visual with fingerprint and evidence timeline',
            'lead' => 'Investigate incidents, preserve evidence, and guide recovery.',
            'points' => [
                'Analyze endpoints, servers, logs, and artifacts to reconstruct incident timelines',
                'Support containment, root-cause analysis, and evidence handling',
                'Provide practical recommendations for recovery, hardening, and future prevention',
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
    'theme' => 'defensive',
    'eyebrow' => 'Defensive Security',
    'title' => 'Defensive Security Services',
    'summary' => 'Operational defense services that improve visibility, support incident readiness, and help organizations respond with better intelligence and evidence.',
    'heroIcon' => 'fa-shield-halved',
    'heroImage' => 'assets/img/services/defensive-security-services-hero.png',
    'heroImageAlt' => 'Defensive security operations center with blue shield, threat map, and incident response dashboards',
    'services' => $services,
    'switchHref' => null,
    'switchLabel' => null,
    'ctaTitle' => 'Need stronger cyber defense?',
    'ctaText' => 'Cyberlog can help improve threat visibility, investigation readiness, and recovery planning for critical environments.',
])

@endsection

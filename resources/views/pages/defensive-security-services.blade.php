@extends('layouts.portfolio')

@section('title', 'Defensive Security Services - Cyberlog')

@section('content')

@php
    $catalogue = collect(config('cyberlog_services', []))->keyBy('route');
    $items = [
        [
            'route' => 'threat-intelligence',
            'image' => 'assets/img/services/defensive/threat-intelligence.png',
            'imageAlt' => 'Threat intelligence monitoring visual with global signals and alert indicators',
            'lead' => 'Turn external threat signals into early warning and action.',
            'points' => [
                'Monitor emerging threats, attacker infrastructure, phishing campaigns, and exposed assets',
                'Detect leaked credentials and cyber risk signals affecting your organization',
                'Deliver actionable intelligence briefings for proactive security decisions',
            ],
        ],
        [
            'route' => 'security-consultancy',
            'image' => 'assets/img/services/defensive/cybersecurity-consultancy.png',
            'imageAlt' => 'Cybersecurity consultancy visual with a strategic security roadmap',
            'lead' => 'Turn security priorities into a practical, business-aligned roadmap.',
            'points' => [
                'Assess current security maturity, business risk, and governance priorities',
                'Develop practical policies, standards, and risk treatment plans',
                'Guide leadership decisions with clear, prioritized security advice',
            ],
        ],
        [
            'route' => 'backup-recovery',
            'image' => 'assets/img/services/defensive/secure-backup-recovery-solutions.png',
            'imageAlt' => 'Secure backup and recovery visual with protected data storage',
            'lead' => 'Keep critical data recoverable through disruption and cyber incidents.',
            'points' => [
                'Review backup coverage, retention, encryption, and access controls',
                'Design resilient recovery workflows for critical systems and business data',
                'Validate recovery readiness through documented procedures and testing',
            ],
        ],
        [
            'route' => 'secure-web-development',
            'image' => 'assets/img/services/defensive/secure-web-application-development.png',
            'imageAlt' => 'Secure web application development visual with protected application code',
            'lead' => 'Build security into applications from architecture through deployment.',
            'points' => [
                'Apply secure-by-design architecture and Secure SDLC practices',
                'Implement application hardening, validation, and access protections',
                'Include resilience measures such as DDoS mitigation from the ground up',
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

<?php

/*
|--------------------------------------------------------------------------
| Cyberlog service catalogue — single source of truth
|--------------------------------------------------------------------------
| The 12 services below drive the navbar Services dropdown, the All Services
| page cards, and the footer Services column. Each entry links to a dedicated
| details page. Services flagged with 'detail' get a generic detail page
| (frontend.public.service-detail) auto-routed from routes/web.php; the rest
| point at their own existing dedicated pages via 'route'.
*/

return [
    [
        'title' => 'Security Operations Center (SOC)',
        'icon'  => 'fa-desktop',
        'route' => 'soc',
        'desc'  => '24/7 threat monitoring, detection, and incident response to keep your environment under constant watch.',
        'detail' => null,
    ],
    [
        'title' => 'Vulnerability Assessment & Penetration Testing (VAPT)',
        'icon'  => 'fa-bug',
        'route' => 'vapt',
        'desc'  => 'Identify and exploit security weaknesses before attackers do, with clear, actionable remediation guidance.',
        'detail' => null,
    ],
    [
        'title' => 'IT Security Audit & ISO/IEC 27001',
        'icon'  => 'fa-clipboard-check',
        'route' => 'it-audit',
        'desc'  => 'Independent audits and end-to-end ISMS implementation support to align your organization with international security standards.',
        'detail' => null,
    ],
    [
        'title' => 'Awareness & Security Training',
        'icon'  => 'fa-graduation-cap',
        'route' => 'capacity-building',
        'desc'  => 'Role-based training programs that turn your employees into your first line of defense against cyber threats.',
        'detail' => null,
    ],
    [
        'title' => 'Red Team Assessment',
        'icon'  => 'fa-user-secret',
        'route' => 'red-team',
        'desc'  => 'Real-world, authorized attack simulations that test your people, processes, and technology against advanced adversary techniques.',
        'detail' => [
            'eyebrow' => 'Offensive Security',
            'points'  => [
                'Goal-based adversary simulation across people, process, and technology',
                'Phishing and social engineering scenarios',
                'Stealthy exploitation and lateral movement',
                'Detection and response gap analysis with remediation',
            ],
        ],
    ],
    [
        'title' => 'Web, API & Mobile Application Security Testing',
        'icon'  => 'fa-mobile-screen-button',
        'route' => 'app-security-testing',
        'desc'  => 'In-depth security testing across web, API, and mobile platforms, mapped to the OWASP Top 10 and industry best practices.',
        'detail' => [
            'eyebrow' => 'Application Security',
            'points'  => [
                'OWASP Top 10 web application testing',
                'REST and GraphQL API security testing',
                'Android and iOS mobile application testing',
                'Business logic, authentication, and authorization testing',
            ],
        ],
    ],
    [
        'title' => 'Network Security Assessment',
        'icon'  => 'fa-network-wired',
        'route' => 'network-security',
        'desc'  => 'Comprehensive evaluation of your internal and external network to uncover misconfigurations, weak access controls, and exposed attack paths.',
        'detail' => [
            'eyebrow' => 'Network Security',
            'points'  => [
                'Internal and external network penetration testing',
                'Misconfiguration and weak access-control review',
                'Exposed service and attack-path discovery',
                'Prioritized, practical remediation guidance',
            ],
        ],
    ],
    [
        'title' => 'Source Code Security Audit',
        'icon'  => 'fa-file-code',
        'route' => 'source-code-audit',
        'desc'  => 'Static and dynamic application security testing (SAST/DAST) to catch vulnerabilities in your codebase before they reach production.',
        'detail' => [
            'eyebrow' => 'Secure Code Review',
            'points'  => [
                'Static application security testing (SAST)',
                'Dynamic application security testing (DAST)',
                'Manual secure code review of critical components',
                'Developer-ready remediation guidance',
            ],
        ],
    ],
    [
        'title' => 'Threat Intelligence',
        'icon'  => 'fa-satellite-dish',
        'route' => 'threat-intelligence',
        'desc'  => 'Continuous monitoring of emerging threats, leaked credentials, and attacker activity to keep you a step ahead.',
        'detail' => [
            'eyebrow' => 'Threat Intelligence',
            'points'  => [
                'Emerging threat and vulnerability monitoring',
                'Leaked credential and data-exposure monitoring',
                'Attacker infrastructure and activity tracking',
                'Actionable intelligence briefings for your team',
            ],
        ],
    ],
    [
        'title' => 'Cybersecurity Consultancy',
        'icon'  => 'fa-user-shield',
        'route' => 'consultancy',
        'desc'  => 'Strategic security advisory to help you build a resilient, business-aligned security roadmap.',
        'detail' => [
            'eyebrow' => 'Advisory',
            'points'  => [
                'Security strategy and roadmap development',
                'Risk assessment and gap analysis',
                'Policy, standard, and control design',
                'Business-aligned security guidance',
            ],
        ],
    ],
    [
        'title' => 'Secure Backup & Recovery Solutions',
        'icon'  => 'fa-database',
        'route' => 'public.backup-recovery',
        'desc'  => 'Reliable backup and disaster recovery support to keep your business running through any disruption.',
        'detail' => null,
    ],
    [
        'title' => 'Secure Web Application Development',
        'icon'  => 'fa-code',
        'route' => 'secure-development',
        'desc'  => 'Security-by-design application development with built-in protections, including DDoS mitigation, from the ground up.',
        'detail' => [
            'eyebrow' => 'Secure Development',
            'points'  => [
                'Security-by-design application architecture',
                'Secure coding and code-review practices',
                'Built-in DDoS mitigation and hardening',
                'Security testing across the development lifecycle',
            ],
        ],
    ],
];

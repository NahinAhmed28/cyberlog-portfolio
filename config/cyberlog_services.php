<?php

/*
|--------------------------------------------------------------------------
| Cyberlog service catalogue - single source of truth
|--------------------------------------------------------------------------
| These 9 services drive the navbar Services dropdown, the All Services page,
| home solution cards, and the footer Services list.
*/

return [
    [
        'title'  => 'Security Operations Center (SOC)',
        'icon'   => 'fa-desktop',
        'route'  => 'soc',
        'group'  => 'primary',
        'kicker' => 'Threat Detection',
        'desc'   => 'Implement centralized log collection, SIEM monitoring, alert rules, threat detection, incident triage, and response support.',
        'tags'   => ['SOC', 'SIEM', 'Incident Monitoring'],
        'detail' => null,
    ],
    [
        'title'  => 'Threat Intelligence',
        'icon'   => 'fa-satellite-dish',
        'route'  => 'threat-intelligence',
        'group'  => 'defensive',
        'kicker' => 'Early Warning',
        'desc'   => 'Monitor emerging threats, leaked credentials, phishing campaigns, exposed assets, and attacker activity with actionable intelligence.',
        'tags'   => ['Threat Monitoring', 'Leaked Credentials', 'Risk Insights'],
        'detail' => [
            'eyebrow' => 'Defensive Security',
            'points'  => [
                'Continuous monitoring of emerging threats and exposed assets',
                'Leaked credential and phishing-campaign detection',
                'Attacker activity and infrastructure tracking',
                'Actionable intelligence briefings for proactive defense',
            ],
        ],
    ],
    [
        'title'  => 'Vulnerability Assessment & Penetration Testing (VAPT)',
        'icon'   => 'fa-bug',
        'route'  => 'vapt',
        'group'  => 'primary',
        'kicker' => 'Real World Security Testing',
        'desc'   => 'Identify, validate, and prioritize vulnerabilities across applications, networks, APIs, mobile platforms, cloud, and infrastructure.',
        'tags'   => ['VAPT', 'Web Testing', 'Network Testing'],
        'detail' => null,
    ],
    [
        'title'  => 'Red Team Assessment',
        'icon'   => 'fa-user-secret',
        'route'  => 'red-team',
        'group'  => 'offensive',
        'kicker' => 'Attack Simulation',
        'desc'   => 'Simulate real-world attack scenarios to test people, processes, technology, detection capability, and response readiness.',
        'tags'   => ['Attack Simulation', 'Defense Testing', 'Security Readiness'],
        'detail' => [
            'eyebrow' => 'Offensive Security',
            'points'  => [
                'Authorized, controlled adversary simulation',
                'People, process, and technology readiness testing',
                'Social engineering and vulnerability exploitation scenarios',
                'Detection and response gap analysis with remediation',
            ],
        ],
    ],
    [
        'title'  => 'Web, API & Mobile Application Security Testing',
        'icon'   => 'fa-mobile-screen-button',
        'route'  => 'app-security-testing',
        'group'  => 'offensive',
        'kicker' => 'Application Security',
        'desc'   => 'Test web, API, Android, and iOS applications for authentication, authorization, session, input validation, and data exposure risks.',
        'tags'   => ['OWASP Top 10', 'API Security', 'Mobile Security'],
        'detail' => [
            'eyebrow' => 'Application Security',
            'points'  => [
                'Full-stack web, API, and mobile application testing',
                'OWASP Top 10 and business-logic validation',
                'Manual and automated assessment coverage',
                'Developer-ready remediation guidance',
            ],
        ],
    ],
    [
        'title'  => 'Network Security Assessment',
        'icon'   => 'fa-network-wired',
        'route'  => 'network-security',
        'group'  => 'offensive',
        'kicker' => 'Infrastructure Security',
        'desc'   => 'Assess internal and external networks, exposed services, firewalls, servers, wireless networks, segmentation, and access controls.',
        'tags'   => ['Firewall Review', 'Network Exposure', 'Segmentation'],
        'detail' => [
            'eyebrow' => 'Network Security',
            'points'  => [
                'Internal and external network penetration testing',
                'Firewall, segmentation, and access-control review',
                'Exposed service and attack-path discovery',
                'Prioritized remediation for infrastructure risk',
            ],
        ],
    ],
    [
        'title'  => 'Digital Forensics & Incident Response',
        'icon'   => 'fa-fingerprint',
        'route'  => 'digital-forensics',
        'group'  => 'defensive',
        'kicker' => 'Investigation Support',
        'desc'   => 'Investigate cyber incidents, analyze evidence, support containment, and provide practical recommendations for recovery and prevention.',
        'tags'   => ['Forensics', 'Incident Response', 'Evidence Analysis'],
        'detail' => [
            'eyebrow' => 'Incident Investigation',
            'points'  => [
                'Endpoint, server, log, and artifact investigation',
                'Timeline reconstruction and evidence handling',
                'Containment and root-cause support',
                'Practical recovery and prevention recommendations',
            ],
        ],
    ],
    [
        'title'  => 'IT Security Audit & ISO/IEC 27001',
        'icon'   => 'fa-clipboard-check',
        'route'  => 'it-audit',
        'group'  => 'primary',
        'kicker' => 'Compliance Readiness',
        'desc'   => 'Review IT controls, identify security gaps, assess governance, and support ISO/IEC 27001 implementation and audit readiness.',
        'tags'   => ['IT Audit', 'ISO 27001', 'Control Review'],
        'detail' => null,
    ],
    [
        'title'  => 'Awareness & Security Training',
        'icon'   => 'fa-graduation-cap',
        'route'  => 'capacity-building',
        'group'  => 'primary',
        'kicker' => 'Human Defense',
        'desc'   => 'Deliver role-based training on cyber hygiene, phishing, social engineering, secure practices, and organizational security awareness.',
        'tags'   => ['Awareness Training', 'Phishing Readiness', 'Staff Training'],
        'detail' => null,
    ],
];

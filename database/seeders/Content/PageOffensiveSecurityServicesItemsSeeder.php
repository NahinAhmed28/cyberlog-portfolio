<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageOffensiveSecurityServicesItemsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_offensive_security_services_items', [
            [
                'route' => 'red-team',
                'image' => 'assets/img/services/offensive/red-team-assessment.png',
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
                'image' => 'assets/img/services/offensive/web-api-mobile-application-security-testing.png',
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
                'image' => 'assets/img/services/offensive/network-security-assessment.png',
                'imageAlt' => 'Network security assessment visual with firewall and infrastructure nodes',
                'lead' => 'Map infrastructure exposure and reduce attack paths.',
                'points' => [
                    'Internal and external network assessment across services, servers, and access layers',
                    'Firewall, wireless, segmentation, and configuration review',
                    'Prioritized remediation for exposed services and reachable attack paths',
                ],
            ],
            [
                'route' => 'secure-code-review',
                'image' => 'assets/img/services/offensive/source-code-security-audit.png',
                'imageAlt' => 'Source code security audit visual with code analysis and security testing',
                'lead' => 'Find and fix security weaknesses in your codebase.',
                'points' => [
                    'Review application source code for security weaknesses and unsafe implementation patterns.',
                    'Combine SAST and DAST findings to validate risk across code and runtime behavior.',
                    'Assess dependencies, secrets handling, authentication, authorization, and input validation.',
                    'Deliver developer-ready remediation guidance that supports secure coding practices.',
                ],
            ],
        ]);
    }
}

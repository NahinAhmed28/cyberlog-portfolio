<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPagesDefenseServicesDefensiveSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_pages_defense_services_defensive', [
            [
                'title' => 'Threat Intelligence',
                'icon' => 'fa-satellite-dish',
                'points' => [
                    'Continuous monitoring of emerging threats',
                    'Detects leaked credentials and exposed assets',
                    'Early warning for proactive defense',
                ],
                'related' => [
                    'Threat Hunting',
                    'SIEM Solution',
                ],
            ],
            [
                'title' => 'Digital Forensics & Incident Response',
                'icon' => 'fa-fingerprint',
                'points' => [
                    'Investigates cyber incidents and evidence',
                    'Supports containment and root-cause analysis',
                    'Guides recovery and prevention actions',
                ],
                'related' => [
                    'Incident Response',
                    'Evidence Analysis',
                    'Containment Support',
                ],
            ],
        ]);
    }
}

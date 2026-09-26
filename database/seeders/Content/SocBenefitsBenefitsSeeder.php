<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SocBenefitsBenefitsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('soc_benefits_benefits', [
            [
                'item_0' => 'fa-bolt',
                'item_1' => 'Real-Time Threat Detection',
                'item_2' => 'Monitor logs, alerts, and security events to detect threats before they cause serious impact.',
            ],
            [
                'item_0' => 'fa-layer-group',
                'item_1' => 'Centralized Security Visibility',
                'item_2' => 'Bring logs from servers, networks, endpoints, and applications into one monitoring environment.',
            ],
            [
                'item_0' => 'fa-volume-xmark',
                'item_1' => 'Reduced Alert Noise',
                'item_2' => 'Use customized alert rules to reduce false positives and help teams focus on real threats.',
            ],
            [
                'item_0' => 'fa-hand-fist',
                'item_1' => 'Faster Incident Response',
                'item_2' => 'Support alert triage, investigation, containment, and response when suspicious activity is detected.',
            ],
            [
                'item_0' => 'fa-crosshairs',
                'item_1' => 'Proactive Threat Hunting',
                'item_2' => 'Look beyond routine alerts to identify hidden threats, unusual behavior, and attack patterns.',
            ],
            [
                'item_0' => 'fa-fingerprint',
                'item_1' => 'Forensics Support',
                'item_2' => 'Support digital and network forensics to investigate incidents and understand root cause.',
            ],
        ]);
    }
}

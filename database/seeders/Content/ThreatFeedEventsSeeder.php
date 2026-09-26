<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class ThreatFeedEventsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('threat_feed_events', [
            [
                'item_0' => 'crit',
                'item_1' => 'BLOCKED',
                'item_2' => 'brute-force attempt · 203.0.113.*',
            ],
            [
                'item_0' => 'ok',
                'item_1' => 'CLEAN',
                'item_2' => 'endpoint scan · 1,204 assets',
            ],
            [
                'item_0' => 'warn',
                'item_1' => 'TRIAGE',
                'item_2' => 'anomalous login · finance-vlan',
            ],
            [
                'item_0' => 'ok',
                'item_1' => 'PATCHED',
                'item_2' => 'CVE-2026-1180 · 38 hosts',
            ],
            [
                'item_0' => 'crit',
                'item_1' => 'QUARANTINE',
                'item_2' => 'malware sample · sandbox-07',
            ],
            [
                'item_0' => 'ok',
                'item_1' => 'VERIFIED',
                'item_2' => 'MFA challenge · success',
            ],
            [
                'item_0' => 'warn',
                'item_1' => 'WATCH',
                'item_2' => 'data egress spike · 4.2GB',
            ],
            [
                'item_0' => 'ok',
                'item_1' => 'CONTAINED',
                'item_2' => 'phishing url · sinkholed',
            ],
            [
                'item_0' => 'crit',
                'item_1' => 'DENIED',
                'item_2' => 'lateral move · host-1142',
            ],
            [
                'item_0' => 'ok',
                'item_1' => 'SYNCED',
                'item_2' => 'threat intel feed · updated',
            ],
        ]);
    }
}

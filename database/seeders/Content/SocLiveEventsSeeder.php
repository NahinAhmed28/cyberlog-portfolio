<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SocLiveEventsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('soc_live_events', [
            [
                'item_0' => 'VERIFIED',
                'item_1' => 'MFA challenge - success',
            ],
            [
                'item_0' => 'WATCHED',
                'item_1' => 'unusual egress - finance-vlan',
            ],
            [
                'item_0' => 'QUARANTINE',
                'item_1' => 'malware sample - sandbox-07',
            ],
            [
                'item_0' => 'BLOCKED',
                'item_1' => 'brute-force - 203.0.113.*',
            ],
            [
                'item_0' => 'DENIED',
                'item_1' => 'lateral move - host-1142',
            ],
            [
                'item_0' => 'TRIAGED',
                'item_1' => 'identity alert - account-207',
            ],
            [
                'item_0' => 'CONTAINED',
                'item_1' => 'phishing URL - mail-gateway',
            ],
            [
                'item_0' => 'PATCHED',
                'item_1' => 'critical CVE - 18 hosts',
            ],
        ]);
    }
}

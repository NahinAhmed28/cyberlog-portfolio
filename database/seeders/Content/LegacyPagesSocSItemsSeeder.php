<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPagesSocSItemsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_pages_soc_s_items', [
            [
                'item_0' => 'fa-network-wired',
                'item_1' => 'Network Sensor',
                'item_2' => 'Deep packet inspection and east-west traffic analysis to spot lateral movement early.',
            ],
            [
                'item_0' => 'fa-laptop-code',
                'item_1' => 'Endpoint Sensor',
                'item_2' => 'Lightweight agents stream endpoint telemetry for rapid detection and response.',
            ],
            [
                'item_0' => 'fa-cloud',
                'item_1' => 'Cloud Sensor',
                'item_2' => 'Native cloud integrations monitor identities, workloads, and misconfigurations.',
            ],
        ]);
    }
}

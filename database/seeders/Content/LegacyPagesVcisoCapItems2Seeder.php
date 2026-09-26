<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPagesVcisoCapItems2Seeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_pages_vciso_cap_items_2', [
            [
                'item_0' => 'fa-user-secret',
                'item_1' => 'Dark Web Monitoring',
            ],
            [
                'item_0' => 'fa-diagram-project',
                'item_1' => 'Attack Surface Monitoring',
            ],
            [
                'item_0' => 'fa-fingerprint',
                'item_1' => 'Cyber Criminal Profiling',
            ],
            [
                'item_0' => 'fa-burst',
                'item_1' => 'Breach &amp; Attack Simulation',
            ],
        ]);
    }
}

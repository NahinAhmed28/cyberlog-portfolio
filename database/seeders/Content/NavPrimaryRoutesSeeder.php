<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class NavPrimaryRoutesSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('nav_primary_routes', [
            [
                'value' => 'soc',
            ],
            [
                'value' => 'vapt',
            ],
            [
                'value' => 'it-audit',
            ],
            [
                'value' => 'capacity-building',
            ],
            [
                'value' => 'ai-automation',
            ],
        ]);
    }
}

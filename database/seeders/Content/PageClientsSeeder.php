<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageClientsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_clients', [
            [
                'title' => 'Clients — Cyberlog',
                'paragraph' => 'CLIENTS',
                'heading' => 'Trusted Across',
                'label' => 'Critical Sectors',
                'paragraph_2' => 'Government, finance, education, and enterprise organizations rely on Cyberlog to defend their most critical systems.',
            ],
        ]);
    }
}

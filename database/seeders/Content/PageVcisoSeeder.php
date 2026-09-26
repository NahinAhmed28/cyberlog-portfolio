<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageVcisoSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_vciso', [
            [
                'title' => 'Prohoree 365 - Unified Cybersecurity Solution - Cyberlog',
                'meta_description' => 'Prohoree 365 is Cyberlog\'s unified cybersecurity solution, bringing security leadership, risk governance, compliance, SOC alignment, and security operations into one platform.',
                'title_2' => 'Need a CISO without the full-time cost?',
                'text' => 'Cyberlog gives you executive security leadership, practical governance, and measurable progress from day one.',
            ],
        ]);
    }
}

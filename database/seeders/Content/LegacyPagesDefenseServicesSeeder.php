<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPagesDefenseServicesSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_pages_defense_services', [
            [
                'title' => 'Offensive & Defensive Security Services - Cyberlog',
                'paragraph' => 'What We Test',
                'heading' => 'Offensive',
                'label' => 'Security Services',
                'icon' => 'fas fa-circle-plus',
                'label_2' => 'Related:',
                'label_3' => '·',
                'paragraph_2' => 'What We Defend',
                'heading_2' => 'Defensive',
                'label_4' => 'Security Services',
                'icon_2' => 'fas fa-circle-plus blue',
                'label_5' => 'Related:',
                'label_6' => '·',
                'title_2' => 'Under attack or want to be ready?',
                'text' => 'Our security team can help you test exposure, strengthen monitoring, and respond faster.',
            ],
        ]);
    }
}

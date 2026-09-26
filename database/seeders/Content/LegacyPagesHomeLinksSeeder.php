<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPagesHomeLinksSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_pages_home_links', [
            [
                'icon' => 'fas fa-bug',
                'label' => 'Penetration Testing',
            ],
            [
                'icon' => 'fas fa-desktop',
                'label' => 'SOC',
            ],
            [
                'icon' => 'fas fa-clipboard-check',
                'label' => 'Security Audit & Training',
            ],
            [
                'icon' => 'fas fa-user-shield',
                'label' => 'vCISO',
            ],
        ]);
    }
}

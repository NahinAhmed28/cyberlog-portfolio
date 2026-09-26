<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class NavigationSpecializedLinksSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('navigation_specialized_links', [
            [
                'label' => 'Offensive Security Services',
                'url' => '/services/offensive-security-services',
            ],
            [
                'label' => 'Defensive Security Services',
                'url' => '/services/defensive-security-services',
            ],
        ]);
    }
}

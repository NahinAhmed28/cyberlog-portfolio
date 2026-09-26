<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class NavigationCompanyLinksSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('navigation_company_links', [
            [
                'label' => 'About Us',
                'url' => '/about',
            ],
            [
                'label' => 'Our Team',
                'url' => '/our-team',
            ],
            [
                'label' => 'Career',
                'url' => '/career',
            ],
            [
                'label' => 'Contact',
                'url' => '/contact',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class FooterCompanyLinksSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('footer_company_links', [
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

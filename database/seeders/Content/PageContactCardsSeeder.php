<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageContactCardsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_contact_cards', [
            [
                'a_href' => 'https://www.facebook.com/cyberlogbd/',
                'a_aria_label' => 'Facebook',
                'icon' => 'fab fa-fw fa-facebook-f',
            ],
            [
                'a_href' => 'https://www.linkedin.com/company/cyberlogbd/',
                'a_aria_label' => 'LinkedIn',
                'icon' => 'fab fa-fw fa-linkedin-in',
            ],
            [
                'a_href' => 'https://www.instagram.com/cyberlog_bd/',
                'a_aria_label' => 'Instagram',
                'icon' => 'fab fa-fw fa-instagram',
            ],
            [
                'a_href' => 'https://x.com/cyberlogbd',
                'a_aria_label' => 'X (Twitter)',
                'icon' => 'fab fa-fw fa-x-twitter',
            ],
        ]);
    }
}

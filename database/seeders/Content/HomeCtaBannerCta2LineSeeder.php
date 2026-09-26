<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class HomeCtaBannerCta2LineSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('home_cta_banner_cta2_line', [
            [
                'icon' => 'fas fa-calendar-check',
                'link_label' => 'Book a Demo',
            ],
            [
                'icon' => 'fas fa-headset',
                'link_label' => 'Talk to an Expert',
            ],
        ]);
    }
}

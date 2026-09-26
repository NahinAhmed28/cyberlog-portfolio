<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class HomeCtaBannerSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('home_cta_banner', [
            [
                'label' => 'Active threats demand',
                'label_2' => 'Active Cyber Defense',
                'paragraph' => 'Our team is ready to help',
                'destination' => '/contact',
            ],
        ]);
    }
}

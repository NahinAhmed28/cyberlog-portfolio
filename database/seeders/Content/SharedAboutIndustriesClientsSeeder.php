<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SharedAboutIndustriesClientsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('shared_about_industries_clients', [
            [
                'paragraph' => 'Our Reach',
                'heading' => 'Industries We Protect',
                'paragraph_2' => 'Organizations',
                'heading_2' => 'Trusted By',
                'client_link_aria_label' => 'Visit',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SharedAboutIndustriesClientsAboutIndustriesSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('shared_about_industries_clients_about_industries', [
            [
                'item_0' => 'fa-landmark',
                'item_1' => '15+',
                'item_2' => 'Government & Public Sector',
            ],
            [
                'item_0' => 'fa-globe',
                'item_1' => '3+',
                'item_2' => 'International Organizations',
            ],
            [
                'item_0' => 'fa-link',
                'item_1' => '5+',
                'item_2' => 'Financial Services',
            ],
            [
                'item_0' => 'fa-briefcase',
                'item_1' => '8+',
                'item_2' => 'Corporate & Enterprise',
            ],
            [
                'item_0' => 'fa-shield-halved',
                'item_1' => '4+',
                'item_2' => 'Law Enforcement & Defense',
            ],
            [
                'item_0' => 'fa-graduation-cap',
                'item_1' => '5+',
                'item_2' => 'Media & Education',
            ],
        ]);
    }
}

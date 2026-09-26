<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class NavSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('nav', [
            [
                'img_media' => 'assets/img/cyberlog-logo.png',
                'img_alt' => 'Cyberlog',
                'button_label' => 'Menu',
                'icon' => 'fas fa-bars',
                'link_label' => 'Home',
                'link_label_2' => 'Services',
                'link_label_3' => 'All Services',
                'link_label_6' => 'Prohoree 365',
                'link_label_7' => 'Company',
                'link_label_12' => 'Talk to an Expert',
                'destination' => '/',
                'destination_2' => '/',
                'destination_3' => '/services',
                'destination_6' => '/vciso',
                'destination_11' => '/contact',
            ],
        ]);
    }
}

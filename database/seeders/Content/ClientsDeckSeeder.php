<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class ClientsDeckSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('clients_deck', [
            [
                'paragraph' => 'Client Websites',
                'label' => 'Trusted by',
                'label_2' => 'Government & Enterprise.',
                'link_label' => 'View Details',
                'icon' => 'fas fa-arrow-right',
                'button_aria_label' => 'Previous client',
                'icon_2' => 'fas fa-chevron-left',
                'button_aria_label_2' => 'Next client',
                'icon_3' => 'fas fa-chevron-right',
                'dot_aria_label' => 'Show',
            ],
        ]);
    }
}

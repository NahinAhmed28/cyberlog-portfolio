<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class HomeNetworkNetFloatsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('home_network_net_floats', [
            [
                'icon' => 'fas fa-circle-xmark',
                'label' => 'Critical risk found',
            ],
            [
                'icon' => 'fas fa-circle-xmark',
                'label' => 'Critical risk found',
            ],
            [
                'icon' => 'fas fa-circle-xmark',
                'label' => 'Critical risk found',
            ],
        ]);
    }
}

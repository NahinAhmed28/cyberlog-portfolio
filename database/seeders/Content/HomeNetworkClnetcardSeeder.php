<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class HomeNetworkClnetcardSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('home_network_clnetcard', [
            [
                'icon' => 'fas fa-shield-halved',
                'label' => '6',
                'label_2' => 'potential concentration risks found',
            ],
            [
                'icon' => 'fas fa-chart-pie',
                'label' => '9',
                'label_2' => 'assets have under 80% compliance',
            ],
        ]);
    }
}

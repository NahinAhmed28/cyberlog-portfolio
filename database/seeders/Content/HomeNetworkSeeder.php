<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class HomeNetworkSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('home_network', [
            [
                'paragraph' => 'Attack Surface',
                'heading' => 'As your environment grows,',
                'label_4' => 'the risks reveal themselves',
                'paragraph_2' => 'See your full attack surface as it truly exists — every endpoint, server, application, and cloud asset mapped onto one living model. Identify where risk concentrates before attackers do.',
            ],
        ]);
    }
}

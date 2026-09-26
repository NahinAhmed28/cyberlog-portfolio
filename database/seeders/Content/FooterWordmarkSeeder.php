<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class FooterWordmarkSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('footer_wordmark', [
            [
                'label' => 'CYBERL',
            ],
            [
                'label' => 'OG',
            ],
        ]);
    }
}

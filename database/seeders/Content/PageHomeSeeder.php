<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageHomeSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_home', [
            [
                'title' => 'Cyberlog - Smarter Intelligence. Stronger Security.',
            ],
        ]);
    }
}

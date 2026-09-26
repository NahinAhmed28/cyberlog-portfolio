<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageAboutSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_about', [
            [
                'title' => 'About Us — Cyberlog',
            ],
        ]);
    }
}

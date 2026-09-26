<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LayoutPortfolioSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('layout_portfolio', [
            [
                'default_title' => 'My Portfolio',
                'link_media' => 'assets/img/cyberlog-logo.png',
            ],
        ]);
    }
}

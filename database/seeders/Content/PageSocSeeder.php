<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageSocSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_soc', [
            [
                'title' => 'SOC as a Service — 24/7 Security Operations — Cyberlog',
                'title_2' => 'Still evaluating SOC options?',
                'text' => 'We\'ll walk you through the pros, cons, and pricing — no pressure.',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageVaptSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_vapt', [
            [
                'title' => 'VAPT & Penetration Testing - Cyberlog',
                'meta_description' => 'Cyberlog VAPT and penetration testing services identify, validate, and prioritize exploitable risks across web apps, APIs, networks, cloud, and infrastructure.',
                'title_2' => 'Ready to test your defenses?',
                'text' => 'Book a scoping call and get a tailored VAPT quote for your applications, network, APIs, or cloud.',
            ],
        ]);
    }
}

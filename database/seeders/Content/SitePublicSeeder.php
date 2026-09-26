<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SitePublicSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('site_public', [
            [
                'default_meta_description' => 'Cyberlog — offensive security, managed SOC, compliance, threat intelligence and vCISO for enterprises, government, financial institutions and critical infrastructure.',
                'default_title' => 'Cyberlog — Cyber Defense',
                'link_media' => 'assets/img/cyberlog-logo.png',
            ],
        ]);
    }
}

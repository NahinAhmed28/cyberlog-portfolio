<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SocHeroSocLogSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('soc_hero_soc_log', [
            [
                'paragraph' => '13:15:50',
                'label' => '[VERIFIED]',
                'paragraph_2' => 'MFA challenge - success',
            ],
            [
                'paragraph' => '13:15:48',
                'label' => '[WATCHED]',
                'paragraph_2' => 'CVE-2026-1100 - 36 hosts',
            ],
            [
                'paragraph' => '13:15:46',
                'label' => '[QUARANTINE]',
                'paragraph_2' => 'malware sample - sandbox-07',
            ],
            [
                'paragraph' => '13:15:44',
                'label' => '[BLOCKED]',
                'paragraph_2' => 'brute-force - 203.0.113.*',
            ],
            [
                'paragraph' => '13:15:42',
                'label' => '[DENIED]',
                'paragraph_2' => 'lateral move - host-1142',
            ],
        ]);
    }
}

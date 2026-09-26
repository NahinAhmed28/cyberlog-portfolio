<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class VaptHeroSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('vapt_hero', [
            [
                'paragraph' => 'Vulnerability Assessment & Penetration Testing',
                'heading' => 'Find and Fix Security Risks',
                'label' => 'Before Attackers Do',
                'paragraph_2' => 'Cyberlog identifies, validates, and prioritizes exploitable weaknesses across web applications, APIs, mobile apps, networks, cloud, and infrastructure.',
                'label_2' => 'VAPT // Active Assessment',
                'icon' => 'fas fa-bug',
                'heading_2' => 'From Exposure to Exploit',
                'paragraph_3' => 'External exposure, authentication bypass, privilege escalation, and data-access impact.',
                'div_aria_label' => 'Live vulnerability activity graph',
                'label_3' => '24',
                'label_4' => 'findings',
                'label_5' => '1,842',
                'label_6' => 'requests tested',
                'div_aria_label_2' => 'VAPT assessment steps',
                'div_aria_label_3' => 'Live VAPT assessment log',
            ],
        ]);
    }
}

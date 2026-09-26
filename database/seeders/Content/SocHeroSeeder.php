<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SocHeroSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('soc_hero', [
            [
                'paragraph' => 'Security Operations Center',
                'heading' => '24/7',
                'label' => 'SOC',
                'paragraph_2' => 'Cyberlog provides fully managed and co-managed SOC support, SOC solution to monitor security events, detect threats, reduce alert noise, and support faster incident response.',
                'link_label' => 'Talk to an Expert',
                'a_href' => '#calculator',
                'icon' => 'fas fa-calculator me-1',
                'link_label_2' => 'SOC Cost Calculator',
                'label_2' => 'SOC // Live Operations',
                'label_3' => '1204',
                'label_4' => 'Alerts Triaged',
                'label_5' => '0.5h',
                'label_6' => 'Mean MTTR',
                'label_7' => '38',
                'label_8' => 'Threats Blocked',
                'div_aria_label' => 'Live security event log',
                'destination' => '/contact',
            ],
        ]);
    }
}

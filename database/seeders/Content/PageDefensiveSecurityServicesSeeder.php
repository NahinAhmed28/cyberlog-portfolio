<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageDefensiveSecurityServicesSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_defensive_security_services', [
            [
                'title' => 'Defensive Security Services - Cyberlog',
                'eyebrow' => 'Defensive Security',
                'title_2' => 'Defensive Security Services',
                'summary' => 'Operational defense services that improve visibility, support incident readiness, and help organizations respond with better intelligence and evidence.',
                'hero_icon' => 'fa-shield-halved',
                'hero_image' => 'assets/img/services/defensive-security-services-hero.png',
                'hero_image_alt' => 'Defensive security operations center with blue shield, threat map, and incident response dashboards',
                'cta_title' => 'Need stronger cyber defense?',
                'cta_text' => 'Cyberlog can help improve threat visibility, investigation readiness, and recovery planning for critical environments.',
            ],
        ]);
    }
}

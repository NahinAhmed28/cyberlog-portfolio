<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageOffensiveSecurityServicesSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_offensive_security_services', [
            [
                'title' => 'Offensive Security Services - Cyberlog',
                'eyebrow' => 'Offensive Security',
                'title_2' => 'Offensive Security Services',
                'summary' => 'Purpose-built testing services that identify exploitable weaknesses, validate real attack paths, and help teams fix risk with evidence-backed reporting.',
                'hero_icon' => 'fa-user-secret',
                'hero_image' => 'assets/img/services/offensive-security-services-hero.png',
                'hero_image_alt' => 'Offensive security red team command environment with exploit paths and attack simulation dashboards',
                'cta_title' => 'Ready to test your exposure?',
                'cta_text' => 'Cyberlog can scope a practical offensive security engagement for your applications, infrastructure, and team readiness.',
            ],
        ]);
    }
}

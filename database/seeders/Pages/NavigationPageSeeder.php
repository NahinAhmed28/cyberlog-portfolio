<?php

namespace Database\Seeders\Pages;

use Database\Seeders\ContentSeeder;

class NavigationPageSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('nav', [
            [
                'img_media' => 'assets/img/cyberlog-logo.png',
                'img_alt' => 'Cyberlog',
                'button_label' => 'Menu',
                'icon' => 'fas fa-bars',
                'link_label' => 'Home',
                'link_label_2' => 'Services',
                'link_label_3' => 'All Services',
                'link_label_6' => 'Prohoree 365',
                'link_label_7' => 'Company',
                'link_label_12' => 'Talk to an Expert',
                'destination' => '/',
                'destination_2' => '/',
                'destination_3' => '/services',
                'destination_6' => '/vciso',
                'destination_11' => '/contact',
            ],
        ]);
        $this->seedFeature('nav_primary_routes', [
            [
                'value' => 'soc',
            ],
            [
                'value' => 'vapt',
            ],
            [
                'value' => 'it-audit',
            ],
            [
                'value' => 'capacity-building',
            ],
            [
                'value' => 'ai-automation',
            ],
        ]);
        $this->seedFeature('shared_navbar', [
            [
                'link_url' => '/',
                'icon' => 'fas fa-shield-halved text-primary me-1',
                'link_label' => 'Cyber',
                'label' => 'log',
                'button_label' => 'Menu',
                'icon_2' => 'fas fa-bars',
                'link_url_2' => '/',
                'link_label_2' => 'Home',
                'a_href' => '#',
                'link_label_3' => 'Services',
                'link_label_4' => 'Prohoree 365',
                'link_label_5' => 'About Us',
                'icon_3' => 'fas fa-lock me-1',
                'link_label_6' => 'Client Login',
                'link_label_7' => 'Talk to an Expert',
                'destination' => '/vciso',
                'destination_2' => '/about',
                'destination_3' => '/contact',
            ],
        ]);
        $this->seedFeature('shared_navbar_service_links', [
            [
                'label' => 'All Services',
                'pub' => 'public.services',
                'legacy' => 'services',
            ],
            [
                'label' => 'Managed Security Services',
                'pub' => 'public.soc',
                'legacy' => 'soc',
            ],
            [
                'label' => 'VAPT / Pen Testing',
                'pub' => 'public.vapt',
                'legacy' => 'vapt',
            ],
            [
                'label' => 'Security Audits & ISO 27001',
                'pub' => 'public.it-audit',
                'legacy' => 'it-audit',
            ],
            [
                'label' => 'Security Awareness Training',
                'pub' => 'public.capacity-building',
                'legacy' => 'capacity-building',
            ],
            [
                'label' => 'Offensive Security Services',
                'pub' => 'public.offensive-security-services',
                'legacy' => 'offensive-security-services',
            ],
            [
                'label' => 'Defensive Security Services',
                'pub' => 'public.defensive-security-services',
                'legacy' => 'defensive-security-services',
            ],
        ]);
        $this->seedFeature('shared_navbar_service_route_names', [
            [
                'value' => 'public.services',
            ],
            [
                'value' => 'services',
            ],
            [
                'value' => 'public.soc',
            ],
            [
                'value' => 'soc',
            ],
            [
                'value' => 'public.vapt',
            ],
            [
                'value' => 'vapt',
            ],
            [
                'value' => 'public.it-audit',
            ],
            [
                'value' => 'it-audit',
            ],
            [
                'value' => 'public.capacity-building',
            ],
            [
                'value' => 'capacity-building',
            ],
            [
                'value' => 'public.offensive-security-services',
            ],
            [
                'value' => 'offensive-security-services',
            ],
            [
                'value' => 'public.defensive-security-services',
            ],
            [
                'value' => 'defensive-security-services',
            ],
            [
                'value' => 'public.defense-services',
            ],
            [
                'value' => 'defense-services',
            ],
        ]);
        $this->seedFeature('navigation_company_links', [
            [
                'label' => 'About Us',
                'url' => '/about',
            ],
            [
                'label' => 'Our Team',
                'url' => '/our-team',
            ],
            [
                'label' => 'Career',
                'url' => '/career',
            ],
            [
                'label' => 'Contact',
                'url' => '/contact',
            ],
        ]);
        $this->seedFeature('navigation_specialized_links', [
            [
                'label' => 'Offensive Security Services',
                'url' => '/services/offensive-security-services',
            ],
            [
                'label' => 'Defensive Security Services',
                'url' => '/services/defensive-security-services',
            ],
        ]);
    }
}

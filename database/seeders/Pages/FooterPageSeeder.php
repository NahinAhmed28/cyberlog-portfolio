<?php

namespace Database\Seeders\Pages;

use Database\Seeders\ContentSeeder;

class FooterPageSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('footer', [
            [
                'group_routes' => [
                    'offensive' => 'offensive-security-services',
                    'defensive' => 'defensive-security-services',
                ],
                'div_text' => 'Major Services',
                'div_text_2' => 'Specialized Services',
                'div_text_3' => 'Company',
                'div_text_4' => 'Contact',
                'icon' => 'fas fa-location-dot text-primary me-2',
                'paragraph' => '374 Tejgaon Industrial Area, 3rd Floor, Dhaka 1208, Bangladesh',
                'icon_2' => 'fas fa-envelope text-primary me-2',
                'a_href' => 'mailto:info@cyberlog.bd',
                'link_label_12' => 'info@cyberlog.bd',
                'icon_3' => 'fas fa-phone text-primary me-2',
                'paragraph_2' => '+880 1576-990884',
                'icon_4' => 'fa-solid fa-earth-americas text-primary me-2',
                'a_href_2' => 'https://www.cyberlog.bd',
                'link_label_13' => 'https://www.cyberlog.bd',
                'paragraph_3' => 'TRAD/DNCC/030973/2025',
                'div_text_5' => '©',
                'div_text_6' => 'Cyberlog. All rights reserved.',
                'div_text_7' => 'CYBER SAFE UNIVERSE',
            ],
        ]);
        $this->seedFeature('footer_wordmark', [
            [
                'label' => 'CYBERL',
            ],
            [
                'label' => 'OG',
            ],
        ]);
        $this->seedFeature('footer_cards', [
            [
                'a_href' => 'https://www.facebook.com/cyberlogbd/',
                'a_aria_label' => 'Facebook',
                'icon' => 'fab fa-fw fa-facebook-f',
            ],
            [
                'a_href' => 'https://www.linkedin.com/company/cyberlogbd/',
                'a_aria_label' => 'LinkedIn',
                'icon' => 'fab fa-fw fa-linkedin-in',
            ],
            [
                'a_href' => 'https://www.instagram.com/cyberlog_bd/',
                'a_aria_label' => 'Instagram',
                'icon' => 'fab fa-fw fa-instagram',
            ],
            [
                'a_href' => 'https://x.com/cyberlogbd',
                'a_aria_label' => 'X (Twitter)',
                'icon' => 'fab fa-fw fa-x-twitter',
            ],
        ]);
        $this->seedFeature('footer_col_12', [
            [
                'link_url' => '/services/soc',
                'link_label' => 'Security Operations Center (SOC)',
            ],
            [
                'link_url' => '/services/vapt',
                'link_label' => 'Vulnerability Assessment & Penetration Testing (VAPT)',
            ],
            [
                'link_url' => '/services/it-audit',
                'link_label' => 'IT Security Audit & ISO/IEC 27001',
            ],
            [
                'link_url' => '/services/capacity-building',
                'link_label' => 'Awareness & Security Training',
            ],
            [
                'link_url' => '/services/ai-and-automation',
                'link_label' => 'AI & Automation',
            ],
        ]);
        $this->seedFeature('footer_company_links', [
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
        $this->seedFeature('footer_specialized_links', [
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

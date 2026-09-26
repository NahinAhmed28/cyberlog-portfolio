<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class FooterSeeder extends ContentSeeder
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
    }
}

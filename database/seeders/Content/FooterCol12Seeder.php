<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class FooterCol12Seeder extends ContentSeeder
{
    public function run(): void
    {
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
    }
}

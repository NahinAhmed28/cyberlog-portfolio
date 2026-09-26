<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SharedNavbarServiceLinksSeeder extends ContentSeeder
{
    public function run(): void
    {
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
    }
}

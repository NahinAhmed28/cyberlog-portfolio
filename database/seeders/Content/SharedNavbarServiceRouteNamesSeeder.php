<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SharedNavbarServiceRouteNamesSeeder extends ContentSeeder
{
    public function run(): void
    {
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
    }
}

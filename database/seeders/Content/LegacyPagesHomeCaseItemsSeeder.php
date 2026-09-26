<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPagesHomeCaseItemsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_pages_home_case_items', [
            [
                'tag' => 'Capital Market',
                'name' => 'Dhaka Stock Exchange',
                'desc' => 'Cyberlog delivered SOC support for Bangladesh\'s most critical capital market infrastructure and one of the country\'s highest-value financial technology environments.',
                'stats' => [
                    [
                        '24/7',
                        'SOC Monitoring',
                    ],
                    [
                        '99.99%',
                        'Uptime for Capital Market Cyber Defense',
                    ],
                ],
            ],
            [
                'tag' => 'Financial Institute',
                'name' => 'Bangladesh Finance',
                'desc' => 'Cyberlog conducted VAPT for Bangladesh Finance to identify, validate, and prioritize exploitable security risks across its digital environment.',
                'stats' => [
                    [
                        '360°',
                        'Security Risk Review',
                    ],
                    [
                        '10+',
                        'High-Priority Risks Validated',
                    ],
                ],
            ],
            [
                'tag' => 'Government Organization',
                'name' => 'Bangladesh Investment Development Authority (BIDA)',
                'desc' => 'Cyberlog conducted cybersecurity capacity building for the IT team and supported a cybersecurity assessment to improve technical readiness and institutional resilience.',
                'stats' => [
                    [
                        '250%+',
                        'Increase in Employees\' Cybersecurity Skills',
                    ],
                    [
                        '12',
                        'Security Areas Reviewed',
                    ],
                ],
            ],
            [
                'tag' => 'Advertisement Industry',
                'name' => 'Adcomm Limited',
                'desc' => 'Cyberlog supported Adcomm Limited with ISO 27001 implementation and employee cybersecurity capacity building to strengthen compliance readiness and workforce security awareness.',
                'stats' => [
                    [
                        '93',
                        'ISO Controls Mapped',
                    ],
                    [
                        '200+',
                        'Employees Trained',
                    ],
                ],
            ],
        ]);
    }
}

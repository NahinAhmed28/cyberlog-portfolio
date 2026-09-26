<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class ClientsDeckScreensSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('clients_deck_screens', [
            [
                'cat' => 'Government Organization',
                'name' => 'Dhaka Stock Exchange (DSE)',
                'shot' => 'assets/img/clients/shots/dse.png',
                'url' => 'https://www.dsebd.org/',
                'desc' => 'Cyberlog delivered SOC support for Dhaka Stock Exchange, Bangladesh\'s most critical capital market infrastructure and one of the country\'s highest-value financial technology environments.',
                'stats' => [
                    [
                        '24/7',
                        'SOC Monitoring',
                    ],
                    [
                        '99.99%',
                        'Uptime For Capital Market Cyber Defense',
                    ],
                ],
                'accent' => '#0a57db',
            ],
            [
                'cat' => 'Financial Institute',
                'name' => 'Bangladesh Finance',
                'shot' => 'assets/img/clients/shots/bdfinance.png',
                'url' => 'https://bd.finance/',
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
                'accent' => '#f01843',
            ],
            [
                'cat' => 'Government Organization',
                'name' => 'Bangladesh Investment Development Authority (BIDA)',
                'shot' => 'assets/img/clients/shots/bida.png',
                'url' => 'https://bida.gov.bd/',
                'desc' => 'Cyberlog conducted cybersecurity capacity building for the IT team of Bangladesh Investment Development Authority and supported the organization with a cybersecurity assessment to improve technical readiness, risk visibility, and institutional cyber resilience.',
                'stats' => [
                    [
                        '250%+',
                        'Increase In Employees\' Cybersecurity Skills',
                    ],
                    [
                        '12',
                        'Security Areas Reviewed',
                    ],
                ],
                'accent' => '#1f9f72',
            ],
            [
                'cat' => 'Advertisement Industry',
                'name' => 'Adcomm Limited',
                'shot' => 'assets/img/clients/shots/adcomm.png',
                'url' => 'https://adcomm.com.bd/',
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
                'accent' => '#ff8a00',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders\Pages;

use Database\Seeders\ContentSeeder;

class ClientsPageSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_clients', [
            [
                'title' => 'Clients — Cyberlog',
                'paragraph' => 'CLIENTS',
                'heading' => 'Trusted Across',
                'label' => 'Critical Sectors',
                'paragraph_2' => 'Government, finance, education, and enterprise organizations rely on Cyberlog to defend their most critical systems.',
            ],
        ]);
        $this->seedFeature('clients_client_strip', [
            [
                'paragraph' => 'Clients',
            ],
        ]);
        $this->seedFeature('clients_client_strip_clients', [
            [
                'slug' => 'a2i',
                'name' => 'Aspire to Innovate (a2i)',
                'url' => 'https://a2i.gov.bd',
                'logo' => 'assets/img/clients/a2i.svg',
            ],
            [
                'slug' => 'aamar-taka',
                'name' => 'Aamar Taka',
                'url' => '#',
                'logo' => 'assets/img/clients/aamar-taka.svg',
            ],
            [
                'slug' => 'adcomm',
                'name' => 'Adcomm Limited',
                'url' => '#',
                'logo' => 'assets/img/clients/adcomm.svg',
            ],
            [
                'slug' => 'bangladesh-finance',
                'name' => 'Bangladesh Finance',
                'url' => '#',
                'logo' => 'assets/img/clients/bangladesh-finance.svg',
            ],
            [
                'slug' => 'bida',
                'name' => 'BIDA',
                'url' => 'https://bida.gov.bd',
                'logo' => 'assets/img/clients/bida.svg',
            ],
            [
                'slug' => 'bpi',
                'name' => 'Bangladesh Petroleum Institute',
                'url' => '#',
                'logo' => 'assets/img/clients/bpi.svg',
            ],
            [
                'slug' => 'bangladesh-police',
                'name' => 'Bangladesh Police',
                'url' => 'https://police.gov.bd',
                'logo' => 'assets/img/clients/bangladesh-police.svg',
            ],
            [
                'slug' => 'bubt',
                'name' => 'BUBT',
                'url' => 'https://www.bubt.edu.bd',
                'logo' => 'assets/img/clients/bubt.svg',
            ],
            [
                'slug' => 'dse',
                'name' => 'Dhaka Stock Exchange (DSE)',
                'url' => 'https://www.dsebd.org',
                'logo' => 'assets/img/clients/dse.svg',
            ],
            [
                'slug' => 'legalx',
                'name' => 'LegalX',
                'url' => '#',
                'logo' => 'assets/img/clients/legalx.svg',
            ],
            [
                'slug' => 'napd',
                'name' => 'NAPD',
                'url' => 'https://napd.gov.bd',
                'logo' => 'assets/img/clients/napd.svg',
            ],
            [
                'slug' => 'nazimgarh',
                'name' => 'Nazimgarh Resort',
                'url' => '#',
                'logo' => 'assets/img/clients/nazimgarh.svg',
            ],
            [
                'slug' => 'reachsavvy',
                'name' => 'ReachSavvy',
                'url' => '#',
                'logo' => 'assets/img/clients/reachsavvy.svg',
            ],
            [
                'slug' => 'vibe-gaming',
                'name' => 'Vibe Gaming',
                'url' => '#',
                'logo' => 'assets/img/clients/vibe-gaming.svg',
            ],
        ]);
        $this->seedFeature('clients_deck', [
            [
                'paragraph' => 'Client Websites',
                'label' => 'Trusted by',
                'label_2' => 'Government & Enterprise.',
                'link_label' => 'View Details',
                'icon' => 'fas fa-arrow-right',
                'button_aria_label' => 'Previous client',
                'icon_2' => 'fas fa-chevron-left',
                'button_aria_label_2' => 'Next client',
                'icon_3' => 'fas fa-chevron-right',
                'dot_aria_label' => 'Show',
            ],
        ]);
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
        $this->seedFeature('shared_clients', [
            [
                'paragraph' => 'We\'re Working With',
                'heading' => 'Our',
                'label' => 'Clients',
                'button_aria_label' => 'Previous client',
                'icon' => 'fas fa-chevron-left',
                'button_aria_label_2' => 'Next client',
                'icon_2' => 'fas fa-chevron-right',
                'dot_aria_label' => 'Show',
            ],
        ]);
        $this->seedFeature('shared_clients_clients', [
            [
                'name' => 'Government of Bangladesh',
                'sector' => 'Government Organization',
                'url' => '#',
                'logo' => 'images/clients/gono-projatontri-bangladesh-sarkar.png',
            ],
            [
                'name' => 'BIDA',
                'sector' => 'Government Organization',
                'url' => '#',
                'logo' => 'images/clients/bida.png',
            ],
            [
                'name' => 'Dhaka Stock Exchange Ltd',
                'sector' => 'Capital Market',
                'url' => '#',
                'logo' => 'images/clients/dhaka-stock-exchange-ltd.png',
            ],
            [
                'name' => 'Bangladesh Petroleum Institute (BPI)',
                'sector' => 'Government Institute',
                'url' => '#',
                'logo' => 'images/clients/bangladesh-petroleum-institute-bpi.png',
            ],
            [
                'name' => 'National Academy for Planning and Development',
                'sector' => 'Government Organization',
                'url' => '#',
                'logo' => 'images/clients/national-academy-for-planning-and-development.png',
            ],
            [
                'name' => 'A2i',
                'sector' => 'Digital Government',
                'url' => '#',
                'logo' => 'images/clients/a2i.png',
            ],
            [
                'name' => 'Cabinet Division',
                'sector' => 'Government Organization',
                'url' => '#',
                'logo' => 'images/clients/cabinet-division.png',
            ],
            [
                'name' => 'ICT Division',
                'sector' => 'Government Organization',
                'url' => '#',
                'logo' => 'images/clients/ict-division.png',
            ],
            [
                'name' => 'UNDP',
                'sector' => 'Development Organization',
                'url' => '#',
                'logo' => 'images/clients/undp.png',
            ],
            [
                'name' => 'Akij Venture',
                'sector' => 'Enterprise',
                'url' => '#',
                'logo' => 'images/clients/akij-venture.png',
            ],
            [
                'name' => 'Aamar Taka',
                'sector' => 'Financial Technology',
                'url' => '#',
                'logo' => 'images/clients/aamar-taka.png',
            ],
            [
                'name' => 'Adcomm',
                'sector' => 'Advertisement Industry',
                'url' => '#',
                'logo' => 'images/clients/adcomm.png',
            ],
            [
                'name' => 'Nazimgarh',
                'sector' => 'Hospitality',
                'url' => '#',
                'logo' => 'images/clients/nazimgarh.png',
            ],
            [
                'name' => 'Vibe Gaming',
                'sector' => 'Gaming',
                'url' => '#',
                'logo' => 'images/clients/vibe-gaming.png',
            ],
            [
                'name' => 'Legal X',
                'sector' => 'Legal Technology',
                'url' => '#',
                'logo' => 'images/clients/legal-x.png',
            ],
            [
                'name' => 'Purbachal',
                'sector' => 'Manufacturing',
                'url' => '#',
                'logo' => 'images/clients/purbachal.png',
                'light_background' => true,
            ],
        ]);
    }
}

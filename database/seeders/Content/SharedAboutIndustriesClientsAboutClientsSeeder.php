<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SharedAboutIndustriesClientsAboutClientsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('shared_about_industries_clients_about_clients', [
            [
                'item_0' => 'Government of Bangladesh',
                'item_1' => 'GB',
                'item_2' => 'images/clients/gono-projatontri-bangladesh-sarkar.png',
                'item_3' => 'https://bangladesh.gov.bd/',
            ],
            [
                'item_0' => 'Cabinet Division',
                'item_1' => 'CD',
                'item_2' => 'images/clients/cabinet-division.png',
                'item_3' => 'https://cabinet.gov.bd/',
            ],
            [
                'item_0' => 'ICT Division',
                'item_1' => 'ICT',
                'item_2' => 'images/clients/ict-division.png',
                'item_3' => 'https://ictd.gov.bd/',
            ],
            [
                'item_0' => 'Bangladesh Petroleum Institute',
                'item_1' => 'BPI',
                'item_2' => 'images/clients/bangladesh-petroleum-institute-bpi.png',
                'item_3' => 'https://bpi.gov.bd/',
            ],
            [
                'item_0' => 'National Academy for Planning & Development',
                'item_1' => 'NAPD',
                'item_2' => 'images/clients/national-academy-for-planning-and-development.png',
                'item_3' => 'https://napd.gov.bd/',
            ],
            [
                'item_0' => 'Dhaka Stock Exchange',
                'item_1' => 'DSE',
                'item_2' => 'images/clients/dhaka-stock-exchange-ltd.png',
                'item_3' => 'https://www.dsebd.org/',
            ],
            [
                'item_0' => 'Aamar Taka',
                'item_1' => 'AT',
                'item_2' => 'images/clients/aamar-taka.png',
                'item_3' => 'https://aamartaka.com/',
            ],
            [
                'item_0' => 'a2i Programme',
                'item_1' => 'a2i',
                'item_2' => 'images/clients/a2i.png',
                'item_3' => 'https://a2i.gov.bd/',
            ],
            [
                'item_0' => 'UNDP',
                'item_1' => 'UNDP',
                'item_2' => 'images/clients/undp.png',
                'item_3' => 'https://www.undp.org/bangladesh',
            ],
            [
                'item_0' => 'Akij Venture',
                'item_1' => 'AV',
                'item_2' => 'images/clients/akij-venture.png',
                'item_3' => 'https://www.akijventure.com/',
            ],
            [
                'item_0' => 'Adcomm Ltd.',
                'item_1' => 'AC',
                'item_2' => 'images/clients/adcomm.png',
                'item_3' => '#',
            ],
            [
                'item_0' => 'Nazimgarh Resorts',
                'item_1' => 'NR',
                'item_2' => 'images/clients/nazimgarh.png',
                'item_3' => '#',
            ],
            [
                'item_0' => 'LegalX',
                'item_1' => 'LX',
                'item_2' => 'images/clients/legal-x.png',
                'item_3' => '#',
            ],
            [
                'item_0' => 'Purbachal Apparel',
                'item_1' => 'PA',
                'item_2' => 'images/clients/purbachal.png',
                'item_3' => '#',
            ],
            [
                'item_0' => 'Vibe Gaming',
                'item_1' => 'VG',
                'item_2' => 'images/clients/vibe-gaming.png',
                'item_3' => '#',
            ],
        ]);
    }
}

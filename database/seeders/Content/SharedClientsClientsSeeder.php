<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SharedClientsClientsSeeder extends ContentSeeder
{
    public function run(): void
    {
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

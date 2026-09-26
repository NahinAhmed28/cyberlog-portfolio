<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class ClientsClientStripClientsSeeder extends ContentSeeder
{
    public function run(): void
    {
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
    }
}

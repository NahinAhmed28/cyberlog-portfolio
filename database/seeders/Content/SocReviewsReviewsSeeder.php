<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SocReviewsReviewsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('soc_reviews_reviews', [
            [
                'source' => 'Dhaka Stock Exchange (DSE)',
                'sourceKey' => 'dse',
                'logo' => 'images/clients/feedback/03-dhaka-stock-exchange.png',
                'rating' => '5.0',
                'quote' => 'As a critical financial infrastructure provider, security visibility isn\'t optional for us. Cyberlog\'s SOC team gave us continuous monitoring and faster incident response across our trading systems, with reporting our management could actually act on.',
            ],
            [
                'source' => 'Bangladesh Petroleum Institute (BPI)',
                'sourceKey' => 'bpi',
                'logo' => 'images/clients/bangladesh-petroleum-institute-bpi.png',
                'rating' => '5.0',
                'quote' => 'Cyberlog helped us structure our security monitoring from the ground up, better log visibility, faster alert triage, and clear guidance whenever something needed attention.',
            ],
            [
                'source' => 'Adcomm Limited',
                'sourceKey' => 'adcomm',
                'logo' => 'images/clients/feedback/12. Adcomm_51_1409.png',
                'rating' => '5.0',
                'quote' => 'Cyberlog\'s SOC support gave our team peace of mind. Their alerts were relevant, not noisy, and their incident response guidance was practical and easy for us to follow.',
            ],
        ]);
    }
}

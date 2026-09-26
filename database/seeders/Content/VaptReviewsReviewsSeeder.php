<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class VaptReviewsReviewsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('vapt_reviews_reviews', [
            [
                'rating' => '5.0',
                'quote' => 'As Bangladesh\'s national investment platform, our systems can\'t afford weak points. Cyberlog\'s VAPT team identified real, exploitable risks across our platform and gave us a clear path to fix them—the kind of assessment a government platform needs.',
                'name' => 'BIDA (Bangladesh Investment Development Authority)',
                'logo' => 'images/clients/bida.png',
            ],
            [
                'rating' => '5.0',
                'quote' => 'Our digital services reach millions of citizens, so security testing has to be thorough and precise. Cyberlog\'s assessment was methodical, well-documented, and gave our technical team exactly the evidence needed to prioritize fixes.',
                'name' => 'a2i (Aspire to Innovate)',
                'logo' => 'images/clients/a2i.png',
            ],
            [
                'rating' => '5.0',
                'quote' => 'As a financial marketplace handling sensitive customer data, security testing isn\'t a formality for us—it\'s core to trust. Cyberlog\'s VAPT team found real, practical risks in our platform and helped us close them fast, with reporting our engineering team could act on immediately.',
                'name' => 'AamarTaka.com',
                'logo' => 'images/clients/aamar-taka.png',
            ],
        ]);
    }
}

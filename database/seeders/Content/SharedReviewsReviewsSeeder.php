<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SharedReviewsReviewsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('shared_reviews_reviews', [
            [
                'source' => 'BIDA (Bangladesh Investment Development Authority)',
                'sourceKey' => 'bida',
                'logo' => 'images/clients/bida.png',
                'award' => 'National Investment Platform Assessment',
                'rating' => '5.0',
                'quote' => 'As Bangladesh\'s national investment platform, our systems can\'t afford weak points. Cyberlog\'s VAPT team identified real, exploitable risks across our platform and gave us a clear path to fix them, the kind of assessment a government platform needs.',
            ],
            [
                'source' => 'a2i (Aspire to Innovate)',
                'sourceKey' => 'a2i',
                'logo' => 'images/clients/a2i.png',
                'award' => 'Methodical & Thorough Security Testing',
                'rating' => '5.0',
                'quote' => 'Our digital services reach millions of citizens, so security testing has to be thorough and precise. Cyberlog\'s assessment was methodical, well-documented, and gave our technical team exactly the evidence needed to prioritize fixes.',
            ],
            [
                'source' => 'AamarTaka.com',
                'sourceKey' => 'aamartaka',
                'logo' => 'images/clients/aamar-taka.png',
                'award' => 'Core Trust & Actionable Engineering Reports',
                'rating' => '5.0',
                'quote' => 'As a financial marketplace handling sensitive customer data, security testing isn\'t a formality for us, it\'s core to trust. Cyberlog\'s VAPT team found real, practical risks in our platform and helped us close them fast, with reporting our engineering team could act on immediately.',
            ],
        ]);
    }
}

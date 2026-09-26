<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class HomeOurStoryMilestonesSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('home_our_story_milestones', [
            [
                'year' => '2022',
                'title' => 'The foundation of a cyber vision',
                'text' => 'Cyberlog began with a clear mission to support Bangladesh\'s growing digital ecosystem through practical, impact-driven cybersecurity.',
                'x' => 8,
                'y' => 86,
                'tone' => '#ffbf1b',
                'toneRgb' => '255, 191, 27',
            ],
            [
                'year' => '2023',
                'title' => 'Building industry presence',
                'text' => 'Cyberlog strengthened its market presence, expanded professional networks, and became recognized as a specialized cybersecurity company.',
                'x' => 29,
                'y' => 75,
                'tone' => '#6d9cff',
                'toneRgb' => '109, 156, 255',
            ],
            [
                'year' => '2024',
                'title' => 'Contributing to national cyber capacity',
                'text' => 'The company expanded its role through awareness, capacity building, advisory involvement, and contribution to cybersecurity maturity across institutions.',
                'x' => 50,
                'y' => 64,
                'tone' => '#42e6a4',
                'toneRgb' => '66, 230, 164',
            ],
            [
                'year' => '2025',
                'title' => 'Trusted across critical sectors',
                'text' => 'Cyberlog entered a stronger growth phase, earning trust across government, finance, education, enterprise, and critical sectors as a long-term cybersecurity partner.',
                'x' => 71,
                'y' => 55,
                'tone' => '#ffbf1b',
                'toneRgb' => '255, 191, 27',
            ],
            [
                'year' => '2026',
                'title' => 'Scaling cyber resilience',
                'text' => 'Cyberlog is moving toward a structured, product-led, and partnership-driven future to become a trusted cybersecurity brand for enterprises and critical digital infrastructure.',
                'x' => 92,
                'y' => 50,
                'tone' => '#42e6a4',
                'toneRgb' => '66, 230, 164',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class VaptHeroHeightItemsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('vapt_hero_height_items', [
            [
                'value' => 36,
            ],
            [
                'value' => 58,
            ],
            [
                'value' => 44,
            ],
            [
                'value' => 72,
            ],
            [
                'value' => 51,
            ],
            [
                'value' => 84,
            ],
            [
                'value' => 63,
            ],
            [
                'value' => 46,
            ],
            [
                'value' => 76,
            ],
            [
                'value' => 57,
            ],
            [
                'value' => 88,
            ],
            [
                'value' => 68,
            ],
        ]);
    }
}

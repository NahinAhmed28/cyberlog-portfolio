<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class VaptBoxesBoxesSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('vapt_boxes_boxes', [
            [
                'class' => 'black',
                'title' => 'Black Box',
                'conditions' => 'Testing with minimal or no internal information.',
                'value' => 'Best for validating external exposure and real attacker behavior.',
            ],
            [
                'class' => 'grey',
                'title' => 'Grey Box',
                'conditions' => 'Testing with limited access, selected credentials, or partial system context.',
                'value' => 'Best for balanced security validation with better speed and accuracy.',
            ],
            [
                'class' => 'white',
                'title' => 'White Box',
                'conditions' => 'Testing with full access to architecture, credentials, source details, or internal documentation.',
                'value' => 'Best for deep security review, logic flaws, and code-level risk validation.',
            ],
        ]);
    }
}

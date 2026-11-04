<?php

$text = fn ($label, $type = 'text') => ['label' => $label, 'type' => $type];
$fields = [
    'eyebrow' => $text('Section label (small accent text)'),
    'heading' => $text('Section heading'),
    'description' => $text('Section description', 'textarea'),
    'image' => $text('Section image or logo', 'image'),
    'image_alt' => $text('Section image description'),
    'video' => $text('Section video', 'video'),
    'body' => $text('Formatted section content', 'richtext'),
    'buttons' => ['label' => 'Section buttons', 'type' => 'list', 'item' => ['label' => 'Button', 'type' => 'object', 'fields' => [
        'label' => $text('Button text'), 'url' => $text('Button destination', 'url'), 'visible' => ($text('Show button', 'boolean') + ['default' => true]),
    ]]],
    'items' => ['label' => 'Section items (drag or use arrows to reorder)', 'type' => 'list', 'item' => ['label' => 'Item', 'type' => 'object', 'fields' => [
        'heading' => $text('Item heading / client name / question'),
        'description' => $text('Item description / testimonial / answer', 'textarea'),
        'image' => $text('Item image or client logo', 'image'),
        'image_alt' => $text('Item image description'),
        'icon' => $text('Item icon', 'icon'),
        'value' => $text('Statistic / comparison value'),
        'rating' => $text('Rating (0 to 5)', 'number'),
        'url' => $text('Item link', 'url'),
        'light_background' => $text('Light background behind image', 'boolean'),
        'visible' => ($text('Show item', 'boolean') + ['default' => true]),
    ]]],
];
$types = ['hero' => 'Hero', 'logos' => 'Logo strip', 'cards' => 'Cards grid', 'stats' => 'Statistics', 'comparison' => 'Comparison table', 'steps' => 'Steps / timeline', 'testimonials' => 'Testimonials / ratings', 'video' => 'Video + text', 'cta' => 'Contact / CTA', 'faq' => 'FAQ', 'richtext' => 'Rich text'];

return ['types' => $types, 'fields' => $fields];

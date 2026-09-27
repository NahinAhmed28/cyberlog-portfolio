<?php

namespace Database\Seeders;

use App\Models\ContentEntry;
use App\Models\NavigationItem;
use Illuminate\Database\Seeder;

class NavigationSeeder extends Seeder
{
    public function run(): void
    {
        // Build the initial menu from the preserved page defaults (or existing admin edits).
        $rows = fn ($key) => ContentEntry::forModule($key)->newQuery()->where('is_visible', true)->orderBy('sort_order')->get()->map(fn ($row) => $row->data);
        $nav = $rows('nav')->first();
        if (! $nav) {
            return;
        }
        $services = $rows('services')->keyBy('route');
        $roots = [
            'home' => [$nav['link_label'], $nav['destination_2'], 'link'],
            'services' => [$nav['link_label_2'], '#', 'dropdown'],
            'vciso' => [$nav['link_label_6'], $nav['destination_6'], 'link'],
            'company' => [$nav['link_label_7'], '#', 'dropdown'],
            'contact' => [$nav['link_label_12'], $nav['destination_11'], 'button'],
        ];
        foreach ($roots as $key => [$label, $url, $type]) {
            NavigationItem::withTrashed()->firstOrCreate(['seed_key' => $key], compact('label', 'url', 'type') + ['sort_order' => array_search($key, array_keys($roots)) * 10]);
        }
        $parent = NavigationItem::withTrashed()->where('seed_key', 'services')->firstOrFail();
        $children = [['label' => $nav['link_label_3'], 'url' => $nav['destination_3']], ['label' => 'Divider', 'type' => 'divider']];
        foreach ($rows('nav_primary_routes') as $row) {
            if ($service = $services->get($row['value'])) {
                $children[] = ['label' => $service['title'], 'url' => content_service_url($service)];
            }
        }
        $children[] = ['label' => 'Divider', 'type' => 'divider'];
        $children = array_merge($children, $rows('navigation_specialized_links')->all());
        $this->children($parent, $children);
        $this->children(NavigationItem::withTrashed()->where('seed_key', 'company')->firstOrFail(), $rows('navigation_company_links')->all());
    }

    private function children(NavigationItem $parent, array $children): void
    {
        foreach ($children as $index => $child) {
            NavigationItem::withTrashed()->firstOrCreate(['seed_key' => $parent->seed_key.'-child-'.$index], $child + ['parent_id' => $parent->id, 'sort_order' => $index * 10]);
        }
    }
}

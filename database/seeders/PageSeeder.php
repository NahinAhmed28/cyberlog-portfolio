<?php

namespace Database\Seeders;

use App\Content\PortfolioConfiguration;
use App\Models\Page;
use App\Models\PageSection;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        PortfolioConfiguration::validate();
        foreach (config('content_modules') as $key => $definition) {
            PageSection::firstOrCreate(['key' => $key], ['title' => $definition['title'], 'is_archived' => $definition['group'] === 'Archived layouts']);
        }
        foreach (config('portfolio_pages') as $slug => $definition) {
            $page = Page::firstOrCreate(['slug' => $slug], collect($definition)->only(['title', 'path', 'kind'])->all() + ['sort_order' => array_search($slug, array_keys(config('portfolio_pages'))) * 10]);
            foreach ($definition['sections'] as $order => $key) {
                $section = PageSection::where('key', $key)->firstOrFail();
                $page->sections()->syncWithoutDetaching([$section->id => ['sort_order' => $order]]);
            }
        }
    }
}

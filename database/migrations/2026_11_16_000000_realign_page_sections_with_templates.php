<?php

use App\Content\PortfolioConfiguration;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Link each configured page editor only to the sections its template renders (plus its own
     * archived layouts). Earlier seeds attached the home threat feed, the SOC activity feed, the
     * service catalogue and the service-group headings to pages that never show them.
     */
    public function up(): void
    {
        PortfolioConfiguration::loadMissing();
        $sections = DB::table('page_sections')->pluck('id', 'key');
        foreach (config('portfolio_pages', []) as $slug => $definition) {
            $pageId = DB::table('pages')->where('slug', $slug)->value('id');
            if (! $pageId) {
                continue;
            }
            $linked = [];
            foreach ($definition['sections'] as $order => $key) {
                if (! isset($sections[$key])) {
                    continue;
                }
                $linked[] = $sections[$key];
                DB::table('page_page_section')->updateOrInsert(['page_id' => $pageId, 'page_section_id' => $sections[$key]], ['sort_order' => $order]);
            }
            if ($linked) {
                DB::table('page_page_section')->where('page_id', $pageId)->whereNotIn('page_section_id', $linked)->delete();
            }
        }
    }

    public function down(): void
    {
        // The removed links pointed at sections those pages never rendered; PageSeeder restores any configured link.
    }
};

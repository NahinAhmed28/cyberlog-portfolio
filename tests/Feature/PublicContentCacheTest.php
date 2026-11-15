<?php

namespace Tests\Feature;

use App\Models\ContentEntry;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\RefreshDatabaseState;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class PublicContentCacheTest extends TestCase
{
    use RefreshDatabase;

    protected $seed = true;

    // These tests exercise actual commit callbacks, rather than an outer test transaction.
    protected $connectionsToTransact = [];

    protected function beforeRefreshingDatabase(): void
    {
        RefreshDatabaseState::$migrated = false;
    }

    protected function afterRefreshingDatabase(): void
    {
        RefreshDatabaseState::$migrated = false;
    }

    public function test_cold_public_render_batches_content_and_later_visitors_reuse_the_cache(): void
    {
        Cache::flush();
        DB::enableQueryLog();
        DB::flushQueryLog();
        $this->get('/')->assertOk();
        $cold = collect(DB::getQueryLog());
        $this->assertCount(1, $cold->filter(fn ($query) => str_contains($query['query'], '"page_contents"')));

        DB::flushQueryLog();
        $this->get('/career')->assertOk();
        $warm = collect(DB::getQueryLog());
        $this->assertCount(0, $warm->filter(fn ($query) => str_contains($query['query'], '"page_contents"')));
        $this->assertCount(0, $warm->filter(fn ($query) => str_contains($query['query'], '"page_sections"')));
        DB::disableQueryLog();
    }

    public function test_edits_visibility_trash_and_restore_invalidate_published_content(): void
    {
        $entry = ContentEntry::forModule('page_career')->newQuery()->firstOrFail();
        $this->get('/career')->assertOk();
        $entry->content_heading = 'A fresh career heading';
        $entry->save();
        $this->get('/career')->assertSee('A fresh career heading');

        $entry->is_visible = false;
        $entry->save();
        $this->get('/career')->assertDontSee('A fresh career heading');
        $entry->is_visible = true;
        $entry->save();
        $this->get('/career')->assertSee('A fresh career heading');
        $entry->delete();
        $this->get('/career')->assertDontSee('A fresh career heading');
        $entry->restore();
        $this->get('/career')->assertSee('A fresh career heading');
    }

    public function test_uncommitted_edits_do_not_escape_into_the_shared_cache(): void
    {
        $entry = ContentEntry::forModule('page_career')->newQuery()->firstOrFail();
        $original = $entry->content_heading;
        $this->get('/career')->assertOk();
        DB::beginTransaction();
        $entry->content_heading = 'Uncommitted career heading';
        $entry->save();
        $this->get('/career')->assertSee('Uncommitted career heading');
        DB::rollBack();
        $this->get('/career')->assertDontSee('Uncommitted career heading')->assertSee($original, false);

        DB::transaction(function () use ($entry) {
            $entry->content_heading = 'Committed career heading';
            $entry->save();
        });
        $this->get('/career')->assertSee('Committed career heading');
    }

    public function test_cached_paths_are_resolved_using_the_current_request_host(): void
    {
        $entry = ContentEntry::forModule('nav')->newQuery()->firstOrFail();
        $entry->content_destination = '/about';
        $entry->save();
        $this->get('https://first.example.test/')->assertSee('href="https://first.example.test/about"', false);
        $this->get('https://second.example.test/career')->assertSee('href="https://second.example.test/about"', false);
    }

    public function test_deployments_can_warm_content_before_the_first_visitor(): void
    {
        $this->artisan('cms:cache')->assertSuccessful();
        DB::enableQueryLog();
        DB::flushQueryLog();
        $this->get('/career')->assertOk();
        $this->assertCount(0, collect(DB::getQueryLog())->filter(fn ($query) => str_contains($query['query'], '"page_contents"')));
        DB::disableQueryLog();
    }
}

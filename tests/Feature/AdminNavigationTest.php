<?php

namespace Tests\Feature;

use App\Content\AdminNavigation;
use App\Models\NavigationItem;
use App\Models\Page;
use App\Models\User;
use Database\Seeders\PageSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminNavigationTest extends TestCase
{
    use RefreshDatabase;

    protected $seed = true;

    public function test_sidebar_follows_menu_changes_and_keeps_unlisted_pages_accessible(): void
    {
        $group = NavigationItem::where('seed_key', 'services')->firstOrFail();
        $group->update(['label' => 'Security services']);
        $about = NavigationItem::where('url', '/about')->firstOrFail();
        $about->update(['parent_id' => $group->id, 'label' => 'Meet us', 'sort_order' => -10]);
        NavigationItem::where('url', '/clients')->update(['is_visible' => false]);
        $sidebar = app(AdminNavigation::class)->items();
        $services = collect($sidebar['items'])->firstWhere('label', 'Security services');
        $this->assertSame('Meet us', $services['children'][0]['label']);
        $this->assertSame('about', $services['children'][0]['page']->slug);
        $this->assertTrue($sidebar['otherPages']->contains('slug', 'clients'));
        $linked = collect($sidebar['items'])->flatMap(fn ($item) => $item['children'] ?? [$item])->pluck('page')->filter()->pluck('id');
        $this->assertEqualsCanonicalizing(Page::where('kind', 'page')->pluck('id')->all(), $linked->merge($sidebar['otherPages']->pluck('id'))->unique()->values()->all());
        $admin = User::factory()->create();
        $admin->forceFill(['is_admin' => true])->save();
        $this->actingAs($admin)->get('/admin/pages/about')->assertOk()->assertSee('Security services')->assertSee('aria-current="page"', false);
    }

    public function test_seeder_recovers_configuration_missing_from_old_cache(): void
    {
        config(['content_modules' => null, 'portfolio_pages' => null]);
        $this->seed(PageSeeder::class);
        $this->assertNotEmpty(config('content_modules'));
        $this->assertCount(count(config('portfolio_pages')), Page::all());
    }

    public function test_invalid_configuration_fails_with_deployment_instructions(): void
    {
        config(['content_modules' => []]);
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('php artisan config:clear');
        $this->seed(PageSeeder::class);
    }
}

<?php

namespace Tests\Feature;

use App\Models\ContentEntry;
use App\Models\NavigationItem;
use App\Models\Page;
use App\Models\PageSection;
use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PageAdministrationTest extends TestCase
{
    use RefreshDatabase;

    protected $seed = true;

    protected function setUp(): void
    {
        parent::setUp();
        $admin = User::factory()->create();
        $admin->is_admin = true;
        $admin->save();
        $this->actingAs($admin);
    }

    public function test_all_pages_footer_and_navigation_are_accessible_and_shared_content_is_not_duplicated(): void
    {
        $this->withoutExceptionHandling();
        foreach (Page::all() as $page) {
            $this->get(route('admin.pages.show', $page))->assertOk();
        }
        $this->get('/admin/navigation')->assertOk()->assertSee('Services');
        $this->get('/admin/navigation/create')->assertOk();
        $shared = PageSection::where('key', 'shared_clients_clients')->firstOrFail();
        $this->assertTrue($shared->pages->contains('slug', 'home'));
        $this->assertTrue($shared->pages->contains('slug', 'clients'));
        $this->assertSame(1, PageSection::where('key', 'shared_clients_clients')->count());
        $this->withExceptionHandling()->get('/admin/pages/unknown')->assertNotFound();
    }

    public function test_admin_can_add_edit_hide_reorder_and_delete_a_dropdown_and_submenu(): void
    {
        $this->withoutExceptionHandling();
        $root = ['label' => 'Resources', 'url' => '#', 'type' => 'dropdown', 'parent_id' => null, 'sort_order' => 15, 'is_visible' => 1, 'new_tab' => 0];
        $this->post('/admin/navigation', $root)->assertSessionHasNoErrors()->assertRedirect('/admin/navigation');
        $menu = NavigationItem::where('label', 'Resources')->firstOrFail();
        $child = ['label' => 'Security guides', 'url' => '/about', 'type' => 'link', 'parent_id' => $menu->id, 'sort_order' => 10, 'is_visible' => 1, 'new_tab' => 1];
        $this->post('/admin/navigation', $child)->assertSessionHasNoErrors()->assertRedirect();
        $link = NavigationItem::where('label', 'Security guides')->firstOrFail();
        $this->get('/')->assertSee('Resources')->assertSee('Security guides');
        $this->get(route('admin.navigation.edit', $link))->assertOk();
        $child['label'] = 'Research library';
        $child['sort_order'] = 5;
        $this->put(route('admin.navigation.update', $link), $child)->assertSessionHasNoErrors()->assertRedirect();
        $this->get('/')->assertSee('Research library')->assertDontSee('Security guides');
        $root['is_visible'] = 0;
        $this->put(route('admin.navigation.update', $menu), $root)->assertSessionHasNoErrors()->assertRedirect();
        $this->get('/')->assertDontSee('Research library');
        $this->delete(route('admin.navigation.destroy', $menu))->assertRedirect();
        $this->assertSoftDeleted('navigation_items', ['id' => $menu->id]);
        $this->assertSoftDeleted('navigation_items', ['id' => $link->id]);
    }

    public function test_menu_links_reject_unsafe_urls_and_parent_cycles_and_seeders_preserve_edits(): void
    {
        $menu = NavigationItem::where('seed_key', 'services')->firstOrFail();
        $data = ['label' => 'Our services', 'url' => '#', 'type' => 'dropdown', 'parent_id' => $menu->id, 'sort_order' => 10, 'is_visible' => 1, 'new_tab' => 0];
        $this->put(route('admin.navigation.update', $menu), $data)->assertSessionHasErrors('parent_id');
        $data['parent_id'] = null;
        $data['url'] = 'javascript:alert(1)';
        $this->put(route('admin.navigation.update', $menu), $data)->assertSessionHasErrors('url');
        $data['url'] = '#';
        $this->put(route('admin.navigation.update', $menu), $data)->assertSessionHasNoErrors()->assertRedirect();
        $this->seed(DatabaseSeeder::class);
        $this->assertSame('Our services', $menu->fresh()->label);
    }

    public function test_page_copy_can_be_deleted_and_restored_without_default_seeding_resurrecting_it(): void
    {
        $entry = ContentEntry::forModule('home_hero')->newQuery()->firstOrFail();
        $this->delete(route('admin.content.destroy', ['home_hero', $entry->id]))->assertRedirect();
        $this->get('/')->assertOk()->assertDontSee('Join our');
        $this->get('/admin/pages/home')->assertOk()->assertSee('In trash');
        $this->seed(DatabaseSeeder::class);
        $this->assertTrue($entry->fresh()->trashed());
        $this->post(route('admin.content.restore', ['home_hero', $entry->id]))->assertRedirect();
        $this->get('/')->assertOk()->assertSee('Join our');
    }
}

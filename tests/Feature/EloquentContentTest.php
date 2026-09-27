<?php

namespace Tests\Feature;

use App\Content\ContentRegistry;
use App\Models\ContentEntry;
use App\Models\PageContent;
use App\Models\PageSection;
use App\Models\User;
use Database\Seeders\AdminUserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Tests\TestCase;

class EloquentContentTest extends TestCase
{
    use RefreshDatabase;

    protected $seed = true;

    public function test_configured_admin_seeder_creates_a_login_and_preserves_existing_passwords(): void
    {
        config(['admin.email' => 'seeded-admin@example.test', 'admin.password' => 'Cyber123', 'admin.name' => 'Portfolio Administrator']);
        $this->seed(AdminUserSeeder::class);
        $this->post('/login', ['email' => config('admin.email'), 'password' => config('admin.password')])->assertRedirect('/admin');
        $this->get('/admin')->assertOk();
        $hash = User::where('email', config('admin.email'))->firstOrFail()->password;
        config(['admin.password' => 'DifferentPassword123!']);
        $this->seed(AdminUserSeeder::class);
        $this->assertSame($hash, User::where('email', config('admin.email'))->firstOrFail()->password);
    }

    public function test_every_page_section_uses_the_consolidated_model_and_saves_its_seeded_data(): void
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create();
        $user->is_admin = true;
        $user->save();
        $this->actingAs($user);
        $classes = [];
        foreach (app(ContentRegistry::class)->all() as $key => $module) {
            $model = ContentEntry::forModule($key);
            $classes[] = $model::class;
            $this->assertSame(Str::snake(Str::pluralStudly(class_basename($model))), $model->getTable(), $key);
            $this->assertSame($module['table'], $model->getTable(), $key);
            $record = $model->newQuery()->first();
            if (! $record) {
                continue;
            }
            $data = $record->contentData($module);
            $this->put(route('admin.content.update', [$key, $record->id]), [
                'data' => $data, 'sort_order' => $record->sort_order,
                'is_visible' => $record->is_visible, 'version' => $record->editVersion(),
            ])->assertSessionHasNoErrors()->assertRedirect();
            $this->assertEquals($data, $record->fresh()->contentData($module), $key);
            $audit = $record->audits()->latest('id')->firstOrFail();
            $this->assertTrue($audit->content->is($record));
            $this->assertTrue($audit->user->is($user));
        }
        $this->assertSame([PageContent::class], array_values(array_unique($classes)));
        $this->assertSame(0, PageSection::doesntHave('pages')->count());
    }

    public function test_seeded_media_references_are_real_files_in_the_media_library(): void
    {
        foreach (app(ContentRegistry::class)->all() as $key => $module) {
            foreach (ContentEntry::forModule($key)->newQuery()->get() as $entry) {
                foreach (Arr::dot($entry->contentData($module)) as $value) {
                    if (! is_string($value) || ! preg_match('~^(assets|images)/.+\.(png|jpe?g|gif|webp|svg|mp4|webm)$~i', $value)) {
                        continue;
                    }
                    $this->assertFileExists(public_path($value), $key);
                    $this->assertDatabaseHas('media_assets', ['path' => $value]);
                }
            }
        }
    }

    public function test_every_seeded_collection_accepts_new_editable_items_and_supports_trash_and_restore(): void
    {
        $user = User::factory()->create();
        $user->is_admin = true;
        $user->save();
        $this->actingAs($user);
        foreach (app(ContentRegistry::class)->all() as $key => $module) {
            if (! $module['repeatable']) {
                continue;
            }
            $model = ContentEntry::forModule($key);
            $source = $model->newQuery()->firstOrFail();
            $data = $source->contentData($module);
            $count = $model->newQuery()->count();
            $this->post(route('admin.content.store', $key), [
                'data' => $data, 'sort_order' => 20, 'is_visible' => 0,
            ])->assertSessionHasNoErrors()->assertRedirect();
            $this->assertSame($count + 1, $model->newQuery()->count(), $key);
            $added = $model->newQuery()->latest('id')->firstOrFail();
            $this->assertEquals($data, $added->contentData($module), $key);
            $this->assertFalse($added->is_visible);
            $this->get(route('admin.content.edit', [$key, $added->id]))->assertOk();
            $this->put(route('admin.content.update', [$key, $added->id]), [
                'data' => $data, 'sort_order' => 30, 'is_visible' => 1, 'version' => $added->editVersion(),
            ])->assertSessionHasNoErrors()->assertRedirect();
            $this->assertTrue($added->fresh()->is_visible);
            $this->delete(route('admin.content.destroy', [$key, $added->id]))->assertRedirect();
            $this->assertTrue($added->fresh()->trashed());
            $this->post(route('admin.content.restore', [$key, $added->id]))->assertRedirect();
            $this->assertFalse($added->fresh()->trashed());
        }
    }

    public function test_table_upgrade_and_rollback_preserve_existing_admin_edits(): void
    {
        $record = ContentEntry::forModule('home_hero')->newQuery()->firstOrFail();
        $record->content_heading = 'Preserve this administrator edit';
        $record->save();
        $migration = require database_path('migrations/2026_09_28_000000_consolidate_content_by_page.php');
        $migration->down();
        $this->assertDatabaseHas('home_hero_sections', ['content_heading' => $record->content_heading]);
        $migration->up();
        $restored = ContentEntry::forModule('home_hero')->newQuery()->where('seed_key', 'default')->firstOrFail();
        $this->assertSame('Preserve this administrator edit', $restored->content_heading);
    }
}

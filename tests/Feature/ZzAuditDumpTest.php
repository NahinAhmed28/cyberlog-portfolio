<?php

namespace Tests\Feature;

use App\Content\PageEditor;
use App\Models\Page;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ZzAuditDumpTest extends TestCase
{
    use RefreshDatabase;

    protected $seed = true;

    public function test_dump(): void
    {
        $admin = User::factory()->create();
        $admin->is_admin = true;
        $admin->save();
        $this->actingAs($admin);
        $out = '';
        foreach (Page::orderBy('sort_order')->get() as $page) {
            $out .= "\n########## PAGE {$page->slug} ({$page->kind}) path={$page->path}\n";
            $response = $this->get(route('admin.pages.show', $page))->assertOk();
            $sections = $response->viewData('sections');
            $groups = $sections->groupBy(fn ($section) => app(PageEditor::class)->group($section, $page));
            foreach ($groups as $groupName => $group) {
                $out .= "  == {$groupName}\n";
                foreach ($group as $section) {
                    $def = config('content_modules.'.$section->key);
                    $out .= sprintf("    - %-50s \"%s\" [%s] pages=%d items=%d\n", $section->key, $section->editor_title, $def['group'], $section->pages->count(), $section->contents->whereNull('deleted_at')->count());
                }
            }
            foreach ($sections->where('is_archived', false) as $section) {
                $entry = $section->contents->whereNull('deleted_at')->first();
                $url = $entry ? route('admin.content.edit', [$section->key, $entry->id, 'page' => $page->slug]) : route('admin.content.create', [$section->key, 'page' => $page->slug]);
                $resp = $this->get($url);
                if ($resp->status() !== 200) {
                    $out .= "    !! {$section->key} edit form status {$resp->status()}\n";

                    continue;
                }
                $def = $resp->viewData('definition');
                $out .= "    ## FORM {$section->key} \"{$def['title']}\"\n";
                foreach (collect($def['fields'])->groupBy('editor_group', true) as $eg => $fields) {
                    $out .= "       [{$eg}]\n";
                    foreach ($fields as $key => $field) {
                        $out .= sprintf("          %-28s %-10s %-45s anchor=%s\n", $key, $field['type'], $field['label'], $field['anchor']);
                    }
                }
            }
        }
        file_put_contents(getenv('AUDIT_DUMP_PATH') ?: sys_get_temp_dir().'/admin-audit.txt', $out);
        $this->assertTrue(true);
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $plan = require __DIR__.'/data/page_content_20260928.php';
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('path')->nullable();
            $table->string('kind')->default('page');
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
        Schema::create('page_sections', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->string('title');
            $table->boolean('is_archived')->default(false);
            $table->timestamps();
        });
        Schema::create('page_page_section', function (Blueprint $table) {
            $table->foreignId('page_id')->constrained()->cascadeOnDelete();
            $table->foreignId('page_section_id')->constrained()->cascadeOnDelete();
            $table->unsignedInteger('sort_order')->default(0);
            $table->primary(['page_id', 'page_section_id']);
        });
        Schema::create('page_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_section_id')->constrained()->cascadeOnDelete();
            $table->unsignedBigInteger('legacy_id')->nullable();
            $table->string('seed_key');
            $table->json('data');
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_visible')->default(true);
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['page_section_id', 'seed_key']);
        });

        DB::transaction(function () use ($plan) {
            $sectionIds = [];
            foreach ($plan['sections'] as $key => $definition) {
                $sectionIds[$key] = DB::table('page_sections')->insertGetId([
                    'key' => $key, 'title' => $definition['title'], 'is_archived' => $definition['archived'],
                    'created_at' => now(), 'updated_at' => now(),
                ]);
                $auditIds = [];
                foreach (DB::table($definition['table'])->orderBy('id')->get() as $record) {
                    $data = [];
                    foreach ($definition['fields'] as $field => $type) {
                        $value = $record->{'content_'.$field};
                        $data[$field] = $value === null ? null : match ($type) {
                            'list', 'object' => json_decode($value, true, flags: JSON_THROW_ON_ERROR),
                            'number' => (float) $value,
                            'boolean' => (bool) $value,
                            default => $value,
                        };
                    }
                    $id = DB::table('page_contents')->insertGetId([
                        'page_section_id' => $sectionIds[$key], 'legacy_id' => $record->id,
                        'seed_key' => $record->seed_key, 'data' => json_encode($data, JSON_THROW_ON_ERROR),
                        'sort_order' => $record->sort_order, 'is_visible' => $record->is_visible,
                        'created_at' => $record->created_at, 'updated_at' => $record->updated_at, 'deleted_at' => $record->deleted_at,
                    ]);
                    // Collect first to avoid collisions between old IDs and remapped IDs.
                    foreach (DB::table('content_audits')->where('module', $key)->where('entry_id', $record->id)->pluck('id') as $auditId) {
                        $auditIds[$auditId] = $id;
                    }
                }
                foreach ($auditIds as $auditId => $id) {
                    DB::table('content_audits')->where('id', $auditId)->update(['entry_id' => $id]);
                }
            }
            foreach ($plan['pages'] as $slug => $page) {
                $pageId = DB::table('pages')->insertGetId([
                    'slug' => $slug, 'title' => $page['title'], 'path' => $page['path'], 'kind' => $page['kind'],
                    'sort_order' => count(DB::table('pages')->pluck('id')) * 10, 'created_at' => now(), 'updated_at' => now(),
                ]);
                foreach ($page['sections'] as $order => $key) {
                    DB::table('page_page_section')->insert(['page_id' => $pageId, 'page_section_id' => $sectionIds[$key], 'sort_order' => $order]);
                }
            }
        });
        // The copy completes before any original table is removed.
        foreach ($plan['sections'] as $definition) {
            Schema::drop($definition['table']);
        }
    }

    public function down(): void
    {
        $plan = require __DIR__.'/data/page_content_20260928.php';
        foreach ($plan['sections'] as $key => $definition) {
            Schema::create($definition['table'], function (Blueprint $table) use ($definition) {
                $table->id();
                $table->string('seed_key')->unique('restore_'.substr(sha1($definition['table']), 0, 12));
                $table->unsignedInteger('sort_order')->default(0);
                $table->boolean('is_visible')->default(true);
                foreach ($definition['fields'] as $field => $type) {
                    $method = match ($type) {
                        'list', 'object' => 'json', 'boolean' => 'boolean', 'number' => 'double', default => 'longText'
                    };
                    $table->$method('content_'.$field)->nullable();
                }
                $table->timestamps();
                $table->softDeletes();
            });
            $sectionId = DB::table('page_sections')->where('key', $key)->value('id');
            $rows = DB::table('page_contents')->where('page_section_id', $sectionId)->orderBy('id')->get();
            $nextId = (int) $rows->max('legacy_id');
            $audits = [];
            foreach ($rows as $row) {
                $id = $row->legacy_id ?? ++$nextId;
                $data = json_decode($row->data, true);
                $values = ['id' => $id, 'seed_key' => $row->seed_key, 'sort_order' => $row->sort_order, 'is_visible' => $row->is_visible, 'created_at' => $row->created_at, 'updated_at' => $row->updated_at, 'deleted_at' => $row->deleted_at];
                foreach ($definition['fields'] as $field => $type) {
                    $value = $data[$field] ?? null;
                    $values['content_'.$field] = is_array($value) ? json_encode($value) : $value;
                }
                DB::table($definition['table'])->insert($values);
                foreach (DB::table('content_audits')->where('module', $key)->where('entry_id', $row->id)->pluck('id') as $auditId) {
                    $audits[$auditId] = $id;
                }
            }
            foreach ($audits as $auditId => $id) {
                DB::table('content_audits')->where('id', $auditId)->update(['entry_id' => $id]);
            }
        }
        Schema::dropIfExists('page_contents');
        Schema::dropIfExists('page_page_section');
        Schema::dropIfExists('page_sections');
        Schema::dropIfExists('pages');
    }
};

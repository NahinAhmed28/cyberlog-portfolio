<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_legacy_pages_defense_services', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_3d7a552e9e15_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_3d7a552e9e15_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_title')->nullable();
            $table->longText('content_paragraph')->nullable();
            $table->longText('content_heading')->nullable();
            $table->longText('content_label')->nullable();
            $table->longText('content_icon')->nullable();
            $table->longText('content_label_2')->nullable();
            $table->longText('content_label_3')->nullable();
            $table->longText('content_paragraph_2')->nullable();
            $table->longText('content_heading_2')->nullable();
            $table->longText('content_label_4')->nullable();
            $table->longText('content_icon_2')->nullable();
            $table->longText('content_label_5')->nullable();
            $table->longText('content_label_6')->nullable();
            $table->longText('content_title_2')->nullable();
            $table->longText('content_text')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_legacy_pages_defense_services');
    }
};

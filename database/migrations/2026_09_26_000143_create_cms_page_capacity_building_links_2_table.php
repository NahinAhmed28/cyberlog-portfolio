<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_page_capacity_building_links_2', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_303f14112a9e_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_303f14112a9e_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_icon')->nullable();
            $table->longText('content_list_text')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_page_capacity_building_links_2');
    }
};

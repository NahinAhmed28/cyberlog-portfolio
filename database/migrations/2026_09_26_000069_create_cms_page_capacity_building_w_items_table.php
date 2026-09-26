<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_page_capacity_building_w_items', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_882747081dc4_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_882747081dc4_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_item_0')->nullable();
            $table->longText('content_item_1')->nullable();
            $table->longText('content_item_2')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_page_capacity_building_w_items');
    }
};

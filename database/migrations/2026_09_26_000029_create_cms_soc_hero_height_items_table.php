<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_soc_hero_height_items', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_aaa52b2777da_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_aaa52b2777da_order');
            $table->boolean('is_visible')->default(true);
            $table->double('content_value')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_soc_hero_height_items');
    }
};

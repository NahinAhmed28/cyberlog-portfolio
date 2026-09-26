<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_vapt_hero_step_items', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_90cbb3667a0b_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_90cbb3667a0b_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_value')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_vapt_hero_step_items');
    }
};

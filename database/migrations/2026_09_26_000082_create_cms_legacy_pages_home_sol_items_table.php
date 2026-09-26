<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_legacy_pages_home_sol_items', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_6f5dc787a6f3_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_6f5dc787a6f3_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_route')->nullable();
            $table->longText('content_icon')->nullable();
            $table->longText('content_title')->nullable();
            $table->longText('content_desc')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_legacy_pages_home_sol_items');
    }
};

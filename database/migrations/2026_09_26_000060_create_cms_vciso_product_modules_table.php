<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_vciso_product_modules', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_031d5442e68f_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_031d5442e68f_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_name')->nullable();
            $table->longText('content_icon')->nullable();
            $table->longText('content_team')->nullable();
            $table->longText('content_screenshot')->nullable();
            $table->longText('content_headline')->nullable();
            $table->longText('content_body')->nullable();
            $table->json('content_points')->nullable();
            $table->json('content_console')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_vciso_product_modules');
    }
};

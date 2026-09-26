<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_home_cta_banner_cta2_line', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_dc9dc765e92e_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_dc9dc765e92e_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_icon')->nullable();
            $table->longText('content_link_label')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_home_cta_banner_cta2_line');
    }
};

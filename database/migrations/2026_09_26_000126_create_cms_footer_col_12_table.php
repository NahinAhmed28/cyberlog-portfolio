<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_footer_col_12', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_46d3fe56b2ea_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_46d3fe56b2ea_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_link_url')->nullable();
            $table->longText('content_link_label')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_footer_col_12');
    }
};

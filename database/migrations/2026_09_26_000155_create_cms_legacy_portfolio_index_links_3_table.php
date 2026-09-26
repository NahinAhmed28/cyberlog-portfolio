<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_legacy_portfolio_index_links_3', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_a6a3e0282667_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_a6a3e0282667_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_label')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_legacy_portfolio_index_links_3');
    }
};

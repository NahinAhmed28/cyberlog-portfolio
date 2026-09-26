<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_legacy_pages_soc_tr_items', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_6fcbf4f64e8b_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_6fcbf4f64e8b_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_td_text')->nullable();
            $table->longText('content_td_text_2')->nullable();
            $table->longText('content_td_text_3')->nullable();
            $table->longText('content_td_text_4')->nullable();
            $table->longText('content_td_text_5')->nullable();
            $table->longText('content_td_text_6')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_legacy_pages_soc_tr_items');
    }
};

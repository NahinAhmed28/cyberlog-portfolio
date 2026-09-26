<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_legacy_pages_soc_cards', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_6f6722958612_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_6f6722958612_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_label_text')->nullable();
            $table->longText('content_option_text')->nullable();
            $table->longText('content_option_text_2')->nullable();
            $table->longText('content_option_text_3')->nullable();
            $table->longText('content_option_text_4')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_legacy_pages_soc_cards');
    }
};

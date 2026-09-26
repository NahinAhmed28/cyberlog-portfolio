<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_legacy_portfolio_index_cards', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_7e3a2de87464_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_7e3a2de87464_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_h4_text')->nullable();
            $table->longText('content_paragraph')->nullable();
            $table->longText('content_label')->nullable();
            $table->longText('content_label_2')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_legacy_portfolio_index_cards');
    }
};

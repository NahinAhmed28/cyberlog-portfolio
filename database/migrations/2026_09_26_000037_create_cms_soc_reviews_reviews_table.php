<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_soc_reviews_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_7b5207a12730_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_7b5207a12730_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_source')->nullable();
            $table->longText('content_sourceKey')->nullable();
            $table->longText('content_logo')->nullable();
            $table->longText('content_rating')->nullable();
            $table->longText('content_quote')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_soc_reviews_reviews');
    }
};

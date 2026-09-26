<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_shared_reviews_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_6d26f38d8b19_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_6d26f38d8b19_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_source')->nullable();
            $table->longText('content_sourceKey')->nullable();
            $table->longText('content_logo')->nullable();
            $table->longText('content_award')->nullable();
            $table->longText('content_rating')->nullable();
            $table->longText('content_quote')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_shared_reviews_reviews');
    }
};

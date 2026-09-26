<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_vapt_reviews_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_363ae1051143_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_363ae1051143_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_rating')->nullable();
            $table->longText('content_quote')->nullable();
            $table->longText('content_name')->nullable();
            $table->longText('content_logo')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_vapt_reviews_reviews');
    }
};

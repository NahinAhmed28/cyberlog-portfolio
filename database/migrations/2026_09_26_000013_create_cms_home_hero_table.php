<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_home_hero', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_264fdaa66cd6_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_264fdaa66cd6_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_heading')->nullable();
            $table->longText('content_label')->nullable();
            $table->longText('content_paragraph')->nullable();
            $table->longText('content_label_2')->nullable();
            $table->longText('content_paragraph_2')->nullable();
            $table->longText('content_label_3')->nullable();
            $table->longText('content_paragraph_3')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_home_hero');
    }
};

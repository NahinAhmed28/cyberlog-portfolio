<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_home_network', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_0c534e4767c6_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_0c534e4767c6_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_paragraph')->nullable();
            $table->longText('content_heading')->nullable();
            $table->longText('content_label_4')->nullable();
            $table->longText('content_paragraph_2')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_home_network');
    }
};

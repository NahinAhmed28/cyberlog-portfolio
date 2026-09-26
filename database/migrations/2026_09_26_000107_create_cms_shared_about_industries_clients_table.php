<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_shared_about_industries_clients', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_c2876c9002e3_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_c2876c9002e3_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_paragraph')->nullable();
            $table->longText('content_heading')->nullable();
            $table->longText('content_paragraph_2')->nullable();
            $table->longText('content_heading_2')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_shared_about_industries_clients');
    }
};

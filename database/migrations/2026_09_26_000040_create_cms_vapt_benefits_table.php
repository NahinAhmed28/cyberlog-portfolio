<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_vapt_benefits', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_1f0d2687cded_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_1f0d2687cded_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_paragraph')->nullable();
            $table->longText('content_heading')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_vapt_benefits');
    }
};

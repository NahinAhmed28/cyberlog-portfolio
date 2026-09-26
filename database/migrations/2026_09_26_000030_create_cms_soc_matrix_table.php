<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_soc_matrix', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_dbfa5c6b826f_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_dbfa5c6b826f_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_paragraph')->nullable();
            $table->longText('content_heading')->nullable();
            $table->longText('content_paragraph_2')->nullable();
            $table->longText('content_th_text')->nullable();
            $table->longText('content_span_aria_label')->nullable();
            $table->longText('content_icon')->nullable();
            $table->longText('content_span_aria_label_2')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_soc_matrix');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_soc_pricing', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_024d9d4c7f99_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_024d9d4c7f99_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_paragraph')->nullable();
            $table->longText('content_heading')->nullable();
            $table->longText('content_label')->nullable();
            $table->longText('content_div_text')->nullable();
            $table->longText('content_icon')->nullable();
            $table->longText('content_link_label')->nullable();
            $table->longText('content_destination')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_soc_pricing');
    }
};

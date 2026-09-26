<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_shared_clients', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_11bcfcd1d596_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_11bcfcd1d596_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_paragraph')->nullable();
            $table->longText('content_heading')->nullable();
            $table->longText('content_label')->nullable();
            $table->longText('content_button_aria_label')->nullable();
            $table->longText('content_icon')->nullable();
            $table->longText('content_button_aria_label_2')->nullable();
            $table->longText('content_icon_2')->nullable();
            $table->longText('content_div_text')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_shared_clients');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_vapt_boxes_boxes', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_cf4b0a692354_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_cf4b0a692354_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_class')->nullable();
            $table->longText('content_title')->nullable();
            $table->longText('content_conditions')->nullable();
            $table->longText('content_value')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_vapt_boxes_boxes');
    }
};

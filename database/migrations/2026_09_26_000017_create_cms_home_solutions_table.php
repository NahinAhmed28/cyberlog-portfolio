<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_home_solutions', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_97744af60efe_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_97744af60efe_order');
            $table->boolean('is_visible')->default(true);
            $table->json('content_group_routes')->nullable();
            $table->longText('content_paragraph')->nullable();
            $table->longText('content_heading')->nullable();
            $table->longText('content_label')->nullable();
            $table->longText('content_label_2')->nullable();
            $table->longText('content_icon')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_home_solutions');
    }
};

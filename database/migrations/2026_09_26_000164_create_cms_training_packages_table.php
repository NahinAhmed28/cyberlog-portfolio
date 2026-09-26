<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_training_packages', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_f7e45a94780f_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_f7e45a94780f_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_title')->nullable();
            $table->longText('content_description')->nullable();
            $table->json('content_features')->nullable();
            $table->longText('content_button_label')->nullable();
            $table->longText('content_button_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_training_packages');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_footer_wordmark', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_098ff4763feb_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_098ff4763feb_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_label')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_footer_wordmark');
    }
};

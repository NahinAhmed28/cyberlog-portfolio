<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_legacy_pages_home_console_stats', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_e1c9c9424992_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_e1c9c9424992_order');
            $table->boolean('is_visible')->default(true);
            $table->double('content_div_data_count')->nullable();
            $table->longText('content_div_data_suffix')->nullable();
            $table->longText('content_div_text')->nullable();
            $table->longText('content_div_text_2')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_legacy_pages_home_console_stats');
    }
};

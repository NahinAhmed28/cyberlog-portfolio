<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_home_defend_dao_stats', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_056f2b85e6cf_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_056f2b85e6cf_order');
            $table->boolean('is_visible')->default(true);
            $table->double('content_div_data_count')->nullable();
            $table->longText('content_div_text')->nullable();
            $table->longText('content_div_text_2')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_home_defend_dao_stats');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_soc_matrix_caps', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_3662dc75c9d9_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_3662dc75c9d9_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_item_0')->nullable();
            $table->double('content_item_1')->nullable();
            $table->double('content_item_2')->nullable();
            $table->double('content_item_3')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_soc_matrix_caps');
    }
};

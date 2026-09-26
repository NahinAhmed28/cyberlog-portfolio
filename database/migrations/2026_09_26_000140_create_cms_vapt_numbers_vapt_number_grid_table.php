<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_vapt_numbers_vapt_number_grid', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_fa335d22ad30_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_fa335d22ad30_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_label')->nullable();
            $table->longText('content_label_2')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_vapt_numbers_vapt_number_grid');
    }
};

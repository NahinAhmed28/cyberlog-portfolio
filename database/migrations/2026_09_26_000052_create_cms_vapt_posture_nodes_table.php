<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_vapt_posture_nodes', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_1a176a382f19_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_1a176a382f19_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_side')->nullable();
            $table->longText('content_slot')->nullable();
            $table->longText('content_icon')->nullable();
            $table->longText('content_label')->nullable();
            $table->longText('content_color')->nullable();
            $table->longText('content_rgb')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_vapt_posture_nodes');
    }
};

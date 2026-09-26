<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_vapt_matrix', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_acb7a23ef864_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_acb7a23ef864_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_paragraph')->nullable();
            $table->longText('content_heading')->nullable();
            $table->longText('content_th_text')->nullable();
            $table->longText('content_th_text_2')->nullable();
            $table->longText('content_th_text_3')->nullable();
            $table->longText('content_icon')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_vapt_matrix');
    }
};

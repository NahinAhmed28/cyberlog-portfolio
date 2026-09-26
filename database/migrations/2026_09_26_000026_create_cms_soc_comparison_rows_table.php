<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_soc_comparison_rows', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_6ef5afd5b74a_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_6ef5afd5b74a_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_model')->nullable();
            $table->longText('content_cost')->nullable();
            $table->longText('content_setup')->nullable();
            $table->longText('content_mttr')->nullable();
            $table->longText('content_stopped')->nullable();
            $table->longText('content_sla')->nullable();
            $table->boolean('content_hl')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_soc_comparison_rows');
    }
};

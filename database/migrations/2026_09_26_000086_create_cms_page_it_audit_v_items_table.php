<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_page_it_audit_v_items', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_ffe3e8db08be_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_ffe3e8db08be_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_item_0')->nullable();
            $table->longText('content_item_1')->nullable();
            $table->longText('content_item_2')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_page_it_audit_v_items');
    }
};

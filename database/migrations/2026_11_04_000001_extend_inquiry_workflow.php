<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('inquiries', function (Blueprint $table) {
            $table->text('page_url')->nullable();
            $table->timestamp('read_at')->nullable();
            $table->timestamp('notified_at')->nullable();
            $table->softDeletes();
        });
        Schema::create('site_settings', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->text('value')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('site_settings');
        Schema::table('inquiries', fn (Blueprint $table) => $table->dropColumn(['page_url', 'read_at', 'notified_at', 'deleted_at']));
    }
};

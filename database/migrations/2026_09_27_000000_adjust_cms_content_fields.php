<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/*
 * Fields that restore the static site's exact output and make the last hardcoded strings editable.
 * Values come from the content seeders (`php artisan db:seed`), which fill new columns on existing rows.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('cms_shared_clients', function (Blueprint $table) {
            // Held a Blade fragment captured by mistake; the marquee markup is back in the view.
            $table->dropColumn('content_div_text');
            $table->longText('content_dot_aria_label')->nullable();
        });
        Schema::table('cms_shared_clients_clients', function (Blueprint $table) {
            $table->boolean('content_light_background')->nullable();
        });
        Schema::table('cms_shared_page_hero', function (Blueprint $table) {
            // Held @unless/@endunless captured by mistake; the condition is back in the view.
            $table->dropColumn(['content_div_text', 'content_div_text_2']);
            $table->longText('content_default_hero_icon')->nullable();
        });
        Schema::table('cms_training_packages', function (Blueprint $table) {
            $table->boolean('content_button_white_text')->nullable();
        });
        Schema::table('cms_page_service_detail', function (Blueprint $table) {
            $table->longText('content_page_title_suffix')->nullable();
        });
        Schema::table('cms_page_contact', function (Blueprint $table) {
            $table->longText('content_service_aria_label')->nullable();
        });
        Schema::table('cms_shared_about_industries_clients', function (Blueprint $table) {
            $table->longText('content_client_link_aria_label')->nullable();
        });
        Schema::table('cms_clients_deck', function (Blueprint $table) {
            $table->longText('content_dot_aria_label')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('cms_clients_deck', fn (Blueprint $table) => $table->dropColumn('content_dot_aria_label'));
        Schema::table('cms_shared_about_industries_clients', fn (Blueprint $table) => $table->dropColumn('content_client_link_aria_label'));
        Schema::table('cms_page_contact', fn (Blueprint $table) => $table->dropColumn('content_service_aria_label'));
        Schema::table('cms_page_service_detail', fn (Blueprint $table) => $table->dropColumn('content_page_title_suffix'));
        Schema::table('cms_training_packages', fn (Blueprint $table) => $table->dropColumn('content_button_white_text'));
        Schema::table('cms_shared_page_hero', function (Blueprint $table) {
            $table->dropColumn('content_default_hero_icon');
            $table->longText('content_div_text')->nullable();
            $table->longText('content_div_text_2')->nullable();
        });
        Schema::table('cms_shared_clients_clients', fn (Blueprint $table) => $table->dropColumn('content_light_background'));
        Schema::table('cms_shared_clients', function (Blueprint $table) {
            $table->dropColumn('content_dot_aria_label');
            $table->longText('content_div_text')->nullable();
        });
    }
};

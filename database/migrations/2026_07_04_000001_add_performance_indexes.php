<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->index('status');
            $table->index('category');
        });

        Schema::table('portfolios', function (Blueprint $table) {
            $table->index('status');
            $table->index('category_id');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->index('status');
            $table->index('category_id');
        });

        Schema::table('themes', function (Blueprint $table) {
            $table->index('status');
            $table->index('category_id');
        });

        Schema::table('teams', function (Blueprint $table) {
            $table->index('status');
            $table->index('is_active');
        });

        Schema::table('hero_sliders', function (Blueprint $table) {
            $table->index('status');
            $table->index('sort_order');
        });

        Schema::table('contact_messages', function (Blueprint $table) {
            $table->index('is_read');
        });
    }

    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropIndex(['status']);
            $table->dropIndex(['category']);
        });

        Schema::table('portfolios', function (Blueprint $table) {
            $table->dropIndex(['status']);
            $table->dropIndex(['category_id']);
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropIndex(['status']);
            $table->dropIndex(['category_id']);
        });

        Schema::table('themes', function (Blueprint $table) {
            $table->dropIndex(['status']);
            $table->dropIndex(['category_id']);
        });

        Schema::table('teams', function (Blueprint $table) {
            $table->dropIndex(['status']);
            $table->dropIndex(['is_active']);
        });

        Schema::table('hero_sliders', function (Blueprint $table) {
            $table->dropIndex(['status']);
            $table->dropIndex(['sort_order']);
        });

        Schema::table('contact_messages', function (Blueprint $table) {
            $table->dropIndex(['is_read']);
        });
    }
};

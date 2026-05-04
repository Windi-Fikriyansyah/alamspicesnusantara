<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Site Settings
        Schema::create('settings', function (Blueprint $blueprint) {
            $blueprint->id();
            $blueprint->string('key')->unique();
            $blueprint->text('value')->nullable();
            $blueprint->timestamps();
        });

        // Hero Section
        Schema::create('hero_sections', function (Blueprint $blueprint) {
            $blueprint->id();
            $blueprint->string('badge_text');
            $blueprint->string('title');
            $blueprint->string('title_highlight');
            $blueprint->text('description');
            $blueprint->string('image')->nullable();
            $blueprint->string('primary_button_text');
            $blueprint->string('primary_button_link')->default('#');
            $blueprint->string('secondary_button_text');
            $blueprint->string('secondary_button_link')->default('#');
            $blueprint->timestamps();
        });

        // Stats Section
        Schema::create('stats', function (Blueprint $blueprint) {
            $blueprint->id();
            $blueprint->string('value');
            $blueprint->string('label');
            $blueprint->integer('order')->default(0);
            $blueprint->timestamps();
        });

        // About Section
        Schema::create('about_sections', function (Blueprint $blueprint) {
            $blueprint->id();
            $blueprint->string('badge_text');
            $blueprint->string('title');
            $blueprint->text('content');
            $blueprint->string('image')->nullable();
            $blueprint->string('experience_label')->nullable();
            $blueprint->string('experience_value')->nullable();
            $blueprint->timestamps();
        });

        // Features (Why Choose Us)
        Schema::create('features', function (Blueprint $blueprint) {
            $blueprint->id();
            $blueprint->string('title');
            $blueprint->text('description');
            $blueprint->string('icon')->nullable(); // SVG or path
            $blueprint->integer('order')->default(0);
            $blueprint->timestamps();
        });

        // Products
        Schema::create('products', function (Blueprint $blueprint) {
            $blueprint->id();
            $blueprint->string('name');
            $blueprint->string('category');
            $blueprint->string('image')->nullable();
            $blueprint->string('link')->default('#');
            $blueprint->integer('order')->default(0);
            $blueprint->timestamps();
        });

        // Gallery
        Schema::create('galleries', function (Blueprint $blueprint) {
            $blueprint->id();
            $blueprint->string('title');
            $blueprint->string('subtitle');
            $blueprint->string('image');
            $blueprint->integer('order')->default(0);
            $blueprint->timestamps();
        });

        // Testimonials
        Schema::create('testimonials', function (Blueprint $blueprint) {
            $blueprint->id();
            $blueprint->text('content');
            $blueprint->string('author_name');
            $blueprint->string('author_role');
            $blueprint->string('author_initials');
            $blueprint->integer('order')->default(0);
            $blueprint->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
        Schema::dropIfExists('galleries');
        Schema::dropIfExists('products');
        Schema::dropIfExists('features');
        Schema::dropIfExists('about_sections');
        Schema::dropIfExists('stats');
        Schema::dropIfExists('hero_sections');
        Schema::dropIfExists('settings');
    }
};

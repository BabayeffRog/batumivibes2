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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();

            // Multilingual title & description
            $table->json('title')->nullable(); // {en: ..., tr: ..., ru: ...}
            $table->json('description')->nullable();

            // Slug (based on title.en)
            $table->string('slug')->unique();

            // Purpose: rent / sale
            $table->enum('purpose', ['rent', 'sale'])->index();

            // Type: villa / apartment / studio / etc
            $table->enum('property_type', ['villa', 'apartment', 'studio', 'commercial'])->index();

            // Property details
            $table->string('location'); // city or area
            $table->unsignedTinyInteger('bedrooms');
            $table->unsignedSmallInteger('area'); // in m²
            $table->unsignedBigInteger('price'); // in USD or local currency

            // Gallery (multiple image paths as JSON array)
            $table->json('gallery')->nullable();

            // Optional features
            $table->boolean('is_featured')->default(false);

            // Timestamps
            $table->timestamps();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};

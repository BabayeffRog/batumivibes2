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
            $table->json('title')->nullable(); // EN, TR, RU
            $table->json('description')->nullable();
            $table->string('slug')->unique();
            $table->string('location');
            $table->unsignedTinyInteger('bedrooms');
            $table->unsignedSmallInteger('area');
            $table->string('type'); // Apartment, Villa, etc.
            $table->unsignedBigInteger('price');
            $table->json('gallery')->nullable(); // Multi image paths
            $table->boolean('is_featured')->default(false);
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

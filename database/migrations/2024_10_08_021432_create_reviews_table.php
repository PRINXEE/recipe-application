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
        Schema::create('reviews', function (Blueprint $table) {
          $table->id();
          $table->foreignId('recipe_id')->constrained()->onDelete('cascade'); // Link to the recipes table
          $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Link to the users table
          $table->integer('rating'); // Rating, e.g., 1 to 5 stars
          $table->text('review')->nullable(); // Optional text review
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};

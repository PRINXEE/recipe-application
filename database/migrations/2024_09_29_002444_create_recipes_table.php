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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('recipe_name');
            $table->unsignedBigInteger('user_id');
            $table->text('description');
            $table->unsignedBigInteger('recipe_cuisine_id');
            $table->unsignedBigInteger('recipe_category_id');
            $table->string('prep_time');
            $table->string('cooking_time');
            $table->string('serving_size');
            $table->json('ingredients');
            $table->text('instruction');
            $table->json('tag')->nullable();
            $table->string('difficulty_level');
            $table->string('recipe_image');
            $table->json('gallery_image')->nullable();
            $table->string('recipe_video')->nullable();
            $table->string('recipe_youtube_video_url')->nullable();
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            // $table->foreign('cuisine_id')->references('id')->on('cuisines')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RecipeCuisine;
use App\Models\RecipeCategory;
use App\Models\User;
use App\Models\Review;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable =[
      'recipe_name',
      'user_id',
      'description',
      'recipe_cuisine_id',
      'recipe_category_id',
      'prep_time',
      'cooking_time',
      'serving_size',
      'ingredients',
      'instruction',
      'tag',
      'difficulty_level',
      'recipe_image',
      'gallery_image',
      'recipe_video',
      'recipe_youtube_video_url',
    ];




   public function recipeCategory()
  {
      return $this->belongsTo(RecipeCategory::class, 'recipe_category_id');
  }

    public function recipeCuisine()
   {
       return $this->belongsTo(RecipeCuisine::class, 'recipe_cuisine_id');
   }

   public function user()
  {
      return $this->belongsTo(User::class, 'user_id');
  }

  public function reviews()
  {
      return $this->hasMany(Review::class);
  }

  public function favoritedBy()
  {
      return $this->belongsToMany(User::class, 'favorites')->withTimestamps();
  }

}

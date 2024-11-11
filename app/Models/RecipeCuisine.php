<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Recipe;


class RecipeCuisine extends Model
{
    use HasFactory;
    protected $table = 'recipe_cuisines';

    protected $fillable =[
      'name',
    ];

    public function recipes()
   {
       return $this->hasMany(Recipe::class);
   }
}

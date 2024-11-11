<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\PageController::class, 'home'])->name('/');

Route::get('/signin', [App\Http\Controllers\PageController::class, 'signin'])->name('signin');
Route::get('/recipes', [App\Http\Controllers\PageController::class, 'recipes'])->name('recipes');
Route::get('/view-recipe/{id}', [App\Http\Controllers\PageController::class, 'view_recipe'])->name('view-recipe');
Route::get('/display-recipe/{id}', [App\Http\Controllers\PageController::class, 'display_recipe'])->name('display-recipe');
Route::post('/recipe/{id}/review', [App\Http\Controllers\RecipeController::class, 'store_review'])->name('recipe-review-store');
Route::get('/recipes-by-category', [App\Http\Controllers\PageController::class, 'getRecipesByCategory'])->name('recipes-by-category');
Route::get('/search', [App\Http\Controllers\PageController::class, 'search'])->name('search');
Route::get('/getSearch', [App\Http\Controllers\PageController::class, 'getSearch'])->name('getSearch');
Route::get('/fqa', [App\Http\Controllers\PageController::class, 'fqa'])->name('fqa');
Route::get('/view-chief/{id}/profile', [App\Http\Controllers\PageController::class, 'view_chief_profile'])->name('view-chief-profile');
Route::get('/download/{id}', [App\Http\Controllers\PageController::class, 'download_recipe'])->name('download-recipe');



Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'role:User'])->group(function() {
  Route::get('/user/dashboard', [App\Http\Controllers\HomeController::class, 'user'])->name('user.dashboard');
  Route::get('/favorite', [App\Http\Controllers\RecipeController::class, 'favorite'])->name('favorite');
  Route::post('/recipe/{id}/favorite', [App\Http\Controllers\RecipeController::class, 'toggleFavorite'])->name('add-favorites');
  Route::get('/user-profile', [App\Http\Controllers\HomeController::class, 'user_profile'])->name('user-profile');
  Route::get('/edit-user-profile/{id}', [App\Http\Controllers\HomeController::class, 'edit_user_profile'])->name('edit-user-profile');
  Route::put('/update-user-profile', [App\Http\Controllers\HomeController::class, 'update_user_profile'])->name('update-user-profile');
  Route::get('/change-user-password', [App\Http\Controllers\HomeController::class, 'change_user_password'])->name('change-user-password');
  Route::post('/update-user-password', [App\Http\Controllers\HomeController::class, 'update_user_password'])->name('update-user-password');

});

Route::middleware(['auth', 'role:Admin'])->group(function() {
    Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
    Route::get('/edit-profile/{id}', [App\Http\Controllers\HomeController::class, 'edit_profile'])->name('edit-profile');
    Route::put('/update-profile', [App\Http\Controllers\HomeController::class, 'update_profile'])->name('update-profile');
    Route::get('/change-password', [App\Http\Controllers\HomeController::class, 'change_password'])->name('change-password');
    Route::post('/update-password', [App\Http\Controllers\HomeController::class, 'update_password'])->name('update-password');

    Route::get('/add-faq', [App\Http\Controllers\PageController::class, 'add_faq'])->name('add-faq');
    Route::get('/faq', [App\Http\Controllers\PageController::class, 'faq'])->name('faq');
    Route::post('/faq-store', [App\Http\Controllers\PageController::class, 'faq_store'])->name('faq-store');
    Route::get('/edit-faq/{id}', [App\Http\Controllers\PageController::class, 'edit_faq'])->name('edit-faq');
    Route::put('/update-faq', [App\Http\Controllers\PageController::class, 'update_faq'])->name('update-faq');
    Route::get('/delete-faq', [App\Http\Controllers\PageController::class, 'delete_faq'])->name('delete-faq');

    Route::group(['prefix' => 'admin'], function(){

      Route::get('/recipe-category', [App\Http\Controllers\RecipeController::class, 'recipe_cateogry'])->name('recipe-cateogry');
      Route::post('/recipe-category-store', [App\Http\Controllers\RecipeController::class, 'recipe_cateogry_store'])->name('recipe-cateogry-store');
      Route::post('/update-recipe-category', [App\Http\Controllers\RecipeController::class, 'update_recipe_category'])->name('update-recipe-category');
      Route::get('/delete-recipe-category', [App\Http\Controllers\RecipeController::class, 'deleteRecipeCategory'])->name('delete-recipe-category');

      Route::get('/recipe-cuisine', [App\Http\Controllers\RecipeController::class, 'cuisine'])->name('recipe-cuisine');
      Route::post('/recipe-cuisine-store', [App\Http\Controllers\RecipeController::class, 'recipe_cuisine_store'])->name('recipe-cuisine-store');
      Route::post('/update-recipe-cuisine', [App\Http\Controllers\RecipeController::class, 'update_recipe_cuisine'])->name('update-cuisine-category');
      Route::get('/delete-recipe-cuisine', [App\Http\Controllers\RecipeController::class, 'deleteRecipeCuisine'])->name('delete-cuisine-category');

      Route::get('/recipe', [App\Http\Controllers\RecipeController::class, 'recipe'])->name('recipe');
      Route::get('/add-recipe', [App\Http\Controllers\RecipeController::class, 'add_recipe'])->name('add-recipe');
      Route::post('/recipe-store', [App\Http\Controllers\RecipeController::class, 'recipe_store'])->name('recipe-store');
      Route::get('/edit-recipe/{id}', [App\Http\Controllers\RecipeController::class, 'edit_recipe'])->name('edit-recipe');
      Route::put('/update-recipe', [App\Http\Controllers\RecipeController::class, 'update_recipe'])->name('update-recipe');
      Route::get('/delete-recipe', [App\Http\Controllers\RecipeController::class, 'delete_recipe'])->name('delete-recipe');

      Route::get('/view-recipe-gallery/{id}', [App\Http\Controllers\RecipeController::class, 'view_recipe_gallery'])->name('view-recipe-gallery');
      Route::post('/add-gallery-image', [App\Http\Controllers\RecipeController::class, 'add_gallery_Image'])->name('add-gallery-image');
      Route::post('/update-gallery-image', [App\Http\Controllers\RecipeController::class, 'update_gallery_Image'])->name('update-gallery-image');
      Route::get('/delete-gallery-image', [App\Http\Controllers\RecipeController::class, 'delete_gallery_Image'])->name('delete-gallery-image');
      Route::get('/delete-ingredient', [App\Http\Controllers\RecipeController::class, 'delete_ingredient'])->name('delete-ingredient');

      Route::get('/users', [App\Http\Controllers\HomeController::class, 'users'])->name('users');
      Route::get('/reviews', [App\Http\Controllers\RecipeController::class, 'all_reviews'])->name('all_reviews');


      // Route::post('/update-recipe-cuisine', [App\Http\Controllers\RecipeController::class, 'update_recipe_cuisine'])->name('update-cuisine-category');
      // Route::get('/delete-recipe-cuisine', [App\Http\Controllers\RecipeController::class, 'deleteRecipeCuisine'])->name('delete-cuisine-category');
    });
});

Route::middleware(['auth', 'role:Chief'])->group(function() {
  Route::get('/chief/dashboard', [App\Http\Controllers\HomeController::class, 'chief'])->name('chief.dashboard');
  Route::get('/my-profile', [App\Http\Controllers\HomeController::class, 'my_profile'])->name('my-profile');
  Route::get('/edit-my-profile/{id}', [App\Http\Controllers\HomeController::class, 'edit_my_profile'])->name('edit-my-profile');
  Route::put('/update-my-profile', [App\Http\Controllers\HomeController::class, 'update_my_profile'])->name('update-my-profile');
  Route::get('/change-my-password', [App\Http\Controllers\HomeController::class, 'change_my_password'])->name('change-my-password');
  Route::post('/update-my-password', [App\Http\Controllers\HomeController::class, 'update_my_password'])->name('update-my-password');
  Route::group(['prefix' => 'chief'], function(){

    Route::get('/view-my-recipe', [App\Http\Controllers\RecipeController::class, 'view_my_recipe'])->name('view-my-recipe');
    Route::get('/add-my-recipe', [App\Http\Controllers\RecipeController::class, 'add_my_recipe'])->name('add-my-recipe');
    Route::post('/my-recipe-store', [App\Http\Controllers\RecipeController::class, 'my_recipe_store'])->name('my-recipe-store');
    Route::get('/edit-my-recipe/{id}', [App\Http\Controllers\RecipeController::class, 'edit_my_recipe'])->name('edit-my-recipe');
    Route::put('/update-my-recipe', [App\Http\Controllers\RecipeController::class, 'update_my_recipe'])->name('update-my-recipe');
    Route::get('/delete-my-recipe', [App\Http\Controllers\RecipeController::class, 'delete_my_recipe'])->name('delete-my-recipe');
    //
    Route::get('/my-recipe-gallery/{id}', [App\Http\Controllers\RecipeController::class, 'my_recipe_gallery'])->name('my-recipe-gallery');
    Route::post('/add-my-recipe-gallery-image', [App\Http\Controllers\RecipeController::class, 'add_my_recipe_gallery_image'])->name('add-my-recipe-gallery-image');
    Route::post('/update-my-recipe-gallery-image', [App\Http\Controllers\RecipeController::class, 'update_my_recipe_gallery_image'])->name('update-my-recipe-gallery-image');
    Route::get('/delete-my-recipe-gallery-image', [App\Http\Controllers\RecipeController::class, 'delete_my_recipe_gallery_image'])->name('delete-my-recipe-gallery-image');
    Route::get('/delete-my-ingredient', [App\Http\Controllers\RecipeController::class, 'delete_my_ingredient'])->name('delete-my-ingredient');
    Route::get('/reviews', [App\Http\Controllers\RecipeController::class, 'reviews'])->name('reviews');

    // Route::post('/update-recipe-cuisine', [App\Http\Controllers\RecipeController::class, 'update_recipe_cuisine'])->name('update-cuisine-category');
    // Route::get('/delete-recipe-cuisine', [App\Http\Controllers\RecipeController::class, 'deleteRecipeCuisine'])->name('delete-cuisine-category');
  });
});
//

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RecipeCategory;
use App\Models\RecipeCuisine;
use App\Models\Recipe;
use App\Models\Review;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function recipe()
    {

        $recipes = Recipe::get();
        return View('admin.recipe.index', compact('recipes'));

    }

    public function add_recipe()
    {
        $recipes = RecipeCategory::get();
        $cuisines = Cuisine::get();
        return View('admin.recipe.add-recipe', compact('recipes', 'cuisines'));
    }

    public function recipe_cateogry()
    {

        $recipes = RecipeCategory::get();
        return View('admin.recipe-category', compact('recipes'));
    }

    public function cuisine()
    {

        $cuisines = RecipeCuisine::get();
        return View('admin.cuisine', compact('cuisines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function recipe_store(Request $request)
    {
        //
        //dd($request->all());
        //dd($request->product_avalaibility);

         $imageUrls = [];
         $ingredientLists = [];
         $imageUrlsJson = null;
         $recipe_video = null;


         if($request->hasFile('gallery_image')){
           foreach ($request->file('gallery_image') as $image) {
             // code...
             $recipeImageName = $image->getClientOriginalName();
             //dd($productCatImageName);
             $recipe_image = $image->storeAs('recipe/gallery-Images', $recipeImageName, 'public');
             //$imageUrl = asset('storage/'. $productImageName); //Generating imageUrl
             $imageUrls[] = $recipe_image;
             //dd($recipe_image);
           }
           // $product->product_category_image = $productCat_image;
           // $product->save();
           $imageUrlsJson = json_encode($imageUrls);


           //dd($imageUrlsJson, $ingredientJson);
         }

         if ($request->has('ingredientslist')) {
              //$ingredientLists = [];

              foreach ($request->ingredientslist as $ingredient) {
                  // Each ingredient needs to be wrapped inside another array with a key "ingredients"
                  $recipe_ingredient = ['ingredients' => $ingredient];
                  $ingredientLists[] = $recipe_ingredient;
              }

              // Now encode the array properly for storing in the database
              $ingredientJson = json_encode($ingredientLists);

              // Debug to check the structure
              //dd($ingredientJson);

              // Save $ingredientJson to your database
          }

          $tags = explode(',', $request->input('tags'));
          // Store tags as a JSON array in the database
          $recipe_tags = json_encode($tags);

         if($request->hasFile('recipe_video')){
          $file = $request->file('recipe_video');
          $recipeVideoName = $file->getClientOriginalName();
          //dd($productCatImageName);
          $recipe_video = $file->storeAs('recipe/video', $recipeVideoName, 'public');
          // $product->product_category_image = $productCat_image;
          // $product->save();
        }

        if($request->hasFile('recipe_image')){
         $file = $request->file('recipe_image');
         $recipeImageName = $file->getClientOriginalName();
         //dd($productCatImageName);
         $recipe_image = $file->storeAs('recipe/image', $recipeImageName, 'public');
         // $product->product_category_image = $productCat_image;
         // $product->save();
       }


         Recipe::create([
           'recipe_name' => $request->recipe_name,
           'user_id' => Auth::id(),
           'description' => $request->description,
           'recipe_cuisine_id' => $request->cuisine_id,
           'reipe_category_id' => $request->category_id,
           'prep_time' => $request->prep_time,
           'cooking_time' => $request->cooking_time,
           'serving_size' => $request->serving_size,
           'ingredients' => $ingredientJson,
           'instruction' => $request->instruction,
           'tag' => $recipe_tags,
           'difficulty_level' => $request->difficulty_level,
           'recipe_image' => $recipe_image,
           'gallery_image' => $imageUrlsJson,
           'recipe_video' => $recipe_video,
           'recipe_youtube_video_url' => $request->recipe_youtube_video_url,

         ]);


         Alert::toast('Recipe add Successfully', 'success')
         ->position('top-end');

         return redirect()->back();
    }

    public function recipe_cateogry_store(Request $request)
    {

        //dd($request->all());
        RecipeCategory::create([
            'name' => $request->name,
        ]);

        // display a success toast imap_alerts

        Alert::toast('RecipeCategory add Successfully', 'success')
        ->position('top-end');

        return redirect()->back();
    }

    public function recipe_cuisine_store(Request $request)
    {

        //dd($request->all());
        RecipeCuisine::create([
            'name' => $request->name,
        ]);

        // display a success toast imap_alerts

        Alert::toast('Cuisine add Successfully', 'success')
        ->position('top-end');

        return redirect()->back();
    }

    public function add_gallery_image(Request $request)
    {
        // Validate the request
        // $request->validate([
        //     'id' => 'required|exists:recipes,id', // Assuming the gallery is stored in the 'recipes' table
        //     'add_gallery_Image.*' => 'required|mimes:jpg,jpeg,png|max:2048',
        // ]);

        // Find the gallery entry
        $gallery = Recipe::find($request->id);

        // Initialize an array to store the new image paths
        $imageUrls = [];

        if($request->hasFile('add_gallery_Image')){
            foreach ($request->file('add_gallery_Image') as $image) {
                // Generate a unique name for the image to prevent overwriting existing images
                $recipeImageName = time() . '_' . $image->getClientOriginalName();

                // Store the image in the 'recipe/gallery-Images' directory within the 'public' disk
                $recipe_image = $image->storeAs('recipe/gallery-Images', $recipeImageName, 'public');

                // Append the image URL to the array
                $imageUrls[] = $recipe_image;
            }

            // Decode the existing gallery images from JSON if not empty
            $existingImages = json_decode($gallery->gallery_image, true) ?? [];

            // Merge the existing images with the new images
            $updatedImages = array_merge($existingImages, $imageUrls);

            //dd($updatedImages);

            // Save the updated array of images back as a JSON string
            $gallery->gallery_image = json_encode($updatedImages);

            //dd($gallery->gallery_image);

            // Save the changes to the database
            $gallery->save();

            // Flash a success message
            Alert::toast('Images added to gallery successfully!', 'success')->position('top-end');
        } else {
            // If no image files are provided, flash an error message
            Alert::toast('No images were uploaded!', 'error')->position('top-end');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_recipe(string $id)
    {
        //

        $recipe = Recipe::find($id);
        $categories = RecipeCategory::get();
        $cuisines = RecipeCuisine::get();
        $recipe->ingredient = json_decode($recipe->ingredients, true);
        $tags= json_decode($recipe->tag, true);
        //dd($recipe);
        return View('admin.recipe.recipe-edit', compact('recipe', 'categories', 'cuisines', 'tags'));
    }

    public function view_recipe_gallery(string $id)
    {
        //

        $gallery = Recipe::find($id);
        $gallery->gallery_image = json_decode($gallery->gallery_image);
        //dd($gallery);
        return View('admin.recipe.view-gallery', compact('gallery'));

    }


    /**
     * Update the specified resource in storage.
     */

    public function update_recipe(Request $request)
    {
         // Fetch the recipe by its ID
         $recipe = Recipe::find($request->id);

         // Convert the comma-separated string of tags into an array
         $tags = explode(',', $request->input('tags'));

         // Store tags as a JSON array in the database
         $recipe_tags = json_encode($tags);
         //dd($recipe->tag );

         // Decode the existing ingredients from the database
         $existingIngredients = json_decode($recipe->ingredients, true) ?? [];

         // Convert the existing ingredients to a flat array for comparison
         $existingIngredientsArray = array_column($existingIngredients, 'ingredients');

         // Handle ingredient deletion
         if ($request->has('deleted_ingredients')) {
             $deletedIngredients = $request->deleted_ingredients;

             // Filter out deleted ingredients from the existing ingredients array
             $existingIngredients = array_filter($existingIngredients, function($ing) use ($deletedIngredients) {
                 return !in_array($ing['ingredients'], $deletedIngredients);
             });
         }

         //dd($deletedIngredients);

         // Prepare an array to hold only new ingredients that aren't already in the existing array
         $newIngredients = [];

         // Iterate over the new ingredients from the request
         foreach ($request->ingredientslist as $ingredient) {
             // Check if the ingredient already exists in the current array
             if (!in_array($ingredient, $existingIngredientsArray)) {
                 // Add only new (non-duplicate) ingredients
                 $newIngredients[] = ['ingredients' => $ingredient];
             }
         }

         // Merge new ingredients with the existing ones
         if (!empty($newIngredients)) {
             $mergedIngredients = array_merge($existingIngredients, $newIngredients);

             // Update the recipe's ingredients field with the merged array (as JSON)
             $recipe->ingredients = json_encode($mergedIngredients);
         }

         if($request->hasFile('recipe_image')){
          $file = $request->file('recipe_image');
          $recipeImageName = $file->getClientOriginalName();
          //dd($productCatImageName);
          $recipe_image = $file->storeAs('recipe/image', $recipeImageName, 'public');
          $recipe->recipe_image = $recipe_image;
          $recipe->save();
        }

         if($request->hasFile('recipe_video')){
          $file = $request->file('recipe_video');
          $recipeVideoName = $file->getClientOriginalName();
          //dd($productCatImageName);
          $recipe_video = $file->storeAs('recipe/video', $recipeVideoName, 'public');
          $recipe->recipe_video = $recipe_video;
          $recipe->save();
        }

         // Update the other recipe fields
         $recipe->update([
             'recipe_name' => $request->recipe_name,
             'description' => $request->description,
             'recipe_cuisine_id' => $request->cuisine_id,
             'recipe_category_id' => $request->category_id,
             'prep_time' => $request->prep_time,
             'cooking_time' => $request->cooking_time,
             'serving_size' => $request->serving_size,
             'tag' => $recipe_tags ,
             'instruction' => $request->instruction,
             'difficulty_level' => $request->difficulty_level,
             'recipe_youtube_video_url' => $request->recipe_youtube_video_url,
         ]);

         Alert::toast('Recipe Updated Successfully', 'success')
             ->position('top-end');

         return redirect('/admin/recipe');
     }

    public function update_recipe_category(Request $request)
    {
          $recipe = RecipeCategory::find($request->id);
          $recipe->name = $request->name;
          $recipe->save();

          Alert::toast('RecipeCategory Updated Successfully', 'success')
          ->position('top-end');

          return redirect()->back();
      }

    public function update_recipe_cuisine(Request $request)
    {
          $cuisine = RecipeCuisine::find($request->id);
          $cuisine->name = $request->name;
          $cuisine->save();

          Alert::toast('Cuisine Updated Successfully', 'success')
          ->position('top-end');

          return redirect()->back();
      }

    public function update_gallery_Image(Request $request)
    {
          // Find the gallery entry
          $gallery = Recipe::find($request->id);

          // Delete the old image if it exists
          if (Storage::exists($request->oldImage)) {
              Storage::delete($request->oldImage);
          }

          // Store the new image
          if($request->hasFile('update_gallery_Image')){
           $file = $request->file('update_gallery_Image');
           $updateGalleryImageName = $file->getClientOriginalName();
           //dd($productCatImageName);
           $update_gallery_Image = $file->storeAs('recipe/gallery-Images', $updateGalleryImageName, 'public');
           // $recipe_image = $file->storeAs('recipe/image', $recipeImageName, 'public');
           // $product->product_category_image = $productCat_image;
           // $product->save();
           //dd($update_gallery_Image);
         }
          //$path = $request->file('update_gallery_Image')->store('gallery_images');

          // Update the image in the JSON column (assuming it's stored as an array)
          $images = json_decode($gallery->gallery_image, true);
          foreach ($images as $key => $img) {
              if ($img == $request->oldImage) {
                  $images[$key] = $update_gallery_Image;
              }
          }
          $gallery->gallery_image = json_encode($images);

          //dd($gallery->gallery_image);

          // Save the updated gallery
          $gallery->save();

          Alert::toast('Image updated Successfully', 'success')
          ->position('top-end');

          return redirect()->back();
      }

    /**
     * Remove the specified resource from storage.
     */
    public function delete_recipe(Request $request)
    {
        $recipe = Recipe::find($request->id);
        //dd($recipe);
        $recipe->delete();

        Alert::toast('Recipe Deleted Successfully', 'success')
        ->position('top-end');
        return redirect()->back();
    }

    public function deleteRecipeCategory(Request $request)
    {
        $cuisine = RecipeCategory::find($request->id);
        $cuisine->delete();

        Alert::toast('RecipeCategory Deleted Successfully', 'success')
        ->position('top-end');
        return redirect()->back();
    }

    public function deleteRecipeCuisine(Request $request)
    {
        $cuisine = RecipeCuisine::find($request->id);
        $cuisine->delete();

        Alert::toast('Cuisine Deleted Successfully', 'success')
        ->position('top-end');
        return redirect()->back();
    }

    public function delete_gallery_Image(Request $request)
    {
        // Validate the request
        // $request->validate([
        //     'id' => 'required|exists:galleries,id',
        //     'name' => 'required',
        // ]);

        // Find the gallery entry
        $gallery = Recipe::find($request->id);

        // Decode the JSON stored images
        $images = json_decode($gallery->gallery_image, true);

        // Remove the image from storage
        if (Storage::exists($request->name)) {
            Storage::delete($request->name);
        }

        // Remove the image from the JSON array
        $images = array_filter($images, function ($image) use ($request) {
            return $image != $request->name;
        });
        //dd($images);

        // Update the gallery
        $gallery->gallery_image = json_encode(array_values($images));
        $gallery->save();

        Alert::toast('Image deleted Successfully', 'success')
        ->position('top-end');

        return redirect()->back();
    }

    public function delete_ingredient(Request $request)
    {
        // Find the recipe entry by ID
        $recipe = Recipe::find($request->id);

        // Decode the JSON stored ingredients
        $ingredients = json_decode($recipe->ingredients, true);

        // Iterate through the ingredients array and remove the matching ingredient
        $ingredients = array_filter($ingredients, function ($ing) use ($request) {
            // We are checking within the nested structure for the matching ingredient name
            return $ing['ingredients']['ingredients'] !== $request->name;
            //dd($ing);
        });



        // Re-index the array after filtering
        $ingredients = array_values($ingredients);

        //dd($ingredients);

        // Update the recipe with the new ingredients list
        $recipe->ingredients = json_encode($ingredients);
        $recipe->save();

        // Show success message
        // Alert::toast('Ingredient deleted successfully', 'success')
        //     ->position('top-end');

        // /return redirect()->back();
        return response()->json(['success'=>true, 'message'=>'Ingredient deleted successfully']);
    }






    /**
     * Chief section Started from here.
     */

     public function add_my_recipe()
     {
         $recipes = RecipeCategory::get();
         $cuisines = RecipeCuisine::get();
         return View('chief.recipe.add-my-recipe', compact('recipes', 'cuisines'));
     }

     public function view_my_recipe()
     {

         $recipes = Recipe::where('user_id', Auth::id())->get();
         //dd($recipes);
         return View('chief.recipe.index', compact('recipes'));

     }

     public function reviews()
     {

         $reviews = Recipe::where('user_id', Auth::id())->with('reviews')->get();
        // dd($reviews);

         $Creviews = $reviews->pluck('reviews')->flatten();

         //dd( $Creviews);
         return View('chief.review', compact('Creviews'));

     }

     public function all_reviews()
     {

         $reviews = Recipe::with('reviews')->get();
        // dd($reviews);

         $Creviews = $reviews->pluck('reviews')->flatten();

         //dd( $Creviews);
         return View('admin.reviews', compact('Creviews'));

     }

     public function my_recipe_store(Request $request)
     {
         //
         //dd($request->all());
         //dd($request->product_avalaibility);

          $imageUrls = [];
          $ingredientLists = [];
          $imageUrlsJson = null;  // Set default to null
          $recipe_video = null;

          if($request->hasFile('gallery_image')){
            foreach ($request->file('gallery_image') as $image) {
              // code...
              $recipeImageName = $image->getClientOriginalName();
              //dd($productCatImageName);
              $recipe_image = $image->storeAs('recipe/gallery-Images', $recipeImageName, 'public');
              //$imageUrl = asset('storage/'. $productImageName); //Generating imageUrl
              $imageUrls[] = $recipe_image;
              //dd($recipe_image);
            }
            // $product->product_category_image = $productCat_image;
            // $product->save();
            $imageUrlsJson = json_encode($imageUrls);


            //dd($imageUrlsJson, $ingredientJson);
          }

          if ($request->has('ingredientslist')) {
               //$ingredientLists = [];

               foreach ($request->ingredientslist as $ingredient) {
                   // Each ingredient needs to be wrapped inside another array with a key "ingredients"
                   $recipe_ingredient = ['ingredients' => $ingredient];
                   $ingredientLists[] = $recipe_ingredient;
               }

               // Now encode the array properly for storing in the database
               $ingredientJson = json_encode($ingredientLists);

               // Debug to check the structure
               //dd($ingredientJson);

               // Save $ingredientJson to your database
           }

           $tags = explode(',', $request->input('tags'));

           // Store tags as a JSON array in the database
           $recipe_tags = json_encode($tags);

          if($request->hasFile('recipe_video')){
           $file = $request->file('recipe_video');
           $recipeVideoName = $file->getClientOriginalName();
           //dd($recipeVideoName);
           $recipe_video = $file->storeAs('recipe/video', $recipeVideoName, 'public');
           // $product->product_category_image = $productCat_image;
           // $product->save();
         }

         if($request->hasFile('recipe_image')){
          $file = $request->file('recipe_image');
          $recipeImageName = $file->getClientOriginalName();
          //dd($productCatImageName);
          $recipe_image = $file->storeAs('recipe/image', $recipeImageName, 'public');
          // $product->product_category_image = $productCat_image;
          // $product->save();
        }


          Recipe::create([
            'recipe_name' => $request->recipe_name,
            'user_id' => Auth::id(),
            'description' => $request->description,
            'recipe_cuisine_id' => $request->cuisine_id,
            'recipe_category_id' => $request->category_id,
            'prep_time' => $request->prep_time,
            'cooking_time' => $request->cooking_time,
            'serving_size' => $request->serving_size,
            'ingredients' => $ingredientJson,
            'instruction' => $request->instruction,
            'tag' => $recipe_tags,
            'difficulty_level' => $request->difficulty_level,
            'recipe_image' => $recipe_image,
            'gallery_image' => $imageUrlsJson,
            'recipe_video' => $recipe_video,
            'recipe_youtube_video_url' => $request->recipe_youtube_video_url,

          ]);


          Alert::toast('Recipe add Successfully', 'success')
          ->position('top-end');

          return redirect()->back();
     }
     //
     public function edit_my_recipe(string $id)
     {
         //

         $recipe = Recipe::find($id);
         $categories = RecipeCategory::get();
         $cuisines = RecipeCuisine::get();
         $recipe->ingredient = json_decode($recipe->ingredients, true);
         $tags= json_decode($recipe->tag, true);
         //dd($recipe);
         return View('chief.recipe.recipe-edit', compact('recipe', 'categories', 'cuisines', 'tags'));
     }
     //
     public function update_my_recipe(Request $request)
     {
          // Fetch the recipe by its ID
          $recipe = Recipe::find($request->id);

          // Convert the comma-separated string of tags into an array
          $tags = explode(',', $request->input('tags'));

          // Store tags as a JSON array in the database
          $recipe_tags = json_encode($tags);
          //dd($recipe->tag );

          // Decode the existing ingredients from the database
          $existingIngredients = json_decode($recipe->ingredients, true) ?? [];

          // Convert the existing ingredients to a flat array for comparison
          $existingIngredientsArray = array_column($existingIngredients, 'ingredients');

          // Handle ingredient deletion
          if ($request->has('deleted_ingredients')) {
              $deletedIngredients = $request->deleted_ingredients;

              // Filter out deleted ingredients from the existing ingredients array
              $existingIngredients = array_filter($existingIngredients, function($ing) use ($deletedIngredients) {
                  return !in_array($ing['ingredients'], $deletedIngredients);
              });
          }

          //dd($deletedIngredients);

          // Prepare an array to hold only new ingredients that aren't already in the existing array
          $newIngredients = [];

          // Iterate over the new ingredients from the request
          foreach ($request->ingredientslist as $ingredient) {
              // Check if the ingredient already exists in the current array
              if (!in_array($ingredient, $existingIngredientsArray)) {
                  // Add only new (non-duplicate) ingredients
                  $newIngredients[] = ['ingredients' => $ingredient];
              }
          }

          // Merge new ingredients with the existing ones
          if (!empty($newIngredients)) {
              $mergedIngredients = array_merge($existingIngredients, $newIngredients);

              // Update the recipe's ingredients field with the merged array (as JSON)
              $recipe->ingredients = json_encode($mergedIngredients);
          }

          if($request->hasFile('recipe_image')){
           $file = $request->file('recipe_image');
           $recipeImageName = $file->getClientOriginalName();
           //dd($productCatImageName);
           $recipe_image = $file->storeAs('recipe/image', $recipeImageName, 'public');
           $recipe->recipe_image = $recipe_image;
           $recipe->save();
         }

          if($request->hasFile('recipe_video')){
           $file = $request->file('recipe_video');
           $recipeVideoName = $file->getClientOriginalName();
           //dd($productCatImageName);
           $recipe_video = $file->storeAs('recipe/video', $recipeVideoName, 'public');
           $recipe->recipe_video = $recipe_video;
           $recipe->save();
         }

          // Update the other recipe fields
          $recipe->update([
              'recipe_name' => $request->recipe_name,
              'description' => $request->description,
              'recipe_cuisine_id' => $request->cuisine_id,
              'recipe_category_id' => $request->category_id,
              'prep_time' => $request->prep_time,
              'cooking_time' => $request->cooking_time,
              'serving_size' => $request->serving_size,
              'tag' => $recipe_tags ,
              'instruction' => $request->instruction,
              'difficulty_level' => $request->difficulty_level,
              'recipe_youtube_video_url' => $request->recipe_youtube_video_url,
          ]);

          Alert::toast('Recipe Updated Successfully', 'success')
              ->position('top-end');

          return redirect('/chief/view-my-recipe');
      }
     //
     public function delete_my_recipe(Request $request)
     {
          $recipe = Recipe::find($request->id);
          //dd($recipe);
          $recipe->delete();

          Alert::toast('Recipe Deleted Successfully', 'success')
          ->position('top-end');
          return redirect()->back();
      }



    public function my_recipe_gallery(string $id)
    {
          //

          $gallery = Recipe::find($id);
          $gallery->gallery_image = json_decode($gallery->gallery_image);
          //dd($gallery);
          return View('chief.recipe.view-gallery', compact('gallery'));

      }

    public function add_my_recipe_gallery_image(Request $request)
    {
        // Validate the request
        // $request->validate([
        //     'id' => 'required|exists:recipes,id', // Assuming the gallery is stored in the 'recipes' table
        //     'add_gallery_Image.*' => 'required|mimes:jpg,jpeg,png|max:2048',
        // ]);

        // Find the gallery entry
        $gallery = Recipe::find($request->id);

        // Initialize an array to store the new image paths
        $imageUrls = [];

        if($request->hasFile('add_gallery_Image')){
            foreach ($request->file('add_gallery_Image') as $image) {
                // Generate a unique name for the image to prevent overwriting existing images
                $recipeImageName = time() . '_' . $image->getClientOriginalName();

                // Store the image in the 'recipe/gallery-Images' directory within the 'public' disk
                $recipe_image = $image->storeAs('recipe/gallery-Images', $recipeImageName, 'public');

                // Append the image URL to the array
                $imageUrls[] = $recipe_image;
            }

            // Decode the existing gallery images from JSON if not empty
            $existingImages = json_decode($gallery->gallery_image, true) ?? [];

            // Merge the existing images with the new images
            $updatedImages = array_merge($existingImages, $imageUrls);

            //dd($updatedImages);

            // Save the updated array of images back as a JSON string
            $gallery->gallery_image = json_encode($updatedImages);

            //dd($gallery->gallery_image);

            // Save the changes to the database
            $gallery->save();

            // Flash a success message
            Alert::toast('Images added to gallery successfully!', 'success')->position('top-end');
        } else {
            // If no image files are provided, flash an error message
            Alert::toast('No images were uploaded!', 'error')->position('top-end');
        }

        return redirect()->back();
    }
    //
     public function update_my_recipe_gallery_image(Request $request)
     {
           // Find the gallery entry
           $gallery = Recipe::find($request->id);

           // Delete the old image if it exists
           if (Storage::exists($request->oldImage)) {
               Storage::delete($request->oldImage);
           }

           // Store the new image
           if($request->hasFile('update_gallery_Image')){
            $file = $request->file('update_gallery_Image');
            $updateGalleryImageName = $file->getClientOriginalName();
            //dd($productCatImageName);
            $update_gallery_Image = $file->storeAs('recipe/gallery-Images', $updateGalleryImageName, 'public');
            // $recipe_image = $file->storeAs('recipe/image', $recipeImageName, 'public');
            // $product->product_category_image = $productCat_image;
            // $product->save();
            //dd($update_gallery_Image);
          }
           //$path = $request->file('update_gallery_Image')->store('gallery_images');

           // Update the image in the JSON column (assuming it's stored as an array)
           $images = json_decode($gallery->gallery_image, true);
           foreach ($images as $key => $img) {
               if ($img == $request->oldImage) {
                   $images[$key] = $update_gallery_Image;
               }
           }
           $gallery->gallery_image = json_encode($images);

           //dd($gallery->gallery_image);

           // Save the updated gallery
           $gallery->save();

           Alert::toast('Image updated Successfully', 'success')
           ->position('top-end');

           return redirect()->back();
       }
    //
     public function delete_my_recipe_gallery_image(Request $request)
     {
         // Validate the request
         // $request->validate([
         //     'id' => 'required|exists:galleries,id',
         //     'name' => 'required',
         // ]);

         // Find the gallery entry
         $gallery = Recipe::find($request->id);

         // Decode the JSON stored images
         $images = json_decode($gallery->gallery_image, true);

         // Remove the image from storage
         if (Storage::exists($request->name)) {
             Storage::delete($request->name);
         }

         // Remove the image from the JSON array
         $images = array_filter($images, function ($image) use ($request) {
             return $image != $request->name;
         });
         //dd($images);

         // Update the gallery
         $gallery->gallery_image = json_encode(array_values($images));
         $gallery->save();

         Alert::toast('Image deleted Successfully', 'success')
         ->position('top-end');

         return redirect()->back();
     }

     public function delete_my_ingredient(Request $request)
     {
         // Find the recipe entry by ID
         $recipe = Recipe::find($request->id);

         // Decode the JSON stored ingredients
         $ingredients = json_decode($recipe->ingredients, true);

         // Iterate through the ingredients array and remove the matching ingredient
         $ingredients = array_filter($ingredients, function ($ing) use ($request) {
             // We are checking within the nested structure for the matching ingredient name
             return $ing['ingredients']['ingredients'] !== $request->name;
             //dd($ing);
         });
         // Re-index the array after filtering
         $ingredients = array_values($ingredients);

         //dd($ingredients);

         // Update the recipe with the new ingredients list
         $recipe->ingredients = json_encode($ingredients);
         $recipe->save();

         // Show success message
         // Alert::toast('Ingredient deleted successfully', 'success')
         //     ->position('top-end');

         // /return redirect()->back();
         return response()->json(['success'=>true, 'message'=>'Ingredient deleted successfully']);
     }

     public function store_review(Request $request, $recipe_id)
     {
         $request->validate([
             'rating' => 'required|integer|min:1|max:5', // Ensure the rating is between 1 and 5
             'review' => 'nullable|string'
         ]);

         // Create a new review
         $review = new Review();
         $review->recipe_id = $recipe_id;
         $review->user_id = Auth::id(); // Assuming the user is logged in Auth()->id();
         $review->rating = $request->rating;
         $review->review = $request->review;

         //dd($review);
         $review->save();

         Alert::toast('Thank you for your review!', 'success')
         ->position('top-end');
         return redirect()->back();
     }


     public function favorite()
     {
         $user = auth()->user();
         $favorites = $user->favorites; // Get all favorite recipes
          //return view('favorites.index', compact('favorites'));
         return view('frontend.user.recipe-favorite', compact('favorites'));
     }

     public function toggleFavorite(Request $request, $recipe_id)
     {
          $recipe = Recipe::find($recipe_id);
          $user = auth()->user();

          //dd($recipe);

          // Check if the recipe is already favorited
          if ($user->favorites()->where('recipe_id', $recipe->id)->exists()) {
              // If it is already favorited, remove it
              $user->favorites()->detach($recipe);
              // return response()->json(['status' => 'removed']);
              return response()->json(['success'=>true, 'message'=>'Recipe removed successfully']);

          } else {
              // If not, add to favorites
              $user->favorites()->attach($recipe);
              // return response()->json(['status' => 'added']);
              return response()->json(['success'=>true, 'message'=>'Recipe added successfully']);

          }
      }

}

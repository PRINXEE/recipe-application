<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Faq;
use App\Models\Recipe;
use App\Models\RecipeCategory;
use App\Models\RecipeCuisine;
use App\Models\User;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function signin()
     {
         return view('frontend.signin');
     }

     // public function removeImageBackground($imagePath) {
     //
     //
     //    // Generate output path for processed image
     //    $outputFile = storage_path('app/public/recipe/recipe-bg-remover/' . basename($imagePath));
     //
     //    // Define the path to the Python script and run the background removal command
     //    $pythonScript = base_path('python/bgRemover.py'); // Adjust path as needed
     //    $command = escapeshellcmd("python {$pythonScript} {$imagePath} {$outputFile}");
     //    $output = shell_exec($command);
     //
     //
     //    dd($output);
     //    // Check if the processed image exists
     //    if (file_exists($outputFile)) {
     //        return asset('storage/recipe/recipe-bg-remover/' . basename($outputFile));
     //
     //    }
     //
     //
     //    // If background removal fails, return the original image
     //    return asset('storage/' . $imagePath);
     // }





     public function home()
     {
         $categories = RecipeCategory::withCount('recipes')->get();
         //$countRecipe = RecipeCuisine::withCount('recipes')->get();
         //dd($countRecipe);
         $recipes = Recipe::orderBy('created_at', 'desc')->take(5)->get();
         $topRateRecipes = Recipe::with('reviews')->withAvg('reviews', 'rating')->orderByDesc('reviews_avg_rating')->take(5)->get();
         // Process each recipe's image by removing the background
        // foreach ($topRateRecipes as $recipe) {
        //     $recipe->processed_image = $this->removeBackground($recipe->recipe_image);
        // }
        //dd($recipe->processed_image);
         return view('frontend.welcome', compact('categories', 'recipes', 'topRateRecipes'));
     }



     // public function removeBackground($imagePath)
     //  {
     //      // Get the input image path from storage or public directory
     //      // $imagePath = storage_path('app/public/' . $request->input('image')); // Adjust as per your setup
     //      $outputPath = storage_path('app/public/recipe/recipe-bg-remover/' . basename($imagePath));
     //
     //      // Path to the Python script
     //      $pythonScript = base_path('python/bgRemover.py');
     //
     //
     //
     //      // Execute the Python script via shell command
     //      $command = escapeshellcmd("python {$pythonScript} 2>&1");
     //      $output = shell_exec($command);
     //
     //
     //      dd(output);
     //      // Check if the output was successful
     //      if ($output === null) {
     //          return response()->json(['error' => 'Error removing background'], 500);
     //      }
     //
     //      // Return the path to the processed image
     //      return response()->json(['message' => 'Background removed', 'image' => asset('storage/recipe/recipe-bg-remover/' . basename($outputPath))]);
     //  }


     public function fqa()
     {
         $faqs = Faq::get();
         return view('frontend.faq', compact('faqs'));
     }

     public function recipes(Request $request)
     {
         $recipes = Recipe::paginate(10);
         $categories = RecipeCategory::get();
         return view('frontend.recipe', compact('recipes', 'categories'));
     }

     // public function getSearch(Request $request)
     // {
     //
     //    $query = Recipe::select([
     //      'recipe_name',
     //      'user_id',
     //      'description',
     //      'cuisine_id',
     //      'category_id',
     //      'prep_time',
     //      'cooking_time',
     //      'serving_size',
     //      'ingredients',
     //      'instruction',
     //      'tag',
     //      'difficulty_level',
     //      'recipe_image',
     //      'gallery_image',
     //      'recipe_video',
     //      'recipe_youtube_video_url',
     //    ])
     //    ->with('recipeCategory'); // Eager load category relationship
     //
     //    if ($request->has('search') && $request->search != '') {
     //        $query->where('recipe_name', 'like', "%{$request->search}%");
     //    }
     //
     //    if ($request->has('category') && $request->category != '') {
     //        $query->where('category_id', $request->category);
     //    }
     //
     //    // Get shops
     //    $recipes = $query->get();
     //    //dd($recipes);
     //  //  Limit the results
     //    $recipes = $recipes->take(10);
     //
     //    return response()->json([
     //        'success' => true,
     //        'msg' => 'recipes found!',
     //        'data' => $recipes
     //    ]);
     //
     //  }

    public function search(Request $request)
    {
          $search = $request->input('search'); // Get the search query

         // Fetch recipes based on the search query (assuming 'recipe_name' is the field to search)
         $recipes = Recipe::where('recipe_name', 'like', "%$search%")
                           // ->orWhere('description', 'like', "%$query%")
                           ->paginate(10);

         // If the request is an AJAX request, return only the search results (JSON)
         // if ($request->ajax()) {
         //      return response()->json([
         //          'recipes' => $recipes->items(), // Paginated data
         //          'pagination' => (string) $recipes->links(), // Pagination links as a string
         //      ]);
         //  }

          if ($request->ajax()) {
              return response()->json([
                  'recipes' => $recipes->map(function ($recipe) {
                      return [
                          'id' => $recipe->id,
                          'recipe_name' => $recipe->recipe_name,
                          'recipe_image' => Storage::url($recipe->recipe_image),
                          'recipe_category_id' => $recipe->recipeCategory->name,
                          'difficulty_level' => $recipe->difficulty_level,
                          'cooking_time' => $recipe->cooking_time,
                          'reviews' => $recipe->reviews, // Include all reviews
                          'average_rating' => $recipe->reviews->avg('rating'), // Average rating
                          'total_reviews' => $recipe->reviews->count(), // Total number of reviews
                      ];
                  }),
                  'pagination' => (string) $recipes->appends(['search' => $search])->links('vendor.pagination.bootstrap-4'), // Pagination links as a string
              ]);
          }

         // For non-AJAX requests (from homepage), return the search page view with results
         return view('frontend.search', compact('recipes', 'search'));
       }

    public function add_faq()
    {
        return view('admin.faqs.index');
    }

    public function faq()
    {
        $faqs = Faq::get();
        return view('admin.faqs.faqs', compact('faqs'));
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
    public function faq_store(Request $request)
    {

      //dd($request->all());
        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer,
            'status' => $request->status,
        ]);

        // display a success toast imap_alerts

        Alert::toast('Faq add Successfully', 'success')
        ->position('top-end');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function display_recipe(string $id)
    {
        //
        $recipes = Recipe::where('recipe_category_id', $id)->get();
        $categories = RecipeCategory::get();
        //dd($recipe);
        return view('frontend.display-recipe', compact('recipes', 'categories'));
    }

    public function view_recipe(string $id)
    {

        $recipe = Recipe::with(['reviews.user'])->find($id);
          //dd($recipe);
        $tags = !empty($recipe->tag) ? json_decode($recipe->tag, true) : [];
        $recipe->gallery_image = json_decode($recipe->gallery_image, true);
        $recipe->ingredients = json_decode($recipe->ingredients, true);
        $categories = RecipeCategory::get();
        return view('frontend.view-recipe', compact('recipe', 'tags', 'categories'));
    }

    public function download_recipe(string $id)
    {

        $recipe = Recipe::find($id);
        $recipe->ingredients = json_decode($recipe->ingredients, true);
        

        return view('frontend.download', compact('recipe'));
    }

    public function view_chief_profile(string $id)
    {


        $user = User::with(['recipes'])->find($id);
        //dd($user);
        // $tags = !empty($recipe->tag) ? json_decode($recipe->tag, true) : [];
        // $recipe->gallery_image = json_decode($recipe->gallery_image, true);
        // $recipe->ingredients = json_decode($recipe->ingredients, true);
        // $categories = RecipeCategory::get();
        return view('frontend.chief-profile', compact('user'));
    }


    public function getRecipesByCategory(Request $request)
    {
        $categoryId = $request->category_id;

        if ($categoryId == 'all') {
            // Get all recipes if 'All' is selected
            $recipes = Recipe::get();
        } else {
            // Get recipes by category
            $recipes = Recipe::where('recipe_category_id', $categoryId)->get();
        }

        // Return the recipes as a JSON response
        return response()->json([
            'recipes' => $recipes->map(function($recipe) {
                return [
                    'id' => $recipe->id,
                    'recipe_name' => $recipe->recipe_name,
                    'recipe_image_url' => Storage::url($recipe->recipe_image),
                    'recipe_category_name' => $recipe->recipeCategory->name,
                    'difficulty_level' => $recipe->difficulty_level,
                    'cooking_time' => $recipe->cooking_time,
                    'reviews_avg_rating' => $recipe->reviews->avg('rating'),
                ];
            })
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
     public function edit_faq(string $id)
     {
         //
         //dd($id);
         $faq = Faq::find($id);
         //dd($recipe);
         return View('admin.faqs.edit-faq', compact('faq'));
     }

    /**
     * Update the specified resource in storage.
     */
     public function update_faq(Request $request)
     {
           $faq = Faq::find($request->id);
           $faq->question = $request->question;
           $faq->answer = $request->answer;
           $faq->status = $request->status;
           $faq->save();

           Alert::toast('Faq Updated Successfully', 'success')
           ->position('top-end');

           return redirect('/faq');
       }

    /**
     * Remove the specified resource from storage.
     */
     public function delete_faq(Request $request)
     {
         $faq = Faq::find($request->id);
         //dd($faq);
         $faq->delete();

         Alert::toast('Faq Deleted Successfully', 'success')
         ->position('top-end');
         return redirect()->back();
     }
}

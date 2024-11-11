<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use App\Models\RecipeCategory;
use App\Models\RecipeCuisine;
use App\Models\Recipe;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function user()
     {

          $recipes = Recipe::take(5)->get();
          $categories = RecipeCategory::withCount('recipes')->get();
          // $categories = RecipeCategory::get();
          //dd($categories);
          $topRateRecipes = Recipe::with('reviews')->withAvg('reviews', 'rating')->orderByDesc('reviews_avg_rating')->take(5)->get();
          //dd($topRateRecipes);
         // $users = User::count();
         Alert::toast('Welcome To Recipe App', 'success')
           ->position('top-end');

         // dd($recipes, $category, $cuisine);
         return view('frontend.user.dashboard', compact('recipes', 'categories', 'topRateRecipes'));
     }
    public function index()
    {

        $recipes = Recipe::count();
        $categories = RecipeCategory::count();
        $cuisines = RecipeCuisine::count();
        $users = User::count();

        // dd($recipes, $category, $cuisine);
        return view('admin.dashboard', compact('recipes', 'categories', 'cuisines', 'users'));
    }

    public function users()
    {

        $users = User::get();

        // dd($recipes, $category, $cuisine);
        return view('admin.users', compact('users'));
    }

    public function profile()
    {
        $profile = User::find(Auth::id());
        //dd($profile);
        return view('admin.profile', compact('profile'));
    }

    public function edit_profile(string $id)
    {
        $profile = User::find($id);
        //dd($profile);
        return view('admin.edit-profile', compact('profile'));
    }

    public function update_profile(Request $request)
    {
        $profile = User::find($request->id);
        //dd($profile);

        if($request->hasFile('profile_image')){
         $file = $request->file('profile_image');
         $profileImageName = $file->getClientOriginalName();
         //dd($productCatImageName);
         $profile_image = $file->storeAs('user/profile-image', $profileImageName, 'public');
         $profile->profile_image = $profile_image;
         $profile->save();
       }

       // Update the other Profile fields
       $profile->update([
           'name' => $request->name,
           'email' => $request->email,
           'phone_number' => $request->phone_number,
       ]);

       Alert::toast('Profile Updated Successfully', 'success')
           ->position('top-end');

       return redirect('/admin/dashboard');
    }

    public function change_password()
    {
        //$profile = User::find(Auth::id());
        //dd($profile);
        return view('admin.change-password');
    }

    public function update_password(Request $request)
    {

        // check  if the current password matchs

        if(!Hash::check($request->current_password, Auth::user()->password)){

            Alert::toast('Current password did not match', 'error')
              ->position('top-end');

            return redirect()->back();
        }

       // Update the Password
        Auth::user()->update([
          'password' => Hash::make($request->new_password),
        ]);

       Alert::toast('Password Updated Successfully', 'success')
           ->position('top-end');

       return redirect()->back();
    }



    // Chief controller start here

    public function chief()
    {
        $recipes = Recipe::where('user_id', Auth::id())->count();
        $category = RecipeCategory::count();
        $cuisine = RecipeCuisine::count();

        // dd($recipes, $category, $cuisine);
        return view('chief.dashboard', compact('recipes', 'category', 'cuisine'));
    }

    public function my_profile()
    {
        $profile = User::find(Auth::id());
        //dd($profile);
        return view('chief.my-profile', compact('profile'));
    }

    public function edit_my_profile(string $id)
    {
        $profile = User::find($id);
        //dd($profile);
        return view('chief.edit-my-profile', compact('profile'));
    }

    public function update_my_profile(Request $request)
    {
        $profile = User::find($request->id);
        //dd($profile);

        if($request->hasFile('profile_image')){
         $file = $request->file('profile_image');
         $profileImageName = $file->getClientOriginalName();
         //dd($productCatImageName);
         $profile_image = $file->storeAs('user/profile-image', $profileImageName, 'public');
         $profile->profile_image = $profile_image;
         $profile->save();
       }

       // Update the other Profile fields
       $profile->update([
           'name' => $request->name,
           'email' => $request->email,
           'phone_number' => $request->phone_number,
       ]);

       Alert::toast('Profile Updated Successfully', 'success')
           ->position('top-end');

       return redirect('/chief/dashboard');
    }

    public function change_my_password()
    {
        //$profile = User::find(Auth::id());
        //dd($profile);
        return view('chief.change-password');
    }

    public function update_my_password(Request $request)
    {

        // check  if the current password matchs

        if(!Hash::check($request->current_password, Auth::user()->password)){

            Alert::toast('Current password did not match', 'error')
              ->position('top-end');

            return redirect()->back();
        }

       // Update the Password
        Auth::user()->update([
          'password' => Hash::make($request->new_password),
        ]);

       Alert::toast('Password Updated Successfully', 'success')
           ->position('top-end');

       return redirect()->back();
    }

    // user Profile

    public function user_profile()
    {
        $profile = User::find(Auth::id());
        //dd($profile);
        return view('frontend.user.profile', compact('profile'));
    }

    public function edit_user_profile(string $id)
    {
        $profile = User::find($id);
        //dd($profile);
        return view('frontend.user.edit-profile', compact('profile'));
    }

    public function update_user_profile(Request $request)
    {
        $profile = User::find($request->id);
        //dd($profile);

        if($request->hasFile('profile_image')){
         $file = $request->file('profile_image');
         $profileImageName = $file->getClientOriginalName();
         //dd($productCatImageName);
         $profile_image = $file->storeAs('user/profile-image', $profileImageName, 'public');
         $profile->profile_image = $profile_image;
         $profile->save();
       }

       // Update the other Profile fields
       $profile->update([
           'name' => $request->name,
           'email' => $request->email,
           'phone_number' => $request->phone_number,
       ]);

       Alert::toast('Profile Updated Successfully', 'success')
           ->position('top-end');

       return redirect('/user-profile');
    }

    public function change_user_password()
    {
        //$profile = User::find(Auth::id());
        //dd($profile);
        return view('frontend.user.change-password');
    }

    public function update_user_password(Request $request)
    {

        // check  if the current password matchs

        if(!Hash::check($request->current_password, Auth::user()->password)){

            Alert::toast('Current password did not match', 'error')
              ->position('top-end');

            return redirect()->back();
        }

       // Update the Password
        Auth::user()->update([
          'password' => Hash::make($request->new_password),
        ]);

       Alert::toast('Password Updated Successfully', 'success')
           ->position('top-end');

       return redirect()->back();
    }

}

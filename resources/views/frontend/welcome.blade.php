@extends('frontend.layouts.app')
@section('title', 'Recipe Application')
@section('content')

<div class="container">
  <!-- SearchBox -->
  <div class="search-box">
    <form class="" action="{{ route('search') }}" method="GET">
      <div class="input-group input-radius input-rounded input-lg">
        <input type="text" placeholder="Search beverages or foods" name="search" class="form-control">
        <span class="input-group-text">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.65925 19.3102C11.8044 19.3103 13.8882 18.5946 15.5806 17.2764L21.9653 23.6612C22.4423 24.1218 23.2023 24.1086 23.663 23.6316C24.1123 23.1664 24.1123 22.4288 23.663 21.9635L17.2782 15.5788C20.5491 11.3682 19.7874 5.30333 15.5769 2.03243C11.3663 -1.23848 5.30149 -0.476799 2.03058 3.73374C-1.24033 7.94428 -0.478646 14.0092 3.73189 17.2801C5.42702 18.5969 7.51269 19.3113 9.65925 19.3102ZM4.52915 4.5273C7.36245 1.69394 11.9561 1.69389 14.7895 4.5272C17.6229 7.3605 17.6229 11.9542 14.7896 14.7876C11.9563 17.6209 7.36261 17.621 4.52925 14.7877C4.5292 14.7876 4.5292 14.7876 4.52915 14.7876C1.69584 11.9749 1.67915 7.39794 4.49181 4.56464C4.50424 4.55216 4.51667 4.53973 4.52915 4.5273Z" fill="#C9C9C9"/>
          </svg>
        </span>
      </div>
    </form>
  </div>
  <!-- SearchBox -->

  <!-- Overlay Card -->
  <div class="swiper overlay-swiper1 mt-2">
    <div class="swiper-wrapper">
      <?php foreach ($topRateRecipes as $recipe): ?>

        <div class="swiper-slide">
  						<div class="dz-media" style="max-height:150px">
  							<a href="javascript:;"><img src="{{ Storage::url($recipe->recipe_image) }}" alt="image" style="max-height:150px"></a>
  						</div>
  						<div class="dz-info mt-2">
  							<div class="dz-head">
  								<h6 class="title"><a href="{{ route('view-recipe', $recipe->id) }}">{{ $recipe->recipe_name }}</a></h6>
  								<p>category : <span class="text-primary">{{ $recipe->recipeCategory->name }}</span></p>
                  <p>Cuisine : <span class="text-primary">{{ $recipe->recipeCuisine->name }}</span></p>
  							</div>
  							<ul class="dz-meta">
  								<li class="dz-price"><i class="fa fa-star" style="font-size:20px;"></i> {{ number_format($recipe->reviews_avg_rating, 1) }}</li>
  							</ul>
  						</div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>


  <!-- Overlay Card -->

  <!-- Categories Swiper -->
  <div class="title-bar mt-3">
    <h5 class="title">Categories</h5>
  </div>
  <div class="swiper categories-swiper dz-swiper m-b20">
    <div class="swiper-wrapper">

      <?php foreach ($categories as $category): ?>

        <div class="swiper-slide">
          <div class="dz-categories-bx">
            <div class="icon-bx">
              <a href="javascript:;">
                <svg enable-background="new 0 0 48 48" height="24" viewBox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
                  <path d="m30.1 47.5h-21.8c-.9 0-1.7-.7-1.9-1.6l-5.9-30.5c-.1-.6 0-1.2.4-1.6.4-.5.9-.7 1.5-.7h33.5c.6 0 1.1.3 1.5.7s.5 1 .4 1.6l-5.8 30.5c-.2.9-1 1.6-1.9 1.6zm-20.2-3.9h18.6l5.1-26.6h-28.8z" fill="#fff"/>
                  <path d="m31.3 42.3c-.5 0-1.1-.2-1.5-.7-.7-.8-.6-2.1.2-2.8 3.9-3.4 6.1-5.5 9-8.2 1-.9 2-1.9 3.2-3 1.8-1.7 1.4-3.4.9-4.2-.9-1.7-3.3-3.1-6.5-2.4-1.1.2-2.1-.4-2.3-1.5s.4-2.1 1.5-2.3c4.5-1 8.9.9 10.8 4.5 1.6 3 .9 6.4-1.8 8.9-1.2 1.1-2.2 2.1-3.2 3-2.8 2.6-5.2 4.9-9.1 8.3-.3.2-.7.4-1.2.4z" fill="#fff"/>
                  <path d="m9.3 10.1c-1.1 0-2-.9-2-2v-5.6c0-1.1.9-2 2-2s2 .9 2 2v5.7c-.1 1-.9 1.9-2 1.9z" fill="#fff"/>
                  <path d="m18.1 10.1c-1.1 0-2-.9-2-2v-5.6c0-1.1.9-2 2-2s2 .9 2 2v5.7c-.1 1-.9 1.9-2 1.9z" fill="#fff"/>
                  <path d="m26.9 10.1c-1.1 0-2-.9-2-2v-5.6c0-1.1.9-2 2-2s2 .9 2 2v5.7c-.1 1-.9 1.9-2 1.9z" fill="#fff"/>
                </svg>
              </a>
            </div>
            <div class="dz-content">
              <h6 class="title"><a href="javascript:;">{{ $category->name }}</a></h6>
              <span class="menus text-primary">{{ $category->recipes_count }} Recipes</span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
  <!-- Categories Swiper -->


  <!-- Featured Beverages -->
  <div class="title-bar mt-2">
    <h5 class="title">Recent Recipes</h5>
    <a href="{{ route('recipes') }}">More</a>
  </div>

  <ul class="featured-list">
    <?php foreach ($recipes as $recipe): ?>
      @php
          $averageRating = $recipe->reviews->avg('rating'); // Calculate average rating
          $totalReviews = $recipe->reviews->count(); // Count total reviews
      @endphp
      <li>
        <div class="dz-card list">
          <div class="dz-media">
            <a href="javascript:;"><img src="{{ Storage::url($recipe->recipe_image) }}" alt=""></a>
            <div class="dz-rating"><i class="fa fa-star"></i> {{ number_format($averageRating, 1) }}</div>
          </div>
          <div class="dz-content">
            <div class="dz-head">
              <h6 class="title"><a href="{{ route('view-recipe', $recipe->id) }}">{{ $recipe->recipe_name }}</a></h6>
            </div>
            <ul class="dz-meta">
              <li class=" flex-1"><i class="fa fa-clock"></i> {{ $recipe->cooking_time }}</li>
              <li class="dz-pts">{{ $recipe->difficulty_level }}</li>
            </ul>
          </div>
        </div>
      </li>
    <?php endforeach; ?>


  </ul>
  <!-- Featured Beverages -->
</div>

@endsection

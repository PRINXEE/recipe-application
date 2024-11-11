<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $recipe->recipe_name }} Recipe</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend-assets/css/style.css') }}">
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
      }

      body {
        background-color: #f8f9fa;
        color: #333;
      }

      .container {
        max-width: 800px;
        margin: 20px auto;
        background-color: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      }

      .recipe-header {
        position: relative;
      }

      .recipe-header img {
        width: 100%;
        height: 300px;
        object-fit: cover;
      }

      .recipe-title {
        position: absolute;
        bottom: 10px;
        left: 20px;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        padding: 10px 15px;
        border-radius: 5px;
        font-size: 20px;
      }

      .recipe-author {
        position: absolute;
        bottom: 10px;
        left: 65%;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        padding: 10px 15px;
        border-radius: 5px;
        font-size: 20px;
      }

      .recipe-info {
        display: flex;
        justify-content: space-around;
        padding: 15px;
        background-color: #f1f3f5;
        border-bottom: 1px solid #ddd;
      }

      .recipe-info div {
        text-align: center;
      }

      .recipe-info div p {
        margin-top: 5px;
        font-size: 14px;
        color: #666;
      }

      .content {
        padding: 20px;
      }

      .section-title {
        font-size: 22px;
        margin-bottom: 10px;
      }

      .ingredients {
        margin-bottom: 20px;
      }

      .ingredients ul {
        list-style-type: disc;
        margin-left: 20px;
      }

      .ingredients li {
        margin-bottom: 8px;
      }

      .instructions {
        margin-bottom: 20px;
      }

      .instructions ol {
        margin-left: 20px;
      }

      .instructions li {
        margin-bottom: 10px;
      }

      .action-buttons {
        display: flex;
        justify-content: space-around;
        margin-top: 20px;
      }

      .action-buttons button {
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
      }

      .like-button {
        background-color: #e74c3c;
        color: white;
      }

      .bookmark-button {
        background-color: #3498db;
        color: white;
      }

      .like-button:hover {
        background-color: #c0392b;
      }

      .bookmark-button:hover {
        background-color: #2980b9;
      }

      /* Responsive Design */
      @media (max-width: 768px) {
        .recipe-info {
          flex-direction: row;
          gap: 10px;
        }

        .content {
          padding: 15px;
        }

        .action-buttons {
          flex-direction: column;
          gap: 10px;
        }

        .recipe-title {
          font-size: 20px;
          padding: 5px 10px;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <!-- Recipe Header with Image -->
      <div class="recipe-header">
        <img
          src="{{ Storage::url($recipe->recipe_image) }}"
          alt="Recipe Image"
        />
        <div class="recipe-title">{{ $recipe->recipe_name }}</div>
        <div class="recipe-author">By: {{ $recipe->user->name }}</div>
      </div>

      <!-- Recipe Info Section -->
      <div class="recipe-info">
        <div>
          <strong>{{ $recipe->cooking_time }}</strong>
          <p>Prep Time</p>
        </div>
        <div>
          <strong>{{ $recipe->serving_size }}</strong>
          <p>Servings</p>
        </div>
        <div>
          <strong>{{ $recipe->recipeCategory->name }}</strong>
          <p>Category</p>
        </div>
        <div>
          <strong>{{ $recipe->recipeCuisine->name }}</strong>
          <p>Cuisine</p>
        </div>
      </div>

      <!-- Content Section -->
      <div class="content">
        <!-- Ingredients Section -->
        <div class="ingredients">
          <h2 class="section-title">Ingredients</h2>
          <ul>
            @if (!empty($recipe->ingredients))
              @foreach ($recipe->ingredients as $key => $ing)
                <li class="timeline-item">
                    <!-- <p class="timeline-date">11 March 2020</p> -->
                    {{ $ing['ingredients']['ingredients']}}
                </li>
              @endforeach
            @else
              <p>No ingredients available.</p>
            @endif

          </ul>
        </div>

        <!-- Instructions Section -->
        <div class="instructions">
          <h2 class="section-title">Instructions</h2>
          <div class="pt-4" id="instructions">
            {!! $recipe->instruction !!}
          </div>
        </div>

        <!-- Action Buttons -->
      </div>
    </div>
  </body>
  <script type="text/javascript">
      window.onload = function(){
       window.print();

      window.onafterprint = function(){
        window.close();
      };

    };
  </script>
</html>

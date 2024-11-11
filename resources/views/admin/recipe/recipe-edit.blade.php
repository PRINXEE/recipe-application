@extends('admin.layouts.master')
@section('title', 'Admin | Edit Recipe')
@section('content')

<style>
.tag-container {
display: flex;
flex-wrap: wrap;
padding: 5px;
width: 100%;
}
.tag {
    background-color: #e2e2e2;
    padding: 5px 10px;
    margin: 5px;
    border-radius: 5px;
    display: flex;
    align-items: center;
}

.tag span {
    margin-right: 10px;
}

.tag .remove-tag {
    background-color: red;
    color: white;
    border: none;
    border-radius: 50%;
    cursor: pointer;
    padding: 0 5px;
}

#tag-input {
    flex-grow: 1;
    border: none;
    outline: none;
}
</style>

<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
  <!--begin::Toolbar-->
  <div id="kt_app_toolbar" class="app-toolbar pt-5">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
      <!--begin::Toolbar wrapper-->
      <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column gap-1 me-3 mb-2">
          <!--begin::Breadcrumb-->
          <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-6">
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
              <a href="#" class="text-gray-500">
                <i class="ki-solid ki-book-open fs-1 text-gray-400 me-n1"></i>
              </a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
              <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Recipe</li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
              <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
              <a href="/recipe" class="text-gray-700">View All Recipe</a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
              <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-700 fw-bold">Edit Recipe</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
      </div>
      <!--end::Toolbar wrapper-->
    </div>
    <!--end::Toolbar container-->
  </div>
  <!--end::Toolbar-->

  <!--begin::Content-->
  <div id="kt_app_content" class="app-content flex-column-fluid pt-0">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-fluid">

      <!--begin::Row-->
      <div class="row g-5 d-flex justify-content-center">
        <div class="card mb-5 mb-xl-10">
          <!--begin::Card header-->
          <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
              <h3 class="fw-bold m-0 fs-1">Edit Recipe</h3>
            </div>
            <!--end::Card title-->
          </div>
          <!--begin::Card header-->
          <!--begin::Content-->
          <div id="kt_account_settings_profile_details" class="collapse show">

            <!--begin::Form-->
            <form action="{{ route('update-recipe') }}" class="form" method="post" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <!--begin::Card body-->
              <div class="card-body border-top p-9">

                <!-- flash message -->

                <!-- complete flash message -->

                <!--begin::Input group-->
                <input type="hidden" name="id" value="{{ $recipe->id }}">
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-10">
                  <div class="col-sm-6">
                    <label class="form-label required">Image</label>
                    <!--begin::Col-->
                    <div class="col-lg-8">
                      <input type="hidden" name="oldImage" value="1706944344235_Leftover Rice Pancakes Recipe.jpg">
                      <!--begin::Image input-->
                      <div class="image-input image-input-outline" data-kt-image-input="true">
                        <!--begin::Preview existing image-->
                        <img class="galleryimg image-input-wrapper w-150px h-150px" src="{{ Storage::url($recipe->recipe_image) }}" id="previewImage" alt="logo">
                        <!--end::Preview existing image-->
                        <!--begin::Label-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-30px h-30px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change image">
                          <i class="ki-duotone ki-pencil fs-1 text-primary">
                            <span class="path1"></span>
                            <span class="path2"></span>
                          </i>
                          <!--begin::Inputs-->
                          <input type="file" name="recipe_image" id="imageInput" accept=".png, .jpg, .jpeg" />
                          <!--end::Inputs-->
                        </label>
                        <!--end::Label-->
                      </div>
                      <!--end::Image input-->
                      <!--begin::Hint-->
                      <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                      <!--end::Hint-->
                    </div>
                    <!--end::Col-->
                  </div>

                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-10">
                  <div class="col-sm-6">
                    <label class="form-label required">Recipe Name</label>
                    <input type="text" class="form-control form-control-lg form-control-solid" name="recipe_name" value="{{ $recipe->recipe_name }}" required />
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label required">Category</label>
                    <select name="category_id" class="form-select form-select-solid" data-control="select2" required>
                      <option></option>

                      <?php foreach ($categories as $category): ?>
                        <option value="{{ $category->id }}"  {{ $recipe->category_id == $category->id ? 'selected' : ''}} >{{ $category->name }}</option>
                      <?php endforeach; ?>

                    </select>
                  </div>
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row">
                  <div class="col-sm-12">
                    <label class="form-label required">Ingredients</label>
                    <div class="row mb-10">
                      <!--begin::Repeater-->
                      <div class="rounded border py-10">
                        <div id="kt_docs_repeater_basic">
                          <!--begin::Form group-->
                          <div class="form-group">
                            <div data-repeater-list="ingredientslist">

                              <?php foreach ($recipe->ingredient as $key => $ing): ?>
                                <div data-repeater-item>
                                  <div class="form-group row px-5">
                                    <div class="col-md-6 mb-8">
                                      <input type="text" name="ingredients" class="form-control form-control-lg form-control-solid" value="{{ $ing['ingredients']['ingredients']}}" placeholder="Enter an ingredient name, e.g., 1 teaspoon salt" required />
                                    </div>
                                    <div class="col-md-1 mb-8">
                                      <a href="javascript:;" data-repeater-delete class="btn btn-flex btn-light-danger remove-ingredient" data-ingredient="{{ $ing['ingredients']['ingredients'] }}" data-id="{{ $recipe->id }}">
                                        <i class="ki-duotone ki-trash fs-3">
                                          <span class="path1"></span>
                                          <span class="path2"></span>
                                          <span class="path3"></span>
                                          <span class="path4"></span>
                                          <span class="path5"></span>
                                        </i>
                                        Delete
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <?php endforeach; ?>

                            </div>
                          </div>
                          <!--end::Form group-->
                          <!--begin::Form group-->
                          <div class="form-group px-5">
                            <a href="javascript:;" data-repeater-create class="btn btn-flex btn-light-primary">
                              <i class="ki-duotone ki-plus fs-3"></i>
                              Add
                            </a>
                          </div>
                          <!--end::Form group-->
                        </div>
                      </div>
                      <!--end::Repeater-->
                    </div>
                  </div>
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-10">
                  <div class="col-sm-6">
                    <label class="form-label required"> Cuisines</label>
                    <select name="cuisine_id" class="form-select form-select-solid" data-control="select2" required>
                      <option></option>

                      <?php foreach ($cuisines as $cuisine): ?>
                        <option value="{{ $cuisine->id }}"  {{ $recipe->cuisine_id == $cuisine->id ? 'selected' : ''}} >{{ $cuisine->name }}</option>
                      <?php endforeach; ?>

                    </select>
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label required">Prep Time</label>
                    <input type="text" class="form-control form-control-lg form-control-solid" name="prep_time" value="{{ $recipe->prep_time }}" required />
                  </div>
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-10">
                  <div class="col-sm-6">
                    <label class="form-label required">CookingTime</label>
                    <input type="text" class="form-control form-control-lg form-control-solid" name="cooking_time" value="{{ $recipe->cooking_time }}" required />
                  </div>
                  <div class="col-sm-6">
                    <div class="tag-container" id="tag-container">
                      <label class="form-label required">Tags</label>
                      <input type="text" id="tag-input" class="form-control form-control-lg form-control-solid" name="tag[]" />
                      <input type="hidden" id="tags-hidden" name="tags" value="{{ old('tags', $recipe->tag) }}">
                    </div>
                  </div>
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-10">
                  <div class="col-sm-6">
                    <label class="form-label required">Recipe Servings</label>
                    <input type="text" class="form-control form-control-lg form-control-solid" name="serving_size" value="{{ $recipe->serving_size }}" required />
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label required"> Difficulty Level</label>
                    <select name="difficulty_level" class="form-select form-select-solid" data-control="select2" required>
                      <option></option>
                      <option value="Easy" {{ $recipe->difficulty_level === "Easy" ? 'selected' : ''}}>Easy</option>
                      <option value="Medium" {{ $recipe->difficulty_level === "Medium" ? 'selected' : ''}}>Medium</option>
                      <option value="Hard" {{ $recipe->difficulty_level === "Hard" ? 'selected' : ''}}>Hard</option>

                    </select>
                  </div>
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->

                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-10">
                  <div class="col-sm-6">
                    <label class="form-label">Video</label>
                    <input type="hidden" name="oldVideo" value="">
                    <input type="file" name="recipe_video" id="imageInput" class="file-upload-default" accept="video/*">
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control form-control-lg form-control-solid  file-upload-info" value="{{ $recipe->recipe_video }}"  placeholder="Choose Video"  readOnly>
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary buttonedit" type="button">Upload</button>
                      </span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label">You Tube Link (option)</label>
                    <input type="text" class="form-control form-control-lg form-control-solid" name="recipe_youtube_video_url"  value="{{ $recipe->recipe_youtube_video_url }}"  />
                  </div>
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row ">
                  <div class="col-sm-12">
                    <label class="form-label">Overview</label>
                    <textarea name="description" id="kt_docs_first_ckeditor_classic" required>{{ $recipe->description }}</textarea>
                  </div>
                </div>
                <!--end::Input group-->

                 <!--begin::Input group-->
                 <div class="fv-row mb-2">
                  <div class="col-sm-12">
                    <label class="form-label required">How To Cook </label>
                    <textarea class="form-control form-control-lg" id="kt_docs_second_ckeditor_classic" name="instruction" placeholder="Describe the cooking process" >{{ $recipe->instruction }}</textarea>
                  </div>
                </div>
                <!--end::Input group-->

              </div>
              <!--end::Card body-->
              <!--begin::Actions-->
              <div class="card-footer d-flex justify-content-start py-6 px-9">
                <button type="submit" class="btn btn-primary me-5">Edit</button>
              </div>
              <!--end::Actions-->
            </form>
            <!--end::Form-->
          </div>
          <!--end::Content-->
        </div>
      </div>
      <!--end::Row-->
    </div>
    <!--end::Content container-->
  </div>
  <!--end::Content -->


</div>
<!--end::Content wrapper-->

<script type="text/javascript">

    $(document).ready(function() {

    $('.remove-ingredient').on('click', function() {

        var ingredientToDelete = $(this).data('ingredient');
        var recipe_id = $(this).data('id');

        $.ajax({
            url: '/admin/delete-ingredient', // Assuming the route to delete ingredient is /ingredients/{id}
            type: 'get',
            data: {
                _token: '{{ csrf_token() }}', // Pass the CSRF token
                id: recipe_id,
                name: ingredientToDelete,
            },
            success: function(response) {

              if (response.success) {
                  // On success, remove the ingredient from the DOM
                  Swal.fire({
                    icon:'success',
                    title: response.message,
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 5000,
                    timerProgressBar: true,
                  });
              }
            },
            error: function(xhr) {
                // Handle errors
                Swal.fire({
                  icon:'error',
                  title: 'Failed to delete the ingredient!',
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 5000,
                  timerProgressBar: true,
                });
            }
        });
    });
});

</script>

<script type="text/javascript">

$(document).ready(function() {
    let tags = @json($tags); // Retrieve the tags from the server, if any
    const tagContainer = $('#tag-container');
    const tagInput = $('#tag-input');
    const hiddenTagInput = $('#tags-hidden'); // Hidden input field to store tags

    // Function to create a tag and attach the remove button
    function createTag(label) {
        const tag = $('<div>').addClass('tag').text(label);
        const removeButton = $('<button>').addClass('remove-tag').text('×');

        removeButton.on('click', function() {
            const index = tags.indexOf(label);
            if (index > -1) {
                tags.splice(index, 1); // Remove the tag from the array
                updateHiddenTagInput(); // Update hidden input field
            }
            tag.remove(); // Remove the tag from the DOM
        });

        tag.append(removeButton);
        return tag;
    }

    // Function to update the hidden input field with the tags
    function updateHiddenTagInput() {
        hiddenTagInput.val(tags.join(',')); // Join tags into a comma-separated string
    }

    // Add existing tags from the database to the UI
    if (tags.length > 0) {
        tags.forEach(tag => {
            const tagElement = createTag(tag.trim());
            tagContainer.append(tagElement);
        });
        updateHiddenTagInput(); // Initialize hidden input with existing tags
    }

    // Add new tags when the user presses space or enter
    tagInput.on('keydown', function(e) {
        if (e.key === ' ' || e.key === 'Enter') {
            e.preventDefault(); // Prevent form submission
            const newTag = tagInput.val().trim();
            if (newTag && !tags.includes(newTag)) { // Prevent adding duplicate tags
                tags.push(newTag);
                const tagElement = createTag(newTag);
                tagContainer.append(tagElement);
                tagInput.val(''); // Clear the input field
                updateHiddenTagInput(); // Update hidden input field
            }
        }
    });
});

</script>

@endsection

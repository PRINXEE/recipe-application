@extends('admin.layouts.master')
@section('title', 'Admin | Recipe')
@section('content')

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
              <a href="/recipe" class="text-gray-500">
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
            <li class="breadcrumb-item text-gray-700 fw-bold">View All Recipe</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-1 lh-0">Recipe List</h1>
          <!--end::Title-->
        </div>
        <!--end::Page title-->
      </div>
      <!--end::Toolbar wrapper-->
    </div>
    <!--end::Toolbar container-->
  </div>
  <!--end::Toolbar-->

  <!--begin::Content-->
  <div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-fluid">
      <!--begin: intro-->
      <div class="card card-flush border">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
          <!--begin::Card title-->
          <div class="card-title mb-5">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
              <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                <span class="path1"></span>
                <span class="path2"></span>
              </i>
              <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Recipe" />
            </div>
            <!--end::Search-->
          </div>
          <!--begin::Card title-->
          <!--begin::Card toolbar-->
          <div class="card-toolbar">
            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end" data-kt-subscription-table-toolbar="base">
              <!--begin::Add recipe -->
              <a href="{{ route('add-recipe') }}" class="btn btn-primary">
                <i class="ki-duotone ki-plus fs-2"></i>Add New Recipe</a>
              <!--end::Add recipe -->
            </div>
            <!--end::Toolbar-->
          </div>
          <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body py-4">
          <!-- flash message -->
          <!-- complete flash message -->

          <!--begin::Table-->
          <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
            <thead>
              <tr class="text-start text-gray-400 fw-bold fs-5 text-uppercase gs-0">
                <th class="min-w-80px">Sr.no</th>
                <th class="min-w-70px">Date</th>
                <th class="min-w-70px">Image</th>
                <th class="min-w-100px">Name</th>
                <th class=" min-w-100px">Category</th>
                <th class=" min-w-100px">Cuisines</th>
                <th class=" min-w-100px">Total Time</th>
                <th class=" min-w-100px">Servings</th>
                <th class=" min-w-100px">Level</th>
                <th class=" min-w-50px">Actions</th>
              </tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">
              <?php  $counter = 1;?>
              <?php foreach ($recipes as $recipe): ?>
                <!-- begin::tr -->
                <tr>
                  <td class="ps-3">{{ $counter++ }}</td>
                  <td class=" pe-0">
                    2024-2-3
                  </td>
                  <td class=" pe-0">
                    <!--begin::Thumbnail-->
                    <a href="{{ Storage::url($recipe->recipe_image) }}" class="symbol symbol-40px overflow-hidden" data-fslightbox="lightbox-basic">
                      <img src="{{ Storage::url($recipe->recipe_image) }}" alt="1706944344235_Leftover Rice Pancakes Recipe.jpg" class="symbol-label border border-gray-400">
                    </a>
                    <!--end::Thumbnail-->
                  </td>
                  <td class="text-gray-800 fw-bolder">{{ $recipe->recipe_name }}</td>
                  <td class="">{{ $recipe->recipeCategory->name }}</td>
                  <td class="">{{ $recipe->recipeCuisine->name }}</td>
                  <td class="">{{ $recipe->cooking_time }}</td>
                  <td class="">{{ $recipe->serving_size }}</td>
                  <td class="">{{ $recipe->difficulty_level }}</td>
                  <td class="pe-0">
                    <div class="d-flex align-items-center">
                      <!-- view -->
                      <a href="{{ route('view-recipe-gallery', $recipe->id) }}">
                        <div class="symbol symbol-40px symbol-circle user-select-none">
                          <div class="symbol-label bg-light-info text-info"><i class="ki-solid ki-picture fs-1 text-info"></i></div>
                        </div>
                      </a>

                      <!-- edit -->
                      <a href="{{ route('edit-recipe', $recipe->id) }}" class="menu-link">
                        <div class="symbol symbol-40px symbol-circle user-select-none">
                          <div class="symbol-label bg-light-primary text-primary"><i class="ki-solid ki-pencil fs-2 text-primary"></i></div>
                        </div>
                      </a>
                      <!-- delete -->
                      <a data-bs-toggle="modal" data-bs-target="#kt_modal_delete_recipe0">
                        <div class="symbol symbol-40px symbol-circle user-select-none">
                          <div class="symbol-label bg-light-danger text-danger"><i class="ki-solid ki-trash fs-2 text-danger"></i></div>
                        </div>
                      </a>

                    </div>
                  </td>
                </tr>
                <!-- end::tr -->

                <!--begin::Modal - delete recipe-->
                <div class="modal fade" id="kt_modal_delete_recipe0" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
                  <!--begin::Modal-->
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 Delete class="modal-title fs-1">Delete Confirmation</h5>
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                          <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
                        </div>
                        <!--end::Close-->
                      </div>

                      <div class="modal-body">
                        <p class="text-center fs-4 mb-0">Are you sure..!! you want to delete this <b> {{ $recipe->recipe_name }} </b>recipe ?</p>
                      </div>

                      <div class="modal-footer">
                        <a href="{{ route('delete-recipe', ['id' => $recipe->id]) }}" class="btn btn-danger btn-lg">Delete</a>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!--end::Modal - delete recipe -->
              <?php endforeach; ?>

            </tbody>
          </table>
          <!--end::Table-->

        </div>
        <!--end::Card body-->
      </div>
      <!--end: intro-->
    </div>
    <!--end::Content container-->
  </div>
  <!--end::Content-->

  <!--begin::Modal - Not Authorized -->
  <div class="modal fade" id="kt_modal_no_access" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
    <!--begin::Modal-->
    <div class="modal-dialog  modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fs-1">Not Authorized</h5>
          <!--begin::Close-->
          <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
            <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
          </div>
          <!--end::Close-->
        </div>

        <!-- begin::modal-body -->
        <div class="modal-body">
          <p class="text-center fs-3 mb-0" id="modal-message"></p>
        </div>
        <!-- end:: modal-body -->

        <!-- begin::modal-footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Ok</button>
        </div>
        <!-- end::modal-footer -->

      </div>
    </div>
  </div>
  <!--end::Modal-->

  <!-- flash alert model-->
      @include('sweetalert::alert')
  <!-- end:: flash alert model -->

</div>


@endsection

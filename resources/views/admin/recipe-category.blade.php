@extends('admin.layouts.master')
@section('title', 'Admin | Recipe Category')
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
              <a href="/category" class="text-gray-500">
                <i class="ki-solid ki-category fs-1 text-gray-400 me-n1"></i>
              </a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
              <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Category</li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
              <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-700">View All Category</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-1 lh-0">Category List</h1>
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
              <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search category" />
            </div>
            <!--end::Search-->
          </div>
          <!--begin::Card title-->
          <!--begin::Card toolbar-->
          <div class="card-toolbar">
            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end" data-kt-subscription-table-toolbar="base">

              <!--begin::Add category -->
              <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_categories">
                <i class="ki-duotone ki-plus fs-2"></i>Add Category</a>
              <!--end::Add category -->

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
          <table id="kt_customers_table" class="table align-middle table-row-dashed fs-6 gy-5">
            <thead>
              <tr class="text-start text-gray-400 fw-bold fs-5 text-uppercase gs-0">
                <th class="min-w-125px">Sr.no</th>
                <th class="min-w-125px">Created date</th>
                <th class="min-w-125px">name</th>
                <th class="min-w-125px">Actions</th>
              </tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">
                <?php  $counter = 1;?>
              <?php foreach ($recipes as $recipe):?>

              <!-- begin::tr -->
              <tr>
                <td class="ps-3">{{ $counter++ }}</td>
                <td class="pe-0 fw-bolder text-gray-800">

                  {{ $recipe->created_at }}
                </td>
                <td class=" pe-0 fw-bolder text-gray-800">{{ $recipe->name }} </td>
                <td class="pe-0">
                  <div class="d-flex align-items-center">

                    <!-- Edit button -->
                    <a data-bs-toggle="modal" data-bs-target="#kt_modal_edit_category-{{ $recipe->id }}">
                      <div class="symbol symbol-40px symbol-circle">
                        <div class="symbol-label bg-light-primary text-primary">
                          <i class="ki-solid ki-pencil fs-2 text-primary"></i>
                        </div>
                      </div>
                    </a>

                    <!-- Delete button -->
                    <a data-bs-toggle="modal" data-bs-target="#kt_modal_delete_category-{{ $recipe->id }}">
                      <div class="symbol symbol-40px symbol-circle">
                        <div class="symbol-label bg-light-danger text-danger">
                          <i class="ki-solid ki-trash fs-2 text-danger"></i>
                        </div>
                      </div>
                    </a>

                  </div>
                </td>
              </tr>
              <!-- end::tr -->

              <!--begin::Modal - edit recipe-->
              <div class="modal fade" id="kt_modal_edit_category-{{ $recipe->id }}" tabindex="-1" data-bs-backdrop="static">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title fs-1" id="confirmLabel">Edit Recipe</h5>
                      <!--begin::Close-->
                      <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
                      </div>
                      <!--end::Close-->
                    </div>

                    <!-- begin::form -->
                    <form action="{{ route('update-recipe-category') }}" method="POST">
                      @csrf
                      <div class="modal-body">
                        <input type="text" class="form-control form-control-lg form-control-solid" name="name" value="{{ $recipe->name }}" required />
                        <input type="hidden" name="id" value="{{ $recipe->id }}">
                      </div>
                      <div class="modal-footer justify-content-end">
                        <button type="submit" class="btn btn-success btn-lg">Edit</button>
                      </div>
                    </form>
                    <!-- end::form -->

                  </div>
                </div>
              </div>
              <!--end::Modal-->

              <!--begin::Modal - delete recipe -->
              <div class="modal fade" id="kt_modal_delete_category-{{ $recipe->id }}" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title fs-1">Delete Confirmation</h5>
                      <!--begin::Close-->
                      <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
                      </div>
                      <!--end::Close-->
                    </div>
                    <div class="modal-body">
                      <p class="text-center fs-3">Are you sure you want to delete the <b>{{ $recipe->name }}</b> recipe and all associated data?</p>
                    </div>
                    <div class="modal-footer">
                      <a href="{{ route('delete-recipe-category', ['id' => $recipe->id]) }}">
                        <button type="button" class="btn btn-danger">Delete</button>
                      </a>
                    </div>
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

  <!--begin::Modal - Add category-->
  <div class="modal fade" id="kt_modal_add_categories" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
    <!--begin::Modal-->
    <div class="modal-dialog  modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fs-1">Add category</h5>
          <!--begin::Close-->
          <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
            <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
          </div>
          <!--end::Close-->
        </div>

        <!-- begin:: form -->
        <form action="{{route('recipe-cateogry-store')}}" method="post" enctype="multipart/form-data" class="m-0">
          @csrf
          <!-- begin::modal-body -->
          <div class="modal-body">
            <input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="Enter category name" required />
          </div>
          <!-- end:: modal-body -->
          <!-- begin::modal-footer -->
          <div class="modal-footer justify-content-end">
            <button type="submit" class="btn btn-primary btn-lg">Add</button>
          </div>
          <!-- end::modal-footer -->
          <!-- <button type="submit" class="btn btn-primary btn-lg">Add</button> -->
        </form>
        <!-- end::form -->

      </div>
    </div>
  </div>
  <!--end::Modal-->

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
          <p class="text-center fs-3" id="modal-message"></p>
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

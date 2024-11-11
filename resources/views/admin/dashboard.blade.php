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
            <a href="#" class="text-gray-500">
              <i class="ki-duotone ki-home fs-3 text-gray-400 me-n1"></i>
            </a>
          </li>
          <!--end::Item-->
          <!--begin::Item-->
          <li class="breadcrumb-item">
            <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
          </li>
          <!--end::Item-->
          <!--begin::Item-->
          <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Dashboards</li>
          <!--end::Item-->
        </ul>
        <!--end::Breadcrumb-->
        <!--begin::Title-->
        <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-1 lh-0 mt-1">Dashboard</h1>
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

    <!--begin::Row-->
    <div class="row g-5 g-xl-10">

      <div class="col-md-6 col-xl-4">
        <a href="{{ url('admin/recipe-category') }}" class="card border-hover-primary">
          <div class="card-header border-0 pt-9">
            <div class="card-title">
              <div class="symbol symbol-35px w-40px h-40px bg-light-primary border border-gray d-flex justify-content-center align-items-center">
                <i class="ki-solid ki-category fs-1 text-primary"></i>
              </div>
            </div>
            <div class="card-toolbar">
              <span class="badge badge-light-primary fw-bold me-auto px-4 py-3">View More</span>
            </div>
          </div>
          <div class="card-body p-9 ">
            <div class="d-flex justify-content-between">
              <div class="fs-3 fw-bold text-dark mt-1 mb-5">Category</div>
              <div class="fs-3 fw-bold text-dark mt-1 mb-5">
                {{ $categories }}
              </div>
            </div>
            <div class="h-4px w-100 bg-light mb-5">
              <div class="bg-primary rounded h-4px progress-bar" role="progressbar" style="width: 50%" aria-valuenow="14 " aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-6 col-xl-4">
        <a href="{{ route('recipe-cuisine') }}" class="card border-hover-primary">
          <div class="card-header border-0 pt-9">
            <div class="card-title">
              <div class="symbol symbol-35px w-40px h-40px bg-light-info border border-gray d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-utensils fs-2 text-info"></i>
              </div>
            </div>
            <div class="card-toolbar">
              <span class="badge badge-light-info fw-bold  px-4 py-3">View More</span>
            </div>
          </div>
          <div class="card-body p-9">
            <div class="d-flex justify-content-between">
              <div class="fs-3 fw-bold text-dark mt-1 mb-5">Cuisines</div>
              <div class="fs-3 fw-bold text-dark mt-1 mb-5">
                {{ $cuisines }}
              </div>
            </div>
            <div class="h-4px w-100 bg-light mb-5">
              <div class="bg-info rounded h-4px" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-6 col-xl-4">
        <a href="{{ route('recipe') }}" class="card border-hover-primary">
          <div class="card-header border-0 pt-9">
            <div class="card-title">
              <div class="symbol symbol-35px w-40px h-40px bg-light-primary border border-gray d-flex justify-content-center align-items-center">
                <i class="ki-solid ki-book-open fs-1 text-primary"></i>
              </div>
            </div>
            <div class="card-toolbar">
              <span class="badge badge-light-primary fw-bold me-auto px-4 py-3">View More</span>
            </div>
          </div>

          <div class="card-body p-9">
            <div class="d-flex justify-content-between">
              <div class="fs-3 fw-bold text-dark mt-1 mb-5">Recipe</div>
              <div class="fs-3 fw-bold text-dark mt-1 mb-5">
                {{ $recipes }}
              </div>

            </div>
            <div class="h-4px w-100 bg-light mb-5">
              <div class="bg-primary rounded h-4px" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-6 col-xl-4">
        <a href="{{ route('users') }}" class="card border-hover-primary">
          <div class="card-header border-0 pt-9">
            <div class="card-title">
              <div class="symbol symbol-35px w-40px h-40px bg-light-success border border-gray d-flex justify-content-center align-items-center">
                <i class="ki-solid ki-user-square text-success fs-1"></i>
              </div>
            </div>
            <div class="card-toolbar">
              <span class="badge badge-light-success fw-bold me-auto px-4 py-3">View More</span>
            </div>
          </div>
          <div class="card-body p-9">
            <div class="d-flex justify-content-between">
              <div class="fs-3 fw-bold text-dark mt-1 mb-5">User</div>
              <div class="fs-3 fw-bold text-dark mt-1 mb-5">
                {{ $users }}
              </div>
            </div>
            <div class="h-4px w-100 bg-light mb-5">
              <div class="bg-success rounded h-4px" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </a>
      </div>

    </div>
    <!--end::Row-->

  </div>
  <!--end::Content container-->
</div>
<!--end::Content-->
</div>

@endsection

@extends('admin.layouts.master')
@section('title', 'Admin | Edit My Profile')
@section('content')

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
            <form action="{{ route('update-profile') }}" class="form" method="post" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <!--begin::Card body-->
              <div class="card-body border-top p-9">

                <!-- flash message -->

                <!-- complete flash message -->

                <!--begin::Input group-->
                <input type="hidden" name="id" value="{{ $profile->id }}">
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
                        <img class="galleryimg image-input-wrapper w-150px h-150px" src="{{ Storage::url($profile->profile_image) }}" id="previewImage" alt="logo">
                        <!--end::Preview existing image-->
                        <!--begin::Label-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-30px h-30px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change image">
                          <i class="ki-duotone ki-pencil fs-1 text-primary">
                            <span class="path1"></span>
                            <span class="path2"></span>
                          </i>
                          <!--begin::Inputs-->
                          <input type="file" name="profile_image" id="imageInput" accept=".png, .jpg, .jpeg" />
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
                    <label class="form-label required">Full Name</label>
                    <input type="text" class="form-control form-control-lg form-control-solid" name="name" value="{{ $profile->name }}" required />
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label required">Email</label>
                    <input type="email" class="form-control form-control-lg form-control-solid" name="email" value="{{ $profile->email }}" required />
                  </div>
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-10">
                  <div class="col-sm-6">
                    <label class="form-label required">Phone Number</label>
                    <input type="text" class="form-control form-control-lg form-control-solid" name="phone_number" value="{{ $profile->phone_number }}" required />
                  </div>
                  <!-- <div class="col-sm-6">
                    <div class="tag-container" id="tag-container">
                      <label class="form-label required">Tags</label>
                      <input type="text" id="tag-input" class="form-control form-control-lg form-control-solid" name="tag[]" />
                      <input type="hidden" id="tags-hidden" name="tags" value="{{ old('tags') }}">
                    </div>
                  </div> -->
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

@endsection

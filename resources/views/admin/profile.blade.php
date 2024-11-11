@extends('admin.layouts.master')
@section('title', 'Admin | My Profile')
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
                <i class="lar la-user fs-2qx text-gray-400 me-n1"></i>
              </a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
              <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-700 fw-bold lh-1 ">Profile</li>
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
      <!--begin::Navbar-->
      <div class="card mb-5 mb-xl-10">
        <div class="card-body pt-9 pb-0">
          <!--begin::Details-->
          <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
            <!--begin: Pic-->
            <div class="me-7 mb-4">
              <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative border card-boxshadow">
                <img src="{{ Storage::url($profile->profile_image) }}" alt="image"  />
              </div>
            </div>
            <!--end::Pic-->
          </div>
          <!--end::Details-->
        </div>
      </div>
      <!--end::Navbar-->
      <!--begin::details View-->
      <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
          <!--begin::Card title-->
          <div class="card-title m-0">
            <h3 class="fw-bold m-0 fs-1">Profile Details</h3>
          </div>
          <!--end::Card title-->
          <!--begin::Action-->
          <div class="d-flex justify-content-end">
            <a href="{{ route('edit-profile', $profile->id) }}" class="btn btn-sm btn-primary align-self-center py-3 me-5">Edit Profile</a>
          </div>
          <!--end::Action-->
        </div>
        <!--begin::Card header-->
        <!--begin::Card body-->
        <div class="card-body p-9">

          <!--begin::Row-->
          <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">Full Name</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
              <span class="fw-bold fs-6 text-gray-800">{{ $profile->name }}</span>
            </div>
            <!--end::Col-->
          </div>
          <!--end::Row-->

          <!--begin::Input group-->
          <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">Email</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8 fv-row">
              <span class="fw-semibold text-gray-800 fs-6">{{ $profile->email }}</span>
            </div>
            <!--end::Col-->
          </div>
          <!--end::Input group-->

          <!--begin::Input group-->
          <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-semibold text-muted">Contact Phone</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8 d-flex align-items-center">
              <span class="fw-bold fs-6 text-gray-800 me-2">{{ $profile->phone_number }}</span>
            </div>
            <!--end::Col-->
          </div>
          <!--end::Input group-->
        </div>
        <!--end::Card body-->
      </div>
      <!--end::details View-->
    </div>
    <!--end::Content container-->
  </div>
  <!--end::Content-->
</div>
<!--end::Content wrapper-->

@endsection

@extends('admin.layouts.master')
@section('title', 'Admin | Edit FAQ')
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
                <i class="ki-solid ki-question fs-1 text-gray-400 me-n1"></i>
              </a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
              <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
              <a class="text-gray-700 fw-bold">FAQ</a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
              <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Add FAQ</li>
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

      <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
          <!--begin::Card title-->
          <div class="card-title m-0">
            <h3 class="fw-bold m-0 fs-1">Add FAQ</h3>
          </div>
          <!--end::Card title-->
        </div>
        <!--begin::Card header-->

        <!--begin::Content-->
        <div class="collapse show">
          <!--begin::Form-->
          <form method="post" class="form" action="{{ route('update-faq') }}">
            @csrf
            @method('put')
            <!--begin::Card body-->
            <div class="card-body border-top">
              <!-- flash message -->
                <input type="hidden" name="id" value="{{ $faq->id }}">
              <!-- complete flash message -->

              <!--begin::Input group-->
              <div class="row mb-10">
                <!--begin::Label-->
                <label class="col-lg-3 col-form-label required fw-semibold fs-6">Question</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-9 fv-row fv-plugins-icon-container">
                  <input type="text" name="question" class="form-control form-control-lg form-control-solid" value="{{ $faq->question }}" placeholder="Enter question" required>
                </div>
                <!--end::Col-->
              </div>
              <!--end::Input group-->

              <!--begin::Input group-->
              <div class="row mb-10">
                <!--begin::Label-->
                <label class="col-lg-3 col-form-label required fw-semibold fs-6">Answer</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-9 fv-row fv-plugins-icon-container">
                  <textarea name="answer" class="form-control form-control-solid" data-kt-autosize="true" placeholder="Enter answer" rows="4" required>{{ $faq->answer }}</textarea>
                </div>
                <!--end::Col-->
              </div>
              <!--end::Input group-->

              <!--begin::Input group-->
              <div class="row">
                <!--begin::Label-->
                <label class="col-lg-3 col-form-label required fw-semibold fs-6">Status</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-9 fv-row fv-plugins-icon-container">
                  <div class="d-flex fv-row">
                    <label class="form-check form-check-custom form-check-sm me-20">
                      <input class="form-check-input"  type="radio" id="Publish" name="status" value="1" {{ $faq->status == '1' ? 'checked' : '' }} />
                      <span class="form-check-label fw-semibold fs-5">Publish </span>
                    </label>
                    <label class="form-check form-check-custom form-check-sm">
                      <input class="form-check-input" type="radio" id="UnPublish" name="status" value="0" {{ $faq->status == '0' ? 'checked' : '' }} />
                      <span class="form-check-label fw-semibold fs-5">UnPublish</span>
                    </label>
                  </div>
                </div>
                <!--end::Col-->
              </div>
              <!--end::Input group-->

            </div>
            <!--end::Card body-->

            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-start py-6 px-9">
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
            <!--end::Actions-->

          </form>
          <!--end::Form-->
        </div>
        <!--end::Content-->
      </div>

    </div>
    <!--end::Content container-->
  </div>
  <!--end::Content-->

</div>

@endsection

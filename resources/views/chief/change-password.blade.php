@extends('chief.layouts.master')
@section('title', 'Chief | Change Password')
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
                <i class="las la-key fs-2qx text-gray-400 me-n1"></i>
              </a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
              <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-700 fw-bold">Change Password</li>
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
      <div class="row g-5 ">
        <div class="card mb-5 mb-xl-10 col-lg-6">
          <!--begin::Card header-->
          <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
              <h3 class="fw-bold m-0 fs-1">Change Password</h3>
            </div>
            <!--end::Card title-->
          </div>
          <!--begin::Card header-->
          <!--begin::Content-->
          <div id="kt_account_settings_profile_details" class="collapse show">

            <!--begin::Form-->
            <form class="form" id="changePassword" method="post" action="{{ route('update-my-password') }}">
              @csrf
              <!--begin::Card body-->
              <div class="card-body border-top p-9">

                <!-- flash message -->

                <!-- complete flash message -->

                <!--begin::Input group--->
                <div class="fv-row mb-10">
                  <label class="required form-label fs-6 mb-2">Current Password</label>

                  <input class="form-control form-control-lg form-control-solid" type="password" placeholder="Type Your Current Password" name="current_password" autocomplete="off" required />
                </div>
                <!--end::Input group--->

                <!--begin::Input group-->
                <div class="mb-10 fv-row " data-kt-password-meter="true">
                  <!--begin::Wrapper-->
                  <div class="mb-1">
                    <!--begin::Label-->
                    <label class="form-label fw-semibold fs-6 mb-2 required">
                      New Password
                    </label>
                    <!--end::Label-->
                    <!--begin::Input wrapper-->
                    <div class="position-relative mb-3">
                      <input class="form-control form-control-lg form-control-solid" type="password" id="new_password" placeholder="" name="new_password" autocomplete="off" required />

                      <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                        <i class="ki-duotone ki-eye-slash fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        <i class="ki-duotone ki-eye d-none fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                      </span>
                    </div>
                    <!--end::Input wrapper-->
                  </div>
                  <!--end::Wrapper-->

                  <!--begin::Hint-->
                  <div class="text-muted">
                    Use 8 or more characters with a mix of letters, numbers & symbols.
                  </div>
                  <!--end::Hint-->
                </div>
                <!--end::Input group--->

                <!--begin::Input group--->
                <div class="fv-row">
                  <label class="form-label fw-semibold fs-6 mb-2 required">Confirm New Password</label>
                  <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" id="confirm_password" name="confirm_password" autocomplete="off" required />
                </div>
                <!--end::Input group--->

              </div>
              <!--end::Card body-->

              <!--begin::Actions-->
              <div class="card-footer d-flex justify-content-start py-6 px-9">
                <button type="submit" class="btn btn-primary me-4">Change</button>
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

<!-- flash alert model-->
    @include('sweetalert::alert')
<!-- end:: flash alert model -->

<script type="text/javascript">
  document.getElementById('changePassword').addEventListener('submit', function(e) {
    // Get the password and confirmation password value
    var new_password = document.getElementById('new_password').value;
    var confirm_password = document.getElementById('confirm_password').value;

    console.log(new_password, confirm_password);

    // check id the new password and the confirmed password matches

    if (new_password !== confirm_password) {
      // prevent the form from submiting
      e.preventDefault();

      // display the error using SweetAlert
      Swal.fire({
        icon:'error',
        title: 'New password and confirmation password did not match!',
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
      });
    }


  });

</script>
@endsection

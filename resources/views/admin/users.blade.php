@extends('admin.layouts.master')
@section('title', 'Admin | Users')
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
              <a href="/user" class="text-gray-500">
                <i class="ki-solid ki-user-square fs-1 text-gray-400 me-n1"></i>
              </a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
              <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">User</li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
              <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">View All User</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <h1 class="page-heading d-flex flex-column justify-content-start text-dark fw-bolder fs-1 lh-0 mt-1">User List</h1>
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
      <!--begin: pools-->
      <div class="card card-flush">
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
              <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search User" />
            </div>
            <!--end::Search-->
          </div>
          <!--begin::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0 ">
          <!-- flash message -->

          <!-- complete flash message -->

          <!--begin::Table-->
          <div class="table-responsive mb-3">
            <table id="kt_customers_table" class="table align-middle table-row-dashed fs-6 gy-5">
              <thead>
                <tr class="text-start text-gray-400 fw-bold fs-5 text-uppercase gs-0">
                  <th class="min-w-70px">sr.no</th>
                  <th class="min-w-100px">image</th>
                  <th class="min-w-100px">Name</th>
                  <th class="min-w-100px">Email</th>
                  <th class="min-w-100px">Phone</th>
                  <th class="text-center min-w-100px">Active</th>
                </tr>
              </thead>
              <tbody class="fw-semibold text-gray-600">

                <?php foreach ($users as $user): ?>
                  <!-- begin:: tr -->
                  <tr>
                    <td class="ps-5">1</td>
                    <td>
                      <!--begin::Thumbnail-->
                      <div class="symbol symbol-40px overflow-hidden me-3">

                        <a href="#">
                          <img src="{{ Storage::url($user->profile_image) }}" alt="image" class="symbol-label">
                        </a>

                      </div>
                      <!--end::Thumbnail-->
                    </td>
                    <td class="pe-0 fw-bolder text-gray-800">{{ $user->name }}</td>
                    <td class="pe-0">{{ $user->email }} </td>
                    <td class="pe-0 fw-bolder text-gray-800">{{ $user->phone_number }}</td>
                    <td class="pe-0">
                      <!--begin::Switch-->
                      <div class="d-flex justify-content-center py-5" data-bs-toggle="modal" data-bs-target="#kt_modal_Enable/Disable_user_$user->id">
                        <label class=" switch">
                          <button class="buttonslider ms-5">
                            <input type="checkbox" name="isOTPVerified"  style="display: none;">
                            <span class="slider round"></span>
                          </button>
                        </label>
                      </div>
                      <!--end::Switch-->
                    </td>
                  </tr>
                  <!-- end::tr -->

                  <!-- begin::Modal - Enable/Disable user -->
                  <div class=" modal fade" id="kt_modal_Enable/Disable_user_$user->id" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title fs-1">Confirmation</h5>
                          <!--begin::Close-->
                          <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
                          </div>
                          <!--end::Close-->
                        </div>

                        <div class="modal-body">

                          <p class="message text-center fs-3">Are you sure..!! you want to active the user account <b>{{ $user->name }}</b> ...?</p>

                        </div>

                        <div class="modal-footer">
                          <a href="/active-user?id=66ee7271c9e6b206bfe335b1">

                            <button type="button" class="btn btn-success btn-lg">Active</button>

                          </a>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!--end::Modal - Enable/Disable user-->
                <?php endforeach; ?>
                <!-- begin::Modal - Enable/Disable user -->
                <div class=" modal fade" id="kt_modal_Enable/Disable_user7" tabindex="-1" data-bs-backdrop="static" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title fs-1">Confirmation</h5>
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                          <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
                        </div>
                        <!--end::Close-->
                      </div>

                      <div class="modal-body">

                        <p class="message text-center fs-3">Are you sure..!! you want to disactive the user account <b>Egge Dqxq</b> ...?</p>

                      </div>

                      <div class="modal-footer">
                        <a href="/active-user?id=66f2cf3af40f491f2582ea2e">

                          <button type="button" class="btn btn-danger btn-lg">Disactive</button>

                        </a>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!--end::Modal - Enable/Disable user-->
              </tbody>
            </table>
          </div>
          <!--end::Table-->
        </div>
        <!--end::Card body-->
      </div>
      <!--end: pools-->
    </div>
    <!--end::Content container-->
  </div>
  <!--end::Content-->
</div>

@endsection

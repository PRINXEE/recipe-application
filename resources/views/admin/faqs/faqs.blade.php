@extends('admin.layouts.master')
@section('title', 'Admin | FAQ')
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
              <a href="/faq" class="text-gray-500">
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
            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">FAQ</li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
              <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">View All FAQ</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-1 lh-0">FAQ List</h1>
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
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
          <!--begin::Card title-->
          <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative">
              <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                <span class="path1"></span>
                <span class="path2"></span>
              </i>
              <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search ..." />
            </div>
            <!--end::Search-->
          </div>
          <!--begin::Card title-->
          <!--begin::Card toolbar-->
          <div class="card-toolbar flex-row-fluid justify-content-end gap-5">

            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end">



              <!--begin::Add  button -->
              <a href="{{ route('add-faq') }}" class="btn btn-primary">
                <i class="ki-duotone ki-plus fs-2"></i>Add FAQ</a>
              <!--end::Add  button -->

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
                <th class="min-w-100px">Question</th>
                <th class="min-w-100px">Answer</th>
                <th class="min-w-100px">Status</th>
                <th class="min-w-100px">Actions</th>
              </tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">
              <?php  $counter = 1;?>
              <?php foreach ($faqs as $faq): ?>
                <!-- begin::tr -->
                <tr>
                  <td class="ps-1">{{ $counter ++ }}</td>
                  <td class="text-gray-800 fw-bolder">{{ $faq->question }}</td>
                  <td class="">{{ $faq->answer }}</td>
                  <?php if ($faq->status == '1'): ?>
                    <td class="pe-0">
                      <div class="badge badge-success">Publish</div>
                    </td>
                  <?php else: ?>
                    <td class="pe-0">
                      <div class="badge badge-danger">Unpublish</div>
                    </td>
                  <?php endif; ?>

                  <td class="pe-0">
                    <div class="d-flex align-items-center">
                      <!-- edit -->
                      <a href="{{ route('edit-faq', $faq->id) }}">
                        <div class="symbol symbol-40px symbol-circle user-select-none">
                          <div class="symbol-label bg-light-primary text-primary"><i class="ki-solid ki-pencil fs-2 text-primary"></i></div>
                        </div>
                      </a>
                      <!-- delete -->
                      <a data-bs-toggle="modal" data-bs-target="#kt_modal_delete_faq_{{ $faq->id }}">
                        <div class="symbol symbol-40px symbol-circle user-select-none">
                          <div class="symbol-label bg-light-danger text-danger"><i class="ki-solid ki-trash fs-2 text-danger"></i></div>
                        </div>
                      </a>

                    </div>
                  </td>
                </tr>
                <!-- end::tr -->

                <!--begin::Modal - delete banner -->
                <div class="modal fade" id="kt_modal_delete_faq_{{ $faq->id }}" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
                  <!--begin::Modal-->
                  <div class="modal-dialog ">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 Delete class="modal-title fs-2">Delete Confirmation</h5>
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                          <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
                        </div>
                        <!--end::Close-->
                      </div>

                      <div class="modal-body">
                        <p class="text-center fs-3 mb-0">Are you sure..!! you want to delete the question <b>{{ $faq->question }}</b> </p>
                      </div>

                      <div class="modal-footer">
                        <a href="{{ route('delete-faq', ['id' => $faq->id]) }}"><button type="button" class="btn btn-danger">Delete</button></a>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!--end::Modal - delete  banner  -->
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

</div>
<!--end::Content wrapper-->

<!-- flash alert model-->
    @include('sweetalert::alert')
<!-- end:: flash alert model -->

@endsection

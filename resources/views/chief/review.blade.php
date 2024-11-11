@extends('chief.layouts.master')
@section('title', 'Chief | Recipe Review')
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
              <a href="/review" class="text-gray-500">
                <i class="ki-solid ki-star fs-1 text-gray-400 me-n1"></i>
              </a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
              <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Reviews</li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
              <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-700 fw-bold">View All Review</li>
            <!--end::Item-->
          </ul>
          <!--end::Breadcrumb-->
          <!--begin::Title-->
          <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-1 lh-0">Reviews List</h1>
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
              <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Review" />
            </div>
            <!--end::Search-->
          </div>
          <!--begin::Card title-->
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
                <th class="text-center min-w-70px">Sr.no</th>
                <th class="text-center min-w-125px">User name</th>
                <th class="text-center min-w-125px">Recipe Name</th>
                <th class="text-center min-w-125px">Rating</th>
                <th class="text-center min-w-125px">Comment</th>
                <th class="text-center min-w-125px">Enable/Disable</th>
              </tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">
              <?php  $counter = 1;?>
              <?php foreach ($Creviews as $review): ?>
                <!-- begin::tr -->
                <tr>
                  <td class="text-center">{{ $counter++ }}</td>
                  <td class="text-center pe-0">{{ $review->user->name }}</td>
                  <td class="text-center pe-0">{{ $review->recipe->recipe_name }} </td>

                  <td class="pe-0" data-order="rating-5">
                    <div class="rating justify-content-center">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $review->rating)
                              <div class="rating-label checked">
                                <i class="ki-duotone ki-star fs-3"></i>
                              </div>
                            @else
                              <div class="rating-label">
                                <i class="ki-duotone ki-star fs-3"></i>
                              </div>
                            @endif
                        @endfor
                    </div>
                  </td>
                  <td class=" text-center">
                    <span style="font-style:justify">
                        {{ Str::substr($review->review, 0, 10) }}

                        @if(Str::length($review->review) > 10)
                          <span class="dots">...</span>
                          <span class="more-text" style="display:none;">{{ Str::substr($review->review, 10) }}</span>
                        @endif
                    </span>
                    <a href="javascript:;" onclick="toggleReadMore(this)" class="read-more-btn">Read More</a>
                  </td>
                  <!--begin::Switch-->
                  <td>
                    <!-- <div class="switchedit d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#kt_modal_Enable/Disable_Review0">
                      <label class="switch">
                        <button class="buttonslider ms-5">
                          <input type="checkbox" name="isEnable"  checked  style="display: none;">
                          <span class="slider round"></span>
                        </button>
                      </label>
                    </div> -->
                    <div class="switchedit d-flex justify-content-center">
                      <label class="switch">
                        <button class="buttonslider ms-5">
                          <input type="checkbox" name="isEnable"  checked  style="display: none;">
                          <span class="slider round"></span>
                        </button>
                      </label>
                    </div>
                  </td>
                  <!--end::Switch-->

                </tr>
                <!-- end::tr -->

                <!-- begin::Modal - Enable/Disable Review -->
                <div class="modal fade" id="kt_modal_Enable/Disable_Review0" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title fs-1" id="confirmLabel">Confirmation</h5>
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                          <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
                        </div>
                        <!--end::Close-->
                      </div>

                      <div class="modal-body">

                        <p class="message text-center fs-3">Are you sure..!! you want to disable this review ...?</p>

                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-lg text-white" data-bs-dismiss="modal">Close</button>
                        <a href="/enable-review?id=66f2cd61f40f491f2582e9cf">

                          <button type="button" class="btn btn-danger btn-lg">Disable</button>

                        </a>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!--end::Modal - Enable/Disable Review-->
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

</div>

<script type="text/javascript">
function toggleReadMore(button) {
  const content = button.previousElementSibling; // Gets the review content
  const dots = content.querySelector('.dots');
  const moreText = content.querySelector('.more-text');

  if (moreText.style.display === 'none') {
      // Expand to show full content
      moreText.style.display = 'inline';
      dots.style.display = 'none';
      button.textContent = 'Read Less';
  } else {
      // Collapse back to short content
      moreText.style.display = 'none';
      dots.style.display = 'inline';
      button.textContent = 'Read More';
  }
}
</script>

@endsection

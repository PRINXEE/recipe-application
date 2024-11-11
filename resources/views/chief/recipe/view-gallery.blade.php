@extends('chief.layouts.master')
@section('title', 'Chief | My Recipe Gallery')
@section('content')

<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
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
              <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                <a href="/recipe" class="text-hover-primary text-gray-700">View All Recipe</a>
              </li>
              <!--end::Item-->
              <!--begin::Item-->
              <li class="breadcrumb-item">
                <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
              </li>
              <!--end::Item-->
              <!--begin::Item-->
              <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Gallery</li>
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

        <!-- begin::Add image -->
        <div class="d-flex justify-content-start mb-7">

          <!--begin::Add  button -->
          <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#kt_modal_add_gallery">
            <i class="ki-duotone ki-plus fs-2"></i>Add Image</button>
          <!--end::Add  button -->

        </div>
        <!-- ens::Add image -->

        <!-- flash message -->

        <!-- complete flash message -->

        <!-- flash message -->

        <!-- complete flash message -->

        <!--begin::Row-->
        <div class="row">



          <?php foreach ($gallery->gallery_image as $key => $image): ?>
            <!-- begin::image -->
            <div class="col-lg-3 col-xxl-3 mb-10">
              <!--begin::Budget-->
              <div class="card border-hover-primary">
                <div class="card-body h-350px p-0">
                  <div class="image-body px-5 user-select-none">
                    <a href="{{ Storage::url($image) }}" data-fslightbox="lightbox-basic">
                      <img src="{{ Storage::url($image) }}" alt="{{ basename($image) }}" class="imageedit overflow-hidden">
                    </a>
                  </div>
                  <div class="separator separator-dashed border-gray-300"></div>
                  <div class="fs-6 d-flex justify-content-center mt-5">
                    <!-- Edit and Delete Buttons with Unique Modal IDs -->
                    <a class="btn btn-light-success mx-2" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_gallery_<?= $key ?>">Edit</a>
                    <a class="btn btn-light-danger mx-2" data-bs-toggle="modal" data-bs-target="#kt_modal_delete_gallery_<?= $key ?>">Delete</a>
                  </div>
                </div>
              </div>
              <!--end::Budget-->
            </div>
            <!-- end::image -->

            <!--begin::Modal - edit gallery-->
            <div class="modal fade" id="kt_modal_edit_gallery_<?= $key ?>" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
              <!--begin::Modal-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title fs-1">Edit Gallery Image</h5>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                      <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                  </div>
                  <!-- begin:: form -->
                  <form action="{{ route('update-my-recipe-gallery-image') }}" method="post" enctype="multipart/form-data" class="m-0">
                    <!-- begin::modal-body -->
                    <div class="modal-body">
                      <!-- CSRF Token -->
                      <?= csrf_field() ?>

                      <!--begin::Input group-->
                      <input type="hidden" name="id" value="<?= $gallery->id ?>">
                      <!--  end:: Input group -->

                      <!-- begin::Input group -->
                      <input type="hidden" name="oldImage" value="<?= $image ?>">
                      <!-- end::Input group -->

                      <!-- begin::Input group -->
                      <input type="file" name="update_gallery_Image" id="imageInput" class="file-upload-default" accept=".png, .jpg, .jpeg">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" placeholder="Choose an image" value="<?= basename($image) ?>">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary buttonedit" type="button">Upload</button>
                        </span>
                      </div>
                      <!-- end::Input group -->
                    </div>
                    <!-- end::modal-body -->

                    <!-- begin::modal-footer -->
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-success">Edit</button>
                    </div>
                    <!-- end::modal-footer -->
                  </form>
                  <!-- end::form -->
                </div>
              </div>
            </div>
            <!--end::Modal -edit gallery-->

            <!--begin::Modal - delete gallery-->
            <div class="modal fade" id="kt_modal_delete_gallery_<?= $key ?>" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
              <!--begin::Modal-->
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title fs-1">Delete Gallery Image</h5>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                      <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                  </div>
                  <!-- begin::modal-body -->
                  <div class="modal-body">
                    <p class="message text-center fs-3 mb-0">Are you sure you want to delete this <b><?= basename($image) ?></b> image?</p>
                  </div>
                  <!-- end::modal-body -->
                  <!-- begin::modal-footer -->
                  <div class="modal-footer">
                    <a class="btn btn-danger" href="{{ route('delete-my-recipe-gallery-image', ['id' => $gallery->id, 'name' => $image]) }}">
                      <!-- <button type="button" class="btn btn-danger">Delete</button> -->
                      Delete
                    </a>
                  </div>
                  <!-- end::modal-footer -->
                </div>
              </div>
            </div>
            <!--end::Modal -delete gallery-->

          <?php endforeach; ?>

        </div>
        <!-- end:row -->

        <!-- begin::back button -->
        <a href="{{ route('view-my-recipe') }}"> <button type="button" class="btn btn-primary mt-10">Back</button></a>
        <!-- end:back button -->
      </div>
      <!--end::Content container-->
    </div>
    <!--end::Content -->

  </div>
  <!--end::Content wrapper-->
</div>
<!--end::Main-->

<!--begin::Modal - Add gallery-->
<div class="modal fade" id="kt_modal_add_gallery" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
  <!--begin::Modal-->
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-1">Add Gallery Image</h5>
        <!--begin::Close-->
        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
          <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
        </div>
        <!--end::Close-->
      </div>
      <!-- begin:form -->
      <form action="{{ route('add-gallery-image') }}" enctype="multipart/form-data" method="post" class="m-0">
        @csrf

        <!-- begin::modal-body -->
        <div class="modal-body">
          <!-- begin:: Input group -->
          <input type="hidden" name="id" value="{{ $gallery->id }}">
          <!-- end::Tnpur group -->

          <!-- begin::Input Group -->
          <input type="file" name="add_gallery_Image[]" id="imageInput" class="file-upload-default" accept=".png, .jpg, .jpeg" multiple>
          <div class="input-group col-xs-12">
            <input type="text" class="form-control file-upload-info" placeholder="Choose multiple images (Ctrl + Right-click)" readonly>
            <span class="input-group-append">
              <button class="file-upload-browse btn btn-primary buttonedit" type="button">Upload</button>
            </span>
          </div>
          <!-- end::Inpur Group -->

        </div>
        <!-- end::modal-body -->

        <!-- begin::modal-footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
        <!-- end::modal-footer -->

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

@endsection

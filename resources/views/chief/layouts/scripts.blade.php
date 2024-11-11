<!-- partial:partials/header -->
<script>
  var hostUrl = "{{ asset('backend-assets/') }}";
</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset('backend-assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('backend-assets/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('backend-assets/js/sweetalert.min.js') }}"></script>
<!--end::Global Javascript Bundle-->

<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{ asset('backend-assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
<script src="{{ asset('backend-assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
<!--end::Vendors Javascript-->

<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('backend-assets/js/custom-file/listing.js') }}"></script>
<script src="{{ asset('backend-assets/js/custom-file/ckEditor.js') }}"></script>
<script src="{{ asset('backend-assets/js/custom-file/change-image.js') }}"></script>
<script src="{{ asset('backend-assets/js/custom-file/file-upload.js') }}"></script>
<!--end::Custom Javascript-->
<script href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.1/dist/sweetalert2.all.min.js"></script>

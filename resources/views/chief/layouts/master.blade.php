<!DOCTYPE html>
<!-- partial:partials/header -->
<?php
  use Illuminate\Support\Facades\Auth;
 ?>
<?php if ( Auth::check() && Auth::user()->role_id == 2): ?>
<html lang="en">
<!--begin::Head-->

<head>
  <base href="" />
  <title>@yield('title')</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />



   <!-- Include the JS & CSS -->
  <!-- <link rel="stylesheet" href="{{ asset('backend-assets/richtexteditor/rte_theme_default.css') }}" /> -->

  @include('chief.layouts.links')

</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" data-kt-app-aside-enabled="true" data-kt-app-aside-fixed="true" data-kt-app-aside-push-toolbar="true" data-kt-app-aside-push-footer="true" class="app-default">
  <!--begin::Theme mode setup on page load-->
  <script>
    var defaultThemeMode = "light";
    var themeMode;
    if (document.documentElement) {
      if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
        themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
      } else {
        if (localStorage.getItem("data-bs-theme") !== null) {
          themeMode = localStorage.getItem("data-bs-theme");
        } else {
          themeMode = defaultThemeMode;
        }
      }
      if (themeMode === "system") {
        themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
      }
      document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
  </script>
  <!--end::Theme mode setup on page load-->

<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">

  <!--begin::Page-->
  <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
    <!--begin::navbar-->
    <div id="kt_app_header" class="app-header d-flex flex-column flex-stack">
      <!--begin::navbar main-->
      <div class="d-flex align-items-center flex-stack flex-grow-1">
    <div class="app-header-logo d-flex align-items-center flex-stack px-lg-11 mb-2" id="kt_app_header_logo">

      <!--begin::Sidebar mobile toggle-->
      <div class="btn btn-icon btn-active-color-primary w-35px h-35px ms-3 me-2 d-flex d-lg-none" id="kt_app_sidebar_mobile_toggle">
        <i class="ki-duotone ki-abstract-14 fs-2">
          <span class="path1"></span>
          <span class="path2"></span>
        </i>
      </div>
      <!--end::Sidebar mobile toggle-->

      <!--begin::Logo-->
      <a class="app-sidebar-logo mt-5 d-flex align-items-center">
        <img alt="Logo" src="{{ asset('backend-assets/media/illustrations/sigma-1/logo.png') }}" class="h-35px theme-light-show" />
        <div class="fw-bolder text-orange fs-1 ms-2">Recipe</div>
      </a>
      <!--end::Logo-->

      <!--begin::Sidebar toggle-->
      <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-sm btn-icon btn-color-warning me-n2 d-none d-lg-flex mt-5" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
        <i class="ki-duotone ki-exit-left fs-2x rotate-180">
          <span class="path1"></span>
          <span class="path2"></span>
        </i>
      </div>
      <!--end::Sidebar toggle-->
    </div>

    <!--begin::Navbar-->
      @include('chief.layouts.header-nav')
    <!--end::Navbar-->
  </div>
      <!--end::navbar main-->
      <!--begin::Separator-->
      <div class="app-header-separator"></div>
      <!--end::Separator-->
    </div>
    <!--end::navbar-->

    <!--begin::Wrapper-->
    <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
      <!--begin::Sidebar-->
        @include('chief.layouts.nav-bar')
      <!--end::Sidebar-->

      <!--begin::Main-->
      <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
          @yield('content')
        <!--end::Content wrapper-->

        <!--begin::Footer-->
          @include('chief.layouts.nav-bar')
        <!--end::Footer-->
      </div>
      <!--end:::Main-->

    </div>
    <!--end::Wrapper-->

  </div>
  <!--end::Page-->
</div>
<!--end::App-->

<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
  <i class="ki-duotone ki-arrow-up">
    <span class="path1"></span>
    <span class="path2"></span>
  </i>
</div>
<!--end::Scrolltop-->

<!--begin::scripts-->
  @include('chief.layouts.scripts')

<script type="text/javascript">
  jQuery(document).ready(function() {
    var url = window.location;
    jQuery('div.menu-sub a[href="' + url + '"]').addClass('active');
    jQuery('div.menu-sub a').filter(function() {
      return this.href == url;
    }).addClass('active');
    jQuery('a.active').parent().addClass("test");
    jQuery('div.test').parent().parent().addClass("show here");

    jQuery('div.menu-item a[href="' + url + '"]').addClass('active');
    jQuery('div.menu-item a').filter(function() {
      return this.href == url;
    }).addClass('active');

  });
</script>

<script>
  $('#kt_docs_repeater_basic').repeater({
    initEmpty: false,

    defaultValues: {
      'text-input': 'foo'
    },

    show: function() {
      $(this).slideDown();

      // Re-init select2
      $(this).find('[data-kt-repeater="select2"]').select2();

    },

    hide: function(deleteElement) {
      $(this).slideUp(deleteElement);
    },

    ready: function() {
      // Init select2
      $('[data-kt-repeater="select2"]').select2();
    }
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('kt_modal_no_access');
    if (modal) {
      modal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget; // Button that triggered the modal
        var message = button.getAttribute('data-message'); // Extract message from data attribute
        var modalMessage = document.getElementById('modal-message');
        modalMessage.innerHTML = message; // Set the message in the modal
      });
    }

  });
</script>

<!--end::scripts-->


</body>
<!--end::Body-->
</html>

<?php else: ?>
  <script type="text/javascript">
      var homePage = location.href = "{{ route('/') }}"
      window.onload = homePage;
  </script>
<?php endif; ?>

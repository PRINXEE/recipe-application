<div class="app-navbar flex-grow-1 justify-content-end" id="kt_app_header_navbar">
  <div class="app-navbar-item d-flex align-items-stretch flex-lg-grow-1 me-2 me-lg-0">
    <!--begin::Search-->
    <div id="kt_header_search" class="header-search d-flex align-items-center w-lg-350px" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="true" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
      <!--begin::Tablet and mobile search toggle-->
      <div data-kt-search-element="toggle" class="search-toggle-mobile d-flex d-lg-none align-items-center">
        <div class="d-flex">
          <i class="ki-duotone ki-magnifier fs-1 fs-1">
            <span class="path1"></span>
            <span class="path2"></span>
          </i>
        </div>
      </div>
      <!--end::Tablet and mobile search toggle-->
      <!--begin::Form(use d-none d-lg-block classes for responsive search)-->
      <form data-kt-search-element="form" class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
        <!--begin::Hidden input(Added to disable form autocomplete)-->
        <input type="hidden" />
        <!--end::Hidden input-->
        <!--begin::Icon-->
        <i class="ki-duotone ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5">
          <span class="path1"></span>
          <span class="path2"></span>
        </i>
        <!--end::Icon-->
        <!--begin::Input-->
        <input type="text" class="search-input form-control form-control border-0 h-lg-40px ps-13" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
        <!--end::Input-->
        <!--begin::Spinner-->
        <span class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
          <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
        </span>
        <!--end::Spinner-->
        <!--begin::Reset-->
        <span class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
          <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
            <span class="path1"></span>
            <span class="path2"></span>
          </i>
        </span>
        <!--end::Reset-->
      </form>
      <!--end::Form-->

    </div>
    <!--end::Search-->
  </div>


  <!--begin::User menu-->
  <div class="app-navbar-item ms-lg-3 me-lg-10" id="kt_header_user_menu_toggle">
    <!--begin::Menu wrapper-->
    <div class="cursor-pointer symbol symbol-40px symbol-lg-40px border card-boxshadow " data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
      <img  src="{{ Storage::url(Auth::user()->profile_image) }}" alt="logo"  />
    </div>
    <!--begin::User account menu-->
    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
      <!--begin::Menu item-->
      <div class="menu-item px-3">
        <div class="menu-content d-flex align-items-center px-3">
          <!--begin::Avatar-->
          <div class="symbol symbol-50px me-5 border card-boxshadow">
            <img  src="{{ Storage::url(Auth::user()->profile_image) }}" alt="logo" />
          </div>
          <!--end::Avatar-->
          <!--begin::Username-->
          <div class="d-flex flex-column">
            <div class="fw-bold d-flex align-items-center fs-5">{{ Auth::user()->name }}
              <!-- <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span> -->
            </div>
            <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
              {{ Auth::user()->email }}
            </a>
          </div>
          <!--end::Username-->
        </div>
      </div>
      <!--end::Menu item-->
      <!--begin::Menu separator-->
      <div class="separator my-2"></div>
      <!--end::Menu separator-->
       <!--begin::Menu item-->
    <div class="menu-item px-5">
      <a href="{{ route('profile') }}" class="menu-link px-5">My Profile</a>
    </div>
    <!--end::Menu item-->


    <!--begin::Menu item-->
    <div class="menu-item px-5">
      <a href="{{ route('change-password') }}" class="menu-link px-5">Change Password</a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5">
      <a class="menu-link px-5" href="{{ route('logout') }}"
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">Sign Out
       </a>
       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
           @csrf
       </form>
    </div>
    <!--end::Menu item-->
    </div>
    <!--end::User account menu-->
    <!--end::Menu wrapper-->
  </div>
  <!--end::User menu-->


  <!--begin::Header menu toggle-->
  <div class="app-navbar-item ms-3 ms-lg-4 ms-n2 me-3 d-flex d-lg-none">
    <div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" id="kt_app_aside_mobile_toggle">
      <i class="ki-duotone ki-burger-menu-2 fs-2">
        <span class="path1"></span>
        <span class="path2"></span>
        <span class="path3"></span>
        <span class="path4"></span>
        <span class="path5"></span>
        <span class="path6"></span>
        <span class="path7"></span>
        <span class="path8"></span>
        <span class="path9"></span>
        <span class="path10"></span>
      </i>
    </div>
  </div>
  <!--end::Header menu toggle-->
</div>

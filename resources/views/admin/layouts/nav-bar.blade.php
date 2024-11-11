<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
  <!--begin::Main-->
  <div class="d-flex flex-column justify-content-between h-100 hover-scroll-overlay-y my-2 d-flex flex-column" id="kt_app_sidebar_main" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header" data-kt-scroll-wrappers="#kt_app_main" data-kt-scroll-offset="5px">
  <!--begin::Sidebar menu-->
  <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false" class="flex-column-fluid menu menu-sub-indention menu-column menu-rounded menu-active-bg mb-7">


    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
      <!--begin:Menu item-->
      <div class="menu-item active">
        <!--begin:Menu link-->
        <a class="menu-link " href="/dashboard" title="Dashboard" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
          <span class="menu-icon">
            <i class="fa-solid fa-house fs-2"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
        <!--end:Menu link-->
      </div>
      <!--end:Menu item-->
    </div>

    <!--begin:Menu item-->
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
      <!--begin:Menu link-->
      <span class="menu-link">
        <span class="menu-icon">
          <i class="ki-solid ki-notepad-edit fs-1"></i>
        </span>
        <span class="menu-title">Intro</span>
        <span class="menu-arrow"></span>
      </span>
      <!--end:Menu link-->
      <!--begin:Menu sub-->
      <div class="menu-sub menu-sub-accordion">

        <!--begin:Menu item-->
        <div class="menu-item">
          <!--begin:Menu link-->
          <a class="menu-link" href="/intro" title="View All Intro" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
            <span class="menu-bullet">
              <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">View All Intro</span>
          </a>
          <!--end:Menu link-->
        </div>
        <!--end:Menu item-->

      </div>
      <!--end:Menu sub-->
    </div>
    <!--end:Menu item-->

    <!--begin:Menu item-->
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
      <!--begin:Menu link-->
      <span class="menu-link">
        <span class="menu-icon">
          <i class="ki-solid ki-category fs-1"></i>
        </span>
        <span class="menu-title">Category</span>
        <span class="menu-arrow"></span>
      </span>
      <!--end:Menu link-->
      <!--begin:Menu sub-->
      <div class="menu-sub menu-sub-accordion">
        <!--begin:Menu item-->
        <div class="menu-item">
          <!--begin:Menu link-->
          <a class="menu-link" href="{{ route('recipe-cateogry') }}" title="View All Category" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
            <span class="menu-bullet">
              <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">View All Category</span>
          </a>
          <!--end:Menu link-->
        </div>
        <!--end:Menu item-->

      </div>
      <!--end:Menu sub-->
    </div>
    <!--end:Menu item-->

    <!--begin:Menu item-->
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
      <!--begin:Menu link-->
      <span class="menu-link">
        <span class="menu-icon">
          <i class="fa-solid fa-utensils fs-1"></i>
        </span>
        <span class="menu-title">Cuisines</span>
        <span class="menu-arrow"></span>
      </span>
      <!--end:Menu link-->
      <!--begin:Menu sub-->
      <div class="menu-sub menu-sub-accordion">
        <!--begin:Menu item-->
        <div class="menu-item">
          <!--begin:Menu link-->
          <a class="menu-link" href="{{ route('recipe-cuisine') }}" title="View All Cuisines" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
            <span class="menu-bullet">
              <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">View All Cuisines</span>
          </a>
          <!--end:Menu link-->
        </div>
        <!--end:Menu item-->

      </div>
      <!--end:Menu sub-->
    </div>
    <!--end:Menu item-->

    <!--begin:Menu item-->
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
      <!--begin:Menu link-->
      <span class="menu-link">
        <span class="menu-icon">
          <i class="ki-solid ki-book-open fs-1 "></i>
        </span>
        <span class="menu-title">Recipe</span>
        <span class="menu-arrow"></span>
      </span>
      <!--end:Menu link-->
      <!--begin:Menu sub-->
      <div class="menu-sub menu-sub-accordion">
        <!--begin:Menu item-->
        <div class="menu-item">
          <!--begin:Menu link-->
          <a class="menu-link" href="{{ route('add-recipe') }}" title="Add Recipe" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
            <span class="menu-bullet">
              <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">Add Recipe</span>
          </a>
          <!--end:Menu link-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div class="menu-item">
          <!--begin:Menu link-->
          <a class="menu-link" href="{{ route('recipe') }}" title="View All Recipe" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
            <span class="menu-bullet">
              <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">View All Recipe</span>
          </a>
          <!--end:Menu link-->
        </div>
        <!--end:Menu item-->

      </div>
      <!--end:Menu sub-->
    </div>
    <!--end:Menu item-->

    <!--begin:Menu item-->
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
      <!--begin:Menu link-->
      <span class="menu-link">
        <span class="menu-icon">
          <i class="ki-solid ki-star fs-1"></i>
        </span>
        <span class="menu-title">Reviews</span>
        <span class="menu-arrow"></span>
      </span>
      <!--end:Menu link-->
      <!--begin:Menu sub-->
      <div class="menu-sub menu-sub-accordion">
        <!--begin:Menu item-->
        <div class="menu-item">
          <!--begin:Menu link-->
          <a class="menu-link" href="{{ route('all_reviews') }}" title="View All Review" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
            <span class="menu-bullet">
              <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">View All Review</span>
          </a>
          <!--end:Menu link-->
        </div>
        <!--end:Menu item-->
      </div>
      <!--end:Menu sub-->
    </div>
    <!--end:Menu item-->

    <!--begin:Menu item-->
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
      <!--begin:Menu link-->
      <span class="menu-link">
        <span class="menu-icon">
          <i class="ki-solid ki-user-square fs-1"></i>
        </span>
        <span class="menu-title">User</span>
        <span class="menu-arrow"></span>
      </span>
      <!--end:Menu link-->

      <!--begin:Menu sub-->
      <div class="menu-sub menu-sub-accordion">
        <!--begin:Menu item-->
        <div class="menu-item">
          <!--begin:Menu link-->
          <a class="menu-link" href="{{ route('users') }}" title="View All User" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
            <span class="menu-bullet">
              <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">View All User</span>
          </a>
          <!--end:Menu link-->
        </div>
        <!--end:Menu item-->
      </div>
      <!--end:Menu sub-->
    </div>
    <!--end:Menu item-->

    <!--begin:Menu item-->
    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
      <!--begin:Menu link-->
      <span class="menu-link">
        <span class="menu-icon">
          <i class="ki-solid ki-question fs-2x"></i>
        </span>
        <span class="menu-title">FAQ</span>
        <span class="menu-arrow"></span>
      </span>
      <!--end:Menu link-->
      <!--begin:Menu sub-->
      <div class="menu-sub menu-sub-accordion">

        <!--begin:Menu item-->
        <div class="menu-item">
          <!--begin:Menu link-->
          <a class="menu-link" href="{{ route('add-faq') }}" title="Add FAQ" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
            <span class="menu-bullet">
              <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">Add FAQ</span>
          </a>
          <!--end:Menu link-->
        </div>
        <!--end:Menu item-->

        <!--begin:Menu item-->
        <div class="menu-item">
          <!--begin:Menu link-->
          <a class="menu-link" href="/faq" title="View All FAQ" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
            <span class="menu-bullet">
              <span class="bullet bullet-dot"></span>
            </span>
            <span class="menu-title">View All FAQ</span>
          </a>
          <!--end:Menu link-->
        </div>
        <!--end:Menu item-->

      </div>
      <!--end:Menu sub-->
    </div>
    <!--end:Menu item-->

  </div>
  <!--end::Sidebar menu-->
  </div>
  <!--end::Main-->
</div>

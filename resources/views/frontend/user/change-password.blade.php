<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ombe.dexignzone.com/bootstrap/xhtml/change-password.html by HTTrack Website Copier/3.x [XR&CO'2017], Mon, 07 Oct 2024 11:58:55 GMT -->
<head>

  <!-- Title -->
<title>Recip Application</title>

<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="DexignZone">
<meta name="robots" content="index, follow">

<meta name="keywords" content="android, ios, mobile, mobile template, mobile app, ui kit, dark layout, app, delivery, ecommerce, material design, mobile, mobile web, order, phonegap, pwa, store, web app, Ombe, coffee app, coffee template, coffee shop, mobile UI, coffee design, app template, responsive design, coffee showcase, style app, trendy app, modern UI, technology, User-Friendly Interface, Coffee Shop App, PWA (Progressive Web App), Mobile Ordering, Coffee Experience, Digital Menu, Innovative Technology, App Development, Coffee Experience, cafe, bootatrap, Bootstrap Framework, UI/UX Design, Coffee Shop Technology, Online Presence, Coffee Shop Website, Cafe Template, Mobile App Design, Web Application, Digital Presence, ">

<meta name="description" content="Discover the perfect blend of design and functionality with Ombe, a Coffee Shop Mobile App Template crafted with Bootstrap and enhanced with Progressive Web App (PWA) capabilities. Elevate your coffee shop's online presence with a seamless, responsive, and feature-rich template. Explore a modern design, user-friendly interface, and PWA technology for an immersive mobile experience. Brew success for your coffee shop effortlessly – Ombe is the ideal template to caffeinate your digital presence.">

<meta property="og:title" content="Ombe- Coffee Shop Mobile App Template (Bootstrap + PWA) | DexignZone">
<meta property="og:description" content="Discover the perfect blend of design and functionality with Ombe, a Coffee Shop Mobile App Template crafted with Bootstrap and enhanced with Progressive Web App (PWA) capabilities. Elevate your coffee shop's online presence with a seamless, responsive, and feature-rich template. Explore a modern design, user-friendly interface, and PWA technology for an immersive mobile experience. Brew success for your coffee shop effortlessly – Ombe is the ideal template to caffeinate your digital presence.">

<meta property="og:image" content="../../xhtml/social-image.png">

<meta name="format-detection" content="telephone=no">

<meta name="twitter:title" content="Ombe- Coffee Shop Mobile App Template (Bootstrap + PWA) | DexignZone">
<meta name="twitter:description" content="Discover the perfect blend of design and functionality with Ombe, a Coffee Shop Mobile App Template crafted with Bootstrap and enhanced with Progressive Web App (PWA) capabilities. Elevate your coffee shop's online presence with a seamless, responsive, and feature-rich template. Explore a modern design, user-friendly interface, and PWA technology for an immersive mobile experience. Brew success for your coffee shop effortlessly – Ombe is the ideal template to caffeinate your digital presence.">

<meta name="twitter:image" content="../../xhtml/social-image.png">
<meta name="twitter:card" content="summary_large_image">

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">

<!-- Favicons Icon -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend-assets/images/logo.png') }}">

<!-- Globle Stylesheets -->

<!-- Stylesheets -->
  <link rel="stylesheet" class="main-css" type="text/css" href="{{ asset('frontend-assets/css/style.css') }}">

  <!-- Google Fonts -->
<link rel="preconnect" href="../../../external.html?link=https://fonts.googleapis.com/">
<link rel="preconnect" href="../../../external.html?link=https://fonts.gstatic.com/" crossorigin>
<link href="../../../external.html?link=https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&amp;family=Raleway:wght@300;400;500&amp;display=swap" rel="stylesheet">

</head>
<body>
<div class="page-wrapper">
<!-- Preloader -->
<div id="preloader">
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>
</div>
  <!-- Preloader end-->

<!-- Main Content Start  -->
<main class="page-content">
  <form id="changePassword" method="post" action="{{ route('update-user-password') }}">
      @csrf
      <div class="container py-0">
        <div class="dz-authentication-area">
          <div class="main-logo">
            <a href="javascript:void(0);" class="back-btn">
              <i class="feather icon-arrow-left"></i>
            </a>
            <div class="logo">
              <img src="{{ asset('frontend-assets/images/app-logo/logo.png') }}" alt="logo">
            </div>
          </div>
          <div class="section-head">
            <h3 class="title">Enter New Password</h3>
            <p>Your new password must be different from previously used password.</p>
          </div>
          <div class="account-section">

              <div class="mb-4">
                <label class="form-label" for="dz-password">Current Password</label>
                <div class="input-group input-group-icon input-mini input-lg">
                  <input type="password" id="dz-password" name="current_password" class="form-control dz-password">
                  <span class="input-group-text show-pass">
                    <i class="icon feather icon-eye-off eye-close"></i>
                    <i class="icon feather icon-eye eye-open"></i>
                  </span>
                </div>
              </div>

              <div>
                <label class="form-label" for="dz-password2">New Password</label>
                <div class="input-group input-group-icon input-mini input-lg">
                  <input type="password" id="new_password" name="new_password" class="form-control dz-password">
                  <span class="input-group-text show-pass">
                    <i class="icon feather icon-eye-off eye-close"></i>
                    <i class="icon feather icon-eye eye-open"></i>
                  </span>
                </div>
              </div>

              <div>
                <label class="form-label" for="dz-password2">Confirm Password</label>
                <div class="input-group input-group-icon input-mini input-lg">
                  <input type="password" id="confirm_password" class="form-control dz-password" name="confirm_password">
                  <span class="input-group-text show-pass">
                    <i class="icon feather icon-eye-off eye-close"></i>
                    <i class="icon feather icon-eye eye-open"></i>
                  </span>
                </div>
              </div>

          </div>
        </div>
          </div>
            <div class="bottom-btn pb-3">
              <button type="submit" class="btn btn-thin btn-lg w-100 btn-primary rounded-xl">Continue</button>
              <!-- <div class="text-center mt-3 form-text">Back To <a href="sign-in.html" class="text-underline link">Sign In</a></div> -->
            </div>
    </form>
</main>
<!-- Main Content End  -->

</div>
<!--**********************************
  Scripts
***********************************-->
<script src="{{ asset('frontend-assets/js/jquery.js') }}"></script>
<script src="{{ asset('frontend-assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend-assets/vendor/swiper/swiper-bundle.min.js') }}"></script><!-- Swiper -->
<script src="{{ asset('frontend-assets/js/dz.carousel.js') }}"></script><!-- Swiper -->
<script src="{{ asset('frontend-assets/js/settings.js') }}"></script>
<script src="{{ asset('frontend-assets/js/custom.js') }}"></script>

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



</body>

<!-- Mirrored from ombe.dexignzone.com/bootstrap/xhtml/change-password.html by HTTrack Website Copier/3.x [XR&CO'2017], Mon, 07 Oct 2024 11:58:55 GMT -->
</html>

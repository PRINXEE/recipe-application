<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ombe.dexignzone.com/bootstrap/xhtml/welcome.html by HTTrack Website Copier/3.x [XR&CO'2017], Mon, 07 Oct 2024 11:58:47 GMT -->
<head>

    <!-- Title -->
	<title>Recipe Auth Page</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="index, follow">

	<meta name="keywords" content="android, ios, mobile, mobile template, mobile app, ui kit, dark layout, app, delivery, ecommerce, material design, mobile, mobile web, order, phonegap, pwa, store, web app, Ombe, coffee app, coffee template, coffee shop, mobile UI, coffee design, app template, responsive design, coffee showcase, style app, trendy app, modern UI, technology, User-Friendly Interface, Coffee Shop App, PWA (Progressive Web App), Mobile Ordering, Coffee Experience, Digital Menu, Innovative Technology, App Development, Coffee Experience, cafe, bootatrap, Bootstrap Framework, UI/UX Design, Coffee Shop Technology, Online Presence, Coffee Shop Website, Cafe Template, Mobile App Design, Web Application, Digital Presence, ">

	<meta name="description" content="Discover the perfect blend of design and functionality with Ombe, a Coffee Shop Mobile App Template crafted with Bootstrap and enhanced with Progressive Web App (PWA) capabilities. Elevate your coffee shop's online presence with a seamless, responsive, and feature-rich template. Explore a modern design, user-friendly interface, and PWA technology for an immersive mobile experience. Brew success for your coffee shop effortlessly – Ombe is the ideal template to caffeinate your digital presence.">

	<meta property="og:title" content="Ombe- Coffee Shop Mobile App Template (Bootstrap + PWA) | DexignZone">
	<meta property="og:description" content="Discover the perfect blend of design and functionality with Ombe, a Coffee Shop Mobile App Template crafted with Bootstrap and enhanced with Progressive Web App (PWA) capabilities. Elevate your coffee shop's online presence with a seamless, responsive, and feature-rich template. Explore a modern design, user-friendly interface, and PWA technology for an immersive mobile experience. Brew success for your coffee shop effortlessly – Ombe is the ideal template to caffeinate your digital presence.">

	<meta property="og:image" content="../../xhtml/social-image.png') }}">

	<meta name="format-detection" content="telephone=no">

	<meta name="twitter:title" content="Ombe- Coffee Shop Mobile App Template (Bootstrap + PWA) | DexignZone">
	<meta name="twitter:description" content="Discover the perfect blend of design and functionality with Ombe, a Coffee Shop Mobile App Template crafted with Bootstrap and enhanced with Progressive Web App (PWA) capabilities. Elevate your coffee shop's online presence with a seamless, responsive, and feature-rich template. Explore a modern design, user-friendly interface, and PWA technology for an immersive mobile experience. Brew success for your coffee shop effortlessly – Ombe is the ideal template to caffeinate your digital presence.">

	<meta name="twitter:image" content="../../xhtml/social-image.png') }}">
	<meta name="twitter:card" content="summary_large_image">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">

	<!-- Favicons Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend-assets/images/logo.png') }}">

    <!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('frontend-assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend-assets/css/style.css') }}">

	<!-- Animte -->
    <link rel="stylesheet" href="{{ asset('frontend-assets/vendor/wow/css/libs/animate.css') }}">

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

    <!-- Welcome Start -->
	<main class="page-content">
		<div class="container py-0">
			<div class="welcome-area row">
				<div class="welcome-inner-2 col" style="background-image: url('{{ asset('frontend-assets/images/background/bg3.png') }}'); background-size: cover; background-repeat: no-repeat;">
					<div class="main-wrapper">
						<div class="main-logo">
							<div class="logo-icon">
								<img src="{{ asset('frontend-assets/images/IMG-20241021-WA0003-removebg-preview.png') }}" alt="logo">
							</div>
						</div>
					</div>
					<div class="dz-button-group">
						<h3 class="title">Start your day with <br> Culinay Craft</h3>
						<a href="{{ route('login') }}" class="btn btn-primary btn-social btn-thin rounded-xl btn-lg w-100"><img src="{{ asset('frontend-assets/images/social/inbox.png') }}" alt=""><span>Login With Email</span></a>
						<a href="javascript:;" class="btn btn-facebook btn-primary btn-social btn-thin rounded-xl btn-lg w-100"><img src="{{ asset('frontend-assets/images/social/facebook.png') }}" alt=""><span>Login with facebook</span></a>
						<a href="javascript:;" class="btn btn-white btn-social btn-thin rounded-xl btn-lg w-100"><img src="{{ asset('frontend-assets/images/social/google-mail.png') }}" alt=""><span class="text-dark">Login with Google</span></a>
					</div>
				</div>
			</div>
		</div>
	</main>
    <!-- Welcome End -->

</div>
<!--**********************************
    Scripts
***********************************-->
<script src="{{ asset('frontend-assets/js/jquery.js') }}"></script>
<script src="{{ asset('frontend-assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend-assets/vendor/swiper/swiper-bundle.min.js') }}"></script><!-- Swiper -->
<script src="{{ asset('frontend-assets/js/dz.carousel.js') }}"></script><!-- Swiper -->
<script src="{{ asset('frontend-assets/vendor/wow/dist/wow.min.js') }}"></script>
<script src="{{ asset('frontend-assets/js/settings.js') }}"></script>
<script src="{{ asset('frontend-assets/js/custom.js') }}"></script>
<script>
    new WOW().init();

    var wow = new WOW(
    {
      boxClass:     'wow',       // animated element css class (default is wow)
      animateClass: 'animated',  // animation css class (default is animated)
      offset:       50,          // distance to the element when triggering the animation (default is 0)
      mobile:       false        // trigger animations on mobile devices (true is default)
    });
    wow.init();
</script>
</body>

<!-- Mirrored from ombe.dexignzone.com/bootstrap/xhtml/welcome.html by HTTrack Website Copier/3.x [XR&CO'2017], Mon, 07 Oct 2024 11:58:55 GMT -->
</html>

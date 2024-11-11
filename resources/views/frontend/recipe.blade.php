<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ombe.dexignzone.com/bootstrap/xhtml/products.html by HTTrack Website Copier/3.x [XR&CO'2017], Mon, 07 Oct 2024 11:57:23 GMT -->
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

    <!-- Global CSS -->
	<link rel="stylesheet" href="{{ asset('frontend-assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend-assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend-assets/vendor/nouislider/nouislider.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend-assets/vendor/swiper/swiper-bundle.min.css') }}">

	<!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend-assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend-assets/css/swiper.min.css') }}">
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

	<!-- Header -->
	<header class="header header-fixed">
		<div class="header-content">
			<div class="left-content">
				<a href="javascript:void(0);" class="back-btn">
					<i class="feather icon-arrow-left"></i>
				</a>
			</div>
			<div class="mid-content">
				<h4 class="title">Recipe</h4>
			</div>
			<div class="right-content d-flex align-items-center gap-4">
				<a href="javascript:void(0);" class="font-24">
					<i class="font-w700 feather icon-more-vertical-"></i>
				</a>
			</div>
		</div>
	</header>
	<!-- Header -->

	<!-- Main Content Start -->
	<main class="page-content space-top">
		<div class="container">
			<!-- SearchBox -->
			<div class="search-box">
				<form class="" action="{{ route('search') }}" method="GET">
					<div class="input-group input-radius input-rounded input-lg">
							<input type="search" name="search" placeholder="Search for recipes" class="form-control search">
						<span class="input-group-text">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="../../../external.html?link=http://www.w3.org/2000/svg">
								<path d="M9.65925 19.3102C11.8044 19.3103 13.8882 18.5946 15.5806 17.2764L21.9653 23.6612C22.4423 24.1218 23.2023 24.1086 23.663 23.6316C24.1123 23.1664 24.1123 22.4288 23.663 21.9635L17.2782 15.5788C20.5491 11.3682 19.7874 5.30333 15.5769 2.03243C11.3663 -1.23848 5.30149 -0.476799 2.03058 3.73374C-1.24033 7.94428 -0.478646 14.0092 3.73189 17.2801C5.42702 18.5969 7.51269 19.3113 9.65925 19.3102ZM4.52915 4.5273C7.36245 1.69394 11.9561 1.69389 14.7895 4.5272C17.6229 7.3605 17.6229 11.9542 14.7896 14.7876C11.9563 17.6209 7.36261 17.621 4.52925 14.7877C4.5292 14.7876 4.5292 14.7876 4.52915 14.7876C1.69584 11.9749 1.67915 7.39794 4.49181 4.56464C4.50424 4.55216 4.51667 4.53973 4.52915 4.5273Z" fill="#C9C9C9"/>
							</svg>
						</span>
					</div>
				</form>
			</div>
			<!-- SearchBox -->

			<!-- Products Area -->
			<div class="dz-custom-swiper">
				<div thumbsSlider="" class="swiper mySwiper dz-tabs-swiper">
					<div class="swiper-wrapper">
            <div class="swiper-slide">
							<h5 class="title">All</h5>
						</div>
            <?php foreach ($categories as $category): ?>
              <div class="swiper-slide">
  							<h5 class="title">{{ $category->name }}</h5>
  						</div>
            <?php endforeach; ?>
					</div>
				</div>
				<div class="swiper mySwiper2 dz-tabs-swiper2">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<ul class="featured-list">
                <?php foreach ($recipes as $recipe): ?>
									@php
									    $averageRating = $recipe->reviews->avg('rating'); // Calculate average rating
									    $totalReviews = $recipe->reviews->count(); // Count total reviews
									@endphp
                  <li>
  									<div class="dz-card list">
  										<div class="dz-media">
  											<a href="javascript:;"><img src="{{ Storage::url($recipe->recipe_image) }}" alt=""></a>
  											<div class="dz-rating"><i class="fa fa-star"></i> {{ number_format($averageRating, 1) }}</div>
  										</div>
  										<div class="dz-content">
  											<div class="dz-head">
  												<h6 class="title"><a href="javascript:;">{{ $recipe->recipe_name }}</a></h6>
  												<ul class="tag-list">
  													<li><a href="javascript:void(0);">{{ $recipe->recipeCategory->name }}</a></li>
  													<li><a href="javascript:void(0);">{{ $recipe->difficulty_level }}</a></li>
  												</ul>
  											</div>
  											<ul class="dz-meta">
  												<li class="dz-price flex-1" style="font-size:15px"><i class="fa fa-clock me-1"></i>{{ $recipe->cooking_time }}</li>
  												<li>
  													<a href="{{ route('view-recipe', $recipe->id) }}" class="btn rounded-xl dz-buy-btn">
  														View
  													</a>
  												</li>
  											</ul>
  										</div>
  									</div>
  								</li>
                <?php endforeach; ?>

							</ul>
						</div>
					</div>
				</div>
        <div class="row mt-3" id="contentArea">
						<div class="card-body">
							{{ $recipes->links('vendor.pagination.bootstrap-4') }}
						</div>
        </div>

			</div>
			<!-- Products Area -->
		</div>
	</main>
	<!-- Main Content End -->
</div>
<!--**********************************
    Scripts
***********************************-->
<script src="{{ asset('frontend-assets/js/jquery.js') }}"></script>
<script src="{{ asset('frontend-assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('frontend-assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend-assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ asset('frontend-assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('frontend-assets/vendor/wnumb/wNumb.js') }}"></script><!-- WNUMB -->
<script src="{{ asset('frontend-assets/vendor/nouislider/nouislider.min.js') }}"></script><!-- NOUSLIDER MIN JS-->
<script src="{{ asset('frontend-assets/js/noui-slider.init.js') }}"></script><!-- NOUSLIDER MIN JS-->
<script src="{{ asset('frontend-assets/js/dz.carousel.js') }}"></script>
<script src="{{ asset('frontend-assets/js/settings.js') }}"></script>
<script src="{{ asset('frontend-assets/js/custom.js') }}"></script>

</body>

<!-- Mirrored from ombe.dexignzone.com/bootstrap/xhtml/products.html by HTTrack Website Copier/3.x [XR&CO'2017], Mon, 07 Oct 2024 11:57:31 GMT -->
</html>

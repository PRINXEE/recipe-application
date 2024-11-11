<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ombe.dexignzone.com/bootstrap/xhtml/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2017], Mon, 07 Oct 2024 11:58:55 GMT -->
<head>

    <!-- Title -->
	<title>Recip Registeration </title>

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
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend-assets/images/app-logo/favicon.png') }}">

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
					<h3 class="title">Create an account</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
				</div>
				<div class="account-section">
					<form class="m-b20" method="POST" action="{{ route('register') }}">
            @csrf
						<div class="mb-4">
							<label class="form-label" for="name">Full Name</label>
							<div class="input-group input-mini input-lg">
								<input type="name" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
							</div>

						</div>
						<div class="mb-4">
							<label class="form-label" for="email">Email</label>
							<div class="input-group input-mini input-lg">
								<input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
							</div>

						</div>
            <div class="mb-4">
							<label class="form-label" for="email">Role</label>
							<div class="input-group input-mini input-lg">
                <?php
                  use App\Models\Role;
                  $roles = Role::where('id', '>', 1)->get();
                  //dd($users);
                 ?>
                <select class="form-control" name="role" required>
                  <option value="">Choose a role</option>
                  <?php foreach ($roles as $role): ?>
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                  <?php endforeach; ?>
                </select>
							</div>
						</div>
						<div class="m-b30">
							<label class="form-label" for="password">Password</label>
							<div class="input-group input-mini input-lg">
								<input type="password" id="password" class="form-control dz-password @error('password') is-invalid @enderror" name="password" required >
								<span class="input-group-text show-pass">
									<i class="icon feather icon-eye-off eye-close"></i>
									<i class="icon feather icon-eye eye-open"></i>
								</span>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
							</div>

						</div>
            <div class="m-b30">
							<label class="form-label" for="password">Confirm Password</label>
							<div class="input-group input-mini input-lg">
								<input type="password" id="password-confirm" name="password_confirmation" class="form-control dz-password" required>
								<span class="input-group-text show-pass">
									<i class="icon feather icon-eye-off eye-close"></i>
									<i class="icon feather icon-eye eye-open"></i>
								</span>
							</div>
						</div>
						<button type="submit" class="btn btn-thin btn-lg w-100 btn-primary rounded-xl">Sign up</button>
					</form>
					<div class="text-center">
						<p class="form-text">By tapping “Sign Up” you accept our <a href="javascript:void(0);" class="link">terms</a> and <a href="javascript:void(0);" class="link">condition</a></p>
					</div>
				</div>
			</div>
        </div>
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
</body>

<!-- Mirrored from ombe.dexignzone.com/bootstrap/xhtml/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2017], Mon, 07 Oct 2024 11:58:55 GMT -->
</html>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ombe.dexignzone.com/bootstrap/xhtml/edit-profile.html by HTTrack Website Copier/3.x [XR&CO'2017], Mon, 07 Oct 2024 11:58:55 GMT -->
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
	<link href="{{ asset('frontend-assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('frontend-assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend-assets/vendor/imageuplodify/imageuploadify.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend-assets/vendor/swiper/swiper-bundle.min.css') }}">

	<!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend-assets/css/style.css') }}">

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
	<header class="header header-fixed border-bottom">
		<div class="header-content">
			<div class="left-content">
				<a href="javascript:void(0);" class="back-btn">
					<i class="feather icon-arrow-left"></i>
				</a>
			</div>
			<div class="mid-content">
				<h4 class="title">Edit Profile</h4>
			</div>
			<div class="right-content"></div>
		</div>
	</header>
	<!-- Header -->

	<!-- Main Content Start -->
	<form action="{{ route('update-user-profile') }}" class="form" method="post" enctype="multipart/form-data">
		@csrf
		@method('PUT')
			<main class="page-content space-top p-b80">
				<div class="container">
					<div class="edit-profile">
						<div class="profile-image">
							<div class="avatar-upload">
								<div class="avatar-preview">
									<div id="imagePreview" style="background-image: url( {{ Storage::url($profile->profile_image) }} );"></div>
									<div class="change-btn">
										<input type='file' class="form-control d-none" name="profile_image"  id="imageUpload" accept=".png, .jpg, .jpeg">
										<label for="imageUpload">
											<i class="fi fi-rr-pencil"></i>
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="mb-4">

							<!--begin::Input group-->
							<input type="hidden" name="id" value="{{ $profile->id }}">
							<!--end::Input group-->

							<label class="form-label" for="name">Full Name</label>
							<div class="input-group input-mini input-sm">
								<input type="text" id="name" name="name" value="{{ $profile->name }}" class="form-control">
							</div>
						</div>
						<div class="mb-4">
							<label class="form-label" for="phone">Mobile Number</label>
							<div class="input-group input-mini input-sm">
								<input type="tel" id="phone" name="phone_number" value="{{ $profile->phone_number }}" class="form-control">
							</div>
						</div>
						<div class="mb-4">
							<label class="form-label" for="email">Email</label>
							<div class="input-group input-mini input-sm">
								<input type="email" id="email" name="email" value="{{ $profile->email }}" class="form-control">
							</div>
						</div>
						<div class="mb-4">
							<label class="form-label" for="address">Location</label>
							<div class="input-group input-mini input-sm">
								<input type="text" id="address" class="form-control">
							</div>
						</div>
		            </div>
				</div>
			</main>
			<!-- Main Content End -->

			<!-- Footer Fixed Button -->
			<div class="footer-fixed-btn bottom-0 bg-white">
				<button type="submit" class="btn btn-lg btn-thin btn-primary rounded-xl w-100">Update Profile</button>
			</div>
			<!-- Footer Fixed Button -->
		</form>
</div>
<!--**********************************
    Scripts
***********************************-->
<script src="{{ asset('frontend-assets/js/jquery.js') }}"></script>
<script src="{{ asset('frontend-assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend-assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('frontend-assets/vendor/imageuplodify/imageuploadify.js') }}"></script>
<script src="{{ asset('frontend-assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ asset('frontend-assets/js/dz.carousel.js') }}"></script>
<script src="{{ asset('frontend-assets/js/settings.js') }}"></script>
<script src="{{ asset('frontend-assets/js/custom.js') }}"></script>
<script>
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#imagePreview').css('background-image', 'url('+e.target.result +')');
				$('#imagePreview').hide();
				$('#imagePreview').fadeIn(650);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}
	$("#imageUpload").change(function() {
		readURL(this);
	});
	$('.remove-img').on('click', function() {
		var imageUrl = "../../../external.html?link=https://ombe.dexignzone.com/xhtml/page-error-404.html";
		$('.avatar-preview, #imagePreview').removeAttr('style');
		$('#imagePreview').css('background-image', 'url(' + imageUrl + ')');
	});
</script>
</body>

<!-- Mirrored from ombe.dexignzone.com/bootstrap/xhtml/edit-profile.html by HTTrack Website Copier/3.x [XR&CO'2017], Mon, 07 Oct 2024 11:58:57 GMT -->
</html>

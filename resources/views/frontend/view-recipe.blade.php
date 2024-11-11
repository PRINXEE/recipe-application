<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ombe.dexignzone.com/bootstrap/xhtml/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2017], Mon, 07 Oct 2024 11:58:01 GMT -->
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

  <link href="{{ asset('frontend-assets/vendor/lightgallery/dist/css/lightgallery.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend-assets/vendor/lightgallery/dist/css/lg-thumbnail.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend-assets/vendor/lightgallery/dist/css/lg-zoom.css') }}" rel="stylesheet">

	<!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend-assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend-assets/css/swiper.min.css') }}">
		<link href="{{ asset('backend-assets/css/sweetalert.css') }}" rel="stylesheet" type="text/css" />

    <!-- Google Fonts -->
	<link rel="preconnect" href="../../../external.html?link=https://fonts.googleapis.com/">
	<link rel="preconnect" href="../../../external.html?link=https://fonts.gstatic.com/" crossorigin>
	<link href="../../../external.html?link=https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&amp;family=Raleway:wght@300;400;500&amp;display=swap" rel="stylesheet">

</head>

<style media="screen">

.bu-primary{
    background-color: var(--Moderate-blue);
    color: var(--White);
    border: none;
    padding: .75rem 1.5rem;
    border-radius: 4px;
}
.comment-section{
    padding: 0 1rem;
}
.container{
    border-radius: 8px;
    padding: 1.5rem;
    background-color: var(--White);
}
.comments-wrp {
    display: flex;
    flex-direction: column;

}
.comment-section{
    max-width: 75ch;
    margin: auto;
    margin-top: 1rem;
}
.comment{
    margin-bottom: 1rem;
    display: grid;
    grid-template-areas:
        "score user controls"
        "score comment comment"
        "score comment comment"
    ;
    grid-template-columns: auto 1fr auto;
    gap: 1.5rem;
    row-gap: 1rem;
    color: var(--Grayish-Blue);
}

.c-score{
    color: var(--Moderate-blue);
    font-weight: 500;
    grid-area: score;
    display: flex;
    align-items: center;
    flex-direction: column;
    gap: 1rem;
    padding: .75rem;
    padding-top: .5rem;
    width: 1rem;
    box-sizing: content-box;
    background-color: var(--Very-light-gray);
    border-radius: 8px;
    align-self: flex-start;
}
.score-control{
    width: 100%;
    cursor: pointer;
    object-fit: scale-down;
}
.c-text{
    grid-area: comment;
    width: 100%;
}
.c-user{
    width: 100%;
    grid-area: user;
    display: flex;
    gap: 1rem;
    align-items: center;
}

.usr-name{
    color: var(--Dark-blue);
    font-weight: 700;
}
.usr-img{
    height: 2rem;
    width: 2rem;
}

.c-controls{
    display: flex;
    gap: 1rem;
    color: var(--Moderate-blue);
    grid-area: controls;
    align-self: center;
    justify-self: flex-end;
}
.c-controls a{
    align-items: center;
}
.edit , .reply{
    color: var(--Moderate-blue);
}
.edit{
    display: none;
}
.delete{
    color: var(--Soft-Red);
    display: none;
}
.control-icon{
    margin-right: .5rem;
}

.replies{
    display: flex;
    margin-left: 2.5rem;
    padding-left: 2.4rem;
    border-left: 1px solid var(--Light-grayish-blue);
}

.reply-to{
    color: var(--Moderate-blue);
    font-weight: 500;
}

.reply-input{
    display: grid;
    margin-bottom: 1rem;
    grid-template-areas: "avatar input button";
    grid-template-columns: min-content auto min-content;
    justify-items: center;
    gap: 1rem;
    min-height: 9rem;
}
.reply-input img{
    grid-area: avatar;
    height: 2.5rem;
    width: 2.5rem;
}
.reply-input button{
    grid-area: button;
    align-self: flex-start;
}
.reply-input textarea{
    grid-area: input;
    padding: 1rem;
    width: 100%;
    border: 1px solid var(--Light-gray);
    border-radius: 4px;
    resize: none;
}

.this-user .usr-name::after{
    font-weight: 400;
    content: "you";
    color: var(--White);
    background-color: var(--Moderate-blue);
    padding: 0 .4rem;
    padding-bottom: .2rem;
    font-size: .8rem;
    margin-left: .5rem;
    border-radius: 2px;
}

.this-user .reply{
    display: none;
}
.this-user .edit , .this-user .delete{
    display: flex;
}

@media screen and (max-width:640px) {
    .container{
        padding: .75rem;
    }
    .replies{
        padding-left: 1rem;
        margin-left: .5rem;
    }
    .comment{
        grid-template-areas:
            "user user user"
            "comment comment comment"
            "score ... controls"
        ;

        gap: .5rem;
    }
    .c-score{
        flex-direction: row;
        width: auto;
    }
    .reply-input{
        grid-template-areas:
            "input input input"
            "avatar ... button"
        ;
        grid-template-rows: auto min-content;
        align-items: center;
        gap: .5rem;
    }
    .reply-input img{
        height: 2rem;
        width: 2rem;
    }
    .reply-input textarea{
        height: 6rem;
        padding: .5rem;
        align-self: stretch;
    }
}






</style>


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
	<header class="header header-fixed transparent bg-primary">
		<div class="header-content">
			<div class="left-content">
				<a href="javascript:void(0);" class="back-btn">
					<i class="feather icon-arrow-left"></i>
				</a>
			</div>
			<div class="mid-content">
				<h4 class="title">Recipe Details</h4>
			</div>
			<div class="right-content d-flex align-items-center gap-4">
					<a href="javascript:void(0);" class="item-bookmark style-3 favorite-button" id="favorite-toggle" data-recipe-id="{{ $recipe->id }}">
						@if (auth()->check() && auth()->user()->favorites()->where('recipe_id', $recipe->id)->exists())
	            <i <i class="fa fa-heart favorited"></i></i> <!-- Filled heart for favorited -->
		        @else
		           <i class="far fa-heart"></i> <!-- Empty heart for not favorited -->
		        @endif
				</a>
			</div>
		</div>
	</header>
	<!-- Header -->

	<!-- Main Content Start -->
	<main class="page-content p-b80">

		@php
		    $averageRating = $recipe->reviews->avg('rating'); // Calculate average rating
		    $totalReviews = $recipe->reviews->count(); // Count total reviews
		@endphp

		<div class="container p-0">
			<div class="dz-product-preview bg-primary" >
				<div class="swiper product-detail-swiper" >
					<div class="swiper-wrapper" style="max-height:450px;">
						@if (!empty($recipe->gallery_image))
						  @foreach ($recipe->gallery_image as $key => $image)
						    <div class="swiper-slide">
						      <div class="dz-media">
						        <img src="{{ Storage::url($image) }}" alt="" style="max-height:480px; margin-top: 80px">
						      </div>
						    </div>
						  @endforeach
						@else
						<div class="swiper-slide">
						  <div class="dz-media">
						    <img src="{{ Storage::url($recipe->recipe_image) }}" alt="" style="max-height:480px; margin-top: 80px">
						  </div>
						</div>
						@endif
					</div>
				</div>
			</div>
			<div class="dz-product-detail">
				<div class="dz-handle"></div>
				<div class="detail-content">
					<h4 class="title" id="recipe_name">{{ $recipe->recipe_name }}</h4>
					<span class="menus text-primary" id="author">Written by: <a href="{{ route('view-chief-profile', $recipe->user->id) }}">{{ $recipe->user->name }}</a></span>

          <div class="card-body">
            <div class="swiper categories-swiper dz-swiper m-b20">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="dz-categories-bx">
                    <div class="icon-bx">
                      <a href="javascript:;">
                        <svg enable-background="new 0 0 48 48" height="24" viewBox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
                          <path d="m30.1 47.5h-21.8c-.9 0-1.7-.7-1.9-1.6l-5.9-30.5c-.1-.6 0-1.2.4-1.6.4-.5.9-.7 1.5-.7h33.5c.6 0 1.1.3 1.5.7s.5 1 .4 1.6l-5.8 30.5c-.2.9-1 1.6-1.9 1.6zm-20.2-3.9h18.6l5.1-26.6h-28.8z" fill="#fff"/>
                          <path d="m31.3 42.3c-.5 0-1.1-.2-1.5-.7-.7-.8-.6-2.1.2-2.8 3.9-3.4 6.1-5.5 9-8.2 1-.9 2-1.9 3.2-3 1.8-1.7 1.4-3.4.9-4.2-.9-1.7-3.3-3.1-6.5-2.4-1.1.2-2.1-.4-2.3-1.5s.4-2.1 1.5-2.3c4.5-1 8.9.9 10.8 4.5 1.6 3 .9 6.4-1.8 8.9-1.2 1.1-2.2 2.1-3.2 3-2.8 2.6-5.2 4.9-9.1 8.3-.3.2-.7.4-1.2.4z" fill="#fff"/>
                          <path d="m9.3 10.1c-1.1 0-2-.9-2-2v-5.6c0-1.1.9-2 2-2s2 .9 2 2v5.7c-.1 1-.9 1.9-2 1.9z" fill="#fff"/>
                          <path d="m18.1 10.1c-1.1 0-2-.9-2-2v-5.6c0-1.1.9-2 2-2s2 .9 2 2v5.7c-.1 1-.9 1.9-2 1.9z" fill="#fff"/>
                          <path d="m26.9 10.1c-1.1 0-2-.9-2-2v-5.6c0-1.1.9-2 2-2s2 .9 2 2v5.7c-.1 1-.9 1.9-2 1.9z" fill="#fff"/>
                        </svg>
                      </a>
                    </div>
                    <div class="dz-content">
                      <h6 class="title"><a href="javascript:;">Prep Time</a></h6>
                      <span class="menus text-primary" id="prep_time">{{ $recipe->prep_time }}</span>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="dz-categories-bx">
                    <div class="icon-bx">
                      <a href="javascript:;">
                        <svg enable-background="new 0 0 48 48" height="24" viewBox="0 0 48 48" width="24" xmlns="http://www.w3.org/2000/svg">
                          <path d="m43 47.5h-38c-2.5 0-4.5-1.9-4.5-4.1v-9.8c0-1.1.9-2 2-2h43.1c1.1 0 2 .9 2 2v9.8c-.1 2.2-2.1 4.1-4.6 4.1zm-38.6-12v7.8s.2.2.6.2h38c.4 0 .6-.2.6-.3v-7.8h-39.2z" fill="#fff"></path>
                          <path d="m45.5 23.8h-43c-1.1 0-2-.9-2-2v-3.8c0-9.6 7.9-17.5 17.5-17.5h12c9.7 0 17.5 7.9 17.5 17.5v3.8c0 1.1-.9 2-2 2zm-41.1-4h39.2v-1.8c0-7.5-6.1-13.6-13.6-13.6h-12c-7.5 0-13.6 6.1-13.6 13.6z" fill="#fff"></path>
                          <path d="m45.5 30h-43c-1.1 0-2-.9-2-2s.9-2 2-2h43.1c1.1 0 2 .9 2 2s-1 2-2.1 2z" fill="#fff"></path>
                        </svg>
                      </a>
                    </div>
                    <div class="dz-content">
                      <h6 class="title"><a href="javascript:;">Cooking Time</a></h6>
                      <span class="menus text-primary" id="cooking_time">{{ $recipe->cooking_time }}</span>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="dz-categories-bx">
                    <div class="icon-bx">
                      <a href="javascript:;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" x="0" y="0" viewBox="0 0 510 510" style="enable-background:new 0 0 512 512" xml:space="preserve">
                          <path d="m510 30v-30h-116.079l-27.692 90h-217.427l16.154 210h-164.956v45c0 90.981 74.019 165 165 165h283.891l32.308-420h-83.581l18.462-60zm-153.002 90-23.077 75h-146.954l-5.769-75zm-167.723 105h251.449l-15 195h-113.776c11.537-22.515 18.052-48.011 18.052-75v-45h-134.956zm-93.278 149.373c-3.856-9.025-5.997-18.953-5.997-29.373v-15h42.975zm54.003-17.942v62.06c-13.795-2.811-26.215-9.432-36.136-18.696zm30 0 36.136 43.363c-9.921 9.265-22.34 15.886-36.136 18.696zm60-11.431c0 10.42-2.141 20.348-5.997 29.373l-36.978-44.373h42.975zm-210 0v-15h30v15c0 57.897 47.103 105 105 105s105-47.103 105-105v-15h30v15c0 74.439-60.561 135-135 135s-135-60.561-135-135zm229.758 135c12.102-8.52 23.015-18.617 32.429-30h131.23l-2.308 30zm189.044-360-5.77 75h-77.722l23.077-75z" fill="#ffffff" data-original="#000000"></path>
                          <path d="m375 270h30v30h-30z" fill="#ffffff" data-original="#000000"></path>
                          <path d="m360 345h30v30h-30z" fill="#ffffff" data-original="#000000"></path>
                        </svg>
                      </a>
                    </div>
                    <div class="dz-content">
                      <h6 class="title"><a href="javascript:;">Serving</a></h6>
                      <span class="menus text-primary" id="serving_size">{{ $recipe->serving_size }} People</span>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="dz-categories-bx">
                    <div class="icon-bx">
                      <a href="javascript:;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                          <path d="m433.609 152.564c1.742.696 2.484 2.064 2.77 2.818.286.753.642 2.268-.198 3.947l-16.12 35.271 27.396 12.512 15.796-34.587c4.245-8.679 4.712-18.809 1.276-27.847-3.472-9.132-10.666-16.45-19.736-20.078-2.257-.902-3.494-3.312-2.974-5.638l8.689-19.358-27.475-12.334-9.412 20.969-.239.717c-5.857 17.572 3.027 36.728 20.227 43.608z" fill="#ffffff" data-original="#000000"></path>
                          <path d="m323.205 65.725c1.743.697 2.485 2.065 2.771 2.818s.642 2.268-.198 3.947l-16.121 35.272 27.396 12.512 15.796-34.585c4.245-8.679 4.713-18.81 1.277-27.849-3.473-9.133-10.666-16.45-19.736-20.077-2.258-.903-3.496-3.313-2.974-5.638l8.688-19.359-27.476-12.335-9.411 20.968-.239.716c-5.857 17.573 3.026 36.728 20.227 43.61z" fill="#ffffff" data-original="#000000"></path>
                          <path d="m177.609 65.725c1.742.696 2.484 2.064 2.77 2.818.286.753.642 2.268-.198 3.947l-16.12 35.271 27.396 12.512 15.796-34.587c4.245-8.679 4.712-18.809 1.276-27.847-3.472-9.132-10.666-16.45-19.736-20.078-2.257-.902-3.494-3.312-2.974-5.638l8.689-19.358-27.476-12.334-9.411 20.969-.239.717c-5.857 17.572 3.027 36.728 20.227 43.608z" fill="#ffffff" data-original="#000000"></path>
                          <path d="m67.205 147.042c1.743.697 2.485 2.065 2.771 2.818s.642 2.268-.198 3.947l-16.121 35.271 27.396 12.512 15.796-34.585c4.245-8.679 4.713-18.81 1.277-27.849-3.473-9.133-10.666-16.45-19.736-20.077-2.258-.903-3.496-3.313-2.974-5.638l8.688-19.359-27.476-12.334-9.411 20.968-.239.716c-5.857 17.574 3.026 36.729 20.227 43.61z" fill="#ffffff" data-original="#000000"></path>
                          <path d="m481.376 421.216c-3.575-54.667-26.56-105.569-65.654-144.664-31.809-31.809-71.436-52.956-114.546-61.66v-19.558c0-24.91-20.266-45.176-45.176-45.176-24.911 0-45.176 20.266-45.176 45.176v19.558c-43.109 8.704-82.737 29.851-114.546 61.66-39.094 39.094-62.08 89.998-65.653 144.664h-30.625v90.353h512v-90.353zm-240.435-210.319v-15.563c0-8.303 6.754-15.059 15.059-15.059 8.303 0 15.059 6.755 15.059 15.059v15.563c-9.609-.687-19.674-.647-30.118 0zm41.502 31.406c90.595 12.288 161.706 86.776 168.748 178.914h-390.382c7.043-92.138 78.153-166.625 168.748-178.914 17.615-2.088 35.243-2.17 52.886 0zm199.439 239.149h-451.764v-30.118h451.765v30.118z" fill="#ffffff" data-original="#000000"></path>
                        </svg>
                      </a>
                    </div>
                    <div class="dz-content">
                      <h6 class="title"><a href="javascript:;">category</a></h6>
                      <span class="menus text-primary">{{ $recipe->recipeCategory->name }}</span>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="dz-categories-bx">
                    <div class="icon-bx">
                      <a href="javascript:;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                          <path d="m433.609 152.564c1.742.696 2.484 2.064 2.77 2.818.286.753.642 2.268-.198 3.947l-16.12 35.271 27.396 12.512 15.796-34.587c4.245-8.679 4.712-18.809 1.276-27.847-3.472-9.132-10.666-16.45-19.736-20.078-2.257-.902-3.494-3.312-2.974-5.638l8.689-19.358-27.475-12.334-9.412 20.969-.239.717c-5.857 17.572 3.027 36.728 20.227 43.608z" fill="#ffffff" data-original="#000000"></path>
                          <path d="m323.205 65.725c1.743.697 2.485 2.065 2.771 2.818s.642 2.268-.198 3.947l-16.121 35.272 27.396 12.512 15.796-34.585c4.245-8.679 4.713-18.81 1.277-27.849-3.473-9.133-10.666-16.45-19.736-20.077-2.258-.903-3.496-3.313-2.974-5.638l8.688-19.359-27.476-12.335-9.411 20.968-.239.716c-5.857 17.573 3.026 36.728 20.227 43.61z" fill="#ffffff" data-original="#000000"></path>
                          <path d="m177.609 65.725c1.742.696 2.484 2.064 2.77 2.818.286.753.642 2.268-.198 3.947l-16.12 35.271 27.396 12.512 15.796-34.587c4.245-8.679 4.712-18.809 1.276-27.847-3.472-9.132-10.666-16.45-19.736-20.078-2.257-.902-3.494-3.312-2.974-5.638l8.689-19.358-27.476-12.334-9.411 20.969-.239.717c-5.857 17.572 3.027 36.728 20.227 43.608z" fill="#ffffff" data-original="#000000"></path>
                          <path d="m67.205 147.042c1.743.697 2.485 2.065 2.771 2.818s.642 2.268-.198 3.947l-16.121 35.271 27.396 12.512 15.796-34.585c4.245-8.679 4.713-18.81 1.277-27.849-3.473-9.133-10.666-16.45-19.736-20.077-2.258-.903-3.496-3.313-2.974-5.638l8.688-19.359-27.476-12.334-9.411 20.968-.239.716c-5.857 17.574 3.026 36.729 20.227 43.61z" fill="#ffffff" data-original="#000000"></path>
                          <path d="m481.376 421.216c-3.575-54.667-26.56-105.569-65.654-144.664-31.809-31.809-71.436-52.956-114.546-61.66v-19.558c0-24.91-20.266-45.176-45.176-45.176-24.911 0-45.176 20.266-45.176 45.176v19.558c-43.109 8.704-82.737 29.851-114.546 61.66-39.094 39.094-62.08 89.998-65.653 144.664h-30.625v90.353h512v-90.353zm-240.435-210.319v-15.563c0-8.303 6.754-15.059 15.059-15.059 8.303 0 15.059 6.755 15.059 15.059v15.563c-9.609-.687-19.674-.647-30.118 0zm41.502 31.406c90.595 12.288 161.706 86.776 168.748 178.914h-390.382c7.043-92.138 78.153-166.625 168.748-178.914 17.615-2.088 35.243-2.17 52.886 0zm199.439 239.149h-451.764v-30.118h451.765v30.118z" fill="#ffffff" data-original="#000000"></path>
                        </svg>
                      </a>
                    </div>
                    <div class="dz-content">
                      <h6 class="title"><a href="javascript:;">Cuisine</a></h6>
                      <span class="menus text-primary">{{ $recipe->recipeCuisine->name }}</span>
                    </div>
                  </div>
                </div>
								<div class="swiper-slide">
                  <div class="dz-categories-bx">
                    <div class="icon-bx">
                      <a href="javascript:;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                          <path d="m433.609 152.564c1.742.696 2.484 2.064 2.77 2.818.286.753.642 2.268-.198 3.947l-16.12 35.271 27.396 12.512 15.796-34.587c4.245-8.679 4.712-18.809 1.276-27.847-3.472-9.132-10.666-16.45-19.736-20.078-2.257-.902-3.494-3.312-2.974-5.638l8.689-19.358-27.475-12.334-9.412 20.969-.239.717c-5.857 17.572 3.027 36.728 20.227 43.608z" fill="#ffffff" data-original="#000000"></path>
                          <path d="m323.205 65.725c1.743.697 2.485 2.065 2.771 2.818s.642 2.268-.198 3.947l-16.121 35.272 27.396 12.512 15.796-34.585c4.245-8.679 4.713-18.81 1.277-27.849-3.473-9.133-10.666-16.45-19.736-20.077-2.258-.903-3.496-3.313-2.974-5.638l8.688-19.359-27.476-12.335-9.411 20.968-.239.716c-5.857 17.573 3.026 36.728 20.227 43.61z" fill="#ffffff" data-original="#000000"></path>
                          <path d="m177.609 65.725c1.742.696 2.484 2.064 2.77 2.818.286.753.642 2.268-.198 3.947l-16.12 35.271 27.396 12.512 15.796-34.587c4.245-8.679 4.712-18.809 1.276-27.847-3.472-9.132-10.666-16.45-19.736-20.078-2.257-.902-3.494-3.312-2.974-5.638l8.689-19.358-27.476-12.334-9.411 20.969-.239.717c-5.857 17.572 3.027 36.728 20.227 43.608z" fill="#ffffff" data-original="#000000"></path>
                          <path d="m67.205 147.042c1.743.697 2.485 2.065 2.771 2.818s.642 2.268-.198 3.947l-16.121 35.271 27.396 12.512 15.796-34.585c4.245-8.679 4.713-18.81 1.277-27.849-3.473-9.133-10.666-16.45-19.736-20.077-2.258-.903-3.496-3.313-2.974-5.638l8.688-19.359-27.476-12.334-9.411 20.968-.239.716c-5.857 17.574 3.026 36.729 20.227 43.61z" fill="#ffffff" data-original="#000000"></path>
                          <path d="m481.376 421.216c-3.575-54.667-26.56-105.569-65.654-144.664-31.809-31.809-71.436-52.956-114.546-61.66v-19.558c0-24.91-20.266-45.176-45.176-45.176-24.911 0-45.176 20.266-45.176 45.176v19.558c-43.109 8.704-82.737 29.851-114.546 61.66-39.094 39.094-62.08 89.998-65.653 144.664h-30.625v90.353h512v-90.353zm-240.435-210.319v-15.563c0-8.303 6.754-15.059 15.059-15.059 8.303 0 15.059 6.755 15.059 15.059v15.563c-9.609-.687-19.674-.647-30.118 0zm41.502 31.406c90.595 12.288 161.706 86.776 168.748 178.914h-390.382c7.043-92.138 78.153-166.625 168.748-178.914 17.615-2.088 35.243-2.17 52.886 0zm199.439 239.149h-451.764v-30.118h451.765v30.118z" fill="#ffffff" data-original="#000000"></path>
                        </svg>
                      </a>
                    </div>
                    <div class="dz-content">
                      <h6 class="title"><a href="javascript:;">Difficulty Level</a></h6>
                      <span class="menus text-primary">{{ $recipe->difficulty_level }}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <button type="button" class="btn mb-2 me-2 btn-primary" data-bs-toggle="modal" data-bs-target="#audio"><i class="fa-brands fa-mic me-2"></i>Audio</button> -->
						<button type="button" class="btn mb-2 me-2 btn-success" data-bs-toggle="modal" data-bs-target="#audio"><i class="fas fa-play me-2"></i>Audio</button>

            <a href="{{ route('download-recipe', $recipe->id) }}" class="btn mb-2 me-2 btn-secondary"><i class="fa-solid fa-table-cells-large me-2"></i>Download</a>
            <!-- <button type="button" class="btn mb-2 me-2 btn-success"><i class="fa-solid fa-gear me-2"></i>Success</button> -->
            <!-- <button type="button" class="btn mb-2 me-2 btn-danger"><i class="fa-solid fa-circle-exclamation me-2"></i>Danger</button>
            <button type="button" class="btn mb-2 me-2 btn-warning"><i class="fa-solid fa-image me-2"></i>Warning</button>
            <button type="button" class="btn mb-2 me-2 btn-info"><i class="fa-solid fa-phone-volume me-2"></i>Info</button>
            <button type="button" class="btn mb-2 me-2 btn-light"><i class="fa-solid fa-lock me-2"></i>Light</button>
            <button type="button" class="btn mb-2 me-2 btn-dark"><i class="fa-solid fa-circle-play me-2"></i>Dark</button> -->
          </div>
				</div>
				<div class="dz-item-rating"> <i class="fa fa-star" style="font-size:15px;"></i> <span style="font-size: 25px ">{{ number_format($averageRating, 1) }}</span></div>


        <!-- description - 3 -->
        <div class="accordion-item">
          <div class="accordion-header" id="accord-7One" data-bs-toggle="collapse" data-bs-target="#description" aria-controls="description" aria-expanded="false" role="button">
            <span class="accordion-header-icon"></span>
            <span class="accordion-header-text">Recipe Description</span>
            <span class="accordion-header-indicator"></span>
          </div>
          <div id="description" class="collapse accordion__body" aria-labelledby="accord-7One" data-bs-parent="#accordion-seven">
            <div class="accordion-body-text">
              <div class="col-12">
      					<div class="card">
      						<!-- <img src="{{ asset('frontend-assets/images/card/pic1.png') }}" class="card-img-top" alt="..."> -->
                  <!-- @if (!empty($recipe->gallery_image) && isset($recipe->gallery_image[0])) -->
                    <img src="{{ Storage::url($recipe->recipe_image) }}" alt="Recipe Image"  class="card-img-top" height="50">
                  <!-- @endif -->
      						<div class="card-body">
      							<h5 class="card-title">Description</h5>
      							<p class="card-text" id="description">{!! $recipe->description !!}</p>
      						</div>
      					</div>
      				</div>
            </div>
          </div>
        </div>

        <!-- Ingredients - 3 -->
        <div class="accordion-item">
          <div class="accordion-header" id="accord-7One" data-bs-toggle="collapse" data-bs-target="#ingredient" aria-controls="ingredient" aria-expanded="true" role="button">
            <span class="accordion-header-icon"></span>
            <span class="accordion-header-text">Recipe Ingredients</span>
            <span class="accordion-header-indicator"></span>
          </div>
          <div id="ingredient" class="collapse accordion__body" aria-labelledby="accord-7One" data-bs-parent="#accordion-seven">
            <div class="accordion-body-text">
              <div class="col-12">
                  <h5 class="title">Ingredients</h5>
                  <ul class="dz-timeline" id="ingredients">
                    @if (!empty($recipe->ingredients))
                      @foreach ($recipe->ingredients as $key => $ing)
                        <li class="timeline-item">
                            <!-- <p class="timeline-date">11 March 2020</p> -->
                            <h6 class="timeline-tilte">{{ $ing['ingredients']['ingredients']}}</h6>
                        </li>
                      @endforeach
                    @else
                      <p>No ingredients available.</p>
                    @endif
                  </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Tags - 1 -->
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">Tags</h5>
						</div>
						<div class="card-body">
							<div class="bootstrap-badge">
                @if (!empty($tags))
                    @foreach ($tags as $tag)
                        <!-- <a href="javascript:void();;" class="btn btn-primary light btn-xs mb-1"></a> -->
                        <span class="badge badge-primary">{{ $tag }}</span>
                    @endforeach
                @else
                    <p>No tags available.</p>
                @endif

							</div>
						</div>
					</div>
				</div>
				<!-- Tags - 1 -->

				<!-- Instructions - 3 -->
        <div class="card">
          <div class="card-header">
              <h5 class="card-title">Instructions</h5>
          </div>
          <div class="card-body">
            <!-- Nav tabs -->
            <div class="default-tab">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" data-bs-toggle="tab" href="#steps" aria-selected="true" role="tab"><i class="icon feather icon-home me-2"></i> Steps</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" data-bs-toggle="tab" href="#review" aria-selected="false" role="tab" tabindex="-1"><i class="icon feather icon-mail me-2"></i>Review ({{  $totalReviews }})</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade active show" id="steps" role="tabpanel">
                  <div class="pt-4" id="instructions">
                    {!! $recipe->instruction !!}
                  </div>
                </div>
                <div class="tab-pane fade" id="review" role="tabpanel">
                  <div class="pt-4">
                    <h6>Reviews</h6>
										<!-- Display individual reviews -->

											<div class="comment-section" >
												<?php foreach ($recipe->reviews as $review): ?>

													<div class="comment-wrp" style="margin-left:-25px; 	margin-top: -20px;">
											      <div class="comment container">
											        <div class="c-score">
											          <img src="{{ asset('images/icon-plus.svg') }}" alt="plus" class="score-control score-plus">
											          <p class="score-number mt-3">0</p>
											          <img src="{{ asset('images/icon-minus.svg') }}" alt="minus" class="score-control score-minus">
											        </div>
											        <div class="c-controls">
											          <a class="delete"><img src="{{ asset('images/icon-delete.svg') }}" alt="" class="control-icon">Delete</a>
											          <a class="edit"><img src="{{ asset('images/icon-edit.svg') }}" alt="" class="control-icon">Edit</a>
											          <a class="reply"><img src="{{ asset('images/icon-reply.svg') }}" alt="" class="control-icon">Reply</a>
											        </div>
											        <div class="c-user">
											          <img src="{{ Storage::url($review->user->profile_image) }}" alt="" class="usr-img">
											          <p class="usr-name">{{ $review->user->name  }}</p>
											          <p class="cmnt-at" style="font-size:12px; margin-left:-5px">{{ $review->created_at->diffForHumans() }}</p>
																<p class="cmnt-at"> <i class="fa fa-star"></i> {{ $review->rating }}</p>
											        </div>
											        <p class="c-text">
											          <span class="reply-to"></span>
											          <span class="c-body">{{ $review->review }}</span>
											        </p>
											      </div><!--comment-->
														<!-- <div class="replies comments-wrp"> -->
													    <!-- <div class="comment-wrp"> -->
													      <!-- <div class="comment container">
													        <div class="c-score">
													          <img src="images/icon-plus.svg" alt="plus" class="score-control score-plus">
													          <p class="score-number">4</p>
													          <img src="images/icon-minus.svg" alt="minus" class="score-control score-minus">
													        </div>
													        <div class="c-controls">
													          <a class="delete"><img src="images/icon-delete.svg" alt="" class="control-icon">Delete</a>
													          <a class="edit"><img src="images/icon-edit.svg" alt="" class="control-icon">Edit</a>
													          <a class="reply"><img src="images/icon-reply.svg" alt="" class="control-icon">Reply</a>
													        </div>
													        <div class="c-user">
													          <img src="./images/avatars/image-ramsesmiron.webp" alt="" class="usr-img">
													          <p class="usr-name">ramsesmiron</p>
													          <p class="cmnt-at">1 week ago</p>
													        </div>
													        <p class="c-text">
													          <span class="reply-to">@maxblagun</span>
													          <span class="c-body">If you're still new, I'd recommend focusing on the fundamentals of HTML, CSS, and JS before considering React. It's very tempting to jump ahead but lay a solid foundation first.</span>
													        </p>
													      </div><!--comment-->
													      <!-- <div class="replies comments-wrp">
													      </div><!--replies-->
													    <!-- </div> -->
													  <!-- </div><!--replies-->
											    </div>
												<?php endforeach; ?>

										  </div> <!--commentS wrapper-->
										<hr>
										 <a type="button" class="btn mt-3 btn-success btn-small"  data-bs-toggle="modal" data-bs-target="#exampleModalCenter">comment</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Recipe Video and Images - 3 -->
        <div class="card">
          <div class="card-header">
              <h5 class="card-title">Recipe Video and Images</h5>
          </div>
          <div class="card-body">
            <!-- Nav tabs -->
            <div class="default-tab">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link" data-bs-toggle="tab" href="#gallery_image" aria-selected="true" role="tab"><i class="icon feather icon-home me-2"></i> Gallery Image</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" data-bs-toggle="tab" href="#recipe_video" aria-selected="false" role="tab" tabindex="-1"><i class="icon feather icon-mail me-2"></i>Recipe Video</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" data-bs-toggle="tab" href="#youtub_video" aria-selected="false" role="tab" tabindex="-1"><i class="icon feather icon-mail me-2"></i>Youtub Video</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade" id="gallery_image" role="tabpanel">
                  <div class="col-12">
          					<div class="card">
          						<!-- <div class="card-header">
          							<h5 class="card-title">LightGallery With 3 Grid</h5>
          						</div> -->
                      <div class="dz-lightgallery row g-2" id="lightgallery-3">
                        @if (!empty($recipe->gallery_image))
                          @foreach ($recipe->gallery_image as $key => $image)
                          <a class="col-4" href="{{ Storage::url($image) }}">
                            <img src="{{ Storage::url($image) }}" alt="image">
                          </a>
                          @endforeach
                        @else
                          <p>No images available.</p>
                        @endif
                      </div>
          					</div>
          				</div>
                </div>
                <div class="tab-pane fade" id="recipe_video" role="tabpanel">
                  <div class="pt-4">
                    <h6>This is message title</h6>
                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                    </p>
                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                    </p>
                  </div>
                </div>
                <div class="tab-pane fade" id="youtub_video" role="tabpanel">
                  <div class="pt-4">
                    <h6>This is message title</h6>
                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                    </p>
                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

			</div>
		</div>


		<!-- flash alert model-->
	      @include('sweetalert::alert')
	  <!-- end:: flash alert model -->
	</main>
	<!-- Main Content End -->

	<!-- <div class="footer fixed bg-white">
		<div class="container">
			<a href="cart.html" class="btn btn-primary btn-lg rounded-xl btn-thin w-100 gap-2">Place order <span class="opacity-25">$17.4</span></a>
		</div>
	</div> -->

</div>

<?php
	use Illuminate\Support\Facades\Auth;
 ?>
<?php if ( Auth::check() && Auth::user()->role_id == 3): ?>
	<form action="{{ route('recipe-review-store', $recipe->id) }}" method="POST">
		@csrf
		<div class="modal fade" id="exampleModalCenter">
				<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title">Add Review</h5>
										<button class="btn-close" data-bs-dismiss="modal">
												<i class="fa-solid fa-xmark"></i>
										</button>
								</div>
								<div class="modal-body">
									<!-- Recipe Information -->
									<div class="dz-card list style-3 bg-white border-bottom">
										<div class="media-100 me-3">
											<a href="product-detail.html">
												<img class="rounded" src="{{ Storage::url($recipe->recipe_image) }}" alt="Recipe Image">
											</a>
										</div>
										<div class="dz-content">
											<div class="dz-head">
												<h6 class="title font-w500 max-100"><a href="javascript:;">{{ $recipe->recipe_name }}</a></h6>
											</div>
											<ul class="tag-list">
												<li><a href="javascript:void(0);">{{ $recipe->recipeCategory->name }}</a></li>
											</ul>
										</div>
									</div>
									<!-- Rating Section -->
									<div class="write-reviews-box">
										<div class="rating-content">
											<h5 class="title">What do you think?</h5>
											<p class="dz-text">Rate the recipe and leave a review.</p>
										</div>
										<div class="rating-info">
											<h3 class="rating-text" id="selected-rating">0.0</h3> <!-- Display selected rating -->
											<ul class="dz-star-rating" id="star-rating">
												<!-- Dynamically update the star rating -->
												<li class="" data-value="1">
													<svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="../../../external.html?link=http://www.w3.org/2000/svg">
														<path d="M14.5919 0.968665C14.9494 0.193793 16.0506 0.193793 16.4081 0.968665L20.2029 9.19597C20.3486 9.51177 20.6479 9.72922 20.9933 9.77016L29.9906 10.8369C30.838 10.9374 31.1783 11.9848 30.5518 12.5642L23.8998 18.7157C23.6445 18.9518 23.5302 19.3037 23.598 19.6448L25.3637 28.5314C25.53 29.3683 24.6391 30.0157 23.8945 29.5989L15.9884 25.1734C15.685 25.0035 15.315 25.0035 15.0116 25.1734L7.10554 29.5989C6.36093 30.0157 5.46997 29.3683 5.63628 28.5314L7.40203 19.6448C7.46981 19.3037 7.3555 18.9518 7.10016 18.7157L0.448217 12.5642C-0.178283 11.9848 0.162033 10.9374 1.00943 10.8369L10.0067 9.77016C10.3521 9.72922 10.6514 9.51177 10.7971 9.19597L14.5919 0.968665Z" fill="#E9E9E9"/>
														<path d="M14.5919 0.968665C14.9494 0.193793 16.0506 0.193793 16.4081 0.968665L20.2029 9.19597C20.3486 9.51177 20.6479 9.72922 20.9933 9.77016L29.9906 10.8369C30.838 10.9374 31.1783 11.9848 30.5518 12.5642L23.8998 18.7157C23.6445 18.9518 23.5302 19.3037 23.598 19.6448L25.3637 28.5314C25.53 29.3683 24.6391 30.0157 23.8945 29.5989L15.9884 25.1734C15.685 25.0035 15.315 25.0035 15.0116 25.1734L7.10554 29.5989C6.36093 30.0157 5.46997 29.3683 5.63628 28.5314L7.40203 19.6448C7.46981 19.3037 7.3555 18.9518 7.10016 18.7157L0.448217 12.5642C-0.178283 11.9848 0.162033 10.9374 1.00943 10.8369L10.0067 9.77016C10.3521 9.72922 10.6514 9.51177 10.7971 9.19597L14.5919 0.968665Z" stroke="#C7C5BC"/>
													</svg>
												</li>
												<li class="" data-value="2">
													<svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="../../../external.html?link=http://www.w3.org/2000/svg">
														<path d="M14.5919 0.968665C14.9494 0.193793 16.0506 0.193793 16.4081 0.968665L20.2029 9.19597C20.3486 9.51177 20.6479 9.72922 20.9933 9.77016L29.9906 10.8369C30.838 10.9374 31.1783 11.9848 30.5518 12.5642L23.8998 18.7157C23.6445 18.9518 23.5302 19.3037 23.598 19.6448L25.3637 28.5314C25.53 29.3683 24.6391 30.0157 23.8945 29.5989L15.9884 25.1734C15.685 25.0035 15.315 25.0035 15.0116 25.1734L7.10554 29.5989C6.36093 30.0157 5.46997 29.3683 5.63628 28.5314L7.40203 19.6448C7.46981 19.3037 7.3555 18.9518 7.10016 18.7157L0.448217 12.5642C-0.178283 11.9848 0.162033 10.9374 1.00943 10.8369L10.0067 9.77016C10.3521 9.72922 10.6514 9.51177 10.7971 9.19597L14.5919 0.968665Z" fill="#E9E9E9"/>
														<path d="M14.5919 0.968665C14.9494 0.193793 16.0506 0.193793 16.4081 0.968665L20.2029 9.19597C20.3486 9.51177 20.6479 9.72922 20.9933 9.77016L29.9906 10.8369C30.838 10.9374 31.1783 11.9848 30.5518 12.5642L23.8998 18.7157C23.6445 18.9518 23.5302 19.3037 23.598 19.6448L25.3637 28.5314C25.53 29.3683 24.6391 30.0157 23.8945 29.5989L15.9884 25.1734C15.685 25.0035 15.315 25.0035 15.0116 25.1734L7.10554 29.5989C6.36093 30.0157 5.46997 29.3683 5.63628 28.5314L7.40203 19.6448C7.46981 19.3037 7.3555 18.9518 7.10016 18.7157L0.448217 12.5642C-0.178283 11.9848 0.162033 10.9374 1.00943 10.8369L10.0067 9.77016C10.3521 9.72922 10.6514 9.51177 10.7971 9.19597L14.5919 0.968665Z" stroke="#C7C5BC"/>
													</svg>
												</li>
												<li class="" data-value="3">
													<svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="../../../external.html?link=http://www.w3.org/2000/svg">
														<path d="M14.5919 0.968665C14.9494 0.193793 16.0506 0.193793 16.4081 0.968665L20.2029 9.19597C20.3486 9.51177 20.6479 9.72922 20.9933 9.77016L29.9906 10.8369C30.838 10.9374 31.1783 11.9848 30.5518 12.5642L23.8998 18.7157C23.6445 18.9518 23.5302 19.3037 23.598 19.6448L25.3637 28.5314C25.53 29.3683 24.6391 30.0157 23.8945 29.5989L15.9884 25.1734C15.685 25.0035 15.315 25.0035 15.0116 25.1734L7.10554 29.5989C6.36093 30.0157 5.46997 29.3683 5.63628 28.5314L7.40203 19.6448C7.46981 19.3037 7.3555 18.9518 7.10016 18.7157L0.448217 12.5642C-0.178283 11.9848 0.162033 10.9374 1.00943 10.8369L10.0067 9.77016C10.3521 9.72922 10.6514 9.51177 10.7971 9.19597L14.5919 0.968665Z" fill="#E9E9E9"/>
														<path d="M14.5919 0.968665C14.9494 0.193793 16.0506 0.193793 16.4081 0.968665L20.2029 9.19597C20.3486 9.51177 20.6479 9.72922 20.9933 9.77016L29.9906 10.8369C30.838 10.9374 31.1783 11.9848 30.5518 12.5642L23.8998 18.7157C23.6445 18.9518 23.5302 19.3037 23.598 19.6448L25.3637 28.5314C25.53 29.3683 24.6391 30.0157 23.8945 29.5989L15.9884 25.1734C15.685 25.0035 15.315 25.0035 15.0116 25.1734L7.10554 29.5989C6.36093 30.0157 5.46997 29.3683 5.63628 28.5314L7.40203 19.6448C7.46981 19.3037 7.3555 18.9518 7.10016 18.7157L0.448217 12.5642C-0.178283 11.9848 0.162033 10.9374 1.00943 10.8369L10.0067 9.77016C10.3521 9.72922 10.6514 9.51177 10.7971 9.19597L14.5919 0.968665Z" stroke="#C7C5BC"/>
													</svg>
												</li>
												<li class="" data-value="4">
													<svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="../../../external.html?link=http://www.w3.org/2000/svg">
														<path d="M14.5919 0.968665C14.9494 0.193793 16.0506 0.193793 16.4081 0.968665L20.2029 9.19597C20.3486 9.51177 20.6479 9.72922 20.9933 9.77016L29.9906 10.8369C30.838 10.9374 31.1783 11.9848 30.5518 12.5642L23.8998 18.7157C23.6445 18.9518 23.5302 19.3037 23.598 19.6448L25.3637 28.5314C25.53 29.3683 24.6391 30.0157 23.8945 29.5989L15.9884 25.1734C15.685 25.0035 15.315 25.0035 15.0116 25.1734L7.10554 29.5989C6.36093 30.0157 5.46997 29.3683 5.63628 28.5314L7.40203 19.6448C7.46981 19.3037 7.3555 18.9518 7.10016 18.7157L0.448217 12.5642C-0.178283 11.9848 0.162033 10.9374 1.00943 10.8369L10.0067 9.77016C10.3521 9.72922 10.6514 9.51177 10.7971 9.19597L14.5919 0.968665Z" fill="#E9E9E9"/>
														<path d="M14.5919 0.968665C14.9494 0.193793 16.0506 0.193793 16.4081 0.968665L20.2029 9.19597C20.3486 9.51177 20.6479 9.72922 20.9933 9.77016L29.9906 10.8369C30.838 10.9374 31.1783 11.9848 30.5518 12.5642L23.8998 18.7157C23.6445 18.9518 23.5302 19.3037 23.598 19.6448L25.3637 28.5314C25.53 29.3683 24.6391 30.0157 23.8945 29.5989L15.9884 25.1734C15.685 25.0035 15.315 25.0035 15.0116 25.1734L7.10554 29.5989C6.36093 30.0157 5.46997 29.3683 5.63628 28.5314L7.40203 19.6448C7.46981 19.3037 7.3555 18.9518 7.10016 18.7157L0.448217 12.5642C-0.178283 11.9848 0.162033 10.9374 1.00943 10.8369L10.0067 9.77016C10.3521 9.72922 10.6514 9.51177 10.7971 9.19597L14.5919 0.968665Z" stroke="#C7C5BC"/>
													</svg>
												</li>
												<li class="" data-value="5">
													<svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="../../../external.html?link=http://www.w3.org/2000/svg">
														<path d="M14.5919 0.968665C14.9494 0.193793 16.0506 0.193793 16.4081 0.968665L20.2029 9.19597C20.3486 9.51177 20.6479 9.72922 20.9933 9.77016L29.9906 10.8369C30.838 10.9374 31.1783 11.9848 30.5518 12.5642L23.8998 18.7157C23.6445 18.9518 23.5302 19.3037 23.598 19.6448L25.3637 28.5314C25.53 29.3683 24.6391 30.0157 23.8945 29.5989L15.9884 25.1734C15.685 25.0035 15.315 25.0035 15.0116 25.1734L7.10554 29.5989C6.36093 30.0157 5.46997 29.3683 5.63628 28.5314L7.40203 19.6448C7.46981 19.3037 7.3555 18.9518 7.10016 18.7157L0.448217 12.5642C-0.178283 11.9848 0.162033 10.9374 1.00943 10.8369L10.0067 9.77016C10.3521 9.72922 10.6514 9.51177 10.7971 9.19597L14.5919 0.968665Z" fill="#E9E9E9"/>
														<path d="M14.5919 0.968665C14.9494 0.193793 16.0506 0.193793 16.4081 0.968665L20.2029 9.19597C20.3486 9.51177 20.6479 9.72922 20.9933 9.77016L29.9906 10.8369C30.838 10.9374 31.1783 11.9848 30.5518 12.5642L23.8998 18.7157C23.6445 18.9518 23.5302 19.3037 23.598 19.6448L25.3637 28.5314C25.53 29.3683 24.6391 30.0157 23.8945 29.5989L15.9884 25.1734C15.685 25.0035 15.315 25.0035 15.0116 25.1734L7.10554 29.5989C6.36093 30.0157 5.46997 29.3683 5.63628 28.5314L7.40203 19.6448C7.46981 19.3037 7.3555 18.9518 7.10016 18.7157L0.448217 12.5642C-0.178283 11.9848 0.162033 10.9374 1.00943 10.8369L10.0067 9.77016C10.3521 9.72922 10.6514 9.51177 10.7971 9.19597L14.5919 0.968665Z" stroke="#C7C5BC"/>
													</svg>
												</li>
											</ul>
										</div>
										<!-- Review Text -->
										<div class="mb-3">
											<textarea class="form-control bg-white" name="review" id="review" placeholder="Write your review here"></textarea>
										</div>
									</div>
								</div>

								<div class="modal-footer">
										<button type="button" class="btn btn-sm btn-danger light" data-bs-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-sm btn-primary">Submit Review</button> <!-- Submit form -->
								</div>
						</div>
				</div>
		</div>
	</form>
<?php else: ?>
	<div class="modal fade" id="exampleModalCenter">
		<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
						<div class="modal-header">
								<h5 class="modal-title">Add Review</h5>
								<button class="btn-close" data-bs-dismiss="modal">
										<i class="fa-solid fa-xmark"></i>
								</button>
						</div>
						<div class="modal-body">
							<!-- <div class="dz-card list style-3 bg-white border-bottom">
								<div class="media-100 me-3">
									<a href="product-detail.html"><img class="rounded" src="{{ Storage::url($recipe->recipe_image) }}" alt=""></a>
								</div>
								<div class="dz-content">
									<div class="dz-head">
										<h6 class="title font-w500 max-100"><a href="product-detail.html">{{ $recipe->recipe_name }}</a></h6>
									</div>
									<ul class="tag-list">
										<li><a href="javascript:void(0);">{{ $recipe->recipeCategory->name }}</a></li>
									</ul>
								</div>
							</div> -->
							<div class="write-reviews-box">
								<div class="rating-content">
									<h5 class="title">What do you think?</h5>
									<p class="dz-text">Sign Up or Sign In to be able to rate and write a review</p>
									<!-- <button type="button" class="btn btn-sm btn-danger light " data-bs-dismiss="modal">Close</button> -->
									<!-- <button type="button" class="btn mb-2 me-2 btn-primary"><i class="dz-icon icon-md icon-fill"></i>Audio</button> -->
									<a href="{{ route('signin') }}" class="btn mt-4 me-2 btn-primary"><i class="feather icon-log-in text-white me-2"></i>Sign Up</a>
								</div>
							</div>
						</div>
						<div class="modal-footer">
								<button type="button" class="btn btn-sm btn-danger light" data-bs-dismiss="modal">Close</button>
						</div>
				</div>
		</div>
</div>

<?php endif; ?>

<div class="modal fade" id="audio">
		<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
						<div class="modal-header">
								<h5 class="modal-title">Play and Listen</h5>
								<button class="btn-close" data-bs-dismiss="modal">
										<i class="fa-solid fa-xmark"></i>
								</button>
						</div>
						<div class="modal-body">
							<button id="play-audio" class="btn btn-primary"><i class="fa fa-play"></i></button>
							<button id="pause-audio" class="btn btn-secondary"><i class="fa fa-pause"></i></button>
							<button id="resume-audio" class="btn btn-secondary">Resume</button>
							<button id="stop-audio" class="btn btn-danger"><i class="fa fa-stop"></i></button>
						</div>
						<div class="modal-footer">
								<button type="button" class="btn btn-sm btn-danger light" data-bs-dismiss="modal">Close</button>
						</div>
				</div>
		</div>
</div>
<!--**********************************
    Scripts
***********************************-->

<script src="https://code.responsivevoice.org/responsivevoice.js?key=wMdmbJ0m"></script>

<script>
    let isSpeaking = false; // To track if the speech is currently playing

    // Function to play all recipe audio
    document.getElementById('play-audio').addEventListener('click', function() {
        if (!isSpeaking) {
            // Gather all the text
            const Recipe_name = document.getElementById('recipe_name').innerText;
						const Author = document.getElementById('author').innerText;
            const Prep_time = document.getElementById('prep_time').innerText;
            const Cook_time = document.getElementById('cooking_time').innerText;
            const Serving_size = document.getElementById('serving_size').innerText;
            const Description = document.getElementById('description').innerText;
						const Ingredients = document.getElementById('ingredients').innerText;
            const Instructions = document.getElementById('instructions').innerText;

            // Combine text into a single string
            const speechText = `Recipe Name:${Recipe_name}.Author:${Author}.Prep Time:${Prep_time}.Cooking Time:${Cook_time}.Serving Size:${Serving_size}.Description:${Description}.Ingredients:${Ingredients}.Instructions:${Instructions}`;

            // Play the combined text
            responsiveVoice.speak(speechText, "UK English Female");
            isSpeaking = true;
        }
    });

    // Pause functionality
    document.getElementById('pause-audio').addEventListener('click', function() {
        responsiveVoice.pause();
    });

    // Resume functionality
    document.getElementById('resume-audio').addEventListener('click', function() {
        responsiveVoice.resume();
    });

    // Stop functionality
    document.getElementById('stop-audio').addEventListener('click', function() {
        responsiveVoice.cancel();
        isSpeaking = false; // Reset speaking state
    });

    // Event listener to reset the speaking state when the speech ends
    window.speechSynthesis.onend = function() {
        isSpeaking = false;
    };
</script>
<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function() {
		const starRating = document.getElementById('star-rating');
		const selectedRatingText = document.getElementById('selected-rating');
		let selectedRating = 0;

		// Add click event listener for each star
		starRating.querySelectorAll('li').forEach((star) => {
				star.addEventListener('click', function() {
						// Get the rating value from the clicked star's data-value
						selectedRating = this.getAttribute('data-value');

						// Highlight the stars up to the selected value
						starRating.querySelectorAll('li').forEach((s, index) => {
								if (index < selectedRating) {
										s.classList.add('active'); // Highlight active stars
								} else {
										s.classList.remove('active'); // Un-highlight inactive stars
								}
						});

						// Display the selected rating
						selectedRatingText.textContent = selectedRating + ".0";

						// Store the selected rating in a hidden input (for form submission)
						const ratingInput = document.createElement('input');
						ratingInput.setAttribute('type', 'hidden');
						ratingInput.setAttribute('name', 'rating');
						ratingInput.setAttribute('value', selectedRating);
						document.querySelector('form').appendChild(ratingInput);
				});
		});
});
</script>

<script src="{{ asset('frontend-assets/js/jquery.js') }}"></script>
<script src="{{ asset('frontend-assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('backend-assets/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('frontend-assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend-assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ asset('frontend-assets/vendor/lightgallery/dist/lightgallery.umd.js') }}"></script>
<script src="{{ asset('frontend-assets/vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.umd.js') }}"></script>
<script src="{{ asset('frontend-assets/vendor/lightgallery/dist/plugins/zoom/lg-zoom.umd.js') }}"></script>
<script src="{{ asset('frontend-assets/vendor/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('frontend-assets/vendor/wnumb/wNumb.js') }}"></script>
<script src="{{ asset('frontend-assets/js/noui-slider.init.js') }}"></script>
<script src="{{ asset('frontend-assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('frontend-assets/js/dz.carousel.js') }}"></script>
<script src="{{ asset('frontend-assets/js/settings.js') }}"></script>
<script src="{{ asset('frontend-assets/js/custom.js') }}"></script>



	<!-- <script type="text/javascript">
	const data = {
currentUser: {
	image: {
		png: "./images/avatars/image-juliusomo.png",
		webp: "./images/avatars/image-juliusomo.webp",
	},
	username: "juliusomo",
},
comments: [
	{
		parent: 0,
		id: 1,
		content:
			"Impressive! Though it seems the drag feature could be improved. But overall it looks incredible. You've nailed the design and the responsiveness at various breakpoints works really well.",
		createdAt: "1 month ago",
		score: 12,
		user: {
			image: {
				png: "./images/avatars/image-amyrobson.png",
				webp: "./images/avatars/image-amyrobson.webp",
			},
			username: "amyrobson",
		},
		replies: [],
	},
	{
		parent: 0,
		id: 2,
		content:
			"Woah, your project looks awesome! How long have you been coding for? I'm still new, but think I want to dive into React as well soon. Perhaps you can give me an insight on where I can learn React? Thanks!",
		createdAt: "2 weeks ago",
		score: 5,
		user: {
			image: {
				png: "./images/avatars/image-maxblagun.png",
				webp: "./images/avatars/image-maxblagun.webp",
			},
			username: "maxblagun",
		},
		replies: [
			{
				parent: 2,
				id: 1,
				content:
					"If you're still new, I'd recommend focusing on the fundamentals of HTML, CSS, and JS before considering React. It's very tempting to jump ahead but lay a solid foundation first.",
				createdAt: "1 week ago",
				score: 4,
				replyingTo: "maxblagun",
				user: {
					image: {
						png: "./images/avatars/image-ramsesmiron.png",
						webp: "./images/avatars/image-ramsesmiron.webp",
					},
					username: "ramsesmiron",
				},
			},
			{
				parent: 2,
				id: 1,
				content:
					"I couldn't agree more with this. Everything moves so fast and it always seems like everyone knows the newest library/framework. But the fundamentals are what stay constant.",
				createdAt: "2 days ago",
				score: 2,
				replyingTo: "ramsesmiron",
				user: {
					image: {
						png: "./images/avatars/image-juliusomo.png",
						webp: "./images/avatars/image-juliusomo.webp",
					},
					username: "juliusomo",
				},
			},
		],
	},
],
};
function appendFrag(frag, parent) {
var children = [].slice.call(frag.childNodes, 0);
parent.appendChild(frag);
//console.log(children);
return children[1];
}

const addComment = (body, parentId, replyTo = undefined) => {
let commentParent =
	parentId === 0
		? data.comments
		: data.comments.filter((c) => c.id == parentId)[0].replies;
let newComment = {
	parent: parentId,
	id:
		commentParent.length == 0
			? 1
			: commentParent[commentParent.length - 1].id + 1,
	content: body,
	createdAt: "Now",
	replyingTo: replyTo,
	score: 0,
	replies: parent == 0 ? [] : undefined,
	user: data.currentUser,
};
commentParent.push(newComment);
initComments();
};
const deleteComment = (commentObject) => {
if (commentObject.parent == 0) {
	data.comments = data.comments.filter((e) => e != commentObject);
} else {
	data.comments.filter((e) => e.id === commentObject.parent)[0].replies =
		data.comments
			.filter((e) => e.id === commentObject.parent)[0]
			.replies.filter((e) => e != commentObject);
}
initComments();
};

const promptDel = (commentObject) => {
const modalWrp = document.querySelector(".modal-wrp");
modalWrp.classList.remove("invisible");
modalWrp.querySelector(".yes").addEventListener("click", () => {
	deleteComment(commentObject);
	modalWrp.classList.add("invisible");
});
modalWrp.querySelector(".no").addEventListener("click", () => {
	modalWrp.classList.add("invisible");
});
};

const spawnReplyInput = (parent, parentId, replyTo = undefined) => {
if (parent.querySelectorAll(".reply-input")) {
	parent.querySelectorAll(".reply-input").forEach((e) => {
		e.remove();
	});
}
const inputTemplate = document.querySelector(".reply-input-template");
const inputNode = inputTemplate.content.cloneNode(true);
const addedInput = appendFrag(inputNode, parent);
addedInput.querySelector(".bu-primary").addEventListener("click", () => {
	let commentBody = addedInput.querySelector(".cmnt-input").value;
	if (commentBody.length == 0) return;
	addComment(commentBody, parentId, replyTo);
});
};

const createCommentNode = (commentObject) => {
const commentTemplate = document.querySelector(".comment-template");
var commentNode = commentTemplate.content.cloneNode(true);
commentNode.querySelector(".usr-name").textContent = commentObject.user.username;
commentNode.querySelector(".usr-img").src = commentObject.user.image.webp;
commentNode.querySelector(".score-number").textContent = commentObject.score;
commentNode.querySelector(".cmnt-at").textContent = commentObject.createdAt;
commentNode.querySelector(".c-body").textContent = commentObject.content;
if (commentObject.replyingTo)
	commentNode.querySelector(".reply-to").textContent =
		"@" + commentObject.replyingTo;

commentNode.querySelector(".score-plus").addEventListener("click", () => {
	commentObject.score++;
	initComments();
});

commentNode.querySelector(".score-minus").addEventListener("click", () => {
	commentObject.score--;
	if (commentObject.score < 0) commentObject.score = 0;
	initComments();
});
if (commentObject.user.username == data.currentUser.username) {
	commentNode.querySelector(".comment").classList.add("this-user");
	commentNode.querySelector(".delete").addEventListener("click", () => {
		promptDel(commentObject);
	});
	commentNode.querySelector(".edit").addEventListener("click", (e) => {
		const path = e.path[3].querySelector(".c-body");
		if (
			path.getAttribute("contenteditable") == false ||
			path.getAttribute("contenteditable") == null
		) {
			path.setAttribute("contenteditable", true);
			path.focus()
		} else {
			path.removeAttribute("contenteditable");
		}

	});
	return commentNode;
}
return commentNode;
};

const appendComment = (parentNode, commentNode, parentId) => {
const bu_reply = commentNode.querySelector(".reply");
// parentNode.appendChild(commentNode);
const appendedCmnt = appendFrag(commentNode, parentNode);
const replyTo = appendedCmnt.querySelector(".usr-name").textContent;
bu_reply.addEventListener("click", () => {
	if (parentNode.classList.contains("replies")) {
		spawnReplyInput(parentNode, parentId, replyTo);
	} else {
		//console.log(appendedCmnt.querySelector(".replies"));
		spawnReplyInput(
			appendedCmnt.querySelector(".replies"),
			parentId,
			replyTo
		);
	}
});
};

function initComments(
commentList = data.comments,
parent = document.querySelector(".comments-wrp")
) {
parent.innerHTML = "";
commentList.forEach((element) => {
	var parentId = element.parent == 0 ? element.id : element.parent;
	const comment_node = createCommentNode(element);
	if (element.replies && element.replies.length > 0) {
		initComments(element.replies, comment_node.querySelector(".replies"));
	}
	appendComment(parent, comment_node, parentId);
});
}

initComments();
const cmntInput = document.querySelector(".reply-input");
cmntInput.querySelector(".bu-primary").addEventListener("click", () => {
let commentBody = cmntInput.querySelector(".cmnt-input").value;
if (commentBody.length == 0) return;
addComment(commentBody, 0);
cmntInput.querySelector(".cmnt-input").value = "";
});

// addComment("Hello ! It works !!",0);

	</script> -->


<script>
    // document.getElementById('favorite-toggle').addEventListener('click', function() {
    //     var recipeId = this.getAttribute('data-recipe-id');
    //     var button = this;
		//
		//
		// 		alert(recipeId);
		//
    //     // Send AJAX request to toggle favorite
    //     fetch('/recipe/' + recipeId + '/favorite', {
    //         method: 'POST',
    //         headers: {
    //             'X-CSRF-TOKEN': '{{ csrf_token() }}',
    //             'Content-Type': 'application/json',
    //         },
    //         body: JSON.stringify({ recipe_id: recipeId }),
    //     })
    //     .then(response => response.json())
    //     .then(data => {
    //         if (data.status === 'added') {
    //             // Change icon to filled heart
    //             button.innerHTML = '<i class="fa fa-heart favorited"></i>';
    //         } else {
    //             // Change icon to empty heart
    //             button.innerHTML = '<i class="fa fa-heart-o"></i>';
    //         }
    //     });
    // });

		$(document).ready(function() {

			$('.favorite-button').on('click', function() {

				// var ingredientToDelete = $(this).data('ingredient');
				var recipe_id = $(this).data('recipe-id');
				// var recipeId = this.getAttribute('');
				// var button = this;


				//alert(recipe_id);

				$.ajax({
						url: '/recipe/' + recipe_id + '/favorite', // Assuming the route to delete ingredient is /ingredients/{id}
						type: 'post',
						data: {
								_token: '{{ csrf_token() }}', // Pass the CSRF token
								id: recipe_id,
						},
						success: function(response) {

							if (response.success) {
									// On success, remove the ingredient from the DOM
									Swal.fire({
										icon:'success',
										title: response.message,
										toast: true,
										position: 'top-end',
										showConfirmButton: false,
										timer: 5000,
										timerProgressBar: true,
									});
							}
						},
						error: function(xhr) {
								// Handle errors
								Swal.fire({
									icon:'error',
									title: 'Failed to add or remove recipe!',
									toast: true,
									position: 'top-end',
									showConfirmButton: false,
									timer: 5000,
									timerProgressBar: true,
								});
						}
				});
		});
		});
</script>
</body>

<!-- Mirrored from ombe.dexignzone.com/bootstrap/xhtml/product-detail.html by HTTrack Website Copier/3.x [XR&CO'2017], Mon, 07 Oct 2024 11:58:04 GMT -->
</html>

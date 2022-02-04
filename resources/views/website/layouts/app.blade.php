<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="author" content="Best Essay Writings">
    @yield('headerData')
    <!-- canonical -->
    <link rel="canonical" href="{{ url()->current() }}" />
    <!-- shcema -->
    
    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" > <!-- website name -->
	<meta property="og:site" content="" > <!-- website link -->
	<meta property="og:title" content=""> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" > <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" > <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" > <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    @include('website.layouts.css')
    @stack('css')
</head>

<body>
    @include('website.partials.header')
<main id="main">
    @yield('content')
</main>
    @include('website.partials.footer') 
    <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->
<!-- Bottom -->
<div class="bottom py-2 text-light" >
    <div class="container d-flex justify-content-between">
        <div>
            <p>Copyright © 2019</p><br>
            <p><a href="/">Bestessaywritingservices.com.au</a></p>
        </div>
        <div>
            <i class="fab fa-cc-visa fa-lg p-1"></i>
            <i class="fab fa-cc-mastercard fa-lg p-1"></i>
            <i class="fab fa-cc-paypal fa-lg p-1"></i>
            <i class="fab fa-cc-amazon-pay fa-lg p-1"></i>
        </div>
    </div> <!-- end of container -->
</div> <!-- end of bottom -->
<!-- Back To Top Button -->
<button onclick="topFunction()" id="myBtn">
    <img src="{{ asset('website/assets/images/up-arrow.png') }}" alt="alternative">
</button>
<!-- end of back to top button -->

@include('website.layouts.script')
@stack('js')
</body>
</html>
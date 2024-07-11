<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="author" content="Get Essay Service">
    @yield('headerData')
    <!-- canonical -->
    <link rel="canonical" href="{{ url()->current() }}" />
    <!-- shcema -->

    <!-- Favicons -->
    <link href="{{ asset('favicons/favicon.ico') }}" rel="icon">
    <link href="{{ asset('favicons/apple-touch-icon.png') }}" sizes="180x180" rel="apple-touch-icon">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicons/site.webmanifest') }}">
    <style>
        .grecaptcha-badge{
            display: none !important;
        }
    </style>
    @include('website.layouts.css')
</head>

<body>
    @include('website.partials.header')
    @include('website.partials.pop-up')
    {{-- @captchaHTML --}}
    <main id="main">
        @yield('content')
    </main>
    @include('website.partials.footer')
    <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->
    <!-- Bottom -->
    <div class="bottom py-2 text-light">
        <div class="container d-md-flex justify-content-between">
            <div>
                <p>Copyright © {{ date('Y') }} <a href="/">getessayservice.com</a></p>
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
</body>

</html>

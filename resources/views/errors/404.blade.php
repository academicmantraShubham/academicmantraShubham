@extends('website.layouts.app')

@section('headerData')
    <!-- seo tags -->
    <title>{{ '404 - Best Essay Writing Services' }}</title>
    <meta name="description" content="404">
    <meta name="keywords" content="404">
@endsection

@section('content')
    <div class="mt-4 pt-4"></div>
    <div class="mt-4 pt-4"></div>

    <!-- ======= Post Single ======= -->
    <section class="news-single nav-arrow-b mt-4 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="news-img-box">
                        <img src="{{ asset('images/404.svg') }}" alt="404 not found" class="img-fluid" style="max-width:500px;">
                    </div>
                </div>
                {{-- <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center mt-4">
                    <div class="post-content color-text-a">
                        <p class="post-intro">
                            <span class="color-b">404</span> Page Not Found
                        </p>
                    </div>
                </div> --}}
            </div>
        </div>
    </section><!-- End Post Single-->
@endsection

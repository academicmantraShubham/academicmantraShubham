@extends('website.layouts.app')
@section('headerData')
    <title>{{ $bolgDetails->meta_title }}</title>
    <meta name="description" content="{{ $bolgDetails->meta_keyword }}">
    <meta name="keywords" content="{{ $bolgDetails->meta_description }}">
@endsection
@section('content')
    <main id="" style="padding-top: 5.5rem;">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <img class="img-fluid"
                    src="{{ $bolgDetails->featured_image ? $bolgDetails->featured_image->getUrl() : '/images/homepage/1646737989.svg' }}"
                    alt="{{ $bolgDetails->title }}">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li><a href="/">Blogs</a></li>
                    <li>{{ strip_tags($bolgDetails->title) }}</li>
                </ol>

                <h1 class="mb-4 text-center">{!! $bolgDetails->title !!}</h1>

            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- Basic -->
        <div class="ex-basic-1 pt-3 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        {!! $bolgDetails->page_text !!}

                        <div class="mt-2 inter-linking">
                            {!! $bolgDetails->excerpt !!}
                        </div>

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of ex-basic-1 -->
        <!-- end of basic -->

        <!-- End #main -->
    @endsection

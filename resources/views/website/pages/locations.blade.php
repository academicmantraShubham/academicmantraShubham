@extends('website.layouts.app')

@section('headerData')
    <!-- seo tags -->
    <title>{{ $post->meta_title ?? '' }} – Best Essay Writing</title>
    <meta name="description" content="{{ @$post->meta_description }}">
    <meta name="keywords" content="{{ @$post->meta_keyword }}">
@endsection

<!-- swipper css -->
@push('css')
    <link href="{{ asset('website/css/swiper.css') }}" rel="stylesheet">
    <style>
        .div-avatar img {
            width: 120px;
        }
    </style>
@endpush

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs" style="padding-top: 5.5rem;">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li>Locations </li>
            </ol>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    {{-- @include('website.partials.banner') --}}

    <!-- ======= Locations Section ======= -->
    <section class="testimonial d-flex align-items-center text-light pb-2" id="about">
        <div class="container">
            <div class="row">
                <div class="text-center w-lg-75 m-auto pb-4">
                    <h2 class="py-2">Cities Where We Serve</h2>
                    <p class="para-light">
                        BEWS is a legitimate source of high-quality essays. Writing papers is part of the graduation
                        requirements for college and university. Every student is required to complete the pending tasks
                        within the deadline. With limited time and complex instructions, many students turn to online essay
                        services that can assist in writing a term paper, thesis, or dissertation.

                    </p>
                </div>
            </div>

            <div class="row d-flex align-items-center justify-content-center">
                @foreach ($cities as $key => $city)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12" data-aos="fade-up">
                        <div class="testimonial-card mt-4 p-2" data-aos="fade-right">
                            <div class="row">
                                <div class="col-lg-12 text-center mb-4" data-aos="fade-down">
                                    <img class="img-fluid"
                                        src="{{ $city->post->featured_image ? $city->post->featured_image->getUrl() : '/images/homepage/1646737989.svg' }}"
                                        alt="{{ $city->title }} essay writing services">
                                </div>

                                <div class="col-lg-12 mb-4">
                                    <h3 class="mt-2">{{ $city->post->title }}</h3>
                                    {!! substr(strip_tags($city->post->page_text), 0, 100) !!}
                                </div>
                            </div>
                            <a class="btn mb-4" href="{{ route('post', $city->slug) }}">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div> <!-- end of row -->
        </div>
        <!-- end of container -->
    </section>
    <!-- End Blog Section -->

    <!-- writers -->
    <section class="plans d-flex align-items-center py-5" id="plans">
        <div class="container text-light">
            <div class="text-center pb-4">
                <h2 class="py-2">Team of Professional Essay Writers</h2>
                <p class="para-light">With our essay service, you'll find an essay writer for any task. Their rating is
                    based on previous customer reviews and successful orders. Before you hire a writer, you can familiarize
                    yourself with their track record in detail.</p>
            </div>
            <!-- end of row -->
            <div class="row p-2" data-aos="zoom-in">
                <div class="col-lg-12">
                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container writers-slider">
                            <div class="swiper-wrapper">
                                <!-- Slide -->
                                <!-- end of slide -->
                                @foreach ($writers as $writer)
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-card p-4">
                                            <b>About {{ $writer->Menu->title }} Writer</b>
                                            <p>{!! $writer->content !!}</p>
                                            <div class="d-flex pt-4">
                                                <div class="div-avatar">
                                                    <img class="avatar"
                                                        src="{{ $writer->image ?? '/images/homepage/1660655334.jpg' }}"
                                                        alt="{{ strip_tags($writer->title) }} Expert">
                                                </div>
                                                <div class="ms-3 pt-2">
                                                    {!! $writer->title !!}
                                                    <div class="row text-center">
                                                        <a href="{{ route('order') }}" class="btn m-2">
                                                            Hire Me
                                                        </a>
                                                    </div>
                                                    <p class="mt-2">
                                                        Rating: {{ $writer->bg_alt }} <i class="fa fa-star text-warning"
                                                            aria-hidden="true"></i> <i class="fa fa-star text-warning"
                                                            aria-hidden="true"></i> <i class="fa fa-star text-warning"
                                                            aria-hidden="true"></i> <i class="fa fa-star text-warning"
                                                            aria-hidden="true"></i> <i class="fa fa-star text-warning"
                                                            aria-hidden="true"></i>
                                                    </p>
                                                    <p class="mt-2">
                                                        Expertise:
                                                        <span class="badge rounded-pill bg-primary">
                                                            {{ $writer->Menu->title }}</span>
                                                        <!--<span class="badge rounded-pill bg-primary"> Essay writing</span>-->
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of swiper-slide -->
                                    <!-- end of slide -->
                                @endforeach
                            </div>
                            <!-- end of swiper-wrapper -->
                        </div>
                        <!-- end of swiper-container -->
                    </div>
                    <!-- end of slider-container -->
                    <!-- end of card slider -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div> <!-- end of container -->
    </section>
    <!-- end of writers -->
@endsection
@push('js')
    <script>
        const accordionItems = document.querySelectorAll(".accordion__item--summary");

        accordionItems.forEach(function(item) {
            item.addEventListener("click", function(event) {
                event.stopPropagation();
                item.parentNode.classList.toggle("accordion__item--active");
            });
        });
    </script>
@endpush

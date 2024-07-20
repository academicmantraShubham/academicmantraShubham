@extends('website.layouts.app')

@section('headerData')
    <!-- seo tags -->
    <title>{{ $post->meta_title ?? '' }} – Thesis N Dissertation</title>
    <meta name="description" content="{{ @$post->meta_description }}">
    <meta name="keywords" content="{{ @$post->meta_keyword }}">
@endsection

<!-- swipper css -->
@push('css')
    <link href="{{ asset('website/css/swiper.css') }}" rel="stylesheet">
@endpush

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li>Experts</li>
            </ol>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- writers -->
    <section class="plans d-flex align-items-center py-5" id="plans">
        <div class="container text-light">
            <div class="text-center pb-4">
                <h2 class="py-2">{{ @$post->title }}</h2>
                <article class="para-light">{!! @$post->page_text !!}</article>
            </div>
            <!-- end of row -->

            <form method="get">
                <div class="row justify-content-center my-2">
                    <div class="col-md-4 my-2">
                        <select id="inputState" class="form-control" name="service">
                            <option value="">Select Service</option>
                            @foreach ($services as $service)
                                @foreach ($service->subMenus as $subMenu)
                                    @if (count($subMenu->subMenus) > 0)
                                        <optgroup label="{{ $subMenu->title }}">
                                            @foreach ($subMenu->subMenus as $child)
                                                <option value="{{ $child->id }}"
                                                    {{ app('request')->input('service') == $child->id ? 'selected' : '' }}>
                                                    {{ $child->title }}</option>
                                            @endforeach
                                        </optgroup>
                                    @else
                                        <option value="{{ $subMenu->id }}"
                                            {{ app('request')->input('service') == $subMenu->id ? 'selected' : '' }}>
                                            {{ $subMenu->title }}</option>
                                    @endif
                                @endforeach
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4 my-2">
                        <select id="inputState" class="form-control" name="ratings">
                            <option selected>Select Rating</option>
                            <option value="4" {{ app('request')->input('ratings') == 4 ? 'selected' : '' }}>4 Star
                            </option>
                            <option value="5" {{ app('request')->input('ratings') == 5 ? 'selected' : '' }}>5 Star
                            </option>
                        </select>
                    </div>

                    <div class="col-md-4 my-2">
                        <button class="btn" style="width:100%">
                            Search Writer
                        </button>
                    </div>

                </div>
            </form>

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
                                            <b>About Writer</b>
                                            <p>{{ substr(strip_tags($writer->content), 0, 210) }}</p>

                                            <div class="d-flex pt-4">
                                                {{-- <div class="div-avatar">
                                                    <img class="avatar"
                                                        src="{{ $writer->image ?? '/images/homepage/1660655334.jpg' }}"
                                                        alt="{{ strip_tags($writer->title) }} Expert">
                                                </div> --}}
                                                <div class="ms-3 pt-2">
                                                    {!! $writer->title !!}
                                                    <div class="row text-center">
                                                        <button class="btn m-2">
                                                            Hire Me
                                                        </button>
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
                                                        <span class="badge rounded-pill bg-primary"> Essay writing</span>
                                                        <span class="badge rounded-pill bg-primary"> Essay writing</span>
                                                    </p>
                                                    <p class="mt-2">
                                                        Completed Projects:
                                                        <span class="badge rounded-pill bg-primary">
                                                            {{ rand(10, 100) }}</span>
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

    <section class="w3l-about1 plans" id="about">
        <div id="cwp23-block" class="py-5">
            <div class="container py-lg-5">
                <div class="row cwp23-content">
                    <div class="col-lg-12  mt-lg-0 mt-5  cwp23-text">
                        <div class="cwp23-title">
                            <h3 class="text-center">Why Choose us? </h3>
                        </div>
                        <div class="row justify-content-center">
                            @foreach ($whyChooseUs as $chooseUs)
                                <div class="col-md-5 testimonial-card p-2 m-2">
                                    <span class="fa {{ $chooseUs->alt }}" aria-hidden="true"></span>
                                    <b>
                                        <a href="{{ route('services') }}">{{ strip_tags($chooseUs->title) }}</a>
                                    </b>
                                    <p> {{ strip_tags($chooseUs->content) }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
@endpush

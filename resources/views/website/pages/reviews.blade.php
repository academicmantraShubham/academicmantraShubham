@extends('website.layouts.app')

@section('headerData')
    <!-- seo tags -->
    <title>{{ $post->meta_title ?? '' }} – Thesis N Dissertation</title>
    <meta name="description" content="{{ @$post->meta_description }}">
    <meta name="keywords" content="{{ @$post->meta_keyword }}">
@endsection

@section('content')
    @push('css')
        <link href="{{ asset('website/css/swiper.css') }}" rel="stylesheet">
    @endpush


    @if (isset($post) && !empty($post))
        <section class="about d-flex align-items-center text-light py-5" id="excerpt" style="margin-top: 5.5rem;">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-7" data-aos="fade-right">
                        {!! $post->excerpt !!}
                    </div>
                    <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down">
                        <img loading="lazy" class="img-fluid" title="{{ $post->title }}" style="width:150px"
                            src="{{ $post->featured_image ? $post->featured_image->getUrl() : '/images/homepage/1646737989.svg' }}"
                            alt="{{ $post->title }}">
                    </div>
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </section>
        <!-- end of about -->
    @endif
    
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li>Reviews</li>
            </ol>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    {{-- @include('website.partials.banner') --}}

    <!-- $clientsSays -->
    <div class="slider-1 testimonial text-light d-flex align-items-center" style="background:#1a4c76">
        <div class="container mb-2">
            <div class="row">
                <div class="text-center w-lg-75 m-auto pb-4">
                    <h2 class="py-2">{{ @$post->meta_description }}</h2>
                    <article class="para-light">{{ strip_tags(@$post->excerpt) }}</article>
                </div>
            </div>
            <!-- end of row -->
            <form method="get">
                <div class="row justify-content-center my-2">
                    <div class="col-md-4 my-2">
                        <select id="inputState" class="form-control" name="service">
                            <option selected>Select Service</option>
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
                            Search Reviews
                        </button>
                    </div>

                </div>
            </form>

            <div class="row p-2" data-aos="zoom-in">
                <div class="col-lg-12">
                    <!-- Card Slider -->
                    <div class="slider-container reviews-slider">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                <!-- Slide -->
                                <!-- end of slide -->
                                @foreach ($reviews as $key => $review)
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-card p-4">
                                            @php
                                                $menu = \App\Models\Menu::whereParentId(3)->inRandomOrder()->first();
                                            @endphp
                                            <p><b>Service - </b> {{ $menu->title }}</p>
                                            <p>{!! $review->content !!}</p>
                                            <div class="d-flex pt-4">
                                                <div>
                                                    <img class="avatar"
                                                        src="{{ $review->image ?? '/images/homepage/1640713712.jpg' }}"
                                                        alt="testimonial">
                                                </div>
                                                <div class="ms-3 pt-2">
                                                    {!! $review->title !!}
                                                    <b> Rating - </b>

                                                    @for ($i = rand(1, 3); $i <= 5; $i++)
                                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                    @endfor

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of swiper-slide -->
                                    <!-- end of slide -->
                                @endforeach
                            </div>
                            <!-- end of swiper-wrapper -->
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
                        </div>
                        <!-- end of swiper-container -->
                    </div>
                    <!-- end of slider-container -->
                    <!-- end of card slider -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of $clientsSays -->

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

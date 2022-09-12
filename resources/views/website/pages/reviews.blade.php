@extends('website.layouts.app')

@section('headerData')
 <!-- seo tags -->
 <title>{{ $post->meta_title ?? '' }} – Thesis N Dissertation</title>
 <meta name="description" content="{{ @$post->meta_description }}">
 <meta name="keywords" content="{{ @$post->meta_keyword }}" > 
@endsection

@section('content')

@push('css')
    <link href="{{ asset('website/css/swiper.css') }}" rel="stylesheet">
@endpush


<!-- Header -->
  <header class="ex-header">
      <div class="container">
          <div class="row">
              <div class="col-xl-10 offset-xl-1">
                    <div class="breadcrum">
                        <div class="container">
                          <p><a href="/">Home</a> &nbsp; / &nbsp;Reviews</p>
                        </div>
                    </div>
              </div> <!-- end of col -->
          </div> <!-- end of row -->
      </div> <!-- end of container -->
  </header> <!-- end of ex-header -->
<!-- end of header -->
  
@include('website.partials.banner')
    
  <!-- $clientsSays -->
    <div class="slider-1 testimonial text-light d-flex align-items-center">
        <div class="container mb-2">
            <div class="row">
                <div class="text-center w-lg-75 m-auto pb-4">
                <h2 class="py-2">{{ @$post->title }}</h2>
                <article class="para-light">{!! @$post->page_text !!}</article>
                </div>
            </div>
            <!-- end of row -->
            <div class="row p-2" data-aos="zoom-in">
                <div class="col-lg-12">
                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                <!-- Slide -->
                                <!-- end of slide -->
                                @foreach ($reviews as $key => $review)
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-card p-4">
                                            <p>{!! $review->content !!}</p>
                                            <div class="d-flex pt-4">
                                                <div>
                                                    <img class="avatar" src="{{ $review->image ?? '/images/homepage/1640713712.jpg'}}"
                                                        alt="testimonial">
                                                </div>
                                                <div class="ms-3 pt-2">
                                                    {!! $review->title !!}
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
@endsection
@push('js')

@endpush
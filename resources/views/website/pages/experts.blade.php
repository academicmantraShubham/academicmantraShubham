@extends('website.layouts.app')

@section('headerData')
 <!-- seo tags -->
 <title>{{ $post->meta_title ?? '' }} – Thesis N Dissertation</title>
 <meta name="description" content="{{ @$post->meta_description }}">
 <meta name="keywords" content="{{ @$post->meta_keyword }}" > 
@endsection

<!-- swipper css -->
@push('css')
    <link href="{{ asset('website/css/swiper.css') }}" rel="stylesheet">
@endpush

@section('content')

@include('website.partials.banner')
  
  <!-- Header -->
      <header class="ex-header">
          <div class="container">
              <div class="row">
                  <div class="col-xl-10 offset-xl-1">
                        <div class="breadcrum">
                            <div class="container">
                              <p><a href="/">Home</a> &nbsp; / &nbsp;Experts</p>
                            </div>
                        </div>
                  </div> <!-- end of col -->
              </div> <!-- end of row -->
          </div> <!-- end of container -->
      </header> <!-- end of ex-header -->
  <!-- end of header -->
  

    
        <!-- writers -->
    <section class="plans d-flex align-items-center py-5" id="plans">
        <div class="container text-light">
            <div class="text-center pb-4">
               <h2 class="py-2">{{ @$post->title }}</h2>
                <article class="para-light">{!! @$post->page_text !!}</article>
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
                                            <b>About Writer</b>
                                            <p>{!! $writer->content !!}</p>
                                            <div class="d-flex pt-4">
                                                <div class="div-avatar">
                                                    <img class="avatar" src="{{ $writer->image ?? '/images/homepage/1660655334.jpg' }}" alt="{{ strip_tags($writer->title)}} Expert">
                                                </div>
                                                <div class="ms-3 pt-2">
                                                    {!! $writer->title !!}
                                                    <div class="row text-center">
                                                        <button class="btn m-2">
                                                            Hire Me
                                                        </button>
                                                    </div>
                                                    <p class="mt-2">
                                                        Rating: {{$writer->bg_alt }} <i class="fa fa-star text-warning"
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

@endpush
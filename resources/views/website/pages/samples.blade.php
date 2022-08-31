@extends('website.layouts.app')

@section('headerData')
 <!-- seo tags -->
 <title>{{ $post->meta_title ?? '' }} – Thesis N Dissertation</title>
 <meta name="description" content="{{ @$post->meta_description }}">
 <meta name="keywords" content="{{ @$post->meta_keyword }}" > 
@endsection

@section('content')
  
@include('website.partials.banner')
  <!-- Header -->
      <header class="ex-header">
          <div class="container">
              <div class="row">
                  <div class="col-xl-10 offset-xl-1">
                        <div class="breadcrum">
                            <div class="container">
                              <p><a href="/">Home</a> &nbsp; / &nbsp;Samples</p>
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
                    
                    @foreach ($samples as $sample)
                        <div class="col-md-6">
    
                            <div class="testimonial-card p-4">
                                <b>About Writer</b>
                                <p>{!! $sample->content !!}</p>
                                <div class="d-flex pt-4">
                                    <div class="div-avatar">
                                        <img class="avatar" src="{{ $sample->image }}" alt="{{ strip_tags($sample->title)}} Expert">
                                    </div>
                                    <div class="ms-3 pt-2">
                                        {!! $sample->title !!}
                                        <div class="row text-center">
                                            <button class="btn m-2">
                                                Hire Me
                                            </button>
                                        </div>
                                        <p class="mt-2">
                                            Rating: {{$sample->bg_alt }} <i class="fa fa-star text-warning"
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
                    @endforeach

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
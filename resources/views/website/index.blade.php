@extends('website.layouts.app')
@section('headerData')
    <!-- seo tags -->
    <title>{{ $metadata->title ?? 'Plagiarism Free Writing by PHD Experts – Thesis N Dissertation	' }}</title>
    <meta name="description"
        content="{{ $metadata->content ??'Save up your time and outsource your thesis, dissertations and more  to PHD qualified writing professionals. Guaranteed on-time delivery with high quality material at affordable prices.' }}">
    <meta name="keywords"
        content="{{ $metadata->alt ??'Best essay writing in Australia, online assignment help, Academic writing services, thesis writing and dissertation writing services, online writing services' }}">
    <meta charset="utf-8">
    <!-- shcema -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "service",
            "name": "thesisndissertationhelp.com",
            "image": "logo.png",
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.8",
                "ratingCount": "2034"
            }
        }
    </script>

    <!--OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" />
    <!-- website name -->
    <meta property="og:site" content="" />
    <!-- website link -->
    <meta property="og:title" content="" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" />
    <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" />
    <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image">
    <!-- to have large image post format in Twitter -->
@endsection
<style>
    .information h4{
        text-align:center;
    }
</style>
<!-- swipper css -->
@push('css')
    <link href="{{ asset('website/css/swiper.css') }}" rel="stylesheet">
@endpush

@section('content')
    <!-- Home -->
    <section class="home py-5 d-flex align-items-center" id="header">
        <div class="container text-light py-5" data-aos="fade-right">
            <h1 class="headline">{{ strip_tags(@$thesisNdissertation->title) }}</h1>
            <p class="para py-3">{!! @$thesisNdissertation->content !!}</p>
            <div class="my-3">
                <a class="btn" href="{{route('order')}}">Order Now</a>
            </div>
        </div>
        <!-- end of container -->
    </section>
    <!-- end of home -->

    <!-- Information -->
    <section class="information">
        <div class="container-fluid">
            <div class="row text-light">
                @foreach ($whatYouneed->subHomepages as $key => $whatYouneed)
                    <div class="col-lg-4 text-center p-5" data-aos="zoom-in">
                        {!! $whatYouneed->alt !!}
                        <h4 class="py-3">{!! strip_tags($whatYouneed->title) !!}</h4>
                        <p class="para-light">{!! strip_tags($whatYouneed->content) !!}</p>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- end of container -->
    </section>
    <!-- end of information -->

    <!-- Calculator -->
    <section class="about d-flex align-items-center text-light py-5">
        <div class="container">
            <div class="row d-flex">
                <!-- Part - 1  -->
                <div class="col-lg-8" data-aos="fade-right">
                    <div class="container">
                        {!! $faqs->title !!}
                        <div class="accordion accordion-flush" id="accordionExample">
                            @foreach ($faqs->subHomepages as $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading_{{ $faq->id }}">
                                        <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse_{{ $faq->id }}" aria-expanded="true"
                                            aria-controls="collapse_{{ $faq->id }}">
                                            {!! $faq->title !!}
                                        </button>
                                    </h2>

                                    <div id="collapse_{{ $faq->id }}"
                                        class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                        aria-labelledby="heading_{{ $faq->id }}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body text-secondary">
                                            {!! $faq->content !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Part - 2  -->
                <div class="col-lg-4 py-4 py-sm-0 ">
                    <div class="border border-light rounded p-3">
                        <p class="font-weight-bold text-center" style="font-size:28px">Get The Price Quote</p>
                        <div class="row">
                            <div class="col-6">
                                <select id="service-type" class="form-control" onChange="calculatePrice()">
                                    <!-- <option selected>Choose Service Type</option> -->
                                    @foreach ($calculators as $calculator)
                                        @if ($calculator->place == 1)
                                            <option value="{{ $calculator->price }}">{{ $calculator->category }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6">
                                <select id="service" class="form-control" onChange="calculatePrice()">
                                    <!-- <option selected>Choose Service</option> -->
                                    @foreach ($calculators as $calculator)
                                        @if ($calculator->place == 2)
                                            <option value="{{ $calculator->price }}">{{ $calculator->category }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <select id="service-college" class="form-control" onChange="calculatePrice()">
                                    <!-- <option selected>Select College</option> -->
                                    @foreach ($calculators as $calculator)
                                        @if ($calculator->place == 3)
                                            <option value="{{ $calculator->price }}">{{ $calculator->category }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6">
                                <select id="service-day" class="form-control" onChange="calculatePrice()">
                                    <!-- <option selected>Select Days</option> -->
                                    @foreach ($calculators as $calculator)
                                        @if ($calculator->place == 4)
                                            <option value="{{ $calculator->price }}">{{ $calculator->category }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <select id="service-page" class="form-control" onChange="calculatePrice()">
                                    <!-- <option selected>Select Page</option> -->
                                    @foreach ($calculators as $calculator)
                                        @if ($calculator->place == 5)
                                            <option value="{{ $calculator->price }}">{{ $calculator->category }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" id="service-double"
                                            name="service-space" onChange="calculatePrice()" value="1" checked>Double spaces
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" id="service-single"
                                            name="service-space" onChange="calculatePrice()" value="2">Single Space
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-4">
                                <p style="padding: 0 5px;border-radius: 4px;background-color: #20ba68; color: #fff;">
                                    <s id="customer-data-higer"></s> 25% off
                                </p>
                            </div>
                            <div class="col-4 text-center">
                                <div class="spinner-border text-info" role="status" id="loader">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                            <div class="col-4">
                                <h5 class="font-weight-bold"><span id="customer-data"></span><i
                                        class="fa fa-fire text-warning mx-2" aria-hidden="true"></i></h5>
                            </div>
                        </div>
                        <div class="row mt-2 p-3">
                            <button class="btn"> Write My Paper</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end of row -->
        </div>
    </section>
    <!-- End Calculator -->

    <!-- Service -->
    <section class="services  d-flex align-items-center text-light py-5" id="about">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <h2>{!! @$bestthesis->title !!}</h2>
                    {!! @$bestthesis->content !!}
                    <div class="my-3">
                        <a class="btn" href="{{@$bestthesis->bg_alt}}">Read More</a>
                    </div>
                </div>
                <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down">
                    <img class="img-fluid" src="{!! @$bestthesis->image !!}" alt="{!! @$bestthesis->alt !!}">
                </div>
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </section>
    <!-- end of Service -->

    <!-- Call To Action -->
    <section style="background-color: #3570a3;" class="services d-flex align-items-center py-5" id="services">
        <div class="container text-light">
            <div class="text-center pb-4">
                
                <h2 class="py-2"> {!! @$callus->title !!}</h2>
                <p class="para-light">{!! @$callus->content !!}</p>
                @foreach ($callus->subHomepages as $key => $contact)
                    <a class="btn m-2" href="{{ strip_tags($contact->content) }}" data-aos="zoom-in">
                        {!! $contact->alt !!} {{  strip_tags($contact->title) }}
                    </a>
                @endforeach
                
            </div>
        </div>
    </section>
    <!-- End Call To Action -->

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
                                @foreach ($clientsSays->subHomepages as $key => $clientsSays1)
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-card p-4">
                                            <b>About Writer</b>
                                            <p>{!! $clientsSays1->content !!}</p>
                                            <div class="d-flex pt-4">
                                                <div  class="div-avatar">
                                                    <img class="avatar" src="{{ @$clientsSays1->image }}"
                                                        alt="testimonial">
                                                </div>
                                                <div class="ms-3 pt-2">
                                                    {!! $clientsSays1->title !!}
                                                    <div class="row text-center">
                                                        <button class="btn m-2">
                                                            Hire Me
                                                        </button>
                                                    </div>
                                                    <p class="mt-2">
                                                        Rating: 4.3 <i class="fa fa-star text-warning"
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
                            <!-- Add Arrows -->
                            <!-- <div class="swiper-button-next"></div>
                      <div class="swiper-button-prev"></div> -->
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
        </div> <!-- end of container -->
    </section> <!-- end of writers -->


    <!-- Services -->
    <section class="services d-flex align-items-center py-5" id="services">
        <div class="container text-light">
            <div class="text-center pb-4">
                <h2 class="py-2">{!! @$expectus->title !!}</h2>
                <p class="para-light">{!! @$expectus->content !!}</p>
            </div>
            <div class="row gy-4 py-2" data-aos="zoom-in">
                @foreach ($expectus->subHomepages as $key => $subHomepage)
                    <div class="col-lg-4">
                        <!-- <a href="">  -->
                        <div class="card bg-transparent">
                            <h4 class="py-2 fas">{{ strip_tags($subHomepage->title) }}</h4>
                            <p class="para-light">{!! substr($subHomepage->content, 0, 100) !!}</p>
                        </div>
                        <!-- </a> -->
                    </div>
                @endforeach
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of services -->

    <!-- Plans -->
    <section class="plans d-flex align-items-center py-5" id="plans">
        <div class="container text-light">
            <div class="text-center pb-4">
                <h2 class="py-2">{!! @$bestoffers->title !!}</h2>
                <p class="para-light">{!! @$bestoffers->content !!}</p>
            </div>
            <div class="row gy-4" data-aos="zoom-in">
                @foreach ($bestoffers->subHomepages as $key => $item)
                    <div class="col-lg-4 @if (++$key % 2 == 0) featured @endif">
                        <div class="card bg-transparent px-4">
                            {!! @$item->title !!}
                            {!! @$item->content !!}

                            <!-- <h4 class="py-3">$24/Month</h4> -->
                            <div class="my-3">
                                <a class="btn" href="#your-link">View Plans</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of plans -->

    <!-- Work -->
    <section class="work d-flex align-items-center py-5">
        <div class="container-fluid text-light">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right">
                    <img class="img-fluid" src="{!! @$explorePossibilities->image !!}" alt="{!! @$explorePossibilities->alt !!}">
                </div>
                <div class="col-lg-5 d-flex align-items-center px-4 py-3" data-aos="">
                    <div class="row">
                        <div class="text-center text-lg-start py-4 pt-lg-0">
                            <h2 class="py-2">{!! @$explorePossibilities->title !!}</h2>
                            <p class="para-light">{!! @$explorePossibilities->content !!}</p>
                        </div>
                        <div class="container" data-aos="fade-explorePossibilities">
                            <div class="row g-5">
                                <div class="col-6 text-start">
                                    <i class="fas fa-briefcase fa-2x text-start"></i>
                                    <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="{{strip_tags(@$explorePossibilities->subHomepages[0]->content)}}"
                                        data-purecounter-duration="3">1</h2>
                                    <p>{{strip_tags(@$explorePossibilities->subHomepages[0]->title)}}</p>
                                </div>
                                <div class="col-6">
                                    <i class="fas fa-award fa-2x"></i>
                                    <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="{{strip_tags(@$explorePossibilities->subHomepages[1]->content)}}"
                                        data-purecounter-duration="3">1</h2>
                                    <p>{{strip_tags(@$explorePossibilities->subHomepages[1]->title)}}</p>
                                </div>
                                <div class="col-6">
                                    <i class="fas fa-users fa-2x"></i>
                                    <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="{{strip_tags(@$explorePossibilities->subHomepages[2]->content)}}"
                                        data-purecounter-duration="3">1</h2>
                                    <p>{{strip_tags(@$explorePossibilities->subHomepages[2]->title)}}</p>
                                </div>
                                <div class="col-6">
                                    <i class="fas fa-clock fa-2x"></i>
                                    <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="{{strip_tags(@$explorePossibilities->subHomepages[3]->content)}}"
                                        data-purecounter-duration="3">1</h2>
                                    <p>{{strip_tags(@$explorePossibilities->subHomepages[3]->title)}}</p>
                                </div>
                            </div>
                        </div>
                        <!-- end of container -->
                    </div>
                    <!-- end of row -->
                </div>
                <!-- end of col-lg-5 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </section>
    <!-- end of work -->

    <!-- Testimonials -->
    <div class="slider-1 testimonial text-light d-flex align-items-center">
        <div class="container mb-2">
            <div class="row">
                <div class="text-center w-lg-75 m-auto pb-4">
                    <h2 class="py-2">{!! @$clientsSays->title !!}</h2>
                    <p class="para-light">{!! @$clientsSays->content !!}</p>
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
                                @foreach ($clientsSays->subHomepages as $key => $clientsSays)
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-card p-4">
                                            <p>{!! $clientsSays->content !!}</p>
                                            <div class="d-flex pt-4">
                                                <div>
                                                    <img class="avatar" src="{{ @$clientsSays->image }}"
                                                        alt="testimonial">
                                                </div>
                                                <div class="ms-3 pt-2">
                                                    {!! $clientsSays->title !!}
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
    <!-- end of testimonials -->

    <!-- Contact -->
    {{-- <section class="contact d-flex align-items-center py-5" id="contact">
      <div class="container-fluid text-light">
         <div class="row">
            <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end align-items-center px-lg-5" data-aos="fade-right">
               <div style="width:90%">
                  <div class="text-center text-lg-start py-4 pt-lg-0">
                     <h2 class="py-2">{!! @$sendyourquery->title !!}</h2>
                     <p class="para-light">{!! @$sendyourquery->content !!}</p>
                  </div>
                  <div>
                     <div class="row" >
                        <div class="col-lg-6">
                           <div class="form-group py-2">
                              <input type="text" class="form-control form-control-input" id="exampleFormControlInput1" placeholder="Enter name">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group py-2">
                              <input type="email" class="form-control form-control-input" id="exampleFormControlInput2" placeholder="Enter phone number">
                           </div>
                        </div>
                     </div>
                     <div class="form-group py-1">
                        <input type="email" class="form-control form-control-input" id="exampleFormControlInput3" placeholder="Enter email">
                     </div>
                     <div class="form-group py-2">
                        <textarea class="form-control form-control-input" id="exampleFormControlTextarea1" rows="6" placeholder="Message"></textarea>
                     </div>
                  </div>
                  <div class="my-3">
                     <a class="btn form-control-submit-button" href="#your-link">Submit</a>
                  </div>
               </div>
               <!-- end of div -->
            </div>
            <!-- end of col -->
            <div class="col-lg-6 d-flex align-items-center" data-aos="fade-down">
               <img class="img-fluid d-none d-lg-block" src="{{ @$sendyourquery->image }}" alt="contact">        
            </div>
            <!-- end of col -->
         </div>
         <!-- end of row -->
      </div>
      <!-- end of container -->
   </section> --}}
    <!-- end of contact -->

    <!-- Services -->
    <section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down">
                    <img class="img-fluid" src="{{ @$customessay->image }}" alt="{{ @$customessay->alt }}">
                </div>
                <div class="col-lg-7" data-aos="fade-right">
                    <h2>{!! @$customessay->title !!}</h2>
                    {!! @$customessay->content !!}
                    <div class="my-3">
                        <a class="btn" href="{{ @$customessay->bg_alt }}">Read More</a>
                    </div>
                </div>
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </section>
    <!-- end of Services -->

    <style>
        .bottom h2{
            color: #05ada3;
            line-height: 1.1;
            font-weight: 400;
            letter-spacing: .2px;
            white-space: nowrap;
        }
    </style>

    <!-- ======= Usp Section ======= -->
    <section class="bottom d-flex align-items-center text-light py-5" id="about">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-12" data-aos="fade-right">
                    {!! @$usps->title !!}
                    {!! @$usps->content !!}
                    <div class="row information">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    @foreach ($usps->subHomepages as $usp)
                                        <div class="col-md-6">
                                            <div class="usp-title" style="display:flex; align-items:center">
                                                <i class="fas fa-poll-h fa-3x p-2"></i>    {!! @$usp->title !!}
                                            </div>
                                            <div class="usp-content" style="padding-left:60px">
                                                {!! @$usp->content !!}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-4 text-center py-4 py-sm-0 justify-content-center" style="display:flex;" data-aos="fade-down">
                                <img class="img-fluid" src="{{ @$usps->image }}" alt="{{ @$usps->alt }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </section>
    <!-- ======= Usp Section ======= -->

     <!--Free Services -->
     <section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container">
            <div class="row d-flex align-items-center">
                <h2 class="text-center font-weight-bold p-2"><strong>{{ strip_tags(@$freeServices->title) }}</strong></h2>
                <div class="text-center m-2">
                    {!! @$freeServices->content !!}
                </div>
            <table class="table table-bordered">
                <tbody style="color:#ffffff">
                    @foreach ($freeServices->subHomepages as $freeService)
                    <tr>
                        <td>{!! @$freeService->title !!}</td>
                        <td>{!! @$freeService->content !!}</td>
                        <td>{!! @$freeService->alt !!}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="3" class="text-center font-weight-bold" style="color:#ffffff"><h2><strong>{{ @$freeServices->alt }}</strong></h2></td>
                    </tr>
                </tbody>
                </table>       
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </section>
    <!-- end of Free Services -->

    <!-- ======= Blog Section ======= -->
    <section class="testimonial d-flex align-items-center text-light pb-2" id="about">
        <div class="container">
            <div class="row">
                <div class="text-center w-lg-75 m-auto pb-4">
                    <h2 class="py-2">{{ strip_tags(@$hblog->title) }}</h2>
                     <p class="para-light">{!! @$hblog->content !!}</p> 
                </div>
            </div>

            <div class="row d-flex align-items-center">
                @foreach ($blogs as $key => $blog)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12" data-aos="fade-up">
                        <div class="testimonial-card mt-4 p-2" data-aos="fade-right">
                            <div class="row">
                                <div class="col-lg-12 text-center mb-4" data-aos="fade-down">
                                    <img class="img-fluid" src="{{ $blog->featured_image->getUrl() }}"
                                        alt="bestessaywritingservices">
                                </div>
                                <div class="col-lg-12 mb-4">
                                    <h3 class="mt-2">{{ $blog->title }}</h3>
                                    {!! substr(strip_tags($blog->page_text), 0, 100) !!}
                                </div>
                            </div>
                            <a class="btn mb-4" href="{{ route('website.pages.detail', $blog->id) }}">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div> <!-- end of row -->
        </div>
        <!-- end of container -->
    </section>
    <!-- End Blog Section -->


    <!-- Location -->
    <section class="location text-light py-5">
        <div class="container" data-aos="zoom-in">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center">
                    <div class="p-2"><i class="far fa-map fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>ADDRESS</h6>
                        <p>Teuku Umar ST. 1919</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center">
                    <div class="p-2"><i class="fas fa-mobile-alt fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>CALL FOR QUERY</h6>
                        <p>(800) 265 216 2020</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center">
                    <div class="p-2"><i class="far fa-envelope fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>SEND US MESSAGE</h6>
                        <p>infodemofile@example.com</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center">
                    <div class="p-2"><i class="far fa-clock fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>OPENING HOURS</h6>
                        <p>09:00 AM - 18:00 PM</p>
                    </div>
                </div>
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </section>
    <!-- end of location -->

    @push('js')
        <script>
            function calculatePrice() {

                let loader = document.getElementById('loader');
                let service = document.getElementById('service').value;
                let serviceDay = document.getElementById('service-day').value;
                let serviceType = document.getElementById('service-type').value;
                let servicePage = document.getElementById('service-page').value;
                let serviceCollege = document.getElementById('service-college').value;

                loader.style.display = "inline-block";

                if (document.getElementById('service-double').checked) {
                    var multi = document.getElementById('service-double').value;
                }

                if (document.getElementById('service-single').checked) {
                    var multi = document.getElementById('service-single').value;
                }

                data = parseInt(service) + parseInt(serviceDay) + parseInt(serviceType) + parseInt(servicePage) + parseInt(
                    serviceCollege);
                multi = data * multi;

                setTimeout(() => {
                    document.getElementById('customer-data').innerText = "$" + multi;
                    multi = parseInt(multi) * 1.25;
                    document.getElementById('customer-data-higer').innerText = "$" + multi;
                    loader.style.display = "none";
                }, 1500);
            }
            calculatePrice();
        </script>
    @endpush
@endsection

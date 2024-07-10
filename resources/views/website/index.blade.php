@extends('website.layouts.app')
@section('headerData')
    <!-- seo tags -->
    <title>{{ $metadata->title ?? 'Plagiarism Free Writing by PHD Experts – Best Essay Writing Services' }}</title>
    <meta name="description"
        content="{{ $metadata->content ?? 'Save up your time and outsource your thesis, dissertations and more  to PHD qualified writing professionals. Guaranteed on-time delivery with high quality material at affordable prices.' }}">
    <meta name="keywords"
        content="{{ $metadata->alt ?? 'Best essay writing in Australia, online assignment help, Academic writing services, thesis writing and dissertation writing services, online writing services' }}">
    <meta charset="utf-8">
    <!-- shcema -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "product",
            "name": "getessayservice.com",
            "image": "https://getessayservice.com//images/homepage/1664381283.png",
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.8",
                "ratingCount": "2034"
            }
        }
    </script>

    <!--OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="Best Essay Writing Services" />
    <!-- website name -->
    <meta property="og:site" content="https://getessayservice.com/" />
    <!-- website link -->
    <meta property="og:title"
        content="{{ $metadata->title ?? 'Plagiarism Free Writing by PHD Experts – Best Essay Writing Services' }}" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description"
        content="{{ $metadata->content ?? 'Save up your time and outsource your thesis, dissertations and more  to PHD qualified writing professionals. Guaranteed on-time delivery with high quality material at affordable prices.' }}" />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" />
    <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="https://getessayservice.com/" />
    <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image">
    <!-- to have large image post format in Twitter -->
@endsection

<!-- swipper css -->
@push('css')
    <link href="{{ asset('website/css/swiper.css') }}" rel="stylesheet">
    <style>
        .bottom h2 {
            color: #05ada3;
            line-height: 1.1;
            font-weight: 400;
            letter-spacing: .2px;
            /* white-space: nowrap; */
            text-align: center;
        }

        .div-h-text h2,
        .div-h-text h3 {
            text-align: center;
        }

        .div-h-text+p {
            text-align: center;
        }

        #header ul {
            column-count: 2;
        }

        .looking-prof {
            max-height: 400px;
            overflow-y: scroll;
        }

        /* ===== Scrollbar CSS ===== */
        /* Firefox */
        /* Chrome, Edge, and Safari */
        .accordion__wrapper::-webkit-scrollbar,
        .looking-prof::-webkit-scrollbar {
            width: 12px;
        }

        .accordion__wrapper::-webkit-scrollbar-track,
        .looking-prof::-webkit-scrollbar-track {
            background: #ffffff;
        }

        .accordion__wrapper::-webkit-scrollbar-thumb,
        .looking-prof::-webkit-scrollbar-thumb {
            background-color: #05e096;
            border-radius: 12px;
            border: 4px solid #ffffff;
        }

        @media (min-width: 992px) {
            .accordion__wrapper {
                max-height: 350px;
                overflow-y: scroll;
            }
        }

        @media (max-width: 992px) {
            #header ul {
                column-count: 2;
            }
        }

        @media only screen and (max-width: 540px) {
            #header ul {
                column-count: 1;
            }
        }
    </style>
@endpush

@section('content')
    <!-- Home -->
    <section class="home py-5 d-flex align-items-center" id="header">
        <div class="container text-light py-5" data-aos="fade-right">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="headline">{{ strip_tags(@$thesisNdissertation->title) }}</h1>
                    <p class="para py-3">{!! @$thesisNdissertation->content !!}</p>
                </div>
                <div class="col-md-6">

                </div>
            </div>
            <div class="row text-light">
                <div class="py-3 text-center">
                    <a class="btn" href="{{ route('order') }}">Order Now</a>
                </div>
            </div>
        </div>
        <!-- end of container -->
    </section>
    <!-- end of home -->


    <!-- $explorePossibilities -->
    <section class="work d-flex align-items-center py-5">
        <div class="container-fluid text-light">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right">
                    <img class="img-fluid" src="{!! @$explorePossibilities->image !!}" alt="{!! @$explorePossibilities->alt !!}">
                </div>
                <div class="col-lg-5 d-flex align-items-center px-4 py-3" data-aos="">
                    <div class="row">
                        <div class="text-center text-lg-start py-4 pt-lg-0">
                            <div class="py-2 div-h-text">{!! @$explorePossibilities->title !!}</div>
                            <p class="para-light">{!! @$explorePossibilities->content !!}</p>
                        </div>
                        <div class="container" data-aos="fade-explorePossibilities">
                            <div class="row g-5">
                                <div class="col-6 text-start">
                                    <i class="fas fa-briefcase fa-2x text-start"></i>
                                    <div class="d-flex">
                                        <p class="purecounter h2" data-purecounter-start="0"
                                            data-purecounter-end="{{ strip_tags(@$explorePossibilities->subHomepages[0]->content) }}"
                                            data-purecounter-duration="3">1</p><span>+</span>
                                    </div>
                                    <p>{{ strip_tags(@$explorePossibilities->subHomepages[0]->title) }}</p>
                                </div>
                                <div class="col-6">
                                    <i class="fas fa-award fa-2x"></i>
                                    <div class="d-flex">
                                        <p class="purecounter h2" data-purecounter-start="0"
                                            data-purecounter-end="{{ strip_tags(@$explorePossibilities->subHomepages[1]->content) }}"
                                            data-purecounter-duration="3">1</p><span>+</span>
                                    </div>
                                    <p>{{ strip_tags(@$explorePossibilities->subHomepages[1]->title) }}</p>
                                </div>
                                <div class="col-6">
                                    <i class="fas fa-users fa-2x"></i>
                                    <div class="d-flex">
                                        <p class="purecounter h2" data-purecounter-start="0"
                                            data-purecounter-end="{{ strip_tags(@$explorePossibilities->subHomepages[2]->content) }}"
                                            data-purecounter-duration="3">1</p><span>+</span>
                                    </div>
                                    <p>{{ strip_tags(@$explorePossibilities->subHomepages[2]->title) }}</p>
                                </div>
                                <div class="col-6">
                                    <i class="fas fa-clock fa-2x"></i>
                                    <div class="d-flex">
                                        <p class="purecounter h2" data-purecounter-start="0"
                                            data-purecounter-end="{{ strip_tags(@$explorePossibilities->subHomepages[3]->content) }}"
                                            data-purecounter-duration="3">1</p><span>+</span>
                                    </div>
                                    <p>{{ strip_tags(@$explorePossibilities->subHomepages[3]->title) }}</p>
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
    <!-- end of $explorePossibilities -->

    <!-- $clientsSays -->
    <div class="slider-1 testimonial text-light d-flex align-items-center clients-says">
        <div class="container mb-2">
            <div class="row">
                <div class="text-center w-lg-75 m-auto pb-4">
                    <div class="py-2 text-center div-h-text">{!! @$clientsSays->title !!}</div>
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
                                                    <img class="avatar"
                                                        src="{{ @$clientsSays->image ?? 'https://xsgames.co/randomusers/avatar.php?g=female' }}"
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
    <!-- end of $clientsSays -->

    <!-- Information -->
    <section class="information">
        <div class="container-fluid">
            <div class="row">
                <div class="text-center w-lg-75 m-auto pb-4">
                    <div class="py-2 text-center div-h-text">
                        <h2> Get Our Essay Help In Just 3 Steps</h2>
                    </div>
                </div>
            </div>
            <div class="row text-light">
                @foreach ($whatYouneed->subHomepages as $key => $whatYouneed)
                    <div class="col-lg-4 text-center p-5" data-aos="zoom-in">
                        {!! $whatYouneed->alt !!}
                        <h3 class="py-3 h2 text-center">{!! strip_tags($whatYouneed->title) !!}</h3>
                        <p class="para-light">{!! strip_tags($whatYouneed->content) !!}</p>
                    </div>
                @endforeach
            </div>

            <div class="row text-light">
                <div class="py-3 text-center">
                    <a class="btn" href="{{ route('order') }}">Order Now</a>
                </div>
            </div>
        </div>
        <!-- end of container -->
    </section>
    <!-- end of information -->

    <!-- Service -->
    <section class="services  d-flex align-items-center text-light py-5" id="about">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="">{!! @$bestthesis->title !!}</div>
                    {!! @$bestthesis->content !!}
                    <div class="my-3">
                        <a class="btn" href="{{ @$bestthesis->bg_alt }}">Read More</a>
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

    <!-- writers -->
    <section class="plans d-flex align-items-center py-5" id="plans">
        <div class="container text-light">
            <div class="text-center pb-4">
                <h2 class="py-2">Team of Professional Writers</h2>
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
                                @foreach ($writers as $key => $writer)
                                    <!-- Slide -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-card p-4">
                                            <b>About :- {{ @$writer->Menu->title }} Writer</b>
                                            <p>{{ strip_tags($writer->content) }}</p>
                                            <div class="d-flex pt-4">
                                                {{-- <div class="div-avatar">
                                                    <img class="avatar"
                                                        src="{{ $writer->image ?? '/images/homepage/1660655334.jpg' }}"
                                                        alt="{{ strip_tags($writer->title) }} Expert">
                                                </div> --}}
                                                <div class="ms-3 pt-2">
                                                    {!! $writer->title !!}
                                                    <div class="row text-center hire-div">
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
                                                        <span class="badge rounded-pill bg-primary"> Essay writing</span>
                                                        <span class="badge rounded-pill bg-primary"> Essay writing</span>
                                                    </p>
                                                    <p class="mt-2">
                                                        Completedt Projects:
                                                        <span class="badge rounded-pill bg-primary"> {{ rand(10,100) }}</span>
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
    </section>
    <!-- end of writers -->

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
                                <td> <strike> {!! @$freeService->content !!} </strike></td>
                                <td>{!! @$freeService->alt !!}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3" class="text-center font-weight-bold" style="color:#ffffff">
                                <p class="text-center font-weight-bold"><strong>{{ @$freeServices->alt }}</strong></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </section>
    <!-- end of Free Services -->


    <!-- expectus -->
    <section class="plans d-flex align-items-center py-5" id="services">
        <div class="container text-light">
            <div class="text-center pb-4">
                <div class="py-2 text-center div-h-text">{!! @$expectus->title !!}</div>
                <p class="para-light">{!! @$expectus->content !!}</p>
            </div>
            <div class="row gy-4 py-2" data-aos="zoom-in">
                @foreach ($expectus->subHomepages->take(9) as $key => $subHomepage)
                    <div class="col-lg-4">
                        <!-- <a href="">  -->
                        <div class="card bg-transparent">
                            <h3 class="py-2 text-success">{{ strip_tags($subHomepage->title) }}</h3>
                            <div class="para-light">
                                {!! $subHomepage->content !!}
                            </div>
                        </div>
                        <!-- </a> -->
                    </div>
                @endforeach
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>
    <!-- end of services -->

    <!-- $bestoffers -->
    <section class="plans d-flex align-items-center py-5" id="plans">
        <div class="container text-light">
            <div class="text-center pb-4">
                <div class="py-2 text-center div-h-text">{!! @$bestoffers->title !!}</div>
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
                                <a class="btn" href="{{ route('order') }}?code={{ $item->alt }}">View Plans</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>
    <!-- end of $bestoffers -->


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
                    <div class="text-center py-2 div-h-text">{!! @$customessay->title !!}</div>
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

    <!-- ======= Usp Section ======= -->
    <section class="bottom d-flex align-items-center text-light py-5" id="about">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-12" data-aos="fade-right">
                    <div class="text-center div-h-text">
                        {!! @$usps->title !!}
                        {!! @$usps->content !!}
                    </div>
                    <div class="row information">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    @foreach ($usps->subHomepages as $usp)
                                        <div class="col-md-6">
                                            <div class="usp-title" style="display:flex; align-items:center">
                                                <i class="fas fa-poll-h fa-3x p-2"></i> {!! @$usp->title !!}
                                            </div>
                                            <div class="usp-content" style="padding-left:60px">
                                                {!! @$usp->content !!}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-4 text-center py-4 py-sm-0 justify-content-center" style="display:flex;"
                                data-aos="fade-down">
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

    <!-- Services -->
    @if ($looking_prof)
        <section class="plans d-flex align-items-center text-light py-5" id="about">
            <div class="container">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-lg-12 looking-prof" data-aos="fade-right">
                        <div class="text-center py-2 div-h-text ">{!! @$looking_prof->title !!}</div>
                        {!! @$looking_prof->content !!}
                        {{-- <div class="my-3">
                        <a class="btn" href="{{ @$customessay->bg_alt }}">Read More</a>
                    </div> --}}
                    </div>
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </section>
        <!-- end of Services -->
    @endif

    <!-- Calculator -->
    <section class="about d-flex align-items-center text-light py-5">
        <div class="container">
            <div class="row d-flex">
                <!-- Part - 1  -->
                <div class="col-lg-8" data-aos="fade-right">
                    <div class="container">
                        <div class="text-center">
                            {!! $faqs->title !!}
                        </div>

                        <div class="content content__accordion">
                            <div class="accordion">
                                <div class="accordion__wrapper">
                                    @foreach ($faqs->subHomepages as $faq)
                                        <div class="accordion__item">
                                            <div class="accordion__item--summary">
                                                <div class="accordion__item-icon">
                                                    <i class="fas fa-fw fa-futbol"></i>
                                                </div>
                                                <div class="accordion__item-title">
                                                    <h3>{{ strip_tags($faq->title) }}</h3>
                                                </div>
                                                <div class="accordion__item-toggler">
                                                    <button>
                                                        <i class="fas fa-fw fa-angle-down"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="accordion__item--detail">
                                                <div class="accordion__detail">
                                                    <div class="accordion__detail-section">
                                                        {!! $faq->content !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
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
                                            name="service-space" onChange="calculatePrice()" value="1"
                                            checked>Double
                                        spaces
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
                                <p class="offer-cal">
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
                            <a class="btn" href="{{ route('order') }}"> Write My Paper</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end of row -->
        </div>
    </section>
    <!-- End Calculator -->

    <!-- ======= Blog Section ======= -->
    <section class="plans d-flex align-items-center text-light pb-2" id="about">
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
                                    <img class="img-fluid"
                                        src="{{ $blog->featured_image ? $blog->featured_image->getUrl() : 'https://dummyimage.com/2000x1114/fff/aaa&text=get%20essay%20service' }}"
                                        alt="{{ $blog->title }}">
                                </div>
                                <div class="col-lg-12 mb-4">
                                    <p class="mt-2 text-success">{{ $blog->title }}</p>
                                    <p>
                                        {!! substr(strip_tags($blog->page_text), 0, 100) !!}
                                    </p>
                                </div>
                            </div>
                            <a class="btn mb-4" href="{{ route('blog', $blog->slug) }}">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div> <!-- end of row -->
        </div>
        <!-- end of container -->
    </section>
    <!-- End Blog Section -->

    <!-- Call To Action -->
    <section style="background-color: #3570a3;" class="services d-flex align-items-center py-5" id="services">
        <div class="container text-light">
            <div class="text-center pb-4">

                <div class="py-2 text-center div-h-text"> {!! @$callus->title !!}</div>
                <p class="para-light">{!! @$callus->content !!}</p>
                @foreach ($callus->subHomepages as $key => $contact)
                    <a class="btn m-2" href="{{ strip_tags($contact->content) }}" data-aos="zoom-in">
                        {!! $contact->alt !!} {{ strip_tags($contact->title) }}
                    </a>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End Call To Action -->


    <!-- Location -->
    {{-- <section class="location text-light py-5">
        <div class="container" data-aos="zoom-in">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center">
                    <div class="p-2"><i class="far fa-map fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>ADDRESS</h6>
                        <p>James cook drive Truganina, Victoria Australia zip-code 3029</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center">
                    <div class="p-2"><i class="fas fa-mobile-alt fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>CALL FOR QUERY</h6>
                        <p> <a href="tel:+61-413228507"> +61-413228507</a></p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center">
                    <div class="p-2"><i class="far fa-envelope fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>SEND US MESSAGE</h6>
                        <p><a href="help@bestessaywritingservices.com.au">help@bews.com.au</a></p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center">
                    <div class="p-2"><i class="far fa-clock fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>OPENING HOURS</h6>
                        <p><b>24/7</b></p>
                    </div>
                </div>
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </section> --}}
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
@endsection

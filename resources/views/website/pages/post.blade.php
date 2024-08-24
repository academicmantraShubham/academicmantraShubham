@extends('website.layouts.app')

@section('headerData')
    <!-- seo tags -->
    <title>{{ $post->meta_title ?? 'Best Essay Writing Services' }}</title>
    <meta name="description" content="{{ @$post->meta_description }}">
    <meta name="keywords" content="{{ @$post->meta_keyword }}">
@endsection

<!-- swipper css -->
@push('css')
    <link href="{{ asset('website/css/swiper.css') }}" rel="stylesheet">
    <style>
        .inter-linking figure img {
            width: 100%;
        }

        .grecaptcha-badge {
            display: none !important;
        }

        /* new form */
        .new-card {
            width: auto;
            height: auto;
            background-color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            border-radius: 20px;
        }

        .new-card h2 {
            margin-bottom: 10px;
            color: black;
        }

        .new-card a.fp {
            width: 100%;
            display: flex;
            color: #5881D0;
        }

        .login_register {
            display: flex;
            width: 100%;
            border: 1px solid rgba(221, 221, 221, 1);
            border-radius: 15px;
            margin: 20px 0;
        }

        .login_register a {
            font-size: 1em;
            padding: 10px 55px;
            border: none;
            width: 50%;
        }

        .login_register a.login {
            border-radius: 15px;
            background-color: transparent;
            color: black;
        }

        .login_register a.register {
            border-radius: 15px;
            background: linear-gradient(-90deg, #0ee951, #0dcaf0);
            color: white;
        }

        .form {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .form input {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #DDDDDD;
            color: #A0A6A3;
            font-family: "Roboto Mono", sans-serif;
            box-shadow: 1px 5px 9px rgba(211, 211, 211, .7);
        }

        .form input.email {
            margin-bottom: 15px;
        }

        .form input.pass {
            margin-bottom: 15px;
        }

        .form input.comfirm_pass {
            margin-bottom: 5px;
        }

        .login_btn {
            font-size: 20px;
            color: white;
            border-radius: 15px;
            border: none;
            background-color: #0ee951;
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            margin-bottom: 15px;
            background: linear-gradient(-90deg, #0ee951, #0dcaf0);
            box-shadow: 1px 5px 9px rgba(211, 211, 211, .9);
        }

        .review-card-sites {
            padding: 10px;
            background: linear-gradient(165deg, var(--white) 21.67%, var(--white) 51.26%, rgba(225, 235, 245, 0) 91.24%);
            -webkit-backdrop-filter: blur(4.10205px);
            backdrop-filter: blur(4.10205px);
            border-radius: 6.2245px;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            flex-wrap: wrap;
        }

        .review-card-sites img {
            width: 200px;
        }

        .review-card-sites span {
            font-size: 24px;
            line-height: 60px;
            font-weight: 600;
            color: black;
        }
    </style>
@endpush

@section('content')

    <!-- About -->
    @if (isset($post) && !empty($post))

        <!-- Home -->
        <section class="home py-5 d-flex align-items-center" id="header">
            <div class="container text-light py-5" data-aos="fade-right">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="headline" style="font-size:46px">{{ $post->title }}</h1>
                        <p class="para py-3">{!! @$thesisNdissertation->content !!}</p>
                    </div>
                    <div class="col-md-6">
                        <div class="new-card">
                            <h2>Get Instant Help From Experts</h2>

                            <!-- FORMULAIRE -->
                            <form class="form" action="{{ route('enquiry-form') }}" method="POST">
                                @csrf
                                @captcha
                                <input type="text" placeholder="Name" class="email" name="name" required>
                                <input type="email" placeholder="Email Adress" class="email" name="email" required>
                                <input type="number" placeholder="Enter word count" class="email" name="word_count"
                                    required>
                                <input type="text" class="email" placeholder="Choose Deadline" name="deadline"
                                    onfocus="(this.type='date')" name="deadline" min="<?php echo date('Y-m-d'); ?>" required />
                                <input type="text" placeholder="Enter Topic" class="email" name="topic" required>

                                <!-- BOUTTON LOGIN -->
                                <button type="submit" class="login_btn" type="submit">Enquire Now</button>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="row text-light">
                    <div class="py-3 text-center">
                        <a class="btn" href="{{ route('order') }}" aria-label="Order Now">Order Now</a>
                    </div>
                </div>
            </div>
            <!-- end of container -->
        </section>
        <!-- end of home -->
        @if ($review)
            <!-- Reviews -->
            <section style="background-color: #3570a3;" class="services d-flex align-items-center pb-5" id="services">
                <div class="container text-light">
                    <div class="text-center pb-4">

                        <div class="py-2 text-center div-h-text"> {!! @$review->title !!}</div>

                        <div class="row justify-content-center">
                            @foreach ($review->subHomepages as $key => $site)
                                <div class="col-sm-3 pt-2" data-aos="fade-right">
                                    <div class="review-card-sites" data-aos="fade-explorePossibilities">
                                        <img src="{{ $site->image }}" alt="{{ strip_tags($site->content) }}">
                                        <span>{{ $site->alt }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </section>
            <!-- End Reviews -->
        @endif
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

    @endif


    @if (url()->current() == 'https://getessayservice.com//au-australia')
        <!-- ======= Country Section ======= -->
        <section class="testimonial d-flex align-items-center text-light pb-2" id="about">
            <div class="container">
                <div class="row">
                    <div class="text-center w-lg-75 m-auto pb-4">
                        <h2 class="py-2">Cities Where We Serve</h2>
                        <p class="para-light">

                        </p>
                    </div>
                </div>

                <div class="row d-flex align-items-center">
                    @foreach ($cities as $key => $city)
                        @if ($loop->first)
                        @else
                            <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12" data-aos="fade-up">
                                <div class="testimonial-card mt-4 p-2" data-aos="fade-right">
                                    <div class="row">
                                        <div class="col-lg-12 text-center mb-4" data-aos="fade-down">
                                            <img class="img-fluid" loading="lazy"
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
                        @endif
                    @endforeach
                </div> <!-- end of row -->
            </div>
            <!-- end of container -->
        </section>
        <!-- End Country Section -->
    @endif

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
                                            <b>About {{ @$writer->Menu->title }} Writer</b>
                                            <p>{{ substr(strip_tags($writer->content), 0, 210) }}...</p>
                                            <div class="d-flex pt-4">
                                                {{-- <div class="div-avatar">
                                                    <img class="avatar" loading="lazy"
                                                        src="{{ $writer->image ?? '/images/homepage/1660655334.jpg' }}"
                                                        alt="{{ strip_tags($writer->title) }} Expert">
                                                </div> --}}
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
                                                            {{ @$writer->Menu->title }}</span>
                                                        <!--<span class="badge rounded-pill bg-primary"> Essay writing</span>-->
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

    @if (url()->current() != 'https://getessayservice.com//au-australia' && strpos(url()->current(), 'au-') !== false)
        <!-- ======= Top Colleges ======= -->
        <section class="testimonial d-flex align-items-center text-light pb-2" id="about">
            <div class="container">
                <div class="row">
                    <div class="text-center w-lg-75 m-auto pb-4">
                        <h2 class="py-2">Top Colleges of {{ $post->title }}</h2>
                        <!--<p class="para-light">-->

                        <!--</p> -->
                    </div>
                </div>

                <div class="row d-flex align-items-center">
                    <div class="col-12" data-aos="fade-up">
                        <ul class="top-university-ul">
                            <li class="top-university-li">
                                <img loading="lazy" class="top-university-img"
                                    src="/images/universities/Macquarie-University-logo.jpg">
                                <p class="top-university-name">Macquarie University</p>
                            </li>
                            <li class="top-university-li">
                                <img loading="lazy" class="top-university-img"
                                    src="/images/universities/Macquarie-University-logo.jpg">
                                <p class="top-university-name">Macquarie University</p>
                            </li>
                            <li class="top-university-li">
                                <img loading="lazy" class="top-university-img"
                                    src="/images/universities/Macquarie-University-logo.jpg">
                                <p class="top-university-name">Macquarie University</p>
                            </li>
                            <li class="top-university-li">
                                <img loading="lazy" class="top-university-img"
                                    src="/images/universities/Macquarie-University-logo.jpg">
                                <p class="top-university-name">Macquarie University</p>
                            </li>
                            <li class="top-university-li">
                                <img loading="lazy" class="top-university-img"
                                    src="/images/universities/Macquarie-University-logo.jpg">
                                <p class="top-university-name">Macquarie University</p>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of row -->
            </div>
            <!-- end of container -->
        </section>
        <!-- End Top Colleges Section -->
    @endif

    @if ($whatYouneed)
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
    @endif

    @if (count($post->faqs) > 0)
        <!-- FAQS -->
        <section class="bottom d-flex align-items-center text-light py-5">
            <div class="container">
                <div class="row d-flex">
                    <!-- Part - 1  -->
                    <div class="col-md-12" data-aos="fade-right">
                        <div class="container">
                            <h3 class="m-2 text-center"> <strong>Recently Asked Question</strong></h3>
                            {{-- <div class="accordion accordion-flush" id="accordionExample">
                                @foreach ($post->faqs as $faq)
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
                            </div> --}}

                            <!-- accordion -->

                            <div class="content content__accordion">
                                <div class="accordion">
                                    <div class="accordion__wrapper">
                                        @foreach ($post->faqs as $faq)
                                            <div class="accordion__item">
                                                <div class="accordion__item--summary">
                                                    <div class="accordion__item-icon">
                                                        <i class="fas fa-fw fa-futbol"></i>
                                                    </div>
                                                    <div class="accordion__item-title">
                                                        <h5>{{ strip_tags($faq->title) }}</h5>
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
                </div>
            </div>
            <!-- end of row -->
            </div>
        </section>
        <!-- End FAQs -->
    @endif

    <!-- $bestoffers -->
    @if ($bestoffers)
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
                                    <a class="btn" href="{{ route('order') }}?code={{ $item->alt }}">View
                                        Plans</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section>
    @endif
    <!-- end of $bestoffers -->

    <!--why choose us-->
    <section class="w3l-about1 bottom" id="about">
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
    <!--End why choose us-->

    @if (isset($post) && !empty($post))
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    @if (strpos(url()->current(), 'au-') !== false)
                        <li><a href="{{ route('locations') }}">Locations </a></li>
                    @else
                        <li><a href="{{ route('services') }}">Services </a></li>
                    @endif
                    <li>{{ $post->title }}</li>
                </ol>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= POST ======= -->
        <section class="bottom d-flex align-items-center text-light py-5" id="services">
            <div class="container">
                <div class="row d-flex align-items-start justify-content-center">
                    {{-- <h1 class="m-2">{{ $post->title }}</h1> --}}
                </div>
                <div class="row d-flex align-items-start inter-linking">
                    <div class="col-sm-9 mt-2" data-aos="fade-right" style="max-height: 480px; overflow-y: scroll;">
                        {!! $post->page_text !!}
                    </div>
                    <div class="col-sm-3 mt-2 col-offer-img" data-aos="fade-left">

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
                                                name="service-space" onChange="calculatePrice()" value="2">Single
                                            Space
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
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section>
        <!-- end of Post -->
    @endif
    @php
        if (strpos(url()->current(), 'au-') !== false) {
            $url = route('locations');
            $name = 'Locations';
        } else {
            $url = route('services');
            $name = 'Services';
        }

    @endphp
@endsection
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

    <script type="application/ld+json">
    {
     "@context": "https://schema.org",
     "@type": "BreadcrumbList",
     "itemListElement":
     [
      {
       "@type": "ListItem",
       "position": 1,
       "item":
       {
        "@id": "{{ route('home') }}",
        "name": "Home"
        }
      },
      {
       "@type": "ListItem",
      "position": 2,
      "item":
       {
         "@id": "{{  $url  }}",
         "name": "{{ $name }}"
       }
      },
      {
        "@type": "ListItem",
       "position": 3,
       "item":
        {
          "@id": "{{ url()->current()  }}",
          "name": "{{ $post->title }}"
        }
       }
     ]
    }
    </script>
@endpush

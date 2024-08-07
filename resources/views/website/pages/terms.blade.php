@extends('website.layouts.app')

@section('headerData')
    <!-- seo tags -->
    <title>{{ $post->meta_title ?? 'Best Essay Writing Services' }}</title>
    <meta name="description" content="{{ @$post->meta_description }}">
    <meta name="keywords" content="{{ @$post->meta_keyword }}">
@endsection

@section('content')
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

        <section class="bottom d-flex align-items-center text-light py-5" id="services">
            <div class="container">
                <div class="row d-flex align-items-start justify-content-center">
                    <h1 class="m-2">{{ $post->title }}</h1>
                </div>
                <div class="row d-flex align-items-start inter-linking">
                    <div class="col-sm-9 mt-2" data-aos="fade-right">
                        {!! $post->page_text !!}
                    </div>
                    <div class="col-sm-3 mt-2 col-offer-img" data-aos="fade-left">
                        {{-- <a href="{{ route('order') }}">
                    <img loading="lazy" class="img-fluid" src="{{ $banner ?? asset('banners/post-banner.webp') }}"
                        alt="{{ $post->title }}" width="100%">
                </a> --}}

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
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section> <!-- end of about -->
    @endif
@endsection

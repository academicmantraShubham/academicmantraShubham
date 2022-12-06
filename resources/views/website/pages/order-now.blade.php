@extends('website.layouts.app')

@section('headerData')
    <!-- seo tags -->
    <title>{{ @$post->meta_title ?? 'Order Now' }} – Best Essay Writing</title>
    <meta name="description" content="{{ @$post->meta_description }}">
    <meta name="keywords" content="{{ @$post->meta_keyword }}">
@endsection

<!-- swipper css -->
@push('css')
    <style>
        .div-avatar img {
            width: 120px;
        }

        /*------------------*/

        .coupon {
            padding: 10px;
            text-align: center;
            position: relative;
            border: 3px dashed #222;
            border-radius: 12px;
        }

        .coupon-head {
            font-weight: 600;
            font-size: 20px;
        }

        .coupon-price {
            font-size: 20px;
            font-weight: 600;
            color: red;
        }

        .coupon-fat-text {
            font-weight: 600;
            font-size: 1.3em;
        }

        .coupon-small-print {
            font-style: italic;
            margin: 10px 0;
        }

        .coupon-expiration {
            font-weight: 600;
        }
    </style>
@endpush

@section('content')

    @php
        
        $code = app('request')->input('code');
        if ($code) {
            session()->put('code', $code);
        }
        
        if ($code == 'remove') {
            session()->put('code', '');
            $code = '';
        }
        
    @endphp
    <!-- Header -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="breadcrum">
                        <div class="container">
                            <p><a href="/">Home</a> &nbsp; / &nbsp; Order Now</p>
                        </div>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
    
    <section class="w3l-about1" id="about">
        <div id="cwp23-block" class="py-5">
            <div class="container py-lg-5">
                <div class="row cwp23-content">
                    <div class="col-lg-6  mt-lg-0 mt-5  cwp23-text">
                        <div class="cwp23-title">
                            <h3>Welcome to the Professional Essay Writing Services! </h3>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-5 testimonial-card p-2 m-2">
                                <span class="fa fa-user-md" aria-hidden="true"></span>
                                <b>
                                    <a href="/services">Professional Writers</a>
                                </b>
                                <p>Our writers have the highest ratings, great testimonials, and many years of experience
                                    writing.</p>
                            </div>
                            <div class="col-md-5 testimonial-card p-2 m-2">
                                <span class="fa fa-graduation-cap" aria-hidden="true"></span>
                                <b>
                                    <a href="/services">Trending Courses</a>
                                </b>
                                <p>We offer highly valuable and specialised trending courses for students who want to
                                    succeed in their field.</p>
                            </div>
                            <div class="col-md-5 testimonial-card p-2 m-2">
                                <span class="fa fa-history" aria-hidden="true"></span>
                                <b>
                                    <a href="/services">Confidentiality Policy</a>
                                </b>
                                <p>Our policy is to maintain the privacy of those seeking essay writing help from us.</p>
                            </div>
                            <div class="col-md-5 testimonial-card p-2 m-2">
                                <span class="fa fa-users" aria-hidden="true"></span>
                                <b>
                                    <a href="/services">On-time Submission</a>
                                </b>
                                <p>Due to the importance of the deadline, our experts deliver your essays just in time.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-lg-0 mt-5 cwp23-img">
                        <div class="container w3l-contacts-12" id="contact">
                            <div class="contacts12-main">
                                <div class="cwp23-title">
                                    <h3>Fill Form & Order Now </h3>
                                </div>
                                <form action="" method="post" class="" enctype="multipart/form-data">
                                    @csrf
                                    <div class="main-input">
                                        <div class="form-group py-2">
                                            <input type="text" class="form-control form-control-input" name="name"
                                                placeholder="Enter your name" required="" />
                                        </div>
                                        <div class="form-group py-2">
                                            <input type="email" class="form-control form-control-input" name="email"
                                                placeholder="Enter your mail" required="" />
                                        </div>
                                        <div class="form-group py-2">
                                            <select name="service" placeholder="Subject"
                                                class="form-control form-control-input" id="menus" required>
                                                <option value=""> Select Service</option>
                                                @foreach ($menus as $menu)
                                                    <option value="{{ $menu->id }}"> {{ $menu->title }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!--<select  name="subject" placeholder="service" class="contact-select" id="services" required>-->
                                        <!--</select>-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group py-2">
                                                    <input type="number" class="form-control form-control-input"
                                                        name="word_count" placeholder="Enter Word Count" required="" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group py-2">
                                                    <input type="text" class="form-control form-control-input"
                                                        placeholder="Choose Deadline" onfocus="(this.type='date')"
                                                        name="deadline" min="<?php echo date('Y-m-d'); ?>" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group py-2">
                                            <input type="text" class="form-control form-control-input" name="topic"
                                                placeholder="Enter Topic" required="" />
                                        </div>
                                        <div class="form-group py-2">
                                            <input type="file" class="form-control form-control-input" name="file"
                                                multiple>
                                        </div>
                                        <div class="form-group py-2">
                                            <textarea class="form-control form-control-input" name="message" placeholder="Enter Details"></textarea>
                                        </div>
                                    </div>

                                    @php
                                        $coupon = 0;
                                        if (session()->has('code')) {
                                            $code = session()->get('code');
                                            $coupon = \App\Models\Voucher::whereCode($code)
                                                ->whereStatus(1)
                                                ->first();
                                        }
                                    @endphp

                                    @if (session()->has('code') && $coupon)
                                        <!--@coupon Start-->
                                        <div class="coupon mb-2">

                                            <div class="coupon-head">
                                                <i class="fas fa-cut"></i> {{ $coupon->code }}
                                                <span class="coupon-price">
                                                    @if ($coupon->type == 0)
                                                        {{ $coupon->value }} %
                                                    @else
                                                        ${{ $coupon->value }} OFF
                                                    @endif
                                                </span>
                                            </div>

                                            <div class="coupon-fat-text">
                                                {!! $coupon->description !!}
                                            </div>
                                            <!--<div class="coupon-small-print">-->
                                            <!--  Not vaild with other coupons or discount offers for same service. Diagnostics & Repairs Additional.-->
                                            <!--</div>-->
                                            <div class="coupon-expiration">
                                                <a href="{{ route('order') }}?code=remove"> remove code</a>
                                            </div>
                                        </div>
                                        <!--@coupon End-->
                                    @endif
                                    <!--@captcha-->
                                    <div class="text-center">
                                        <button class="btn form-control-submit-button" type="submit">Order Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

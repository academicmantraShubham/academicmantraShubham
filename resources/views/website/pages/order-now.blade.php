@extends('website.layouts.app')

@section('headerData')
 <!-- seo tags -->
 <title>{{ @$post->meta_title ?? '' }} – Best Essay Writing</title>
 <meta name="description" content="{{ @$post->meta_description }}">
 <meta name="keywords" content="{{ @$post->meta_keyword }}" > 
@endsection

<!-- swipper css -->
@push('css')
    <link href="{{ asset('website/css/swiper.css') }}" rel="stylesheet">
    <style>
        .div-avatar img{
            width:120px;
        }
    </style>
@endpush

@section('content')

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
                <h3>Welcome to the
                  Professional Essay Writing Services! </h3>
              </div>
              <div class="row">
                <div class="col-md-4 testimonial-card p-2 m-2">
                  <span class="fa fa-smile-o" aria-hidden="true"></span>
                  <a href="/services">Group Seminars</a>
                  <p>consectetur adipisicing elit, sed do eiusmod tempor </p>
                </div>
                <div class="col-md-4 testimonial-card p-2 m-2">
                  <span class="fa fa-graduation-cap" aria-hidden="true"></span>
                  <a href="/services">Trending Courses</a>
                  <p>consectetur adipisicing elit, sed do eiusmod tempor </p>
                </div>
                <div class="col-md-4 testimonial-card p-2 m-2">
                  <span class="fa fa-history" aria-hidden="true"></span>
                  <a href="/services">Large Library</a>
                  <p>consectetur adipisicing elit, sed do eiusmod tempor </p>
                </div>
                <div class="col-md-4 testimonial-card p-2 m-2">
                  <span class="fa fa-users" aria-hidden="true"></span>
                  <a href="/services">Expert Teachers</a>
                  <p>consectetur adipisicing elit, sed do eiusmod tempor </p>
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
                            <input type="text" class="form-control form-control-input" name="name" placeholder="Enter your name"  required="" />
                        </div>
                         <div class="form-group py-2">
                            <input type="email" class="form-control form-control-input" name="email" placeholder="Enter your mail"  required="" />
                        </div>
                      <div class="form-group py-2">
                          <select  name="service"  placeholder="Subject" class="form-control form-control-input" id="menus" required>
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
                                    <input type="number" class="form-control form-control-input" name="word_count" placeholder="Enter Word Count"  required="" />
                                </div>
                            </div>
                        <div class="col-md-6">
                          <div class="form-group py-2">
                            <input type="date"  class="form-control form-control-input" name="deadline"    min="<?php echo date('Y-m-d'); ?>" required/>
                          </div>
                        </div>
                      </div>
                                           <div class="form-group py-2">
                      <input type="text" class="form-control form-control-input"  name="topic" placeholder="Enter Topic"  required="" />
                       </div>
                                           <div class="form-group py-2">
                      <input  type="file" class="form-control form-control-input"  name="file" multiple>
                       </div>
                                           <div class="form-group py-2">
                      <textarea class="form-control form-control-input" name="message" placeholder="Enter Details"></textarea>
                       </div>
                    </div>
                    <!--@captcha-->
                    <div class="text-right">
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
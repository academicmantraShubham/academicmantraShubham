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
    <style>
        .div-avatar img{
            width:120px;
        }
        .hero {
          display: flex;
          max-width: 1440px;
          gap: 2em;
          justify-content: space-between;
          margin: 7em 2em;
        }
        
        .text {
          width: 40%;
          height: 500px;
          display: flex;
          flex-direction: column;
          justify-content: center;
          font-family: sans-serif;
        }
        
        .text__short {
          text-transform: uppercase;
          font-size: 0.75rem;
          color: #479A7E;
        }
        
        .text__title {
          line-height: 1.1;
          margin: 0;
        }
        
        .text__description {
          line-height: 145%;
          font-size: 1em;
          font-weight: 300;
          padding-bottom: 1em;
        }
        
        .text__button {
          max-width: 120px;
          text-align: center;
          display: inline-block;
          text-decoration: none;
          color: white;
          background-color: #479A7E;
          padding: 10px;
          border-radius: 0.5em;
        }
        
        .grid__container {
          min-width: 60%;
          display: grid;
          grid-gap: .5em;
          grid-template-columns: repeat(8, 1fr);
        }
        
        .grid__item {
          background-color: grey;
          border-radius: 0.5em;
        }
        
        .one {
          grid-column: 1 / 2;
          grid-row: 2 / 3;
          background-image: url(//unsplash.it/400/400);
          background-position: center;
          background-size: cover;
        }
        
        .two { 
          grid-column: 2 / 5;
          grid-row: 1 / 4;
          background-image: url(//unsplash.it/900/900);
          background-position: center;
          background-size: cover;
        }
        
        .three {
          grid-column: 5 / 6;
          grid-row: 1 / 2;
          background-image: url(//unsplash.it/500/400);
          background-position: center;
          background-size: cover;
        }
        
        .four {
          grid-column: 6 / 7;
          grid-row: 1 / 2;
          background-color: #FDF5DD;
          border-radius: 0 0 100px 0;
          -moz-border-radius: 0 0 100px 0;
          -webkit-border-radius: 0 0 100px 0;
        }
        
        
        .five {
          grid-column: 5 / 7;
          grid-row: 2 / 4;
          background-image: url(//unsplash.it/400/500);
          background-position: center;
          background-size: cover;
        }
        
        .six {
          grid-column: 7 / 8;
          grid-row: 2 / 3;
          background-color: #D3F0EE;
          border-radius: 0 100px 0 0;
          -moz-border-radius: 0 100px 0 0;
          -webkit-border-radius: 0 100px 0 0;
        }
        
        .seven {
          grid-column: 7 / 8;
          grid-row: 3 / 4;
          background-image: url(//unsplash.it/500/500);
          background-position: center;
          background-size: cover;
        }
        
        .eight {
          grid-column: 8 / 9;
          grid-row: 3 / 4;
          border-radius: 50%;
          background-color: #CED7ED;
        }
        
        .nine {
          grid-column: 1 / 2;
          grid-row: 4 / 5;
          background-color: #FADEE0;
          border-radius: 100px 0 0 0;
          -moz-border-raadius: 100px 0 0 0;
          -webkit-border-radius: 100px 0 0 0;
        }
        
        .ten {
          grid-column: 2 / 3;
          grid-row: 4 / 5;
          background-image: url(//unsplash.it/300/300);
          background-position: center;
          background-size: cover;
        }
        
        .eleven {
          grid-column: 3 / 5;
          grid-row: 4 / 6;
          background-image: url(//unsplash.it/700/700);
          background-position: center;
          background-size: cover;
        }
        
        .twelve {
          grid-column: 5 / 6;
          grid-row: 4 / 5;
          background-image: url(//unsplash.it/300/500);
          background-position: center;
          background-size: cover;
        }
        .col-offer-img{
            position: sticky;
            top: 0;
        }
        
        @media (max-width: 900px) {
          .grid__container {
                min-width: 50%;
                height: 400px;
                margin-top: 50px;
            }
            .hero {
               margin: 5em 2em;
            }
        }
          
        @media (max-width: 780px) {
            .hero {
              flex-direction: column-reverse;
              /*margin: 2em 2em;*/
            }
            
            .text {
              width: 100%;
            }
        }
    </style>
@endpush

@section('content')
{{--
  <!--Bannner-->
  <div class="hero">
      <div class="text">
        <p class="text__short">Best Essay Writing Services</p>
        <h3 class="text__title">Lorem ipsum dolor sit amet</h3>
        <p class="text__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, necessitatibus reiciendis. Voluptatem, eaque fugiat? Natus ab soluta nostrum quos! Laboriosam</p>
        <a class="text__button"href="{{route('order')}}">Order Now</a>
      </div>
      
      <div class="grid__container">
        <div class="grid__item one"></div>
        <div class="grid__item two"></div>
        <div class="grid__item three"></div>
        <div class="grid__item four"></div>
        <div class="grid__item five"></div>
        <div class="grid__item six"></div>
        <div class="grid__item seven"></div>
        <div class="grid__item eight"></div>
        <div class="grid__item nine"></div>
        <div class="grid__item ten"></div>
        <div class="grid__item eleven"></div>
        <div class="grid__item twelve"></div>
      </div>
    </div>
  <!--End Banner--> 
  --}}
  
    <!-- Header -->
  <header class="ex-header">
      <div class="container">
          <div class="row">
              <div class="col-xl-10 offset-xl-1">
                  <h2 style="color:white">Services</h2>
              </div> <!-- end of col -->
          </div> <!-- end of row -->
      </div> <!-- end of container -->
  </header> <!-- end of ex-header -->
  <!-- end of header -->
  
  <!-- About -->
  @if (isset($post) && !empty($post))
  
    <section class="about d-flex align-items-center text-light py-5" id="excerpt">
      <div class="container" >
          <div class="row d-flex align-items-center">
              <div class="col-lg-7" data-aos="fade-right">
                  {!! $post->excerpt !!}
                  <!--<div class="my-3">-->
                  <!--    <a class="btn" href="price.html">Offers</a>-->
                  <!--</div>-->
              </div>
              <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down"> 
                  <img class="img-fluid" src="{{ $post->featured_image ? $post->featured_image->getUrl() : 'https://demo.bestessaywritingservices.com.au/images/homepage/1646737989.svg' }}" alt="bestessaywritingservices" >
              </div>
          </div> <!-- end of row -->
      </div> <!-- end of container -->
    </section> <!-- end of about -->
    
    <section class="bottom d-flex align-items-center text-light py-5" id="services">
      <div class="container" >
          <div class="row d-flex align-items-start justify-content-center">
            <h1 class="m-2">{{ $post->title }}</h1>
            {{--<div class="col-sm-9" data-aos="fade-right">
                <div  class="" data-aos="fade-left">
                    <img loading="lazy" class="img-fluid" src="{{asset('images/banners/inside-banner.png')}}" width="125%">
                </div>
            </div>--}}
          </div>
          <div class="row d-flex align-items-start">
              <div class="col-sm-9 mt-2" data-aos="fade-right">
                  {!! $post->page_text !!}
              </div>
              <div  class="col-sm-3 mt-2 col-offer-img" data-aos="fade-left">
                 <img loading="lazy"  class="img-fluid" src="{{asset('images/banners/post-banner.webp')}}" width="125%">
              </div>
          </div> <!-- end of row -->
      </div> <!-- end of container -->
    </section> <!-- end of about -->
    
  @endif
  
  {{-- <!-- Services -->
  <section class="services d-flex align-items-center py-5" id="services">
      <div class="container text-light">
        <div class="text-center pb-4" >
              <h2 class="py-2">Writers</h2>
              <p class="para-light">test</p>
          </div>
          <div class="row gy-4 py-2" data-aos="zoom-in">
              
          @if($post->writers_count > 0)
          
              @foreach ($post->writers as $item)
                  <div class="col-lg-4">
                      <a href=""> <div class="card bg-transparent">                    
                          <h4 class="py-2">{!! $item->title !!}</h4>
                          <p class="para-light">{!! $item->content !!}</p>
                      </div></a>
                  </div>
              @endforeach 

          @else
          
              @foreach ($team->subHomepages as $item)
                  <div class="col-lg-4">
                    <a href="assignment-help.html"> <div class="card bg-transparent">                    
                      <h4 class="py-2">{!! $item->title !!}</h4>
                      <p class="para-light">{!! $item->content !!}</p>
                    </div></a>
                  </div>
              @endforeach
              
          @endif     

          </div> <!-- end of row -->
      </div> <!-- end of container -->
  </section> <!-- end of services --> --}}
  
  @if( url()->current() == "https://demo.bestessaywritingservices.com.au/au-australia")
    <!-- ======= Blog Section ======= -->
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
                @foreach ($cities as $key => $blog)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12" data-aos="fade-up">
                        <div class="testimonial-card mt-4 p-2" data-aos="fade-right">
                            <div class="row">
                                {{--<div class="col-lg-12 text-center mb-4" data-aos="fade-down">
                                    <img class="img-fluid" src="{{ $blog->featured_image->getUrl() }}"
                                        alt="bestessaywritingservices">
                                </div> --}}
                                <div class="col-lg-12 mb-4">
                                    <h3 class="mt-2">{{ $blog->title }}</h3>
                                    {!! substr(strip_tags($blog->page_text), 0, 100) !!}
                                </div>
                            </div>
                            <a class="btn mb-4" href="{{ route('post', $blog->slug) }}">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div> <!-- end of row -->
        </div>
        <!-- end of container -->
    </section>
    <!-- End Blog Section -->
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
                                            <b>About {{ $writer->Menu->title }} Writer</b>
                                            <p>{!! $writer->content !!}</p>
                                            <div class="d-flex pt-4">
                                                <div class="div-avatar">
                                                    <img class="avatar"  src="{{ $writer->image ?? '/images/homepage/1660655334.jpg' }}" alt="{{ strip_tags($writer->title)}} Expert">
                                                </div>
                                                <div class="ms-3 pt-2">
                                                    {!! $writer->title !!}
                                                    <div class="row text-center">
                                                        <a href="{{route('order')}}" class="btn m-2">
                                                            Hire Me
                                                        </a>
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
                                                        <span class="badge rounded-pill bg-primary"> {{ $writer->Menu->title }}</span>
                                                        <!--<span class="badge rounded-pill bg-primary"> Essay writing</span>-->
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
    
   <!-- FAQS -->
    <section class="bottom d-flex align-items-center text-light py-5">
        <div class="container">
            <div class="row d-flex">
                <!-- Part - 1  -->
                <div class="col-md-12" data-aos="fade-right">
                    <div class="container">
                        <h3 class="m-2"> <strong>Recently Asked Question</strong></h3>
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
                        </div>--}}
                        
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
    
  <!-- ======= Frequently Asked Questions Section ======= -->
  <!-- <section  role="img" aria-label="{{ @$askedquestions[0]->bg_alt }}" id="faq" class="faq section-bg" style="{{ @$askedquestions[0]->bg_color ? 'background:'.@$askedquestions[0]->bg_color.';':'' }}{{ @$askedquestions[0]->bg_image ?  'background-image: url("'.$askedquestions[0]->bg_image.'");' : '' }}">
    <div class="container">

      <div class="section-title">
        {!! @$askedquestions[0]->title !!}
        {!! @$askedquestions[0]->content !!}
      </div>

      <div class="faq-list">
        <ul>
          @if($post->faqs_count > 0)
            @foreach ($post->faqs as $key => $item)
              <li>
                @php
                    $num = ++$key;
                @endphp
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" @if ($num == 1) class="collapse" @else class="collapsed" @endif data-bs-target="#faq-list-{{ $num }}"> {{  strip_tags($item->title) }} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-{{ $num }}" class="collapse  @if ($num == 1) show @endif" data-bs-parent=".faq-list">
                  {!! $item->content !!}
                </div>
              </li>
            @endforeach
            @else 
            @foreach ($askedquestions[0]->subHomepages as $key => $item)
              <li>
                @php
                    $num = ++$key;
                @endphp
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" @if ($num == 1) class="collapse" @else class="collapsed" @endif data-bs-target="#faq-list-{{ $num }}"> {{  strip_tags($item->title) }} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-{{ $num }}" class="collapse  @if ($num == 1) show @endif" data-bs-parent=".faq-list">
                  {!! $item->content !!}
                </div>
              </li>
            @endforeach
            @endif

        </ul>
      </div>

    </div>
  </section>End Frequently Asked Questions Section -->

  <!-- ======= Pricing Section ======= -->
  <!-- <section  role="img" aria-label="{{ @$bestoffers[0]->bg_alt }}" id="pricing" class="pricing" style="{{ @$bestoffers[0]->bg_color ? 'background:'.@$bestoffers[0]->bg_color.';':'' }}{{ @$bestoffers[0]->bg_image ?  'background-image: url("'.$bestoffers[0]->bg_image.'");' : '' }}">
    <div class="container">

      <div class="section-title">
        {!! @$bestoffers[0]->title !!}
        {!! @$bestoffers[0]->content !!}
      </div>
      <div class="row offers">
          @foreach ($bestoffers[0]->subHomepages as $key => $item)
            <div class="col-lg-4">
              <div class="box @if(++$key % 2 == 0)featured @endif">
                  {!! @$item->title !!}
                {!! @$item->content !!}
                <a href="contact" class="buy-btn">Get Started</a>
              </div>
            </div>
          @endforeach
      </div>

    </div>
  </section>End Pricing Section -->
@endsection
@push('js')
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
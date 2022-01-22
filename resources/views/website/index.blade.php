@extends('website.layouts.app')
@section('headerData')
 <!-- seo tags -->
 <title>{{ $metadata->title ?? 'Plagiarism Free Writing by PHD Experts – Thesis N Dissertation	' }}</title>
 <meta name="description" content="{{ $metadata->content ?? 'Save up your time and outsource your thesis, dissertations and more  to PHD qualified writing professionals. Guaranteed on-time delivery with high quality material at affordable prices.' }}">
 <meta name="keywords" content="{{ $metadata->alt ?? 'Best essay writing in Australia, online assignment help, Academic writing services, thesis writing and dissertation writing services, online writing services' }}" >
 <meta charset="utf-8">   
 <!-- shcema -->
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
    <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  .dropdown-item:focus, .dropdown-item:hover {
    background-color: #1c262f !important;
}
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!--OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

@endsection

@section('content')

<div class="container-fluid">
<div class="row">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.w3schools.com/bootstrap/ny.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="https://www.w3schools.com/bootstrap/chicago.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="https://www.w3schools.com/bootstrap/la.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
</div>


<!-- Home -->
<section class="home py-5 d-flex align-items-center" id="header">
  <div class="container text-light py-5"  data-aos="fade-right"> 
    <h1 class="headline">{!! @$thesisNdissertation->title !!}</h1>
      <p class="para py-3">{!! @$thesisNdissertation->content !!}</p>
      <div class="my-3">
        <a class="btn" href="contact">Contact Us</a>
      </div>
  </div> <!-- end of container -->
</section> <!-- end of home --> 

<!-- Information -->
<section class="information">
    <div class="container-fluid">  
        <div class="row text-light">
        @foreach ($whatYouneed[0]->subHomepages as $key => $whatYouneed)
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
    

    <!-- About -->
    <section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <h2>{!! @$bestthesis->title !!}</h2>
                    {!! @$bestthesis->content !!}
                    <div class="my-3">
                        <a class="btn" href="">Offers</a>
                    </div>
                </div>
                <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down"> 
                    <img class="img-fluid" src="{!! @$bestthesis->image !!}" alt="{!! @$bestthesis->alt !!}" >
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of about -->

 
    <!-- Services -->
   

    <style>
      section .container .card ul li::before {
            content: "✓";
            padding-right: 10px;
            color: rgb(71, 178, 228);
        }
        section .container .card ul li{
        padding-top: 10px;
      }
    </style>

    <!-- Work -->
    <section class="work d-flex align-items-center py-5" >
        <div class="container-fluid text-light">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right">
                    <img class="img-fluid" src="{!! @$explorePossibilities[0]->image !!}" alt="{!! @$explorePossibilities[0]->alt !!}">        
                </div>
                <div class="col-lg-5 d-flex align-items-center px-4 py-3" data-aos="">
                    <div class="row">
                        <div class="text-center text-lg-start py-4 pt-lg-0">
                            <h2 class="py-2">{!! @$explorePossibilities[0]->title !!}</h2>
                            <p class="para-light">{!! @$explorePossibilities[0]->content !!}</p>
                        </div>
                        <div class="container" data-aos="fade-up">
                            <div class="row g-5">
                                <div class="col-6 text-start" >
                                    <i class="fas fa-briefcase fa-2x text-start"></i>
                                    <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="1258" data-purecounter-duration="3">1</h2>
                                    <p>PROJECTS COMPLETED</p>
                                </div>
                                <div class="col-6" >
                                    <i class="fas fa-award fa-2x"></i>
                                    <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="3">1</h2>
                                    <p>AWARDS</p>
                                </div>
                                <div class="col-6">
                                    <i class="fas fa-users fa-2x"></i>
                                    <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="1255" data-purecounter-duration="3">1</h2>
                                    <p>CUSTOMER ACTIVE</p>
                                </div>
                                <div class="col-6">
                                    <i class="fas fa-clock fa-2x"></i>
                                    <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="1157" data-purecounter-duration="3">1</h2>
                                    <p>GOOD REVIEWS</p>
                                </div>
                            </div>
                        </div> <!-- end of container -->
                    </div> <!-- end of row -->
                </div> <!-- end of col-lg-5 -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of work -->


    <!-- Testimonials -->
    <div class="slider-1 testimonial text-light d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="text-center w-lg-75 m-auto pb-4">
                    <h2 class="py-2">{!! @$clientsSays[0]->title !!}</h2>
                    <p class="para-light">{!! @$clientsSays[0]->content !!}</p>
                </div>
            </div> <!-- end of row -->
            <div class="row p-2" data-aos="zoom-in">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                <!-- Slide -->                                
                                
                                <!-- end of slide -->
                                @foreach ($clientsSays[0]->subHomepages as $key => $clientsSays)
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card p-4">
                                        <p>{!! $clientsSays->content !!}</p>
                                        <div class="d-flex pt-4">
                                            <div>
                                                <img class="avatar" src="{{ @$clientsSays->image }}" alt="testimonial">
                                            </div>
                                            <div class="ms-3 pt-2">
                                                {!! $clientsSays->title !!}
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                                @endforeach
                                
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of testimonials -->

    <!-- Contact -->
    <section class="contact d-flex align-items-center py-5" id="contact">
        <div class="container-fluid text-light">
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end align-items-center px-lg-5" data-aos="fade-right">
                    <div style="width:90%">
                        <div class="text-center text-lg-start py-4 pt-lg-0">
                            <h2 class="py-2">{!! @$sendyourquery[0]->title !!}</h2>
                            <p class="para-light">{!! @$sendyourquery[0]->content !!}</p>
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
                    </div> <!-- end of div -->
                </div> <!-- end of col -->
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-down">
                    <img class="img-fluid d-none d-lg-block" src="{{ @$sendyourquery[0]->image }}" alt="contact">        
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of contact -->
 
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
                <div class="col-lg-3 d-flex align-items-center" >
                    <div class="p-2"><i class="fas fa-mobile-alt fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>CALL FOR QUERY</h6>
                        <p>(800) 265  216 2020</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center" >
                    <div class="p-2"><i class="far fa-envelope fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>SEND US MESSAGE</h6>
                        <p>infodemofile@example.com</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-center" >
                    <div class="p-2"><i class="far fa-clock fa-3x"></i></div>
                    <div class="ms-2">
                        <h6>OPENING HOURS</h6>
                        <p>09:00 AM - 18:00 PM</p>
                    </div>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of location -->
@endsection
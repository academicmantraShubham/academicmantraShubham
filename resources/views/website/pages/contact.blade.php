@extends('website.layouts.app')

@section('headerData')
  <title>Contact Us | Best Assignment Writer IN Australia 24/7</title>
  <meta name="description" content="Best essay writing services in Australia. We provide assignment, academic content, dissertation and thesis writing with zero plagiarism.">
  <meta name="keywords" content="Best essay writing in Australia, online assignment help, Academic writing services, thesis writing and dissertation writing services, online writing services" >
@endsection

@section('content') 

<main id="main">

  <!-- Header -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h2 style="color:white">Contact</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

  <!-- About -->
  <section class="about d-flex align-items-center text-light py-5" id="about">
    <div class="container" >
      <div class="row d-flex align-items-center">
      {!! $post->page_text !!}

        <!-- <h1>We Are Best In Essay Writing</h1>
            <p class="py-2 para-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sed accusantium aut dolores inventore architecto modi cupiditate eligendi corporis, illum illo culpa. Reiciendis, molestias. Illum voluptatum quisquam ad veritatis dolorem.</p>
            <p class="py-2 para-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sed accusantium aut dolores inventore architecto modi cupiditate eligendi corporis, illum illo culpa. Reiciendis, molestias. Illum voluptatum quisquam ad veritatis dolorem.</p> -->
      </div> <!-- end of row -->
    </div> <!-- end of container -->
  </section> <!-- end of about -->
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

  </main><!-- End #main -->
@endsection
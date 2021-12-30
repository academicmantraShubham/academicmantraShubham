@extends('website.layouts.app') 

@section('headerData')
  <title>{!! @$post->meta_title !!}</title>
  <meta name="description" content="Best essay writing services in Australia. We provide assignment, academic content, dissertation and thesis writing with zero plagiarism.">
  <meta name="keywords" content="Best essay writing in Australia, online assignment help, Academic writing services, thesis writing and dissertation writing services, online writing services" >
@endsection

@section('content')

<main id="main">

    <!-- 1 Header -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h2 style="color: white;">Price</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
    <!-- 2 About -->
    <section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
            
                    <h1>{!! @$post->title !!}</h1>
                    <p class="py-2 para-light">{!! @$post->page_text !!}</p>

            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of about -->
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
    <!--3 Plans -->
      <section class="plans d-flex align-items-center py-5" id="plans">
        <div class="container text-light" >
            <div class="text-center pb-4">
                <h2 class="py-2">{!! @$bestoffers[0]->title !!}</h2>
                <p class="para-light">{!! @$bestoffers[0]->content !!}</p>
            </div>
            <div class="row gy-4" data-aos="zoom-in">
            @foreach ($bestoffers[0]->subHomepages as $key => $item)
                <div class="col-lg-4">
                    <div class="card bg-transparent px-4">
                        <h4 class="py-2">{!! @$item->title !!}</h4>
                        {!! @$item->content !!}
                    </div>  
                </div>
              @endforeach              
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of plans -->
  <!--==============The Second Section which will be removed ==========-->
</main><!-- End #main -->
@endsection
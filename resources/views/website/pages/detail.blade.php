@extends('website.layouts.app') 
@section('headerData')
<title>{!! strip_tags($bolgDetails->title) !!} - Best Essay Writing Services</title>
<meta name="description" content="Best essay writing services in Australia. We provide assignment, academic content, dissertation and thesis writing with zero plagiarism.">
<meta name="keywords" content="Best essay writing in Australia, online assignment help, Academic writing services, thesis writing and dissertation writing services, online writing services" >
@endsection
@section('content')

<main id="">
   <!-- ======= Breadcrumbs ======= -->
   <section id="breadcrumbs" class="breadcrumbs mt-5">
      <div class="container">
         <ol>
            <li><a href="/">Home</a></li>
         </ol>
         <h2>{!! $bolgDetails->title !!}</h2>
      </div>
   </section>
    <!-- Basic -->
    <div class="ex-basic-1 pt-3 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    {!! $bolgDetails->page_text !!}

                        <div class="mt-2">
                            {!! $bolgDetails->excerpt !!}
                        </div>
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->



<!-- End #main -->
@endsection
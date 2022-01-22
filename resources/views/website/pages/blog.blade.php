@extends('website.layouts.app') 
@section('headerData')
<title></title>
<meta name="description" content="Best essay writing services in Australia. We provide assignment, academic content, dissertation and thesis writing with zero plagiarism.">
<meta name="keywords" content="Best essay writing in Australia, online assignment help, Academic writing services, thesis writing and dissertation writing services, online writing services" >
@endsection
@section('content')
<main id="">
   <!-- ======= Breadcrumbs ======= -->
   <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
         <ol>
            <li><a href="/">Home</a></li>
         </ol>
         <h2>Blog</h2>
      </div>
   </section>
   <!-- End Breadcrumbs -->
   <!-- ======= Blog Section ======= -->
   <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
         <div class="row">
            <div class="col-lg-8 entries">
               <!-- About -->
               <section class="about d-flex align-items-center text-light py-5" id="about">
                  <div class="container" >
                     @foreach ($blogs as $key => $blog)
                     <div class="row d-flex align-items-center">
                        <div class="col-lg-7" data-aos="fade-right">
                           <h3>{!! $blog->title !!}</h3>
                           {!! substr($blog->page_text, 0, 200) !!}
                           <div class="my-3">
                              <a class="btn" href="{{ route('website.pages.detail',$blog->id) }}">Read More</a>
                           </div>
                        </div>
                        <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down"> 
                           <img class="img-fluid" src="{{ $blog->featured_image->getUrl() }}" alt="bestessaywritingservices" >
                        </div>
                     </div>
                     <hr>
                     <!-- end of row -->
                     @endforeach
                     
                  </div>
                  <!-- end of container -->
               </section>
               <!-- end of about -->
               <!-- End blog entry -->
               <div class="blog-pagination mt-2 mb-2">
                  <ul class="justify-content-center">
                     {!! $blogs->links('pagination::bootstrap-4') !!}
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- End Blog Section -->
</main>
<!-- End #main -->
@endsection
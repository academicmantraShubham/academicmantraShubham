@extends('website.layouts.app') 

@section('headerData')
<title></title>
<meta name="description" content="Best essay writing services in Australia. We provide assignment, academic content, dissertation and thesis writing with zero plagiarism.">
<meta name="keywords" content="Best essay writing in Australia, online assignment help, Academic writing services, thesis writing and dissertation writing services, online writing services" >
@endsection

@section('content')

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs" style="padding-top: 5.5rem;">
   <div class="container">
      <ol>
         <li><a href="/">Home</a></li>
         <li>Blog</li>
      </ol>
      <h2>Latest Blogs</h2>
   </div>
</section>
<!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
   <div class="container" data-aos="fade-up">
      <div class="row">
         <div class="col-lg-8 entries">
            <!-- About -->
            <section class="about d-flex align-items-center text-light pb-2" id="about">
               <div class="container" >
                  <div class="row d-flex align-items-center">
                     @foreach ($blogs as $key => $blog)
                        <div class="testimonial-card mt-4" data-aos="fade-right">
                           <h3 class="mt-2">{{$blog->title }}</h3>
                           <div class="row">
                              <div class="col-lg-7 mb-4">
                                 {!! substr(strip_tags($blog->page_text), 0, 200) !!}
                              </div>
                              <div class="col-lg-5 text-center mb-4" data-aos="fade-down"> 
                                 <img class="img-fluid" src="{{ $blog->featured_image->getUrl() }}" alt="bestessaywritingservices" >
                              </div>
                           </div>
                           <a class="btn mb-4" href="{{ route('website.pages.detail',$blog->id) }}">Read More</a>
                        </div>
                     @endforeach
                  </div> <!-- end of row -->
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
@endsection
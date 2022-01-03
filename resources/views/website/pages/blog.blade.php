@extends('website.layouts.app') 
@section('headerData')
  <title>{!! @$post->meta_title !!}</title>
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
            @foreach($blogs as $blog)
               <article class="entry">
                  <div class="entry-img">
                     <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                  </div>
                  <h2 class="entry-title">
                     <a href="#">{!! $blog->title !!}</a>
                  </h2>
                  <div class="entry-meta">
                     <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="">Admin</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href=""><time datetime="2020-01-01">Jan 1, 2022</time></a></li>
                     </ul>
                  </div>
                  <div class="entry-content">
                     {!! Str::limit($blog->page_text, 0, 100) !!}
                     <div class="read-more">
                        <a href="{{ route('website.pages.show',$blog) }}">Read More</a>
                     </div>
                  </div>
               </article>
               @endforeach
               
               <!-- End blog entry -->
               <div class="blog-pagination">
                  <ul class="justify-content-center">
                     <li><a href="#">1</a></li>
                     <li class="active"><a href="#">2</a></li>
                     <li><a href="#">3</a></li>
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
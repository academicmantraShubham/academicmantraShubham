@extends('website.layouts.app')

@section('headerData')
<title>Blogs | {{ $category->name }} </title>
<meta name="description"
    content="Get essay writing services in Australia. We provide assignment, academic content, dissertation and thesis writing with zero plagiarism.">
<meta name="keywords"
    content="Get essay writing in Austral
    ia, online assignment help, Academic writing services, thesis writing and dissertation writing services, online writing services">
@endsection

@section('content')

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs" style="padding-top: 5.5rem;">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="{{ route('blogs') }}">Blogs</a></li>
            <li>{{ $category->name }}</li>
        </ol>
        <h2 class="mb-4 text-center">{{ $category->name }} Latest Blogs</h2>
    </div>
</section>
<!-- End Breadcrumbs -->

<!--Start Categories-->
<section id="categorys" class="categorys">
    <div class="container">
        <ol class="category">
            @foreach($categories as $categor)
                <li><a href="/category/{{ $categor->slug }}">{{ $categor->name }}</a></li>
            @endforeach
        </ol>
    </div>
</section>
<!--End Categories-->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 entries">
                <!-- About -->
                <section class="about d-flex align-items-center text-light pb-2" id="about">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            @foreach ($category->contents as $key => $blog)
                                @if ($loop->first)
                                    <div class="col-md-12">
                                        <div class="testimonial-card mt-4 p-2" data-aos="fade-right">
                                            <div class="row">
                                                <div class="col-lg-7 mb-4">
                                                    <h3 class="mt-2">{{$blog->title }}</h3>
                                                    <p>
                                                        {!! substr(strip_tags($blog->page_text), 0, 200) !!}
                                                    </p>
                                                    <a class="btn mb-4 mobile-hide"
                                                    href="{{ route('blog', $blog->slug) }}">Read More</a>
                                                </div>
                                                <div class="col-lg-5 text-center mb-4" data-aos="fade-down">
                                                    <img class="img-fluid" src="{{ $blog->featured_image ? $blog->featured_image->getUrl() : '/images/homepage/1646737989.svg' }}"
                                                        alt="getessayservice">
                                                </div>
                                            </div>
                                            <a class="btn mb-4 mobile-show"
                                            href="{{ route('blog', $blog->slug) }}">Read More</a>
                                        </div>
                                    </div>

                                    @else

                                    <div class="col-md-4">
                                        <div class="testimonial-card mt-4 p-2" data-aos="fade-right">
                                            <div class="row">
                                                <div class="col-lg-12 mb-4">
                                                    <h3 class="mt-2">{{$blog->title }}</h3>
                                                    <p>
                                                        {!! substr(strip_tags($blog->page_text), 0, 200) !!}
                                                    </p>
                                                    <img class="img-fluid" src="{{ $blog->featured_image ? $blog->featured_image->getUrl() : '/images/homepage/1646737989.svg' }}"
                                                    alt="getessayservice">
                                                </div>
                                                <!-- <div class="col-lg-5 text-center mb-4" data-aos="fade-down"> -->
                                                <!-- </div> -->
                                            </div>
                                            <a class="btn mb-4"
                                            href="{{ route('blog', $blog->slug) }}">Read More</a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div> <!-- end of row -->
                    </div>
                    <!-- end of container -->
                </section>
                <!-- end of about -->
                <!-- End blog entry -->
                <div class="blog-pagination mt-2 mb-2">
                    <ul class="justify-content-center">
                        {{-- {!! $blogs->links('pagination::bootstrap-4') !!} --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Section -->
@endsection
@extends('website.layouts.app')

@section('headerData')
 <!-- seo tags -->
 <title>{{ $post->title ?? '' }} – Thesis N Dissertation</title>
 <meta name="description" content="{{ $post && $post->excerpt ? substr($post->excerpt, 280) : '' }}">
 {{-- <meta name="keywords" content="Best essay writing in Australia, online assignment help, Academic writing services, thesis writing and dissertation writing services, online writing services" > --}}
@endsection

@section('content')
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
  <section class="about d-flex align-items-center text-light py-5" id="about">
      <div class="container" >
          <div class="row d-flex align-items-center">
              <div class="col-lg-7" data-aos="fade-right">
                  {!! $post->page_text !!}

                  <div class="my-3">
                      <a class="btn" href="price.html">Offers</a>
                  </div>
              </div>
              <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down"> 
                  <img class="img-fluid" src="{{ $post->featured_image ? $post->featured_image->getUrl() : '' }}" alt="bestessaywritingservices" >
              </div>
          </div> <!-- end of row -->
      </div> <!-- end of container -->
  </section> <!-- end of about -->
  @endif
  <!-- Services -->
  <section class="services d-flex align-items-center py-5" id="services">
      <div class="container text-light">
        <div class="text-center pb-4" >
              <h2 class="py-2">{!! @$team[0]->title !!}</h2>
              <p class="para-light">{!! @$team[0]->content !!}</p>
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
          @foreach ($team[0]->subHomepages as $item)
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
  </section> <!-- end of services -->
  
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
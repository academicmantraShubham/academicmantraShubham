    <!-- Footer -->
    <section class="footer text-light">
        <div class="container">
            <div class="row" data-aos="fade-right">
                <div class="col-lg-3 py-4 py-md-5">
                    {{-- <div class="d-flex align-items-center">
                        <h4 class="">GET ESSAY</h4>
                    </div> --}}
                    {!! $footerdata->title !!}
                    {{-- <div class="d-flex">
                        <div class="me-3">
                            <a href="https://www.facebook.com/bestessaywritingservicesau">
                                <i class="fab fa-facebook-f py-2"></i>
                            </a>
                        </div>
                        <div class="me-3">
                            <a href="#your-link">
                                <i class="fab fa-twitter fa-2x py-2"></i>
                            </a>
                        </div>
                        <div class="me-3">
                            <a href="https://www.instagram.com/best_essaywritingservices/">
                                <i class="fab fa-instagram py-2"></i>
                            </a>
                        </div>
                        <div class="me-3">
                            <a href="#your-link">
                                <i class="fab fa-linkedin fa-2x py-2"></i>
                            </a>
                        </div>
                    </div> --}}
                </div>
                <!-- end of col -->

                <div class="col-lg-3 py-4 py-md-5">
                    <div>
                        {!! $footerdata->content !!}
                    </div>
                </div> <!-- end of col -->

                <div class="col-lg-3 py-4 py-md-5">
                    {!! $footerdata->alt !!}
                </div> <!-- end of col -->

                <div class="col-lg-3 py-4 py-md-5">
                    <div class="d-flex align-items-center">
                        <h4>{!! @$subscribeus->title !!}</h4>
                    </div>
                    {{-- <p class="py-3 para-light"> --}}
                    {!! @$subscribeus->content !!}
                    {{-- </p> --}}
                    <form action="{{ route('subscribe-mail') }}" method="POST">
                        @csrf
                        <div class="d-flex align-items-center">
                            <div class="input-group mb-3">
                                <input type="email" name="email" required class="form-control p-2" placeholder="Enter Email"
                                    aria-label="Recipient's email">
                                <button class="btn-secondary text-light"><i class="fas fa-envelope fa-lg"></i></button>
                            </div>
                        </div>
                    </form>

                </div> <!-- end of col -->
            </div> <!-- end of row -->

            <div class="row">
                <div class="col-12">
                    <ul class="m-0 pages-data">
                        @foreach ($pages as $pd)
                            <li><a href="{{ route('post', $pd->slug) }}">{{ $pd->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div> <!-- end of container -->
    </section>
    <!-- end of footer -->

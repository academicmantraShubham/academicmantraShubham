  <!-- Footer -->
    <section class="footer text-light">
        <div class="container">
            <div class="row" data-aos="fade-right">
                <div class="col-lg-3 py-4 py-md-5">
                    <div class="d-flex align-items-center">
                        <h4 class="">BESW</h4> 
                    </div>
                        {!! $footerdata->title !!}
                    <div class="d-flex">
                        <div class="me-3">
                            <a href="#your-link">
                                <i class="fab fa-facebook-f fa-2x py-2"></i>
                            </a>
                        </div>
                        <div class="me-3">
                            <a href="#your-link">
                                <i class="fab fa-twitter fa-2x py-2"></i>
                            </a>
                        </div>
                        <div class="me-3">
                            <a href="#your-link">
                                <i class="fab fa-instagram fa-2x py-2"></i>
                            </a>
                        </div>
                         <div class="me-3">
                            <a href="#your-link">
                                <i class="fab fa-linkedin fa-2x py-2"></i>
                            </a>
                        </div>
                    </div>
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
                    <p class="py-3 para-light">{!! @$subscribeus->content !!}</p>
                    <div class="d-flex align-items-center">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control p-2" placeholder="Enter Email" aria-label="Recipient's email">
                            <button class="btn-secondary text-light"><i class="fas fa-envelope fa-lg"></i></button>       
                        </div>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of footer -->
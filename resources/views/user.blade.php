@extends('layouts.base')

<!-- Preloader -->
{{--<div class="preloader">
    <div class="loader">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>

        <div class="indicator">
            <svg width="16px" height="12px">
                <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
            </svg>
        </div>
    </div>
</div>--}}
<!-- End Preloader -->

<!-- Get Pro Button -->


<!-- Header Area -->

    <!-- Topbar -->

    <!-- End Topbar -->
    <!-- Header Inner -->
    <!-- End Header Area -->
@section('body')
    <!-- Slider Area -->
    <section class="slider container">
        <div id="carouselExampleIndicators" class=" carousel slide" data-ride="carousel" style="width: ">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/img/slider.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/slider2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/slider3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-primary" style="width: 2rem" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-primary" style="width: 2rem" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--/ End Slider Area -->

        <!-- Start Schedule Area -->
        <section class="schedule">
            <div class="container">
                <div class="schedule-inner">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12 ">
                            <!-- single-schedule -->
                            <div class="single-schedule first">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fa fa-ambulance"></i>
                                    </div>
                                    <div class="single-content">
                                        <span>Lorem Amet</span>
                                        <h4>Emergency Cases</h4>
                                        <p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus
                                            convallis sodales.</p>
                                        <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- single-schedule -->
                            <div class="single-schedule middle">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="icofont-prescription"></i>
                                    </div>
                                    <div class="single-content">
                                        <span>Fusce Porttitor</span>
                                        <h4>Doctors Timetable</h4>
                                        <p>Tajgkhsgkgsjk</p>
                                        <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12">
                            <!-- single-schedule -->
                            <div class="single-schedule last">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="icofont-ui-clock"></i>
                                    </div>
                                    <div class="single-content">
                                        <span>Donec luctus</span>
                                        <h4>Opening Hours</h4>
                                        <ul class="time-sidual">
                                            <li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
                                            <li class="day">Saturday <span>9.00-18.30</span></li>
                                            <li class="day">Monday - Thusday <span>9.00-15.00</span></li>
                                        </ul>
                                        <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/End Start schedule Area -->

        <!-- Start Feautes -->
        <section class="Feautes section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>We Are Always Ready to Help You & Your Family</h2>
                            <img src="img/section-img.png" alt="#">
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <!-- Start Single features -->
                        <div class="single-features">
                            <div class="signle-icon">
                                <i class="icofont icofont-ambulance-cross"></i>
                            </div>
                            <h3>Emergency Help</h3>
                            <p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
                        </div>
                        <!-- End Single features -->
                    </div>
                    <div class="col-lg-4 col-12">
                        <!-- Start Single features -->
                        <div class="single-features">
                            <div class="signle-icon">
                                <i class="icofont icofont-medical-sign-alt"></i>
                            </div>
                            <h3>Enriched Pharmecy</h3>
                            <p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
                        </div>
                        <!-- End Single features -->
                    </div>
                    <div class="col-lg-4 col-12">
                        <!-- Start Single features -->
                        <div class="single-features last">
                            <div class="signle-icon">
                                <i class="icofont icofont-stethoscope"></i>
                            </div>
                            <h3>Medical Treatment</h3>
                            <p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
                        </div>
                        <!-- End Single features -->
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Feautes -->




        <!-- Start Fun-facts -->
        <div id="fun-facts" class="fun-facts section overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Fun -->
                        <div class="single-fun">
                            <i class="icofont icofont-home"></i>
                            <div class="content">
                                <span class="counter">3468</span>
                                <p>Hospital Rooms</p>
                            </div>
                        </div>
                        <!-- End Single Fun -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Fun -->
                        <div class="single-fun">
                            <i class="icofont icofont-user-alt-3"></i>
                            <div class="content">
                                <span class="counter">557</span>
                                <p>Specialist Doctors</p>
                            </div>
                        </div>
                        <!-- End Single Fun -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Fun -->
                        <div class="single-fun">
                            <i class="icofont-simple-smile"></i>
                            <div class="content">
                                <span class="counter">4379</span>
                                <p>Happy Patients</p>
                            </div>
                        </div>
                        <!-- End Single Fun -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Fun -->
                        <div class="single-fun">
                            <i class="icofont icofont-table"></i>
                            <div class="content">
                                <span class="counter">32</span>
                                <p>Years of Experience</p>
                            </div>
                        </div>
                        <!-- End Single Fun -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Fun-facts -->

        <!-- Start Why choose -->
        <section class="why-choose section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>We Offer Different Services To Improve Your Health</h2>
                            <img src="assets/img/section-img.png" alt="#">
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <!-- Start Choose Left -->
                        <div class="choose-left">
                            <h3>Who We Are</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pharetra antege vel est
                                lobortis, a commodo magna rhoncus. In quis nisi non emet quam pharetra commodo. </p>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                himenaeos. </p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="list">
                                        <li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh.</li>
                                        <li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
                                        <li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list">
                                        <li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh.</li>
                                        <li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
                                        <li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Choose Left -->
                    </div>
                    <div class="col-lg-6 col-12">
                        <!-- Start Choose Rights -->
                        <div class="choose-right">
                            <div class="video-image">
                                <!-- Video Animation -->
                                <div class="promo-video">
                                    <div class="waves-block">
                                        <div class="waves wave-1"></div>
                                        <div class="waves wave-2"></div>
                                        <div class="waves wave-3"></div>
                                    </div>
                                </div>
                                <!--/ End Video Animation -->
                                <a href="https://www.youtube.com/watch?v=RFVXy6CRVR4"
                                   class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <!-- End Choose Rights -->
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Why choose -->

        <!-- Start Call to action -->
        <section class="call-action overlay" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="content">
                            <h2>Do you need Emergency Medical Care? Call @ 1234 56789</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor dictum turpis
                                nec gravida.</p>
                            <div class="button">
                                <a href="#" class="btn">Contact Now</a>
                                <a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Call to action -->

        <!-- Start portfolio -->
        <section class="portfolio section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>We Maintain Cleanliness Rules Inside Our Hospital</h2>
                            <img src="assets/img/section-img.png" alt="#">
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End portfolio -->

        <!-- Start service -->
        <section class="services section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>We Offer Different Services To Improve Your Health</h2>
                            <img src="assets/img/section-img.png" alt="#">
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="icofont icofont-prescription"></i>
                            <h4><a href="service-details.html">General Treatment</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                                imperdiet. </p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="icofont icofont-tooth"></i>
                            <h4><a href="service-details.html">Teeth Whitening</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                                imperdiet. </p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="icofont icofont-heart-alt"></i>
                            <h4><a href="service-details.html">Heart Surgery</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                                imperdiet. </p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="icofont icofont-listening"></i>
                            <h4><a href="service-details.html">Ear Treatment</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                                imperdiet. </p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="icofont icofont-eye-alt"></i>
                            <h4><a href="service-details.html">Vision Problems</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                                imperdiet. </p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="icofont icofont-blood"></i>
                            <h4><a href="service-details.html">Blood Transfusion</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut
                                imperdiet. </p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                </div>
            </div>
        </section>
        <!--/ End service -->


        <!-- Start Blog Area -->
        <section class="blog section" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Keep up with Our Most Recent Medical News.</h2>
                            <img src="assets/img/section-img.png" alt="#">
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Blog -->
                        <div class="single-news">
                            <div class="news-head">
                                <img src="assets/img/blog1.jpg" alt="#">
                            </div>
                            <div class="news-body">
                                <div class="news-content">
                                    <div class="date">22 Aug, 2020</div>
                                    <h2><a href="blog-single.html">We have annnocuced our new product.</a></h2>
                                    <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do
                                        eiusmod tempor incididunt sed do incididunt sed.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Blog -->
                        <div class="single-news">
                            <div class="news-head">
                                <img src="assets/img/blog2.jpg" alt="#">
                            </div>
                            <div class="news-body">
                                <div class="news-content">
                                    <div class="date">15 Jul, 2020</div>
                                    <h2><a href="blog-single.html">Top five way for solving teeth problems.</a></h2>
                                    <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do
                                        eiusmod tempor incididunt sed do incididunt sed.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Blog -->
                        <div class="single-news">
                            <div class="news-head">
                                <img src="assets/img/blog3.jpg" alt="#">
                            </div>
                            <div class="news-body">
                                <div class="news-content">
                                    <div class="date">05 Jan, 2020</div>
                                    <h2><a href="blog-single.html">We provide highly business soliutions.</a></h2>
                                    <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do
                                        eiusmod tempor incididunt sed do incididunt sed.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->

        <!-- Start clients -->

        <!--/Ens clients -->


        <!-- Start Newsletter Area -->


@endsection

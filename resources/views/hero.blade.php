<!DOCTYPE html>
<html lang="en">
@include("Componen.head")

<body>

    <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- END SCROLL TOP BUTTON -->

    <!-- Start Header -->
    <header id="mu-hero" class="fixed-bottom">
        <div class="container">
            <nav id="da" class="navbar navbar-expand-lg navbar-light mu-navbar" data-aos="fade-up-left">
                <!-- Text based logo -->
                <a class="navbar-brand mu-logo" href="index.html">
                    <span>Buka.in</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto mu-navbar-nav">
                        <li class="nav-item active">
                            <a href="#mu-slider">Home</a>
                        </li>
                        <li class="nav-item"><a href="#mu-about">About us</a></li>
                        <li class="nav-item"><a href="#mu-service">Services</a></li>
                        <li class="nav-item"><a href="/login">Login</a></li>
                        <li class="nav-item"><a href="{{url('/register')}}">Register</a></li>
                    </ul>
                </div>
            </nav>
            <nav id="da2" class="navbar navbar-expand-lg navbar-light mu-navbar text-center">
                <div class="aroiba2 row">
                    <a href="/login" class="col-md-6 col-sm-6 btn btn-primary">
                        <h6 id="base">Login</h6>
                    </a>
                    <a href="{{url('/register')}}" class="col-md-6 col-sm-6 btn btn-primary">
                        <h6 id="base">Register</h6>
                    </a>
                </div>
                <div class="row">
                    <div class="row text-center m-auto">
                        <a class="col-sm-3 btn btn-primary" href="#mu-slider"><svg style="font-size: 30px;" class="svg-inline--fa fa-home fa-w-18" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="home" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"></path>
                            </svg><!-- <i style="font-size:30px" class="fa fa-home"></i> Font Awesome fontawesome.com --></a>
                        <a class="col-sm-3 btn btn-primary" href="#mu-about"><svg style="font-size: 30px;" class="svg-inline--fa fa-city fa-w-20" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="city" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M616 192H480V24c0-13.26-10.74-24-24-24H312c-13.26 0-24 10.74-24 24v72h-64V16c0-8.84-7.16-16-16-16h-16c-8.84 0-16 7.16-16 16v80h-64V16c0-8.84-7.16-16-16-16H80c-8.84 0-16 7.16-16 16v80H24c-13.26 0-24 10.74-24 24v360c0 17.67 14.33 32 32 32h576c17.67 0 32-14.33 32-32V216c0-13.26-10.75-24-24-24zM128 404c0 6.63-5.37 12-12 12H76c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm0-96c0 6.63-5.37 12-12 12H76c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm0-96c0 6.63-5.37 12-12 12H76c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm128 192c0 6.63-5.37 12-12 12h-40c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm0-96c0 6.63-5.37 12-12 12h-40c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm0-96c0 6.63-5.37 12-12 12h-40c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm160 96c0 6.63-5.37 12-12 12h-40c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm0-96c0 6.63-5.37 12-12 12h-40c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm0-96c0 6.63-5.37 12-12 12h-40c-6.63 0-12-5.37-12-12V76c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm160 288c0 6.63-5.37 12-12 12h-40c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40zm0-96c0 6.63-5.37 12-12 12h-40c-6.63 0-12-5.37-12-12v-40c0-6.63 5.37-12 12-12h40c6.63 0 12 5.37 12 12v40z"></path>
                            </svg><!-- <i style="font-size:30px" class="fas fa-city"></i> Font Awesome fontawesome.com --></a>
                        <a class="col-sm-3 btn btn-primary" href="#mu-service"><svg style="font-size: 30px;" class="svg-inline--fa fa-coffee fa-w-20" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="coffee" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M192 384h192c53 0 96-43 96-96h32c70.6 0 128-57.4 128-128S582.6 32 512 32H120c-13.3 0-24 10.7-24 24v232c0 53 43 96 96 96zM512 96c35.3 0 64 28.7 64 64s-28.7 64-64 64h-32V96h32zm47.7 384H48.3c-47.6 0-61-64-36-64h583.3c25 0 11.8 64-35.9 64z"></path>
                            </svg><!-- <i style="font-size:30px" class="fas fa-coffee"></i> Font Awesome fontawesome.com --></a>
                        <a class="col-sm-3 btn btn-primary" href="login"><svg style="font-size: 30px;" class="svg-inline--fa fa-sign-in-alt fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sign-in-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M416 448h-84c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h84c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32h-84c-6.6 0-12-5.4-12-12V76c0-6.6 5.4-12 12-12h84c53 0 96 43 96 96v192c0 53-43 96-96 96zm-47-201L201 79c-15-15-41-4.5-41 17v96H24c-13.3 0-24 10.7-24 24v96c0 13.3 10.7 24 24 24h136v96c0 21.5 26 32 41 17l168-168c9.3-9.4 9.3-24.6 0-34z"></path>
                            </svg><!-- <i style="font-size:30px" class="fas fa-sign-in-alt"></i> Font Awesome fontawesome.com --></a>
                    </div>
                </div>
            </nav>


        </div>
    </header>
    <!-- End Header -->

    <!-- Start slider area -->
    <div class="head1" id="head1" data-aos="zoom-in">
        <a class="mu-logo logo-here" href="#">
            <span>BUKA.in</span>
        </a>
        <a href="{{url('/register')}}" class="mu-primary-btn mu-quote-btn logo-here2">
            Daftar <i class="fas fa-sign-in-alt"></i>
        </a>
    </div>
    <div id="mu-slider" data-aos="zoom-in">
        <div class="mu-slide">
            <!-- Start single slide  -->
            <div class="mu-single-slide">
                <img src="vendor/img/slider-img-1.jpg" alt="slider img">
                <div class="mu-single-slide-content-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mu-single-slide-content">
                                    <h1>Welcome to Bukain</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                        eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
                                        montes, nascetur ridiculus mus. Donec quam felis,</p>
                                    <a class="mu-primary-btn" href="{{url('/register')}}">Mulai.in <span class="fas fa-sign-in-alt"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End single slide  -->

            <!-- Start single slide  -->
            <div class="mu-single-slide">
                <img src="vendor/img/slider-img-2.jpg" alt="slider img">
                <div class="mu-single-slide-content-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mu-single-slide-content">
                                    <h1>Kami memendekan linkmu</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                        eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
                                        montes, nascetur ridiculus mus. Donec quam felis,</p>
                                    <a class="mu-primary-btn" href="#">Mulai.in <span class="fas fa-sign-in-alt"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End single slide  -->

            <!-- Start single slide  -->
            <div class="mu-single-slide">
                <img src="vendor/img/slider-img-3.jpg" alt="slider img">
                <div class="mu-single-slide-content-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mu-single-slide-content">
                                    <h1>Persiapkan Portofoliomu bersma kamu</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                        eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
                                        montes, nascetur ridiculus mus. Donec quam felis,</p>
                                    <a class="mu-primary-btn" href="#">Mulai.in <span class="fas fa-sign-in-alt"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End single slide  -->
        </div>
    </div>
    <!-- End Slider area -->


    <!-- Start main content -->
    <main>
        <!-- Start About -->
        <section id="mu-about" data-aos="zoom-in">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-about-area">
                            <!-- Title -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mu-title" data-aos="zoom-in">
                                        <h2>Kenapa Buka.in</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor. Aenean massa cum sociis.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Feature Content -->
                            <div class="row" data-aos="zoom-in">
                                <div class="col-md-6">
                                    <div class="mu-about-left">
                                        <img class="" src="vendor/img/about-us.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mu-about-right">
                                        <ul>
                                            <li data-aos="zoom-in-left">
                                                <h3>Our Mission</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                                    commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                    penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                                    Donec quam felis,</p>
                                            </li>
                                            <li data-aos="zoom-in-left">
                                                <h3>Our Vision</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                                    commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                    penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                                    Donec quam felis,</p>
                                            </li>
                                            <li data-aos="zoom-in-left">
                                                <h3>Our Valuse</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                                    commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                    penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                                    Donec quam felis,</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Feature Content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About -->

        <!-- Call to Action -->
        <div id="mu-call-to-action" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-call-to-action-area">
                            <div class="mu-call-to-action-left">
                                <h2>Slogan Here</h2>
                                <p>component for calling extra attention to featured content or information.</p>
                            </div>
                            <a href="{{url('/register')}}" class="mu-primary-btn mu-quote-btn">Daftar Sekarang <i class="fas fa-sign-in-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Services -->
        <section id="mu-service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-service-area">
                            <!-- Title -->
                            <div class="row" data-aos="fade-up-left">
                                <div class="col-md-12">
                                    <div class="mu-title">
                                        <h2>Our exclusive services</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor. Aenean massa cum sociis.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Service Content -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mu-service-content">
                                        <div class="row">
                                            <!-- Start single service -->
                                            <div class="col-md-4" data-aos="fade-up-left">
                                                <div class="mu-single-service">
                                                    <div class="mu-single-service-icon"><i class="fas fa-shopping-cart" aria-hidden="true"></i></div>
                                                    <div class="mu-single-service-content">
                                                        <h3>E-Commerce</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                            Aenean commodo ligula eget dolor commodo .</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End single service -->
                                            <!-- Start single service -->
                                            <div class="col-md-4" data-aos="fade-up-left">
                                                <div class="mu-single-service">
                                                    <div class="mu-single-service-icon"><i class="fa fa-bullhorn" aria-hidden="true"></i></div>
                                                    <div class="mu-single-service-content">
                                                        <h3>Online Marketing</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                            Aenean commodo ligula eget dolor commodo .</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End single service -->
                                            <!-- Start single service -->
                                            <div class="col-md-4" data-aos="fade-up-left">
                                                <div class="mu-single-service">
                                                    <div class="mu-single-service-icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
                                                    <div class="mu-single-service-content">
                                                        <h3>Web Design</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                            Aenean commodo ligula eget dolor commodo .</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End single service -->
                                            <!-- Start single service -->
                                            <div class="col-md-4" data-aos="fade-up-left">
                                                <div class="mu-single-service">
                                                    <div class="mu-single-service-icon"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                                                    <div class="mu-single-service-content">
                                                        <h3>Mobile Development</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                            Aenean commodo ligula eget dolor commodo .</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End single service -->
                                            <!-- Start single service -->
                                            <div class="col-md-4" data-aos="fade-up-left">
                                                <div class="mu-single-service">
                                                    <div class="mu-single-service-icon"><i class="far fa-grin-alt" aria-hidden="true"></i></div>
                                                    <div class="mu-single-service-content">
                                                        <h3>Customer Support</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                            Aenean commodo ligula eget dolor commodo .</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End single service -->
                                            <!-- Start single service -->
                                            <!-- <div class="col-md-4" data-aos="fade-up"
     data-aos-anchor-placement="top-center">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-cog"
															aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Customization</h3>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
															Aenean commodo ligula eget dolor commodo .</p>
													</div>
												</div>
											</div> -->
                                            <!-- End single service -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Service Content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services -->

    </main>

    <!-- End main content -->
    @include("Componen.foot")
</body>

</html>

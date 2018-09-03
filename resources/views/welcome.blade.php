@extends('layout.app')

@section('content')
<!-- Start Slider Area -->
<div id="home" class="slider-area">
    <div class="bend niceties preview-2">
        <div id="ensign-nivoslider" class="slides">
            <img src="img/slider/slider1.jpg" alt="" title="#slider-direction-1" />
            <img src="img/slider/slider2.jpg" alt="" title="#slider-direction-2" />
            <img src="img/slider/slider3.jpg" alt="" title="#slider-direction-3" />
        </div>

        <!-- direction 1 -->
        <div id="slider-direction-1" class="slider-direction slider-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content">
                            <!-- layer 1 -->
                            <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                                <h2 class="title1">The Best way to disburse funds </h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                <h1 class="title2">We're In The Business Of helping you disburse your funds</h1>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <a class="ready-btn right-btn page-scroll" href="{{URL::to('/company')}}">signup</a>
                                <a class="ready-btn page-scroll" href="#about">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- direction 2 -->
        <div id="slider-direction-2" class="slider-direction slider-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content text-center">
                            <!-- layer 1 -->
                            <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <h2 class="title1">Tranfer made easy  </h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                <h1 class="title2">Transfer funds through mobile money</h1>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <a class="ready-btn right-btn page-scroll" href="{{URL::to('/company')}}">signup</a>
                                <a class="ready-btn page-scroll" href="#about">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- direction 3 -->
        <div id="slider-direction-3" class="slider-direction slider-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content">
                            <!-- layer 1 -->
                            <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <h2 class="title1">No quees </h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                <h1 class="title2">No worries of lines</h1>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <a class="ready-btn right-btn page-scroll" href="{{URL::to('/company')}}">Sign up</a>
                                <a class="ready-btn page-scroll" href="#about">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slider Area -->
<!-- Start About area -->
<div id="about" class="about-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>About eDisburse</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- single-well start-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="well-left">
                    <div class="single-well">
                        <a href="#">
                            <img src="img/about/1.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!-- single-well end-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="well-middle">
                    <div class="single-well">
                        <a href="#">
                            <h4 class="sec-head">Funds </h4>
                        </a>
                        <p>
                           explanation here
                            {{--Redug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure aspernatur sit adipisci quaerat unde at nequeRedug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure--}}
                        </p>
                        <ul>
                            <li>
                                <i class="fa fa-mobile"></i> Mpesa
                            </li>
                            <li>
                                <i class="fa fa-bank"></i> Bank
                            </li>
                            <li>
                                <i class="fa fa-dollar"></i> pesapal
                            </li>
                            <li>
                                <i class="fa fa-bank"></i> equity
                            </li>
                            <li>
                                <i class="fa fa-briefcase"></i> check
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End col-->
        </div>
    </div>
</div>
<!-- End About area -->

<!-- Start Service area -->
<div id="services" class="services-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline services-head text-center">
                    <h2>Our Services</h2>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="services-contents">
                <!-- Start Left services -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about-move">
                        <div class="services-details">
                            <div class="single-services">
                                <a class="services-icon" href="#">
                                    <i class="fa fa-mobile"></i>
                                </a>
                                <h4>Mobile money</h4>
                                <p>
                                    explanation
                                </p>
                            </div>
                        </div>
                        <!-- end about-details -->
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about-move">
                        <div class="services-details">
                            <div class="single-services">
                                <a class="services-icon" href="#">
                                    <i class="fa fa-bank"></i>
                                </a>
                                <h4>bank</h4>
                                <p>
                                    bank explanation
                                </p>
                            </div>
                        </div>
                        <!-- end about-details -->
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <!-- end col-md-4 -->
                    <div class=" about-move">
                        <div class="services-details">
                            <div class="single-services">
                                <a class="services-icon" href="#">
                                    <i class="fa fa-building"></i>
                                </a>
                                <h4>B2B</h4>
                                <p>
                                    ABOUT B2B
                                </p>
                            </div>
                        </div>
                        <!-- end about-details -->
                    </div>
                </div>
                        <!-- end about-details -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Service area -->
    {{--sign up--}}
<div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
            <!-- Start  contact -->

            <!-- End Left contact -->
        </div>
    </div>
</div>
</div>

@endsection
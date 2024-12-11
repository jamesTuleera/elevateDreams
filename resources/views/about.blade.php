@extends('layouts.home')

@section('content')
    <main id="main">

        <section class="breadcumb-section"
            style="background-image: url({{ asset('home_assets/assets/images/page/bg3.jpg') }})">
            <div class="tf-container">
                <div class="row">
                    <div class="col-lg-12 center z-index1">
                        <h1 class="title">About us</h1>
                        <ul class="breadcumb-list flex-five">
                            <li><a href="index.html">Home</a></li>
                            <li><span>About us
                                </span></li>
                        </ul>
                        <img class="bcrumb-ab" src="{{ asset('home_assets/assets/images/page/') }}" alt="">
                    </div>
                </div>

            </div>
        </section>



        <!-- Widget Video -->
        <section class="mt-5 mb-5 about-us-h4">
            <div class="tf-container">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="relative overflow-hidden video-h4-widget mb--14em"
                            style="background-image: url({{ asset('home_assets/assets/images/page/youtubela.jpeg') }})">
                            <div class="video-wrap">
                                <a href="https://www.youtube.com/watch?v=n9LgeoJE4EI"
                                    class="relative video-box flex-five z-index3 widget-videos">
                                    <i class="icon-Polygon-4"></i>
                                </a>
                            </div>
                            <P class="relative text-white font-yes center text-video z-index3">Watch Video</P>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Widget Video -->
        <!-- Widget About Us -->
        <section class="about-us-h4">
            <div class="tf-container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="relative image-about-h4-wrap">


                            <img class="img-fluid" src="{{ asset('home_assets/assets/images/page/1.jpeg') }}"
                                alt="Image Listing">

                        </div>


                    </div>

                    <div class="col-md-8 inner-content-about">


                        <div class="mb-30">
                            <h2 class="title-heading mb-18">Welcome to Elevate Dreams

                            </h2>
                            <p class="des">Welcome to Elevate Dreams, where we empower individuals, entrepreneurs, and
                                visionaries to reach their fullest potential. Our goal is to simplify the path to U.S.
                                immigration and business success, helping exceptional individuals, skilled professionals,
                                and investors achieve their goals. Through personalized support and comprehensive services,
                                we elevate our clients’ dreams and deliver outstanding results.


                            </p>
                        </div>

                        <div class="row">
                            <div class="mt-2 col-md-12">
                                <div class="icon-box-style6">
                                    <div class="content">
                                        <h6 class="title-icon"><a href="#">Our Mission

                                            </a></h6>
                                        <p class="des-icon">Our mission at Elevate Dreams is to provide clear, personalized
                                            pathways for individuals, entrepreneurs, and investors to achieve success in the
                                            U.S. Through thorough guidance, tailored strategies, and comprehensive services,
                                            we empower our clients to overcome obstacles and reach their goals with
                                            confidence. We are dedicated to transforming dreams into tangible results,
                                            fostering growth, and creating lasting impact for those we serve.


                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="mt-5 col-md-12">
                                <div class="icon-box-style6">
                                    <div class="content">
                                        <h6 class="title-icon"><a href="#">Our Vision

                                            </a></h6>
                                        <p class="des-icon">We envision a world where crossing borders to pursue a better
                                            future or grow a business is a seamless process, filled with trust, opportunity,
                                            and hope. At Elevate Dreams, we open doors for individuals and businesses alike,
                                            turning aspirations into reality.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Widget About Us -->
    @endsection

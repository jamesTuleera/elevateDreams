<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }}</title>
    <link href="{{ asset('home_assets/assets/images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ asset('home_assets/app/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('home_assets/app/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('home_assets/app/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('home_assets/app/css/textanimation.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/images/favico.png') }}">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favico.png') }}">

</head>

<body class="body header-fixed counter-scroll">

    <div class="preload preload-container">
        <svg class="pl" width="240" height="240" viewBox="0 0 240 240">
            <circle class="pl__ring pl__ring--a" cx="120" cy="120" r="105" fill="none" stroke="#000" stroke-width="20"
                stroke-dasharray="0 660" stroke-dashoffset="-330" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--b" cx="120" cy="120" r="35" fill="none" stroke="#000" stroke-width="20"
                stroke-dasharray="0 220" stroke-dashoffset="-110" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--c" cx="85" cy="120" r="70" fill="none" stroke="#000" stroke-width="20"
                stroke-dasharray="0 440" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--d" cx="155" cy="120" r="70" fill="none" stroke="#000" stroke-width="20"
                stroke-dasharray="0 440" stroke-linecap="round"></circle>
        </svg>
    </div>

    <!-- /preload -->

    <div id="wrapper">
        <div id="pagee" class="clearfix">

            <!-- Main Header -->
            <header class="flex main-header">
                <!-- Header Lower -->
                <div id="header">
                    {{-- <div class="header-top">
                        <div class="header-top-wrap flex-two">
                            <div class="header-top-right">
                                <ul class=" flex-three">
                                    <li class="flex-three">
                                        <i class="icon-day"></i>
                                        <span>{{ Carbon\Carbon::now()->format('l, d F Y') }}</span>
                                    </li>
                                    <li class="flex-three">
                                        <i class="icon-mail"></i>
                                        <span>Info@elevatedreams.Com</span>
                                    </li>
                                    <li class="flex-three">
                                        <i class="icon-phone"></i>
                                        <span>684 555-0102 490</span>
                                    </li>


                                </ul>
                            </div>
                            <div class="header-top-left flex-two">
                                <a href="contact-us.html" class="booking">
                                    <i class="icon-19"></i>
                                    <span>Contact us</span>
                                </a>
                                <div class="follow-social flex-two">
                                    <span>Follow Us :</span>
                                    <ul class="flex-two">
                                        <li><a href="#"><i class="icon-icon-2"></i></a></li>
                                        <li><a href="#"><i class="icon-icon_03"></i></a></li>
                                        <li><a href="#"><i class="icon-x"></i></a></li>
                                        <li><a href="#"><i class="icon-icon"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div> --}}
                    <div class="header-lower">
                        <div class="tf-container full">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="flex inner-container justify-space align-center">
                                        <!-- Logo Box -->
                                        <div class="mobile-nav-toggler mobie-mt mobile-button">
                                            <i class="icon-Vector3"></i>
                                        </div>
                                        <div class="logo-box">
                                            <div class="logo">
                                                <a href="{{ route('welcome') }}">
                                                    <img src="{{ asset('home_assets/assets/images/logo.png') }}" alt="Logo">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="flex nav-outer align-center">
                                            <!-- Main Menu -->
                                            <nav class="main-menu show navbar-expand-md">
                                                <div class="clearfix navbar-collapse collapse"
                                                    id="navbarSupportedContent">
                                                    <ul class="clearfix navigation">
                                                        <li class=" current">
                                                            <a href="{{ route('welcome') }}">Home</a>
                                                        </li>

                                                        <li class="">
                                                            <a href="{{ route('about') }}">About Us</a>
                                                        </li>

                                                        <li class="dropdown2">
                                                            <a href="#">Services</a>
                                                            <ul>
                                                                <li><a href="{{ route('immigration') }}">Immigration</a></li>
                                                                <li><a href="{{ route('business-formation') }}">Internation Business Formation</a></li>
                                                                <li><a href="{{ route('immigration') }}">Internation Investment</a></li>
                                                            </ul>
                                                        </li>

                                                        <li class="">
                                                            <a href="{{ route('meet-our-teams') }}">Meet Our Team</a>
                                                        </li>

                                                        <li class="">
                                                            <a href="{{ route('faqs') }}">FAQs</a>
                                                        </li>

                                                        <li class="">
                                                            <a href="#">blog</a>
                                                        </li>

                                                        <li><a href="contact-us.html">Contact</a></li>
                                                    </ul>
                                                </div>
                                            </nav>
                                            <!-- Main Menu End-->
                                        </div>
                                        <div class="flex header-account align-center">
                                            {{-- <div class="language">
                                                <div class="nice-select" tabindex="0">
                                                    <img src="{{ asset('home_assets/assets/images/page/language.svg') }}" alt=""><span
                                                        class="current">English</span>
                                                    <ul class="list">
                                                        <li data-value class="option selected"><img
                                                                src="{{ asset('home_assets/assets/images/page/language.svg') }}" alt="">English
                                                        </li>
                                                        <li data-value="Vietnam" class="option"><img
                                                                src="{{ asset('home_assets/assets/images/page/language.svg') }}" alt="">Vietnam
                                                        </li>
                                                        <li data-value="German" class="option"><img
                                                                src="{{ asset('home_assets/assets/images/page/language.svg') }}" alt="">German
                                                        </li>
                                                        <li data-value="Russian" class="option"><img
                                                                src="{{ asset('home_assets/assets/images/page/language.svg') }}" alt="">Russian
                                                        </li>
                                                        <li data-value="Canada" class="option"><img
                                                                src="{{ asset('home_assets/assets/images/page/language.svg') }}" alt="">Canada
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="relative search-mobie">
                                                <div class="dropdown">
                                                    <a  type="button" class="show-search" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="icon-Vector5"></i>
                                                    </a>
                                                    <ul class="dropdown-menu top-search">
                                                        <form action="/" id="search-bar-widget">
                                                            <input type="text" placeholder="Search here...">
                                                            <button type="button"><i class="icon-search-2"></i></button>
                                                        </form>
                                                    </ul>
                                                  </div>
                                            </div> --}}
                                            <div class="register">
                                                <ul class="flex align-center">
                                                    <li>
                                                        <a href="login.html" class="flex-three">
                                                           <img src="{{ asset('home_assets/assets/images/page/avata.jpg') }}" alt="image">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('home_assets/assets/images/page/fl1.png') }}" alt="" class="fly-ab">
                    </div>
                </div>

                <!-- End Header Lower -->
                <a href="#" class="header-sidebar flex-three" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <i class="icon-Bars"></i>
                </a>

                <!-- Mobile Menu  -->
                <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
                <div class="mobile-menu">
                    <div class="menu-backdrop"></div>
                    <nav class="menu-box">
                        <div class="nav-logo"><a href="{{ route('welcome') }}">
                                <img src="{{ asset('home_assets/assets/images/logo2.png') }}" alt=""></a></div>
                        <div class="bottom-canvas">
                            <div class="menu-outer">
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- End Mobile Menu -->

            </header>
            <!-- End Main Header -->
            <main id="main">

@yield('content')

{{--
                <!-- Widget Testimonial -->
                <section class="widget-testimonial-style01">
                    <div class="tf-container">
                        <div class="row">
                            <div class="relative col-md-5">
                                <div class="image-box-tesimonial box-testimonial1 wow fadeInLeft animated "
                                    data-wow-delay="0.1s">
                                    <img src="{{ asset('home_assets/assets/images/page/testimonial1.jpg') }}" alt="">
                                </div>
                                <div class="image-box-tesimonial box-testimonial2 wow fadeInUp animated "
                                    data-wow-delay="0.3s">
                                    <img src="{{ asset('home_assets/assets/images/page/testimonial2.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="overflow-hidden widget-testimonial ">
                                    <div class="swiper mySwiper2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="relative testimonial-content">
                                                    <div class="profile mb-15">
                                                        <h3 class="name">Piter Bowman</h3>
                                                        <span class="job">Business CEO</span>
                                                    </div>
                                                    <p class="tes">Leverage agile frameworks to provide a robust
                                                        synopsis for high level overviews. Iterative in
                                                        approaches to corporate strategy data foster go
                                                        to collaborative thinking.
                                                    </p>
                                                    <span class="line"></span>
                                                    <div class="icon-tes flex-five">
                                                        <i class="icon-Group-1000002944"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="relative testimonial-content">
                                                    <div class="profile mb-15">
                                                        <h3 class="name">Piter Bowman</h3>
                                                        <span class="job">Business CEO</span>
                                                    </div>
                                                    <p class="tes">Leverage agile frameworks to provide a robust
                                                        synopsis for high level overviews. Iterative in
                                                        approaches to corporate strategy data foster go
                                                        to collaborative thinking.
                                                    </p>
                                                    <span class="line"></span>
                                                    <div class="icon-tes flex-five">
                                                        <i class="icon-Group-1000002944"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="relative testimonial-content">
                                                    <div class="profile mb-15">
                                                        <h3 class="name">Piter Bowman</h3>
                                                        <span class="job">Business CEO</span>
                                                    </div>
                                                    <p class="tes">Leverage agile frameworks to provide a robust
                                                        synopsis for high level overviews. Iterative in
                                                        approaches to corporate strategy data foster go
                                                        to collaborative thinking.
                                                    </p>
                                                    <span class="line"></span>
                                                    <div class="icon-tes flex-five">
                                                        <i class="icon-Group-1000002944"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="swiper testimonial-image">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide avata">
                                                <img src="{{ asset('home_assets/assets/images/avata/9.jpg') }}" alt="Image Testimonial">
                                            </div>
                                            <div class="swiper-slide avata">
                                                <img src="{{ asset('home_assets/assets/images/avata/7.jpg') }}" alt="Image Testimonial">
                                            </div>
                                            <div class="swiper-slide avata">
                                                <img src="{{ asset('home_assets/assets/images/avata/8.jpg') }}" alt="Image Testimonial">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- Widget Testimonial -->

              <!-- Widget Banner Contact -->
                <section class="relative widget-banner-contact">
                    <div class="tf-container">
                        <div class="relative row z-index3">
                            <div class="col-lg-7 content-banner-contact">
                                <div class="mb-32">
                                    <span
                                        class="sub-title-heading text-main mb-15 font-yes fs-28-46 wow fadeInUp animated">Explore
                                        the
                                        world</span>
                                    <h2 class="text-white title-heading wow fadeInUp animated">Ready to travel with real
                                        adventure & enjoy
                                        natural</h2>
                                </div>
                                <div class="flex-three">
                                    <div class="video-wrap wow fadeInUp animated">
                                        <a href="https://www.youtube.com/watch?v=n9LgeoJE4EI"
                                            class="widget-icon-video flex-five widget-videos">
                                            <i class="icon-Polygon-4"></i>
                                        </a>
                                    </div>
                                    <address class="wow fadeInUp animated">
                                        Contact us at <a href="mailto:@Hooktheme.co"> @Hooktheme.co</a><br>
                                    </address>
                                </div>
                                <img src="{{ asset('home_assets/assets/images/page/vector2.png') }}" alt="image" class="mask-icon-banner">
                            </div>
                            <div class="col-lg-5">
                                <div class="image-banner-contact">
                                    <img src="{{ asset('home_assets/assets/images/page/ewewe1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Widget Banner Contact -->



                <section class="mb--93">
                    <div class="tf-container">
                        <div class="callt-to-action flex-two">
                            <div class="callt-to-action-content flex-three">
                                <div class="image">
                                    <img src="{{ asset('home_assets/assets/images/page/ready.png') }}" alt="Image">
                                </div>
                                <div class="content">
                                    <h2 class="title-call">Ready to adventure and enjoy natural</h2>
                                    <p class="des">Lorem ipsum dolor sit amet, consectetur notted adipisicin</p>
                                </div>
                            </div>
                            <img src="{{ asset('home_assets/assets/images/page/vector4.png') }}" alt="" class="shape-ab">
                            <div class="callt-to-action-button">
                                <a href="#" class="get-call">Let,s get started</a>
                            </div>
                        </div>
                    </div>

                </section>
                --}}
            </main>

            <footer class="footer footer-style1">
                <div class="tf-container">
                    <div class="footer-main">
                        <div class="footer-logo">
                            <div class="logo-footer">
                                <img src="{{ asset('home_assets/assets/images/logo2.png') }}" alt="">
                            </div>
                            <p class="des-footer">The world’s first and largest digital market
                                for crypto collectibles and non-fungible
                            </p>
                            <ul class="footer-info">
                                <li class="flex-three">
                                    <i class="icon-noun-mail-5780740-1"></i>
                                    <p>Info@webmail.com</p>
                                </li>
                                <li class="flex-three">
                                    <i class="icon-Group-9"></i>
                                    <p><a href="tel:684 555-0102 490">684 555-0102 490</a></p>
                                </li>
                                <li class="flex-three">
                                    <i class="icon-Layer-19"></i>
                                    <p>6391 Elgin St. Celina, NYC 10299</p>
                                </li>
                            </ul>

                        </div>
                        <div class="footer-service">
                            <h5 class="title">Services Req</h5>

                            <ul class="footer-menu">
                                <li>
                                    <a href="about-us.html">About Us</a>
                                </li>
                                <li>
                                    <a href="gallery.html">Gallery</a>
                                </li>
                                <li>
                                    <a href="team.html">Our Team</a>
                                </li>
                                <li>
                                    <a href="blog.html">Blog Insights</a>
                                </li>
                                <li>
                                    <a href="contact/">Contact</a>
                                </li>
                            </ul>

                        </div>
                        <div class="footer-gallery">
                            <h5 class="title">Gallery</h5>

                            <div class="gallery-img">
                                <a href="{{ asset('home_assets/assets/images/gallery/gl1.jpg') }}" data-fancybox="gallery">
                                    <img src="{{ asset('home_assets/assets/images/gallery/gl1.jpg') }}" alt="image gallery">
                                </a>
                                <a href="{{ asset('home_assets/assets/images/gallery/gl2.jpg') }}" data-fancybox="gallery">
                                    <img src="{{ asset('home_assets/assets/images/gallery/gl2.jpg') }}" alt="image gallery">
                                </a>
                                <a href="{{ asset('home_assets/assets/images/gallery/gl3.jpg') }}" data-fancybox="gallery">
                                    <img src="{{ asset('home_assets/assets/images/gallery/gl3.jpg') }}" alt="image gallery">
                                </a>
                                <a href="{{ asset('home_assets/assets/images/gallery/gl4.jpg') }}" data-fancybox="gallery">
                                    <img src="{{ asset('home_assets/assets/images/gallery/gl4.jpg') }}" alt="image gallery">
                                </a>
                                <a href="{{ asset('home_assets/assets/images/gallery/gl5.jpg') }}" data-fancybox="gallery">
                                    <img src="{{ asset('home_assets/assets/images/gallery/gl5.jpg') }}" alt="image gallery">
                                </a>
                                <a href="{{ asset('home_assets/assets/images/gallery/gl6.jpg') }}" data-fancybox="gallery">
                                    <img src="{{ asset('home_assets/assets/images/gallery/gl6.jpg') }}" alt="image gallery">
                                </a>
                            </div>

                        </div>
                        <div class="footer-newsletter">
                            <h5 class="title">Newsletter</h5>
                            <form action="/" id="footer-form">
                                <div class="input-wrap flex-three">
                                    <input type="email" placeholder="Enter Email Adress">
                                    <button type="submit"><i class="icon-paper-plane"></i></button>
                                </div>
                                <div class="check-form flex-three">
                                    <i class="icon-Vector-121"></i>
                                    <p>I agree to all your terms and policies</p>
                                </div>

                            </form>
                            <ul class="social-ft flex-three">
                                <li>
                                    <a href="#">
                                        <i class="icon-icon-2"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-8"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-2"></i>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <div class="row footer-bottom">
                        <div class="col-md-6">
                            <p class="copy-right">Copyright © 2024 by <a href="#" class="text-main">Themesflat.</a> All
                                Rights Reserved</p>
                        </div>
                        <div class="col-md-6">
                            <ul class="social flex-six">
                                <li>
                                    <a href="#">
                                        <i class="icon-icon-2"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-icon_03"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-2"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- Bottom -->
        </div>
        <!-- /#page -->
    </div>

    <!-- Modal Popup Bid -->

    <a id="scroll-top" class="button-go"></a>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="logo-canvas">
                <img src="{{ asset('home_assets/assets/images/logo.png') }}" alt="image">
            </div>
            <p class="des">The world’s first and largest digital market
                for crypto collectibles and non-fungible
            </p>
            <ul class="canvas-info">
                <li class="flex-three">
                    <i class="icon-noun-mail-5780740-1"></i>
                    <p>Info@webmail.com</p>
                </li>
                <li class="flex-three">
                    <i class="icon-Group-9"></i>
                    <p>684 555-0102 490</p>
                </li>
                <li class="flex-three">
                    <i class="icon-Layer-19"></i>
                    <p>6391 Elgin St. Celina, NYC 10299</p>
                </li>
            </ul>
            <ul class="social flex-three">
                <li>
                    <a href="#">
                        <i class="icon-icon-2"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-icon-1"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-8"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-6"></i>
                    </a>
                </li>
            </ul>

        </div>
    </div>
    <script src="//code.jivosite.com/widget/CNT7oBueTa" async></script>


    <!-- Javascript -->
    <script src="{{ asset('home_assets/app/js/jquery.min.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/swiper.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/plugin.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/count-down.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/countto.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/price-ranger.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/textanimation.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/wow.min.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/shortcodes.js') }}"></script>
    <script src="{{ asset('home_assets/app/js/main.js') }}"></script>

</body>

</html>

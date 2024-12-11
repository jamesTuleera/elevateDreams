@extends('layouts.home')

@section('content')
    <!-- Widget Slider -->
    <section class="relative slider">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="relative overflow-hidden slider-home1 swiper-slide">
                    <div class="silider-image">
                        <img src="{{ asset('home_assets/assets/images/slide/slide1.jpg') }}" alt="Image"
                            class="image-slide">
                        <img src="{{ asset('home_assets/assets/images/slide/mask-slide.png') }}" alt="Image"
                            class="mask-slide">
                        <img src="{{ asset('home_assets/assets/images/slide/mask-fly.png') }}" alt="Image"
                            class="mask-flane">
                        <div class="booking-title tf-anime-rorate">
                            <p class="booking">path to U.S.</p>
                            <span></span>
                        </div>
                    </div>
                    <div class="slider-content">
                        <div class="tf-container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h1 class="mb-32 text-white title-slide fadeInDown wow">Welcome to Elevate Dreams <br>
                                        <span class="animationtext clip text-main">
                                            <span style="font-size: 45px;" class="cd-words-wrapper">
                                                <span style="color: #e9b91e" class="item-text is-visible">Immigration </span>
                                                <span style="color: #e9b91e" class="item-text is-hidden"> Business Formation</span>
                                                <span style="color: #e9b91e" class="item-text is-hidden"> Investment</span>
                                            </span>
                                        </span>
                                    </h1>
                                    <p class="text-white des mb-45 fadeInDown wow">We care deeply about your success and go
                                        the extra mile to make it happen.
                                    </p>
                                    <div class="btn-group">
                                        <a href="#" class="btn-main edyellow fadeInDown wow">
                                            <p class="btn-main-text">Let,s get started</p>
                                            <p class="iconer">
                                                <i class="icon-arrow-right"></i>
                                            </p>
                                        </a>
                                        <a href="#" class="btn-w-wa fadeInDown wow">Who we are <i
                                                class="icon-Group-13"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="relative overflow-hidden slider-home1 swiper-slide">
                    <div class="silider-image">
                        <img src="{{ asset('home_assets/assets/images/slide/slide1.jpg') }}" alt="Image"
                            class="image-slide">
                        <img src="{{ asset('home_assets/assets/images/slide/mask-slide.png') }}" alt="Image"
                            class="mask-slide">
                        <img src="{{ asset('home_assets/assets/images/slide/mask-fly.png') }}" alt="Image"
                            class="mask-flane">
                        <div class="booking-title tf-anime-rorate">
                            <p class="booking">Booking</p>
                            <span></span>
                        </div>
                    </div>
                    <div class="slider-content">
                        <div class="tf-container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <span class="sub-title text-main font-yes fs-28-46 fadeInDown wow">Explore
                                        the
                                        world</span>
                                    <h1 class="mb-32 text-white title-slide fadeInDown wow">Tour Travel &
                                        adventure
                                        <span class="animationtext clip text-main">
                                            <span class="cd-words-wrapper">
                                                <span class="item-text is-visible">Camping</span>
                                                <span class="item-text is-hidden">Camping</span>
                                            </span>
                                        </span>
                                    </h1>
                                    <p class="text-white des mb-45 fadeInDown wow">Welcome to our Print 128
                                        website! We are
                                        a
                                        professional and reliable printing
                                        company that offers a wide range of printing services to
                                    </p>
                                    <div class="btn-group">
                                        <a href="#" class="btn-main fadeInDown wow">
                                            <p class="btn-main-text">Let,s get started</p>
                                            <p class="iconer">
                                                <i class="icon-arrow-right"></i>
                                            </p>
                                        </a>
                                        <a href="#" class="btn-w-wa fadeInDown wow">Who we are <i
                                                class="icon-Group-13"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative overflow-hidden slider-home1 swiper-slide">
                    <div class="silider-image">
                        <img src="{{ asset('home_assets/assets/images/slide/slide1.jpg') }}" alt="Image"
                            class="image-slide">
                        <img src="{{ asset('home_assets/assets/images/slide/mask-slide.png') }}" alt="Image"
                            class="mask-slide">
                        <img src="{{ asset('home_assets/assets/images/slide/mask-fly.png') }}" alt="Image"
                            class="mask-flane">
                        <div class="booking-title tf-anime-rorate">
                            <p class="booking">Booking</p>
                            <span></span>
                        </div>
                    </div>
                    <div class="slider-content">
                        <div class="tf-container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <span class="sub-title text-main font-yes fs-28-46 fadeInDown wow">Explore
                                        the
                                        world</span>
                                    <h1 class="mb-32 text-white title-slide fadeInDown wow">Tour Travel &
                                        adventure
                                        <span class="animationtext clip text-main">
                                            <span class="cd-words-wrapper">
                                                <span class="item-text is-visible">Camping</span>
                                                <span class="item-text is-hidden">Camping</span>
                                            </span>
                                        </span>
                                    </h1>
                                    <p class="text-white des mb-45 fadeInDown wow">Welcome to our Print 128
                                        website! We are
                                        a
                                        professional and reliable printing
                                        company that offers a wide range of printing services to
                                    </p>
                                    <div class="btn-group">
                                        <a href="#" class="btn-main fadeInDown wow">
                                            <p class="btn-main-text">Let,s get started</p>
                                            <p class="iconer">
                                                <i class="icon-arrow-right"></i>
                                            </p>
                                        </a>
                                        <a href="#" class="btn-w-wa fadeInDown wow">Who we are <i
                                                class="icon-Group-13"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="btn-nex-prev">
                <div class="swiper-button-next next-home1"></div>
                <div class="swiper-button-prev prev-home1"></div>
            </div>
        </div>
    </section>
    <!-- Widget Slider -->

    <!-- Widget Select Form -->

    <!-- Widget Select Form -->



    <!-- Widget Banner Blog -->
    <section class="pd-main">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center m0-auto w-text-heading">

                        <h2 class="0 title-heading wow fadeInUp animated">What <span class="text-gray font-yes">We</span> Do
                        </h2>
                        <span class="sub-title-heading text-main mb-15 wow fadeInUp animated">We simplify the U.S. visa
                            process, focusing on three key pathways to residency</span>

                        <p class="mb-40"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 wow fadeInUp animated " data-wow-delay="0.1s">
                    <div class="tf-widget-blog blog-style">
                        <a href="blog-details.html" class="blog-image">
                            <img src="{{ asset('home_assets/assets/images/blog/bl1.jpg') }}" alt="">
                            <div class="category-blog">
                                <i class="icon-Group-8"></i>
                                <span>EB1</span>
                            </div>
                        </a>
                        <div class="blog-content">

                            <h3 class="entry-title"><a href="blog-details.html">EB1 Visa (Employment-Based First
                                    Preference)</a></h3>
                            <p class="des"> If you’ve reached the top of your field—whether in the arts, sciences,
                                business, or athletics—the EB1 visa is designed for you.
                            </p>
                            <a href="blog-details.html" class="btn-read-more">Read More <i class="icon-Vector-4"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp animated " data-wow-delay="0.2s">
                    <div class="tf-widget-blog blog-style">
                        <a href="blog-details.html" class="blog-image">
                            <img src="{{ asset('home_assets/assets/images/blog/bl2.jpg') }}" alt="">
                            <div class="category-blog">
                                <i class="icon-Group-8"></i>
                                <span>EB2</span>
                            </div>
                        </a>
                        <div class="blog-content">

                            <h3 class="entry-title"><a href="blog-details.html">EB2 Visa (Employment-Based Second
                                    Preference)</a></h3>
                            <p class="des">If you hold an advanced degree (like a Master’s or higher) or have exceptional
                                talent in your field, the EB2 visa may be your gateway to the U.S.
                            </p>
                            <a href="blog-details.html" class="btn-read-more">Read More <i class="icon-Vector-4"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp animated " data-wow-delay="0.3s">
                    <div class="tf-widget-blog blog-style">
                        <a href="blog-details.html" class="blog-image">
                            <img src="{{ asset('home_assets/assets/images/blog/bl3.jpg') }}" alt="">
                            <div class="category-blog">
                                <i class="icon-Group-8"></i>
                                <span>EB3</span>
                            </div>
                        </a>
                        <div class="blog-content">

                            <h3 class="entry-title"><a href="blog-details.html">EB5 Visa (Employment-Based Fifth Preference)
                                </a></h3>
                            <p class="des">This visa is ideal if you’re looking to invest in the U.S. economy. By
                                investing a substantial amount in a U.S.
                            </p>
                            <a href="blog-details.html" class="btn-read-more">Read More <i class="icon-Vector-4"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Widget Banner Blog -->



    <!-- Widget Aboutus -->
    <section class="about-us pb-150">
        <div class="tf-container">

            <div class="row pt-115">
                <div class="col-lg-6">
                    <div class="relative travel-video">
                        <img src="{{ asset('home_assets/assets/images/page/el2.jpeg') }}" alt="Image"
                            class="image-video">
                        <div class="video-wrap">
                            <a href="https://www.youtube.com/watch?v=n9LgeoJE4EI"
                                class="widget-icon-video widget-videos flex-five z-index3">
                                <i class="icon-Polygon-4"></i>
                            </a>
                        </div>

                        <img src="{{ asset('home_assets/assets/images/about-us/vali.png') }}" alt="Image"
                            class="mask-video tf-anime-rorate">
                      
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="inner-content-about">
                        <h2 class="title-heading mb-18 fadeInUp wow">We <span class="text-gray font-yes">Elevate </span>
                            your Dreams</h2>
                        <p class="des-heading fadeInUp wow">
                            We Elevate Dreams, because we believe that the journey to building a life in the United States
                            should be as smooth and inspiring as the dreams that drive it. We specialize in EB1, EB2, and
                            EB5 visa applications, guiding you every step of the way so that the complexities of immigration
                            law don’t get in the way of your future. Our approach is simple: we care deeply about your
                            success and go the extra mile to make it happen.
                        </p>
                        <div class="row mt-27 fadeInUp wow">
                            <div class="col-sm-6">
                                <div class="icon-box-style3">
                                    <div class="icon flex-three">
                                        <svg width="51" height="51" viewBox="0 0 51 51" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_40_471)">
                                                <path
                                                    d="M37.5511 9.06618C37.5511 5.77106 34.8703 3.09027 31.5752 3.09027C28.2801 3.09027 25.5993 5.77106 25.5993 9.06618C25.5993 12.3613 28.2801 15.0421 31.5752 15.0421C34.8703 15.0421 37.5511 12.3613 37.5511 9.06618ZM31.5752 12.0541C29.9277 12.0541 28.5873 10.7137 28.5873 9.06618C28.5873 7.41862 29.9277 6.07823 31.5752 6.07823C33.2228 6.07823 34.5632 7.41862 34.5632 9.06618C34.5632 10.7137 33.2228 12.0541 31.5752 12.0541Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M50.2947 10.8487C49.0667 8.96556 46.5591 8.33461 44.586 9.41226L34.279 15.0416C33.3084 15.0416 16.1894 15.0416 15.1914 15.0416V1.49617C15.1914 0.671101 14.5225 0.00219727 13.6974 0.00219727H1.49398C0.668903 0.00219727 0 0.671101 0 1.49617V10.5596C0 11.3847 0.668903 12.0536 1.49398 12.0536H12.2033V49.5026C12.2033 50.3277 12.8722 50.9966 13.6973 50.9966C14.5224 50.9966 15.1913 50.3277 15.1913 49.5026V24.0054H24.1551V46.5147C24.1551 50.399 28.7646 52.4156 31.625 49.8526C34.4825 52.4131 39.0949 50.4048 39.0949 46.5147V23.3212L49.0299 16.8488C51.038 15.5407 51.6042 12.8565 50.2947 10.8487ZM2.98795 9.06556V2.99005H12.2033V9.06556H2.98795ZM34.613 48.0086C33.7892 48.0086 33.119 47.3384 33.119 46.5146C33.119 45.3559 33.119 38.5353 33.119 37.4511C33.119 36.626 32.4501 35.9571 31.625 35.9571C30.7999 35.9571 30.131 36.626 30.131 37.4511V46.5146C30.131 47.3384 29.4608 48.0086 28.637 48.0086C27.8133 48.0086 27.1431 47.3384 27.1431 46.5146V32.9692H36.1069V46.5146C36.1069 47.3384 35.4367 48.0086 34.613 48.0086ZM47.399 14.3452L36.7854 21.2596C36.3622 21.5354 36.1069 22.0063 36.1069 22.5114V29.9812H27.1431V22.5114C27.1431 21.6863 26.4742 21.0174 25.6491 21.0174H15.1913V18.0294C35.5362 17.9654 34.7563 18.1854 35.3764 17.8467L46.0182 12.0346C46.6312 11.6997 47.4104 11.8957 47.7919 12.4809C48.1988 13.1046 48.0231 13.9387 47.399 14.3452Z"
                                                    fill="currentColor" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_40_471">
                                                    <rect width="51" height="51" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <h6 class="mb-10 title"><a href="#">Complete Application Support</a></h6>
                                    <p class="des">From preparing documents to liaising with U.S. immigration
                                        authorities, we handle every step of the process so you can focus on what matters
                                        most.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="icon-box-style3">
                                    <div class="icon flex-three">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <mask id="mask0_40_476" style="mask-type:luminance"
                                                maskUnits="userSpaceOnUse" x="0" y="0" width="40" height="40">
                                                <path d="M0 0H40V40H0V0Z" fill="white" />
                                            </mask>
                                            <g mask="url(#mask0_40_476)">
                                                <path d="M20 23.125V38.8281H38.8281V12.2656H34.1406" stroke="currentColor"
                                                    stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M5.85938 12.2656H1.17188V38.8281H20V23.2031" stroke="currentColor"
                                                    stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M26.9598 9.14062H34.1406V34.1406H26.5035C23.5528 34.1406 20.933 36.0287 20 38.8281"
                                                    stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M13.0402 9.14062H5.85938V34.1406H13.4965C16.4472 34.1406 19.067 36.0287 20 38.8281"
                                                    stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M20 1.17188C14.6974 1.17188 11.3111 6.82758 13.8151 11.5017L20 23.0469L26.1849 11.5017C28.6889 6.82758 25.3027 1.17188 20 1.17188Z"
                                                    stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M22.3438 8.20312C22.3438 9.4975 21.2944 10.5469 20 10.5469C18.7056 10.5469 17.6562 9.4975 17.6562 8.20312C17.6562 6.90875 18.7056 5.85937 20 5.85937C21.2944 5.85937 22.3438 6.90875 22.3438 8.20312Z"
                                                    stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                        </svg>
                                    </div>
                                    <h6 class="mb-10 title"><a href="#">Personalized Consultations</a></h6>
                                    <p class="des">We take the time to understand your unique situation and craft the
                                        best legal strategy for your immigration journey.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex-three btn-wrap-about mb-30 fadeInUp wow">
                            <a href="#" class="btn-main">
                                <p class="btn-main-text">More about us</p>
                                <p class="iconer">
                                    <i class="icon-arrow-right"></i>
                                </p>

                            </a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Widget Aboutus -->








    <!-- Widget activities -->
    <section class="relative overflow-hidden tf-widget-activities pd-main">
        <img src="{{ asset('home_assets/assets/images/page/mask-activiti.png') }}" alt="image" class="mask-top">
        <img src="{{ asset('home_assets/assets/images/page/mask-print-2.png') }}" alt="image" class="mask-bottom">
        <div class="tf-container">
            <div class="relative row z-index3">
                <div class="col-lg-12 mb-60">
                    <div class="clip-text">ELEVATE DREAMS</div>
                </div>
                <div class="col-lg-12">
                    <ul class="nav nav-tabs-activities justify-content-center" id="myTablist" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab"
                                aria-controls="home-tab-pane" aria-selected="true">
                                <span class="icon flex-five">
                                    <i class="icon-Group-22"></i>
                                </span>

                                <span>We See You, Not Just Your Case</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">
                                <span class="icon flex-five">
                                    <i class="icon-Group-31"></i>
                                </span>

                                <span>Your Path, Your Pace</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#contact-tab-pane" type="button" role="tab"
                                aria-controls="contact-tab-pane" aria-selected="false">
                                <span class="icon flex-five">
                                    <i class="icon-fishing-1"></i>
                                </span>

                                <span>We Go Beyond the Application</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="ab-tab" data-bs-toggle="tab" data-bs-target="#ab-tab-pane"
                                type="button" role="tab" aria-controls="ab-tab-pane" aria-selected="false">
                                <span class="icon flex-five">
                                    <i class="icon-Group-4"></i>
                                </span>

                                <span>A Legacy of Trust and Success</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="cd-tab" data-bs-toggle="tab" data-bs-target="#cd-tab-pane"
                                type="button" role="tab" aria-controls="cd-tab-pane" aria-selected="false">
                                <span class="icon flex-five">
                                    <svg width="59" height="55" viewBox="0 0 59 55" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M34.7241 5.70648C36.0557 5.50162 37.3873 6.42349 37.5921 7.75509"
                                            stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M37.5921 7.75502C37.3872 6.42342 38.3091 5.09182 39.6407 4.88696"
                                            stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M21.3057 3.45306C22.6373 3.2482 23.9689 4.17007 24.1737 5.50167"
                                            stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M24.1737 5.5016C23.9689 4.17 24.8907 2.83841 26.2223 2.63354"
                                            stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M49.8838 41.0452V50.5712" stroke="currentColor" stroke-width="2"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M47.1182 39.6111V35.1042C47.1182 33.6701 46.9133 32.2361 46.4011 30.9045C46.1963 30.3924 45.9914 29.8802 45.7866 29.3681C45.3768 28.5486 44.9671 27.8316 44.455 27.217C43.4307 25.783 42.0991 24.6563 40.5626 23.7344L44.6598 18.9201H39.5383L46.2987 9.90625L53.0591 18.9201H47.9376L56.3369 28.8559H48.9619L57.9758 40.6354H47.0157C47.1182 40.3281 47.1182 40.0208 47.1182 39.6111Z"
                                            stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M15.4671 6.11624C15.4671 8.98429 13.1112 11.2378 10.3456 11.2378C7.47753 11.2378 5.22406 8.88186 5.22406 6.11624C5.22406 3.9652 6.55566 2.12145 8.39941 1.302C8.09212 1.91659 7.88725 2.6336 7.88725 3.35061C7.88725 5.60409 9.731 7.44784 11.9845 7.44784C13.5209 7.44784 14.8525 6.62839 15.5695 5.39922C15.3647 5.70652 15.4671 5.91138 15.4671 6.11624Z"
                                            stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M20.3838 32.0311V34.1821C20.3838 35.5137 19.257 36.6405 17.9255 36.6405H8.60427C7.27267 36.6405 6.14594 35.5137 6.14594 34.1821V32.0311C6.14594 30.6995 7.27267 29.5728 8.60427 29.5728H17.9255C19.257 29.5728 20.3838 30.6995 20.3838 32.0311Z"
                                            stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M37.6945 31.3142V41.4548C37.6945 42.4791 36.8751 43.2986 35.8508 43.2986H30.8317C29.8074 43.2986 28.9879 42.4791 28.9879 41.4548V31.3142C28.9879 30.2899 29.8074 29.4704 30.8317 29.4704H35.8508C36.7727 29.368 37.6945 30.2899 37.6945 31.3142Z"
                                            stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M46.4011 30.9045C46.1963 30.3924 45.9914 29.8802 45.7865 29.3681C45.3768 28.5486 44.9671 27.8316 44.455 27.217C43.4306 25.783 42.0991 24.6563 40.5626 23.7344C38.6164 22.5052 36.2605 21.8906 33.8022 21.8906H5.63378C3.38031 21.8906 1.53656 23.7344 1.53656 25.9878V43.7083C1.53656 45.9618 3.38031 47.8056 5.63378 47.8056H8.29698V47.6007C8.39941 44.8351 10.7553 42.5816 13.5209 42.684C16.2866 42.7865 18.4376 45.0399 18.4376 47.8056H38.8213C43.0209 47.8056 46.5036 44.6302 47.0157 40.533C47.0157 40.2257 47.1181 39.9184 47.1181 39.6111V35.1042C47.1181 33.6701 46.9133 32.2361 46.4011 30.9045ZM20.3838 34.1823C20.3838 35.5139 19.257 36.6406 17.9254 36.6406H8.60427C7.27267 36.6406 6.14593 35.5139 6.14593 34.1823V32.0313C6.14593 30.6997 7.27267 29.5729 8.60427 29.5729H17.9254C19.257 29.5729 20.3838 30.6997 20.3838 32.0313V34.1823ZM37.6945 41.3524C37.6945 42.3767 36.8751 43.1962 35.8508 43.1962H30.8317C29.8074 43.1962 28.9879 42.3767 28.9879 41.3524V31.2118C28.9879 30.1875 29.8074 29.3681 30.8317 29.3681H35.8508C36.8751 29.3681 37.6945 30.1875 37.6945 31.2118V41.3524Z"
                                            stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M35.2362 34.0798V38.5868" stroke="currentColor" stroke-width="2"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M20.3838 32.0311V34.1821C20.3838 35.5137 19.257 36.6405 17.9255 36.6405H8.60427C7.27267 36.6405 6.14594 35.5137 6.14594 34.1821V32.0311C6.14594 30.6995 7.27267 29.5728 8.60427 29.5728H17.9255C19.257 29.5728 20.3838 30.6995 20.3838 32.0311Z"
                                            stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.2137 29.5728V36.6405" stroke="currentColor" stroke-width="2"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M18.54 47.9078V48.1127C18.4376 50.8783 16.0817 53.1318 13.3161 53.0294C10.5505 52.9269 8.39941 50.6735 8.39941 47.9078V47.703C8.50184 44.9374 10.8577 42.6839 13.6234 42.7863C16.389 42.8887 18.54 45.1422 18.54 47.9078Z"
                                            stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M15.4671 47.908C15.4671 49.1371 14.4428 50.059 13.3161 49.9566C12.1893 49.9566 11.3699 49.0347 11.2675 47.908V47.8055C11.2675 46.6788 12.2918 45.7569 13.4185 45.8594C14.6477 45.8594 15.5695 46.7812 15.4671 47.908Z"
                                            stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>

                                <span>We’re Driven by Heart, Not Just Law</span>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content mt-44" id="myTabContents">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">
                            <div class="flex tabs-activities-content">
                                <div class="activities-image">
                                    <img src="{{ asset('home_assets/assets/images/page/1.jpg') }}" alt="Image">
                                </div>
                                <div class="relative activities-content">
                                    <span class="text-white sub-title">Take the first step</span>
                                    <h3 class="text-white title-activitis mb-60">Ready to begin your journey to the United
                                        States?</h3>
                                    <div class="flex-three mb-30">
                                        <div class="text-white flex-three icon-list-wrap">
                                            <div class="icon">
                                                <i class="icon-Page-1"></i>
                                            </div>
                                            <span class="icon-lists">Contact Elevate Dreams today for personalized
                                                guidance. We are here to help you make your American dream a reality.</span>
                                        </div>

                                    </div>
                                    <div class="flex-three btn-wrap-activitis">
                                        <a href="#" class="icon-activitis flex-five">
                                            <i class="icon-Vector-21"></i>
                                        </a>
                                        <a href="#" class="text-white get-start">Get Started Today</a>
                                    </div>
                                    <img src="{{ asset('home_assets/assets/images/page/mask-tap.png') }}" alt="image"
                                        class="mask-tab">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                            tabindex="0">
                            <div class="flex tabs-activities-content">
                                <div class="activities-image">
                                    <img src="{{ asset('home_assets/assets/images/page/1.jpeg') }}" alt="Image">
                                </div>
                                <div class="relative activities-content">
                                    <span class="text-white sub-title">Welcome to our Print</span>
                                    <h3 class="text-white title-activitis mb-60">Real adventure & enjoy your
                                        dream tours</h3>
                                    <div class="flex-three mb-30">
                                        <div class="text-white flex-three icon-list-wrap">
                                            <div class="icon">
                                                <i class="icon-Page-1"></i>
                                            </div>
                                            <span class="icon-lists">Real adventure Feel</span>
                                        </div>
                                        <div class="text-white flex-three icon-list-wrap">
                                            <div class="icon">
                                                <i class="icon-rubber-ring-1"></i>
                                            </div>
                                            <span class="icon-lists">Comfort & Secure trip</span>
                                        </div>
                                    </div>
                                    <div class="flex-three btn-wrap-activitis">
                                        <a href="#" class="icon-activitis flex-five">
                                            <i class="icon-Vector-21"></i>
                                        </a>
                                        <a href="#" class="text-white get-start">Get Started Today</a>
                                    </div>
                                    <img src="{{ asset('home_assets/assets/images/page/mask-tap.png') }}" alt="image"
                                        class="mask-tab">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                            tabindex="0">
                            <div class="flex tabs-activities-content">
                                <div class="activities-image">
                                    <img src="{{ asset('home_assets/assets/images/page/1.jpeg') }}" alt="Image">
                                </div>
                                <div class="relative activities-content">
                                    <span class="text-white sub-title">Welcome to our Print</span>
                                    <h3 class="text-white title-activitis mb-60">Real adventure & enjoy your
                                        dream tours</h3>
                                    <div class="flex-three mb-30">
                                        <div class="text-white flex-three icon-list-wrap">
                                            <div class="icon">
                                                <i class="icon-Page-1"></i>
                                            </div>
                                            <span class="icon-lists">Real adventure Feel</span>
                                        </div>
                                        <div class="text-white flex-three icon-list-wrap">
                                            <div class="icon">
                                                <i class="icon-rubber-ring-1"></i>
                                            </div>
                                            <span class="icon-lists">Comfort & Secure trip</span>
                                        </div>
                                    </div>
                                    <div class="flex-three btn-wrap-activitis">
                                        <a href="#" class="icon-activitis flex-five">
                                            <i class="icon-Vector-21"></i>
                                        </a>
                                        <a href="#" class="text-white get-start">Get Started Today</a>
                                    </div>
                                    <img src="{{ asset('home_assets/assets/images/page/mask-tap.png') }}" alt="image"
                                        class="mask-tab">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="ab-tab-pane" role="tabpanel" aria-labelledby="ab-tab"
                            tabindex="0">
                            <div class="flex tabs-activities-content">
                                <div class="activities-image">
                                    <img src="{{ asset('home_assets/assets/images/page/1.jpeg') }}" alt="Image">
                                </div>
                                <div class="relative activities-content">
                                    <span class="text-white sub-title">Welcome to our Print</span>
                                    <h3 class="text-white title-activitis mb-60">Real adventure & enjoy your
                                        dream tours</h3>
                                    <div class="flex-three mb-30">
                                        <div class="text-white flex-three icon-list-wrap">
                                            <div class="icon">
                                                <i class="icon-Page-1"></i>
                                            </div>
                                            <span class="icon-lists">Real adventure Feel</span>
                                        </div>
                                        <div class="text-white flex-three icon-list-wrap">
                                            <div class="icon">
                                                <i class="icon-rubber-ring-1"></i>
                                            </div>
                                            <span class="icon-lists">Comfort & Secure trip</span>
                                        </div>
                                    </div>
                                    <div class="flex-three btn-wrap-activitis">
                                        <a href="#" class="icon-activitis flex-five">
                                            <i class="icon-Vector-21"></i>
                                        </a>
                                        <a href="#" class="text-white get-start">Get Started Today</a>
                                    </div>
                                    <img src="{{ asset('home_assets/assets/images/page/mask-tap.png') }}" alt="image"
                                        class="mask-tab">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="cd-tab-pane" role="tabpanel" aria-labelledby="cd-tab"
                            tabindex="0">
                            <div class="flex tabs-activities-content">
                                <div class="activities-image">
                                    <img src="{{ asset('home_assets/assets/images/page/1.jpeg') }}" alt="Image">
                                </div>
                                <div class="relative activities-content">
                                    <span class="text-white sub-title">Welcome to our Print</span>
                                    <h3 class="text-white title-activitis mb-60">Real adventure & enjoy your
                                        dream tours</h3>
                                    <div class="flex-three mb-30">
                                        <div class="text-white flex-three icon-list-wrap">
                                            <div class="icon">
                                                <i class="icon-Page-1"></i>
                                            </div>
                                            <span class="icon-lists">Real adventure Feel</span>
                                        </div>
                                        <div class="text-white flex-three icon-list-wrap">
                                            <div class="icon">
                                                <i class="icon-rubber-ring-1"></i>
                                            </div>
                                            <span class="icon-lists">Comfort & Secure trip</span>
                                        </div>
                                    </div>
                                    <div class="flex-three btn-wrap-activitis">
                                        <a href="#" class="icon-activitis flex-five">
                                            <i class="icon-Vector-21"></i>
                                        </a>
                                        <a href="#" class="text-white get-start">Get Started Today</a>
                                    </div>
                                    <img src="{{ asset('home_assets/assets/images/page/mask-tap.png') }}" alt="image"
                                        class="mask-tab">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Widget activities -->


{{-- Widget Offer Package
    <!-- Widget Offer Package -->
    <section class="relative offer-package pd-main bg-1">
        <img src="{{ asset('home_assets/assets/images/page/feature.jpg') }}" alt="image" class="feature-ofer">
        <div class="tf-container">
            <div class="relative row align-center z-index3">
                <div class="col-lg-5">
                    <div class="content">
                        <div class="mb-50">
                            <span class="sub-title-heading text-main mb-15 fadeInUp wow">Explore the
                                world</span>
                            <h2 class="mb-32 title-heading fadeInUp wow">Amazing Featured Tour<span
                                    class="text-gray font-yes "> Package</span> the world</h2>
                            <p class="des-heading fadeInUp wow">Welcome to our Print 128 website! We are a
                                professional
                                company that offers a wide range of printing</p>
                        </div>
                        <div class="inner-content flex-three">
                            <div class="offer fadeInUp wow">
                                <span class="number">25 <span>% off</span></span>

                            </div>
                            <p class="font-italic fadeInUp wow">Discover Great <span class="text-main">Discount</span>
                                Deals Around the World</p>

                        </div>
                        <div class="count-dow-wrap flex-three mb-50">
                            <div class="title-counters fadeInUp wow">
                                <span>Hurry Up!</span>
                                <p>Offer Ends in:</p>
                            </div>
                            <div class="relative count-down fadeInUp wow">
                                <div class="featured-countdown">
                                    <div class="js-countdown" data-timer="21000000"
                                        data-labels="days,hours,minutes,seconds"></div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wap fadeInUp wow">
                            <a href="#" class="btn-main">
                                <p class="btn-main-text">Explore More</p>
                                <p class="iconer">
                                    <i class="icon-arrow-right"></i>
                                </p>
                            </a>

                        </div>
                    </div>

                </div>
                <div class="col-lg-7">
                    <div class="relative on-week-swipper-wrap">
                        <div class="relative overflow-hidden swiper offer-package-swipper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tour-listing">
                                        <a href="tour-single.html" class="tour-listing-image">
                                            <div class="badge-top flex-two">
                                                <span class="feature">Featured</span>
                                                <div class="badge-media flex-five">
                                                    <span class="media"><i class="icon-Group-1000002909"></i>5</span>
                                                    <span class="media"><i class="icon-Group-1000002910"></i>2</span>
                                                </div>
                                            </div>
                                            <img src="{{ asset('home_assets/assets/images/travel-list/15.jpg') }}"
                                                alt="Image Listing">

                                        </a>
                                        <div class="tour-listing-content">
                                            <span class="tag-listing">Bestseller</span>
                                            <span class="map"><i class="icon-Vector4"></i>United States
                                                USA</span>
                                            <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                    6 nights From
                                                    Moscow</a>
                                            </h3>
                                            <div class="review">
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <span>(1 Review)</span>
                                            </div>
                                            <div class="icon-box flex-three">
                                                <div class="icons flex-three">
                                                    <i class="icon-time-left"></i>
                                                    <span>5 days</span>
                                                </div>
                                                <div class="icons flex-three">
                                                    <svg width="21" height="16" viewBox="0 0 21 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                            stroke="currentColor" stroke-width="1.7"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                            stroke="currentColor" stroke-width="1.7"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M17.1035 15.1797V9.02734" stroke="currentColor"
                                                            stroke-width="1.7" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M20.1797 12.1035H14.0273" stroke="currentColor"
                                                            stroke-width="1.7" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <span>12 Person</span>
                                                </div>
                                            </div>
                                            <div class="flex-two">
                                                <div class="price-box flex-three">
                                                    <p>From <span class="price-sale">$169.00</span></p>
                                                    <span class="price">$199.00</span>
                                                </div>
                                                <div class="icon-bookmark">
                                                    <i class="icon-Vector-151"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-listing">
                                        <a href="tour-single.html" class="tour-listing-image">
                                            <div class="badge-top flex-two">
                                                <span class="feature">Featured</span>
                                                <div class="badge-media flex-five">
                                                    <span class="media"><i class="icon-Group-1000002909"></i>5</span>
                                                    <span class="media"><i class="icon-Group-1000002910"></i>2</span>
                                                </div>
                                            </div>
                                            <img src="{{ asset('home_assets/assets/images/travel-list/16.jpg') }}"
                                                alt="Image Listing">

                                        </a>
                                        <div class="tour-listing-content">
                                            <span class="tag-listing">Bestseller</span>
                                            <span class="map"><i class="icon-Vector4"></i>United States
                                                USA</span>
                                            <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                    6 nights From
                                                    Moscow</a>
                                            </h3>
                                            <div class="review">
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <span>(1 Review)</span>
                                            </div>
                                            <div class="icon-box flex-three">
                                                <div class="icons flex-three">
                                                    <i class="icon-time-left"></i>
                                                    <span>5 days</span>
                                                </div>
                                                <div class="icons flex-three">
                                                    <svg width="21" height="16" viewBox="0 0 21 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                            stroke="currentColor" stroke-width="1.7"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                            stroke="currentColor" stroke-width="1.7"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M17.1035 15.1797V9.02734" stroke="currentColor"
                                                            stroke-width="1.7" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M20.1797 12.1035H14.0273" stroke="currentColor"
                                                            stroke-width="1.7" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <span>12 Person</span>
                                                </div>
                                            </div>
                                            <div class="flex-two">
                                                <div class="price-box flex-three">
                                                    <p>From <span class="price-sale">$169.00</span></p>
                                                    <span class="price">$199.00</span>
                                                </div>
                                                <div class="icon-bookmark">
                                                    <i class="icon-Vector-151"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-listing">
                                        <a href="tour-single.html" class="tour-listing-image">
                                            <div class="badge-top flex-two">
                                                <span class="feature">Featured</span>
                                                <div class="badge-media flex-five">
                                                    <span class="media"><i class="icon-Group-1000002909"></i>5</span>
                                                    <span class="media"><i class="icon-Group-1000002910"></i>2</span>
                                                </div>
                                            </div>
                                            <img src="{{ asset('home_assets/assets/images/travel-list/17.jpg') }}"
                                                alt="Image Listing">

                                        </a>
                                        <div class="tour-listing-content">
                                            <span class="tag-listing">Bestseller</span>
                                            <span class="map"><i class="icon-Vector4"></i>United States
                                                USA</span>
                                            <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                    6 nights From
                                                    Moscow</a>
                                            </h3>
                                            <div class="review">
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <span>(1 Review)</span>
                                            </div>
                                            <div class="icon-box flex-three">
                                                <div class="icons flex-three">
                                                    <i class="icon-time-left"></i>
                                                    <span>5 days</span>
                                                </div>
                                                <div class="icons flex-three">
                                                    <svg width="21" height="16" viewBox="0 0 21 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                            stroke="currentColor" stroke-width="1.7"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                            stroke="currentColor" stroke-width="1.7"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M17.1035 15.1797V9.02734" stroke="currentColor"
                                                            stroke-width="1.7" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M20.1797 12.1035H14.0273" stroke="currentColor"
                                                            stroke-width="1.7" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <span>12 Person</span>
                                                </div>
                                            </div>
                                            <div class="flex-two">
                                                <div class="price-box flex-three">
                                                    <p>From <span class="price-sale">$169.00</span></p>
                                                    <span class="price">$199.00</span>
                                                </div>
                                                <div class="icon-bookmark">
                                                    <i class="icon-Vector-151"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-listing">
                                        <a href="tour-single.html" class="tour-listing-image">
                                            <div class="badge-top flex-two">
                                                <span class="feature">Featured</span>
                                                <div class="badge-media flex-five">
                                                    <span class="media"><i class="icon-Group-1000002909"></i>5</span>
                                                    <span class="media"><i class="icon-Group-1000002910"></i>2</span>
                                                </div>
                                            </div>
                                            <img src="{{ asset('home_assets/assets/images/travel-list/18.jpg') }}"
                                                alt="Image Listing">

                                        </a>
                                        <div class="tour-listing-content">
                                            <span class="tag-listing">Bestseller</span>
                                            <span class="map"><i class="icon-Vector4"></i>United States
                                                USA</span>
                                            <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                    6 nights From
                                                    Moscow</a>
                                            </h3>
                                            <div class="review">
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <span>(1 Review)</span>
                                            </div>
                                            <div class="icon-box flex-three">
                                                <div class="icons flex-three">
                                                    <i class="icon-time-left"></i>
                                                    <span>5 days</span>
                                                </div>
                                                <div class="icons flex-three">
                                                    <svg width="21" height="16" viewBox="0 0 21 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                            stroke="currentColor" stroke-width="1.7"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                            stroke="currentColor" stroke-width="1.7"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M17.1035 15.1797V9.02734" stroke="currentColor"
                                                            stroke-width="1.7" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M20.1797 12.1035H14.0273" stroke="currentColor"
                                                            stroke-width="1.7" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <span>12 Person</span>
                                                </div>
                                            </div>
                                            <div class="flex-two">
                                                <div class="price-box flex-three">
                                                    <p>From <span class="price-sale">$169.00</span></p>
                                                    <span class="price">$199.00</span>
                                                </div>
                                                <div class="icon-bookmark">
                                                    <i class="icon-Vector-151"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-listing">
                                        <a href="tour-single.html" class="tour-listing-image">
                                            <div class="badge-top flex-two">
                                                <span class="feature">Featured</span>
                                                <div class="badge-media flex-five">
                                                    <span class="media"><i class="icon-Group-1000002909"></i>5</span>
                                                    <span class="media"><i class="icon-Group-1000002910"></i>2</span>
                                                </div>
                                            </div>
                                            <img src="{{ asset('home_assets/assets/images/travel-list/15.jpg') }}"
                                                alt="Image Listing">

                                        </a>
                                        <div class="tour-listing-content">
                                            <span class="tag-listing">Bestseller</span>
                                            <span class="map"><i class="icon-Vector4"></i>United States
                                                USA</span>
                                            <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                    6 nights From
                                                    Moscow</a>
                                            </h3>
                                            <div class="review">
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <span>(1 Review)</span>
                                            </div>
                                            <div class="icon-box flex-three">
                                                <div class="icons flex-three">
                                                    <i class="icon-time-left"></i>
                                                    <span>5 days</span>
                                                </div>
                                                <div class="icons flex-three">
                                                    <svg width="21" height="16" viewBox="0 0 21 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                            stroke="currentColor" stroke-width="1.7"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                            stroke="currentColor" stroke-width="1.7"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M17.1035 15.1797V9.02734" stroke="currentColor"
                                                            stroke-width="1.7" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M20.1797 12.1035H14.0273" stroke="currentColor"
                                                            stroke-width="1.7" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <span>12 Person</span>
                                                </div>
                                            </div>
                                            <div class="flex-two">
                                                <div class="price-box flex-three">
                                                    <p>From <span class="price-sale">$169.00</span></p>
                                                    <span class="price">$199.00</span>
                                                </div>
                                                <div class="icon-bookmark">
                                                    <i class="icon-Vector-151"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-listing">
                                        <a href="tour-single.html" class="tour-listing-image">
                                            <div class="badge-top flex-two">
                                                <span class="feature">Featured</span>
                                                <div class="badge-media flex-five">
                                                    <span class="media"><i class="icon-Group-1000002909"></i>5</span>
                                                    <span class="media"><i class="icon-Group-1000002910"></i>2</span>
                                                </div>
                                            </div>
                                            <img src="{{ asset('home_assets/assets/images/travel-list/16.jpg') }}"
                                                alt="Image Listing">

                                        </a>
                                        <div class="tour-listing-content">
                                            <span class="tag-listing">Bestseller</span>
                                            <span class="map"><i class="icon-Vector4"></i>United States
                                                USA</span>
                                            <h3 class="title-tour-list"><a href="tour-single.html">Days and
                                                    6 nights From
                                                    Moscow</a>
                                            </h3>
                                            <div class="review">
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <span>(1 Review)</span>
                                            </div>
                                            <div class="icon-box flex-three">
                                                <div class="icons flex-three">
                                                    <i class="icon-time-left"></i>
                                                    <span>5 days</span>
                                                </div>
                                                <div class="icons flex-three">
                                                    <svg width="21" height="16" viewBox="0 0 21 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z"
                                                            stroke="currentColor" stroke-width="1.7"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922"
                                                            stroke="currentColor" stroke-width="1.7"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M17.1035 15.1797V9.02734" stroke="currentColor"
                                                            stroke-width="1.7" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M20.1797 12.1035H14.0273" stroke="currentColor"
                                                            stroke-width="1.7" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <span>12 Person</span>
                                                </div>
                                            </div>
                                            <div class="flex-two">
                                                <div class="price-box flex-three">
                                                    <p>From <span class="price-sale">$169.00</span></p>
                                                    <span class="price">$199.00</span>
                                                </div>
                                                <div class="icon-bookmark">
                                                    <i class="icon-Vector-151"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- Widget Offer Package -->


    <!-- Widget Counter -->
    <section class="relative widget-counter">
        <img src="{{ asset('home_assets/assets/images/page/couter-top.png') }}" alt="image" class="counter-top">
        <img src="{{ asset('home_assets/assets/images/page/counter-bottom.png') }}" alt="image"
            class="counter-bottom">
        <div class="tf-container">
            <div class="row mb-50">
                <div class="col-lg-9 flex-three cta-wrap">
                    <div class="image fadeInLeft wow">
                        <img src="{{ asset('home_assets/assets/images/page/ready.png') }}" alt="Image">
                    </div>
                    <div class="content">
                        <h2 class="text-white title-call mb-18 fadeInUp wow">Ready to adventure and enjoy
                            natural</h2>
                        <p class="text-white des fadeInUp wow">Lorem ipsum dolor sit amet, consectetur
                            notted adipisicin
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="callt-to-action-button text-end fadeInRight wow">
                        <a href="#" class="get-call">Let,s get started</a>
                    </div>
                </div>
            </div>
            <div class="relative row mb--20em z-index3">
                <div class="col-6 col-lg-3 wow fadeInUp animated " data-wow-delay="0.1s">
                    <div class="tf-counter center tf-countto">
                        <div class="mb-32 icon">
                            <svg width="85" height="78" viewBox="0 0 85 78" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_73_163)">
                                    <path
                                        d="M0.0001297 62.7258V40.8836H13.8123L23.6738 56.5469V30.7932C21.8717 30.3047 20.5539 28.7854 20.5539 26.9907C20.5539 25.1959 21.8719 23.6766 23.6738 23.1882V19.6274H26.164V23.0228H34.0214L42.2742 20.2923C40.5417 19.4812 39.2295 18.1339 38.5631 16.4693L37.0245 12.6269C36.3224 10.8736 36.4162 8.97097 37.2889 7.26997C38.1617 5.56883 39.7044 4.28055 41.6335 3.64238C45.629 2.32045 50.0632 4.19982 51.5178 7.83194L52.8295 11.1081H56.9344V13.3717H53.4829C53.6137 14.5576 53.4036 15.7347 52.9075 16.8001C53.9147 16.5731 54.9711 16.6649 55.929 17.0709C56.0077 17.1043 56.0845 17.1399 56.1604 17.1769L65.7933 16.4479L69.3985 24.9877L67.0736 25.7987L64.1378 18.8444L58.2401 19.2907C58.256 19.3271 58.2726 19.363 58.2874 19.3998L66.2437 38.2462L70.9088 34.8833L67.9658 27.9121L70.2907 27.1011L73.8887 35.6241L67.2858 40.3839C68.9118 43.0765 71.0927 47.0103 67.9751 52.0045L75.2358 68.2575V71.7799H85V74.0435H0.0001297V64.9892H2.49036V71.7799H55.9091L43.2514 61.9348H18.818V59.6712H22.7718L12.3683 43.1471H2.49036V62.7258H0.0001297ZM42.4663 52.8814H37.4858V57.4085H36.2407C34.5033 57.4085 34.208 57.9361 34.082 58.1612C33.8733 58.5338 33.7961 59.0659 33.7674 59.6712H42.4661V52.8814H42.4663ZM31.8627 57.1345C32.4504 56.0851 33.5014 55.4469 34.9957 55.2293V44.618C34.9957 41.4976 37.7885 38.9591 41.2213 38.9591H49.0128L43.2766 30.034L36.6066 30.9582H26.1642V59.671H31.2763C31.3129 58.7726 31.4375 57.8938 31.8627 57.1345ZM23.0439 26.9907C23.0439 27.9303 23.885 28.6948 24.9188 28.6948H28.3347V25.2863H24.9189C23.885 25.2863 23.0439 26.051 23.0439 26.9907ZM49.1776 8.60609C48.4067 6.68069 46.3994 5.48281 44.2657 5.48281C43.674 5.48281 43.0724 5.57501 42.485 5.76923C40.0504 6.57476 38.6741 8.86534 39.1402 11.1079H50.1792L49.1776 8.60609ZM39.9726 13.3717L40.9031 15.6951C41.3776 16.8803 42.3376 17.8292 43.6063 18.3669C44.874 18.9043 46.29 18.963 47.593 18.5326L47.5977 18.5311C49.9664 17.7462 51.3333 15.5556 50.9743 13.3717H39.9726ZM55.9589 20.2021L55.9514 20.1836C55.5601 19.2061 54.367 18.7004 53.2915 19.0562L34.4603 25.2863H30.8249V28.6948H36.4177L48.098 27.0762L48.4734 29.3138L45.9247 29.6671L51.8968 38.9591H63.8777L55.9589 20.2021ZM65.5325 51.3102C68.465 47.0397 66.6045 43.949 64.9514 41.2228H41.2213C39.1617 41.2228 37.486 42.7459 37.486 44.6181V50.618H42.4664V45.7499H51.1799C51.1955 45.7499 51.2112 45.7499 51.2269 45.7499C53.9151 45.7499 57.1612 46.1462 58.5555 49.159L64.8782 62.8197H70.1189L65.1962 51.8L65.5325 51.3102ZM72.7456 68.6997L71.1301 65.0834H65.9258L68.0211 69.6105H66.1464C64.4214 69.6105 64.1195 70.1567 63.9905 70.39C63.796 70.742 63.715 71.2352 63.6809 71.7801H72.7456V68.6997ZM61.1867 71.7799C61.2292 70.9343 61.3602 70.1061 61.7654 69.3733C62.2821 68.4389 63.1513 67.8246 64.3596 67.5368L56.2599 50.0368C55.5865 48.5821 54.173 48.0135 51.2211 48.0135H51.1819H44.9563V60.2821L59.7389 71.7801L61.1867 71.7799Z"
                                        fill="currentColor" />
                                    <path d="M7.47058 45.4106H4.98035V47.6742H7.47058V45.4106Z" fill="currentColor" />
                                    <path d="M7.47058 49.938H4.98035V52.2016H7.47058V49.938Z" fill="currentColor" />
                                    <path
                                        d="M54.4991 23.7441L53.6076 21.63L51.2819 22.4403L52.1734 24.5544L54.4991 23.7441Z"
                                        fill="currentColor" />
                                    <path
                                        d="M56.2822 27.9688L55.3907 25.8546L53.0648 26.6649L53.9563 28.7791L56.2822 27.9688Z"
                                        fill="currentColor" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_73_163">
                                        <rect width="85" height="77.2632" fill="white"
                                            transform="matrix(-1 0 0 1 85 0)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="number-counter " data-to="5489" data-speed="2000" data-waypoint-active="yes">
                            5489</div>
                        <span class="line"></span>
                        <p class="title-counter">Happy <br>Traveller</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 wow fadeInUp animated " data-wow-delay="0.2s">
                    <div class="tf-counter center tf-countto">
                        <div class="mb-32 icon">
                            <svg width="69" height="68" viewBox="0 0 69 68" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_73_177)">
                                    <mask id="mask0_73_177" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0"
                                        y="0" width="69" height="68">
                                        <path d="M0.947388 0.30294H68.0527V67.4082H0.947388V0.30294Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask0_73_177)">
                                        <path
                                            d="M26.505 2.26924C13.4757 2.26924 2.91333 12.8315 2.91333 25.8609C2.91333 32.2223 5.44315 37.9842 9.53644 42.2273L2.91333 49.4526H26.505C39.5343 49.4526 50.0967 38.8902 50.0967 25.8609C50.0967 12.8315 39.5343 2.26924 26.505 2.26924Z"
                                            stroke="currentColor" stroke-width="3" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M29.5166 49.2619C30.5896 58.3735 38.3375 65.4424 47.7375 65.4424H66.0866L60.9352 59.8227C64.1191 56.5225 66.0866 52.041 66.0866 47.0933C66.0866 37.6932 59.0178 29.9454 49.9061 28.8724"
                                            stroke="currentColor" stroke-width="3" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M33.0583 16.3586C30.0046 16.3586 27.2325 18.4469 26.5051 21.2735V21.2734C25.7776 18.4469 23.0054 16.3586 19.9518 16.3586C16.3324 16.3586 13.3986 19.2924 13.3986 22.9118C13.3986 31.1034 26.5051 39.2949 26.5051 39.2949C26.5051 39.2949 39.6115 31.1034 39.6115 22.9118C39.6115 19.2924 36.6777 16.3586 33.0583 16.3586Z"
                                            stroke="currentColor" stroke-width="3" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                </g>
                                <defs>
                                    <clipPath id="clip0_73_177">
                                        <rect width="67.1053" height="67.1053" fill="white"
                                            transform="translate(0.947388 0.302734)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="number-counter percen" data-to="99.9" data-speed="2000" data-waypoint-active="yes">
                            99.9%</div>
                        <span class="line"></span>
                        <p class="title-counter">Total Postive<br>Reviews</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 wow fadeInUp animated " data-wow-delay="0.3s">
                    <div class="tf-counter center tf-countto">
                        <div class="mb-32 icon">
                            <svg width="62" height="62" viewBox="0 0 62 62" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.5935 13.1632C18.5935 9.99769 16.0182 7.42236 12.8527 7.42236C9.68721 7.42236 7.11176 9.99769 7.11176 13.1632C7.11176 16.3287 9.68709 18.904 12.8526 18.904C16.0181 18.904 18.5935 16.3287 18.5935 13.1632ZM12.8526 15.2753C11.6879 15.2753 10.7405 14.3279 10.7405 13.1632C10.7405 11.9985 11.6879 11.0511 12.8526 11.0511C14.0172 11.0511 14.9647 11.9985 14.9647 13.1632C14.9647 14.3279 14.0172 15.2753 12.8526 15.2753Z"
                                    fill="currentColor" />
                                <path
                                    d="M61.9985 30.1427C61.9699 29.4278 61.5237 28.7965 60.8594 28.5308L41.5731 20.8162C41.014 20.5927 40.3806 20.6609 39.882 20.9983C39.3834 21.3358 39.0848 21.8986 39.0848 22.5008V49.1118C36.8673 49.7672 35.148 51.5914 34.6425 53.8686H8.97854C7.04404 53.8686 5.4701 52.2947 5.4701 50.3602C5.4701 48.4257 7.04404 46.8518 8.97854 46.8518H25.3964C29.1293 46.8518 32.1663 43.8148 32.1663 40.0819C32.1663 36.349 29.1293 33.312 25.3964 33.312H16.0524L23.8586 20.2611C25.1816 18.0492 25.881 15.5177 25.881 12.9404C25.881 5.80508 20.0759 0 12.9405 0C5.80521 0 0 5.80496 0 12.9403V12.9866C0 15.5292 0.681958 18.0315 1.97207 20.2225L11.2895 36.0468C11.5802 36.5141 12.1159 36.9451 12.8468 36.9406H25.3966C27.1286 36.9406 28.5377 38.3497 28.5377 40.0818C28.5377 41.8138 27.1286 43.2229 25.3966 43.2229H8.97854C5.04308 43.2229 1.84124 46.4247 1.84124 50.3602C1.84124 54.2956 5.04308 57.4975 8.97854 57.4975H34.8937C35.8039 59.9304 38.1517 61.6673 40.8982 61.6673C44.4322 61.6673 47.3073 58.7923 47.3073 55.2582C47.3073 52.3548 45.3661 49.8976 42.7136 49.1127V40.9138L60.9922 31.841C61.6331 31.5227 62.0273 30.8576 61.9985 30.1427ZM5.09901 18.3813C4.13715 16.7476 3.62874 14.8821 3.62874 12.9864V12.9402C3.62874 7.80579 7.80592 3.6285 12.9404 3.6285C18.0749 3.6285 22.2521 7.80579 22.2521 12.9402C22.2521 14.8617 21.7307 16.749 20.7444 18.3982L12.8653 31.5711L5.09901 18.3813ZM43.6784 55.2581C43.6784 56.7912 42.431 58.0383 40.8982 58.0383C39.3654 58.0383 38.118 56.7911 38.118 55.2581C38.118 53.7269 39.3624 52.481 40.8928 52.478C40.8951 52.478 40.8973 52.4784 40.8993 52.4784C40.9013 52.4784 40.9033 52.4782 40.9052 52.4782C42.435 52.4817 43.6784 53.7273 43.6784 55.2581ZM42.7136 36.8623V25.1808L55.7456 30.3936L42.7136 36.8623Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div class="number-counter plus" data-to="190" data-speed="2000" data-waypoint-active="yes">
                            190+</div>
                        <span class="line"></span>
                        <p class="title-counter">Tour<br>Completed</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 wow fadeInUp animated " data-wow-delay="0.4s">
                    <div class="tf-counter center tf-countto">
                        <div class="mb-32 icon">
                            <svg width="74" height="62" viewBox="0 0 74 62" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M73.9347 32.4115C73.888 32.373 73.8201 32.3607 73.7672 32.3785C73.7027 32.3984 73.6435 32.4156 73.5877 32.4319L73.5604 32.4399C73.4228 32.4802 73.3039 32.5147 73.1861 32.562C71.3254 33.3013 69.8604 34.5679 68.7075 36.4341C68.4228 36.8952 68.2023 37.3744 68.0266 37.8524C68.3147 36.2447 68.3814 35.6183 68.4324 33.8193C68.4348 33.7438 68.4348 33.6671 68.4348 33.5908C68.4348 33.3827 68.4348 33.1861 68.4803 33.0067C68.5348 32.7942 68.6444 32.5822 68.7505 32.377C68.7804 32.319 68.8103 32.2609 68.8349 32.2099C68.8435 32.1999 68.8711 32.183 68.8819 32.1814C69.414 32.1001 69.8846 31.8742 70.3208 31.4908C70.7604 31.1026 71.1219 30.6274 71.3955 30.078C72.3774 28.1089 72.8688 25.9325 72.8563 23.6099C72.8552 23.3858 72.8289 23.1677 72.8 22.9305C72.7868 22.8242 72.7734 22.7155 72.7623 22.6029C72.756 22.5412 72.718 22.4863 72.6629 22.4596C72.6085 22.4332 72.5429 22.4351 72.488 22.4683C72.4548 22.489 72.4264 22.5059 72.4006 22.5209C72.3507 22.5506 72.3127 22.5738 72.2767 22.5998C71.4391 23.2002 70.7003 23.9477 70.0806 24.8209C69.0694 26.2482 68.4812 27.8621 68.3228 29.6375C68.3071 29.4396 68.2911 29.2417 68.2751 29.0438L68.2696 28.972C68.2074 28.1961 68.1433 27.3937 68.091 26.6047C68.0778 26.4049 68.0394 26.2105 68.0023 26.0225C67.9307 25.661 67.863 25.3195 67.9713 24.9617C67.996 24.8808 68.0168 24.7994 68.0375 24.7182C68.0887 24.5169 68.336 24.207 68.7157 23.8681L68.7299 23.8553C68.87 23.7366 69.5893 23.0785 69.9973 21.7768C70.4115 20.4543 70.3802 19.0725 70.3574 18.0635L70.3568 18.0366C70.3264 16.6495 70.1765 15.6044 69.8708 14.6471C69.8313 14.5247 69.7844 14.4039 69.7347 14.2771C69.7089 14.211 69.6826 14.1428 69.6555 14.0714C69.6332 14.0109 69.5798 13.9669 69.5173 13.9566L69.4867 13.9538C69.4325 13.9538 69.3819 13.9781 69.3476 14.02L69.0506 14.3819C67.6269 16.1183 66.9274 18.1549 66.9712 20.4352C66.9788 20.8368 67.0089 21.2487 67.0621 21.674C66.7002 20.4252 66.2759 19.2096 65.7932 18.0401C65.7832 18.0145 65.7767 17.9828 65.776 17.9559L65.7726 17.796C65.7676 17.5653 65.7624 17.3266 65.7723 17.0917C65.7738 17.0528 65.799 16.9829 65.8515 16.914C65.926 16.8156 66.0088 16.7193 66.0944 16.6191C66.2404 16.4492 66.3912 16.2738 66.5107 16.0734C66.8954 15.4291 67.076 14.6679 67.079 13.6776C67.0842 12.5118 66.9044 11.2851 66.5127 9.81662C66.2987 9.01552 65.9756 7.97479 65.3739 7.03125C65.333 6.96781 65.2874 6.90809 65.2388 6.84484C65.2169 6.81683 65.1939 6.78697 65.1706 6.75488C65.1364 6.70907 65.0893 6.68236 65.0133 6.68236C64.9526 6.68681 64.8985 6.72131 64.8682 6.77491C64.113 8.13801 63.7368 9.59422 63.719 11.2268C63.7038 12.5881 63.9163 13.7594 64.1829 14.6851C63.5046 13.4459 62.7508 12.2486 61.9337 11.1129L61.915 11.0872C61.8965 11.0625 61.8887 11.0504 61.89 11.059C61.8386 10.6915 61.803 10.3975 61.7783 10.1416C61.7789 10.1377 61.7837 10.1162 61.8219 10.0524C61.8759 9.96036 61.935 9.87022 61.9979 9.77488C62.124 9.5831 62.2543 9.38463 62.3377 9.16243C62.5896 8.49173 62.6462 7.73107 62.5102 6.83779C62.2118 4.86075 61.3402 3.08051 59.8463 1.39504C59.6926 1.22199 59.5227 1.06896 59.3429 0.907225L59.2932 0.862153C59.2229 0.798533 59.1508 0.733429 59.0779 0.664616C59.0315 0.620471 58.9651 0.603964 58.9008 0.622883C58.8399 0.642173 58.793 0.692623 58.7785 0.755316L58.7459 0.898508C58.7236 0.993474 58.7064 1.06841 58.6936 1.14371C58.4925 2.34377 58.5072 3.62916 58.7387 5.07368C58.9683 6.50634 59.4259 7.74201 60.1279 8.81539C59.0751 7.57489 58.0511 6.53323 56.9808 5.61009C56.976 5.60379 56.969 5.58468 56.9684 5.57986C57.0521 4.85927 56.8744 4.18041 56.4248 3.50451C55.8344 2.61625 55.014 1.93924 53.9865 1.4926C53.3716 1.22588 52.7345 0.989764 52.1107 0.758469C51.8119 0.647552 51.5131 0.537005 51.2053 0.418483C50.8962 0.295509 50.7639 0.273622 50.6921 0.340024C50.5998 0.426087 50.622 0.499538 50.6623 0.633085L50.6752 0.676672C51.0523 1.94685 51.5528 2.95141 52.2055 3.74768C53.4037 5.21094 54.805 5.95435 56.4873 6.02001C56.5463 6.02353 56.593 6.03985 56.6121 6.05469C56.849 6.23201 57.0233 6.37391 57.1775 6.5145C57.6649 6.96002 58.1449 7.43467 58.6146 7.93454C57.916 7.50052 57.0623 7.30465 56.1007 7.35324C55.5745 7.37977 55.0522 7.45693 54.5472 7.53149L54.5279 7.53446C54.3786 7.55635 54.23 7.57805 54.0818 7.59901C53.7572 7.64297 53.43 7.70047 53.141 7.75092C53.024 7.77188 52.7445 7.83549 52.6801 7.97108C52.6579 8.01745 52.6597 8.06827 52.6849 8.11446C52.7072 8.15471 52.7317 8.19255 52.7584 8.22705C53.5925 9.30933 54.544 10.0221 55.6673 10.4059C57.0369 10.8763 58.2948 10.8375 59.4251 10.2842C59.598 10.1891 59.8065 10.1408 60.0446 10.1408C60.2244 10.1408 60.3592 10.1692 60.4039 10.1794C60.4709 10.1905 60.5617 10.228 60.5803 10.2521C61.2833 11.1764 61.9504 12.1635 62.5735 13.2005C62.0471 12.6886 61.3606 12.3434 60.4254 12.1186C59.6058 11.9233 58.7678 11.8814 57.9576 11.8406L57.6862 11.8269C57.4321 11.8139 57.178 11.7977 56.9163 11.7812L56.4775 11.7542C56.4207 11.7542 56.3667 11.7816 56.3337 11.8272C56.2972 11.8764 56.2884 11.9402 56.31 11.9975C56.3276 12.0454 56.3597 12.1298 56.3762 12.1579C57.2307 13.5873 58.2341 14.5759 59.4435 15.1805C60.6257 15.7711 61.6939 15.9273 62.7714 15.6697C62.896 15.6396 63.0405 15.6237 63.1898 15.6237C63.6481 15.6237 63.9677 15.7635 64.0349 15.893C64.6277 17.1158 65.1567 18.3866 65.6129 19.6827C65.1344 19.023 64.4652 18.4871 63.6179 18.0863C62.7762 17.689 61.8998 17.3258 61.0375 16.9684C60.6669 16.8152 60.2948 16.6614 59.9244 16.5041C59.8693 16.48 59.8042 16.485 59.7529 16.519C59.7024 16.5525 59.6724 16.6086 59.6724 16.6688C59.6724 16.7846 60.9021 20.1976 62.6881 21.5425C63.4167 22.0912 64.314 22.6556 65.4456 22.6821C65.7843 22.689 66.1345 22.7368 66.399 23.0375C66.4394 23.0854 66.493 23.1226 66.5515 23.1425C66.6418 23.1722 66.6667 23.2274 66.7112 23.4159C67.0777 24.9546 67.3446 26.5407 67.5089 28.1512C67.4592 27.9878 67.4015 27.8227 67.3353 27.6556C66.9356 26.642 66.2629 25.755 65.2182 24.8641C64.6798 24.403 64.1159 23.9566 63.5706 23.5246L63.5446 23.5042C63.2963 23.3074 63.0485 23.1113 62.8014 22.9129C62.7504 22.8719 62.7007 22.8296 62.643 22.7802L62.4889 22.6482C62.4349 22.6026 62.3546 22.5931 62.2915 22.6246C62.2268 22.6575 62.188 22.7253 62.193 22.7979C62.2007 22.9067 62.2068 23.0097 62.2125 23.1086L62.2155 23.1547C62.2277 23.3582 62.2392 23.5502 62.2598 23.7397C62.4531 25.5855 63.0019 27.1264 63.9377 28.4506C64.5169 29.2691 65.3479 30.2696 66.6437 30.7428C66.959 30.8585 67.1877 31.0338 67.4327 31.3484C67.6638 31.6429 67.7068 31.912 67.7016 32.2507C67.6796 33.6695 67.5785 35.0769 67.4002 36.4552C67.3585 36.0716 67.2702 35.6767 67.1346 35.2665C66.854 34.417 66.4166 33.591 65.7973 32.7415C65.2628 32.0059 64.7065 31.2677 64.1686 30.5534L64.1328 30.5057C63.9195 30.2229 63.7064 29.9396 63.4988 29.6625C63.4599 29.6056 63.4037 29.5852 63.3712 29.5739C63.3252 29.5514 63.2703 29.5492 63.2215 29.57C63.1737 29.5904 63.137 29.6306 63.1208 29.68L63.1145 29.6992C63.1056 29.7252 63.0986 29.7482 63.0949 29.7712C62.7239 31.9833 62.9515 33.9651 63.7904 35.8307C64.2001 36.7429 64.7497 37.7756 65.7187 38.5187C66.161 38.8579 66.5103 39.3339 66.7021 39.8586C66.7427 39.9715 66.7412 40.0205 66.7366 40.0394C66.3265 41.7381 65.7908 43.3764 65.1396 44.927C65.3073 44.1098 65.2958 43.2514 65.1044 42.362C64.8326 41.1015 64.3656 39.8799 63.949 38.8338L63.8242 38.5205C63.6289 38.0303 63.4322 37.5362 63.2291 37.0241C63.2034 36.9586 63.1412 36.9139 63.0583 36.9098C62.993 36.9098 62.9329 36.9471 62.9018 37.0076L62.8363 37.1307C62.8075 37.1847 62.7807 37.235 62.7577 37.2869C61.9197 39.1777 61.6366 41.116 61.9169 43.0479C62.1172 44.4294 62.4566 45.4186 63.0175 46.2555C63.3078 46.688 63.5836 47.1699 63.6337 47.7625C63.6455 47.9027 63.64 47.9994 63.5775 48.1093C62.8701 49.3482 62.0769 50.5173 61.2083 51.6034C61.2117 51.5975 61.2148 51.5916 61.2182 51.5856C61.843 50.4436 61.862 49.2089 61.7982 48.1514C61.7431 47.245 61.6392 46.3399 61.5392 45.4648L61.5335 45.4141C61.4932 45.0636 61.4532 44.7132 61.4166 44.3621C61.3955 44.163 61.3719 43.964 61.3476 43.762L61.3155 43.4886C61.3085 43.4282 61.2716 43.3759 61.2185 43.3495C61.1199 43.298 60.9602 43.3775 60.7877 43.5816C59.6023 44.9836 58.8666 46.568 58.601 48.2909C58.3256 50.0773 58.4749 51.606 59.0581 52.9645C59.0736 53.0007 59.0733 53.0745 59.0731 53.0992L59.0417 53.8808C59.0371 53.937 59.0074 54.0004 58.9829 54.024C57.7992 55.1639 56.496 56.155 55.0975 56.9798C55.7595 56.3814 56.2354 55.6007 56.5439 54.6114C56.8857 53.5148 57.0612 52.3735 57.2312 51.267L57.2461 51.1685C57.3064 50.7797 57.3692 50.3917 57.4334 49.9951L57.5059 49.5468C57.5163 49.4815 57.4906 49.4162 57.4399 49.3771C57.3897 49.337 57.3169 49.3274 57.2591 49.3522L57.1958 49.3784C57.1283 49.406 57.0695 49.4307 57.0141 49.4591C54.3702 50.7795 52.6298 53.8593 52.8758 56.7817C52.9144 57.2395 52.8724 57.6694 52.7474 58.0953C52.7358 58.134 52.6983 58.1761 52.6831 58.1832C51.4274 58.7127 50.2334 59.0991 49.0321 59.3643C48.9703 59.3786 48.9213 59.4228 48.9013 59.4823C48.8811 59.5422 48.8933 59.6073 48.9345 59.6563C49.0651 59.811 49.1788 59.9773 49.2723 60.1515C49.3107 60.2227 49.4021 60.2593 49.4705 60.2415C50.4493 60.0181 51.4025 59.729 52.3045 59.3814C52.3774 59.3521 52.433 59.3382 52.4852 59.3467C52.6859 59.3734 52.8979 59.4146 53.1332 59.473C53.1818 59.4849 53.2221 59.5073 53.2228 59.5053C53.737 60.5303 54.6206 61.1832 55.9251 61.5009C56.2089 61.569 56.5016 61.6192 56.795 61.65C57.1022 61.6825 57.4447 61.699 57.8129 61.699C58.323 61.699 58.6867 61.6674 58.6912 61.6671C59.8219 61.5406 60.7875 61.2861 61.6427 60.889C61.9937 60.7263 62.3936 60.5073 62.7009 60.1161C62.7597 60.0411 62.7499 59.933 62.6785 59.8701C61.8097 59.1035 60.9251 58.5465 59.9738 58.1674C58.5643 57.6073 57.2804 57.4555 56.0219 57.6976C55.8338 57.7341 55.6502 57.7801 55.4718 57.833C56.649 57.1293 57.7762 56.3022 58.8407 55.36C58.8611 55.3414 58.8946 55.3251 58.9208 55.3205C59.095 55.2915 59.3263 55.2559 59.5629 55.2389C59.5848 55.2389 59.6126 55.2494 59.6158 55.2505C60.2572 55.9684 61.0835 56.3172 62.142 56.3172C62.196 56.3172 62.2502 56.3161 62.3042 56.3143C63.4551 56.2772 64.6121 55.9609 65.7437 55.3739C66.5661 54.9449 67.4234 54.4454 68.1186 53.7005C68.2727 53.5348 68.4104 53.3475 68.5319 53.1822L68.5437 53.1661C68.5975 53.0932 68.6519 53.0198 68.7077 52.9472C68.7381 52.9081 68.7509 52.8577 68.7429 52.8068C68.7344 52.7579 68.706 52.7143 68.6576 52.6828C68.6454 52.6761 68.351 52.5182 68.0823 52.4142C66.2827 51.7188 64.4659 51.6476 62.7328 52.2061C62.1654 52.3884 61.6314 52.6622 61.1115 53.0405C62.073 51.9228 62.9633 50.6975 63.7717 49.3791C63.7804 49.3652 63.8034 49.3276 63.8108 49.3207C63.8815 49.2757 63.9538 49.233 64.026 49.1909C64.1552 49.115 64.2892 49.0366 64.4149 48.9431C64.521 48.8639 64.5509 48.8618 64.6581 48.9308C64.8098 49.0293 64.9862 49.0805 65.14 49.1208C66.0395 49.3511 66.9464 49.2363 67.9494 48.7654C68.8657 48.3358 69.5702 47.6568 70.1952 46.9872C71.1045 46.0104 71.6986 45.1292 72.0651 44.2137C72.1421 44.0215 72.197 43.8229 72.2541 43.6151C72.2776 43.528 72.3018 43.4408 72.3273 43.3551C72.3554 43.2631 72.3064 43.1657 72.2155 43.1336L72.1402 43.1279C71.7694 43.1279 68.4619 43.1822 66.5274 45.0593C66.1065 45.4677 65.7292 45.9017 65.3848 46.3769C66.1501 44.7562 66.7991 43.0481 67.3221 41.2751L67.3298 41.2491C67.3361 41.2274 67.3455 41.1946 67.3518 41.1857L67.8578 40.4909C67.8767 40.4631 67.879 40.4631 67.9086 40.4631C67.9218 40.4631 67.9363 40.464 67.9528 40.4649L68.0609 40.4714C68.4374 40.4948 68.6591 40.4915 68.8414 40.4629C69.5618 40.3492 70.2121 39.9864 70.8292 39.3535C72.2724 37.8734 73.2659 36.0267 73.8661 33.7086C73.9305 33.4602 73.9484 33.2095 73.9677 32.9435C73.9763 32.8229 73.9857 32.6987 73.9995 32.5703C74.0052 32.5087 73.9811 32.4499 73.9347 32.4115Z"
                                    fill="currentColor" />
                                <path
                                    d="M24.9672 59.363C23.767 59.0979 22.5732 58.7115 21.3171 58.182C21.3021 58.175 21.2648 58.1329 21.2532 58.095C21.128 57.6682 21.086 57.2383 21.1246 56.7805C21.3706 53.8579 19.6302 50.7783 16.9869 49.4581C16.9307 49.4295 16.8721 49.4049 16.8046 49.3772L16.7419 49.3513C16.6824 49.3258 16.6098 49.3364 16.5618 49.375C16.5099 49.4151 16.4841 49.4804 16.4946 49.5458L16.567 49.9939C16.6312 50.3905 16.694 50.7785 16.7543 51.1669L16.7695 51.2686C16.9392 52.3724 17.1147 53.5138 17.4565 54.6104C17.765 55.5997 18.2409 56.3804 18.9029 56.9786C17.5044 56.154 16.2012 55.1629 15.0177 54.0231C14.9928 53.9992 14.9633 53.9358 14.959 53.8835L14.9273 53.1013C14.9271 53.0735 14.9268 52.9997 14.9425 52.9631C15.5255 51.605 15.6748 50.0763 15.3994 48.2899C15.1338 46.567 14.3982 44.9826 13.2127 43.5806C13.074 43.4164 12.9516 43.3333 12.8488 43.3333C12.8238 43.3333 12.8012 43.3383 12.7834 43.3476C12.7288 43.3747 12.6919 43.4272 12.6847 43.4878L12.653 43.7607C12.6285 43.9632 12.6049 44.1621 12.5838 44.3613C12.5472 44.7122 12.5072 45.0626 12.4669 45.4131L12.4612 45.4638C12.361 46.339 12.2571 47.2442 12.2022 48.1505C12.1384 49.2077 12.1574 50.4424 12.7822 51.5846C12.7856 51.5904 12.7886 51.5965 12.7919 51.6023C11.9233 50.5161 11.1304 49.3472 10.4229 48.1085C10.3604 47.9984 10.355 47.9017 10.3667 47.7615C10.417 47.1685 10.6926 46.6866 10.9829 46.2545C11.5436 45.4176 11.883 44.4284 12.0835 43.0469C12.3638 41.115 12.0808 39.1769 11.2428 37.2861C11.2198 37.234 11.1929 37.1837 11.1641 37.1297L11.0986 37.0062C11.0673 36.9459 11.0003 36.9062 10.9297 36.9094C10.8592 36.9131 10.797 36.9578 10.7714 37.0227C10.5682 37.5354 10.3715 38.0293 10.1762 38.5195L10.0514 38.8328C9.63482 39.8791 9.16759 41.1007 8.89605 42.361C8.70463 43.2504 8.69295 44.1088 8.86081 44.9261C8.2094 43.3756 7.67392 41.7373 7.26382 40.0384C7.25918 40.0195 7.2577 39.9706 7.29832 39.8576C7.4901 39.3327 7.83937 38.8567 8.28192 38.5175C9.25069 37.7745 9.80027 36.7417 10.21 35.8295C11.0489 33.9639 11.2765 31.9821 10.9056 29.7702C10.9017 29.747 10.8946 29.724 10.8863 29.699L10.8796 29.679C10.8634 29.6294 10.8267 29.5894 10.7781 29.5684C10.7306 29.5486 10.6709 29.5523 10.634 29.5705C10.5969 29.584 10.5407 29.6046 10.5042 29.6582C10.2942 29.9386 10.0811 30.2217 9.86778 30.5045L9.83199 30.5522C9.29409 31.2665 8.73783 32.0047 8.20328 32.7401C7.58396 33.5898 7.14659 34.4158 6.86596 35.2653C6.73056 35.6756 6.64209 36.0704 6.60035 36.454C6.4221 35.0757 6.32102 33.6685 6.29895 32.2495C6.29375 31.9109 6.33678 31.6417 6.56808 31.347C6.81291 31.0328 7.04161 30.8573 7.35693 30.7416C8.65251 30.2682 9.48365 29.2679 10.0629 28.4494C10.9987 27.1253 11.5475 25.5845 11.7408 23.7389C11.7614 23.549 11.773 23.3568 11.7851 23.1536L11.7881 23.1074C11.7938 23.0085 11.7999 22.9056 11.8077 22.7965C11.8126 22.7242 11.7738 22.6563 11.7091 22.6235C11.6464 22.5919 11.566 22.6012 11.5115 22.6474L11.3578 22.7791C11.2999 22.8284 11.2504 22.8707 11.199 22.9119C10.9521 23.1102 10.7043 23.3064 10.4559 23.5032L10.43 23.5236C9.88485 23.9554 9.32099 24.4018 8.78253 24.863C7.73772 25.754 7.06498 26.641 6.66527 27.6546C6.59924 27.8217 6.54137 27.987 6.49166 28.1506C6.656 26.5399 6.9229 24.9537 7.28941 23.4147C7.33393 23.2265 7.35878 23.1712 7.45023 23.1411C7.50772 23.1217 7.56133 23.0842 7.60047 23.0378C7.86626 22.7357 8.21626 22.6878 8.55532 22.681C9.68675 22.6544 10.5841 22.09 11.3125 21.5414C13.0985 20.1963 14.3282 16.7834 14.3282 16.6677C14.3282 16.6074 14.2982 16.5512 14.2472 16.5172C14.1969 16.484 14.129 16.4794 14.0778 16.5022C13.7058 16.6601 13.3337 16.8138 12.9484 16.9732C12.1008 17.3246 11.2244 17.6878 10.3827 18.0849C9.53559 18.4857 8.86619 19.0218 8.38765 19.6814C8.84374 18.3854 9.37255 17.1149 9.9646 15.8938C10.0327 15.7621 10.3524 15.6223 10.811 15.6223C10.9601 15.6223 11.1046 15.6382 11.2294 15.6683C12.3067 15.9265 13.3749 15.7699 14.5571 15.1792C15.7666 14.5745 16.7701 13.5859 17.6248 12.156C17.6411 12.1284 17.6732 12.044 17.6904 11.9967C17.7121 11.9388 17.7034 11.875 17.6674 11.8266C17.6341 11.7806 17.5806 11.7532 17.5126 11.7532C17.512 11.7532 17.5116 11.7532 17.5111 11.7532L17.0841 11.7801C16.8224 11.7966 16.5683 11.8127 16.3142 11.8257L16.0428 11.8394C15.2326 11.8802 14.3946 11.9221 13.5748 12.1174C12.6398 12.3422 11.9533 12.6874 11.4269 13.1994C12.05 12.1623 12.7171 11.1756 13.4199 10.2513C13.4388 10.2268 13.5295 10.1894 13.6039 10.1769C13.641 10.1682 13.7761 10.1398 13.9556 10.1398C14.1938 10.1398 14.4022 10.1883 14.579 10.2855C15.7021 10.8347 16.9634 10.8755 18.3328 10.4051C19.456 10.0213 20.4074 9.30852 21.2413 8.22661C21.2684 8.19174 21.2929 8.15372 21.3151 8.11365C21.3405 8.06747 21.3422 8.01665 21.3199 7.97028C21.2554 7.83488 20.976 7.77126 20.8585 7.75011C20.5698 7.69966 20.2428 7.64216 19.9186 7.5982C19.7701 7.57743 19.6213 7.55573 19.4722 7.53365L19.4531 7.53069C18.9478 7.45612 18.4255 7.37896 17.8993 7.35244C16.9378 7.30329 16.084 7.49953 15.3853 7.93392C15.8551 7.43387 16.3351 6.95941 16.8226 6.51369C16.9767 6.3731 17.1511 6.23139 17.3887 6.05352C17.407 6.03942 17.4538 6.02291 17.5111 6.01957C19.1951 5.95373 20.5964 5.21032 21.7946 3.74725C22.4473 2.95079 22.9477 1.94623 23.3248 0.676054L23.3378 0.632466C23.378 0.49892 23.4003 0.425469 23.3077 0.339406C23.2363 0.273004 23.1106 0.292665 22.7837 0.422131C22.487 0.536202 22.1884 0.646934 21.8818 0.760634C21.2658 0.988961 20.6286 1.22508 20.0138 1.4918C18.9862 1.93844 18.1656 2.61544 17.5753 3.50371C17.1257 4.1796 16.948 4.85865 17.0316 5.57609C17.0311 5.58406 17.024 5.60317 17.0229 5.6054C15.9503 6.5315 14.9249 7.57409 13.8721 8.81496C14.5742 7.74158 15.0318 6.50572 15.2614 5.07307C15.4929 3.62873 15.5075 2.34316 15.3065 1.14309C15.2937 1.06798 15.2764 0.992856 15.2543 0.898817L15.2215 0.753956C15.2067 0.69182 15.1599 0.641555 15.0985 0.622265C15.0371 0.604087 14.9683 0.620224 14.9225 0.663812C14.8491 0.732996 14.7771 0.798286 14.7068 0.861721L14.6573 0.906422C14.4774 1.06853 14.3075 1.22155 14.1537 1.39461C12.6596 3.08007 11.7883 4.86032 11.4898 6.83717C11.3539 7.73064 11.4102 8.49129 11.6623 9.16199C11.7458 9.3842 11.876 9.58266 12.0056 9.77964C12.065 9.8696 12.1243 9.95993 12.1787 10.0527C12.2188 10.1193 12.2221 10.1365 12.2219 10.1334C12.1972 10.3977 12.1618 10.6922 12.114 11.0457C12.1119 11.0502 12.1052 11.0606 12.0839 11.0888L12.0667 11.1127C11.2496 12.2484 10.4958 13.4457 9.81752 14.6849C10.0842 13.7593 10.2966 12.5878 10.2816 11.2266C10.2634 9.59379 9.88745 8.13758 9.1318 6.77411C9.10193 6.72106 9.04777 6.68656 8.97191 6.68137C8.91682 6.68137 8.86378 6.70864 8.82909 6.75519C8.80646 6.78672 8.78346 6.8164 8.76158 6.84459C8.71279 6.90766 8.66717 6.96738 8.62636 7.03119C8.02466 7.97473 7.70192 9.01509 7.48769 9.81618C7.09614 11.2854 6.91623 12.5121 6.92142 13.6772C6.92439 14.6674 7.10486 15.4286 7.48955 16.0728C7.60918 16.2733 7.75979 16.4488 7.91115 16.6254C7.99146 16.719 8.074 16.8153 8.14875 16.914C8.20105 16.9826 8.22628 17.0525 8.22776 17.0915C8.23759 17.3263 8.2324 17.565 8.22739 17.7958L8.22387 17.9553C8.22331 17.9827 8.217 18.0143 8.20754 18.0384C7.72455 19.2086 7.29999 20.4248 6.93793 21.6738C6.99116 21.2485 7.02121 20.8367 7.02881 20.435C7.07259 18.1547 6.37314 16.1183 4.94939 14.3816L4.65262 14.0201C4.6183 13.9776 4.56748 13.9535 4.51332 13.9535L4.48364 13.9561C4.42021 13.9667 4.36679 14.0106 4.34472 14.0706C4.31764 14.1427 4.29111 14.2108 4.26533 14.2766C4.21562 14.4039 4.1687 14.5244 4.129 14.647C3.82352 15.6039 3.67365 16.6493 3.64323 18.036L3.64267 18.063C3.61986 19.0719 3.58851 20.4539 4.00288 21.7764C4.41075 23.0783 5.13004 23.7362 5.26953 23.8543L5.28437 23.8677C5.66404 24.2065 5.91129 24.5165 5.96248 24.7177C5.98307 24.799 6.00403 24.8804 6.02851 24.9609C6.13684 25.319 6.06914 25.6603 5.99606 26.0289C5.9597 26.2149 5.92186 26.4071 5.90869 26.6042C5.85639 27.3933 5.79221 28.1957 5.73008 28.9715L5.72451 29.0433C5.70856 29.2412 5.69261 29.4391 5.67684 29.637C5.51844 27.8616 4.93047 26.2478 3.91885 24.8205C3.29935 23.9472 2.56076 23.2001 1.72313 22.5993C1.68696 22.5734 1.64894 22.5502 1.59812 22.52C1.57345 22.5057 1.54488 22.4886 1.5102 22.4669C1.45789 22.4356 1.39075 22.4328 1.33678 22.4591C1.2815 22.486 1.24348 22.5407 1.23717 22.6027C1.22586 22.7149 1.21269 22.8236 1.19878 22.9364C1.17077 23.1673 1.14425 23.3854 1.14313 23.6095C1.13071 25.9321 1.62204 28.1085 2.60398 30.0776C2.87757 30.627 3.23907 31.1022 3.67884 31.4906C4.11491 31.8736 4.58547 32.0995 5.1165 32.1807C5.12819 32.1828 5.15601 32.1996 5.16028 32.203C5.18903 32.2607 5.21889 32.3185 5.24875 32.3766C5.35485 32.5816 5.46447 32.7936 5.519 33.0061C5.56444 33.1859 5.56444 33.3823 5.56444 33.5904C5.56444 33.6666 5.56444 33.7434 5.56685 33.8187C5.61786 35.6179 5.68482 36.2444 5.97268 37.852C5.79703 37.374 5.5765 36.8947 5.29178 36.4336C4.13883 34.5675 2.67409 33.3008 0.813905 32.5617C0.695568 32.514 0.57686 32.4797 0.439233 32.4397L0.411782 32.4315C0.355952 32.4152 0.296784 32.3977 0.233535 32.3785C0.176407 32.3597 0.111303 32.3725 0.0647473 32.4111C0.0183771 32.4495 -0.00592088 32.5083 0.000199988 32.5695C0.0139256 32.6971 0.0233851 32.8212 0.0321027 32.9423C0.0512072 33.2079 0.0691989 33.4587 0.133561 33.7069C0.733777 36.0252 1.72721 37.8717 3.17044 39.352C3.78753 39.9848 4.43783 40.3476 5.15842 40.4613C5.34019 40.4897 5.5624 40.4932 5.93856 40.4699L6.04688 40.4634C6.06339 40.4625 6.07785 40.4615 6.09102 40.4615C6.1207 40.4615 6.12311 40.4615 6.1437 40.4919L6.64765 41.184C6.65414 41.1931 6.6636 41.2259 6.67009 41.2485L6.67751 41.2734C7.20057 43.0466 7.84957 44.7545 8.61486 46.3754C8.27042 45.9 7.89297 45.466 7.4723 45.0577C5.53773 43.1807 2.23024 43.1263 1.85946 43.1263L1.81328 43.1267L1.78416 43.1321C1.69327 43.1644 1.64412 43.2615 1.67212 43.353C1.69791 43.4392 1.72202 43.5264 1.74966 43.6288C1.80252 43.8211 1.85742 44.0198 1.93439 44.212C2.3009 45.1279 2.895 46.0089 3.80441 46.9856C4.4293 47.6552 5.13376 48.3343 6.04985 48.7637C7.05311 49.2348 7.959 49.3498 8.85988 49.119C9.01309 49.0788 9.18929 49.0278 9.34083 48.9295C9.44878 48.8603 9.47827 48.8625 9.58437 48.9415C9.71012 49.035 9.84386 49.1135 9.97369 49.1895C10.0455 49.2316 10.1178 49.2741 10.1853 49.3168C10.1961 49.3258 10.2191 49.3635 10.2276 49.3774C11.0359 50.6958 11.9264 51.9211 12.888 53.0388C12.3679 52.6604 11.8339 52.3867 11.2667 52.2043C9.53336 51.6458 7.71658 51.7169 5.91723 52.4126C5.64865 52.5167 5.35429 52.6743 5.33463 52.6855C5.29345 52.7125 5.26507 52.7563 5.25617 52.8066C5.24838 52.8559 5.26118 52.9064 5.29123 52.945C5.34743 53.018 5.40177 53.0915 5.45556 53.1644L5.46743 53.1803C5.58892 53.3458 5.72655 53.5329 5.88087 53.6987C6.57587 54.4438 7.43298 54.9433 8.25577 55.3722C9.3872 55.9592 10.5442 56.2754 11.695 56.3125C11.7491 56.3144 11.8033 56.3155 11.8573 56.3155C12.9158 56.3155 13.7421 55.9666 14.3791 55.2531C14.3868 55.2475 14.4145 55.2369 14.4297 55.2368C14.673 55.2542 14.9043 55.2896 15.0772 55.3184C15.1045 55.3232 15.138 55.3395 15.159 55.3584C16.2231 56.3005 17.3501 57.1274 18.5273 57.8311C18.3489 57.7782 18.1651 57.7322 17.977 57.6953C16.7189 57.4534 15.435 57.6052 14.0252 58.1653C13.074 58.5444 12.1894 59.1014 11.3208 59.868C11.2492 59.9309 11.2392 60.039 11.2982 60.114C11.6056 60.5052 12.0055 60.7242 12.3562 60.8867C13.2116 61.2842 14.1772 61.5387 15.3092 61.6652C15.3126 61.6653 15.6763 61.6969 16.1864 61.6969C16.5546 61.6969 16.8971 61.6804 17.2041 61.6479C17.4975 61.6171 17.7902 61.5668 18.0742 61.4986C19.3785 61.181 20.2623 60.5282 20.7687 59.5145C20.7778 59.5058 20.8167 59.4832 20.8661 59.4711C21.1014 59.4127 21.3133 59.3715 21.5147 59.3446C21.5622 59.337 21.6213 59.3498 21.6959 59.3798C22.5966 59.7269 23.5498 60.016 24.5271 60.239C24.5408 60.2423 24.5551 60.244 24.5694 60.244C24.635 60.244 24.6955 60.2078 24.7274 60.1488C24.8207 59.9752 24.9344 59.8087 25.0652 59.6538C25.1062 59.605 25.1184 59.5401 25.0982 59.48C25.0789 59.4218 25.0299 59.3776 24.9672 59.363Z"
                                    fill="currentColor" />
                                <path
                                    d="M45.798 35.4259L53.2507 28.1614C53.5033 27.9151 53.5945 27.5463 53.4853 27.2108C53.3762 26.8749 53.0861 26.6301 52.7367 26.5794L42.4382 25.0839L37.8318 15.7518C37.6756 15.4352 37.3533 15.2349 37.0003 15.2349C36.6473 15.2349 36.3248 15.4356 36.1688 15.7518L31.564 25.0839L21.2639 26.5794C20.9147 26.6301 20.6244 26.8751 20.5153 27.2108C20.4061 27.5463 20.4971 27.9151 20.75 28.1614L28.2026 35.4259L26.4442 45.6828C26.3845 46.0306 26.5275 46.3823 26.8131 46.5896C27.0984 46.7972 27.4768 46.8246 27.7897 46.6603L37.0007 41.8183L46.2117 46.6603C46.3472 46.7317 46.4954 46.7668 46.6429 46.7668C46.8352 46.7668 47.0265 46.7071 47.188 46.5896C47.4737 46.3825 47.6169 46.0306 47.5569 45.6828L45.798 35.4259Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div class="number-counter " data-to="5489" data-speed="2000" data-waypoint-active="yes">
                            5489</div>
                        <span class="line"></span>
                        <p class="title-counter">Awwards<br>Winning</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Widget Counter -->



    <!-- Widget Brand logo -->
    <section class="relative">
        <div class="tf-container">
            <div class="row">
                <div class="relative mt-20 col-lg-12 center line-brand-logo">
                    <div class="line"></div>
                    <p class="line-text">We’ve been mentioned in Below Brands</p>
                </div>
                <div class="col-lg-12 widget-brand-logo">
                    <div class="overflow-hidden swiper brand-logo">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('home_assets/assets/images/page/brand-logo.png') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('home_assets/assets/images/page/brand-logo.png') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('home_assets/assets/images/page/brand-logo.png') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('home_assets/assets/images/page/brand-logo.png') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('home_assets/assets/images/page/brand-logo.png') }}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('home_assets/assets/images/page/brand-logo.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Widget Brand logo -->

    --}}
@endsection

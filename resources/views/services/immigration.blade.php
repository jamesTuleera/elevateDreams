@extends('layouts.home')

@section('content')

<main id="main">

    <section class="breadcumb-section" style="background-image: url({{ asset('home_assets/assets/images/page/bg3.jpg') }})">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12 center z-index1">
                    <h1 class="title">Immigration</h1>
                    <ul class="breadcumb-list flex-five">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Immigration</span></li>
                    </ul>
                    <img class="bcrumb-ab" src="{{ asset('home_assets/assets/images/page/mask-bcrumb.png') }}" alt="">
                </div>
            </div>

        </div>
    </section>



    <!-- Widget Video -->
    <section class="mt-5 mb-5 about-us-h4">
        <div class="tf-container">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="relative overflow-hidden video-h4-widget mb--14em" style="background-image: url({{ asset('home_assets/assets/images/page/youtubela.jpeg') }})">
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


                        <img class="img-fluid" src="{{ asset('home_assets/assets/images/travel-list/1.jpg') }}" alt="Image Listing">

                    </div>

                </div>

                <div class="col-md-8 inner-content-about">


                    <div class="mb-30">
                        <h2 class="title-heading mb-18">IMMIGRATION</h2>
                        <p class="des">We simplify the process of building a life and business in the United States, focusing on three key pathways:
                        </p>
                    </div>

                    <div class="row">
                        <div class="mt-2 col-md-12">
                            <div class="icon-box-style6">
                                <div class="content">
                                    <h6 class="title-icon"><a href="#">•⁠  ⁠EB1 Visa (Employment-Based First Preference):
                                    </a></h6>
                                    <p class="des-icon">If you’ve reached the top of your field—whether in the arts, sciences, business, or athletics—the EB1 visa is designed for you. This visa is for those who have extraordinary achievements that set them apart. It’s also available for outstanding professors, researchers, or multinational executives and managers. What’s unique about this visa is that it doesn’t require a job offer, meaning you can apply based on your accomplishments.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="mt-5 col-md-12">
                            <div class="icon-box-style6">
                                <div class="content">
                                    <h6 class="title-icon"><a href="#">•⁠  EB2 Visa (Employment-Based Second Preference):
                                    </a></h6>
                                    <p class="des-icon">If you hold an advanced degree (Master’s or higher) or have exceptional talent in your field, the EB2 visa may be your gateway to the U.S. While this visa usually requires a job offer from a U.S. employer, the National Interest Waiver (NIW) allows you to skip this requirement if your work benefits the U.S. as a whole. This pathway is often used by researchers, entrepreneurs, and artists making a meaningful impact.

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 col-md-12">
                            <div class="icon-box-style6">
                                <div class="content">
                                    <h6 class="title-icon"><a href="#">EB5 Visa (Employment-Based Fifth Preference):

                                    </a></h6>
                                    <p class="des-icon">This visa is ideal for those looking to invest in the U.S. economy. By making a substantial investment in a U.S. business (typically $1 million, or $500,000 in targeted employment areas), you can secure permanent residency for yourself and your immediate family while creating jobs for U.S. workers.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-three btn-wrap-about ">
                        <a href="#" class="btn-main">
                            <p class="btn-main-text">Book consultation</p>
                            <p class="iconer">
                                <i class="icon-arrow-right"></i>
                            </p>
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Widget About Us -->



@endsection

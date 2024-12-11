@extends('layouts.home')

@section('content')

<main id="main">

    <section class="breadcumb-section" style="background-image: url({{ asset('home_assets/assets/images/page/bg3.jpg') }})">
        <div class="tf-container" >
            <div class="row">
                <div class="col-lg-12 center z-index1">
                    <h1 class="title">Consultation</h1>
                    <ul class="breadcumb-list flex-five">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Consultation</span></li>
                    </ul>
                    <img class="bcrumb-ab" src="{{ asset('home_assets/assets/images/page/') }}" alt="">
                </div>
            </div>

        </div>
    </section>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <script src="https://speakmeet.com/meet/embed/elevatedreams/booker_elevatedreams"></script>
            </div>
        </div>
    </div>

   <!-- push above line to where you want show the booker -->


@endsection

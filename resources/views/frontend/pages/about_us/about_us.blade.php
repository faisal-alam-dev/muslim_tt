@extends('frontend.master')

@section('frontend_title', 'About Us')

@section('frontend_content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend/assets/images/background/page-title.jpg') }})">
        <div class="auto-container">
            <h2>About Us</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->


    <section class="welcome-one">

        <div class="welcome-three_pattern" style="background-image:url({{ asset('frontend/assets/images/background/welcome-two_pattern.png') }})"></div>

        <div class="welcome-three_pattern-two" style="background-image:url({{ asset('frontend/assets/images/background/welcome-two_pattern-two.png') }})"></div>

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <!-- Image Column -->
                <div class="welcome-three_image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="welcome-three_image-outer">
                        <div class="welcome-three_color-box"></div>
                        <div class="welcome-three_dots" style="background-image:url({{ asset('frontend/assets/images/background/pattern-2.png') }})"></div>
                        <div class="welcome-three_dots-two" style="background-image:url({{ asset('frontend/assets/images/background/pattern-2.png') }})"></div>
                        <div class="welcome-three_image">
                            <img src="{{ asset($about_us->about_us_image) }}" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="welcome-three_content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="welcome-three_content-outer">

                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="sec-title_title d-flex align-items-center">About Muslim Tour & Travels <span><img src="{{ asset('frontend/assets/images/icons/bismillah-2.png') }}" alt="" /></span></div>
                            <h2 class="sec-title_heading">Trusted Provider of Hajj and Umrah Travel Experiences</h2>
                        </div>

                        <div class="welcome-three_years d-flex align-items-center flex-wrap">
                            <span class="fa-solid fa-globe fa-fw"></span>
                            Since 1995 Operating in the world
                        </div>

                        <div class="welcome-three_text text-justify">
                            {!! $about_us->description !!}
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


@endsection

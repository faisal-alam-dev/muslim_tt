@extends('frontend.master')

@section('frontend_title', 'Board Of Director')

@section('frontend_content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend/assets/images/background/page-title.jpg') }})">
        <div class="auto-container">
            <h2>Board Of Director</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- Meet the Board of Directors -->
    <section class="courses-three">

        <div class="auto-container">

            <div class="row clearfix align-items-center">
                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 45px;">Meet the Board of Directors of Muslim Tour & Travels</h3>
                        <p>
                            Muslim Tour & Travels is a trusted name in Islamic pilgrimage and travel services.
                            Since our establishment, we have been committed to providing seamless Hajj and Umrah
                            experiences with dedication and professionalism. Our services include visa processing,
                            flight arrangements, luxury accommodations, guided tours, and transportation in the holy cities.
                        </p>
                        <p>
                            We offer a range of tailored packages, from budget-friendly to premium options, ensuring
                            a spiritually fulfilling journey for every pilgrim. Our operations are led by a dynamic
                            and experienced **board of directors**, each bringing expertise and passion to serve our clients.
                            Scroll down to learn more about our leadership team.
                        </p>
                    </div>
                </div>

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/meet-the-board-of-directors-of-hijaz-hajj-umrah-limited.png') }}" alt="Board of Directors - Muslim Tour & Travels" />
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- End Meet the Board of Directors -->


    <!-- Meet our board of directors -->
    <section class="courses-three">

        <div class="courses-three_bg" style="background-image:url({{ asset('frontend/assets/images/background/3.jpg') }})"></div>

        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title style-two text-center">
                <div class="title-box">
                    <h2 class="sec-title_heading">Meet our board of directors</h2>
                </div>
            </div>

            <div class="row clearfix">

                <!-- Team Block One -->
                @foreach ($team as $item)
                <div class="team-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="team-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="team-block_one-image">
                            <img src="{{ asset($item->team_image) }}" alt="" />
                            <div class="team-block_one-content">
                                <h4 class="team-block_one-heading">
                                    <a href="{{ route('frontend.board.of.director.details', ['slug' => $item->slug]) }}">{{ $item->name }}</a>
                                </h4>
                                <div class="team-block_one-designation">{{ $item->designation }}</div>
                                <!-- Social Box -->
                                <div class="team-block_one-socials">
                                    <a href="https://facebook.com/" target="_blank;"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="https://instagram.com/" target="_blank;"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="https://twitter.com/" target="_blank;"><i class="fa-brands fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </section>
    <!-- End Meet our board of directors -->


@endsection

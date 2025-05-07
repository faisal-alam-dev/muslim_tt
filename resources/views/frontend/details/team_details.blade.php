@extends('frontend.master')

@section('frontend_title', $team->name)

@section('frontend_content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend/assets/images/background/page-title.jpg') }})">
        <div class="auto-container">
            <h2>{{ $team->name }}</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li>Team Details</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- Team Detail -->
    <section class="scholar-detail" style="padding: 110px 0;">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Scholar Detail Image -->
                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset($team->team_image) }}" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title">{{ $team->name }} <span>{{ $team->designation }}</span></h3>
                        <div>
                            {!! $team->description !!}
                        </div>

                        <div class="d-flex align-items-center flex-wrap mt-4">
                            <!-- Social Box -->
                            <div class="scholar-detail_socials">
                                <a href="https://facebook.com/" target="_blank;"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://instagram.com/" target="_blank;"><i class="fa-brands fa-instagram"></i></a>
                                <a href="https://twitter.com/" target="_blank;"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Team One -->

@endsection

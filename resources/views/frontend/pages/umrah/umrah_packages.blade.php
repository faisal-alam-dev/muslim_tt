@extends('frontend.master')

@section('frontend_title', 'Umrah Packages')

@section('frontend_content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend/assets/images/background/page-title.jpg') }})">
        <div class="auto-container">
            <h2>Umrah Packages</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li>Umrah</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <section class="courses-two">
        <div class="courses-three_bg" style="background-image:url({{ asset('frontend/assets/images/background/courses-two_bg.png') }})"></div>
        <div class="auto-container">
            <div class="row clearfix">

                @foreach ($packages as $item)
                    <!-- Service Block Three -->
                    <div class="course-block_three col-lg-4 col-md-6 col-sm-12">
                        <div class="course-block_three-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <div class="course-block_three-image">
                                <a href="{{ route('frontend.package.details', ['slug' => $item->package_name_slug]) }}"><img src="{{ asset($item->package_image) }}" alt="" /></a>
                            </div>
                            <div class="course-block_three-content">
                                <div class="course-block_three-lower d-flex justify-content-between flex-wrap text-center">
                                    <div class="course-block_three-author">
                                        <strong>{{ $item->package_name }}</strong>
                                    </div>
                                </div>
                                <div class="course-block_three-heading text-justify">
                                    {!! Str::limit($item->package_short_description, 200) !!}
                                </div>
                                <ul class="course-block_three-list d-flex justify-content-between flex-wrap align-items-center">
                                    <li><span>{{ $item->package_duration }}</span> days</li>
                                    <div class="course-block_three-price d-flex">Start From <span> ৳{{ $item->package_price_without_food }}</span></div>
                                </ul>
                                <div class="button-box">
                                    <a class="theme-btn" href="{{ route('frontend.package.details', ['slug' => $item->package_name_slug]) }}">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>



@endsection

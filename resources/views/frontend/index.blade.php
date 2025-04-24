@extends('frontend.master')

@section('frontend_title', 'Home')

@section('frontend_content')

    <!-- Slider One -->
    @include('frontend.home.slider')

    <!-- Featured One -->
    @include('frontend.home.featured')

    <!-- Welcome One -->
    @include('frontend.home.welcome')

    <!-- WHAT WE OFFER -->
    @include('frontend.home.what_we_offer')

    <!-- Students One -->
    {{-- @include('frontend.home.students') --}}

    <!-- Packages One -->
    @include('frontend.home.packages')

    <!-- CTA One -->
    {{-- @include('frontend.home.cta') --}}

    <!-- Institute One -->
    @include('frontend.home.institute')

    <!-- Testimonial One -->
    @include('frontend.home.testimonial')

    <!-- News One -->
    @include('frontend.home.news')

    <!-- CTA One -->
    @include('frontend.home.cta_two')

@endsection

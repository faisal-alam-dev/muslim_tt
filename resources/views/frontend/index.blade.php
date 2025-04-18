@extends('frontend.master')

@section('frontend_title', 'Home')

@section('frontend_content')

    <!-- Slider One -->
    @include('frontend.home.slider')

    <!-- Featured One -->
    @include('frontend.home.featured')

    <!-- Welcome One -->
    @include('frontend.home.welcome')

    <!-- Service One -->
    @include('frontend.home.service')

    <!-- Students One -->
    @include('frontend.home.students')

    <!-- Courses One -->
    @include('frontend.home.courses')

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

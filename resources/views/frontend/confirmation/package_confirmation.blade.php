@extends('frontend.master')

@section('frontend_title', 'Package Confirmation')

@section('frontend_content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend/assets/images/background/page-title.jpg') }})">
        <div class="auto-container">
            <h2>Package Confirmation</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li>Package Confirmation</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Error One -->
    <section class="error-one" style="background-image:url({{ asset('frontend/assets/images/icons/stars.png') }}); padding-bottom: 200px;">
        <div class="error-one_icon" style="background-image:url({{ asset('frontend/assets/images/icons/moon.png') }})"></div>
        <div class="auto-container">
            <h2 style="color: #000;">Thank You!</h2>
            <h3>For your package confirmation.</h3>
            <div class="error-one_text">We will contact you shortly.</div>
            <!-- Button Box -->
            <div class="error-one_button">
                <a href="{{ route('frontend.index') }}" class="theme-btn btn-style-four">
                    <span class="btn-wrap">
                        <span class="text-one">back to home</span>
                        <span class="text-two">back to home</span>
                    </span>
                </a>
            </div>
        </div>
    </section>
    <!-- End Error One -->

@endsection

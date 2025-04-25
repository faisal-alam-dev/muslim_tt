@extends('frontend.master')

@section('frontend_title', 'Blog')

@section('frontend_content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend/assets/images/background/page-title.jpg') }})">
        <div class="auto-container">
            <h2>Blog</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li>Blog</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Blog One -->
    <section class="blog-one">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- News Block Four -->
                <div class="news-block_four col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="news-block_four-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="news-block_four-image">
                            <a href="{{ route('frontend.blog.details') }}"><img src="{{ asset('frontend/assets/images/resource/news-16.jpg') }}" alt="" /></a>
                        </div>
                        <div class="news-block_four-content">
                            <ul class="news-block_four-meta d-flex align-items-center justify-content-between flex-wrap">
                                <li>Tafseer</li>
                                <li><span class="icon fa-solid fa-clock fa-fw"></span>Dec 19 2024</li>
                            </ul>
                            <h5 class="news-block_four-heading"><a href="{{ route('frontend.blog.details') }}">What is Tarqeeq and Tafkheem in Tajweed?</a></h5>
                            <div class="news-block_four-info d-flex justify-content-between align-items-center flex-wrap">
                                <div class="news-block_four-author">
                                    <div class="news-block_four-author_image">
                                        <img src="{{ asset('frontend/assets/images/resource/author-2.png') }}" alt="" />
                                    </div>
                                    Amir Khan
                                </div>
                                <a class="news-block_four-more theme-btn" href="{{ route('frontend.blog.details') }}">read more</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Blog One -->

@endsection

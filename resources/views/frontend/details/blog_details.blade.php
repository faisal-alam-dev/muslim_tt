@extends('frontend.master')

@section('frontend_title', 'Blog Details')

@section('frontend_content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend/assets/images/background/page-title.jpg') }})">
        <div class="auto-container">
            <h2>Blog Detail</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li>Blog Detail</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-detail">
                        <div class="blog-detail_outer">
                            <div class="blog-detail_image">
                                <img src="{{ asset('frontend/assets/images/resource/news-11.jpg') }}" alt="" />
                            </div>
                            <div class="blog-detail_content">
                                <div class="d-flex align-items-center flex-wrap">
                                    <!-- Author -->
                                    <div class="blog-detail_author d-flex align-items-center">
                                        <div class="image">
                                            <img src="{{ asset('frontend/assets/images/resource/author-11.png') }}" alt="" />
                                        </div>
                                        Admin
                                    </div>
                                    <!-- Post Meta -->
                                    <ul class="blog-detail_meta">
                                        <li><span class="icon fa-brands fa-rocketchat fa-fw"></span>03 Comment</li>
                                        <li><span class="icon fa-solid fa-clock fa-fw"></span>October 18 2025</li>
                                    </ul>
                                </div>
                                <h3 class="blog-detail_heading">Islamic Studies for kids and the <br> Prophet Sunnh</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                <!-- Post Share Options-->
                                <div class="post-share-options">
                                    <div class="post-share-inner d-flex justify-content-between align-items-center flex-wrap">
                                        <div class="social-box">
                                            <span>Share post :</span>
                                            <a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                                            <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">

                        <!-- Sidebar Widget -->
                        <div class="sidebar-widget search-box">
                            <form method="post" action="https://themazine.com/html/Alquran-2/alquran/contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search Resources" required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!-- Popular Category Widget -->
                        <div class="sidebar-widget style-two category-widget">
                            <div class="widget-content">
                                <!-- Sidebar Title -->
                                <div class="sidebar-title">
                                    <h4>Blog Categories</h4>
                                </div>
                                <div class="content">
                                    <ul class="category-list">
                                        <li><a href="#">web design <span>10</span></a></li>
                                        <li><a href="#">Online Class <span>07</span></a></li>
                                        <li><a href="#">Digital Class <span>09</span></a></li>
                                        <li><a href="#">Lear About islam <span>15</span></a></li>
                                        <li><a href="#">Digital business <span>11</span></a></li>
                                        <li><a href="#">Learn Quran <span>02</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Post Widget -->
                        <div class="sidebar-widget style-two post-widget">
                            <div class="widget-content">
                                <!-- Sidebar Title -->
                                <div class="sidebar-title">
                                    <h4>Lastest News</h4>
                                </div>
                                <div class="content">
                                    <!-- Post -->
                                    <div class="post">
                                        <div class="thumb"><a href="blog-detail.html"><img src="{{ asset('frontend/assets/images/resource/post-thumb-1.png') }}" alt=""></a></div>
                                        <div class="post-date">12 Sep 2025</div>
                                        <h6><a href="blog-detail.html">Best Online Female Quran Tutors</a></h6>
                                    </div>
                                    <!-- Post -->
                                    <div class="post">
                                        <div class="thumb"><a href="blog-detail.html"><img src="{{ asset('frontend/assets/images/resource/post-thumb-2.png') }}" alt=""></a></div>
                                        <div class="post-date">12 Sep 2025</div>
                                        <h6><a href="blog-detail.html">Dua E Hajat and How to Perform</a></h6>
                                    </div>
                                    <!-- Post -->
                                    <div class="post">
                                        <div class="thumb"><a href="blog-detail.html"><img src="{{ asset('frontend/assets/images/resource/post-thumb-3.png') }}" alt=""></a></div>
                                        <div class="post-date">12 Sep 2025</div>
                                        <h6><a href="blog-detail.html">Benefits Of Taharah And Its Importance In Islam</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </div>

@endsection

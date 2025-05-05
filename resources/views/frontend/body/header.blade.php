<header class="main-header">

    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="left-box d-flex align-items-center flex-wrap">
                        <!-- Info List -->
                        <ul class="header-top_list">
                            <li><span class="icon fa-solid fa-envelope fa-fw"></span>{{ $site_setting->site_email }}</li>
                            <li><span class="icon fa-solid fa-location-dot fa-fw"></span>{!! $site_setting->head_address !!}y</li>
                        </ul>
                        <div class="bismillah"><img src="{{ asset('frontend/assets/images/icons/bismillah.png') }}" alt="" /> </div>
                    </div>
                    <ul class="header-top_list-two">
                        {{-- <li><span class="icon fa-regular fa-sun fa-fw"></span>Sunrise At: 5:15 AM</li>
                        <li><span class="icon fa-solid fa-moon fa-fw"></span>Sunset At: 4:50 PM</li> --}}
                        <li><span class="icon fa-solid fa-phone fa-fw"></span>Let’s Talk {!! $site_setting->site_phone !!}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner-container">
                <div class="d-flex justify-content-between align-items-center flex-wrap">

                    <div class="logo-box">
                        <div class="logo"><a href="{{ route('frontend.index') }}"><img src="{{ asset('uploads/demo_logo.png') }}" alt="" title="" width="184px"></a></div>
                    </div>

                    <div class="nav-outer">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">

                                    <li><a href="{{ route('frontend.index') }}">Home</a></li>

                                    <li class="dropdown"><a href="#">About Us</a>
                                        <ul>
                                            <li><a href="#!">About Us</a></li>
                                            <li><a href="#!">Customer Reviews</a></li>
                                            <li><a href="#!">Board of Director</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown"><a>Umrah</a>
                                        <ul>
                                            <li><a href="{{ route('frontend.umrah.packages') }}">Umrah Packages</a></li>
                                            <li><a href="#!">Benefit of Umrah</a></li>
                                            <li><a href="#!">How to perform Umrah</a></li>
                                            <li><a href="#!">Umrah Visa Requirement</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown"><a>Hajj</a>
                                        <ul>
                                            <li><a href="{{ route('frontend.hajj.packages') }}">Hajj Packages</a></li>
                                            <li><a href="{{ route('frontend.hajj.pre.registration') }}">Hajj Pre Registration</a></li>
                                            <li><a href="{{ route('frontend.hajj.visa.requirements') }}">Hajj Visa Requirements</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown"><a href="#">Facilities</a>
                                        <ul>
                                            <li><a href="{{ route('frontend.visa.processing') }}">Visa Processing</a></li>
                                            <li><a href="{{ route('frontend.hotel.booking') }}">Hotel Booking</a></li>
                                            <li><a href="{{ route('frontend.ziyarat.tours') }}">Ziyarat Tours</a></li>
                                            <li><a href="{{ route('frontend.air.ticketing') }}">Air Ticketing</a></li>
                                            <li><a href="{{ route('frontend.umrah.training') }}">Umrah Training</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown"><a>Guidance</a>
                                        <ul>
                                            <li><a href="{{ route('frontend.guideline.in.english') }}">Umrah Guideline in English</a></li>
                                            <li><a href="{{ route('frontend.guideline.in.bangla') }}">Umrah Guideline in Bangla</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="{{ route('frontend.blog.list') }}">Blog</a></li>

                                </ul>
                            </div>
                        </nav>
                    </div>

                    <!-- Main Menu End-->
                    <div class="outer-box d-flex align-items-center flex-wrap">

                        <!-- Search Btn -->
                        {{-- <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div> --}}

                        <!-- User Box -->
                        {{-- <a class="user-box theme-btn" href="#!">
                            <span class="fa-regular fa-user fa-fw"></span>
                        </a> --}}

                        <!-- Button Box -->
                        <div class="header_button-box">
                            <a href="{{ route('frontend.contact.us') }}" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Contact Us</span>
                                    <span class="text-two">Contact Us</span>
                                </span>
                            </a>
                        </div>

                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-close-1"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="{{ route('frontend.index') }}"><img src="{{ asset('uploads/demo_logo.png') }}" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
    </div>
    <!-- End Mobile Menu -->

</header>

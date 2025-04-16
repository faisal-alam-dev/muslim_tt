<header class="main-header">

    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="left-box d-flex align-items-center flex-wrap">
                        <!-- Info List -->
                        <ul class="header-top_list">
                            <li><span class="icon fa-solid fa-envelope fa-fw"></span>Support24@gmail.com</li>
                            <li><span class="icon fa-solid fa-location-dot fa-fw"></span>Suite 80 Golden Street Germeney</li>
                        </ul>
                        <div class="bismillah"><img src="{{ asset('frontend/assets/images/icons/bismillah.png') }}" alt="" /> </div>
                    </div>
                    <ul class="header-top_list-two">
                        {{-- <li><span class="icon fa-regular fa-sun fa-fw"></span>Sunrise At: 5:15 AM</li>
                        <li><span class="icon fa-solid fa-moon fa-fw"></span>Sunset At: 4:50 PM</li> --}}
                        <li><span class="icon fa-solid fa-phone fa-fw"></span>Let’s Talk +88 01 27 14 101</li>
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
                        <div class="logo"><a href="{{ route('frontend.index') }}"><img src="{{ asset('uploads/demo_logo.png') }}" alt="" title=""></a></div>
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
                                    <li><a href="{{ route('frontend.index') }}"><i class="fa-solid fa-house"></i></a></li>

                                    <li class="dropdown"><a href="#">Umrah</a>
                                        <ul>
                                            <li><a href="#!">Umrah Packages</a></li>
                                            <li><a href="#!">Benefit of Umrah</a></li>
                                            <li><a href="#!">How to perform Umrah</a></li>
                                            <li><a href="#!">Umrah Visa Requirement</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown"><a href="#">Hajj</a>
                                        <ul>
                                            <li><a href="#!">Hajj Pre Registration</a></li>
                                            <li><a href="#!">Hajj Visa Requirements</a></li>
                                            <li><a href="#!">Hajj Packages 2025</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown"><a href="#">Facilities</a>
                                        <ul>
                                            <li><a href="#!">Visa Processing</a></li>
                                            <li><a href="#!">Hotel Booking</a></li>
                                            <li><a href="#!">Ziyarat Tours</a></li>
                                            <li><a href="#!">Air Ticketing</a></li>
                                            <li><a href="#!">Umrah Training</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown"><a href="#">Guidance</a>
                                        <ul>
                                            <li><a href="#!">Umrah Guideline in English</a></li>
                                            <li><a href="#!">Umrah Guideline in Bangla</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown"><a href="#">Management Board</a>
                                        <ul>
                                            <li><a href="#!">Special Da'e</a></li>
                                            <li><a href="#!">Umrah Guides</a></li>
                                            <li><a href="#!">Sharia Consultant</a></li>
                                            <li><a href="#!">Business Associate</a></li>
                                            <li><a href="#!">Flagship Agency</a></li>
                                            <li><a href="#!">Board of Director</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown"><a href="#">About Us</a>
                                        <ul>
                                            <li><a href="#!">Customer Reviews</a></li>
                                            <li><a href="#!">Awards & Affiliations</a></li>
                                            <li><a href="#!">Hours & Location</a></li>
                                            <li><a href="#!">Blog</a></li>
                                            <li><a href="#!">Career Opportunity</a></li>
                                            {{-- <li><a href="#!">Contact Us</a></li> --}}
                                        </ul>
                                    </li>

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

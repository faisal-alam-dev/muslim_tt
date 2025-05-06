<footer class="main-footer style-two">
    <div class="footer_bg-image" style="background-image: url({{ asset('frontend/assets/images/background/footer-bg.jpg') }})"></div>
    <div class="auto-container">
        <div class="inner-container">
            <!-- Widgets Section -->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
                                    <div class="footer-logo"><a href="{{ route('frontend.index') }}"><img src="{{ asset('uploads/demo_logo_white.png') }}" alt="" title="" width="184px"></a></div>
                                    <!-- Footer List -->
                                    <div class="footer_list">
                                        <li>{!! $site_setting->head_address !!}</li>
                                        <li>{{ $site_setting->site_email }}</li>
                                        <li>{!! $site_setting->site_phone !!}</li>
                                        <li>{!! $site_setting->site_phone_alter !!}</li>
                                    </div>
                                    <!-- Social Box -->
                                    <div class="footer_socials">
                                        <a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                        <a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h4 class="footer-title">Quick Link</h4>
                                    <ul class="footer-list">
                                        <li><a href="{{ route('frontend.umrah.packages') }}">Umrah Packages</a></li>
                                        <li><a href="{{ route('frontend.hajj.packages') }}">Hajj Packages</a></li>
                                        <li><a href="{{ route('frontend.how.to.perform.umrah') }}">How To Perform Umrah</a></li>
                                        <li><a href="{{ route('frontend.terms.of.use') }}">Terms of use</a></li>
                                        <li><a href="{{ route('frontend.privacy.policy') }}">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h4 class="footer-title">Guidance</h4>
                                    <ul class="footer-list">
                                        <li><a href="{{ route('frontend.guideline.in.english') }}">Umrah Guideline English</a></li>
                                        <li><a href="{{ route('frontend.guideline.in.bangla') }}">Umrah Guideline Bangla</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h4 class="footer-title">Facilities</h4>
                                    <ul class="footer-list">
                                        <li><a href="{{ route('frontend.visa.processing') }}">Visa Processing</a></li>
                                        <li><a href="{{ route('frontend.hotel.booking') }}">Hotel Booking</a></li>
                                        <li><a href="{{ route('frontend.ziyarat.tours') }}">Ziyarat Tours</a></li>
                                        <li><a href="{{ route('frontend.air.ticketing') }}">Air Ticketing</a></li>
                                        <li><a href="{{ route('frontend.umrah.training') }}">Umrah Training</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="footer_bottom-bg" style="background-image: url({{ asset('frontend/assets/images/background/footer-bg_2.jpg') }})"></div>
        <div class="auto-container">
            <div class="text-center">
                <div class="copyright">All rights reserved 2025 &copy; <a href="{{ route('frontend.index') }}">Muslim Tour and Travels</a>. Developed by <a href="https://nebulaitbd.com/" target="_blank;">Nebula IT.</a></div>
            </div>
        </div>
    </div>
</footer>

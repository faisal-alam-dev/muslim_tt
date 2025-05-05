@extends('frontend.master')

@section('frontend_title', 'Umrah Training')

@section('frontend_content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend/assets/images/background/page-title.jpg') }})">
        <div class="auto-container">
            <h2>Umrah Training</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li>Facilities</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- Umrah Hajj training program -->
    <section class="courses-three">

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 45px;">Umrah Hajj training program for Bangladeshi Pilgrims</h3>
                        <p class="text-justify">
                            At <b>Muslim Tour & Travels</b>, we recognize that the sacred journeys of Umrah and Hajj are deeply transformative experiences for every Muslim. To ensure Bangladeshi pilgrims are fully prepared, we offer a <b>specialized Umrah & Hajj training program</b> in Dhaka, designed to provide essential guidance for a spiritually rewarding pilgrimage.
                        </p>
                        <p class="text-justify">
                            Our program focuses on equipping pilgrims with <b>practical knowledge</b>, step-by-step rituals, and valuable tips to make their journey smooth and meaningful. <a href="{{ route('frontend.contact.us') }}" rel="nofollow">Register today</a> for our upcoming training sessions and embark on your spiritual journey with confidence and devotion.
                        </p>
                        <!-- Button Box -->
                        <div class="welcome-three_button">
                            <a href="{{ route('frontend.contact.us') }}" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Register for next training session</span>
                                    <span class="text-two">Register for next training session</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/hajj-and-umrah-training.png') }}" alt="" />
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Umrah Hajj training program -->


    <!-- Join Muslim Tour & Travels -->
    <section class="courses-three">

        <div class="courses-three_bg" style="background-image:url({{ asset('frontend/assets/images/background/3.jpg') }})"></div>

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/join-hijaz-hajj-and-umrah-kafela.png') }}" alt="" />
                        </div>
                    </div>
                </div>

                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 45px;">Join Muslim Tour & Travels for an enlightening journey</h3>
                        <p class="text-justify"> Join <b>Muslim Tour & Travels</b> for an enlightening journey designed to deepen your spiritual connection. We are committed to providing you with the <b>best guidance</b>, seamless travel arrangements, and a profound understanding of the sacred rituals of Hajj and Umrah. </p>
                        <p class="text-justify"> Embark on a soul-stirring pilgrimage that will <b>elevate your faith</b> and leave a lasting impact on your heart. </p>
                        <!-- Button Box -->
                        <div class="welcome-three_button">
                            <a href="{{ route('frontend.contact.us') }}" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Call for Booking!</span>
                                    <span class="text-two">Call for Booking!</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Join Muslim Tour & Travels -->


    <!-- Why Choose us -->
    <section class="courses-three">

        <div class="auto-container">

            <div class="row clearfix align-items-center">
                <div class="scholar-detail_content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-3">Why Choose Us for Muslim Tour & Travels Training?</h3>
                        <p class="text-justify">
                            By choosing <b>Muslim Tour & Travels</b> for your training, you gain access to our expertise, <b>tailored programs</b>,
                            hands-on guidance, focus on halal travel excellence, and a trusted reputation in Islamic tourism.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row clearfix align-items-center">
                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title" style="font-size: 25px;">Industry Expertise</h3>
                        <p class="text-justify">
                            Our team consists of seasoned professionals with in-depth knowledge of <b>halal tourism</b>, Islamic travel ethics, and
                            global Muslim-friendly destinations. We ensure you receive authoritative training aligned with Shariah principles.
                        </p>

                        <h3 class="scholar-detail_title" style="font-size: 25px;">Customized Learning</h3>
                        <p class="text-justify">
                            We design our programs to meet the specific needs of Muslim travelers and travel professionals. From cultural sensitivities
                            to logistical excellence, our training equips you with <b>practical, real-world skills</b> for exceptional service.
                        </p>

                        <!-- Button Box -->
                        <div class="welcome-three_button">
                            <a href="{{ route('frontend.contact.us') }}" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Enroll Now</span>
                                    <span class="text-two">Enroll Now</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/hajj-and-umrah-training.png') }}" alt="Muslim Travel Training" />
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- End Why Choose us -->


    <!-- Comprehensive training modules -->
    <section class="courses-three">

        <div class="courses-three_bg" style="background-image:url({{ asset('frontend/assets/images/background/3.jpg') }})"></div>

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/emotional-and-spiritual-support.png') }}" alt="Muslim Travel Training" />
                        </div>
                    </div>
                </div>

                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-3">Comprehensive Training Modules</h3>
                        <p class="text-justify">
                            Our structured training covers Hajj & Umrah essentials—rituals, historical significance, health precautions, and travel etiquette. With expert-led sessions, you’ll gain deep insight into each step, ensuring a spiritually fulfilling and well-prepared journey.
                        </p>

                        <h3 class="scholar-detail_title" style="font-size: 25px;">Interactive Learning Sessions</h3>
                        <p class="text-justify">
                            We combine theory with live demonstrations, enabling you to practice rituals like Tawaf and Sa’i under supervision. This <b>interactive method</b> boosts confidence and ensures accuracy in performing sacred rites.
                        </p>

                        <h3 class="scholar-detail_title" style="font-size: 25px;">Spiritual Guidance & Support</h3>
                        <p class="text-justify">
                            Pilgrimage is a profound emotional journey. Our mentors provide spiritual counseling, fostering a supportive environment to address doubts, ease anxieties, and enrich your connection with the divine.
                        </p>

                        <!-- Button Box -->
                        <div class="welcome-three_button">
                            <a href="{{ route('frontend.contact.us') }}" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Contact Us Today!</span>
                                    <span class="text-two">Contact Us Today!</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Comprehensive training modules -->


    <!-- FAQ -->
    <section class="courses-three">

        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title style-two centered">
                <h2 class="sec-title_heading">Frequently asked questions</h2>
            </div>

            <div class="row clearfix">

                <div class="faq-one_accordian-column col-lg-12 col-md-12 col-sm-12">

                    <div class="accordian-outer">

                        <ul class="accordion-box_two">

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn active">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    What is Umrah Training?
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text text-justify">
                                            Umrah Training provides guidance on rituals, rules, and etiquette for performing Umrah correctly.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    Why is Umrah Training important?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text text-justify">
                                            It ensures pilgrims understand the steps of Umrah, avoid mistakes, and fulfill their worship properly.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    What topics are covered in Umrah Training?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text text-justify">
                                            It includes Ihram rules, Tawaf, Sa'i, dua memorization, and Makkah/Madinah etiquette.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    Is Umrah Training mandatory before traveling?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text text-justify">
                                            While not mandatory, it is highly recommended for a smooth and spiritually rewarding journey.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    Do you provide online Umrah Training sessions?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text text-justify">
                                            Yes, we offer live and recorded sessions for convenience.
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- End FAQ -->

@endsection

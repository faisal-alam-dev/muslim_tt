@extends('frontend.master')

@section('frontend_title', 'Ziyarat Tours')

@section('frontend_content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend/assets/images/background/page-title.jpg') }})">
        <div class="auto-container">
            <h2>Ziyarat Tours</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li>Facilities</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- Common Ziyarat Tours -->
    <section class="courses-three">

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 45px;">Common Ziyarat Tours During Umrah Trip from Bangladesh</h3>
                        <p class="text-justify">
                            For pilgrims from Bangladesh, <b>Muslim Tour & Travels</b> offers enriching <b>Ziyarat tours</b> during your Umrah journey, blending deep spiritual devotion with historical exploration. Umrah is a sacred pilgrimage that allows Muslims to <b>reconnect with their faith</b> and seek divine blessings.
                        </p>
                        <p class="text-justify">
                            Our carefully planned Ziyarat tours include visits to <b>significant Islamic sites</b> in Makkah and Madinah, such as the Cave of Hira, Masjid Aisha (Tan’im), and the historical battleground of Uhud. These sacred journeys provide <b>spiritual upliftment</b> and a deeper connection to Islamic heritage. Let us guide you on a transformative Umrah trip with meaningful <b>Ziyarat tours from Bangladesh</b>.
                        </p>
                        <!-- Button Box -->
                        <div class="welcome-three_button">
                            <a href="{{ route('frontend.umrah.packages') }}" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Plan your next umrah visit</span>
                                    <span class="text-two">Plan your next umrah visit</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/ziyarat-tours-for-hajj-and-umrah-pilgrims-from-bangladesh.png') }}" alt="" />
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Common Ziyarat Tours -->


    <!-- Significance of Ziyarat Tours -->
    <section class="courses-three">

        <div class="courses-three_bg" style="background-image:url({{ asset('frontend/assets/images/background/3.jpg') }})"></div>

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/significance-of-ziyarat-tours.png') }}" alt="" />
                        </div>
                    </div>
                </div>

                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 45px;">Significance of Ziyarat Tours</h3>
                        <p class="text-justify">
                            Ziyarat, meaning "pilgrimage" in Arabic, involves visiting sacred Islamic sites linked to the Prophet Muhammad (PBUH), his companions, and other revered figures. Ziyarat tours offer Hajj and Umrah pilgrims a unique opportunity to connect with Islamic history, strengthen their faith, and experience the profound <b>spiritual significance</b> of these holy places.
                        </p>
                        <p class="text-justify">
                            For Bangladeshi Muslims, these tours provide a chance to reflect on the sacrifices of early Muslims and seek blessings. By <b>embarking on a Ziyarat journey</b>, pilgrims can enrich their religious understanding and create lasting spiritual memories.
                            <a href="{{ route('frontend.contact.us') }}" rel="nofollow">Contact us today</a> to explore our curated Ziyarat tours in Makkah, Medina, and beyond.
                        </p>
                        <!-- Button Box -->
                        <div class="welcome-three_button">
                            <a href="{{ route('frontend.contact.us') }}" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Explore Two Holy Cities</span>
                                    <span class="text-two">Explore Two Holy Cities</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Significance of Ziyarat Tours -->


    <!-- Ziyarat destinations in Makkah -->
    <section class="courses-three">

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 45px;">Ziyarat destinations in Makkah</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="scholar-detail_list mt-0">
                                    <li>Masjid Al-Haram (The Grand Mosque)</li>
                                    <li>Kaaba (House of Allah)</li>
                                    <li>Maqam Ibrahim (Station of Prophet Ibrahim)</li>
                                    <li>Safa & Marwa (Hills of Sa'i)</li>
                                    <li>Zamzam Well</li>
                                    <li>Jannat Al-Mu'alla (Historic Cemetery)</li>
                                    <li>Jabal Al-Noor (Mountain of Light)</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="scholar-detail_list mt-0">
                                    <li>Cave of Hira (Where Quran was first revealed)</li>
                                    <li>Jabal Thawr (Cave of Thawr)</li>
                                    <li>Masjid Ayesha (Miqat for Umrah)</li>
                                    <li>Masjid Al-Jinn (Where Jinn embraced Islam)</li>
                                    <li>Masjid Namirah (Arafat)</li>
                                    <li>Mina (Tent City for Hajj)</li>
                                    <li>Muzdalifah (Hajj Ritual Site)</li>
                                </ul>
                            </div>
                        </div>
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

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/ziyarat-destinations-in-makkah.png') }}" alt="" />
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Ziyarat destinations in Makkah -->


    <!-- Ziyarat destinations in Medina -->
    <section class="courses-three">

        <div class="courses-three_bg" style="background-image:url({{ asset('frontend/assets/images/background/3.jpg') }})"></div>

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/ziyarat-destinations-in-medina.png') }}" alt="" />
                        </div>
                    </div>
                </div>

                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 45px;">Ziyarat destinations in Medina</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="scholar-detail_list mt-0">
                                    <li>Masjid-e-Nabawi (The Prophet's Mosque)</li>
                                    <li>Roza Mubarak (Prophet Muhammad's ﷺ Sacred Chamber)</li>
                                    <li>Riyaad-ul-Jannah (The Garden of Paradise)</li>
                                    <li>Jannat-ul-Baqi (The Blessed Graveyard)</li>
                                    <li>Masjid-e-Quba (First Mosque in Islam)</li>
                                    <li>Masjid-e-Qiblatain (Mosque of Two Qiblas)</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="scholar-detail_list mt-0">
                                    <li>Ustuwaanah Aisha (Column of Aisha RA)</li>
                                    <li>Masjid-e-Khandaq (Trench Mosque)</li>
                                    <li>Masjid-e-Juma (Friday Prayer Mosque)</li>
                                    <li>Bir-e-Usman (Well of Usman RA)</li>
                                    <li>Masjid Abu Bakar & Masjid Bilal</li>
                                    <li>Wadi-e-Jinn (Valley of the Jinn)</li>
                                    <li>Battlefield of Uhud & Graves of Martyrs</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Button Box -->
                        <div class="welcome-three_button">
                            <a href="{{ route('frontend.contact.us') }}" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Book Your Journey Now!</span>
                                    <span class="text-two">Book Your Journey Now!</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Ziyarat destinations in Medina -->


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
                                    What is included in a Ziyarat Tour package?
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text text-justify">
                                            Typically includes flights, hotels, guided visits to holy sites, transportation, and meals (if specified).
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    Which holy sites are covered in the tour?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text text-justify">
                                            Common destinations include Makkah, Madinah, Jerusalem (Al-Aqsa), Karbala, Najaf, and other significant Islamic landmarks
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    Are Ziyarat Tours suitable for families?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text text-justify">
                                            Yes, many tours are family-friendly with accommodations and itineraries catering to all age groups.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    What is the best time to book a Ziyarat Tour?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text text-justify">
                                            Recommended during off-peak seasons (avoid Hajj/Ramadan) for better prices and fewer crowds.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    Do you provide visa assistance for Ziyarat Tours?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text text-justify">
                                            Yes, most tour operators assist with visa processing for the required destinations.
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

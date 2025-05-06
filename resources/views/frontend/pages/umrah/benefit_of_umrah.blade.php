@extends('frontend.master')

@section('frontend_title', 'Benefit Of Umrah')

@section('frontend_content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend/assets/images/background/page-title.jpg') }})">
        <div class="auto-container">
            <h2>Benefit Of Umrah</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li>Umrah</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- Benefits of Umrah -->
    <section class="courses-three">

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 45px;">Benefits of Umrah: Spiritual rewards of Umrah pilgrimage</h3>
                        <p class="text-justify">Umrah is a sacred pilgrimage that cleanses the soul and brings immense spiritual blessings. The Prophet Muhammad (PBUH) said, <em>"The performance of Umrah is an expiation for the sins committed between it and the previous one."</em> (Bukhari & Muslim).</p>
                        <p class="text-justify">Performing Umrah with sincerity earns Allah's mercy, forgiveness, and a renewed connection to faith. Pilgrims experience inner peace, spiritual elevation, and the joy of worshiping in Islam’s holiest sites.</p>
                        <!-- Button Box -->
                        <div class="welcome-three_button">
                            <a href="{{ route('frontend.umrah.packages') }}" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Book Your Spiritual Journey Now</span>
                                    <span class="text-two">Book Your Spiritual Journey Now</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/benefits-of-umrah.png') }}" alt="Hajj Visa Requirements 2025" />
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- End Benefits of Umrah -->


    <!-- Umrah -->
    <section class="courses-three">

        <div class="courses-three_bg" style="background-image:url({{ asset('frontend/assets/images/background/3.jpg') }})"></div>

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/spiritual-rewards-of-umrah.png') }}" alt="" />
                        </div>
                    </div>
                </div>

                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 45px;">Umrah: Journey of Spiritual Healing</h3>
                        <ul class="scholar-detail_list mt-0">
                            <li><b>Spiritual Renewal:</b> Umrah is a sacred journey that cleanses the heart, strengthens faith, and brings peace to the soul through devotion and worship.</li>
                            <li><b>Divine Connection:</b> From entering the state of Ihram to performing Tawaf and Sa'i, every ritual deepens your bond with Allah and purifies intentions.</li>
                            <li><b>Mercy & Forgiveness:</b> Sincere repentance during Umrah opens doors to Allah’s boundless mercy, offering a chance to erase past sins and start anew.</li>
                            <li><b>Hadith:</b> The Prophet (PBUH) said, “The performers of Hajj and Umrah are the guests of Allah. If they call upon Him, He answers them, and if they seek His forgiveness, He forgives them.” <b>(Ibn Majah)</b></li>
                        </ul>
                        <!-- Button Box -->
                        <div class="welcome-three_button">
                            <a href="tel: +88 0XXXX XXX XXX" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Talk To Our Consultant</span>
                                    <span class="text-two">Talk To Our Consultant</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Umrah -->


    <!-- Personal benefits -->
    <section class="courses-three">

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 45px;">Personal benefits of Umrah</h3>
                        <ul class="scholar-detail_list mt-0">
                            <li><b>Spiritual purification:</b> Umrah cleanses the soul, forgives sins, and renews one’s commitment to a righteous life in the sacred atmosphere of Makkah and Madinah.</li>
                            <li><b>Deepened connection with Allah:</b> The rituals of Umrah, such as Tawaf and Sa’i, strengthen devotion and bring believers closer to their Creator through worship and supplication.</li>
                            <li><b>Personal growth & humility:</b> The journey fosters patience, gratitude, and humility, teaching valuable life lessons through sacrifice and devotion.</li>
                        </ul>
                        <!-- Button Box -->
                        <div class="welcome-three_button">
                            <a href="{{ route('frontend.contact.us') }}" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Contact Us Today</span>
                                    <span class="text-two">Contact Us Today</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/personal-benefits-of-umrah.png') }}" alt="" />
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Personal benefits -->


    <!-- Social benefits -->
    <section class="courses-three">

        <div class="courses-three_bg" style="background-image:url({{ asset('frontend/assets/images/background/3.jpg') }})"></div>

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/social-benifits.png') }}" alt="" />
                        </div>
                    </div>
                </div>

                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 45px;">Social benefits of Umrah</h3>
                        <ul class="scholar-detail_list mt-0">
                            <li><b>Unity and brotherhood: </b> Umrah brings Muslims from around the world together, strengthening bonds of faith and fostering a sense of global Muslim unity.</li>
                            <li><b>Cultural enrichment: </b> Meeting pilgrims from diverse backgrounds allows for meaningful exchanges, deepening appreciation for the Ummah's rich traditions.</li>
                            <li><b>Spiritual connection: </b> Sharing this sacred journey with loved ones and fellow believers enhances faith, humility, and communal harmony.</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Social benefits -->


    <!-- Health benefits -->
    <section class="courses-three">

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 45px;">Social benefits of Umrah</h3>
                        <ul class="scholar-detail_list mt-0">
                            <li><b>Physical activity:</b> Performing Umrah involves walking (Tawaf, Sa'i) and physical rituals, promoting heart health, stamina, and overall fitness.</li>
                            <li><b>Mental well-being:</b> The spiritual journey of Umrah reduces stress, enhances mindfulness, and brings inner peace through devotion and connection with Allah.</li>
                            <li><b>Emotional relief:</b> Seeking forgiveness and supplicating in sacred places like the Kaaba uplifts the heart, easing anxiety and fostering emotional healing.</li>
                            <li><b>Social bonding:</b> Umrah strengthens community ties as pilgrims unite in worship, sharing a profound experience of faith and brotherhood.</li>
                        </ul>
                    </div>
                </div>

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/health-benefits-of-umrah.png') }}" alt="" />
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Health benefits -->


    <!-- Benefits and rewards -->
    <section class="courses-three">

        <div class="courses-three_bg" style="background-image:url({{ asset('frontend/assets/images/background/3.jpg') }})"></div>

        <div class="auto-container">

            <div class="row clearfix align-items-center">
                <div class="scholar-detail_content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 45px;">Benefits and Rewards of Performing Umrah in Ramadan</h3>
                        <p class="text-justify">Performing Umrah in Ramadan is a spiritually enriching experience with immense blessings. Here are some key benefits:</p>
                    </div>
                </div>
            </div>

            <div class="row clearfix align-items-center">
                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <ul class="scholar-detail_list mt-0">
                            <ul class="theme-list">
                                <li><b>Equal to Hajj:</b> The Prophet (PBUH) said, <i>"Umrah in Ramadan equals Hajj with me"</i> <b>(Bukhari)</b>.</li>
                                <li><b>Multiplied Rewards:</b> Every good deed in Ramadan is multiplied, making Umrah even more virtuous.</li>
                                <li><b>Spiritual Purification:</b> A chance to seek forgiveness and renew faith in the holy month.</li>
                                <li><b>Laylat al-Qadr:</b> Possibility of witnessing the Night of Power, better than 1,000 months.</li>
                                <li><b>Sacred Atmosphere:</b> Experience the Haramain’s heightened spirituality in Ramadan.</li>
                                <li><b>Global Brotherhood:</b> Join millions in worship, fostering unity among Muslims.</li>
                            </ul>
                        </ul>
                    </div>
                </div>

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/forgiveness-of-sins.png') }}" alt="Umrah in Ramadan" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix align-items-center">
                <div class="scholar-detail_content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <p class="text-justify">Embark on this blessed journey with Muslim Tour & Travels and seize the unique rewards of Ramadan Umrah!</p>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- End Benefits and rewards -->


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
                                    What are the spiritual benefits of performing Umrah?
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text text-justify">
                                            Umrah purifies the soul, forgives sins, and brings a Muslim closer to Allah. It is a form of worship that strengthens faith and provides inner peace.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    Does Umrah have any health benefits?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text text-justify">
                                            Yes, the physical activities during Umrah (Tawaf, Sa’i, walking) promote fitness, reduce stress, and improve mental well-being.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    How does Umrah benefit family bonds?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text text-justify">
                                            Performing Umrah with family increases love, patience, and unity while sharing a blessed spiritual journey together.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    What are the rewards of Umrah in Ramadan?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text text-justify">
                                            Umrah in Ramadan is equal to Hajj in reward (as per Hadith), offering immense blessings and multiplied good deeds.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    Can Umrah remove poverty and bring prosperity?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text text-justify">
                                            Umrah is a means of seeking Allah’s blessings, and many believe it can increase rizq (sustenance) by earning divine mercy and barakah.
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

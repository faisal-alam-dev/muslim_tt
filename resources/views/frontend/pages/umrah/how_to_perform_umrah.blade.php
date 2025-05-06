@extends('frontend.master')

@section('frontend_title', 'How To Perform Umrah')

@section('frontend_content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend/assets/images/background/page-title.jpg') }})">
        <div class="auto-container">
            <h2>How To Perform Umrah</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li>Umrah</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- A Step-by-Step Guideline -->
    <section class="courses-three">

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 45px;">How to Perform Umrah from Bangladesh | A Step-by-Step Guideline</h3>
                        <p class="text-justify">Umrah, a deeply spiritual journey, is a voluntary pilgrimage that brings Muslims closer to Allah. At Muslim Tour & Travels, we simplify the process with a clear, step-by-step guide to performing Umrah from Bangladesh, ensuring your pilgrimage is smooth and spiritually fulfilling.</p>
                        <p class="text-justify">From visa processing to sacred rituals in Makkah, our expert team provides end-to-end support, making your Umrah experience seamless and memorable. Trust us to handle every detail while you focus on devotion.</p>
                        <!-- Button Box -->
                        <div class="welcome-three_button">
                            <a href="{{ route('frontend.contact.us') }}" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Get A Free Consultation</span>
                                    <span class="text-two">Get A Free Consultation</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/umrah-perform-guideline.png') }}" alt="Umrah Step-by-Step Guide from Bangladesh" />
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End A Step-by-Step Guideline -->


    <!-- Step - 01 -->
    <section class="courses-three">

        <div class="courses-three_bg" style="background-image:url({{ asset('frontend/assets/images/background/3.jpg') }})"></div>

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 45px;"><span>Step - 01</span> The Niyyah | Pure Intention</h3>
                        <p class="text-justify">Begin your sacred journey with a sincere Niyyah (intention) for Umrah, made at or near the Miqat. It is recommended (Mustahabb) to declare your intention both verbally and in your heart.</p>
                        <p class="text-justify">Here are two common Arabic intentions you may recite:</p>
                        <p class="text-justify"><b>اللَّهُمَّ إِنِّيْ أُرِيْدُ الْعُمْرَةَ</b>
                            <br>
                            <b>Meaning:</b> O Allah, I intend to perform Umrah.
                        </p>
                        <p class="text-justify"><b>اللَّهُمَّ إِنِّيْ أُرِيْدُ الْعُمْرَةَ فَيَسِّرْهَا لِيْ وَتَقَبَّلْهَا مِنِّيْ</b>
                            <br>
                            <b>Meaning:</b> O Allah, I intend to perform Umrah; make it easy for me and accept it from me.
                        </p>
                    </div>
                </div>

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/the-niyyah.png') }}" alt="Umrah Step-by-Step Guide | Pure Intention (Niyyah)" />
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Step - 01 -->


    <!-- Step - 02 -->
    <section class="courses-three">

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/ihram.png') }}" alt="Umrah Step-by-Step Guide | Ihram for Umrah" />
                        </div>
                    </div>
                </div>

                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 45px;"><span>Step - 02</span> Ihram: The Sacred Attire for Umrah</h3>
                        <p class="text-justify">Ihram symbolizes purity and equality before Allah. Men wear two seamless white cloths, while women dress in modest, loose-fitting clothing. Before entering Ihram, perform Ghusl (ritual purification) and offer 2 Rakahs of Salah. Remember, Ihram is not just clothing—it marks the spiritual beginning of your sacred journey.</p>
                        <!-- Button Box -->
                        <div class="welcome-three_button">
                            <a href="{{ route('frontend.contact.us') }}" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Schedule A Meeting</span>
                                    <span class="text-two">Schedule A Meeting</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Step - 02 -->


    <!-- Step - 03 -->
    <section class="courses-three">

        <div class="courses-three_bg" style="background-image:url({{ asset('frontend/assets/images/background/3.jpg') }})"></div>

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 45px;"><span>Step - 03</span> Reciting Talbiyah</h3>
                        <p class="text-justify">After making your Niyyah, recite the Talbiyah to affirm your intention and enter the state of Ihram. According to Hanafi and Maliki schools, reciting Talbiyah is Wajib (obligatory).</p>
                        <p class="text-justify"><b>The Talbiyah is:</b> <br>
                            <b>لَبَّيْكَ اللهُمَّ لَبَّيْكَ - لَبَّيْكَ لَا شَرِيْكَ لَكَ لَبَّيْكَ - إِنَّ الْحَمْدَ وَالنِّعْمَةَ لَكَ وَالْمُلْكَ - لَا شَرِيْكَ لَكَ</b> <br>
                            <b>Pronunciation:</b> Labbayk Allahumma labbayk, labbayka la sharika laka labbayk, innal-hamda wan-ni’mata, laka wal-mulk, la sharika lak. <br>
                            <b>Meaning:</b> "At Your service, O Allah, at Your service. At Your service, You have no partner. All praise, blessings, and dominion are Yours. You have no partner."
                        </p>
                    </div>
                </div>

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/reciting-talbiyah.png') }}" alt="Reciting Talbiyah in Umrah | Muslim Tour & Travels" />
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Step - 03 -->


    <!-- Step - 04 -->
    <section class="courses-three">

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/tawaf.png') }}" alt="Umrah Step-by-Step Guide | Tawaf Around Ka'abah" />
                        </div>
                    </div>
                </div>

                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 45px;"><span>Step - 04</span> Tawaf | Encircling the Holy Ka'abah Seven Times</h3>
                        <p class="text-justify">Begin Tawaf by circling the Ka'abah seven times in a counterclockwise direction, starting from the Black Stone (Hajar al-Aswad). This sacred act symbolizes the unity of believers in worshiping Allah and reflects the eternal devotion of the heart towards the Divine.</p>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Step - 04 -->


    <!-- Step - 05 -->
    <section class="courses-three">

        <div class="courses-three_bg" style="background-image:url({{ asset('frontend/assets/images/background/3.jpg') }})"></div>

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 45px;"><span>Step - 05</span> Safa Marwa and Sa'i</h3>
                        <p class="text-justify">After Tawaf, perform Sa'i by walking seven times between the hills of Safa and Marwah. This ritual honors Hagar’s desperate search for water for her son Ismail, symbolizing trust in Allah’s mercy and unwavering patience.</p>
                        <p class="text-justify">For Sa'i to be valid, ensure the following conditions are met:</p>
                        <ul class="scholar-detail_list mt-0">
                            <li>Perform Sa'i in person (unless excused)</li>
                            <li>Begin Sa'i only after entering Ihram</li>
                            <li>Maintain Ihram until Sa'i is completed</li>
                            <li>Start at Safa and end at Marwa</li>
                            <li>Complete Tawaf before Sa'i</li>
                            <li>Walk all seven rounds (unless physically unable)</li>
                        </ul>
                        <!-- Button Box -->
                        <div class="welcome-three_button">
                            <a href="tel: +88 0XXXX XXX XXX" rel="nofollow" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Talk To Our Shariah Advisor</span>
                                    <span class="text-two">Talk To Our Shariah Advisor</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/sai.png') }}" alt="Performing Sa'i between Safa and Marwah | Muslim Tour & Travels" />
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Step - 05 -->


    <!-- Step - 06 -->
    <section class="courses-three">

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/taqsir.png') }}" alt="Umrah Step-by-Step Guide | Halq or Taqsir" />
                        </div>
                    </div>
                </div>

                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 45px;"><span>Step - 06</span> Halq or Taqsir</h3>
                        <p class="text-justify">Conclude your Umrah by performing Halq (shaving the head) or Taqsir (cutting a small portion of hair). Men are encouraged to shave their heads completely as a symbol of submission, while women should trim a fingertip's length of their hair. This act signifies spiritual purification and marks the completion of your sacred journey.</p>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Step - 06 -->


    <!-- Step - 07 -->
    <section class="courses-three">

        <div class="courses-three_bg" style="background-image:url({{ asset('frontend/assets/images/background/3.jpg') }})"></div>

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 45px;"><span>Step - 07</span> Visiting Madinah - Masjid an Nabawi</h3>
                        <p class="text-justify">Experience the serenity of Madinah, the City of the Prophet (peace be upon him), and visit the revered Masjid an-Nabawi. Offer prayers in this sacred mosque, send blessings upon the Prophet (PBUH), and visit his noble resting place. This spiritual journey brings immense peace and blessings to every pilgrim.</p>

                        <!-- Button Box -->
                        <div class="welcome-three_button">
                            <a href="{{ route('frontend.contact.us') }}" rel="nofollow" class="theme-btn btn-style-one">
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
                            <img src="{{ asset('frontend/assets/images/al-masjid-an-nabawi.png') }}" alt="Visiting Madinah - Masjid an Nabawi | Muslim Tour & Travels" />
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Step - 07 -->


    <!-- Step - 08 -->
    <section class="courses-three">

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/praying-at-mount-arafat-and-muzdalifah.png') }}" alt="Umrah Step-by-Step Guide | Additional Activities" />
                        </div>
                    </div>
                </div>

                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 45px;"><span>Step - 08</span> Additional activities during the Umrah journey</h3>
                        <ul class="scholar-detail_list mt-0">
                            <li><b>Visiting Historical Islamic Sites</b><br> Explore significant places like the Cave of Hira, Jabal al-Nour, and Masjid al-Aisha to deepen your connection with Islamic history.</li>
                            <li><b>Praying in Rawdah (Madinah)</b><br> If traveling to Madinah, pray in the Rawdah of the Prophet’s Mosque (Masjid an-Nabawi), a highly blessed area.</li>
                            <li><b>Reciting Quran & Supplications</b><br> Maximize your spiritual journey by dedicating time to Quran recitation, dhikr, and making heartfelt duas at sacred locations.</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Step - 08 -->


    <!-- FAQ -->
    <section class="courses-three">

        <div class="courses-three_bg" style="background-image:url({{ asset('frontend/assets/images/background/3.jpg') }})"></div>

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
                                    What is Umrah, and how is it different from Hajj?
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text text-justify">
                                            Umrah is a voluntary Islamic pilgrimage to Makkah that can be performed anytime, unlike Hajj, which is obligatory and has specific dates (8th–13th Dhul-Hijjah).
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    What are the main steps of Umrah?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text text-justify">
                                            The key steps are:
                                            <ul class="scholar-detail_list mt-0">
                                                <li><strong>Ihram</strong> (with intention and Talbiyah)</li>
                                                <li>Perform <strong>Tawaf</strong> (7 rounds around the Kaaba)</li>
                                                <li>Perform <strong>Sa’i</strong> (7 walks between Safa &amp; Marwah)</li>
                                                <li>Shave or trim hair (<strong>Tahallul</strong>) to exit Ihram.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    What documents are required for Umrah?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text text-justify">
                                            You need:
                                            <ul class="scholar-detail_list mt-0">
                                                <li>Valid passport</li>
                                                <li>Umrah visa (via approved agency)</li>
                                                <li>Vaccination certificates (e.g., meningitis)</li>
                                                <li>Confirmed travel &amp; accommodation bookings.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    Can women perform Umrah without a Mahram?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text text-justify">
                                            According to Saudi rules, women below 45 must be accompanied by a <b>Mahram</b> (male guardian). Women above 45 may travel in an organized group with restrictions.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    How long does Umrah take, and what’s the best time to go?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text text-justify">
                                            Umrah can be completed in <b>4–6 hours</b>, but most pilgrims stay <b>7–10 days</b>. The best times are during <b>Ramadan</b> (greater rewards) or cooler months (November–February).
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

    @extends('frontend.master')

    @section('frontend_title', 'Umrah Guideline in English')

    @section('frontend_content')

        <!-- Page Title -->
        <section class="page-title" style="background-image:url({{ asset('frontend/assets/images/background/page-title.jpg') }})">
            <div class="auto-container">
                <h2>Umrah Guideline in English</h2>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('frontend.index') }}">Home</a></li>
                    <li>Guidance</li>
                </ul>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- Detailed Umrah guidelines -->
        <section class="courses-three">

            <div class="auto-container">

                <div class="row clearfix align-items-center mb-4">
                    <div class="scholar-detail_content-column col-lg-12 col-md-12 col-sm-12">
                        <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <h3 class="scholar-detail_title"><span>-Journey of spiritual fulfillment-</span> Detailed Umrah guidelines | Step-by-step performing umrah</h3>
                        </div>
                    </div>
                </div>

                <div class="row clearfix align-items-center">

                    <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                        <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <p class="text-justify">Performing Umrah is a profound spiritual journey that purifies the soul and strengthens faith. As you prepare to visit the sacred cities of Makkah and Madinah, following the correct steps ensures your worship is accepted and fulfilling.</p>
                            <p class="text-justify">From entering Ihram to performing Tawaf and Sa’i, each step holds deep significance. This guide by <b>Muslim Tour & Travels</b> provides a step-by-step breakdown to help you perform Umrah with ease and devotion, maximizing the blessings of this sacred pilgrimage.</p>
                            <!-- Button Box -->
                            <div class="welcome-three_button">
                                <a href="{{ route('frontend.umrah.packages') }}" class="theme-btn btn-style-one">
                                    <span class="btn-wrap">
                                        <span class="text-one">Book Your Umrah Package</span>
                                        <span class="text-two">Book Your Umrah Package</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                        <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <div class="scholar-detail_image">
                                <img src="{{ asset('frontend/assets/images/detailed-umrah-guidelines.jpg') }}" alt="" />
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- End Detailed Umrah guidelines -->


        <!-- Understanding Umrah -->
        <section class="courses-three">

            <div class="courses-three_bg" style="background-image:url({{ asset('frontend/assets/images/background/3.jpg') }})"></div>

            <div class="auto-container">

                <div class="row clearfix align-items-center">

                    <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                        <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <div class="scholar-detail_image">
                                <img src="{{ asset('frontend/assets/images/understanding-umrah.png') }}" alt="" />
                            </div>
                        </div>
                    </div>

                    <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                        <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <h3 class="scholar-detail_title mb-3">Understanding Umrah: A Divine Pilgrimage</h3>
                            <p class="text-justify">Umrah is a sacred journey to Makkah, performed by Muslims to purify the soul and strengthen faith. Though optional, it holds immense spiritual significance, allowing believers to follow the Sunnah of Prophet Muhammad (PBUH), seek forgiveness, and renew their devotion to Allah.</p>
                            <h3 class="scholar-detail_title" style="font-size: 25px;">Umrah consists of four (4) essential rituals:</h3>
                            <ul class="scholar-detail_list mt-0">
                                <li>Ihram (Sacred State)</li>
                                <li>Tawaf (Circumambulation of the Kaaba)</li>
                                <li>Sa'i (Walking between Safa and Marwah)</li>
                                <li>Halq or Taqsir (Shaving or Trimming Hair)</li>
                            </ul>
                            <!-- Button Box -->
                            <div class="welcome-three_button">
                                <a href="tel:+88 0XXXX XXX XXX" class="theme-btn btn-style-one">
                                    <span class="btn-wrap">
                                        <span class="text-one">Plan Your Spiritual Journey</span>
                                        <span class="text-two">Plan Your Spiritual Journey</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- End Understanding Umrah -->


        <!-- Preparing for Umrah -->
        <section class="courses-three">

            <div class="auto-container">

                <div class="row clearfix align-items-center">
                    <div class="scholar-detail_content-column col-lg-12 col-md-12 col-sm-12">
                        <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <h3 class="scholar-detail_title mb-3">Preparing for Umrah: Step-by-Step Guide</h3>
                            <p class="text-justify">Preparing for Umrah is a sacred process that combines logistical planning with deep spiritual devotion. Follow these steps to ensure a blessed and fulfilling journey.</p>
                        </div>
                    </div>
                </div>

                <div class="row clearfix align-items-center">
                    <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                        <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <h3 class="scholar-detail_title" style="font-size: 25px;">1. Sincere Intention (Niyyah)</h3>
                            <p class="text-justify">Begin with a pure <b>niyyah</b> (intention) to perform Umrah solely for Allah’s sake. Renew your intention throughout the journey to maintain spiritual focus.</p>

                            <h3 class="scholar-detail_title" style="font-size: 25px;">2. Entering Ihram</h3>
                            <p class="text-justify">Before crossing the Miqat boundary, enter the state of <b>Ihram</b>—men wear two white cloths, while women dress modestly. Avoid prohibited acts like cutting hair, using perfume, or quarreling.</p>
                        </div>
                    </div>

                    <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                        <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <div class="scholar-detail_image">
                                <img src="{{ asset('frontend/assets/images/step-by-step-guide.jpg') }}" alt="Pilgrims performing Umrah" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix align-items-center">
                    <div class="scholar-detail_content-column col-lg-12 col-md-12 col-sm-12">
                        <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <h3 class="scholar-detail_title" style="font-size: 25px;">3. Reciting the Talbiyah</h3>
                            <p class="text-justify">Upon entering Ihram, recite the <b>Talbiyah</b> frequently:<br><br>لَبَّيْكَ اللهُمَّ لَبَّيْكَ، لَبَّيْكَ لَا شَرِيْكَ لَكَ لَبَّيْكَ، إِنَّ الْحَمْدَ وَالنِّعْمَةَ لَكَ وَالْمُلْكَ، لَا شَرِيْكَ لَكَ<br><i>"Labbayk Allahumma labbayk, labbayka la sharika laka labbayk, innal-hamda wan-ni’mata laka wal-mulk, la sharika lak."</i></p>

                            <h3 class="scholar-detail_title" style="font-size: 25px;">4. Spiritual Preparation</h3>
                            <p class="text-justify">Increase acts of worship (<i>dhikr</i>, prayer, Quran recitation) and seek forgiveness before departure. Mentally prepare to embrace humility and patience throughout Umrah.</p>

                            <!-- Button -->
                            <div class="welcome-three_button mt-4">
                                <a href="{{ route('frontend.contact.us') }}" class="theme-btn btn-style-one">
                                    <span class="btn-wrap">
                                        <span class="text-one">Plan Your Umrah Today</span>
                                        <span class="text-two">Plan Your Umrah Today</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- End Preparing for Umrah -->


        <!-- The rites of Umrah -->
        <section class="courses-three">

            <div class="courses-three_bg" style="background-image:url({{ asset('frontend/assets/images/background/3.jpg') }})"></div>

            <div class="auto-container">

                <div class="row clearfix align-items-center">
                    <div class="scholar-detail_content-column col-lg-12 col-md-12 col-sm-12">
                        <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <h3 class="scholar-detail_title mb-3">The Rites of Umrah: A Profound Spiritual Journey</h3>
                            <p class="text-justify">Umrah is a sacred pilgrimage that purifies the soul, strengthens faith, and brings believers closer to Allah. Through its timeless rituals, pilgrims experience deep devotion, humility, and spiritual renewal.</p>
                        </div>
                    </div>
                </div>

                <div class="row clearfix align-items-center">
                    <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                        <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <h3 class="scholar-detail_title" style="font-size: 25px;">Tawaf: Circling the House of Allah</h3>
                            <p class="text-justify">Pilgrims begin Umrah by performing Tawaf—seven rounds around the Kaaba in devotion to Allah. This act symbolizes unity, submission, and the eternal bond between the Creator and His servants.</p>
                            <h3 class="scholar-detail_title" style="font-size: 25px;">Sa’yee: The Walk of Faith</h3>
                            <p class="text-justify">Pilgrims reenact Hajar’s (AS) search for water by walking seven times between Safa and Marwah. This ritual embodies trust in Allah’s mercy and the perseverance of a mother’s love.</p>
                        </div>
                    </div>
                    <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                        <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <div class="scholar-detail_image">
                                <img src="{{ asset('frontend/assets/images/the-rites-of-umrah.png') }}" alt="Pilgrims performing Umrah" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix align-items-center">
                    <div class="scholar-detail_content-column col-lg-12 col-md-12 col-sm-12">
                        <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <h3 class="scholar-detail_title" style="font-size: 25px;">Halq or Taqsir: A Symbol of Renewal</h3>
                            <p class="text-justify">Men shave their heads (Halq) or trim their hair (Taqsir) to mark the completion of Umrah, signifying spiritual rebirth and detachment from worldly vanity.</p>
                            <h3 class="scholar-detail_title" style="font-size: 25px;">The Power of Du’a</h3>
                            <p class="text-justify">Umrah is a journey of heartfelt prayers. Pilgrims seek forgiveness, blessings, and divine guidance, leaving with a soul uplifted by the mercy of Allah.</p>
                            <div class="welcome-three_button">
                                <a href="{{ route('frontend.contact.us') }}" class="theme-btn btn-style-one">
                                    <span class="btn-wrap">
                                        <span class="text-one">Begin Your Spiritual Journey</span>
                                        <span class="text-two">Begin Your Spiritual Journey</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- End The rites of Umrah -->


        <!-- Umrah -->
        <section class="courses-three">

            <div class="auto-container">

                <div class="row clearfix align-items-center">
                    <div class="scholar-detail_content-column col-lg-12 col-md-12 col-sm-12">
                        <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <h3 class="scholar-detail_title mb-3">Umrah: A Journey of a Lifetime</h3>
                            <p class="text-justify">Umrah is a soul-stirring pilgrimage that brings Muslims closer to Allah, offering forgiveness, blessings, and spiritual renewal. This sacred journey to Makkah and Madinah is a chance to disconnect from worldly distractions and immerse in devotion. With Muslim Tour & Travels, experience a seamless and spiritually uplifting Umrah—a transformative voyage that leaves hearts purified and faith strengthened forever.</p>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- End Umrah -->


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
                                        What is Umrah?
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text text-justify">
                                                Umrah is a non-mandatory Islamic pilgrimage to Makkah that can be performed at any time of the year, unlike Hajj. It involves rituals like Ihram, Tawaf, Sa’i, and Halq/Taqsir.
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Block -->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                        What are the essential steps of Umrah?
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text text-justify">
                                                The key steps are:
                                                <ul class="scholar-detail_list mt-0">
                                                    <li>Enter Ihram (sacred state) at the Miqat.</li>
                                                    <li>Perform Tawaf (circumambulation) around the Kaaba.</li>
                                                    <li>Perform Sa’i (walking between Safa & Marwah).</li>
                                                    <li>Shave or trim hair (Halq/Taqsir) to complete Umrah.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Block -->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                        Do I need a visa for Umrah?
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text text-justify">
                                                Yes, you need a valid Umrah visa (or a tourist visa for some nationalities) issued by Saudi Arabia. Your travel agency can assist with the application.
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Block -->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                        What should I pack for Umrah?
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text text-justify">
                                                <ul class="scholar-detail_list mt-0">
                                                    <li>Ihram clothing (for men), modest attire (for women).</li>
                                                    <li>Comfortable shoes, personal hygiene items, and necessary medications.</li>
                                                    <li>Copies of travel documents and a small bag for Zamzam water.</li>
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
                                                According to Saudi rules, women below 45 years must be accompanied by a Mahram (male guardian). Women over 45 may travel in an approved group without a Mahram but need a No Objection Certificate (NOC).
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

@extends('frontend.master')

@section('frontend_title', 'ওমরাহ গাইডলাইন বাংলায়')

@section('frontend_content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend/assets/images/background/page-title.jpg') }})">
        <div class="auto-container">
            <h2>ওমরাহ গাইডলাইন বাংলায়</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li>Guidance</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- ওমরাহ গাইডলাইন -->
    <section class="courses-three">

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 60px;">ওমরাহ গাইডলাইন - ওমরাহ পালনে করণীয় ও বর্জনীয়</h3>
                        <p class="text-justify">ওমরাহ হলো আল্লাহর সন্তুষ্টি লাভের একটি পবিত্র ইবাদত। এটি হজের মতোই গুরুত্বপূর্ণ, তবে সহজ নিয়মে পালনযোগ্য। ওমরাহ পালনের সময় ইহরাম ধারণ, তাওয়াফ, সাঈ ও মাথা কামানো/চুল ছাটার মাধ্যমে এই ইবাদত সম্পন্ন হয়। তবে কিছু করণীয় ও বর্জনীয় বিষয় রয়েছে যা যথাযথভাবে মেনে চলা অত্যন্ত জরুরি।</p>
                        <p class="text-justify">ওমরাহ পালনে ইহরামের সময় নির্দিষ্ট কিছু কাজ নিষিদ্ধ, যেমন: সুগন্ধি ব্যবহার, নখ কাটা বা চুল ছাঁটা। তাওয়াফের সময় কাবা শরিফের দিকে মনোযোগ রাখুন এবং সাঈতে সাফা-মারওয়া পাহাড়ে দোয়া করতে ভুলবেন না। Muslim Tour & Travels এর বিশেষজ্ঞ গাইডরা ওমরাহের প্রতিটি ধাপে আপনাকে সহায়তা করবে। আপনার সফল ওমরাহ যাত্রার জন্য এখনই কল করুন <a href="tel:+88 0XXXX XXX XXX" rel="nofollow">+88 0XXXX XXX XXX</a>।</p>
                        <!-- Button Box -->
                        <div class="welcome-three_button">
                            <a href="{{ route('frontend.contact.us') }}" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">প্যাকেজ বুক করুন</span>
                                    <span class="text-two">প্যাকেজ বুক করুন</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/umrah-guidelines.png') }}" alt="" />
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End ওমরাহ গাইডলাইন -->


    <!-- স্টেপ বাই স্টেপ ওমরাহ গাইডলাইন -->
    <section class="courses-three">

        <div class="courses-three_bg" style="background-image:url({{ asset('frontend/assets/images/background/3.jpg') }})"></div>

        <div class="auto-container">

            <div class="row clearfix align-items-center">
                <div class="scholar-detail_content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 60px;">স্টেপ বাই স্টেপ ওমরাহ গাইডলাইন</h3>
                        <p class="text-justify">ওমরাহ একটি পবিত্র ইবাদত যা যেকোনো সময় আদায় করা যায়। সঠিক নিয়মে ওমরাহ পালনের জন্য ধাপে ধাপে নির্দেশনা নিচে দেওয়া হলো:</p>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="mt-4">
                                    <h3 class="scholar-detail_title" style="font-size: 25px;">০১. ইহরাম (ফরজ)</h3>
                                    <p class="text-justify">মিকাত অতিক্রম করার আগে ইহরাম বাঁধা আবশ্যক। প্রস্তুতির ধাপসমূহ:</p>
                                    <ul class="scholar-detail_list mt-0">
                                        <li>গোসল বা অজু করে পবিত্র হওয়া</li>
                                        <li>ইহরামের সাদা কাপড় পরিধান করা (পুরুষের জন্য)</li>
                                        <li>২ রাকাত নফল নামাজ আদায় করা</li>
                                        <li>তালবিয়া পাঠ করে ওমরাহর নিয়ত করা</li>
                                    </ul>
                                    <p class="text-justify mt-3"><strong>তালবিয়া:</strong> "লাব্বাইকা আল্লাহুম্মা লাব্বাইক..."</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mt-4">
                                    <h3 class="scholar-detail_title" style="font-size: 25px;">০২. কাবা শরিফের তাওয়াফ (ফরজ)</h3>
                                    <p class="text-justify">কাবাকে কেন্দ্র করে ৭ চক্কর দেওয়ার নিয়ম:</p>
                                    <ul class="scholar-detail_list mt-0">
                                        <li>হাজরে আসওয়াদ থেকে শুরু করে ডান দিকে ঘোরা</li>
                                        <li>প্রতি চক্করে রুকনে ইয়ামানি স্পর্শ করা (যদি সম্ভব হয়)</li>
                                        <li>তাওয়াফ শেষে মাকামে ইব্রাহিমে ২ রাকাত নামাজ পড়া</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mt-4">
                                    <h3 class="scholar-detail_title" style="font-size: 25px;">০৩. সাফা-মারওয়ার সায়ি (ওয়াজিব)</h3>
                                    <p class="text-justify">সাফা পাহাড় থেকে শুরু করে ৭ বার往返 (গেটি দেওয়া):</p>
                                    <ul class="scholar-detail_list mt-0">
                                        <li>প্রতি চক্করে দোয়া ও তাকবির পড়া</li>
                                        <li>সবুজ আলোর মধ্যে পুরুষদের দ্রুত হাঁটা (রমল)</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mt-4">
                                    <h3 class="scholar-detail_title" style="font-size: 25px;">০৪. চুল কাটা/মুণ্ডন (ওয়াজিব)</h3>
                                    <p class="text-justify">ওমরাহ শেষে:</p>
                                    <ul class="scholar-detail_list mt-0">
                                        <li>পুরুষের জন্য মাথা মুণ্ডন বা চুল ছাটা</li>
                                        <li>মহিলাদের জন্য চুলের ডগা এক ইঞ্চি কাটা</li>
                                    </ul>
                                    <p class="text-justify mt-3">এভাবে ওমরাহ সম্পন্ন হয়। এরপর ইহরাম খুলে সাধারণ পোশাক পরিধান করা যায়।</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- End স্টেপ বাই স্টেপ ওমরাহ গাইডলাইন -->


    <!-- ওমরাহ পালনে করণীয় ও বর্জনীয় -->
    <section class="courses-three">

        <div class="auto-container">

            <div class="row clearfix align-items-center">
                <div class="scholar-detail_content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-3">ওমরাহ পালনে করণীয় ও বর্জনীয়</h3>
                        <p class="text-justify">ওমরাহ একটি পবিত্র ইবাদত যা সঠিক নিয়মে আদায় করা অত্যন্ত গুরুত্বপূর্ণ। এখানে ওমরাহ পালনের সময় করণীয় ও বর্জনীয় বিষয়গুলো উল্লেখ করা হলো:</p>
                    </div>
                </div>
            </div>

            <div class="row clearfix align-items-center">
                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="mt-4">
                            <h3 class="scholar-detail_title" style="font-size: 25px;">ওমরাহ পালনে করণীয়:</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="scholar-detail_list mt-0">
                                        <li>ইহরাম বাঁধার পর নিয়ত করা</li>
                                        <li>তালবিয়া পাঠ করা</li>
                                        <li>কাবা শরিফের তাওয়াফ করা</li>
                                        <li>সাফা-মারওয়া 사이 সাঈ করা</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="scholar-detail_list mt-0">
                                        <li>জমজমের পানি পান করা</li>
                                        <li>মাকামে ইবরাহিমে সালাত আদায়</li>
                                        <li>হাজরে আসওয়াদ স্পর্শ/ইশারা করা</li>
                                        <li>অধিক পরিমাণে দোয়া ও ইস্তিগফার</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h3 class="scholar-detail_title" style="font-size: 25px;">ওমরাহ পালনে বর্জনীয়:</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="scholar-detail_list mt-0">
                                        <li>ইহরাম অবস্থায় সুগন্ধি ব্যবহার</li>
                                        <li>চুল-দাঁড়ি কাটা বা নখ ছাঁটা</li>
                                        <li>প্রাণী শিকার বা গাছপালা কাটা</li>
                                        <li>মিথ্যা কথা বা অশ্লীল আচরণ</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="scholar-detail_list mt-0">
                                        <li>ঝগড়া-বিবাদ বা অহংকার প্রদর্শন</li>
                                        <li>স্ত্রী সহবাস বা কামোত্তেজক কাজ</li>
                                        <li>মাথা ঢাকা (পুরুষের জন্য)</li>
                                        <li>সেলাইকৃত পোশাক পরা (পুরুষ)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <p class="text-justify mt-4"><b>সতর্কতা:</b> ইহরাম অবস্থায় উপরোক্ত বর্জনীয় কাজগুলো থেকে সম্পূর্ণ বিরত থাকা আবশ্যক। ইহরাম খোলার পর সাধারণ নিয়মে ফিরে যাওয়া যায়।</p>

                        <div class="welcome-three_button">
                            <a href="tel:+88 0XXXX XXX XXX" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">ওমরাহ প্যাকেজের জন্য কল করুন: +88 0XXXX XXX XXX</span>
                                    <span class="text-two">ওমরাহ প্যাকেজের জন্য কল করুন: +88 0XXXX XXX XXX</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/kissing-the-black-stone.png') }}" alt="ওমরাহ পালনের নির্দেশিকা" />
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- End ওমরাহ পালনে করণীয় ও বর্জনীয় -->


    <!-- FAQ -->
    <section class="courses-three">

        <div class="courses-three_bg" style="background-image:url({{ asset('frontend/assets/images/background/3.jpg') }})"></div>

        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title style-two centered">
                <h2 class="sec-title_heading">সচরাচর জিজ্ঞাসিত প্রশ্নাবলী</h2>
            </div>

            <div class="row clearfix">

                <div class="faq-one_accordian-column col-lg-12 col-md-12 col-sm-12">

                    <div class="accordian-outer">

                        <ul class="accordion-box_two">

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn active">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    ওমরাহ কি এবং হজ্জ থেকে এটি কিভাবে আলাদা?
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text text-justify">
                                            ওমরাহ একটি ছোট হজ্জ, যা বছরের যেকোনো সময় করা যায়। হজ্জের মতো এটি ফরজ নয়, তবে সুন্নত। হজ্জ নির্দিষ্ট তারিখে (জিলহজ মাসে) করতে হয়, কিন্তু ওমরাহ যেকোনো সময় করা যায়।
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    ওমরাহ করার জন্য কী কী প্রস্তুতি নেয়া জরুরি?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text text-justify">
                                            ওমরাহর জন্য ইহরাম বাঁধা, মীকাত থেকে ইহরাম করা, তাওয়াফ ও সাঈ করা আবশ্যক। পাসপোর্ট, ভিসা, টিকা সনদ ও প্রয়োজনীয় ডকুমেন্ট আগে থেকে গুছিয়ে নিন।
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    ওমরাহ ভিসা পেতে কী কী ডকুমেন্ট লাগে?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text text-justify">
                                            সাধারণত পাসপোর্ট (৬ মাস মেয়াদি), ২ কপি পাসপোর্ট সাইজ ছবি, টিকেট বুকিং, হোটেল বুকিং, টিকাকরণ সনদ ও ভিসা ফর্ম জমা দিতে হয়। ট্রাভেল এজেন্সির মাধ্যমে আবেদন করতে পারেন।
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    ওমরাহর সময় মহিলাদের জন্য বিশেষ কোন নিয়ম আছে কি?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text text-justify">
                                            হ্যাঁ, মহিলাদের জন্য মাহরাম (স্বামী বা নিষিদ্ধ সম্পর্কের পুরুষ সঙ্গী) থাকা জরুরি। ইহরামের সময় সাধারণ কাপড় পরতে পারেন, তবে মুখ ও হাত ছাড়া শরীর ঢাকতে হবে।
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    ওমরাহ করতে কত খরচ হয় এবং প্যাকেজ কী কী অন্তর্ভুক্ত করে?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text text-justify">
                                            খরচ প্যাকেজ ও মৌসুমভেদে ভিন্ন হয় (সাধারণত ১-১.৫ লাখ টাকা থেকে শুরু)। প্যাকেজে সাধারণত ফ্লাইট, হোটেল, ট্রান্সপোর্ট, গাইড ও জিয়ারাত ভ্রমণ অন্তর্ভুক্ত থাকে।
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

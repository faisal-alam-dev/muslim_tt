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
                        <p class="text-justify">ওমরাহ একটি আধ্যাত্মিক যাত্রা। এটি এমন একটি সুযোগ যা বিশ্বের ধর্মপ্রাণ মুসলমানদের একত্রিত করে একটি সুমহান ঐতিহ্য উদযাপনের উপলক্ষ তৈরি করে দেয়। ওমরাহ আল্লাহর নৈকট্য অর্জন এবং গুনাহ থেকে মুক্তি লাভের মাধ্যমে আত্নশুদ্ধির সুযোগ তৈরি করে। এটি শুধু একটি আধ্যাত্মিক অভিজ্ঞতা নয়, বরং জীবনের প্রতিটি দিককে শুদ্ধ করার একটি সুযোগ। ওমরাহ পালনে আগ্রহীদের জন্য স্টেপ বাই স্টেপ ওমরাহ গাইডলাইন এবং করণীয় ও বর্জনীয়গুলো এখানে বিস্তারিত আলোচনা করা হল।</p>
                        <p class="text-justify">হিজাজ হজ ও ওমরাহ কাফেলা বাংলাদেশের সেরা ওমরাহ ও হজ অ্যাজেন্সি। আমরা ভিসা প্রসেসিং, বিমান টিকিট এবং ওমরাহ প্রশিক্ষণসহ সব ধরনের পরিষেবা প্রদান করি। আপনার ওমরাহ যাত্রা সহজ এবং সুষ্ঠুভাবে সম্পন্ন করতে এখনই আমাদেরকে কল করুন <a href="tel:+88 0XXXX XXX XXX" rel="nofollow">+88 0XXXX XXX XXX</a>। আমরা আপনাকে সেরা পরিষেবার নিশ্চয়তা দিচ্ছি।</p>
                        <!-- Button Box -->
                        <div class="welcome-three_button">
                            <a href="{{ route('frontend.contact.us') }}" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">পছন্দের প্যাকেজ বুক করুন </span>
                                    <span class="text-two">পছন্দের প্যাকেজ বুক করুন </span>
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
                        <p class="text-justify">ওমরাহ পালনের মাধ্যমে মুমিনরা তাদের জীবনের গুরুত্বপূর্ণ এক অধ্যায় সম্পন্ন করেন। ওমরাহ পালন করার জন্য নির্দিষ্ট কিছু প্রক্রিয়া আছে। এখানে ধারাবাহিকভাবে সে প্রক্রিয়াগুলো উল্লেখ করা হল:</p>

                        <div class="mt-4">
                            <h3 class="scholar-detail_title" style="font-size: 25px;">০১. ইহরাম (ফরজ)</h3>
                            <p class="text-justify">ওমরাহ পালন করার জন্য ইহরাম অপরিহার্য। ইহরামের পোশাক পরার জন্য কিছু ধাপ অনুসরণ করতে হয়:</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="scholar-detail_list mt-0">
                                        <li>পরিষ্কার-পরিচ্ছন্ন হয়ে গোসল বা অজু করা</li>
                                        <li>মিকাতের আগে বা মিকাতে ইহরামের কাপড় পরে নেওয়া</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="scholar-detail_list mt-0">
                                        <li>ইহরামের নিয়তে দুই রাকাত নামাজ আদায় করা</li>
                                        <li>ওমরাহর নিয়ত করার পর এক বা তিনবার নিন্মোক্ত তালবিয়া পড়া</li>
                                    </ul>
                                </div>
                            </div>
                            <p class="text-justify mt-3">লাব্বাইকা আলাহুম্মা লাব্বাইক, লাব্বাইকা লা শারিকা লাকা লাব্বাইক, ইন্নাল হামদা ওয়ান নি’মাতা লাকা ওয়াল মুলক, লা শারিকা লাকা।</p>
                            <p class="text-justify">অর্থ: আমি হাজির, হে আল্লাহ! আমি হাজির, হে আল্লাহ! আমি হাজির, তোমার কোন অংশীদার নেই, আমি হাজির, নিশ্চয়ই সমস্ত প্রশংসা এবং নেয়ামত তোমার এবং একচ্ছত্র আধিপত্য তোমার, তোমার কোন অংশীদার নেই।</p>
                        </div>

                        <div class="mt-4">
                            <h3 class="scholar-detail_title" style="font-size: 25px;">০২. তাওয়াফ (ফরজ)</h3>
                            <p class="text-justify">ওমরাহ পালনের জন্য তাওয়াফ করা আবশ্যক। তাওয়াফ করার প্রস্তুতি হিসেবে যে কাজগুলো করতে হয়:</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="scholar-detail_list mt-0">
                                        <li>তাওয়াফের নিয়ত করা</li>
                                        <li>অজু করা</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="scholar-detail_list mt-0">
                                        <li>ইহরামের চাদর সঠিকভাবে ডান কাঁধে পেঁচিয়ে নিয়ে বাম কাঁধের ওপর রাখা</li>
                                        <li>হাজরে আসওয়াদকে সামনে রেখে তার ডান পাশ বরাবর দাঁড়ানো</li>
                                    </ul>
                                </div>
                            </div>
                            <p class="text-justify mt-3">
                                ভিড় না থাকলে হাজরে আসওয়াদ চুম্বন করে তাওয়াফ শুরু করা। আলতোভাবে উভয় হাত পাথরের উপর রেখে, "বিসমিল্লাহি আল্লাহু আকবার" বলা এবং চুম্বন করা। ডান হাত দিয়ে হাজরে আসওয়াদ স্পর্শ করে সরাসরি চুম্বন করা কঠিন হলে হাতের স্পর্শ করা অংশে
                                চুম্বন করা। হাজরে আসওয়াদ স্পর্শ করা বা চুম্বন করা সম্ভব না হলে দূরত্বে দাঁড়িয়ে ডান হাত তুলে ‘বিসমিল্লাহি আল্লাহু আকবার’ বলা এবং এক হাত দিয়ে হাজরে আসওয়াদের দিকে ইশারা করা। এই ক্ষেত্রে চুম্বন বা হাত স্পর্শ করা আবশ্যক নয়।
                                এভাবে সাত চক্করে তাওয়াফ শেষ করা।
                            </p>
                        </div>

                        <div class="mt-4">
                            <h3 class="scholar-detail_title" style="font-size: 25px;">০৩. সায়ি (ওয়াজিব)</h3>
                            <p class="text-justify">সায়ি করার পদ্ধতি হল:</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="scholar-detail_list mt-0">
                                        <li>সাফা পাহাড়ের কাছে গিয়ে কাবা শরিফের দিকে মুখ করে দাঁড়ানো</li>
                                        <li>দোয়ার মতো হাত তুলে তিনবার তাকবির বলা</li>
                                        <li>মারওয়া পাহাড়ের কাছে পৌঁছালে, সাফা পাহাড়ের দিকে মুখ করে দোয়ার মতো হাত তুলে তাকবির বলা</li>
                                        <li>মারওয়া পাহাড়ের উপরে উঠা</li>
                                        <li>উভয় পাহাড়ের দিকে মুখ করে দোয়ার মতো হাত তুলে তাকবির বলা</li>
                                        <li>এইভাবে দুই পাহাড়ের মাঝে সাতবার দৌঁড়ানো</li>
                                        <li>সায়ি শেষে দোয়া করা</li>
                                    </ul>
                                </div>
                            </div>
                            <p class="text-justify mt-3">সায়ি করার সময় আপনি দৌঁড়াতে পারেন, বা হেঁটে যেতে পারেন।</p>
                        </div>

                        <div class="mt-4">
                            <h3 class="scholar-detail_title" style="font-size: 25px;">০৪. চুল মুন্ডন করা (ওয়াজিব)</h3>
                            <p class="text-justify">
                                চুল মুন্ডন করা (ওয়াজিব)। <a href="https://bn.wikipedia.org/wiki/%E0%A6%89%E0%A6%AE%E0%A6%B0%E0%A6%BE" rel="nofollow" target="_blank">ওমরাহ পালনে</a> এটি অবশ্যই করণীয়। পুরুষের ক্ষেত্রে রাসূলুল্লাহ (সাল্লাল্লাহু আলাইহি ওয়াসাল্লাম)-এর আদর্শ অনুসরণে সম্পূর্ণ মাথা মুণ্ডন করা। তবে কেউ চাইলে মাথার চুল ছাঁটতেও পারে। মহিলাদের ক্ষেত্রে চুল এক ইঞ্চি
                                পরিমাণ কেটে ফেলা।
                            </p>
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
                        <p class="text-justify">ওমরাহ একটি গুরুত্বপূর্ণ ইবাদত। এটি পালনের সময় কিছু কাজকে গুরুত্ব দিতে হয় এবং কিছু কাজ বর্জন করতে হয়। এখানে ওমরাহ পালনের করণীয় ও বর্জনীয়গুলো তুলে ধরা হল:</p>
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
                                        <li>নফল তাওয়াফ বেশি করা</li>
                                        <li>অধিক পরিমাণ জমজমের পানি পান করা</li>
                                        <li>হাতিমে সালাত আদায় করা</li>
                                        <li>হাজরে আসওয়াদ চুমু খাওয়া</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="scholar-detail_list mt-0">
                                        <li>মাকামে ইবরাহিমে সালাত আদায় করা</li>
                                        <li>কাবা ঘর ধরে দোয়া করা</li>
                                        <li>মুলতাযাম ধরে দোয়া করা</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h3 class="scholar-detail_title" style="font-size: 25px;">ওমরাহ পালনে বর্জনীয়:</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="scholar-detail_list mt-0">
                                        <li>সহবাস করা</li>
                                        <li>দাঁড়ি বা গোফ কাটা ও মুন্ডন করা</li>
                                        <li>চুল বা নখ কাটা</li>
                                        <li>লোম তোলা</li>
                                        <li>সুগন্ধি বা পারফিউম ব্যবহার করা</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="scholar-detail_list mt-0">
                                        <li>ঝগড়া করা</li>
                                        <li>গালাগালি করা</li>
                                        <li>পশু শিকার করা</li>
                                        <li>গাছের পাতা ছেঁড়া</li>
                                        <li>খারাপ কথা বলা</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <p class="text-justify mt-4"><b>নোট:</b> ইহরাম অবস্থায় এ কাজগুলো করা যাবে না। ইহরাম থেকে মুক্ত হওয়ার পর ঝগড়া, গালাগালি ও খারাপ কথা বলা ছাড়া উপরের সব কাজ করা যাবে।</p>

                        <!-- Button Box -->
                        <div class="welcome-three_button">
                            <a href="tel:+88 0XXXX XXX XXX" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">আমাদের কল করুন: +88 0XXXX XXX XXX</span>
                                    <span class="text-two">আমাদের কল করুন: +88 0XXXX XXX XXX</span>
                                </span>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/kissing-the-black-stone.png') }}" alt="" />
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
                                    ওমরাহ পালনের মূল ধাপগুলো কী কী?
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul>
                                                        <li><strong>ইহরাম:</strong> মীকাত থেকে ইহরামের নিয়ত করা</li>
                                                        <br>
                                                        <li><strong>তাওয়াফ:</strong> কাবার চারপাশে সাতবার প্রদক্ষিণ করা</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul>
                                                        <li><strong>সাঈ:</strong> সাফা ও মারওয়া পাহাড়ের মাঝে সাতবার হাঁটা</li>
                                                        <br>
                                                        <li><strong>হালক বা কাসর:</strong> পুরুষদের মাথা মুন্ডানো বা ছোট করা, মহিলাদের সামান্য চুল কাটানো</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    ওমরাহ পালনের সময় কী কী বর্জনীয়?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul>
                                                        <li>ইহরাম অবস্থায় সুগন্ধি ব্যবহার করা নিষিদ্ধ</li>
                                                        <br>
                                                        <li>চুল বা নখ কাটা যাবে না</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <ul>
                                                        <li>ঝগড়া, গালিগালাজ ও খারাপ আচরণ থেকে বিরত থাকতে হবে</li>
                                                        <br>
                                                        <li>শিকার করা বা গাছপালা ক্ষতিগ্রস্ত করা নিষিদ্ধ</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    মহিলারা কি একা ওমরাহ করতে পারেন?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            সৌদি আরবের সাম্প্রতিক নিয়ম অনুযায়ী, নির্দিষ্ট বয়সের নারীরা গাইডেড গ্রুপের মাধ্যমে ওমরাহ পালন করতে পারেন, তবে মাহরাম ছাড়া একা ওমরাহ করার অনুমতি আগে ছিল না।
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    ওমরাহর সময় কোনো ভুল হলে করণীয় কী?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            যদি ইচ্ছাকৃতভাবে কোনো ভুল হয় তবে ‘দম’ বা ফিদিয়া দিতে হয়। তবে ভুল অনিচ্ছাকৃত হলে আল্লাহর কাছে ক্ষমা প্রার্থনা করতে হয়।
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    ওমরাহ সংক্রান্ত সর্বশেষ নিয়মাবলি কোথায় পাওয়া যাবে?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            সৌদি হজ ও ওমরাহ মন্ত্রণালয়ের ওয়েবসাইট এবং বাংলাদেশ ধর্ম মন্ত্রণালয়ের অফিসিয়াল পোর্টাল থেকে সর্বশেষ তথ্য জানা যাবে।
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

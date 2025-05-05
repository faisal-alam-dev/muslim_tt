@extends('frontend.master')

@section('frontend_title', 'Hotel Booking')

@section('frontend_content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend/assets/images/background/page-title.jpg') }})">
        <div class="auto-container">
            <h2>Hotel Booking</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('frontend.index') }}">Home</a></li>
                <li>Facilities</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- Hotel booking service -->
    <section class="courses-three">

        <div class="auto-container">

            <div class="row clearfix align-items-center mb-4">
                <div class="scholar-detail_content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title">Hotel booking service before Umrah Journey to Makkah, Madinah</h3>
                    </div>
                </div>
            </div>

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <p class="text-justify">
                            Are you preparing for the blessed Umrah journey to Makkah and Madinah?
                            <b>Muslim Tour & Travels</b> is your reliable partner in ensuring a smooth and spiritually enriching experience.
                            With our years of expertise and <b>personalized services</b>, we take care of your
                            <b>hotel bookings in Makkah and Madinah</b>, so you can devote yourself fully to worship and devotion.
                        </p>
                        <p class="text-justify">
                            We provide a variety of hotel options in Makkah and Madinah, catering to the needs of pilgrims from all backgrounds.
                            Whether you prefer <b>luxury stays near the Haram</b> or <b>budget-friendly accommodations</b>, our team will help you
                            find the perfect hotel to match your comfort and financial plan.
                        </p>
                        <!-- Button Box -->
                        <div class="welcome-three_button">
                            <a href="{{ route('frontend.contact.us') }}" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Request for hotel booking!</span>
                                    <span class="text-two">Request for hotel booking!</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/hotel-booking-in-makkah-or-medina.png') }}" alt="" />
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Hotel booking service -->


    <!-- We provide -->
    <section class="courses-three">

        <div class="courses-three_bg" style="background-image:url({{ asset('frontend/assets/images/background/3.jpg') }})"></div>

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/hotel-facilities.png') }}" alt="" />
                        </div>
                    </div>
                </div>

                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 45px;">We provide hotel booking service according to your needs</h3>
                        <p class="text-justify"> At Muslim Tour & Travels, we understand that comfortable accommodation is essential for a fulfilling journey. That’s why we offer <b>personalized hotel booking services</b> to match your preferences, ensuring a seamless and relaxing stay during your travels. </p>
                        <p class="text-justify"> Whether you prefer luxury 5-star hotels, budget-friendly 3-star options, or anything in between, we provide a range of accommodations in Makkah, Medina, and beyond. <a href="{{ route('frontend.contact.us') }}">Contact us today</a> to find the perfect stay, tailored to your needs and comfort. </p>
                        <!-- Button Box -->
                        <div class="welcome-three_button">
                            <a href="{{ route('frontend.contact.us') }}" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Contact for Booking</span>
                                    <span class="text-two">Contact for Booking</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End We provide -->


    <!-- List of popular hotels -->
    <section class="courses-three">

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 45px;">List of popular hotels in Makkah and Medina</h3>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Place</th>
                                    <th>Hotel Name</th>
                                    <th>Category</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Makkah</td>
                                    <td><a href="https://goo.gl/maps/8psBkpGgdaV1Lbhv9" target="_blank" rel="nofollow">Diar Al Bait Hotel</a></td>
                                    <td>3 Star</td>
                                </tr>
                                <tr>
                                    <td>Medina</td>
                                    <td>
                                        <a href="https://karam-al-hejaz.medinahotel.net/en/" target="_blank" rel="nofollow">Karam Al Hijaz Hotel</a>
                                    </td>
                                    <td>3 Star</td>
                                </tr>
                                <tr>
                                    <td>Makkah</td>
                                    <td>
                                        <a href="https://www.pullman-zamzam-makkah.com/" target="_blank" rel="nofollow">Pullman ZamZam Makkah</a>
                                    </td>
                                    <td>5 Star</td>
                                </tr>
                                <tr>
                                    <td>Makkah</td>
                                    <td><a href="https://alsafwahorchid.com.sa/" target="_blank" rel="nofollow">Al Safwah Royale Orchid</a></td>
                                    <td>5 Star</td>
                                </tr>
                                <tr>
                                    <td>Makkah</td>
                                    <td>
                                        <a href="https://www.hilton.com/en/hotels/medhihi-madinah-hilton//" target="_blank" rel="nofollow">Madinah Hilton</a>
                                    </td>
                                    <td>5 Star</td>
                                </tr>
                                <tr>
                                    <td>Medina</td>
                                    <td>
                                        <a href="https://www.pullman-zamzam-madina.com/" target="_blank" rel="nofollow">Pullman Zamzam Madina </a>
                                    </td>
                                    <td>5 Star</td>
                                </tr>
                                <tr>
                                    <td>Makkah</td>
                                    <td>
                                        <a href="https://www.hilton.com/en/hotels/maksuhi-hilton-suites-makkah/" target="_blank" rel="nofollow">Hilton Suites Makkah</a>
                                    </td>
                                    <td>4 Star</td>
                                </tr>
                                <tr>
                                    <td>Makkah</td>
                                    <td>
                                        <a href="https://www.ihg.com/intercontinental/hotels/us/en/makkah/qcahd/hoteldetail" target="_blank" rel="nofollow">InterContinental Dar al Tawhid Makkah</a>
                                    </td>
                                    <td>4 Star</td>
                                </tr>
                                <tr>
                                    <td>Medina</td>
                                    <td>
                                        <a href="https://elafgroup.com/hotel/elaf-al-taqwa/" target="_blank" rel="nofollow">Elaf Al Taqwa Hotel</a>
                                    </td>
                                    <td>4 Star</td>
                                </tr>
                                <tr>
                                    <td>Medina</td>
                                    <td>
                                        <a href="https://www.booking.com/hotel/sa/the-seasons.html" target="_blank" rel="nofollow">The Seasons Hotel</a>
                                    </td>
                                    <td>4 Star</td>
                                </tr>
                                <tr>
                                    <td>Makkah</td>
                                    <td>
                                        <a href="https://lamar-ajyad.hotels-mecca.com/en/" target="_blank" rel="nofollow">Lamar Ajyad Hotel</a>
                                    </td>
                                    <td>3 Star</td>
                                </tr>
                                <tr>
                                    <td>Makkah</td>
                                    <td>
                                        <a href="https://www.booking.com/hotel/sa/dar-al-eiman-grand.html" target="_blank" rel="nofollow">Emaar Grand Hotel</a>
                                    </td>
                                    <td>3 Star</td>
                                </tr>
                                <tr>
                                    <td>Medina</td>
                                    <td>
                                        <a href="https://www.pullman-zamzam-makkah.com/" target="_blank" rel="nofollow">Hotel Rehab Al Noor</a>
                                    </td>
                                    <td>3 Star</td>
                                </tr>
                                <tr>
                                    <td>Medina</td>
                                    <td><a href="https://elafgroup.com/hotel/elaf-taiba/" target="_blank" rel="nofollow">Elaf Taiba Hotel</a></td>
                                    <td>3 Star</td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Button Box -->
                        <div class="welcome-three_button mt-4" style="text-align: center;">
                            <a href="{{ route('frontend.contact.us') }}" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Request for hotel booking</span>
                                    <span class="text-two">Request for hotel booking</span>
                                </span>
                            </a>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End List of popular hotels -->


    <!-- Facilities & Hotel Amenities -->
    <section class="courses-three">

        <div class="courses-three_bg" style="background-image:url({{ asset('frontend/assets/images/background/3.jpg') }})"></div>

        <div class="auto-container">

            <div class="row clearfix align-items-center">

                <div class="scholar-detail_content-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_content-outer wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <h3 class="scholar-detail_title mb-4" style="line-height: 45px;">Facilities & Hotel Amenities</h3>
                        <ul class="scholar-detail_list mt-0">
                            <li>Halal-Certified Dining</li>
                            <li>Prayer Facilities (Salah Mats & Qibla Direction)</li>
                            <li>Proximity to Mosques & Islamic Sites</li>
                            <li>Family-Friendly Accommodations</li>
                            <li>Air-Conditioned Rooms with Islamic Decor</li>
                            <li>24/7 Quran Channels & Prayer Timetables</li>
                            <li>Separate Swimming Pools/Gym Hours for Men & Women</li>
                            <li>Halal Room Service & Dining Options</li>
                            <li>Safety & Privacy for Families</li>
                        </ul>
                    </div>
                </div>

                <div class="scholar-detail_image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="scholar-detail_image-outer wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="scholar-detail_image">
                            <img src="{{ asset('frontend/assets/images/luxurious-accommodations.png') }}" alt="" />
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- End Facilities & Hotel Amenities -->


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
                                    How can I book a hotel for Umrah through Muslim Tour & Travels?
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text text-justify">
                                            You can book a hotel by contacting our team via phone, email, or our website. We offer a variety of options near Haram in Makkah and Masjid an-Nabawi in Madinah.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    What types of hotels are available for Umrah pilgrims?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text text-justify">
                                            We provide a range of accommodations, from budget-friendly hotels to 5-star luxury stays, all within walking distance to the holy mosques.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    Can I modify or cancel my hotel booking after confirmation?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text text-justify">
                                            Yes, modifications or cancellations are possible depending on the hotel’s policy. Please check with our team for specific terms and conditions.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    Are meals included in the hotel booking?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text text-justify">
                                            Some hotels offer meal plans (breakfast, half-board, or full-board), while others do not. We can guide you based on your preferred package.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    What is the check-in/check-out time for Umrah hotels?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text text-justify">
                                            Typically, check-in is after <b>2 PM</b>, and check-out is before <b>12 PM</b>, but timings may vary. Early check-in/late check-out can be requested, subject to availability.
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

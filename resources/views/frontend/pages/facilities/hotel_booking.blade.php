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
                            Are you planning to undertake the sacred pilgrimage of Hajj or Umrah from Bangladesh?
                            <b>Hijaz Hajj &amp; Umrah Kafela</b> is your trusted companion in ensuring a seamless and fulfilling experience.
                            With our extensive expertise and <b>dedicated services</b>, we simplify the process of
                            <b>hotel bookings in Makkah and Medina</b>, allowing you to focus on the spiritual significance of your
                            journey.
                        </p>
                        <p class="text-justify">
                            We offer a wide range of hotel options in Makkah and Medina to cater to the diverse requirements of pilgrims
                            from Bangladesh. Whether you seek luxurious accommodations or more affordable alternatives, our team will
                            assist you in finding the perfect hotel that aligns with your preferences and budget.
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
                        <p>
                            At Hijaz Hajj &amp; Umrah Kafela, we believe that your accommodation plays a crucial role in enhancing your
                            overall journey. That's why we are committed to providing <b>hotel booking facilities</b> tailored to your
                            specific needs, ensuring your utmost <b>comfort and convenience</b> throughout your sacred journey.
                        </p>
                        <p>
                            We provide different hotel facilities in Makkah or Medina such as 5 Star, 4 Star, 3 star &amp; other hotels
                            according to your need. <a href="{{ route('frontend.contact.us') }}">Contact us today</a> to learn about our hotel
                            facilities in Makkah and Medina to embark on a journey where your needs and comfort are our top priority.
                        </p>
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
                            <li>Luxurious Accommodations</li>
                            <li>Air-conditioned Rooms</li>
                            <li>Proximity to the Holy Sites</li>
                            <li>Facilities for Disabled Guests</li>
                            <li>Separate Rooms for Families</li>
                            <li>Gourmet Dining Options</li>
                            <li>Impeccable Service</li>
                            <li>Safety and Security</li>
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
                                    What types of hotels are available for booking in Makkah and Medina?
                                </div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">
                                            We offer a wide range of hotel options to cater to the diverse needs of our clients. Whether you prefer luxury accommodations or more budget-friendly alternatives, our team will help you find the perfect hotel that suits your requirements.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    How can I ensure that the hotel I book is conveniently located near the holy sites in Makkah and Medina?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            At Hijaz Hajj & Umrah Kafela, we understand the importance of accessibility. Our team carefully selects hotels that are strategically situated in close proximity to the Grand Mosque (Masjid al-Haram) in Makkah and the Prophet's Mosque (Al-Masjid an-Nabawi) in Medina. Rest assured, your hotel will be conveniently located for easy travel during your pilgrimage.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    What level of service can I expect from Hijaz Hajj & Umrah Kafela?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            We take pride in providing exceptional service to our clients. Our dedicated team is available round-the-clock to assist you at every step of your journey, ensuring a hassle-free experience. From handling hotel bookings to offering guidance and support, we strive to make your pilgrimage a memorable and spiritually fulfilling one.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    Are there affordable hotel options available through Hijaz Hajj & Umrah Kafela?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            Absolutely! We understand that pilgrims may have varying budget constraints. Hence, we offer a range of hotel options to accommodate different budgets while maintaining quality standards. Our aim is to make the pilgrimage experience accessible to all, regardless of financial limitations.
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Block -->
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                    How do I get started with booking a hotel in Makkah or Medina through Hijaz Hajj & Umrah Kafela?
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            To initiate the booking process or seek more information, simply contact us through our website or helpline. Our experienced team will guide you through the necessary steps, answer your queries, and assist you in securing the ideal hotel for your Hajj or Umrah journey.
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

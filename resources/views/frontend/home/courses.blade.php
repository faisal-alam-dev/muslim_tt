<section class="courses-three">

    <div class="courses-three_bg" style="background-image:url({{ asset('frontend/assets/images/background/3.jpg') }})"></div>

    <div class="auto-container">

        <!-- Sec Title -->
        <div class="sec-title style-two centered">
            <div class="sec-title_title">Latest Courses</div>
            <h2 class="sec-title_heading">Our Arabic & Islamic Courses</h2>
        </div>

        <div class="swiper-container custom_package_slider">

            <div class="swiper-wrapper">

                <!-- Slider Item -->
                <div class="swiper-slide course-block_three col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="course-block_three-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="course-block_three-image">
                            <a href="course-detail.html"><img src="{{ asset('frontend/assets/images/resource/course-12.jpg') }}" alt="" /></a>
                        </div>
                        <div class="course-block_three-content">
                            <div class="course-block_three-lower d-flex justify-content-between flex-wrap text-center">
                                <div class="course-block_three-author">
                                    <strong>Umrah Regular</strong>
                                </div>
                            </div>
                            <div class="course-block_three-heading">
                                Learn Quran Tafseer Online With Complete Course
                            </div>
                            <ul class="course-block_three-list d-flex justify-content-between flex-wrap align-items-center">
                                <li><span>9</span> days</li>
                                <div class="course-block_three-price d-flex">Start From <span> $22.00</span></div>
                            </ul>
                            <div class="button-box">
                                <a class="theme-btn" href="#!">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="swiper-slide course-block_three col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="course-block_three-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="course-block_three-image">
                            <a href="course-detail.html"><img src="{{ asset('frontend/assets/images/resource/course-13.jpg') }}" alt="" /></a>
                        </div>
                        <div class="course-block_three-content">
                            <div class="course-block_three-lower d-flex justify-content-between flex-wrap text-center">
                                <div class="course-block_three-author">
                                    <strong>Umrah Regular</strong>
                                </div>
                            </div>
                            <div class="course-block_three-heading">
                                Learn Quran Tafseer Online With Complete Course
                            </div>
                            <ul class="course-block_three-list d-flex justify-content-between flex-wrap align-items-center">
                                <li><span>9</span> days</li>
                                <div class="course-block_three-price d-flex">Start From <span> $22.00</span></div>
                            </ul>
                            <div class="button-box">
                                <a class="theme-btn" href="#!">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="swiper-slide course-block_three col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="course-block_three-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="course-block_three-image">
                            <a href="course-detail.html"><img src="{{ asset('frontend/assets/images/resource/course-14.jpg') }}" alt="" /></a>
                        </div>
                        <div class="course-block_three-content">
                            <div class="course-block_three-lower d-flex justify-content-between flex-wrap text-center">
                                <div class="course-block_three-author">
                                    <strong>Umrah Regular</strong>
                                </div>
                            </div>
                            <div class="course-block_three-heading">
                                Learn Quran Tafseer Online With Complete Course
                            </div>
                            <ul class="course-block_three-list d-flex justify-content-between flex-wrap align-items-center">
                                <li><span>9</span> days</li>
                                <div class="course-block_three-price d-flex">Start From <span> $22.00</span></div>
                            </ul>
                            <div class="button-box">
                                <a class="theme-btn" href="#!">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="swiper-slide course-block_three col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="course-block_three-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="course-block_three-image">
                            <a href="course-detail.html"><img src="{{ asset('frontend/assets/images/resource/course-15.jpg') }}" alt="" /></a>
                        </div>
                        <div class="course-block_three-content">
                            <div class="course-block_three-lower d-flex justify-content-between flex-wrap text-center">
                                <div class="course-block_three-author">
                                    <strong>Umrah Regular</strong>
                                </div>
                            </div>
                            <div class="course-block_three-heading">
                                Learn Quran Tafseer Online With Complete Course
                            </div>
                            <ul class="course-block_three-list d-flex justify-content-between flex-wrap align-items-center">
                                <li><span>9</span> days</li>
                                <div class="course-block_three-price d-flex">Start From <span> $22.00</span></div>
                            </ul>
                            <div class="button-box">
                                <a class="theme-btn" href="#!">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </div>

</section>

<!-- Include Swiper.js -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiper = new Swiper('.custom_package_slider', {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView: 1,
            spaceBetween: 30,
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    });
</script>

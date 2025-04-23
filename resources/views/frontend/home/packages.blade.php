{{-- ==========================================================================
					        Umrah Packages
========================================================================== --}}
<section class="courses-three">

    <div class="courses-three_bg" style="background-image:url({{ asset('frontend/assets/images/background/3.jpg') }})"></div>

    <div class="auto-container">

        <!-- Sec Title -->
        <div class="sec-title style-two centered">
            <div class="sec-title_title">Latest Packages</div>
            <h2 class="sec-title_heading">Umrah Packages from Bangladesh</h2>
        </div>

        <div class="swiper-container custom_package_slider">

            <div class="swiper-wrapper">

                @foreach ($packages->where('package_type', 'umrah') as $item)
                    <!-- Slider Item -->
                    <div class="swiper-slide course-block_three col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="course-block_three-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <div class="course-block_three-image">
                                <a href="{{ route('frontend.package.details', ['slug' => $item->package_name_slug]) }}"><img src="{{ asset($item->package_image) }}" alt="" /></a>
                            </div>
                            <div class="course-block_three-content">
                                <div class="course-block_three-lower d-flex justify-content-between flex-wrap text-center">
                                    <div class="course-block_three-author">
                                        <strong>{{ $item->package_name }}</strong>
                                    </div>
                                </div>
                                <div class="course-block_three-heading text-justify">
                                    {!! Str::limit($item->package_short_description, 200) !!}
                                </div>
                                <ul class="course-block_three-list d-flex justify-content-between flex-wrap align-items-center">
                                    <li><span>{{ $item->package_duration }}</span> days</li>
                                    <div class="course-block_three-price d-flex">Start From <span> ৳{{ $item->package_price_without_food }}</span></div>
                                </ul>
                                <div class="button-box">
                                    <a class="theme-btn" href="{{ route('frontend.package.details', ['slug' => $item->package_name_slug]) }}">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </div>

</section>

{{-- ==========================================================================
					        Hajj Packages
========================================================================== --}}
<section class="courses-three">

    <div class="courses-three_bg" style="background-image:url({{ asset('frontend/assets/images/background/1.jpg') }})"></div>

    <div class="auto-container">

        <!-- Sec Title -->
        <div class="sec-title style-two centered">
            <div class="sec-title_title">Latest Packages</div>
            <h2 class="sec-title_heading">Hajj Packages from Bangladesh</h2>
        </div>

        <div class="swiper-container custom_package_slider">

            <div class="swiper-wrapper">

                @foreach ($packages->where('package_type', 'hajj') as $item)
                    <!-- Slider Item -->
                    <div class="swiper-slide course-block_three col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="course-block_three-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <div class="course-block_three-image">
                                <a href="{{ route('frontend.package.details', ['slug' => $item->package_name_slug]) }}"><img src="{{ asset($item->package_image) }}" alt="" /></a>
                            </div>
                            <div class="course-block_three-content">
                                <div class="course-block_three-lower d-flex justify-content-between flex-wrap text-center">
                                    <div class="course-block_three-author">
                                        <strong>{{ $item->package_name }}</strong>
                                    </div>
                                </div>
                                <div class="course-block_three-heading text-justify">
                                    {!! Str::limit($item->package_short_description, 200) !!}
                                </div>
                                <ul class="course-block_three-list d-flex justify-content-between flex-wrap align-items-center">
                                    <li><span>{{ $item->package_duration }}</span> days</li>
                                    <div class="course-block_three-price d-flex">Start From <span> ৳{{ $item->package_price_without_food }}</span></div>
                                </ul>
                                <div class="button-box">
                                    <a class="theme-btn" href="{{ route('frontend.package.details', ['slug' => $item->package_name_slug]) }}">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

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

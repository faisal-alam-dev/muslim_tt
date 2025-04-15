<section class="slider-one">
    <div class="main-slider swiper-container">
        <div class="swiper-wrapper">

            @foreach ($slider as $item)
                <div class="swiper-slide">
                    <div class="slider-one_image-layer" style="background-image:url({{ asset($item->slider_image) }})"></div>
                    <div class="auto-container">

                        <!-- Content Column -->
                        <div class="slider-one_content">
                            <div class="slider-one_content-inner">
                                {{-- <div class="slider-one_title">Largest Online Madrasah</div> --}}
                                <h1 class="slider-one_heading">{!! $item->title !!}</h1>
                                <div class="slider-one_text">{!! $item->short_description !!}</div>
                                {{-- <div class="slider-one_button">
                                <a href="#!" class="theme-btn btn-style-two">
                                    <span class="btn-wrap">
                                        <span class="text-one">Find the package</span>
                                        <span class="text-two">Find the package</span>
                                    </span>
                                </a>
                            </div> --}}
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach


        </div>
        <div class="slider-one-arrow">
            <!-- If we need navigation buttons -->
            <div class="main-slider-prev fas fa-arrow-left fa-fw"></div>
            <div class="main-slider-next fas fa-arrow-right fa-fw"></div>
        </div>
    </div>
</section>

<!-- resources/views/components/home/carousel.blade.php -->

<div class="carousel_component swiper-container">
    <div class="carouselImages swiper-wrapper">
        @foreach($images as $image)
            <div class="imgContainer swiper-slide">
                <div>
                    <img
                        alt="{{ $image['alt'] }}"
                        class="img lazyload"
                        data-aos="fade-in"
                        height="{{ $image['height'] }}"
                        width="{{ $image['width'] }}"
                        src="{{ asset($image['src']) }}"
                        loading="lazy"
                    >
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="swiper-pagination"></div>

    <!-- Navigation buttons -->
    <div class="swiper-button-next  swiper-button-color"></div>
    <div class="swiper-button-prev  swiper-button-color"></div>
</div>


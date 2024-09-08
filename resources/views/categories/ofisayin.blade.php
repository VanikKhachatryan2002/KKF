@include('headers.header')
@include('headers.header2')
@include('headers.video')
<main>
    <div class="categoriesContainer category_ofisayin">
        <h1>ՕՖԻՍԱՅԻՆ</h1>
        <div class="swiper-container-categories">
            <div class="swiper-wrapper">
                @foreach($images as $image)
                    <div class="swiper-slide">
                        <a href="{{ asset($image['url']) }}"  data-fancybox="gallery">
                            <img
                                alt="{{ $image['url'] }}"
                                class="img lazyload"
                                data-aos="fade-in"
                                height="350"
                                width="400"
                                src="{{ asset($image['url']) }}"
                                data-src="{{ asset($image['url']) }}"
                                loading="lazy"
                            >
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
@include('footer.footer')

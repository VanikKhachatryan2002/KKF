@include('headers.header')
@include('headers.header2')
@include('headers.video')

<main>
    <div class="categoriesContainer category_hyurasenyak">
        <h1>ՀՅՈՒՐԱՍԵՆՅԱԿ</h1>
        <div class="swiper-container-categories">
            <div class="swiper-wrapper">
                @foreach($images as $index => $image)
                    <div class="swiper-slide">
                        <a href="{{ asset($image['url']) }}"  data-fancybox="gallery"  data-caption= "Image {{$index + 1}}">
                            <img
                                alt="Image {{$index + 1}}"
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

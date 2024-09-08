@include('headers.header')
@include('headers.header2')
@include('headers.video')
<main>
    <div class="service-container">
        <h1  data-aos="fade-in" data-aos-duration="1200" class="aos-init aos-animate services_title">ԾԱՌԱՅՈՒԹՅՈՒՆՆԵՐ</h1>
        <div  class="services_container">
            @foreach($services as $service)
                <div class="services aos-init" data-aos="fade-up" data-aos-duration="1200">
                    <div class="img_container">
                        <img alt="{{ $service['title'] }}" width="300" height="300" class="lazyload" data-src="{{ $service['imgUrl'] }}">
                    </div>
                    <div class="desc_container" data-aos="fade-up" data-aos-duration="1200">
                        <h2>{{ $service['title'] }}</h2>
                        <p>{{ $service['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>
@include('footer.footer')

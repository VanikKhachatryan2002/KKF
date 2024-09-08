<!-- resources/views/components/home/works.blade.php -->

<div class="works_container">
    <h2>ՄԵՐ ԱՇԽԱՏԱՆՔՆԵՐԸ</h2>
    <div class="works">
        @foreach($works as $work)
            <div class="work fade-in aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200">
                <a href="{{ asset($work['href']) }}" class="" aria-label="work">
                    <div class="img lazyload" style="background-image: url('{{ asset($work['img']) }}')">
                        <div class="hoverCategory">
                            <h3>{{ $work['title'] }}</h3>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

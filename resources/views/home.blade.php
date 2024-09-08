@include('headers.header')
@include('headers.header2')
@include('headers.video')
<main>
    <div class="container">
        @component('components.home.about')
        @endcomponent

        @component('components.home.carousel',['images' => $images])
        @endcomponent

        @component('components.home.works',['works' => $works])
        @endcomponent
    </div>
</main>
@include('footer.footer')


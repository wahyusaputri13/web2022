@extends('front.layouts.app')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">{{ $data_website->web_name }}</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">{{ $data_website->web_description }}</h2>
                <audio id="audio_1">
                    <source src="{{ $data_website->url_stream }}" type="audio/mpeg">
                </audio>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center btn-playstream"
                            value="off">
                            <span>Streaming Radio</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                @if($data_website->image_hero)
                <img src="{{ asset('storage') }}/{{ $data_website->image_hero }}" class="img-fluid" alt="">
                @else
                <img src="{{ asset('assets/front/assets/img/hero-img.png') }}" class="img-fluid" alt="">
                @endif
            </div>
        </div>
    </div>

</section>
<!-- End Hero -->
@if($news->count() != 0)
<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Blog</h2>
            <p>Recent posts form our Blog</p>
        </header>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                @if(Route::current()->getName() == 'news.all')
                {!! $news->render() !!}
                <!-- {{ $news->links() }} -->
                @else
                <!-- <ul id="recent-blog-posts-flters"> -->
                <a href="{{ url('/newsall') }}">Show All</a>
                <!-- </ul> -->
                @endif
            </div>
        </div>
        <div class="row mt-4">
            @foreach($news as $n)
            <div class="col-lg-4">
                <div class="post-box">
                    <div class="post-img">
                        <img src="{{ asset('storage/') }}/{{ $n->path}}" class="img-fluid" alt="">
                    </div>
                    <span class="post-date">{{ \Carbon\Carbon::parse($n->date)->format('l') }}, {{
                        \Carbon\Carbon::parse( $n->date
                        )->toFormattedDateString() }}</span>
                    <h3 class="post-title">{{ $n->title }}
                    </h3>
                    <a href="{{ url('/news-detail', $n->id) }}" class="readmore stretched-link mt-auto"><span>Read
                            More</span><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section>
<!-- End Recent Blog Posts Section -->
@endif
@if($gallery->count() != 0)
<!-- ======= Gallery Section ======= -->
<section id="gallery" class="portfolio">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Gallery</h2>
            <p>Check our latest photo</p>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                @if(Route::current()->getName() == 'photo.all')
                {!! $gallery->render() !!}
                <!-- {{ $gallery->links() }} -->
                @else
                <ul id="portfolio-flters">
                    <a href="{{ url('/photos') }}">Show All</a>
                </ul>
                @endif
            </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach($gallery as $g)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap d-flex justify-content-center">
                    <img src="{{ asset('storage/') }}/{{ $g->path}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{ $g->description }}</h4>
                        <!-- <p>App</p> -->
                        <div class="portfolio-links">
                            <a href="{{ asset('storage/') }}/{{ $g->path}}" data-gallery="portfolioGallery"
                                class="portfokio-lightbox" title="{{ $g->description }}"><i class="bi bi-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section>
<!-- End Gallery Section -->
@endif
@endsection
@push('after-script')
<script>
    $('.btn-playstream').click(function () {
        currentvalue = document.getElementById('audio_1').value;
        if (currentvalue == "on") {
            document.getElementById('audio_1').pause();
            document.getElementById("audio_1").value = "off";
            console.log("off!");
        } else {
            document.getElementById('audio_1').play();
            document.getElementById("audio_1").value = "on";
            console.log("on!");
        }
        // function playmusik() {
        //     var song = new Audio();
        //     song.src = "http://i.klikhost.com:8234/stream";
        //     // song.autoplay = true;
        //     song.play;
        // }
        // window.addEventListener("load", playmusik);
    });
</script>
@endpush
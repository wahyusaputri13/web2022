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

</section><!-- End Hero -->
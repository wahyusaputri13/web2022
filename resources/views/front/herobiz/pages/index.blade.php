@extends('front.herobiz.layouts.app')
@section('content')
<section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
        data-aos="zoom-out">
        <img src="{{ asset('assets/front/herobiz/assets/img/hero-carousel/hero-carousel-3.svg') }}"
            class="img-fluid animated">
        <h2>Welcome to <span>{{ $data_website->web_name }}</span></h2>
        <p>{{ $data_website->web_description }}</p>
        <div class="d-flex">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch
                    Video</span></a>
        </div>
    </div>
</section>
<main id="main">
    @if($gallery->count() != 0)
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio" data-aos="fade-up">
        <div class="container">
            <div class="section-header">
                <h2>Gallery</h2>
            </div>
        </div>
        <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">
            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order">
                <ul class="portfolio-flters">
                    <!-- <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-product">Product</li>
                    <li data-filter=".filter-branding">Branding</li>
                    <li data-filter=".filter-books">Books</li> -->
                </ul>
                <!-- End Portfolio Filters -->
                <div class="row g-0 portfolio-container">
                    @foreach($gallery as $g)
                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('storage/') }}/{{ $g->path}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{ $g->description }}</h4>
                            <a href="{{ asset('storage/') }}/{{ $g->path}}" title="{{ $g->description }}"
                                data-gallery="portfolio-gallery" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <!-- <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a> -->
                        </div>
                    </div>
                    <!-- End Portfolio Item -->
                    @if($loop->iteration == 12)
                    @break
                    @endif
                    @endforeach
                </div>
                <div class="d-flex justify-content-end m-2">
                    <a href="{{ url('photos') }}" class="btn"
                        style="background-color: var(--color-primary); color: white;">Show
                        All</a>
                </div>
                <!-- End Portfolio Container -->

            </div>

        </div>
    </section><!-- End Portfolio Section -->
    @endif
    @if($news->count() != 0)
    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Blog</h2>
                <p>Recent posts form our Blog</p>
            </div>

            <div class="row">
                @foreach($news as $n)
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="post-box">
                        <div class="post-img"><img src="{{ asset('storage/') }}/{{ $n->path}}" class="img-fluid"></div>
                        <div class="meta">
                            <span class="post-date">{{ \Carbon\Carbon::parse($n->date)->format('l') }}, {{
                                \Carbon\Carbon::parse( $n->date
                                )->toFormattedDateString() }}</span>
                            <span class="post-author"> / {{ $n->upload_by }}</span>
                        </div>
                        <h3 class="post-title">
                            {{ $n->title }}
                        </h3>
                        <p>Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores
                            eum ipsa
                            est officiis. Modi cupiditate exercitationem qui magni est...</p>
                        <a href="{{ url('/news-detail', $n->id) }}" class="readmore stretched-link"><span>Read
                                More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                @if($loop->iteration == 3)
                @break
                @endif
                @endforeach
                <div class="d-flex justify-content-end m-2">
                    <a href="{{ route('news.all') }}" class="btn"
                        style="background-color: var(--color-primary); color: white;">Show All</a>
                </div>
            </div>

        </div>

    </section><!-- End Recent Blog Posts Section -->
    @endif
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2>Contact Us</h2>
            </div>
        </div>

        <div class="map">
            <iframe src="https://maps.google.com/maps?q={{ $data_website->latitude }},{{
                                            $data_website->longitude }}&z=14&output=embed" frameborder="0"
                allowfullscreen></iframe>
        </div>

        <div class="container">
            <div class="row gy-5 gx-lg-5">
                <div class="col-lg-4">
                    <div class="info">
                        <h3>{{ $data_website->web_name }}</h3>
                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Location:</h4>
                                <p>{{ $data_website->address }}</p>
                            </div>
                        </div>
                        <!-- End Info Item -->
                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>{{ $data_website->email }}</p>
                            </div>
                        </div>
                        <!-- End Info Item -->
                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Call:</h4>
                                <p>{{ $data_website->phone }}</p>
                            </div>
                        </div>
                        <!-- End Info Item -->
                    </div>
                </div>
                <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>
    </section><!-- End Contact Section -->

</main>
<!-- End #main -->
@endsection
@push('after-script')
@endpush
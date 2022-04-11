@extends('front.arsha.layouts.app')
@section('content')
@if($gallery->count() != 0)
<main id="main">

    <!-- keanehan yang terjadi jika div dibawah ini dihapus maka slideshow blank hitam -->
    <div class="skills-content">
    </div>
    <!-- end of aneh -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="portfolio">

        <div class="container mt-5" data-aos="fade-up">

            <div class="section-title">
                <h2>Gallery</h2>
                <!-- <p>Check our latest photo</p> -->
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    {!! $gallery->render() !!}
                    <!-- {{ $gallery->links() }} -->
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @foreach($gallery as $g)
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-img"><img src="{{ asset('storage/') }}/{{ $g->path}}" class="img-fluid"
                            alt="">
                    </div>
                    <div class="portfolio-info">
                        <h4>{{ $g->description }}</h4>
                        <!-- <p>App</p> -->
                        <a href="{{ asset('storage/') }}/{{ $g->path}}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="{{ $g->description }}"><i
                                class="bx bx-plus"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </section>
    <!-- End Gallery Section -->
</main>
<!-- End #main -->
@endif
@endsection
@push('after-script')
<!-- <script>
    $(function () {
        $('body').on('click', '.pagination a', function (e) {
            e.preventDefault();
            $('#load').append('<img style="position: absolute; left: 0; top: 0; z-index: 10000;" src="https://i.imgur.com/v3KWF05.gif />');
            var url = $(this).attr('href');
            window.history.pushState("", "", url);
            loadPosts(url);
        });
        function loadPosts(url) {
            $.ajax({
                url: url
            }).done(function (data) {
                $('.portfolio').html(data);
            }).fail(function () {
                console.log("Failed to load data!");
            });
        }
    });
</script> -->
@endpush
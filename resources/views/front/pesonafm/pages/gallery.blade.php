@extends('front.pesonafm.layouts.app')
@section('content')
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

        <div class="max-w-sm rounded overflow-hidden shadow-lg">
  <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
    <p class="text-gray-700 text-base">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
    </p>
  </div>
  <div class="px-6 pt-4 pb-2">
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
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
                            <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
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
</script>
@endpush
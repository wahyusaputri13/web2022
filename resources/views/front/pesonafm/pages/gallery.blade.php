@extends('front.pesonafm.layouts.app')
@section('content')
@if($gallery->count() != 0)
<body class="dark:bg-slate-800 dark:text-slate-200">
    <h1 class="text-8xl font-bold text-center my-10"> Gallery  <span class="bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent">Section</span>  </h1>
<section id="recent-blog-posts" class="recent-blog-posts">
<!-- ======= Gallery Section ======= -->
<section id="gallery" class="portfolio">

    <div class="container" data-aos="fade-up">
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
    <section class="overflow-hidden text-gray-700">
    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach($gallery as $g)
  <div class="container px-3 py-2 mx-auto lg:pt-24 lg:px-32">
    <div class="flex flex-wrap -m-1 md:-m-2">
      <div class="flex flex-wrap w-1/2">
        <div class="w-1/2 p-1 md:p-2"> 
          <img src="{{ asset('storage') }}/{{ $g->path}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{ $g->description }}</h4>
                        <div class="portfolio-links">
                            <a href="{{ asset('storage') }}/{{ $g->path}}" data-gallery="portfolioGallery"
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
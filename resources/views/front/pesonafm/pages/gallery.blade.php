@extends('front.pesonafm.layouts.app')
@section('content')
@if($gallery->count() != 0)
<h1 class="text-8xl font-bold text-center my-10"> Gallery <span
        class="bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent">Section</span> </h1>
<!-- ======= Gallery Section ======= -->
<section id="gallery" class="portfolio">
    <div class="container px-3 py-2 mx-auto lg:pt-24 lg:px-32">
        <div class="flex flex-wrap m-1 md:m-2">
            @foreach($gallery as $g)
            <div class="flex flex-wrap w-1/3">
                <div class="w-full p-1 md:p-2">
                    @if(file_exists(public_path('storage/'.$g->path)))
                    <img src="{{ asset('storage') }}/{{ $g->path}}" class="img-fluid" alt="image">
                    @else
                    <img src="{{ asset('img/soulofjava.jpg') }}" class="img-fluid" alt="image">
                    @endif
                    <div class="portfolio-info">
                        <h4 class="text-center">{{ $g->description }}</h4>
                        <div class="portfolio-links">
                            <a href="{{ asset('storage') }}/{{ $g->path}}" data-gallery="portfolioGallery"
                                class="portfokio-lightbox" title="{{ $g->description }}"><i class="bi bi-plus"></i></a>
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
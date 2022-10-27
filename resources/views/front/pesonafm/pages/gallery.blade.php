@extends('front.pesonafm.layouts.app')
@section('content')
@if($gallery->count() != 0)
<div class="container mx-auto py-1">
  <div class="h-screen flex flex-col justify-between">
    <div class="flex justify-between m-2 sm:mx-4">
    <a href="{{url('/')}}">
      <h1 class="text-3xl font-bold text-center mx-10"> <span class="bg-gradient-to-r from-red-500 to-rose-400 bg-clip-text text-transparent"> 92.1 FM Radio Pesona</span> </h1>
</a>
      <div class="flex space-x-4 font-medium sm:text-lg">
        <a href="{{url('/newsall')}}" class="hover:scale-125  text-red-500">News</a>
        <a href="{{url('/photos')}}" class="hover:scale-125 text-red-500">Gallery</a>
        <a href="#" class="hover:scale-125 text-red-500">Contact</a>
        <a href="{{ url('login') }}" class="hover:scale-125 text-red-500">Login</a>
      </div>
    </div>
<a href="{{url('/')}}">
<h1 class="text-8xl font-bold text-center my-10"> Gallery <span
        class="bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent">Section</span> </h1>
</a>
<!-- ======= Gallery Section ======= -->
<section id="gallery" class="portfolio">
    <div class="container px-3 py-2 mx-auto lg:pt-24 lg:px-32 ">
        <div class="flex flex-wrap m-1 md:m-2">
            @foreach($gallery as $g)
            <div class="flex flex-wrap w-1/3 ">
                <div class="w-full p-1 md:p-2">
                    <div class="relative overflow-hidden bg-no-repeat bg-black bg-cover shadow-lg rounded-lg"
                        style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="light">
                        @if(file_exists(public_path('storage/'.$g->path)))
                        <img src="{{ asset('storage') }}/{{ $g->path}}" class="img-fluid" alt="image">
                        @else
                        <img src="{{ asset('img/soulofjava.jpg') }}" class="img-fluid" alt="image">
                        @endif
                        <div class="portfolio-info">
                            <h4 class="text-center">{{ $g->description }}</h4>
                            <div class="portfolio-links ">
                                <a href="{{ asset('storage') }}/{{ $g->path}}" data-gallery="portfolioGallery"
                                    class="portfokio-lightbox" title="{{ $g->description }}"><i
                                        class="bi bi-plus"></i></a>
                            </div>

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
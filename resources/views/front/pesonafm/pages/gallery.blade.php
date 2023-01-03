@extends('front.pesonafm.layouts.app')
@section('content')

<style>
  .card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
  }
</style>
<div class="container mx-auto py-1">

  <!-- <div class="flex justify-between m-1 sm:mx-2">
    <a href="{{url('/')}}">
      <h1 class="text-3xl font-bold text-center mx-10"> <span
          class="bg-gradient-to-r from-red-500 to-rose-400 bg-clip-text text-transparent"> 92.1 FM Radio
          Pesona</span> </h1>
    </a>
    <div class="flex space-x-4 font-medium sm:text-lg">
      <a href="{{url('/newsall')}}" class="hover:scale-125  text-red-500">News</a>
      <a href="{{url('/photos')}}" class="hover:scale-125 text-red-500">Tips & Trick</a>
      <a href="https://api.whatsapp.com/send?phone=6282323839996" class="hover:scale-125 text-red-500">Contact</a>
      <a href="{{ url('login') }}" class="hover:scale-125 text-red-500">Login</a>
    </div>
  </div> -->

  <a href="{{url('/')}}">
    <h1 class="text-8xl font-bold text-center my-10"> Tips & <span
        class="bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent">Trick</span> </h1>
  </a>
  <a class="bg-red-500 px-10 py-2 w-20 h-30 text-white text-center rounded-lg" href="{{ url('/') }}">Back</a>

  <!-- ======= News Section ======= -->
  <div class="container my-24 px-6 mx-auto">

    <!-- Section: Design Block -->
    <section class="mb-32 text-gray-800">
      <div id="body" class="flex flex-wrap m-1 md:m-2">
        @foreach($gallery as $g)
        <div class="flex flex-wrap w-1/3 hover:scale-125 focus:outline-none px-6 py-5">
          <div class="w-full p-3 md:p-2">
            <div class="relative overflow-hidden bg-no-repeat bg-black bg-cover shadow-lg rounded-lg"
              style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="light">
              @if(file_exists(public_path('storage/'.$g->path)))
              <img src="{{ asset('storage') }}/{{ $g->path}}" class="img-fluid" alt="image">
              @else
              <img src="{{ asset('img/soulofjava.jpg') }}" class="img-fluid" alt="image">
              @endif
              <div class="portfolio-info">
                <h4 class="text-center" style="color: #ffffff;">{{ $g->description }}</h4>
                <div class="portfolio-links ">
                  <a href="{{ asset('storage') }}/{{ $g->path}}" data-gallery="portfolioGallery"
                    class="portfokio-lightbox" title="{{ $g->description }}"><i class="bi bi-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <div class="row mt-3" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          {{ $gallery->links('pagination::tailwind') }}
        </div>
      </div>

    </section>
    <!-- End News Section -->

  </div>
</div>

@endsection
@push('after-script')
@endpush
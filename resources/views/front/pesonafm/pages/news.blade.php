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

  <div class="flex justify-between m-1 sm:mx-2">
    <a href="{{url('/')}}">
      <h1 class="text-3xl font-bold text-center mx-10"> <span class="bg-gradient-to-r from-red-500 to-rose-400 bg-clip-text text-transparent"> 92.1 FM Radio
          Pesona</span> </h1>
    </a>
    <div class="flex space-x-4 font-medium sm:text-lg">
      <a href="{{url('/newsall')}}" class="hover:scale-125  text-red-500">News</a>
      <a href="{{url('/photos')}}" class="hover:scale-125 text-red-500">Tips & Trick</a>
      <a href="https://api.whatsapp.com/send?phone=6282323839996" class="hover:scale-125 text-red-500">Contact</a>
      <a href="{{ url('login') }}" class="hover:scale-125 text-red-500">Login</a>
    </div>
  </div>
  <a href="{{url('/')}}">
    <h1 class="text-8xl font-bold text-center my-10"> Breaking <span class="bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent">News Pesona</span> </h1>
  </a>
  <a class="bg-red-500 px-10 py-2 w-20 h-30 text-white text-center rounded-lg"  href="{{ url('/') }}">Back</a>

  
  <h3 class="sidebar-title text-black after:">Search</h3>
  <div class="sidebar-item search-form text-black">
    {{Form::open(['route' => 'news.search','method' => 'get', ''])}}
    {{Form::text('kolomcari', null,['class' => 'form-control', 'placeholder' => 'Title Post'])}}
    <button type="submit"><i class="bi bi-search text-black"></i></button>
    {{Form::close()}}
  </div>
  <!-- ======= News Section ======= -->
  <div class="container my-24 px-6 mx-auto">

    <!-- Section: Design Block -->
    <section class="mb-32 text-gray-800">
      <div id="body" class="flex flex-wrap m-1 md:m-2">
        @foreach($news as $n)
        <div class="bottom-2 top-2 flex flex-wrap w-1/3 mx-4 my-6 bg-gradient-to-r from-gray-100 to-gray-500 content-end rounded-md ">
          <a href="{{ url('/news-detail', $n->slug) }}">
            <div class="rounded-lg shadow-lg  max-w-sm">
              @if(file_exists(public_path('storage/'.$n->path)))
              <img src="{{ asset('storage') }}/{{ $n->path}}" class=" bg-blend-normal rounded-lg" alt="image" />
              
              @else
              <img src="{{ asset('img/soulofjava.jpg') }}" class="img-fluid rounded-lg" alt="image"/>
             
              @endif
              <div class="bottom-0 left-0 right-0 px-4 py-2 bg-gray-500 opacity-60 rounded-lg space-y-3">
              <p class="text-center text-white z-10" style="top: 50%; left: 50%;">
                {{ \Carbon\Carbon::parse($n->date)->format('l') }},
                {{
                  \Carbon\Carbon::parse( $n->date
                 )->toFormattedDateString() }}
              </p>
              <h3 class="post-title text-white font-bold">{{ $n->title }}
              </h3>
              </div>
            </div>
          </a>
        </div>

        @endforeach
      </div>

      <div class="row mt-3" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          {{ $news->links('pagination::tailwind') }}
        </div>
      </div>

    </section>
    <!-- End News Section -->
    @endsection
    @push('after-script')
    @endpush
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
      <a href="{{ url('/newsall') }}" class="hover:scale-125 text-red-500">Back</a>
      <a href="{{ url('login') }}" class="hover:scale-125 text-red-500">Login</a>
    </div>
  </div>
  <a href="{{url('/')}}">
    <h1 class="text-8xl font-bold text-center my-10"> Recent posts <span class="bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent">form our
        Blog</span> </h1>
  </a>

  <section class="max-w-7xl flex flex-col mx-auto justify-center bg-red-300 shadow-xl items-center px-3 py-2 rounded-lg">

    <p class="text-3xl text-white px-4 py-8 text-center stroke-gray-500 font-bold sm:text-4xl sm:pt-18">
      {{ $data->title }}
    </p>

    <p class="text-center ">
      <img class="max-w-lg h-auto rounded-lg" src="{{ asset('storage/') }}/{{ $data->path}}">
    </p>
    <br>
    <div class="w-auto px-3 py-5 inset-5 bg-gray-500 opacity-80 text-white text-justify">
      <p class="text-xl text-center mb-16 font-thin sm:font-normal sm:font-serif">
      <ul>
        <li class="d-flex align-items-center text-black"><i class="bi bi-clock"></i> <a href="#"><time>{{
                                            \Carbon\Carbon::parse( $data->date )->format('l') }}, {{
                                            \Carbon\Carbon::parse( $data->date
                                            )->toFormattedDateString() }}</time></a></li>
      </ul>
      </p>
      <section class="prose lg:prose-xl  text-white font-serif">
        <p> {!! $data->description !!} </p>
      </section>
    </div>

  </section>
  <!-- ======= Blog Single Section ======= -->


  <!-- End Blog Single Section -->

  </main>
  @endsection
  @push('after-script')
  @endpush
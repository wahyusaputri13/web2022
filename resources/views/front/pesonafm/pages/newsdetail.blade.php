@extends('front.pesonafm.layouts.app')
@section('content')
<div class="container mx-auto py-1">
  <div class="flex mt-10">
    <div class="basis-1/2 text-right">
      <a href="{{url('/')}}" class="sm:text-4xl font-bold">
        <h1 class="font-bold text-right"> Recent posts </h1>
    </div>
    <div class="basis-1/2">
      <span class="bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent">form our
        Blog</span>
      </a>
    </div>
  </div>

  <div class="mt-10">
    <a class="bg-red-500 px-10 py-2 w-20 h-30  text-white text-center rounded-lg" href="{{ url('/newsall') }}">Back</a>
  </div>

  <section class="max-w-7xl flex flex-col mx-auto justify-center shadow-xl items-center px-3 py-2 rounded-lg">
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
  </main>
  @endsection
  @push('after-script')
  @endpush
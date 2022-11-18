@extends('front.pesonafm.layouts.app')
@section('content')

<div class="container mx-auto py-1">

  <div class="flex justify-between m-1 sm:mx-2">
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
  </div>
  <a href="{{url('/')}}">
    <h1 class="text-8xl font-bold text-center my-10"> Struktur Organisasi<span
        class="bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent"> & Redaksi </span> </h1>
  </a>

  @endsection
  @push('after-script')
  @endpush
@extends('front.pesonafm.layouts.app')
@section('content')

<div class="flex justify-between m-2 sm:mx-4">
      <a href="{{url('/')}}">
        <h1 class="text-3xl font-bold text-center mx-10"> <span
            class="bg-gradient-to-r from-red-500 to-rose-400 bg-clip-text text-transparent"> 92.1 FM Radio Pesona</span>
        </h1>
      </a>
      <div class="flex space-x-4 font-medium sm:text-lg">
        <a href="{{url('/newsall')}}" class="hover:scale-125  text-red-500">News</a>
        <a href="{{url('/photos')}}" class="hover:scale-125 text-red-500">Tips & Trik</a>
        <a href="https://api.whatsapp.com/send?phone=6282323839996" class="hover:scale-125 text-red-500">Contact</a>
        <a href="{{ url('login') }}" class="hover:scale-125 text-red-500">Login</a>
      </div>
    </div>
<a href="{{url('/')}}">
    <h1 class="text-8xl font-bold text-center my-10"> Chart<span
            class="bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent">Music</span> </h1>
</a>

<!-- ======= Chart Music ======= -->
<section id="music" class="portfolio">

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th> ranking </th>
                <th> song </th>
                <th> artist </th>
                <th> years </th>
            </tr>
        </thead>
        <tbody>
            @foreach($music as $m)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td> {{ $m->ranking }} </td>
                <td> {{ $m->song }} </td>
                <td> {{ $m->artist }} </td>
                <td> {{ $m->years }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
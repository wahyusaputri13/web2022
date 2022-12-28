@extends('front.pesonafm.layouts.app')
@section('content')

<div class="flex justify-between m-2 sm:mx-4">
    <a href="{{url('/')}}">
        <h1 class="text-3xl font-bold text-center mx-10"> <span class="bg-gradient-to-r from-red-500 to-rose-400 bg-clip-text text-transparent"> 92.1 FM Radio Pesona</span>
        </h1>
    </a>
    <div class="flex space-x-4 font-medium sm:text-lg">
        <a href="{{url('/newsall')}}" class="hover:scale-125  text-red-500">News</a>
        <a href="{{url('/photos')}}" class="hover:scale-125 text-red-500">Tips & Trick</a>
        <a href="https://api.whatsapp.com/send?phone=6282323839996" class="hover:scale-125 text-red-500">Contact</a>
        <a href="{{ url('login') }}" class="hover:scale-125 text-red-500">Login</a>
      
    </div>
</div>
<a href="{{url('/')}}">
    <h1 class="text-8xl font-bold text-center my-10"> Chart<span class="bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent">Music</span> </h1>
</a>

<a class="bg-red-500 w-20 h-30  text-white text-center rounded-lg"  href="{{ url('/') }}">Back</a>
<!-- ======= Chart Music ======= -->
<section id="music" class="portfolio">
    <table class="table-auto mx-auto mt-10 text-blue-500 dark:text-white">
        <thead class="text-xl  text-white uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="px-4 py-2 col-span-2 text-center"> Ranking </th>
                <th class="px-4 py-2 col-span-4 text-center"> Song </th>
                <th class="px-4 py-2 col-span-2 text-center"> Years </th>
            </tr>
        </thead>
        <tbody>

            @foreach($music as $m)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-4 py-2 text-center col-span-2 row-span-2" rowspan="2"> {{ $m->ranking }} </td>
                <td class="px-4 py-2 col-span-4"> {{ $m->song }} </td>
                <td class="px-4 py-2 text-center col-span-2 row-span-2" rowspan="2"> {{ $m->years }} </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-4 py-2 col-span-4" colspan="1">{{ $m->artist }}</td>
            </tr>
            </div>
            @endforeach
        </tbody>
    </table>
    @endsection
@extends('front.pesonafm.layouts.app')
@section('content')
<div class="flex flex-col h-screen">
    <div class="flex-grow">
        <div class="container mx-auto py-1">

            <a href="{{url('/')}}">
                <h1 class="text-8xl font-bold text-center my-10"> <span
                        class="bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent">Jadwal Program
                        &
                        Event</span> </h1>
            </a>

            <a class="bg-red-500 px-10 py-2 w-20 h-30  text-white text-center rounded-lg" href="{{ url('/') }}">Back</a>

            <div class="flex justify-center group-hover:scale-125 my-10">
                <img src="{{ asset('assets/front/pesonafm/jadwal program senin-jumat.jpg') }}" class="max-w-full h-auto"
                    alt="jadwal program senin-jumat.jpg">
            </div>

            <div class="flex justify-center group-hover:scale-125 my-10">
                <img src="{{ asset('assets/front/pesonafm/jadwal program sabtu.jpg') }}" class="max-w-full h-auto"
                    alt="jadwal program sabtu.jpg">
            </div>

            <div class="flex justify-center group-hover:scale-125 my-10">
                <img src="{{ asset('assets/front/pesonafm/jadwal program minggu.jpg') }}" class="max-w-full h-auto"
                    alt="jadwal program minggu.png">
            </div>

            <div class="flex justify-center group-hover:scale-125 my-10">
                <img src="{{ asset('assets/front/pesonafm/page0001.jpg') }}" class="max-w-full h-auto"
                    alt="page0001.jpg">
            </div>

            <div class="flex justify-center group-hover:scale-125 my-10">
                <img src="{{ asset('assets/front/pesonafm/page0002.jpg') }}" class="max-w-full h-auto"
                    alt="page0002.jpg">
            </div>

            <div class="flex justify-center group-hover:scale-125 my-10">
                <img src="{{ asset('assets/front/pesonafm/page0003.jpg') }}" class="max-w-full h-auto"
                    alt="page0003.jpg">
            </div>
            
        </div>
    </div>
    @endsection

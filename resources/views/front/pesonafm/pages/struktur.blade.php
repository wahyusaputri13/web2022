@extends('front.pesonafm.layouts.app')
@section('content')
<div class="flex flex-col h-screen">
    <div class="flex-grow">
        <div class="container mx-auto py-1">
            <a href="{{url('/')}}">
                <h1 class="text-4xl lg:text-8xl font-bold text-center my-10">Our <span
                        class="bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent">Crew</span>
                </h1>
            </a>

            <div class="my-10">
                <a class="bg-red-500 px-10 py-2 w-20 h-30 text-white text-center rounded-lg"
                    href="{{ url('/') }}">Back</a>
            </div>

            <section class="overflow-hidden text-gray-700 ">
                <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
                    <div class="flex flex-wrap -m-1 md:-m-2 bg-white rounded-xl">
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-center object-contains h-50 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/crew/ILHAM.png')}}" alt="ILHAM.png">
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-contains object-center h-50 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/crew/SARI.png')}}" alt="SARI.png">
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-contains object-center h-50 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/crew/PELANGI.png')}}" alt="PELANGI.png">
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-contains object-center h-50 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/crew/DESTA.png')}}" alt="DESTA.png">
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-contains object-center h-50 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/crew/ORIK.jpeg')}}" alt="ORIK.jpeg">
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-contains object-center h-50 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/crew/NUR_KHASANAH.png')}}"
                                    alt="NUR_KHASANAH.png">
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-contains object-center h-50 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/crew/MITA.jpeg')}}" alt="MITA.jpeg">
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-contains object-center h-50 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/crew/FAZA.png')}}" alt="FAZA.png">
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-contains object-center h-50 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/crew/TUNJANG.jpeg')}}" alt="TUNJANG.jpeg">
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-contains object-center h-50 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/crew/EKA.png')}}" alt="EKA.png">
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-contains object-center h-50 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/crew/IKBAL.png')}}" alt="IKBAL.png">
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-contains object-center h-50 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/crew/TITO.png')}}" alt="TITO.png">
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-contains object-center h-50 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/crew/PELE.png')}}" alt="PELE.png">
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-contains object-center h-50 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/crew/PRAMONO.jpeg')}}" alt="PRAMONO.jpeg">
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-contains object-center h-50 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/crew/ANDHIKA.png')}}" alt="ANDHIKA.png">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="flex justify-center group-hover:scale-125 my-10">
                <img src="{{ asset('assets/front/pesonafm/STRUKTURPESONAOK.png') }}" class="max-w-full h-auto"
                    alt="STRUKTUR PESONA FM.png">
            </div>

            <div class="grid">
                <div class="mb-5 lg:invisible">
                    <div class="text-center mb-2">© 2023 DISKOMINFO by Isa Maulana Tantra</div>
                </div>
            </div>

        </div>
    </div>


    @endsection
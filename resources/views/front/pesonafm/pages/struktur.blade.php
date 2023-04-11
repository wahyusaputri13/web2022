@extends('front.pesonafm.layouts.app')
@section('content')
<div class="flex flex-col h-screen">
    <div class="flex-grow">
        <div class="container mx-auto py-1">
            <a href="{{url('/')}}">
                <h1 class="text-8xl font-bold text-center my-10">Our <span
                        class="bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent">Crew</span>
                </h1>
            </a>

            <a class="bg-red-500 px-10 py-2 w-20 h-30  text-white text-center rounded-lg" href="{{ url('/') }}">Back</a>

            <section class="overflow-hidden text-gray-700 ">
                <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
                    <div class="flex flex-wrap -m-1 md:-m-2 bg-white rounded-xl">
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-center object-contains h-48 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/toonmecom_e581aa.jpeg')}}"
                                    alt="toonmecom_e581aa.jpeg">
                                <p class="text-left font-bold">Ilham Ardha Saputra</p>
                                <p class="text-left">Direktur Utama</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-contains object-center h-48 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/toonmecom_a672f3.jpeg')}}"
                                    alt="toonmecom_a672f3.jpeg">
                                <p class="text-left font-bold">Tito Suseno</p>
                                <p class="text-left">Staff Teknis</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-contains object-center h-48 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/toonmecom_b156a2.jpeg')}}"
                                    alt="toonmecom_b156a2.jpeg">
                                <p class="text-left font-bold">Nur Khasanah (Meita)</p>
                                <p class="text-left">Staf Produksi</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-contains object-center h-48 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/toonmecom_d67b61.jpeg')}}"
                                    alt="toonmecom_d67b61.jpeg">
                                <p class="text-left font-bold">Desta Ariyani A</p>
                                <p class="text-left">Staff Administrasi</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-contains object-center h-48 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/toonmecom_f9fc30.jpeg')}}"
                                    alt="toonmecom_f9fc30.jpeg">
                                <p class="text-left font-bold">Eka Saputri</p>
                                <p class="text-left">Staf Penyiar</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-contains object-center h-48 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/toonmecom_80dde5.jpeg')}}"
                                    alt="toonmecom_80dde5.jpeg">
                                <p class="text-left font-bold">Mita Rosana</p>
                                <p class="text-left">Pemberitaan/Penyiar</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-contains object-center h-48 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/toonmecom_12361c.jpg')}}"
                                    alt="toonmecom_12361c.jpg">
                                <p class="text-left font-bold">Faza Luthfia</p>
                                <p class="text-left">Reporter/Penyiar</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-contains object-center h-48 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/toonmecom_03da89.jpeg')}}"
                                    alt="toonmecom_03da89.jpeg">
                                <p class="text-left font-bold">Andhika Dede Sundawa</p>
                                <p class="text-left">Reporter/Penyiar</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-contains object-center h-48 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/toonmecom_7967ed.jpg')}}"
                                    alt="toonmecom_7967ed.jpg">
                                <p class="text-left font-bold">Ikbal Santosa</p>
                                <p class="text-left">Reporter/Penyiar</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-contains object-center h-48 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/toonmecom_af84b0.jpeg')}}"
                                    alt="toonmecom_af84b0.jpeg">
                                <p class="text-left font-bold">Bukhori</p>
                                <p class="text-left">Penyiar</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-contains object-center h-48 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/toonmecom_f8bc2c.jpeg')}}"
                                    alt="toonmecom_f8bc2c.jpeg">
                                <p class="text-left font-bold">Tunjang Ari Suseno</p>
                                <p class="text-left">Staf Penyiar</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/3">
                            <div class="w-full p-1 md:p-2">
                                <img class="object-contains object-center h-48 w-96 rounded-lg"
                                    src="{{ asset('assets/front/pesonafm/toonmecom_f54ea8.jpeg')}}"
                                    alt="toonmecom_f54ea8.jpeg">
                                <p class="text-left font-bold">Urip Yulianto</p>
                                <p class="text-left">Staff Rumah Tangga/Penyiar</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="flex justify-center group-hover:scale-125 my-10">
                <img src="{{ asset('assets/front/pesonafm/STRUKTUR OK.png') }}" class="max-w-full h-auto"
                    alt="STRUKTUR OK.png">
            </div>

        </div>
    </div>


    @endsection
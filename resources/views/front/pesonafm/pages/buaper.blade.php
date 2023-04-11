@extends('front.pesonafm.layouts.app')
@section('content')
<div class="flex flex-col h-screen">
    <div class="flex-grow">
        <div class="container mx-auto py-1">

            <!-- ======= Start Judul ======= -->
            <a href="{{url('/')}}">
                <h1 class="font-bold text-4xl lg:text-8xl text-center my-10"><span
                        class="bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent">Buaper</span>
                </h1>
            </a>
            <!-- ======= End Judul ======= -->

            <div class="mt-10">
                <a class="bg-red-500 px-10 py-2 w-20 h-30  text-white text-center rounded-lg"
                    href="{{ url('/') }}">Back</a>
            </div>

            <div class="container px-3 py-2 mx-auto lg:pt-24 lg:px-32">

                <!-- ======= Buaper Section ======= -->
                <section class="mb-32">
                    <div class="flex flex-wrap m-1 md:m-2 justify-center">
                        <div class="grid lg:grid-cols-2 xl:grid-cols-3 gap-4">
                            @foreach($buaper as $b)
                            <div class="flex flex-wrap hover:scale-125 focus:outline-none px-6 py-5">
                                <div class="w-full p-1 md:p-2">
                                    <div class="max-w-sm rounded overflow-hidden bg-slate-800 shadow-lg ">
                                        <div>
                                            {!! $b->video !!}
                                        </div>
                                        <div class="px-6 py-4 ">
                                            <div class="font-bold text-center text-xl mb-2">{{ $b->deskripsi }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                <!-- End Buaper Section -->

                <!-- start pagination -->
                <div class="row mt-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        {{ $buaper->links('pagination::tailwind') }}
                    </div>
                </div>
                <!-- end pagination -->

            </div>


            <div class="grid">
                <div class="mb-5 lg:invisible">
                    <div class="text-center mb-2">© 2023 DISKOMINFO by Isa Maulana Tantra</div>
                </div>
            </div>

        </div>
    </div>
    @endsection
    @push('after-script')
    @endpush
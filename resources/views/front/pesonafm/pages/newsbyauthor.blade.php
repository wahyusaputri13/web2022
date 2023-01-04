@extends('front.pesonafm.layouts.app')
@section('content')
<div class="container mx-auto py-1">
    <div class="flex mt-10">
        <div class="basis-1/2 text-right">
            <a href="{{url('/')}}" class="sm:text-4xl font-bold">
                <h1 class="font-bold text-right"> Breaking </h1>
        </div>
        <div class="basis-1/2">
            <span class="bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent">News Pesona</span>
            </a>
        </div>
    </div>

    <div class="flex justify-between mt-10">
        <div class="grid place-items-center">
            <div>
                <a class="bg-red-500 px-10 py-2 w-20 h-30 text-white text-center rounded-lg"
                    href="{{ url('/') }}">Back</a>
            </div>
        </div>
        <div class="">
            <div class="sidebar-item search-form text-black">
                {{Form::open(['route' => 'news.search','method' => 'get', ''])}}
                {{Form::text('kolomcari', null,['class' => 'form-control', 'placeholder' => 'Search Title Post'])}}
                <button type="submit"><i class="bi bi-search text-black"></i></button>
                {{Form::close()}}
            </div>
        </div>
    </div>

    <!-- ======= News Section ======= -->
    <section id="news" class="portfolio">
        <div class="sidebar">
            <div class="container px-3 py-2 mx-auto lg:pt-24 lg:px-32">
                <div id="body" class="flex flex-wrap m-1 md:m-2">
                    <div class="grid grid-cols-2 gap-4">
                        @foreach($data as $n)
                        <div
                            class="bottom-2 top-2 flex flex-wrap over:grid-rows-6 mx-4 my-6 bg-gradient-to-r from-gray-100 to-gray-500 content-end rounded-md ">
                            <a href="{{ url('/news-detail', $n->slug) }}">
                                <div class="rounded-lg shadow-lg  max-w-sm">
                                    @if(file_exists(public_path('storage/'.$n->path)))
                                    <img src="{{ asset('storage') }}/{{ $n->path}}" class=" bg-blend-normal rounded-lg"
                                        alt="image" />
                                    @else
                                    <img src="{{ asset('img/soulofjava.jpg') }}" class="img-fluid rounded-lg"
                                        alt="image" />
                                    @endif
                                    <div
                                        class="bottom-0 left-0 right-0 px-4 py-2 bg-gray-500 opacity-60 rounded-lg space-y-3">
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
                </div>
                <div class="row mt-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        {{ $data->links('pagination::tailwind') }}
                    </div>
                </div>
    </section>
    <!-- End News Section -->
    @endsection
    @push('after-script')
    @endpush
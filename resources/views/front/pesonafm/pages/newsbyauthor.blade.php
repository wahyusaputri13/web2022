@extends('front.pesonafm.layouts.app')
@section('content')
<div class="container mx-auto py-1">
    <!-- <a href="{{url('/')}}">
        <h1 class="text-8xl font-bold text-center my-10"> Recent posts <span
                class="bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent">form our
                Blog</span> </h1>
    </a> -->
    <div class="flex mt-10">
        <div class="basis-1/2 text-right">
            <a href="{{url('/')}}" class="sm:text-4xl font-bold">
                <h1 class="font-bold text-right"> Recent posts </h1>
        </div>
        <div class="basis-1/2">
            <span class="bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent">from our
                Blog</span>
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
                        <div class="flex flex-wrap">
                            <div class="w-full p-1 md:p-2">
                                <div class="relative overflow-hidden bg-no-repeat  bg-white bg-cover shadow-lg rounded-lg"
                                    style="background-position: 50%;" data-mdb-ripple="true"
                                    data-mdb-ripple-color="light">
                                    <div class="rounded-lg shadow-lg  max-w-sm">
                                        @if(file_exists(public_path('storage/'.$n->path)))
                                        <img src="{{ asset('storage') }}/{{ $n->path}}" class="card-img-top"
                                            alt="image">
                                        @else
                                        <img src="{{ asset('img/soulofjava.jpg') }}" class="img-fluid" alt="image">
                                        @endif
                                    </div>
                                    <span class="post-date text-black">{{ \Carbon\Carbon::parse($n->date)->format('l')
                                        }},
                                        {{
                                        \Carbon\Carbon::parse( $n->date
                                        )->toFormattedDateString() }}</span>
                                    <h3 class="post-title text-black">{{ $n->title }}
                                    </h3>
                                    <a href="{{ url('/news-detail', $n->slug) }}"
                                        class="readmore stretched-link mt-auto text-black"><span>Read
                                            More</span><i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>

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
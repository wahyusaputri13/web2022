@extends('front.pesonafm.layouts.app')
@section('content')

<style>
.card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
}
</style>
<div class="container mx-auto py-1">

  <div class="flex justify-between m-1 sm:mx-2">
    <a href="{{url('/')}}">
      <h1 class="text-3xl font-bold text-center mx-10"> <span class="bg-gradient-to-r from-red-500 to-rose-400 bg-clip-text text-transparent"> 92.1 FM Radio
          Pesona</span> </h1>
    </a>
    <div class="flex space-x-4 font-medium sm:text-lg">
      <a href="{{url('/newsall')}}" class="hover:scale-125  text-red-500">News</a>
      <a href="{{url('/photos')}}" class="hover:scale-125 text-red-500">Gallery</a>
      <a href="https://api.whatsapp.com/send?phone=6282323839996" class="hover:scale-125 text-red-500">Contact</a>
      <a href="{{ url('login') }}" class="hover:scale-125 text-red-500">Login</a>
    </div>
  </div>
  <a href="{{url('/')}}">
    <h1 class="text-8xl font-bold text-center my-10"> Recent posts <span class="bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent">form our
        Blog</span> </h1>
  </a>
  <!-- ======= News Section ======= -->
  <section id="news" class="portfolio">
    <div class="sidebar">

      <h3 class="sidebar-title text-black">Search</h3>
      <div class="sidebar-item search-form text-black">
        {{Form::open(['route' => 'news.search','method' => 'get', ''])}}
        {{Form::text('kolomcari', null,['class' => 'form-control', 'placeholder' => 'Title Post'])}}
        <button type="submit"><i class="bi bi-search text-black"></i></button>
        {{Form::close()}}
      </div>
      <div class="container px-3 py-2 mx-auto lg:pt-24 lg:px-32">
        <div id="body" class="flex flex-wrap m-1 md:m-2">
          @foreach($news as $n)
          <div class="flex flex-wrap w-1/3">
            <div class="w-full p-1 md:p-2">
              <div class="relative overflow-hidden bg-no-repeat  bg-white bg-cover shadow-lg rounded-lg" style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="light">
                <div class="rounded-lg shadow-lg  max-w-sm">
                  @if(file_exists(public_path('storage/'.$n->path)))
                  <img src="{{ asset('storage') }}/{{ $n->path}}" class="card-img-top" alt="image">
                  @else
                  <img src="{{ asset('img/soulofjava.jpg') }}" class="img-fluid" alt="image">
                  @endif
                </div>
                <span class="post-date text-black">{{ \Carbon\Carbon::parse($n->date)->format('l') }},
                  {{
                                    \Carbon\Carbon::parse( $n->date
                                    )->toFormattedDateString() }}</span>
                <h3 class="post-title text-black">{{ $n->title }}
                </h3>
                <a href="{{ url('/news-detail', $n->slug) }}" class="readmore stretched-link mt-auto text-black"><span>Read
                    More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>

          </div>
          @endforeach
        </div>

        <div class="row">
          <div class="col-sm-5">
            <span class="text-sm text-black-700 dark:text-black-400">
              Showing <span class="font-semibold text-black-900 dark:text-white">1</span> to <span class="font-semibold text-black-900 dark:text-white">10</span> of <span class="font-semibold text-gray-900 dark:text-white">100</span> Entries
            </span>
            <!-- Buttons -->
            <div class="inline-flex mt-2 xs:mt-0">
              <button class="py-2 px-4 text-sm font-medium text-white bg-black-800 rounded-l hover:bg-black-900 dark:bg-black-800 dark:border-gray-700 dark:text-black-400 dark:hover:bg-black-700 dark:hover:text-white">
                Prev
              </button>
              <button class="py-2 px-4 text-sm font-medium text-white bg-black-800 rounded-r border-0 border-l border-black-700 hover:bg-black-900 dark:bg-black-800 dark:border-black-700 dark:text-black-400 dark:hover:bg-black-700 dark:hover:text-white">
                Next
              </button>
            </div>
          </div>

        </div>

  </section>
  <!-- End News Section -->
  @endsection
  @push('after-script')
  <script>
    $(function() {
      $('body').on('click', '.pagination a', function(e) {
        e.preventDefault();
        $('#load').append('<img style="position: absolute; left: 0; top: 0; z-index: 10000;" src="https://i.imgur.com/v3KWF05.gif />');
        var url = $(this).attr('href');
        window.history.pushState("", "", url);
        loadPosts(url);
      });

      function loadPosts(url) {
        $.ajax({
          url: url
        }).done(function(data) {
          $('.portfolio').html(data);
        }).fail(function() {
          console.log("Failed to load data!");
        });
      }
    });
  </script>
  @endpush
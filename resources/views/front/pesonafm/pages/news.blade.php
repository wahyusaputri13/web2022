@extends('front.pesonafm.layouts.app')
@section('content')
@if($news->count() != 0)
<!-- ======= Recent Blog Posts Section ======= -->
<!DOCTYPE html>
<html lang="en" class="dark">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind config = {
      darkMode: 'class',
      theme: {
        extend: {
          spacing: {
            13: '3.25rem',
          },
        }

      },
    };
  </script>
</head>


<div class="max-w-sm rounded overflow-hidden shadow-lg">
  <div class="col-lg-12 d-flex justify-content-center">
    @if(Route::current()->getName() == 'news.all')
    {!! $news->render() !!}
    <!-- {{ $news->links() }} -->
    @else
    <!-- <ul id="recent-blog-posts-flters"> -->
    <a href="{{ url('/newsall') }}">Show All</a>
    <!-- </ul> -->
    @endif
  </div>
</div>

<body class="dark:bg-slate-800 dark:text-slate-200">
  <h1 class="text-8xl font-bold text-center my-10"> Recent posts <span class="bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent">form our Blog</span> </h1>
  <section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container px-3 py-2 mx-auto lg:pt-24 lg:px-32">
      <div class="flex flex-wrap m-1 md:m-2">


        <!-- Section: Design Block -->
        <section class="mb-32 text-gray-800">
          <div class="flex flex-wrap w-1/3">
            <div class="w-full p-1 md:p-2">
              <div class="relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg" style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="light">
                @foreach($news as $n)
                <div class="rounded-lg shadow-lg bg-white max-w-sm">

                  <img src="{{ asset('storage') }}/{{ $n->path}}" class="img-fluid" alt="">
                </div>
                <span class="post-date">{{ \Carbon\Carbon::parse($n->date)->format('l') }}, {{
                        \Carbon\Carbon::parse( $n->date
                        )->toFormattedDateString() }}</span>
                <h3 class="post-title">{{ $n->title }}
                </h3>
                <a href="{{ url('/news-detail', $n->slug) }}" class="readmore stretched-link mt-auto"><span>Read
                    More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
            @endforeach
          </div>
      </div>
    </div>
    </div>
  </div>
    </a>

  </section>
  <!-- End Recent Blog Posts Section -->
  @endif
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
          $('.recent-blog-posts').html(data);
        }).fail(function() {
          console.log("Failed to load data!");
        });
      }
    });
  </script>
  @endpush
@extends('front.pesonafm.layouts.app')
@section('content')


<h1 class="text-8xl font-bold text-center my-10"> Buat Pesona <span class="bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent">Inspira</span> </h1>
<!-- ======= Buaper Section ======= -->
<section id="buaper" class="portfolio">
  <div class="container px-3 py-2 mx-auto lg:pt-24 lg:px-32">
    <div class="flex flex-wrap m-1 md:m-2">
      @foreach($buaper as $b)
      <div class="flex flex-wrap w-1/3">
        <div class="w-full p-1 md:p-2">
          <div class="max-w-sm rounded overflow-hidden shadow-lg ">
          <iframe class="w-full aspect-video md:aspect-square" src="{{$convertedVideo = str_replace('watch?v=', 'embed/', $b->video)}}"></iframe>
            <div class="px-6 py-4 ">
              <div class="font-bold text-xl mb-2">{{ $b->deskripsi }}
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
@extends('front.pesonafm.layouts.app')
@section('content')
<div class="container mx-auto py-1">
  <div class="h-screen flex flex-col justify-between">
    <div class="flex justify-between m-2 sm:mx-4">
      <h1 class="text-3xl font-bold">92.1 FM Radio Pesona</h1>
      <div class="flex space-x-4 font-medium sm:text-lg">
        <a href="#" class="hover:scale-125">News</a>
        <a href="#" class="hover:scale-125">Gallery</a>
        <a href="#" class="hover:scale-125">Contact</a>
        <a href="{{ url('login') }}" class="hover:scale-125">Login</a>
      </div>
    </div>
    <div class="flex flex-wrap justify-center flex-row sm:space-x-3 md:space-x-5">
      <div
        class="hp:mb-3 text-center shadow-lg rounded-md group grid place-items-center w-60 backdrop-blur-lg bg-slate-500/2 h-40 sm:ml-3 md:ml-5 md:hover:-translate-y-5">
        <h1 class="text-2xl mt-2 xl:font-extrabold">
          Streaming Online
        </h1>
        <button
          class="btn shadow-md shadow-red-500/50 bg-red-500 rounded-lg m-2 btn-playstream group-hover:scale-125 text-md w-14 p-1 ">Play</button>
      </div>
      <div
        class="hp:mb-3 text-center shadow-lg rounded-md grid place-items-center group w-60 backdrop-blur-lg bg-slate-500/2 h-40 hover:cursor-pointer md:hover:-translate-y-5">
        <h1 class="text-2xl group-hover:scale-125 md:text-3xl xl:font-extrabold">News</h1>
      </div>
      <div
        class="hp:mb-3 text-center shadow-lg rounded-md grid place-items-center group w-60 backdrop-blur-lg bg-slate-500/2 h-40 sm:mt-3 md:mt-5 hover:cursor-pointer md:hover:-translate-y-5 lg:mt-0">
        <h1 class="text-2xl group-hover:scale-125 md:text-3xl xl:font-extrabold">Gallery</h1>
      </div>
      <div
        class="hp:mb-3 text-center shadow-lg rounded-md grid place-items-center w-60 backdrop-blur-lg bg-slate-500/2 h-40 sm:mt-3 md:mt-5 md:hover:-translate-y-5 xl:mt-0">
        <h1 class="text-2xl mt-2 xl:font-extrabold">
          Social Media
        </h1>
        <div class="flex space-x-4 m-2 sm:space-x-6">
          <div class="group">
            <div class="flex justify-center group-hover:scale-125">
              <a href="https://www.instagram.com/pesonafmwonosobo" target="_blank">
                <img src="{{ asset('assets/front/pesonafm/001-instagram.png') }}" class="scale-125 sm:scale-150">
              </a>
            </div>
          </div>
          <div class="group">
            <div class="flex justify-center group-hover:scale-125">
              <a href="https://www.facebook.com/profile.php?id=100039381652233" target="_blank">
                <img src="{{ asset('assets/front/pesonafm/002-facebook.png') }}" class="scale-125 sm:scale-150">
              </a>
            </div>
          </div>
          <div class="group">
            <div class="flex justify-center group-hover:scale-125">
              <a href="https://www.youtube.com/channel/UCklHzjhKAwuLFJJXPorNidQ" target="_blank">
                <img src="{{ asset('assets/front/pesonafm/003-youtube.png') }}" class="scale-125 sm:scale-150">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mb-2">© 2022 DISKOMINFO</div>
  </div>
</div>
<audio id="audio_1">
  <source src="http://i.klikhost.com:8234/stream" type="audio/mpeg">
</audio>
@push('after-script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
  $('.btn-playstream').click(function () {
    currentvalue = document.getElementById('audio_1').value;
    if (currentvalue == "on") {
      document.getElementById('audio_1').pause();
      document.getElementById("audio_1").value = "off";
      console.log("off!");
      $(".btn-playstream").html('Play');
    } else {
      document.getElementById('audio_1').play();
      document.getElementById("audio_1").value = "on";
      console.log("on!");
      $(".btn-playstream").html('Pause');
    }
  });
</script>
@endpush
@endsection
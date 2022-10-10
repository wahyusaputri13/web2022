@extends('front.pesonafm.layouts.app')
@section('content')
<div class="container mx-auto py-1">
  <div class="h-screen flex flex-col justify-between">
    <div class="flex justify-between m-2 sm:mx-4">
      <h1 class="text-3xl font-bold text-center mx-10"> <span class="bg-gradient-to-r from-red-500 to-rose-400 bg-clip-text text-transparent"> 92.1 FM Radio Pesona</span> </h1>
      <div class="flex space-x-4 font-medium sm:text-lg">
        <a href="{{url('/newsall')}}" class="hover:scale-125  text-red-500">News</a>
        <a href="{{url('/photos')}}" class="hover:scale-125 text-red-500">Gallery</a>
        <a href="#" class="hover:scale-125 text-red-500">Contact</a>
        <a href="{{ url('login') }}" class="hover:scale-125 text-red-500">Login</a>
      </div>
    </div>
    <div class="flex flex-wrap justify-center flex-row sm:space-x-3 md:space-x-5">
      <div class="hp:mb-3 text-center shadow-lg rounded-md group grid place-items-center w-60 backdrop-blur-lg bg-slate-500/2 h-40 sm:ml-3 md:ml-5 md:hover:-translate-y-5">
        <h1 class="text-2xl mt-2 xl:font-extrabold">
          Streaming Online
        </h1>
        <button class="btn shadow-md shadow-red-500/50 bg-red-500 rounded-lg m-2 btn-playstream group-hover:scale-125 text-md w-14 p-1 ">Play</button>
      </div>
      <a href="{{url('/newsall')}}">
      <div class="hp:mb-3 text-center shadow-lg rounded-md grid place-items-center group w-60 backdrop-blur-lg bg-slate-500/2 h-40 hover:cursor-pointer md:hover:-translate-y-5">
        <h1 class="text-2xl group-hover:scale-125 md:text-3xl xl:font-extrabold">News</h1>
      </div>
      </a>
      <a href="{{url('/photos')}}">
      <div class="hp:mb-3 text-center shadow-lg rounded-md grid place-items-center group w-60 backdrop-blur-lg bg-slate-500/2 h-40 sm:mt-3 md:mt-5 hover:cursor-pointer md:hover:-translate-y-5 lg:mt-0">
        <h1 class="text-2xl group-hover:scale-125 md:text-3xl xl:font-extrabold">Gallery</h1>
      </div>
</a> 
      <div class="hp:mb-3 text-center shadow-lg rounded-md grid place-items-center w-60 backdrop-blur-lg bg-slate-500/2 h-40 sm:mt-3 md:mt-5 md:hover:-translate-y-5 xl:mt-0">
        <h1 class="text-2xl mt-2 xl:font-extrabold ">
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
          <div class="group">
            <div class="flex justify-center group-hover:scale-125">
              <a href="https://www.tiktok.com/@pesonafm.official?_t=8V4CnyeOVX8&_r=1" target="_blank">
                <img src="{{ asset('assets/front/pesonafm/tiktok.png') }}" class="scale-125 sm:scale-150">
              </a>
            </div>
          </div>
          <div class="group">
            <div class="flex justify-center group-hover:scale-125">
              <a href="https://twitter.com/pesonafmofc?s=21&t=21IEkLnxsotkWbw2ObgEQg" target="_blank">
                <img src="{{ asset('assets/front/pesonafm/twitter.png') }}" class="scale-125 sm:scale-150">
              </a>
            </div>
          </div>

        </div>

      </div>
<a href="{{ url('/music') }}">
      <div class="hp:mb-3 text-center shadow-lg rounded-md grid place-items-center w-60 backdrop-blur-lg bg-slate-500/2 h-40 sm:mt-3 md:mt-5 md:hover:-translate-y-5 xl:mt-0">
        <h1 class="text-2xl mt-2 xl:font-extrabold">
          Chart Top 10 Music
        </h1>
      </div>
</a>
<a href="{{ url('buaper') }}">
      <div class="hp:mb-3 text-center shadow-lg rounded-md grid place-items-center w-60 backdrop-blur-lg bg-slate-500/2 h-40 sm:mt-3 md:mt-5 md:hover:-translate-y-5 xl:mt-0">
        <h1 class="text-2xl mt-2 xl:font-extrabold">
          Buaperrr (Buat Pesona Inspira)
        </h1>
      </div>
</a>

      <div class="hp:mb-3 text-center shadow-lg rounded-md grid place-items-center w-60 backdrop-blur-lg bg-slate-500/2 h-40 sm:mt-3 md:mt-5 md:hover:-translate-y-5 xl:mt-0">
        <h1 class="text-2xl mt-2 xl:font-extrabold">
          Contact
        </h1>
      </div>
    </div>

    <div class="text-center mb-2">© 2022 DISKOMINFO</div>
  </div>
</div>
<audio id="audio_1">
  <source src="http://i.klikhost.com:8234/stream" type="audio/mpeg">
</audio>
@push('after-script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
  $('.btn-playstream').click(function() {
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
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
<meta charset="UTF-8" /> 
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind config ={
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
<title> belajar tailwindCSS</title>
<style type="text/tailwindcss">
  
  </style>
  </head> 
  <body class="dark:bg-slate-800 dark:text-slate-200">
    <h1 class="text-8xl font-bold text-center my-10"> Mari Belajar <span class="bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent">TailwindCSS</span>  </h1>
    <section class="mb-10 bg-gradient-to-br from-indigo-200 via-red-200 to-yellow-300"> 
      <h2 class="text-3xl text-center"> Spacing </h2>
      <div class="m-13">Margin</div>
      <div class="py-8">Padding</div>
</section>

<section class="mb-10 bg-green-200">
   <h2 class="text-3xl text-center">Sizing</h2> 
   <div class="w-32 h-32">Kotak 1</div>
   
</section>
<section class="font-semok max-w-4xl mx-auto">
  <h2 class= "mb-2 text-4xl font-semibold"> Belajar Mengenai Typography pada Tailwind CSS</h2>
  <div class="mb-2 text-lg text-gray-500">
    By puspita Mahanani, 30 agustus 2022
  </div>
  <p class="mb-4"> 
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo provident non, tempore reprehenderit, maiores cupiditate error doloremque natus earum corrupti laboriosam facere dolore rerum labore. Quae iste illo aliquid veniam, quasi eaque velit ad provident voluptate vel mollitia voluptates doloremque minus dicta adipisci maiores explicabo nulla nihil at quod neque?
  </p>
  <blockquote class="mb-4 italic font-thin text-xl">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore temporibus omnis, quo est possimus ab quae explicabo illo libero sint.
  </blockquote>
  <p class="mb-4">
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam odit, assumenda cum animi error sint esse reiciendis, quas velit asperiores molestiae sunt qui alias iure aperiam praesentium voluptate suscipit nisi.
  </p>
  <div class="max-w-xl h-96 bg-slate-[#bada55] mx-auto mt-[42px] overflow-y-scroll  bg-scroll " style="background-image: url('https://source.unsplash.com/1000x600?computer')">
<p class="p-5 text-2xl">
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, veritatis ratione. Facere, aspernatur similique sed nam in tempora veritatis. Debitis asperiores esse beatae corporis voluptas numquam saepe totam temporibus iure illum, nam deserunt aut libero! Vitae, corrupti. Sed doloribus aliquid, quisquam suscipit quod iste perspiciatis nihil commodi eveniet quas laborum id consequuntur accusamus tempore fugiat reprehenderit quidem sequi quaerat, ea molestiae fuga magnam iure quia. Non reprehenderit sit incidunt hic, corporis vitae labore, consequuntur blanditiis necessitatibus cum quod cumque nobis nam tempora facere. Cumque veniam repellat, ratione est facere aliquid dicta provident recusandae impedit cum inventore molestias quas deleniti incidunt fugit nobis voluptatem. Tenetur, similique illo eveniet beatae fugiat neque officia culpa incidunt labore saepe distinctio necessitatibus quam sunt nam quae aliquid laudantium magni est deserunt eligendi esse illum corporis sed quia. Cum hic harum maiores accusamus repellat iusto, illum, impedit sequi officia vero nobis veritatis perspiciatis laudantium doloremque consequatur ullam nesciunt asperiores quam ab! Optio quae sunt tenetur accusamus accusantium consequatur possimus, vitae impedit. Corporis distinctio saepe eius maxime sit, voluptatum doloremque magnam, quisquam rem molestiae consequatur necessitatibus totam esse culpa, quas iste facilis officiis. Aliquid repellat, eveniet nemo quam quisquam nesciunt. Libero repellendus natus, non fugiat tempora ab.
</p>
</div>
<div class=" mt-32 max-w-xl mx-auto h-96 bg-slate-300 bg-contain bg-no-repeat bg-center rounded-2xl shadow-xl shadow-slate-500 overflow-hidden border-8-flex"></div>
<div class="w-[200px] h-[200px] bg-white/30 m-auto backdrop-blur-md rounded-full"></div>

<hr class="my-20"/>

<div class="flex justify-center">
  <span>Light</span>
  <input type="checkbox" id="toggle"/>
  <label for="toggle">
    <div class=w-9 h-5 bg-state-500></div>
  </label>
  <span class="text-sm text-slate-500 ml-2">Dark</span>
</div>

<button class="my-10 bg-sky-500 px-5 py-2 rounded-full text-white font-semibold font-inter block mx-auto hover bg-sky-600 active:bg-sky-700 focus:ring focus:ring-sky-300 dark:text-slate-800 dark:hover:text-slate-300 dark:hover:bg-slate-100">simpan</button>

<div class="max-w-lg my-10 border border-slate-200 rounded-xl mx-auto  p-5 shadow-md font-inter hover:bg-sky-500 group font-serif dark:hover:bg-slate-300">
  <h5 class="font-bold text-slate-700 text-lg mb-3 group-hover:text-white dark:grouphover:text-slate-800">My Card</h5>
  <p class="text-slate-600 group-hover:text-white selection:bg-lime-300 selection:text-slate-900 first-line:uppercase first-line:tracking-widest first-letter:text-7xl frist-letter:float-left first-letter:mr-3 dark:hover:text-slate-800">
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam vel vero laudantium distinctio at dolorem culpa hic! Quasi, fugiat odio.</p>
</div>

<div class="max-w-lg border border-slate-200 rounded-xl mx-auto shadow-md font-inter p-5">

<form action="">
  <label for="email">
    <span class="block font-semifold mb-1 text-slate-700 after:content-['*'] after:text-pink-500 after:ml-0.5">Email</span>
  <input type="email" id="email" placehorder="masukan email..." class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer"/>
  <p class="text-sm m-1 text-pink-700 invisible peer-visible">Email tidak Valid</p>
  </label>
</form>

</div>
  <div class="mb-96"></div>
</section>
  </body>
  </html>
@endpush
@endsection
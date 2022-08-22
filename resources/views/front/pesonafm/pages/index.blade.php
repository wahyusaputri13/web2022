@extends('front.pesonafm.layouts.app')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .fa {
    padding: 20px;
    font-size: 30px;
    width: 30px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
    border-radius: 50%;
  }

  .fa:hover {
    opacity: 0.7;
  }

  .fa-facebook {
    background: #3B5998;
    color: white;
  }

  .fa-youtube {
    background: #bb0000;
    color: white;
  }

  .fa-instagram {
    background: #125688;
    color: white;
  }
</style>
<div class="background">

  <div class="row">
    <div class="col mt-3" style="color: white;">
      <p class="display-1">LISTEN ONLINE</p>
    </div>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-6">
    <div class="col mt-3" style="color: white;">
      kotak kotak
    </div>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-6">
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Playing Now</h5>
          <h3 class="btn btn-info">Streaming Radio
            <div data-aos="fade-up" data-aos-delay="600">
              <div class="text-center text-lg-start">
                <a class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center"
                  value="off">
                  <div>
                    <!-- <span id="previous-btn"><i class="fa fa-step-backward fa-fw" aria-hidden="true"></i></span> -->
                    <span id="play-btn"><i class="fa fa-play fa-fw btn-playstream" aria-hidden="true"></i></span>
                    <!-- <span id="next-btn"><i class="fa fa-step-forward fa-fw" aria-hidden="true"></i></span> -->
                  </div>
                </a>
              </div>
            </div>
          </h3>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card" style="width: 18rem;">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="galeri.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="logo.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="logo.jpeg" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
        <div class="card-body">
          <h5 class="card-title">News</h5>
          <img src="{{ asset('storage') }}/{{ $data_website->image_hero }}" class="img-fluid" alt="">
          <p class="card-text">This is a short card.</p>
          <a href="{{ url('newsall') }}" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">social Media</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
            content.</p>
          <a href="https://www.instagram.com/pesonafmwonosobo/" class="btn btn-primary"> <img
              src="https://cdn-icons-png.flaticon.com/32/174/174855.png"> Instagram</a>
          <a href="https://www.facebook.com/people/Pesona-fm-wonosobo/100039381652233/" class="btn btn-primary"><img
              src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/facebook.png"> Facebook</a>
          <a href="https://www.youtube.com/channel/UCklHzjhKAwuLFJJXPorNidQ" class="btn btn-primary"><img
              src="https://img.icons8.com/color/40/000000/youtube-play.png"> Youtube</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Top 10 playmusik</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
            content. This content is a little bit longer.</p>
          <a href="#" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Audio</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
            content. This content is a little bit longer.</p>
          <a href="#" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Contact</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
            content. This content is a little bit longer.</p>
          <a href="#" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col mt-3" style="color: white;">
      hit counter website
    </div>
  </div>
</div>
</div>
<audio id="audio_1">
  <source src="http://i.klikhost.com:8234/stream" type="audio/mpeg">
</audio>
@endsection
@push('after-style')
<style>
  * {
    margin: 0;
    padding: 0;
  }

  .background {
    background-image: url("assets/front/pesonafm/background.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    height: 100vh;
  }
</style>
@endpush
@push('after-script')
<script>
  $('.btn-playstream').click(function () {
    currentvalue = document.getElementById('audio_1').value;
    if (currentvalue == "on") {
      document.getElementById('audio_1').pause();
      document.getElementById("audio_1").value = "off";
      console.log("off!");
      $('.btn-playstream').removeClass('fa-pause');
    } else {
      document.getElementById('audio_1').play();
      document.getElementById("audio_1").value = "on";
      console.log("on!");
      $('.btn-playstream').addClass('fa-pause');
    }
  });
</script>
@endpush
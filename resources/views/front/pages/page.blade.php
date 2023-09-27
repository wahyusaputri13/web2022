@extends('front.layouts.app')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('assets/front/assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>{{ $data->menu_name }}</h2>
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Blog Details</li>
            </ol>

        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog" style="height: 100vh;">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-5">

                @if($data->menu_name == 'Daftar Informasi Publik')
                <x-jip />
                @elseif($data->title)
                {!! $data->description !!}
                @else
                {!! $data->content !!}
                @endif

            </div>

        </div>
    </section>
    <!-- End Blog Details Section -->

</main>
<!-- End #main -->
@endsection
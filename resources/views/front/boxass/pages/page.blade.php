@extends('front.boxass.layouts.app')
@section('content')
<main id="main">

    <!-- Start Breadcrumb
        ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- <h1>Blog Single</h1> -->
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="#">page</a></li>
                        <li class="active">{{ $data->menu_name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
        ============================================= -->
    <div id="blog" class="blog-area bg-gray full-width single default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="col-lg-12 col-md-12">
                        <div class="item">
                            @if($data->menu_name == 'Permohonan Informasi Publik')
                            <x-form-permohonan-informasi-publik />
                            @elseif($data->menu_name == 'Pengajuan Keberatan Informasi Publik')
                            <x-form-pengajuan-keberatan-informasi-publik />
                            @else
                            {!! $data->content !!}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

</main>
@endsection
@push('after-script')
@endpush
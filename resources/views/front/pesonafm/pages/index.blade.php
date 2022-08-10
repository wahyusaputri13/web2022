@extends('front.pesonafm.layouts.app')
@section('content')
<div class="background">
    <div class="container">
        <div class="row">
            <div class="col mt-3" style="color: white;">
                freq radio
            </div>
            <div class="col mt-3" style="color: white;">
                nav bar
            </div>
        </div>
        <div class="row">
            <div class="col mt-3" style="color: white;">
                listen online
            </div>
        </div>
        <div class="row">
            <div class="col mt-3" style="color: white;">
                kotak kotak
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text" style="color: black;">Gallery</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text" style="color: black;">Gallery</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
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
@endpush
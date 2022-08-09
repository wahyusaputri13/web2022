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
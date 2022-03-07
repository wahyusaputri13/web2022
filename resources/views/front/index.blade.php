@extends('front.main')
@section('container')
@include('front.header')
@include('front.hero')
<main id="main">
    @include('front.news')
    @include('front.gallery')
</main>
@endsection
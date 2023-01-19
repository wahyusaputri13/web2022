@extends('front.appway.layouts.app')
@section('content')
<!-- Start Contact Area
    ============================================= -->
<div class="contact-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="card-content">
                            @foreach($data as $dt)
                            {!! $dt->content !!}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact -->
@endsection
@push('after-script')
@endpush
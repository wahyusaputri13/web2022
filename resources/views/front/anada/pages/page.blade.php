@extends('front.anada.layouts.app')
@section('content')
<!-- Start Breadcrumb 
        ============================================= -->
<div class="breadcrumb-area gradient-bg text-light text-center">
    <!-- Fixed BG -->
    <div class="fixed-bg" style="background-image: url(assets/img/shape/1.png);"></div>
    <!-- Fixed BG -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>{{ $data->menu_name }}</h1>
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active">{{ $data->menu_name }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Contact Area
    ============================================= -->
<div class="contact-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="card-content">
                            @if($data->menu_name == 'Permohonan Informasi Publik')
                            <div id="contact" class="contact-area default-padding">
                                <div class="container">
                                    <div class="contact-items">
                                        <div class="row">
                                            <div class="col-lg-12 right-item">
                                                {{Form::open(['url' => '#','method' => 'post', 'files' =>
                                                'true', '', 'class' =>
                                                'php-email-form'])}}
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            {{Form::text('name', null,['class' => 'form-control',
                                                            'placeholder' => 'Nama',
                                                            'required'])}}
                                                            <span class="alert-error"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            {{Form::text('name', null,['class' => 'form-control',
                                                            'placeholder' => 'Alamat',
                                                            'required'])}}
                                                            <span class="alert-error"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            {{Form::email('email', null,['class' => 'form-control',
                                                            'placeholder' => 'Email',
                                                            'required'])}}
                                                            <span class="alert-error"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            {{Form::number('phone', null,['class' => 'form-control',
                                                            'placeholder' =>
                                                            'Nomor Handphone',
                                                            'required'])}}
                                                            <span class="alert-error"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            {{Form::text('name', null,['class' => 'form-control',
                                                            'placeholder' => 'Pekerjaan',
                                                            'required'])}}
                                                            <span class="alert-error"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group comments">
                                                            {{Form::textarea('message', null,['class' => 'form-control',
                                                            'placeholder' => 'Tujuan Penggunaan Informasi',
                                                            'required'])}}
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group comments">
                                                            {{Form::textarea('message', null,['class' => 'form-control',
                                                            'placeholder' => 'Rincian Informasi Yang Diinginkan',
                                                            'required'])}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-12 captcha mb-3">
                                                                <span>{!! captcha_img() !!}</span>
                                                                <button type="button" class="btn btn-danger"
                                                                    class="reload" id="reload">
                                                                    &#x21bb;
                                                                </button>
                                                            </div>
                                                            <div class="col-sm-12 col-md-12 mb-3">
                                                                {{Form::number('captcha', null,['class' =>
                                                                'form-control',
                                                                'placeholder' => 'Enter Captcha Result',
                                                                'required'])}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <center>
                                                            <button type="submit">
                                                                Kirim Permohonan <i class="fa fa-paper-plane"></i>
                                                            </button>
                                                        </center>
                                                    </div>
                                                </div>
                                                {{Form::close()}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @elseif($data->menu_name == 'Pengajuan Keberatan Informasi Publik')
                            keberatan
                            @else
                            {!! $data->content !!}
                            @endif
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
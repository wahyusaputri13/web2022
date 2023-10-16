@extends('back.layouts.app')
@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Testimoni</a>
            </li>
            <li class="breadcrumb-item active">Data</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form Tambah Data</h4>
            <div class="card-content">
                {{Form::open(['route' => 'testimoni.store','method' => 'post', 'files' => 'true', ''])}}

                <div class="row">
                    <div class="form-group col-sm-12 col-md-12">
                        <label for="defaultFormControlInput" class="form-label">Foto</label>
                        {{Form::text('date', null, ['class' => 'form-control flatpickr-date',
                        'placeholder' => 'Silahkan Pilih Tanggal'])}}
                        @error('date')
                        <div id="defaultFormControlHelp" class="form-text" style="color: red;">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label for="defaultFormControlInput" class="form-label">Nama</label>
                        {{Form::text('nama', null,['class' => 'form-control',
                        'placeholder'=>'Masukkan Nama Pejabat'])}}
                    </div>
                    @error('nama')
                    <div id="defaultFormControlHelp" class="form-text" style="color: red;">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="row">
                    <div class="form-group label">
                        <label for="defaultFormControlInput" class="form-label">Isi Pesan</label>
                        {{Form::textarea('pesan', null,['class' => 'my-editor form-control','id'=>'my-editor'])}}
                    </div>
                    @error('pesan')
                    <div id="defaultFormControlHelp" class="form-text" style="color: red;">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mt-3">
                    <a href="{{ route('testimoni.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
</div>
<!-- / Content -->

@endsection
@push('after-script')
<!-- ck editor -->
<script src="{{asset('assets/back/material/ckeditor/ckeditor.js')}}"></script>
<script>
    var konten = document.getElementById("my-editor");
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
    CKEDITOR.replace(konten, options);
    CKEDITOR.config.allowedContent = true;
</script>
<!-- end ck editor -->
@endpush
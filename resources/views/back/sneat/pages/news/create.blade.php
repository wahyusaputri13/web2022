@extends('back.sneat.layouts.app')
@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Postingan</a>
            </li>
            <li class="breadcrumb-item active">Data</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Form Tambah Data</h4>
            <div class="card-content">
                {{Form::open(['route' => 'news.store','method' => 'post', 'files' => 'true', ''])}}

                <div class="row">
                    <div class="togglebutton" style="margin-bottom: 15px;">
                        <label>
                            Data DIP? <input type="checkbox" id="hideButton">
                        </label>
                    </div>
                </div>

                <div class="row">
                    <!-- Example of a form that Dropzone can take over -->
                    <div class="dropzone" id="my-awesome-dropzone"></div>
                </div>

                @can('ppidsetda')
                <div class="row">
                    <div class="form-group">
                        <label for="defaultFormControlInput" class="form-label">Tag Bagian</label>
                        {{Form::select('tag', $categori, null, ['class' => 'form-control
                        js-example-basic-multiple',
                        'name' => 'tag[]',
                        'multiple' => 'multiple',
                        ])}}
                        @error('tag') <span class="text-danger">Tidak boleh kosong</span> @enderror
                    </div>
                </div>
                @endcan

                <div class="row">
                    <div class="form-group label-floating jip col-6">
                        <label for="defaultFormControlInput" class="form-label">Jenis Informasi Publik</label>
                        {{Form::select('kategori', get_code_group('INFORMASI_ST'), null, ['class' =>
                        'form-control select2','placeholder' => ''])}}
                    </div>

                    <div class="form-group col-6">
                        <label for="defaultFormControlInput" class="form-label">Tanggal</label>
                        {{Form::text('date', null,['class' => 'form-control flatpickr-date'])}}
                    </div>
                    @error('date')
                    <div id="defaultFormControlHelp" class="form-text" style="color: red;">
                        Tidak Boleh Kosong
                    </div>
                    @enderror
                </div>

                <div class="row">
                    <div class="form-group label-floating dip" style="display: none;">
                        <label for="defaultFormControlInput" class="form-label">Tahun Daftar Informasi Publik</label>
                        {{Form::number('dip_tahun', null, ['class' =>
                        'form-control','placeholder' => ''])}}
                    </div>
                    <div class="form-group label-floating">
                        <label for="defaultFormControlInput" class="form-label">Judul Postingan</label>
                        {{Form::text('title', null,['class' => 'form-control',
                        'placeholder'=>'Masukkan Judul Postingan'])}}
                    </div>
                    @error('title')
                    <div id="defaultFormControlHelp" class="form-text" style="color: red;">
                        Tidak Boleh Kosong
                    </div>
                    @enderror
                </div>

                <div class="row">
                    <div class="form-group label">
                        <label for="defaultFormControlInput" class="form-label">Deskripsi</label>
                        {{Form::textarea('description', null,['class' => 'my-editor form-control','id'=>'my-editor'])}}
                    </div>
                    @error('description')
                    <div id="defaultFormControlHelp" class="form-text" style="color: red;">
                        Tidak Boleh Kosong
                    </div>
                    @enderror
                </div>

                <div class="mt-3">
                    <a href="{{ route('news.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
    <!-- / Content -->

    @endsection
    @push('after-script')
    <script>
        $(".select2").select2();

        var flatpickrDate = document.querySelector(".flatpickr-date");

        flatpickrDate.flatpickr({
            monthSelectorType: "static"
        });
    </script>
    @endpush
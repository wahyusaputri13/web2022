@extends('back.a.layouts.app')
@section('content')
<div class="content">
    <div class="container-fluid">
        {{ Breadcrumbs::render('users') }}
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="green">
                        <i class="material-icons">person</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Form Tambah Pengguna</h4>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        {{Form::open(['route' => 'user.store','method' => 'post', 'files' => 'true', ''])}}
                        @role('superadmin')
                        <div class="form-group label-floating is-focused">
                            <label class="control-label">Role</label>
                            {{ Form::select('role', $role, null, ['class' => 'form-control',
                            'placeholder' => 'Select Role']); }}
                        </div>
                        <div class="form-group label-floating is-focused">
                            <label class="control-label">Permission</label>
                            {{ Form::select('permission', $permission, null, ['class' => 'form-control',
                            'placeholder' => 'Select Permission']); }}
                        </div>
                        @endrole
                        @can ('satpolpp')
                        <div>
                            {{Form::select('bidang_id', $bidang, null,['class' => 'form-control selectpicker',
                            'data-style'
                            => 'btn btn-success btn-round', 'title' => 'Choose Bidang'])}}
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">NIP</label>
                            {{Form::number('nip', null,['class' => 'form-control'])}}
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Jabatan / Golongan</label>
                            {{Form::text('jabatan', null,['class' => 'form-control'])}}
                        </div>
                        @endcan
                        <div class="form-group label-floating">
                            <label class="control-label">Nama</label>
                            {{Form::text('name', null,['class' => 'form-control'])}}
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Nomor Telp</label>
                            {{Form::number('user_phone', null,['class' => 'form-control'])}}
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Email</label>
                            {{Form::email('email', null,['class' => 'form-control'])}}
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Sandi</label>
                            {{Form::password('password',['class' => 'form-control'])}}
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Konfirmasi Sandi</label>
                            {{Form::password('password_confirmation',['class' => 'form-control'])}}
                        </div>
                        <div class="d-flex text-right">
                            <a href="{{ route('user.index') }}" class="btn btn-default btn-fill">Batal</a>
                            <button type="submit" class="btn btn-success btn-fill">Tambah</button>
                        </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('after-script')
@endpush
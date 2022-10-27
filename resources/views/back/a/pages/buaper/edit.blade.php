@extends('back.a.layouts.app')
@section('content')
<div class="content">
    <div class="container-fluid">
        {{ Breadcrumbs::render('buaper') }}
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="green">
                        <i class="material-icons">video_label</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Buat Pesona Inspira</h4>
                        {{Form::open(['route' => 'buaper.store','method' => 'post', 'files' => 'true', ''])}}
                        <div class="form-group label-floating">
                            <label class="control-label">link youtube</label>
                            {{Form::text('video', null,['class' => 'form-control'])}}
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">deskripsi</label>
                            {{Form::text('deskripsi', null,['class' => 'form-control'])}}
                        </div>
                        <!-- <div class="form-group label-floating">
                            <label class="control-label">Photo</label>
                            {{Form::file('foto', null,['class' => 'form-control'])}}
                        </div> -->
                        <div class="d-flex text-right">
                            <a href="{{ url('buaper') }}" class="btn btn-default btn-fill">Cancel</a>
                            <button type="submit" class="btn btn-success btn-fill">Insert</button>
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
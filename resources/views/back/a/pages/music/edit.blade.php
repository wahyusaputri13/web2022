@extends('back.a.layouts.app')
@section('content')
<div class="content">
    <div class="container-fluid">
        {{ Breadcrumbs::render('music') }}
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="green">
                        <i class="material-icons">library_music</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Chart Music</h4>
                        {{Form::model($data, ['route' => ['music.update', $data->id],'method' => 'put', 'files' =>
                        'true', ''])}}
                        <div class="col text-center">
                            <div class="table-fixed">
                                <h4 class="table-title">Chart Music</h4>
                                <div class="form-group label-floating">
                                    <h4 class="table-hover">Ranking</h4>
                                    <label class="control-label">ranking</label>
                                    {{Form::text('ranking', null,['class' => 'form-control'])}}
                                </div>
                                <h4 class="table-hover">song</h4>
                                <label class="control-label">Song</label>
                                {{Form::text('song', null,['class' => 'form-control'])}}
                            </div>
                            <h4 class="table-hover">Artist</h4>
                            <div class="form-group label-floating">
                                <label class="control-label">Artis</label>
                                {{Form::text('artist', null,['class' => 'form-control'])}}
                            </div>
                            <h4 class="table-hover">Years</h4>
                            <div class="form-group label-floating">
                                <label class="control-label">Years</label>
                                {{Form::text('years', null,['class' => 'form-control'])}}
                            </div>
                            <div class="d-flex text-right">
                                <a href="{{ url('music') }}" class="btn btn-default btn-fill">Cancel</a>
                                <button type="submit" class="btn btn-success btn-fill">Update</button>
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
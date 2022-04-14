@extends('back.a.layouts.app')
@section('content')
<div class="content">
    <div class="container-fluid">
        {{ Breadcrumbs::render('submenu') }}
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="green">
                        <i class="material-icons">menu</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Stacked Form</h4>
                        {{Form::model($data, ['route' => ['submenu.update', $data->id],'method' => 'put', 'files' =>
                        'true', ''])}}
                        <div class="form-group label-floating">
                            <label class="control-label">Menu Name</label>
                            {{Form::select('menu_id', $menu, null,['class' => 'form-control'])}}
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Title Submenu</label>
                            {{Form::text('title', null,['class' => 'form-control'])}}
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">URL Submenu</label>
                            {{Form::text('url', null,['class' => 'form-control'])}}
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Icon Submenu</label>
                            {{Form::text('icon', null,['class' => 'form-control'])}}
                        </div>
                        <div class="checkbox">
                            <label>
                                {{Form::checkbox('is_active', 1, null,[])}} Active?
                            </label>
                        </div>
                        <div class="d-flex text-right">
                            <a href="{{ url('submenu') }}" class="btn btn-default btn-fill">Cancel</a>
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
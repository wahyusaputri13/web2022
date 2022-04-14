@extends('back.a.layouts.app')
@section('content')
<div class="content">
    <div class="container-fluid">
        {{ Breadcrumbs::render('menu') }}
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="green">
                        <i class="material-icons">menu</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Stacked Form</h4>
                        {{Form::model($data, ['route' => ['frontmenu.update', $data->id],'method' => 'put', 'files' =>
                        'true', ''])}}
                        <div class="form-group label-floating">
                            <label class="control-label">Position Order</label>
                            {{Form::text('position_order', null,['class' => 'form-control'])}}
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Menu Name</label>
                            {{Form::text('menu', null,['class' => 'form-control'])}}
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Menu Url</label>
                            {{Form::text('menu_url', null,['class' => 'form-control'])}}
                        </div>
                        <div class="d-flex text-right">
                            <a href="{{ url('menu') }}" class="btn btn-default btn-fill">Cancel</a>
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
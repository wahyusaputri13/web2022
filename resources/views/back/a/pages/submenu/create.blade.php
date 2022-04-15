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
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        {{Form::open(['route' => 'submenu.store','method' => 'post', 'files' => 'true', ''])}}
                        <div>
                            {{Form::select('menu_id', $menu, null,['class' => 'form-control selectpicker', 'data-style'
                            => 'btn btn-success btn-round', 'title' => 'Choose Parent Menu'])}}
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
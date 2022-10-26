@extends('back.a.layouts.app')
@section('content')
<div class="content">
    <div class="container-fluid">
        {{ Breadcrumbs::render('music') }}
        <div class="row">
            <div class="col-md-6">
                <div class="table">

                    <div class="table-fixed">
                        <h4 class="table-title">Chart Music</h4>
                        {{Form::open(['route' => 'music.store','method' => 'post', 'files' => 'true', ''])}}
                       
                           <h4 class="table-hover">no</h4>
                            <div class="form-group label-floating">
                            <label class="control-label">no</label>
                            {{Form::text('no', null,['class' => 'form-control'])}}
                        </div>
                        <h4 class="table-hover">song</h4>
                        <label class="control-label">song</label>
                        {{Form::text('song', null,['class' => 'form-control'])}}
                    </div>
                    <h4 class="table-hover">artist</h4>
                    <div class="form-group label-floating">
                        <label class="control-label">artis</label>
                        {{Form::text('artist', null,['class' => 'form-control'])}}
                    </div>
                    <h4 class="table-hover">Years</h4>
                    <div class="form-group label-floating">
                        <label class="control-label">Years</label>
                        {{Form::text('years', null,['class' => 'form-control'])}}
                    </div>
                    <div class="col text-center">
                        <div class="container text-center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex text-right">
                <a href="{{ url('music') }}" class="btn btn-default btn-fill">Cancel</a>
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
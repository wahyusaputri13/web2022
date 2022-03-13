@extends('back.layouts.app')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="green">
                    <i class="material-icons">event_note</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Stacked Form</h4>
                    {{Form::model($data, ['route' => ['news.update', $data->id],'method' => 'put', 'files' =>
                    'true', ''])}}
                    <div class="col text-center">
                        <!-- <legend>Regular Image</legend> -->
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                                @if($data->path)
                                <img src="{{ asset('storage') }}/{{ $data->path }}" alt="...">
                                @else
                                <img src="{{ asset('assets/back/assets/img/image_placeholder.jpg') }}" alt="...">
                                @endif
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            <div>
                                <span class="btn btn-success btn-round btn-file">
                                    <span class="fileinput-new">Select image</span>
                                    <span class="fileinput-exists">Change</span>
                                    <!-- <input type="file" name="photo" /> -->
                                    {{Form::file('photo', null,['class' => 'form-control'])}}
                                </span>
                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                    data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                            </div>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Title</label>
                        {{Form::text('title', null,['class' => 'form-control'])}}
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Date</label>
                        {{Form::date('date', null,['class' => 'form-control'])}}
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Description</label>
                        {{Form::textarea('description', null,['class' => 'form-control', 'id' => 'editor'])}}
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success btn-fill">Update</button>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('after-script')
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
@endpush
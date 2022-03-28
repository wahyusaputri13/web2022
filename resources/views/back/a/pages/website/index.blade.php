@extends('back.a.layouts.app')
@section('content')
<div class="content">
    <div class="container-fluid">
        {{ Breadcrumbs::render('settings') }}
        @if ($message = Session::get('success'))
        <div id="elementId" hidden>{{ $message }}</div>
        @endif
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="green">
                        <i class="material-icons">web</i>
                    </div>
                    <div class="card-content">
                        <!-- <h4 class="card-title">Stacked Form</h4> -->
                        {{Form::model($data, ['route' => ['settings.update', $data->id],'method' => 'put', 'files' =>
                        'true', ''])}}
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <!-- <legend>Regular Image</legend> -->
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        @if($data->image_hero)
                                        <img src="{{ asset('storage') }}/{{ $data->image_hero }}" alt="...">
                                        @else
                                        <img src="{{ asset('assets/back/assets/img/image_placeholder.jpg') }}"
                                            alt="...">
                                        @endif
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-success btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <!-- <input type="file" name="photo" /> -->
                                            {{Form::file('image_hero', null,['class' => 'form-control'])}}
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
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Website Name</label>
                                    {{Form::text('web_name', null,['class' => 'form-control'])}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Website Description</label>
                                    {{Form::text('web_description', null,['class' => 'form-control'])}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Email</label>
                                    {{Form::email('email', null,['class' => 'form-control'])}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Address</label>
                                    {{Form::text('address', null,['class' => 'form-control'])}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Phone</label>
                                    {{Form::text('phone', null,['class' => 'form-control'])}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Instagram</label>
                                    {{Form::text('instagram', null,['class' => 'form-control'])}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Twitter</label>
                                    {{Form::text('twitter', null,['class' => 'form-control'])}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Facebook</label>
                                    {{Form::text('facebook', null,['class' => 'form-control'])}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Youtube</label>
                                    {{Form::text('youtube', null,['class' => 'form-control'])}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Url Stream Radio</label>
                                    {{Form::text('url_stream', null,['class' => 'form-control'])}}
                                </div>
                            </div>
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
</div>
@endsection
@push('after-script')
<script>
    $(document).ready(function () {
        if ($('#elementId').length > 0) {
            const pesan = document.getElementById('elementId').innerText;
            console.log(pesan);
            demo.showNotification('top', 'center', pesan)
        }
    });
</script>
@endpush
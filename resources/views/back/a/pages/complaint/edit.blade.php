@extends('back.a.layouts.app')
@section('content')
<div class="content">
    <div class="container-fluid">
        {{ Breadcrumbs::render('complaint') }}
        <div class="row">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="green">
                    <i class="material-icons">date_range</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Form Edit Public Complaints</h4>
                    {{Form::model($data, ['route' => ['complaint.update', $data->id],'method' => 'put', 'files' =>
                    'true', ''])}}
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label class="control-label">Report Date</label>
                                {{Form::text('date', null,['class' => 'form-control datepicker'])}}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label class="control-label">Reporter's Name</label>
                                {{Form::text('name', null,['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Reporter's Phone Number</label>
                                {{Form::text('phone', null,['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Location</label>
                                {{Form::text('location', null,['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Report Description</label>
                                {{Form::text('description', null,['class' => 'form-control'])}}
                            </div>
                        </div>
                    </div>
                    <div class="d-flex text-right">
                        <a href="{{ route('complaint.index') }}" class="btn btn-default btn-fill">Cancel</a>
                        <button type="submit" class="btn btn-success btn-fill">Insert</button>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('after-script')
<script type="text/javascript">
    $(document).ready(function () {
        demo.initFormExtendedDatetimepickers();
    });
</script>
@endpush
@extends('templates.back.main')
@section('container')
@include('templates.back.sidebar')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="green">
                        <i class="material-icons">menu</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Stacked Form</h4>
                        {{Form::model($data, ['route' => ['menu.update', $data->id],'method' => 'put', 'files' =>
                        'true', ''])}}
                        <div class="form-group label-floating">
                            <label class="control-label">Menu Name</label>
                            {{Form::text('menu', null,['class' => 'form-control'])}}
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-fill">Update</button>
                        </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container-fluid">
        <p class="copyright pull-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>
            <a href="http://www.creative-tim.com/">Creative Tim</a>, made with love for a better web
        </p>
    </div>
</footer>
</div>
</div>
@endsection
@push('javascript')
@endpush
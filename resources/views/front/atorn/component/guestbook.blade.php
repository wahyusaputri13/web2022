@extends('front.atorn.layouts.app')
@section('content')
<!-- Page banner Area -->
<div class="page-banner bg-1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-content">
                    <h2>Buku Tamu</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Home <i class="las la-angle-right"></i></a></li>
                        <li>Buku Tamu</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page banner Area -->

<!-- News & Blog Area -->
<div class="blog-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="card-content">
                            <div class="text-center mb-3">
                                <button type="button" style="color: white; background: #3D4D6A;" class="btn"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Add Guest
                                </button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Guest</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        {{Form::open(['url' => 'guest','method' => 'post', 'files'
                                        => 'true', ''])}}
                                        <div class="modal-body">

                                            <div class="form-group label-floating">
                                                <label class="control-label">Nama</label>
                                                {{Form::text('name', null,['class' => 'form-control'])}}
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Instansi</label>
                                                {{Form::text('instansi', null,['class' => 'form-control'])}}
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Keperluan</label>
                                                {{Form::text('keperluan', null,['class' => 'form-control'])}}
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Jumlah</label>
                                                {{Form::number('jumlah', null,['class' => 'form-control'])}}
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn"
                                                style="color: white; background: #3D4D6A;">Save</button>
                                        </div>
                                        {{Form::close()}}
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal -->
                            <table id="datatables" class="table table-striped" cellspacing="0" width="100%"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tanggal</th>
                                        <th>Nama</th>
                                        <th>Instansi</th>
                                        <th>Keperluan</th>
                                        <th>Jumlah Tamu</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End News & Blog Area -->
@endsection
@push('after-script')
<script type="text/javascript">
    $('#datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        responsive: true,
        processing: true,
        serverSide: true,
        lengthChange: true,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search records",
        },
        columns: [
            { data: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'tgl' },
            { data: 'name', name: 'name' },
            { data: 'instansi', name: 'instansi' },
            { data: 'keperluan', name: 'keperluan' },
            { data: 'jumlah', name: 'jumlah' },
        ]

    });
        // var table = $('#datatables').DataTable();
        // $('.card .material-datatables label').addClass('form-group');
</script>
@endpush
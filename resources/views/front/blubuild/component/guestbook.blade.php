@extends('front.blubuild.layouts.app')
@section('content')
<section>
    <div class="w-100 pt-170 pb-150 dark-layer3 opc7 position-relative">
        <div class="fixed-bg" style="background-image: url(assets/images/pagetop-bg.jpg);"></div>
        <div class="container">
            <div class="page-top-wrap w-100">

                <h1 class="mb-0">Buku Tamu</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" title="">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" title="">Page</a></li>
                    <li class="breadcrumb-item active">Buku Tamu</li>
                </ol>

            </div>
            <!-- Page Top Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-100 pb-100 position-relative">
        <div class="container">
            <div class="post-detail-wrap w-100">
                <div class="text-center mb-3">
                    <button type="button" style="color: white; background: #3D4D6A;" class="btn" data-toggle="modal"
                        data-target="#exampleModal">
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
                                <button type="button" class="btn-close" data-dismiss="modal"
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
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn"
                                    style="color: white; background: #3D4D6A;">Save</button>
                            </div>
                            {{Form::close()}}
                        </div>
                    </div>
                </div>
                <!-- End Modal -->
                <table id="datatables" class="table is-striped" cellspacing="0" width="100%" style="width:100%">
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
            <!-- Blog Detail Wrap -->
        </div>
    </div>
</section>
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
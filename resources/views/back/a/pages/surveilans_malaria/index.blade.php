@extends('back.a.layouts.app')
@section('content')
<div class="content">
    <div class="container-fluid">
        {{ Breadcrumbs::render('surveilans_malaria') }}
        @if ($message = Session::get('success'))
        <div id="elementId" hidden>{{ $message }}</div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="green">
                        <i class="material-icons">event_note</i>
                    </div>
                    <div class="card-content">
                        <!-- <h4 class="card-title">DataTables.net</h4> -->
                        <div class="text-right">
                            <a href="{{ route('surveilans_malaria.create') }}" class="btn btn-info btn-round">Tambah
                                Data <i class="material-icons">add_circle_outline</i>
                                <div class="ripple-container"></div>
                            </a>
                        </div>
                        <div class="toolbar text-right">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover devan"
                                cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Kota Terakhir Yang Dikunjungi</th>
                                        <th>Alamat Saat Ini</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Nomor HP</th>
                                        <th class="disabled-sorting text-center">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <!-- <tfoot>
                                                                        <tr>
                                                                                <th>#</th>
                                                                                <th>Name</th>
                                                                                <th class="text-right">Actions</th>
                                                                        </tr>
                                                                </tfoot> -->
                            </table>
                        </div>
                    </div>
                    <!-- end content-->
                </div>
                <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
        </div>
    </div>
</div>
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
        lengthChange: false,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search records",
        },
        columns: [
            { data: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'nik', name: 'nik', className: "text-center" },
            { data: 'nama', name: 'nama', className: "text-center" },
            { data: 'lahir', name: 'tanggal_lahir', className: "text-center" },
            { data: 'kelamin.code_nm', name: 'kelamin.code_nm', className: "text-center" },
            { data: 'last_city', name: 'last_city', className: "text-center" },
            { data: 'alamat', name: 'alamat', className: "text-center" },
            { data: 'kembali', name: 'tgl_kembali', className: "text-center" },
            { data: 'no_hp', name: 'nomor_hp', className: "text-center" },
            { data: 'action', className: "text-center" },
        ]
    });
        // var table = $('#datatables').DataTable();
        // $('.card .material-datatables label').addClass('form-group');
</script>
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
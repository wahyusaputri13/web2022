@extends('back.a.layouts.app')
@section('content')
<div class="content">
    <div class="container-fluid">
        {{ Breadcrumbs::render('inbox') }}
        @if ($message = Session::get('success'))
        <div id="elementId" hidden>{{ $message }}</div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="green">
                        <i class="material-icons">mail</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title" style="color: white;">a</h4>
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover devan"
                                cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Message</th>
                                        <th>Status</th>
                                        <th class="disabled-sorting text-center">
                                            Action</th>
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
            { data: 'tgl', className: "text-center" },
            { data: 'name', name: 'name', className: "text-center" },
            { data: 'email', name: 'email', className: "text-center" },
            { data: 'phone', name: 'phone', className: "text-center" },
            { data: 'message', name: 'message', className: "text-center" },
            { data: 'status', name: 'status', className: "text-center" },
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
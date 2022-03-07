@extends('templates.back.main')
@section('container')
@include('templates.back.sidebar')
<div class="content">
    <div class="container-fluid">

        @if ($message = Session::get('success'))
        <div class="col-md-4" hidden>
            <button id="btn-notif" class="btn btn-primary btn-block" onclick="demo.showNotification('top','center')">Top
                Center</button>
        </div>
        <script>
            document.getElementById("btn-notif").click();
        </script>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="green">
                        <i class="material-icons">collections</i>
                    </div>
                    <div class="card-content">
                        <!-- <h4 class="card-title">DataTables.net</h4> -->
                        <div class="text-right">
                            <a href="{{ url('gallery/create') }}" class="btn btn-info btn-round">Add Data <i
                                    class="material-icons">add_circle_outline</i>
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
                                        <th>Description</th>
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
@push('javascript')
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
            { data: 'DT_RowIndex' },
            { data: 'description', name: 'description' },
            { data: 'action', },
        ]

    });
        // var table = $('#datatables').DataTable();
        // $('.card .material-datatables label').addClass('form-group');
</script>
@endpush
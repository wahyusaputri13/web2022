<div>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#tab1">Informasi Berkala | Setiap Saat | Serta Merta
                |
                Dikecualikan</a></li>
        <li><a data-toggle="tab" href="#tab2">Daftar Informasi Publik (DIP)</a></li>
    </ul>
    <div class="tab-content">
        <div id="tab1" class="tab-pane fade in active" style="margin-left: 22px; margin-right: 22px;">
            <div class="form-group text-center" style="padding-top: 22px;">
                {{Form::select('kategori', get_code_group('INFORMASI_ST'), null, ['class' =>
                'form-control','placeholder' => 'Semua Data','id'=>'filterSelect'])}}
            </div>
            <table id="dataTable" class="display" style="width:100%" wire:ignore>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th class="disabled-sorting text-center">
                            Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div id="tab2" class="tab-pane fade" style="margin-left: 22px; margin-right: 22px;">
            <div>
                <table id="datatables2" class="display" style="width:100%" wire:ignore>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Judul</th>
                            <th class="disabled-sorting text-center">
                                Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@push('after-script')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
</head>
<script type="text/javascript">
    $(document).ready(function () {
        var dataTable = $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('datappid') }}",
            columns: [
                { data: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'menu_name', name: 'menu_name', className: "text-center", defaultContent: 'N/A' },
                { data: 'kategori', name: 'kategori', className: "text-center" },
                { data: 'action', className: "text-center" },
            ],
            columnDefs: [
                { targets: [2], visible: false } // Hide the Category column (index 1)
            ]
        });

        $('#filterSelect').on('change', function () {
            var selectedValue = $(this).val();
            dataTable.column(2).search(selectedValue).draw();
        });

        $('#datatables2').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('datappid2') }}",
            columns: [
                { data: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'dip_tahun', name: 'dip_tahun', className: "text-center" },
                { data: 'title', name: 'title', className: "text-center" },
                { data: 'action', className: "text-center" },
            ]
        });
    });
</script>
@endpush
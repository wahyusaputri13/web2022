<div>
    <div class="container mt-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                    role="tab" aria-controls="home" aria-selected="true">Informasi Berkala | Setiap Saat | Serta Merta
                    |
                    Dikecualikan</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                    role="tab" aria-controls="profile" aria-selected="false">Daftar Informasi Publik (DIP)</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <section id="portfolio-details" class="portfolio-details">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="form-group text-center py-3">
                                                {{Form::select('kategori', get_code_group('INFORMASI_ST'), null,
                                                ['class' =>
                                                'form-control','placeholder' => 'Semua Data','id'=>'filterSelect'])}}
                                            </div>
                                            <table id="datatables" class="table is-striped" cellspacing="0" width="100%"
                                                style="width:100%">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <section id="portfolio-details" class="portfolio-details">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <table id="datatables2" class="table is-striped" cellspacing="0"
                                                width="100%" style="width:100%">
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
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@push('after-script')
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> -->
</head>
<script type="text/javascript">
    $(document).ready(function () {
        var dataTable = $('#datatables').DataTable({
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
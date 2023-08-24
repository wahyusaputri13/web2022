<div>
<<<<<<< HEAD
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
                                                width="100%">
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
=======
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
            <table id="datatables" class="display" style="width:100%" wire:ignore>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nama</th>
                        <th class="disabled-sorting text-center">
                            Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lists ?? [] as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->menu_name }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td class="text-center">
                            <a target="_blank" href="{{ url('page', $item->menu_url) }}"
                                class="btn btn-primary">TAMPIL</a>
                        </td>
                    </tr>
                    @endforeach
                    @foreach ($lists2 ?? [] as $item2)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item2->title }}</td>
                        <td>{{ $item2->kategori }}</td>
                        <td class="text-center">
                            <a target="_blank" href="{{ url('news-detail', $item->slug) }}"
                                class="btn btn-primary">TAMPIL</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
<<<<<<< HEAD
        <div id="tab2" class="tab-pane fade">
            <h3>Tab 2 Content</h3>
            <p>This is the content of Tab 2.</p>
>>>>>>> 882b159 (perbaikan dip)
=======
        <div id="tab2" class="tab-pane fade" style="margin-left: 22px; margin-right: 22px;">
            <div>
                <table id="datatables2" class="display" style="width:100%" wire:ignore>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th class="disabled-sorting text-center">
                                Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dip ?? [] as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->dip_tahun }}</td>
                            <td class="text-center">
                                <a target="_blank" href="{{ url('page', $item->id) }}" class="btn btn-primary">LIHAT
                                    DATA</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
>>>>>>> ac31215 (perbaiki migrasi)
        </div>
    </div>
</div>
@push('after-script')
<<<<<<< HEAD
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
=======
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
</head>
<script type="text/javascript">
    $(document).ready(function () {
<<<<<<< HEAD
        $('#datatables').DataTable();
>>>>>>> 882b159 (perbaikan dip)
=======
        var dataTable = $('#datatables').DataTable({
            columnDefs: [
                { targets: [2], visible: false } // Hide the Category column (index 1)
            ]
        });

        $('#filterSelect').on('change', function () {
            var selectedValue = $(this).val();
            dataTable.column(2).search(selectedValue).draw();
        });
<<<<<<< HEAD
>>>>>>> 2bff8c8 (perbaikan filter)
=======

        var dataTable2 = $('#datatables2').DataTable();
>>>>>>> ac31215 (perbaiki migrasi)
    });
</script>
@endpush
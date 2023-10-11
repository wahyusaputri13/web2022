@extends('front.layouts.app')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>{{ $hasil }}</h2>
            <ol>
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li>Postingan</li>
            </ol>

        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <x-cari-news />

            <div class="row gy-4 posts-list mt-2">
                <table id="dataTable" class="display">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Halaman</th>
                            <th>Kategori</th>
                            <th class="disabled-sorting text-center">
                                Aksi</th>
                        </tr>
                    </thead>
                </table>
                <!-- End blog pagination -->
            </div>
            <!-- End blog posts list -->

        </div>
    </section>
    <!-- End Blog Section -->

</main>
<!-- End #main -->

@endsection
@push('after-script')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
</head>
<script type="text/javascript">
    $(document).ready(function () {
        var dataTable = $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            // ajax: "{{ route('global.search') }}",
            columns: [
                { data: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'title', name: 'title', className: "text-center", defaultContent: 'N/A' },
                { data: 'kategori', name: 'kategori', className: "text-center" },
                { data: 'action', className: "text-center" },
            ],
            columnDefs: [
                { targets: [2], visible: false } // Hide the Category column (index 1)
            ]
        });


    });
</script>
@endpush
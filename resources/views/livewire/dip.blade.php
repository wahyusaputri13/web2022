@push('after-style')
@endpush
<div>
    <div class="row">
        <div class="col">
            <center>
                <ul class="breadcrumb">
                    <li>
                        <button wire:click="openA" class="btn btn-primary">Informasi Berkala | Setiap Saat | Serta Merta
                            |
                            Dikecualikan</button>
                    </li>
                    <li>
                        <button wire:click="openB" class="btn btn-primary">Daftar Informasi Publik (DIP)</button>
                    </li>
                </ul>
            </center>
        </div>
    </div>
    @if ($a)
    <div class="col">
        <div class="form-group text-center">
            <h3>
                Jenis Informasi Publik
            </h3>
            {{Form::select('kategori', get_code_group('INFORMASI_ST'), null, ['class' =>
            'form-control','placeholder' => 'Semua Data','wire:model' => 'cari'])}}
        </div>
        <table id="datatables" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th class="disabled-sorting text-center">
                        Aksi</th>
                </tr>
                @foreach ($data as $item)
            </thead>
            <tbody>
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->menu_name }}</td>
                    <td class="text-center"><a href="" class="btn btn-primary">TAMPIL</a></td>
                </tr>
            </tbody>
            @endforeach
            <!-- <div class="text-center">
                    <h3>
                        Tidak Ada Data
                    </h3>
                </div> -->
        </table>
    </div>
    @endif
    @if ($b)
    <div class="col">
        halaman b
    </div>
    @endif
</div>
@push('after-script')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#datatables').DataTable();
    });
</script>
@endpush
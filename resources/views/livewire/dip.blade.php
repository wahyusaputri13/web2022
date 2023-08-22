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
            Jenis Informasi Publik
            {{Form::select('kategori', get_code_group('INFORMASI_ST'), null, ['class' =>
            'form-control','placeholder' => 'Semua Data','wire:model' => 'cari'])}}
        </div>
        <table id="datatables" class="table table-striped table-no-bordered table-hover devan" cellspacing="0"
            width="100%" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th class="disabled-sorting text-center">
                        Aksi</th>
                </tr>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->menu_name }}</td>
                    <td class="text-center"><a href="" class="btn btn-primary">TAMPIL</a></td>
                </tr>
                @endforeach
            </thead>
        </table>
    </div>
    @endif
    @if ($b)
    <div class="col">
        halaman b
    </div>
    @endif
</div>
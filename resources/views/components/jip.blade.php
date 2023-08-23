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
                'form-control','placeholder' => 'Semua Data'])}}
            </div>
            <table id="datatables" class="display" style="width:100%" wire:ignore>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th class="disabled-sorting text-center">
                            Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->menu_name }}</td>
                        <td class="text-center">
                            <a href="{{ url('page', $item->menu_url) }}" class="btn btn-primary">TAMPIL</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div id="tab2" class="tab-pane fade">
            <h3>Tab 2 Content</h3>
            <p>This is the content of Tab 2.</p>
        </div>
    </div>
</div>
@push('after-script')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#datatables').DataTable();
    });
</script>
@endpush
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
        halaman a
    </div>
    @endif
    @if ($b)
    <div class="col">
        halaman b
    </div>
    @endif
</div>
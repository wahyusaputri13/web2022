<h3 class="{{ $h3 }}">Categories</h3>
<div class="{{ $div }}">
    <ul>
        <li><a href="{{ url('newscategory') }}/Administrasi Pembangunan">Administrasi Pembangunan <span>({{
                    App\Models\News::withAnyTag(['Administrasi Pembangunan'])->count()
                    }})</span></a></li>
        <li><a href="{{ url('newscategory') }}/Hukum">Hukum <span>({{
                    App\Models\News::withAnyTag(['Hukum'])->count() }})</span></a></li>
        <li><a href="{{ url('newscategory') }}/Kesejahtaraan Rakyat">
                Kesejahtaraan Rakyat<span>({{ App\Models\News::withAnyTag(['Kesejahtaraan Rakyat'])->count()
                    }})</span></a>
        </li>
        <li><a href="{{ url('newscategory') }}/Organisasi">Organisasi <span>({{
                    App\Models\News::withAnyTag(['Organisasi'])->count() }})</span></a></li>
        <li><a href="{{ url('newscategory') }}/Pemerintahan">Pemerintahan <span>({{
                    App\Models\News::withAnyTag(['Pemerintahan'])->count()}})</span></a></li>
        <li><a href="{{ url('newscategory') }}/Pengadaan Barang dan Jasa">Pengadaan Barang dan Jasa <span>({{
                    App\Models\News::withAnyTag(['Pengadaan Barang dan Jasa'])->count()
                    }})</span></a></li>
        <li><a href="{{ url('newscategory') }}/Protokol dan Komunikasi Pimpinan">Protokol dan Komunikasi Pimpinan
                <span>({{
                    App\Models\News::withAnyTag(['Protokol dan Komunikasi Pimpinan'])->count()
                    }})</span></a></li>
        <li><a href="{{ url('newscategory') }}/Umum">Umum <span>({{
                    App\Models\News::withAnyTag(['Umum'])->count() }})</span></a></li>
    </ul>
</div>
<!-- End sidebar categories -->
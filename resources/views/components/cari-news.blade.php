<div class="row">
    <div class="col">
        {{Form::open(['route' => 'news.search','method' => 'get', ''])}}
        {{Form::text('kolomcari', null,['class' => 'form-control mb-3',
        'placeholder' => 'Masukkan Judul Postingan'])}}
        <div class="d-grid">
            <button type="submit" class="btn mt-1 fw-bold" style="background-color: #ff5e15; color: white;">Cari
                Postingan <i class="bi bi-search"></i></button>
        </div>
        {{Form::close()}}
    </div>
</div>
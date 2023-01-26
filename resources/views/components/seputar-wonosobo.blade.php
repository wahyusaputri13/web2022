@php
$abc = App\Models\Component::where('slug', 'seputar-wonosobo')->first()
@endphp
@if($abc->active == '1')
<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2>Berita</h2>
            <p>Seputar Wonosobo</p>
        </header>
        <div class="row mt-4">
            @foreach($message as $art)
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="post-box">
                    <div class="post-img">
                        <img src="https://diskominfo.wonosobokab.go.id/{{ $art['gambar_muka']['path'] }}{{ $art['gambar_muka']['file_name'] }}"
                            class="img-fluid">
                    </div>
                    <span class="post-date">
                        {{ \Carbon\Carbon::parse($art['created_at'])->format('l') }}, {{
                        \Carbon\Carbon::parse( $art['created_at']
                        )->toFormattedDateString() }}
                    </span>
                    <h3 class="post-title">
                        {{ substr($art['judul_posting'],0,35) }}..
                    </h3>
                    <a href="{{ route('detail-berita', $art['id_posting']) }}"
                        class="readmore stretched-link mt-auto"><span>Read
                            More</span><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@extends('front.arsha.layouts.app')
@section('content')
<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container mt-5" data-aos="fade-up">
        <header class="section-header" style="text-align: center;">
            <h2>Blog</h2>
            <p>Recent posts from our Blog</p>
        </header>
        <div class="row mb-3" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-around">
                <a class="btn rounded-pill" style="background: #47b2e4; color: white;" href="{{ url('/newsall') }}">Show
                    All</a>
                <a class="btn rounded-pill" style="background: #47b2e4; color: white;"
                    href="{{ url('newscategory') }}/KATEGORI_NEWS_4">Berita</a>
                <a class="btn rounded-pill" style="background: #47b2e4; color: white;"
                    href="{{ url('newscategory') }}/KATEGORI_NEWS_1">Dokumentasi</a>
                <a class="btn rounded-pill" style="background: #47b2e4; color: white;"
                    href="{{ url('newscategory') }}/KATEGORI_NEWS_3">Notulensi</a>
                <a class="btn rounded-pill" style="background: #47b2e4; color: white;"
                    href="{{ url('newscategory') }}/KATEGORI_NEWS_2">Press
                    Release</a>
                <a class="btn rounded-pill" style="background: #47b2e4; color: white;"
                    href="{{ url('newscategory') }}/KATEGORI_NEWS_0">Sambutan</a>
            </div>
        </div>
        <x-cari-news />
        <div class="row mt-3">
            @foreach($news as $n)
            <div class="col-xl-3 col-lg-4 col-md-6 mb-3 d-flex align-items-stretch" data-aos="zoom-in"
                data-aos-delay="100">
                <div class="card" style="border-radius: 15px">
                    <div>
                        @if(file_exists(public_path('storage/'.$n->path)))
                        <img src="{{ asset('storage/') }}/{{ $n->path}}" style="border-radius: 15px" class="img-fluid">
                        @else
                        <img src="{{ asset('img/soulofjava.jpg') }}" class="img-fluid">
                        @endif
                    </div>
                    <span class="m-1" style="color: grey; text-align: center;">{{
                        \Carbon\Carbon::parse($n->date)->format('l') }}, {{
                        \Carbon\Carbon::parse( $n->date
                        )->toFormattedDateString() }}</span>
                    <h3 class="m-1" style="text-align: center;">
                        {{ \Illuminate\Support\Str::limit($n->title, 50, $end='...') }}
                    </h3>
                    <div class="d-flex justify-content-center mb-1">
                        <a class="btn" style="background: #37517e; color: white;"
                            href="{{ url('/news-detail', $n->slug) }}"><span>Read
                                More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-3" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                {{ $news->links() }}
            </div>
        </div>
    </div>
</section>
<!-- End Recent Blog Posts Section -->
@endsection
@push('after-script')
@endpush
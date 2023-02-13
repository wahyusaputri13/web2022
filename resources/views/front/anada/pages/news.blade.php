@extends('front.anada.layouts.app')
@section('content')
<!-- Start Blog
    ============================================= -->
<div class="blog-area full-blog blog-standard full-blog default-padding">
    <div class="container">
        <div class="row mb-3" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-around">
                <a class="btn-simple" href="{{ url('/newsall') }}">Show
                    All</a>
                <a class="btn-simple" href="{{ url('newscategory') }}/KATEGORI_NEWS_4">Berita</a>
                <a class="btn-simple" href="{{ url('newscategory') }}/KATEGORI_NEWS_1">Dokumentasi</a>
                <a class="btn-simple" href="{{ url('newscategory') }}/KATEGORI_NEWS_3">Notulensi</a>
                <a class="btn-simple" href="{{ url('newscategory') }}/KATEGORI_NEWS_2">Press
                    Release</a>
                <a class="btn-simple" href="{{ url('newscategory') }}/KATEGORI_NEWS_0">Sambutan</a>
            </div>
        </div>
        <x-cari-news />
        <div class="blog-items mt-3">
            <div class="row">
                <div class="blog-content col-lg-10 offset-lg-1 col-md-12">
                    <div class="blog-item-box">
                        <!-- Single Item -->
                        @foreach($news as $n)
                        <div class="single-item">
                            <div class="item">
                                <div class="thumb">
                                    <a href="#">
                                        @if(file_exists(public_path('storage/'.$n->path)))
                                        <img src="{{ asset('storage/') }}/{{ $n->path}}" style="border-radius: 15px"
                                            class="img-fluid">
                                        @else
                                        <img src="{{ asset('img/soulofjava.jpg') }}" class="img-fluid">
                                        @endif
                                        <div class="date">
                                            <strong>{{ \Carbon\Carbon::parse($n->date)->format('l') }} </strong> {{
                                            \Carbon\Carbon::parse( $n->date
                                            )->toFormattedDateString() }}
                                        </div>
                                    </a>
                                </div>
                                <div class="info text-center">
                                    <h4>
                                        <a href="{{ url('/news-detail', $n->slug) }}">{{ $n->title }}</a>
                                    </h4>
                                    <p>
                                        {{ \Illuminate\Support\Str::limit($n->description, 50, $end='...') }}
                                    </p>
                                    <a class="btn-simple" href="{{ url('/news-detail', $n->slug) }}"><i
                                            class="fas fa-angle-right"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- End Single Item -->
                    </div>

                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-md-12 pagi-area text-center">
                            <nav aria-label="navigation">
                                {{ $news->links('vendor.pagination.anada') }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->
@endsection
@push('after-script')
@endpush
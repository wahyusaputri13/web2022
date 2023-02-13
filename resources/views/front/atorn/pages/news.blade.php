@extends('front.atorn.layouts.app')
@section('content')
<!-- Page banner Area -->
<div class="page-banner bg-1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-content">
                    <h2>All Posts Our Blog</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Home <i class="las la-angle-right"></i></a></li>
                        <li>All Posts</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page banner Area -->

<!-- News & Blog Area -->
<div class="blog-area ptb-100">
    <div class="container">
        <div class="row mb-3" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-around">
                <a class="default-btn-one" href="{{ url('/newsall') }}">Show
                    All</a>
                <a class="default-btn-one" href="{{ url('newscategory') }}/KATEGORI_NEWS_4">Berita</a>
                <a class="default-btn-one" href="{{ url('newscategory') }}/KATEGORI_NEWS_1">Dokumentasi</a>
                <a class="default-btn-one" href="{{ url('newscategory') }}/KATEGORI_NEWS_3">Notulensi</a>
                <a class="default-btn-one" href="{{ url('newscategory') }}/KATEGORI_NEWS_2">Press
                    Release</a>
                <a class="default-btn-one" href="{{ url('newscategory') }}/KATEGORI_NEWS_0">Sambutan</a>
            </div>
        </div>
        <x-cari-news />
        <div class="row mt-3">
            @foreach($news as $n)
            <div class="col-lg-4 col-sm-6" style="display: flex">
                <div class="blog-card">
                    <a href="{{ url('/news-detail', $n->slug) }}">
                        @if(file_exists(public_path('storage/'.$n->path)))
                        <img src="{{ asset('storage/') }}/{{ $n->path}}" style="border-radius: 15px" class="img-fluid">
                        @else
                        <img src="{{ asset('img/soulofjava.jpg') }}" class="img-fluid">
                        @endif
                    </a>
                    <div class="blog-card-text">
                        <h3><a href="{{ url('/news-detail', $n->slug) }}">{{ $n->title }}</a></h3>
                        <ul>
                            <li>
                                <i class="las la-calendar"></i>
                                {{ \Carbon\Carbon::parse($n->date)->format('l') }} </strong> {{
                                \Carbon\Carbon::parse( $n->date
                                )->toFormattedDateString() }}
                            </li>
                            <li>
                                <i class="las la-user-alt"></i>
                                {{ $n->upload_by }}
                            </li>
                        </ul>

                        <p>{{ \Illuminate\Support\Str::limit($n->description, 50, $end='...') }}</p>

                        <a href="{{ url('/news-detail', $n->slug) }}" class="read-more">
                            Read More <i class="las la-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Pagination -->
        {{ $news->links('vendor.pagination.atorn') }}
    </div>
</div>
<!-- End News & Blog Area -->
@endsection
@push('after-script')
@endpush
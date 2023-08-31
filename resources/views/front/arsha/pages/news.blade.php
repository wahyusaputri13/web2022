@extends('front.arsha.layouts.app')
@push('after-style')
<style>
    .ppid {
        height: 75px !important;
        line-height: 65px !important;
    }
</style>
@endpush
@section('content')
<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts" style="margin-top: 200px;">
    <div class="container mt-5" data-aos="fade-up">
        <header class="section-header" style="text-align: center;">
            <h2>Blog</h2>
            <p>Recent posts from our Blog</p>
        </header>
        <div class="py-3">
            <x-head-category_news bc='#47b2e4' tc='white' />
        </div>
        <x-cari-news />
        <div class="row mt-3">
            @foreach($news as $n)
            <div class="col-xl-3 col-lg-4 col-md-6 mb-3 d-flex align-items-stretch" data-aos="zoom-in"
                data-aos-delay="100">
                <div class="card" style="border-radius: 15px">
                    <div>
                        @forelse($n->gambar as $gambar)
                        @if($loop->iteration == 1)
                        <img src="{{ asset('storage/') }}/{{  $gambar->path }}" class="img-fluid"
                            alt="{{ $gambar->file_name }}">
                        @endif
                        @empty
                        <img src="{{ asset('img/soulofjava.jpg') }}" class="img-fluid" alt="soul of java">
                        @endforelse
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
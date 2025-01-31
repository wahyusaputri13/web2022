@extends('front.herobiz.layouts.app')
@section('content')
<main id="main">
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#">Berita</a></li>
                <li>Seputar Wonosobo</li>
            </ol>
            <!-- <h2>Blog Single</h2> -->
        </div>
    </section>
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8 entries">
                    <article class="entry entry-single">
                        <div class="entry-img">
                            <img src="https://diskominfo.wonosobokab.go.id/{{ $berita['gambar_muka']['path'] }}{{ $berita['gambar_muka']['file_name'] }}"
                                class="img-fluid">
                        </div>
                        <h2 class="entry-title m-1">
                            <a href="#">{{ $berita['judul_posting'] }}</a>
                        </h2>
                        <div class="entry-meta m-1">
                            <li class="d-flex align-items-center">
                                <div class="col">
                                    <i class="bi bi-person"></i>
                                    <a href="#" style="margin-right: 5px;">
                                        Admin
                                    </a>
                                    <i class="bi bi-clock"></i>
                                    <a style="margin-right: 5px;">
                                        {{ \Carbon\Carbon::parse($berita['created_at'])->format('l') }}, {{
                                        \Carbon\Carbon::parse( $berita['created_at']
                                        )->toFormattedDateString() }}
                                    </a>
                                    <i class="bi bi-eye"></i>
                                    {{ $berita['views'] }}
                                </div>
                                <div class="col">
                                    <div class="d-flex justify-content-end">
                                        {!! Share::page(Request::getHttpHost(), $berita['judul_posting'])
                                        ->facebook()
                                        ->twitter()
                                        ->whatsapp(); !!}
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="entry-content m-1">
                            {!! $berita['isi_posting'] !!}
                        </div>
                    </article>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <h3 class="sidebar-title mb-3">Search</h3>
                        <div class="sidebar-item search-form">
                            {{Form::open(['route' => 'news.search','method' => 'get', ''])}}
                            {{Form::text('kolomcari', null,['class' => 'form-control', 'placeholder' => 'Title Post'])}}
                            <button type="submit"><i class="bi bi-search"></i></button>
                            {{Form::close()}}
                        </div>

                        <h3 class="sidebar-title mt-3">Recent Posts</h3>
                        <div class="sidebar-item recent-posts">
                            @foreach($news as $n)
                            <div class="post-item clearfix mt-3">
                                @if(file_exists(public_path('storage/'.$n->path)))
                                <img src="{{ asset('storage/') }}/{{ $n->path}}">
                                @else
                                <img src="{{ asset('img/soulofjava.jpg') }}" class="img-fluid">
                                @endif
                                <h4><a href="{{ url('/news-detail', $n->slug) }}">
                                        {{ \Illuminate\Support\Str::limit($n->title, 50, $end='...') }}
                                    </a></h4>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@push('after-script')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="{{ asset('js/share.js') }}"></script>
@endpush
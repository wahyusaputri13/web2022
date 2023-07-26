@extends('front.anada.layouts.app')
@section('content')
<div class="blog-area single full-blog right-sidebar full-blog default-padding">
    <div class="container">
        <div class="blog-items">
            <div class="row">
                <div class="blog-content col-md-8 col-lg-8">
                    <h2>{{ $hasil }}</h2>
                    @forelse($data as $author)
                    <article class="entry">
                        <div class="card mb-3">
                            <div class="entry-img" style="text-align: center;">
                                @forelse($author->gambar as $gambar)
                                @if($loop->iteration == 1)
                                <img src="{{ asset('storage/') }}/{{  $gambar->path }}" class="img-fluid"
                                    alt="{{ $gambar->file_name }}">
                                @endif
                                @empty
                                <img src="{{ asset('img/soulofjava.jpg') }}" class="img-fluid" alt="soul of java">
                                @endforelse
                            </div>
                            <h2 class="entry-title" style="text-align: center;">
                                <a href="{{ url('/news-detail', $author->slug) }}">{{ $author->title
                                    }}</a>
                            </h2>
                            <div class="entry-meta">
                                <p class="card-text m-2"><small class="text-muted"><i class="bi bi-person"></i><a
                                            href="{{ url('/news-author', $author->upload_by) }}" class="text-muted"> {{
                                            $author->upload_by }}</a> <i class="bi bi-clock"></i> <time>{{
                                            \Carbon\Carbon::parse( $author->date )->format('l') }}, {{
                                            \Carbon\Carbon::parse( $author->date
                                            )->toFormattedDateString() }}</time> <i class="bi bi-eye"></i> {{
                                        views($author)->count(); }}</small></p>
                            </div>
                            <div class="entry-content m-2" style="text-align: justify;">
                                <p>
                                    {{-- {!! \Illuminate\Support\Str::limit($author->description, 350, $end='...') !!}
                                    --}}
                                </p>
                                <div class="d-flex justify-content-end m-2">
                                    <a href="{{ url('/news-detail', $author->slug) }}" class="btn btn-primary">Read
                                        More</a>
                                </div>
                            </div>
                        </div>

                    </article>
                    @empty
                    <div class="text-center">
                        Data Tidak Ditemukan
                    </div>
                    @endforelse

                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 d-flex justify-content-center">
                            {{ $data->withQueryString()->links('vendor.pagination.anada') }}
                        </div>
                    </div>

                </div>
                <div class="sidebar col-md-4 col-lg-4">
                    <aside>
                        <div class="sidebar-item search">
                            <div class="sidebar-info">
                                {{Form::open(['route' => 'news.search','method' => 'get', ''])}}
                                {{Form::text('kolomcari', null,['class' => 'form-control mb-3',
                                'placeholder' => 'Title Post'])}}
                                <button type="submit"><i class="fas fa-search"></i></button>
                                {{Form::close()}}
                            </div>
                        </div>
                        <div class="sidebar-item recent-post">
                            <div class="title">
                                <h4>Recent Post</h4>
                            </div>
                            <ul>
                                @foreach($news as $n)
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            @if(file_exists(public_path('storage/'.$n->path)))
                                            <img src="{{ asset('storage/') }}/{{ $n->path}}"
                                                class="img-fluid rounded-start rounded-end">
                                            @else
                                            <img src="{{ asset('img/soulofjava.jpg') }}" class="img-fluid">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="{{ url('/news-detail', $n->slug) }}">{{
                                            \Illuminate\Support\Str::limit($n->title, 50, $end='...') }}
                                        </a>
                                        <div class="meta-title">
                                            <span class="post-date"><i class="fas fa-clock"></i> {{
                                                \Carbon\Carbon::parse( $n->date
                                                )->toFormattedDateString() }}</span>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('after-script')
@endpush
@extends('front.herobiz.layouts.app')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <!-- <ol>
                <li><a href="#">Home</a></li>
                <li>Blog</li>
            </ol> -->
            <h2>{{ $hasil }}</h2>

        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8 entries">
                    @foreach($data as $author)
                    <article class="entry mt-3">
                        <div class="entry-img">
                            <img src="{{ asset('storage/') }}/{{ $author->path}}" class="img-fluid" alt="">
                        </div>
                        <h2 class="entry-title m-1">
                            <a href="{{ url('/news-detail', $author->id) }}">{{ $author->title }}</a>
                        </h2>
                        <div class="entry-meta m-1">
                            <li class="d-flex align-items-center">
                                <i class="bi bi-person"></i>
                                <a href="{{ url('/news-author', $author->upload_by) }}" style="margin-right: 5px;">
                                    {{ $author->upload_by }}
                                </a>
                                <i class="bi bi-clock"></i>
                                <a style="margin-right: 5px;">
                                    {{
                                    \Carbon\Carbon::parse( $author->date )->format('l') }}, {{
                                    \Carbon\Carbon::parse( $author->date
                                    )->toFormattedDateString() }}
                                </a>
                            </li>
                        </div>
                        <div class="entry-content m-1">
                            <p>
                                {!! $author->description !!}
                            </p>
                            <div class="d-flex justify-content-end">
                                <div class="read-more">
                                    <a href="{{ url('/news-detail', $author->id) }}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- End blog entry -->
                    @endforeach
                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 d-flex justify-content-center">
                            {!! $data->render() !!}
                        </div>
                    </div>
                </div>
                <!-- End blog entries list -->
                <div class="col-lg-4">
                    <div class="sidebar">
                        <h3 class="sidebar-title mb-3">Search</h3>
                        <div class="sidebar-item search-form">
                            {{Form::open(['route' => 'news.search','method' => 'get', ''])}}
                            {{Form::text('kolomcari', null,['class' => 'form-control', 'placeholder' => 'Title Post'])}}
                            <button type="submit"><i class="bi bi-search"></i></button>
                            {{Form::close()}}
                        </div>
                        <!-- End sidebar search formn-->
                        <h3 class="sidebar-title mt-3">Recent Posts</h3>
                        <div class="sidebar-item recent-posts">
                            @foreach($news as $n)
                            <div class="post-item clearfix mt-3">
                                <img src="{{ asset('storage/') }}/{{ $n->path}}" alt="">
                                <h4><a href="{{ url('/news-detail', $n->id) }}">{{ $n->title }}</a></h4>
                            </div>
                            @endforeach
                        </div>
                        <!-- End sidebar recent posts-->
                    </div><!-- End sidebar -->
                </div><!-- End blog sidebar -->
            </div>
        </div>
    </section><!-- End Blog Section -->
</main>
@endsection
@push('after-script')
@endpush
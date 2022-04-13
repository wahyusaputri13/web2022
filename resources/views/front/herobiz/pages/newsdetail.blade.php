@extends('front.herobiz.layouts.app')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <!-- <ol>
                <li><a href="index.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li>Blog Single</li>
            </ol> -->
            <!-- <h2>Blog Single</h2> -->

        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8 entries">
                    <article class="entry entry-single">
                        <div class="entry-img">
                            <img src="{{ asset('storage/') }}/{{ $data->path}}" class="img-fluid" alt="">
                        </div>
                        <h2 class="entry-title m-1">
                            <a href="#">{{ $data->title }}</a>
                        </h2>
                        <div class="entry-meta m-1">
                            <li class="d-flex align-items-center">
                                <i class="bi bi-person"></i>
                                <a href="{{ url('/news-author', $data->upload_by) }}" style="margin-right: 5px;">
                                    {{ $data->upload_by }}
                                </a>
                                <i class="bi bi-clock"></i>
                                <a style="margin-right: 5px;">
                                    {{
                                    \Carbon\Carbon::parse( $data->date )->format('l') }}, {{
                                    \Carbon\Carbon::parse( $data->date
                                    )->toFormattedDateString() }}
                                </a>
                                <i class="bi bi-eye"></i>
                                {{ views($data)->count(); }}
                            </li>
                        </div>
                        <div class="entry-content m-1">
                            {!! $data->description !!}
                        </div>
                    </article>
                    <!-- End blog entry -->

                </div><!-- End blog entries list -->
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
                                <img src="{{ asset('storage/') }}/{{ $n->path}}" alt="">
                                <h4><a href="{{ url('/news-detail', $n->id) }}">{{ $n->title }}</a></h4>
                            </div>
                            @endforeach
                        </div>
                    </div><!-- End sidebar -->
                </div><!-- End blog sidebar -->
            </div>
        </div>
    </section><!-- End Blog Single Section -->
</main>
@endsection
@push('after-script')
@endpush
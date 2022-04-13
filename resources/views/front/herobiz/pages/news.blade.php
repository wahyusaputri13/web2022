@extends('front.herobiz.layouts.app')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <!-- <h2>Blog</h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Blog</li>
            </ol> -->
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2>Blog</h2>
            <p>Recent posts from our Blog</p>
        </header>
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="row gy-4 posts-list">
                    @foreach($news as $n)
                    <div class="col-lg-6">
                        <article class="d-flex flex-column">
                            <div class="post-img">
                                <img src="{{ asset('storage/') }}/{{ $n->path}}" class="img-fluid">
                            </div>
                            <h2 class="title">
                                <a href="#">{{ $n->title }}</a>
                            </h2>
                            <div class="meta-top">
                                <i class="bi bi-person"></i>
                                <a href="#">{{ $n->upload_by }}</a><br>
                                <i class="bi bi-clock"></i>
                                <a href="#">
                                    {{
                                    \Carbon\Carbon::parse($n->date)->format('l') }}, {{
                                    \Carbon\Carbon::parse( $n->date
                                    )->toFormattedDateString() }}
                                </a>
                            </div>
                            <div class="content">
                                <p>
                                    Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi
                                    praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                                </p>
                            </div>
                            <div class="read-more mt-auto align-self-end">
                                <a href="{{ url('/news-detail', $n->id) }}">Read More</a>
                            </div>
                        </article>
                    </div>
                    <!-- End post list item -->
                    @endforeach
                </div>
                <!-- End blog posts list -->
                <div class="row mt-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        {!! $news->render() !!}
                        <!-- {{ $news->links() }} -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar-item search-form">
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
                            @if($loop->iteration == 5)
                            @break
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <!-- End sidebar tags-->
                </div>
                <!-- End Blog Sidebar -->
            </div>
        </div>
    </div>
</section>
<!-- End Blog Section -->
@endsection
@push('after-script')
<script>
    $(function () {
        $('body').on('click', '.pagination a', function (e) {
            e.preventDefault();
            $('#load').append('<img style="position: absolute; left: 0; top: 0; z-index: 10000;" src="https://i.imgur.com/v3KWF05.gif />');
            var url = $(this).attr('href');
            window.history.pushState("", "", url);
            loadPosts(url);
        });
        function loadPosts(url) {
            $.ajax({
                url: url
            }).done(function (data) {
                $('.recent-blog-posts').html(data);
            }).fail(function () {
                console.log("Failed to load data!");
            });
        }
    });
</script>
@endpush
@extends('front.arsha.layouts.app')
@section('content')
@if($news->count() != 0)
<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container mt-5" data-aos="fade-up">
        <header class="section-header" style="text-align: center;">
            <h2>Blog</h2>
            <p>Recent posts form our Blog</p>
        </header>
        <div class="row mt-3">
            @foreach($news as $n)
            <div class="col-xl-3 col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                <div class="card" style="border-radius: 15px">
                    <div>
                        <img src="{{ asset('storage/') }}/{{ $n->path}}" style="border-radius: 15px" class="img-fluid">
                    </div>
                    <span class="m-1" style="color: grey; text-align: center;">{{
                        \Carbon\Carbon::parse($n->date)->format('l') }}, {{
                        \Carbon\Carbon::parse( $n->date
                        )->toFormattedDateString() }}</span>
                    <h3 class="m-1">{{ $n->title }}</h3>
                    <div class="d-flex justify-content-center mb-1">
                        <a class="btn" style="background: #47b2e4; color: white;"
                            href="{{ url('/news-detail', $n->id) }}"><span>Read
                                More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-3" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                {!! $news->render() !!}
                <!-- {{ $news->links() }} -->
            </div>
        </div>
    </div>
</section>
<!-- End Recent Blog Posts Section -->
@endif
@endsection
@push('after-script')
<!-- <script>
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
</script> -->
@endpush
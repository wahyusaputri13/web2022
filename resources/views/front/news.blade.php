<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Blog</h2>
            <p>Recent posts form our Blog</p>
        </header>

        <div class="row">
            @foreach($news as $n)
            <div class="col-lg-4">
                <div class="post-box">
                    <div class="post-img">
                        <img src="{{ asset('storage/') }}/{{ $n->path}}" class="img-fluid" alt="">
                    </div>
                    <span class="post-date">{{ \Carbon\Carbon::parse($n->date)->format('l') }}, {{
                        \Carbon\Carbon::parse( $n->date
                        )->toFormattedDateString() }}</span>
                    <h3 class="post-title">{{ $n->title }}
                    </h3>
                    <a href="{{ url('/news-detail', $n->id) }}" class="readmore stretched-link mt-auto"><span>Read
                            More</span><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            @endforeach

        </div>
    </div>

</section>
<!-- End Recent Blog Posts Section -->
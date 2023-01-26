@extends('front.atorn.layouts.app')
@section('content')

<!-- Hero Slider Area -->
<div class="hero-slider owl-carousel owl-theme">
    <div class="hero-slider-item item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="slider-content">
                        <span>Right Way..</span>
                        <h1>We Provide Legal Help For You</h1>
                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                            pain was born and I will give you a complete account of the system, and expound the
                            actual teachings of the great explorer of the truth.</p>
                        <div class="slider-btn">
                            <a href="#" class="default-btn-one me-3">Free Consulting</a>
                            <a href="#" class="default-btn-two">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-slider-item item-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="slider-content">
                        <span>Right Way..</span>
                        <h1>Attorneys Fight For Your Justice</h1>
                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                            pain was born and I will give you a complete account of the system, and expound the
                            actual teachings of the great explorer of the truth.</p>
                        <div class="slider-btn">
                            <a href="#" class="default-btn-one me-3">Free Consulting</a>
                            <a href="#" class="default-btn-two">Learn Moreg</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-slider-item item-bg3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="slider-content">
                        <span>Right Way..</span>
                        <h1>It’s Our Pride To Fight For Your Dream</h1>
                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                            pain was born and I will give you a complete account of the system, and expound the
                            actual teachings of the great explorer of the truth.</p>
                        <div class="slider-btn">
                            <a href="#" class="default-btn-one me-3">Free Consulting</a>
                            <a href="#" class="default-btn-two">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Hero Slider Area -->

@if($gallery->count() != 0)
<!-- Service Area -->
<div class="service-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <!-- <span>Gallery</span> -->
            <h2>Latest Photo From Our Blog</h2>
            <a href="{{ url('photos') }}">Show All Photos</a>
        </div>

        <div class="row">
            @foreach($gallery as $n)
            <div class="col-lg-4 col-sm-6" style="display: flex">
                <div class="service-card">
                    @if(file_exists(public_path('storage/'.$n->path)))
                    <a data-fancybox="gallery" href="{{ asset('storage/') }}/{{ $n->path}}"><img
                            src="{{ asset('storage/') }}/{{ $g->path}}" class="img-fluid"></a>
                    @else
                    <a data-fancybox="gallery" href="{{ asset('img/soulofjava.jpg') }}"><img
                            src="{{ asset('img/soulofjava.jpg') }}" class="img-fluid" alt="soulofjava"></a>
                    @endif
                    <div class="service-text">
                        <p>{{ $n->description }}</p>
                    </div>
                </div>
            </div>
            @if($loop->iteration == 6)
            @break
            @endif
            @endforeach
        </div>
    </div>
</div>
<!-- End Service Area -->
@endif

<!-- Blog Area -->
@if($news->count() != 0)
<div class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <!-- <span>Posts</span> -->
            <h2><span>Latest Post From Our Blog</span></h2>
            <a href="{{ url('newsall') }}">Show All Posts</a>
        </div>

        <div class="row">
            @foreach($news as $n)
            <div class="col-lg-4 col-sm-6 mb-3" style="display: flex">
                <div class="blog-card">
                    <a href="{{ url('/news-detail', $n->slug) }}">
                        @if(file_exists(public_path('storage/'.$n->path)))
                        <img src="{{ asset('storage/') }}/{{ $n->path}}" class="img-fluid" alt="{{ $n->photo }}">
                        @else
                        <img src="{{ asset('img/soulofjava.jpg') }}" class="img-fluid" alt="soul of java">
                    </a>
                    @endif
                    <div class="blog-card-text">
                        <h3><a href="{{ url('/news-detail', $n->slug) }}">{{ \Illuminate\Support\Str::limit($n->title,
                                50, $end='...') }}</a></h3>
                        <ul>
                            <li>
                                <i class="las la-calendar"></i>
                                {{ \Carbon\Carbon::parse($n->date)->format('l') }}, {{
                                \Carbon\Carbon::parse( $n->date
                                )->toFormattedDateString() }}
                            </li>
                            <li>
                                <i class="las la-user-alt"></i>
                                {{ $n->upload_by }}
                            </li>
                        </ul>

                        <p>{{ \Illuminate\Support\Str::limit($n->description,
                            100, $end='...') }}</p>

                        <a href="{{ url('/news-detail', $n->slug) }}">
                            Read More <i class="las la-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @if($loop->iteration == 6)
            @break
            @endif
            @endforeach
        </div>
    </div>
</div>
@endif
<!-- End Blog Area -->

<div class="blog-area pt-100 pb-70">
    <x-seputar-wonosobo :message='$berita' />
</div>

<!-- Contact Area -->
<div class="contact-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="contact-text">
                    <div class="section-title">
                        <h2>Contact Us Today, Get In Touch With Expert</h2>
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so
                            beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire
                            hat they cannot foresee the pain and trouble.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="section-title">
                    <span>Contact Form</span>
                    <h2>Get A Flexible Schedule</h2>
                </div>
                <div class="contact-form">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" required
                                        placeholder="Full name">
                                    <i class="las la-user"></i>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="email" required
                                        placeholder="Email address">
                                    <i class="las la-envelope"></i>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" id="Phone" required
                                        placeholder="Phone No">
                                    <i class="las la-phone"></i>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" name="email" class="form-control" id="date">
                                    <i class="las la-calendar"></i>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" cols="30" rows="6"
                                        required placeholder="Write your message..."></textarea>
                                    <i class="las la-sms"></i>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn-one">Get An Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->

@endsection
@push('after-script')
<script>
    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
@endpush
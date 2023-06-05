@extends('front.blubuild.layouts.app')
@section('content')
<section>
    <div class="w-100 position-relative">
        <div class="feat-wrap position-relative w-100">
            <div class="feat-caro">
                @foreach(App\Models\News::where('highlight', '1')->orderBy('date',
                'DESC')->take(3)->get() as $hl)

                <div class="feat-item">
                    @if($hl->gambarmuka)
                    <div class="feat-img position-absolute"
                        style="background-image: url('storage/{{ $hl->gambarmuka->path }}');">
                        @else
                        <div class="feat-img position-absolute" style="background-image: url('img/soulofjava.jpg');">
                            @endif
                        </div>
                        <div class="container">
                            <div class="feat-cap">
                                <a href="{{ url('/news-detail', $hl->slug) }}">
                                    <h2 class="mb-0" style="color: white;">{{ $hl->title }}</h2>
                                </a>
                                <div class="feat-cap-innr">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
</section>

@if($gallery->count() != 0)
<section>
    <div class="w-100 pb-100 position-relative">
        <div class="container">
            <div class="sec-title w-100">
                <div class="sec-title-inner d-inline-block">
                    <span class="d-block thm-clr">OUR PHOTOS</span>
                    <h3 class="mb-0">Our Latest Photo</h3>
                </div>
            </div>
            <div class="proj-wrap w-100">
                <div class="row justify-content-center">
                    @foreach($gallery as $g)
                    <div class="col-md-4 col-sm-6 col-lg-3" style="display: flex">
                        <div class="proj-box position-relative w-100">
                            <div class="proj-thumb overflow-hidden w-100">
                                @foreach($g->gambar as $pic)
                                @if($loop->iteration == 1)
                                <a data-fancybox="gallery-group-{{ $pic->id_news }}"
                                    href="{{ asset('storage/') }}/{{ $pic->path }}"
                                    data-caption="{{ $g->description }}">
                                    <img src="{{ asset('storage/') }}/{{ $pic->path }}" class="img-fluid"
                                        style="height: 250px;">
                                </a>
                                @else
                                <div style="display:none;">
                                    <a data-fancybox="gallery-group-{{ $pic->id_news }}"
                                        href="{{ asset('storage/') }}/{{ $pic->path }}"
                                        data-caption="{{ $g->description }}">
                                        <img src="{{ asset('storage/') }}/{{ $pic->path }}" class="img-fluid">
                                    </a>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            <div class="proj-info position-absolute">
                                <!-- <i class="flaticon-helmet"></i> -->
                                <h3 class="mb-0"><a href="#">{{ $g->description }}</a></h3>
                            </div>
                        </div>
                    </div>
                    @if($loop->iteration == 8)
                    @break
                    @endif
                    @endforeach
                </div>
            </div>
            <!-- Projects Wrap -->
            <div class="view-all mt-20 w-100 text-center">
                <a class="thm-btn thm-bg" href="{{ url('photos') }}" title="">View All Photo<i
                        class="flaticon-arrow-pointing-to-right"></i></a>
            </div>
            <!-- View All -->
        </div>
    </div>
</section>
@endif

@if($news->count() != 0)
<section>
    <div class="w-100 pt-100 pb-100 position-relative">
        <div class="container">
            <div class="sec-title w-100">
                <div class="sec-title-inner d-inline-block">
                    <span class="d-block thm-clr">OUR BLOG</span>
                    <h3 class="mb-0">Our Latest News</h3>
                </div>
            </div>
            <div class="row mb-3 text-center">
                <x-head-category_news btn='thm-btn thm-bg' />
            </div>
            <div class="blog-wrap w-100">
                <div class="row post-caro">
                    @foreach($news as $n)
                    <div class="col-md-6 col-sm-6 col-lg-4" style="display: flex;">
                        <div class="post-box w-100 text-center">
                            <div class="post-img overflow-hidden w-100">
                                <a href="{{ url('/news-detail', $n->slug) }}">
                                    @forelse($n->gambar as $gambar)
                                    @if($loop->iteration == 1)
                                    <img src="{{ asset('storage/') }}/{{  $gambar->path }}" class="img-fluid"
                                        alt="{{ $gambar->file_name }}" width="100%">
                                    @endif
                                    @empty
                                    <img src="{{ asset('img/soulofjava.jpg') }}" class="img-fluid" alt="soul of java">
                                    @endforelse
                                </a>
                            </div>
                            <div class="post-info w-100">
                                <h3 class="mb-0"><a href="{{ url('/news-detail', $n->slug) }}">{{
                                        \Illuminate\Support\Str::limit($n->title,
                                        50, $end='...') }}</a></h3>
                                <!-- <p class="mb-0">
                                </p> -->
                                <div class="post-info-bottom d-flex flex-wrap w-100">
                                    <span class="d-inline-block"><i class="far fa-user"></i><a
                                            href="javascript:void(0);">{{ $n->upload_by }}</a></span>
                                    <ul class="post-meta mb-0 list-unstyled d-inline-flex">
                                        <li><i class="far fa-calendar-alt"></i>{{
                                            \Carbon\Carbon::parse($n->date)->format('l') }}, {{
                                            \Carbon\Carbon::parse( $n->date
                                            )->toFormattedDateString() }}</li>
                                        <!-- <li><i class="fas fa-comment-dots"></i>02</li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($loop->iteration == 3)
                    @break
                    @endif
                    @endforeach
                </div>
            </div>
            <!-- Blog Wrap -->
        </div>
    </div>
</section>
@endif

<section>
    <div class="w-100 pt-100 pb-100 position-relative">
        <div class="container">
            <x-seputar-wonosobo :message='$berita' />
        </div>
    </div>
</section>

<!-- start map -->
<section>
    <div class="container">
        <div class="map">
            <iframe src="https://maps.google.com/maps?q={{ $data_website->latitude }},{{
                $data_website->longitude }}&z=14&output=embed" frameborder="0" allowfullscreen width="100%"
                height="300px"></iframe>
        </div>
    </div>
</section>
<!-- end map -->

<section>
    <div class="w-100 pt-100 pb-100 position-relative">
        <div class="container">
            <div class="sec-title v2 text-center w-100">
                <div class="sec-title-inner d-inline-block">
                    <span class="thm-clr d-block">Contact Us</span>
                    <!-- <h2 class="mb-0">Al is no longer a futuristic notion, it's here right now</h2> -->
                    <!-- <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
                </div>
            </div>
            {{Form::open(['url' => 'kotakmasuk','method' => 'post', 'files' => 'true', '', 'class' =>
            'contact-form text-center w-100'])}}
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="form-group w-100">
                        <div class="response w-100"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    {{Form::text('name', null,['class' => 'form-control', 'placeholder' => 'Your Name',
                    'required'])}}
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    {{Form::email('email', null,['class' => 'form-control', 'placeholder' => 'Email',
                    'required'])}}
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    {{Form::number('phone', null,['class' => 'form-control',
                    'placeholder' => 'Phone Number',
                    'required'])}}
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <div class="form-group captcha text-center" style="margin-bottom: 30px; padding: 10px 40px;">
                        <span>{!! captcha_img() !!}</span>
                        <button type="button" class="btn btn-danger" class="reload" id="reload">
                            &#x21bb;
                        </button>
                    </div>
                    <div class="form-group">
                        {{Form::number('captcha', null,['class' => 'form-control',
                        'placeholder' => 'Enter Captcha Result',
                        'required'])}}
                        <i class="las la-calculator"></i>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-12">
                    {{Form::textarea('message', null,['class' => 'form-control', 'placeholder' =>
                    'Message',
                    'required'])}}
                    <button class="thm-btn thm-bg" type="submit">Send Message Now<i
                            class="flaticon-arrow-pointing-to-right"></i></button>
                </div>
            </div>
            {{Form::close()}}
            <!-- Contact Form -->
        </div>
    </div>
</section>

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
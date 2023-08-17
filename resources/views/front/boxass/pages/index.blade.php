@extends('front.boxass.layouts.app')
@section('content')
<!-- Start Banner
    ============================================= -->
<div class="banner-area content-double box-nav background-move bg-gray"
    style="background-image: url(assets/front/boxass/assets/img/bg-2.png);">
    <div class="container">
        <div class="row">
            <div class="double-items">
                <div class="col-md-6 left-info simple-video">
                    <div class="content" data-animation="animated fadeInUpBig">
                        <h1>
                            Selamat datang di website kami
                        </h1>
                        <p>
                            {{ $data_website->web_description }}
                        </p>
                        <!-- <a class="btn btn-theme border btn-md" href="#">Get Started</a> -->
                        <!-- <a class="btn-animation popup-youtube" href="https://www.youtube.com/watch?v=owhuBrGIOsE">
                            <i class="fa fa-play"></i> Watch Video
                        </a> -->
                    </div>
                </div>
                <div class="col-md-6 right-info">
                    <div class="thumb animated">
                        @if($data_website->image_hero)
                        <img src="{{ asset('storage') }}/{{ $data_website->image_hero }}" class="img-fluid"
                            alt="{{ $data_website->image_hero_name }}">
                        @else
                        <img src="{{ asset('assets/front/boxass/assets/img/illustrations/1.png') }}" alt="Thumb">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->

<!-- Start Blog Area
    ============================================= -->
<div id="blog" class="blog-area default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Recent News</h2>
                    <p>
                        Learning day desirous informed expenses material returned six the. She enabled invited
                        exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age
                        out full gate bed day lose.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog-items">
                <!-- Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item">
                        <div class="thumb">
                            <a href="#"><img src="{{ asset('assets/front/boxass/assets/img/800x600.png') }}"
                                    alt="Thumb"></a>
                        </div>
                        <div class="info">
                            <div class="content">
                                <div class="date">
                                    15 Aug, 2019
                                </div>
                                <h4>
                                    <a href="#">Direct wicket little of talked lasted formed</a>
                                </h4>
                                <p>
                                    Pronounce we attention admitting on assurance of suspicion conveying. That his
                                    west quit had met till.
                                </p>
                                <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('assets/front/boxass/assets/img/100x100.png') }}"
                                                alt="Author">
                                            <span>Author</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-comments"></i>
                                            <span>05</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-share-alt"></i>
                                            <span>37</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item">
                        <div class="thumb">
                            <a href="#"><img src="{{ asset('assets/front/boxass/assets/img/800x600.png') }}"
                                    alt="Thumb"></a>
                        </div>
                        <div class="info">
                            <div class="content">
                                <div class="date">
                                    27 Nov, 2019
                                </div>
                                <h4>
                                    <a href="#">Supported neglected met therefore unwilling</a>
                                </h4>
                                <p>
                                    Pronounce we attention admitting on assurance of suspicion conveying. That his
                                    west quit had met till.
                                </p>
                                <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('assets/front/boxass/assets/img/100x100.png') }}"
                                                alt="Author">
                                            <span>Author</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-comments"></i>
                                            <span>17</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-share-alt"></i>
                                            <span>22</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 single-item">
                    <div class="item">
                        <div class="thumb">
                            <a href="#"><img src="{{ asset('assets/front/boxass/assets/img/800x600.png') }}"
                                    alt="Thumb"></a>
                        </div>
                        <div class="info">
                            <div class="content">
                                <div class="date">
                                    18 Sep, 2019
                                </div>
                                <h4>
                                    <a href="#">Concerns greatest margaret absolute entrance</a>
                                </h4>
                                <p>
                                    Pronounce we attention admitting on assurance of suspicion conveying. That his
                                    west quit had met till.
                                </p>
                                <a href="#">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('assets/front/boxass/assets/img/100x100.png') }}"
                                                alt="Author">
                                            <span>Author</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-comments"></i>
                                            <span>25</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-share-alt"></i>
                                            <span>50</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Blog Area -->

<!-- Start Contact
    ============================================= -->
<div id="contact" class="contact-area bg-gray default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Contact Us</h2>
                    <p>
                        Learning day desirous informed expenses material returned six the. She enabled invited
                        exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age
                        out full gate bed day lose.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="contact-items">

                <!-- End Thumb -->
                <div class="col-md-4 thumb">
                    <img src="{{ asset('assets/front/boxass/assets/img/illustrations/5.png') }}" alt="Thumb">
                </div>
                <!-- End Thumb -->

                <!-- Contact Form -->
                <div class="col-md-7 col-md-offset-1 contact-form">
                    <form action="assets/mail/contact.php" method="POST" class="contact-form">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*"
                                        type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments"
                                        placeholder="Tell Us About Project *"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <button type="submit" name="submit" id="submit">
                                    Send Message <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                    <!-- <h3>For any question contact our 24/7 <br>call center <span>+123 456 7890</span></h3> -->
                </div>
                <!-- End Contact Form -->
            </div>

        </div>
    </div>
</div>
<!-- End Contact -->

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
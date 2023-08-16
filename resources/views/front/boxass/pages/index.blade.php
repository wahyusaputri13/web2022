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
                            We're building <span>software</span> to help
                        </h1>
                        <p>
                            Celebrated delightful an especially increasing instrument am. Indulgence contrasted
                            sufficient to unpleasant in in insensible favourable.
                        </p>
                        <a class="btn btn-theme border btn-md" href="#">Get Started</a>
                        <a class="btn-animation popup-youtube" href="https://www.youtube.com/watch?v=owhuBrGIOsE">
                            <i class="fa fa-play"></i> Watch Video
                        </a>
                    </div>
                </div>
                <div class="col-md-6 right-info">
                    <div class="thumb animated">
                        <img src="{{ asset('assets/front/boxass/assets/img/illustrations/1.png') }}" alt="Thumb">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->

<!-- Start About
    ============================================= -->
<div id="about" class="about-area border-top default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 info">
                <h2>We're Building Modern <br> And High Software</h2>
                <p>
                    Both rest of know draw fond post as. It agreement defective to excellent. Feebly do engage of
                    narrow. Extensive repulsive belonging depending if promotion be zealously as. Preference
                    inquietude ask now are dispatched led appearance. Small meant in so doubt hopes.
                </p>
                <ul>
                    <li>Chapter too parties its letters</li>
                    <li>Answered one fat indulged margaret sir shutters together</li>
                    <li>Conveying or northward offending admitting</li>
                </ul>
                <div class="fun-facts">
                    <h3>Outstanding annual results from our awesome Team</h3>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 item">
                            <div class="fun-fact">
                                <div class="timer" data-to="75" data-speed="5000">75</div>
                                <span class="medium">Higher Profits</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 item">
                            <div class="fun-fact">
                                <div class="timer" data-to="100" data-speed="5000">100</div>
                                <span class="medium">Satisfied</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 item">
                            <div class="fun-fact">
                                <div class="timer" data-to="98" data-speed="5000">98</div>
                                <span class="medium">Success Rate</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 features">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 equal-height">
                        <div class="item">
                            <i class="flaticon-ticket"></i>
                            <h4>Ticket manage</h4>
                            <p>
                                Downs those still witty an balls so chief so. Moment an little remain no lively
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 equal-height">
                        <div class="item">
                            <i class="flaticon-speech-bubble"></i>
                            <h4>Live messaging</h4>
                            <p>
                                Downs those still witty an balls so chief so. Moment an little remain no lively
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 equal-height">
                        <div class="item">
                            <i class="flaticon-email"></i>
                            <h4>Email workflow</h4>
                            <p>
                                Downs those still witty an balls so chief so. Moment an little remain no lively
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 equal-height">
                        <div class="item">
                            <i class="flaticon-file"></i>
                            <h4>File upload</h4>
                            <p>
                                Downs those still witty an balls so chief so. Moment an little remain no lively
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About -->

<!-- Start Features Area
    ============================================= -->
<div id="features" class="features-area carousel-shadow default-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Our Features</h2>
                    <p>
                        Learning day desirous informed expenses material returned six the. She enabled invited
                        exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age
                        out full gate bed day lose.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="features-items features-carousel owl-carousel owl-theme">
                    <!-- Single Item -->
                    <div class="item">
                        <div class="icon">
                            <span>01</span>
                            <i class="flaticon-drag-2"></i>
                        </div>
                        <div class="info">
                            <h4>Drag And Drop</h4>
                            <p>
                                Situation perpetual allowance offending as principle.
                            </p>
                            <div class="bottom">
                                <a href="#">View Details <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="icon">
                            <span>02</span>
                            <i class="flaticon-software"></i>
                        </div>
                        <div class="info">
                            <h4>App Integration</h4>
                            <p>
                                Situation perpetual allowance offending as principle.
                            </p>
                            <div class="bottom">
                                <a href="#">View Details <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="icon">
                            <span>03</span>
                            <i class="flaticon-rgb"></i>
                        </div>
                        <div class="info">
                            <h4>Color Schemes</h4>
                            <p>
                                Situation perpetual allowance offending as principle.
                            </p>
                            <div class="bottom">
                                <a href="#">View Details <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="icon">
                            <span>04</span>
                            <i class="flaticon-video"></i>
                        </div>
                        <div class="info">
                            <h4>High Resolution</h4>
                            <p>
                                Situation perpetual allowance offending as principle.
                            </p>
                            <div class="bottom">
                                <a href="#">View Details <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Features Area -->

<!-- Start Work Process Area
    ============================================= -->
<div id="process" class="work-process-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Work Process</h2>
                    <p>
                        Learning day desirous informed expenses material returned six the. She enabled invited
                        exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age
                        out full gate bed day lose.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="process-items">
                <div class="col-md-6 thumb">
                    <img src="{{ asset('assets/front/boxass/assets/img/illustrations/4.svg') }}" alt="Thumb">
                </div>
                <div class="col-md-6 info">
                    <ul>
                        <li>
                            <div class="list">
                                <h3><i class="fas fa-chart-line"></i></h3>
                            </div>
                            <div class="content">
                                <h4>Research Projec</h4>
                                <p>
                                    Listening newspaper in advantage frankness to concluded unwilling. projection
                                    particular companions
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="list">
                                <h3><i class="fas fa-crosshairs"></i></h3>
                            </div>
                            <div class="content">
                                <h4>Targeting</h4>
                                <p>
                                    Sentiments projection particular companions interested do at my delightful
                                    listening newspaper
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="list">
                                <h3><i class="fas fa-check"></i></h3>
                            </div>
                            <div class="content">
                                <h4>Result</h4>
                                <p>
                                    Talking chamber as shewing projection particular companions interested do at my
                                    delightful. Particular companions
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Work Process Area -->

<!-- Start Pricing Area
    ============================================= -->
<div id="pricing" class="pricing-area default-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Our Packages</h2>
                    <p>
                        Learning day desirous informed expenses material returned six the. She enabled invited
                        exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age
                        out full gate bed day lose.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="pricing-navs col-md-12">
                <!-- Tab Nav -->
                <ul class="nav nav-pills">
                    <li class="active">
                        <a data-toggle="tab" href="#monthly" aria-expanded="true">
                            Monthly
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#annual" aria-expanded="false">
                            Annual
                        </a>
                    </li>
                </ul>
                <!-- End Tab Nav -->
            </div>

            <div class="pricing-content col-md-12">
                <div class="row">
                    <!-- Start Tab Content -->
                    <div class="tab-content">
                        <!-- Tab Single Item -->
                        <div id="monthly" class="tab-pane fade active in">
                            <div class="col-md-12">
                                <div class="pricing-items">
                                    <div class="col-lg-4 col-md-4 single-item">
                                        <div class="pricing-item">
                                            <ul>
                                                <li class="pricing-header">
                                                    <h4>Free</h4>
                                                    <h2><sup>$</sup>0.00</h2>
                                                    <span>1 user</span>
                                                </li>
                                                <li><i class="fas fa-times"></i> Update</li>
                                                <li><i class="fas fa-check"></i> Personal use</li>
                                                <li><i class="fas fa-times"></i> Support</li>
                                                <li><i class="fas fa-times"></i> 2 database</li>
                                                <li><i class="fas fa-check"></i> Documetation</li>
                                                <li class="footer">
                                                    <a class="btn circle btn-theme border btn-sm" href="#">Buy This
                                                        Plan</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 single-item">
                                        <div class="pricing-item active">
                                            <ul>
                                                <li class="pricing-header">
                                                    <h4>Regular</h4>
                                                    <h2><sup>$</sup>15.23</h2>
                                                    <span>5 user</span>
                                                </li>
                                                <li><i class="fas fa-check"></i> Update</li>
                                                <li><i class="fas fa-check"></i> Official use</li>
                                                <li><i class="fas fa-check"></i> Support</li>
                                                <li><i class="fas fa-times"></i> 5 database</li>
                                                <li><i class="fas fa-check"></i> Documetation</li>
                                                <li class="footer">
                                                    <a class="btn circle btn-theme effect btn-sm" href="#">Buy This
                                                        Plan</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 single-item">
                                        <div class="pricing-item">
                                            <ul>
                                                <li class="pricing-header">
                                                    <h4>Extended</h4>
                                                    <h2><sup>$</sup>29.12</h2>
                                                    <span>Unlimited user</span>
                                                </li>
                                                <li><i class="fas fa-times"></i> File compressed</li>
                                                <li><i class="fas fa-check"></i> Commercial use</li>
                                                <li><i class="fas fa-check"></i> Support</li>
                                                <li><i class="fas fa-check"></i> 8 database</li>
                                                <li><i class="fas fa-check"></i> Documetation</li>
                                                <li class="footer">
                                                    <a class="btn circle btn-theme border btn-sm" href="#">Buy This
                                                        Plan</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Tab Single Item -->

                        <!-- Tab Single Item -->
                        <div id="annual" class="tab-pane fade">
                            <div class="col-md-12">
                                <div class="pricing-items">
                                    <div class="col-lg-4 col-md-4 single-item">
                                        <div class="pricing-item">
                                            <ul>
                                                <li class="pricing-header">
                                                    <h4>Free</h4>
                                                    <h2><sup>$</sup>0.00</h2>
                                                    <span>1 user</span>
                                                </li>
                                                <li><i class="fas fa-times"></i> Update</li>
                                                <li><i class="fas fa-check"></i> Personal use</li>
                                                <li><i class="fas fa-times"></i> Support</li>
                                                <li><i class="fas fa-times"></i> 2 database</li>
                                                <li><i class="fas fa-check"></i> Documetation</li>
                                                <li class="footer">
                                                    <a class="btn circle btn-theme border btn-sm" href="#">Buy This
                                                        Plan</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 single-item">
                                        <div class="pricing-item active">
                                            <ul>
                                                <li class="pricing-header">
                                                    <h4>Regular</h4>
                                                    <h2><sup>$</sup>38.12</h2>
                                                    <span>5 user</span>
                                                </li>
                                                <li><i class="fas fa-check"></i> Update</li>
                                                <li><i class="fas fa-check"></i> Official use</li>
                                                <li><i class="fas fa-check"></i> Support</li>
                                                <li><i class="fas fa-times"></i> 5 database</li>
                                                <li><i class="fas fa-check"></i> Documetation</li>
                                                <li class="footer">
                                                    <a class="btn circle btn-theme effect btn-sm" href="#">Buy This
                                                        Plan</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 single-item">
                                        <div class="pricing-item">
                                            <ul>
                                                <li class="pricing-header">
                                                    <h4>Extended</h4>
                                                    <h2><sup>$</sup>69.18</h2>
                                                    <span>Unlimited user</span>
                                                </li>
                                                <li><i class="fas fa-times"></i> File compressed</li>
                                                <li><i class="fas fa-check"></i> Commercial use</li>
                                                <li><i class="fas fa-check"></i> Support</li>
                                                <li><i class="fas fa-check"></i> 8 database</li>
                                                <li><i class="fas fa-check"></i> Documetation</li>
                                                <li class="footer">
                                                    <a class="btn circle btn-theme border btn-sm" href="#">Buy This
                                                        Plan</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Tab Single Item -->

                    </div>
                    <!-- End Tab Content -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Pricing Area -->

<!-- Start Team Area
    ============================================= -->
<div id="team" class="team-area default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Innovative Team</h2>
                    <p>
                        Learning day desirous informed expenses material returned six the. She enabled invited
                        exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age
                        out full gate bed day lose.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="team-items text-center">
                <!-- Single Item -->
                <div class="col-md-4 equal-height single-item">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/front/boxass/assets/img/800x800.png') }}" alt="Thumb">
                            <ul>
                                <li class="facebook">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="twitter">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="instagram">
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li class="linkedin">
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="info">
                            <h4>Ahmed Kamal</h4>
                            <span>Co-Founder</span>
                            <h5><i class="fas fa-envelope"></i> kamal@admin.com</h5>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 equal-height single-item">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/front/boxass/assets/img/800x800.png') }}" alt="Thumb">
                            <ul>
                                <li class="facebook">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="twitter">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="instagram">
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li class="linkedin">
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="info">
                            <h4>Munia Ankor</h4>
                            <span>Project Manager</span>
                            <h5><i class="fas fa-envelope"></i> munia@admin.com</h5>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 equal-height single-item">
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/front/boxass/assets/img/800x800.png') }}" alt="Thumb">
                            <ul>
                                <li class="facebook">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="twitter">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="instagram">
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li class="linkedin">
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="info">
                            <h4>Ahel Natasha</h4>
                            <span>Developer</span>
                            <h5><i class="fas fa-envelope"></i> natasha@admin.com</h5>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Team Area -->

<!-- Start Testimonials Area
    ============================================= -->
<div class="testimonials-area bg-gray default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Customer Review</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="testimonial-items testimonial-carousel owl-carousel owl-theme">
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/front/boxass/assets/img/800x800.png') }}" alt="Thumb">
                        </div>
                        <div class="info">
                            <p>
                                Comparison dissimilar unpleasant six compliment two unpleasing any add. Ashamed my
                                company thought wishing colonel it prevent he in. Pretended residence are something
                                far engrossed old off.
                            </p>
                            <h4>Junl Sarukh</h4>
                            <span>Designer of Boxass</span>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/front/boxass/assets/img/800x800.png') }}" alt="Thumb">
                        </div>
                        <div class="info">
                            <p>
                                Comparison dissimilar unpleasant six compliment two unpleasing any add. Ashamed my
                                company thought wishing colonel it prevent he in. Pretended residence are something
                                far engrossed old off.
                            </p>
                            <h4>Junl Sarukh</h4>
                            <span>Designer of Boxass</span>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="thumb">
                            <img src="{{ asset('assets/front/boxass/assets/img/800x800.png') }}" alt="Thumb">
                        </div>
                        <div class="info">
                            <p>
                                Comparison dissimilar unpleasant six compliment two unpleasing any add. Ashamed my
                                company thought wishing colonel it prevent he in. Pretended residence are something
                                far engrossed old off.
                            </p>
                            <h4>Junl Sarukh</h4>
                            <span>Designer of Boxass</span>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonials Area -->

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
                    <h3>For any question contact our 24/7 <br>call center <span>+123 456 7890</span></h3>
                </div>
                <!-- End Contact Form -->
            </div>

            <!-- Address List -->
            <div class="address-list text-center col-md-12">
                <div class="item-box">
                    <!-- Single Item -->
                    <div class="col-md-4 equal-height single-item">
                        <div class="item">
                            <i class="fas fa-map-marked-alt"></i>
                            <h4>Location</h4>
                            <p>
                                22 Baker Street,London, United Kingdom, W1U 3BW
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 equal-height single-item">
                        <div class="item">
                            <i class="fas fa-phone"></i>
                            <h4>Emergency Case</h4>
                            <h2>+123 456 7890</h2>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 equal-height single-item">
                        <div class="item">
                            <i class="fas fa-envelope-open"></i>
                            <h4>Email</h4>
                            <p>
                                info@yourdomain.com<br>admin@yourdomain.com
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
            <!-- End Address List -->

        </div>
    </div>
</div>
<!-- End Contact -->



<!-- jQuery Frameworks
    ============================================= -->


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

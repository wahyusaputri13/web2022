@extends('front.asting.layouts.app')
@section('content')


    <!-- Main Slider Start -->
    <section class="main-slider">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
    "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
      },
    "navigation": {
        "nextEl": ".main-slider-button-next",
        "prevEl": ".main-slider-button-prev",
        "clickable": true
    },
    "autoplay": {
        "delay": 5000
    }}'>

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url('assets/front/asting/assets/images/main-slider/slider-1-1.jpg');">
                    </div>
                    <div class="container">
                        <div class="swiper-slide__inner">
                            <div class="row">
                                <div class="col-xl-12">
                                    <p>Helping Them Today</p>
                                    <h2>Help the Poor <br> in Need</h2>
                                    <a href="about.html" class="thm-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url('assets/front/asting/assets/images/main-slider/slider-1-2.jpg');">
                    </div>
                    <div class="container">
                        <div class="swiper-slide__inner">
                            <div class="row">
                                <div class="col-xl-12">
                                    <p>Helping Them Today</p>
                                    <h2>Help the Poor <br> in Need</h2>
                                    <a href="about.html" class="thm-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url('assets/front/asting/assets/images/main-slider/slider-1-3.jpg');">
                    </div>
                    <div class="container">
                        <div class="swiper-slide__inner">
                            <div class="row">
                                <div class="col-xl-12">
                                    <p>Helping Them Today</p>
                                    <h2>Help the Poor <br> in Need</h2>
                                    <a href="about.html" class="thm-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination" id="main-slider-pagination"></div>
            <div class="main-slider-nav">
                <div class="main-slider-button-prev"><span class="icon-right-arrow"></span></div>
                <div class="main-slider-button-next"><span class="icon-right-arrow"></span> </div>
            </div>
        </div>
    </section>
    <!-- Main Slider End -->

    <!--Three Icon Start-->
    <section class="feature-one">
        <div class="container">
            <div class="feature-one__inner">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <!--Three Icon Single-->
                        <div class="feature-one__single feature-one__single-first-item">
                            <div class="feature-one__icon-wrap">
                                <div class="feature-one__icon-box">
                                    <span class="icon-heart"></span>
                                    <div class="feature-one__icon-box-img">
                                        <img src="{{ asset('assets/front/asting/assets/images/resources/three_iocn_box_bg.png') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class=" feature-one__icon-text-box">
                                    <h4>Become <br> Volunteer</h4>
                                </div>
                            </div>
                            <p class="feature-one__icons-single-text">There are many of lorem Ipsum, but the
                                majori
                                have suffered alteration in some form.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Three Icon Single-->
                        <div class="feature-one__single feature-one__single-second-item">
                            <div class="feature-one__icon-wrap">
                                <div class="feature-one__icon-box feature-one__icon-box-two">
                                    <span class="icon-wallet-filled-money-tool"></span>
                                    <div class="feature-one__icon-box-img">
                                        <img src="{{ asset('assets/front/asting/assets/images/resources/three_iocn_box_bg-2.png') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="feature-one__icon-text-box">
                                    <h4>Quick <br> Fundraise</h4>
                                </div>
                            </div>
                            <p class="feature-one__icons-single-text">There are many of lorem Ipsum, but the
                                majori
                                have suffered alteration in some form.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Three Icon Single-->
                        <div class="feature-one__single feature-one__single-third-item">
                            <div class="feature-one__icon-wrap">
                                <div class="feature-one__icon-box feature-one__icon-box-three">
                                    <span class="icon-charity"></span>
                                    <div class="feature-one__icon-box-img">
                                        <img src="{{ asset('assets/front/asting/assets/images/resources/three_iocn_box_bg-3.png') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="feature-one__icon-text-box">
                                    <h4>Start <br> Donating</h4>
                                </div>
                            </div>
                            <p class="feature-one__icons-single-text">There are many of lorem Ipsum, but the
                                majori
                                have suffered alteration in some form.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Three Icon End-->

    <!--Welcome One Start-->
    <section class="welcome-one"
        style="background-image:url('assets/front/asting/assets/images/backgrounds/welcome_one_bg.jpg')">
        <div class="welcome-one-hands"
            style="background-image:url('assets/front/asting/assets/images/backgrounds/welcome_one_hands.png')">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome-one__left">
                        <div class="welcome-one__img wow slideInLeft" data-wow-delay="100ms">
                            <img src="{{ asset('assets/front/asting/assets/images/resources/welcome_one_img_1.jpg') }}"
                                alt="">
                            <div class="welcome-one__badge">
                                <img src="{{ asset('assets/front/asting/assets/images/resources/welcome_one_badge.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome-one__right">
                        <div class="block-title text-left">
                            <h4>Helping Today</h4>
                            <h2>Our Goal is to Help Poor People</h2>
                        </div>
                        <p class="welcome-one__text">Lorem ipsum dolor sit amet, consectetur notted adipisicing elit
                            sed do eiusmod tempor incididunt ut labore et simply free text dolore magna aliqua lonm
                            andhn.</p>
                        <ul class="welcome-one__list list-unstyled">
                            <li><span class="icon-confirmation"></span>Nsectetur cing do not elit.</li>
                            <li><span class="icon-confirmation"></span>Suspe ndisse suscipit sagittis in leo.</li>
                            <li><span class="icon-confirmation"></span>Entum estibulum dignissim lipsm posuere.</li>
                        </ul>
                        <div class="welcome-one__campaigns">
                            <div class="iocn">
                                <span class="icon-donation"></span>
                            </div>
                            <div class="text">
                                <h2 class="counter">86,700</h2>
                                <p>Successfull Campaigns</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Welcome One End-->

    <!--Popular Causes Start-->
    <section class="popular-causes">
        <div class="container">
            <div class="block-title text-left">
                <h4>Help the People</h4>
                <h2>Our Popular Causes</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="popular-causes__carousel owl-theme owl-carousel">
                        <!--Popular Causes Single-->
                        <div class="popular-causes__sinlge">
                            <div class="popular-causes__img">
                                <img src="{{ asset('assets/front/asting/assets/images/resources/popular-causes-img-1.jpg') }}"
                                    alt="">
                                <div class="popular-causes__category">
                                    <p>Food</p>
                                </div>
                            </div>
                            <div class="popular-causes__content">
                                <div class="popular-causes__title">
                                    <h3><a href="campaign-details.html">Raise Fund for Clean & Healthy Water</a>
                                    </h3>
                                    <p>Aliq is notm hendr erit a augue insu image pellen tes.</p>
                                </div>
                                <div class="popular-causes__progress">
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="36%">
                                            <div class="count-text">36%</div>
                                        </div>
                                    </div>
                                    <div class="popular-causes__goals">
                                        <p><span>$25,270</span> Raised</p>
                                        <p><span>$30,000</span> Goal</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Popular Causes Single-->
                        <div class="popular-causes__sinlge">
                            <div class="popular-causes__img">
                                <img src="{{ asset('assets/front/asting/assets/images/resources/popular-causes-img-2.jpg') }}"
                                    alt="">
                                <div class="popular-causes__category">
                                    <p>Education</p>
                                </div>
                            </div>
                            <div class="popular-causes__content">
                                <div class="popular-causes__title">
                                    <h3><a href="campaign-details.html">Education for Poor Children</a>
                                    </h3>
                                    <p>Aliq is notm hendr erit a augue insu image pellen tes.</p>
                                </div>
                                <div class="popular-causes__progress">
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="36%">
                                            <div class="count-text">36%</div>
                                        </div>
                                    </div>
                                    <div class="popular-causes__goals">
                                        <p><span>$25,270</span> Raised</p>
                                        <p><span>$30,000</span> Goal</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Popular Causes Single-->
                        <div class="popular-causes__sinlge">
                            <div class="popular-causes__img">
                                <img src="{{ asset('assets/front/asting/assets/images/resources/popular-causes-img-3.jpg') }}"
                                    alt="">
                                <div class="popular-causes__category">
                                    <p>Food</p>
                                </div>
                            </div>
                            <div class="popular-causes__content">
                                <div class="popular-causes__title">
                                    <h3><a href="campaign-details.html">Promoting The Rights of Children</a>
                                    </h3>
                                    <p>Aliq is notm hendr erit a augue insu image pellen tes.</p>
                                </div>
                                <div class="popular-causes__progress">
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="36%">
                                            <div class="count-text">36%</div>
                                        </div>
                                    </div>
                                    <div class="popular-causes__goals">
                                        <p><span>$25,270</span> Raised</p>
                                        <p><span>$30,000</span> Goal</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Popular Causes Single-->
                        <div class="popular-causes__sinlge">
                            <div class="popular-causes__img">
                                <img src="{{ asset('assets/front/asting/assets/images/resources/popular-causes-img-4.jpg') }}"
                                    alt="">
                                <div class="popular-causes__category">
                                    <p>Education</p>
                                </div>
                            </div>
                            <div class="popular-causes__content">
                                <div class="popular-causes__title">
                                    <h3><a href="campaign-details.html">School Counseling for Children</a>
                                    </h3>
                                    <p>Aliq is notm hendr erit a augue insu image pellen tes.</p>
                                </div>
                                <div class="popular-causes__progress">
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="36%">
                                            <div class="count-text">36%</div>
                                        </div>
                                    </div>
                                    <div class="popular-causes__goals">
                                        <p><span>$25,270</span> Raised</p>
                                        <p><span>$30,000</span> Goal</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Popular Causes One End-->

    <!--We Are Helping Start-->
    <section class="we-are-helping jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
        style="background-image: url('assets/front/asting/assets/images/backgrounds/we_are_helping_bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="we-are-helping__left">
                        <div class="block-title text-left">
                            <h4>Helping Today</h4>
                            <h2>We’re Helping People in Need Around the World</h2>
                        </div>
                        <div class="we-are-helping__video">
                            <a href="https://www.youtube.com/watch?v=i9E_Blai8vk"
                                class="we-are-helping__video-btn video-popup"><i class="fa fa-play"></i></a>
                        </div>
                        <div class="we-are-helping__arrow">
                            <img src="{{ asset('assets/front/asting/assets/images/shapes/we_are_helping_arrow.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="we-are-helping__points">
                        <ul class="list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-salad"></span>
                                </div>
                                <div class="text">
                                    <h4>Healthy Food</h4>
                                    <p>There are many variations of but the majority have simply free text suffered.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-water"></span>
                                </div>
                                <div class="text">
                                    <h4>Clean Water</h4>
                                    <p>There are many variations of but the majority have simply free text suffered.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--We Are Helping End-->

    <!--We Need Help Start-->
    <section class="we-need-help">
        <div class="we-nned-help-bg">
            <img src="{{ asset('assets/front/asting/assets/images/resources/we_need_help_bg.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="we-need-help__left">
                        <div class="block-title text-left">
                            <h4>Asked Quesitons</h4>
                            <h2>We Need Your Help</h2>
                        </div>
                        <div class="we-need-help__faqs">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>How to process the charity functions?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>There are many variations of passages of available but the majority
                                                have suffered alteration in that some form by words which don’t look
                                                even as slightly believable now.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h4>How to process the charity functions?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>There are many variations of passages of available but the majority
                                                have suffered alteration in that some form by words which don’t look
                                                even as slightly believable now.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>How to process the charity functions?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>There are many variations of passages of available but the majority
                                                have suffered alteration in that some form by words which don’t look
                                                even as slightly believable now.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="we-need-help__right">
                        <div class="we-need-help__img">
                            <img src="{{ asset('assets/front/asting/assets/images/resources/we_need_help_img.jpg') }}"
                                alt="">
                            <div class="we-need-help__give">
                                <div class="icon">
                                    <span class="icon-charity-1"></span>
                                </div>
                                <div class="text">
                                    <h4>Let’s Give us your <br> Helping Hand</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--We Need Help End-->

    <!--Testimonials One Start-->
    <section class="testimonials-one">
        <div class="testimonials-one-bg"
            style="background-image: url('assets/front/asting/assets/images/backgrounds/testimonials_one_bg.jpg')">
        </div>
        <div class="testimonials-one__container-box">
            <div class="block-title text-center">
                <h4>Happy People</h4>
                <h2>What They Say</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 4, "autoplay": { "delay": 5000 }, "pagination": {
                "el": "#testimonials-one__pagination",
                "type": "bullets",
                "clickable": true
              },
              "navigation": {
                "nextEl": ".latest_properties_next",
                "prevEl": ".latest_properties_prev",
                "clickable": true
            },
            "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 1
                },
                "425": {
                    "spaceBetween": 30,
                    "slidesPerView": 1
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 1
                },
                "767": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "991": {
                    "spaceBetween": 20,
                    "slidesPerView": 3
                },
                "1289": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "1440": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                }
            }}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!--Testimonials One Single-->
                                <div class="testimonials-one__single">
                                    <div class="testimonials-one__quote">
                                        <img src="{{ asset('assets/front/asting/assets/images/testimonials/testimonials-one-icon-1.png') }}"
                                            alt="">
                                    </div>
                                    <div class="testimonials-one__text">
                                        <p>There are many variations of passages of lorem ipsum available but the
                                            majority have suffered alteration in some form.</p>
                                        <h3>- Kevin Martin</h3>
                                    </div>
                                    <div class="testimonials-one__author-img">
                                        <img src="{{ asset('assets/front/asting/assets/images/testimonials/testimonials_one_au_img_1.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!--Testimonials One Single-->
                                <div class="testimonials-one__single">
                                    <div class="testimonials-one__quote">
                                        <img src="{{ asset('assets/front/asting/assets/images/testimonials/testimonials-one-icon-1.png') }}"
                                            alt="">
                                    </div>
                                    <div class="testimonials-one__text">
                                        <p>There are many variations of passages of lorem ipsum available but the
                                            majority have suffered alteration in some form.</p>
                                        <h3>- Jessica Brown</h3>
                                    </div>
                                    <div class="testimonials-one__author-img">
                                        <img src="{{ asset('assets/front/asting/assets/images/testimonials/testimonials_one_au_img_2.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!--Testimonials One Single-->
                                <div class="testimonials-one__single">
                                    <div class="testimonials-one__quote">
                                        <img src="{{ asset('assets/front/asting/assets/images/testimonials/testimonials-one-icon-1.png') }}"
                                            alt="">
                                    </div>
                                    <div class="testimonials-one__text">
                                        <p>There are many variations of passages of lorem ipsum available but the
                                            majority have suffered alteration in some form.</p>
                                        <h3>- David Cooper</h3>
                                    </div>
                                    <div class="testimonials-one__author-img">
                                        <img src="{{ asset('assets/front/asting/assets/images/testimonials/testimonials_one_au_img_3.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!--Testimonials One Single-->
                                <div class="testimonials-one__single">
                                    <div class="testimonials-one__quote">
                                        <img src="{{ asset('assets/front/asting/assets/images/testimonials/testimonials-one-icon-1.png') }}"
                                            alt="">
                                    </div>
                                    <div class="testimonials-one__text">
                                        <p>There are many variations of passages of lorem ipsum available but the
                                            majority have suffered alteration in some form.</p>
                                        <h3>- Kevin Martin</h3>
                                    </div>
                                    <div class="testimonials-one__author-img">
                                        <img src="{{ asset('assets/front/asting/assets/images/testimonials/testimonials_one_au_img_1.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!--Testimonials One Single-->
                                <div class="testimonials-one__single">
                                    <div class="testimonials-one__quote">
                                        <img src="{{ asset('assets/front/asting/assets/images/testimonials/testimonials-one-icon-1.png') }}"
                                            alt="">
                                    </div>
                                    <div class="testimonials-one__text">
                                        <p>There are many variations of passages of lorem ipsum available but the
                                            majority have suffered alteration in some form.</p>
                                        <h3>- Jessica Brown</h3>
                                    </div>
                                    <div class="testimonials-one__author-img">
                                        <img src="{{ asset('assets/front/asting/assets/images/testimonials/testimonials_one_au_img_2.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination" id="testimonials-one__pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonials One End-->

    <!--Join One Start-->
    <section class="join-one jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
        style="background-image: url('assets/front/asting/assets/images/backgrounds/join_one_bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="join-one__inner">
                        <div class="join-one__icon">
                            <span class="icon-helping-hand"></span>
                        </div>
                        <h2>Join the Helpers Group</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Join One End-->

    <!--Newsletter One Start-->
    <section class="newsletter-one">
        <div class="container">
            <div class="newsletter-one__inner">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="newsletter-one__left">
                            <div class="newsletter-one__subscriber-box">
                                <div class="icon">
                                    <span class="icon-news"></span>
                                </div>
                                <div class="text">
                                    <p>Subscribe</p>
                                    <h4>Newsletter</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="newsletter-one__right">
                            <form action="#" class="newsletter-one__subscribe-form">
                                <div class="newsletter-one__subscribe-input-box">
                                    <input type="email" name="email" placeholder="Enter email address">
                                    <button type="submit" class="button">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Newsletter One End-->

    <!--News One Start-->
    <section class="news-one">
        <div class="news-one-bg"
            style="background-image: url('assets/front/asting/assets/images/backgrounds/news_one_bg.jpg')">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="block-title text-left">
                        <h4>From the Blog</h4>
                        <h2>News & Articles</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="news-one__top-text">
                        <p>There are many variations of passages of lorem available but the majority have suffered
                            in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <!--News One Single-->
                    <div class="news-one__single wow fadeInUp" data-wow-delay="100ms">
                        <div class="news-one__img">
                            <div class="news-one__img-box">
                                <img src="{{ asset('assets/front/asting/assets/images/blog/news_one_img_1.jpg') }}"
                                    alt="">
                                <a href="news-details.html"></a>
                            </div>
                            <div class="news-one__date-box">
                                <p>23 <br> Dec</p>
                            </div>
                        </div>
                        <div class="news-one__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                <li><span>/</span></li>
                                <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a>
                                </li>
                            </ul>
                            <div class="news-one__title">
                                <h3><a href="news-details.html">How Does Malnutrition Affect Children?</a></h3>
                            </div>
                            <a href="news-details.html" class="thm-btn news-one__btn">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--News One Single-->
                    <div class="news-one__single wow fadeInUp" data-wow-delay="200ms">
                        <div class="news-one__img">
                            <div class="news-one__img-box">
                                <img src="{{ asset('assets/front/asting/assets/images/blog/news_one_img_2.jpg') }}"
                                    alt="">
                                <a href="news-details.html"></a>
                            </div>
                            <div class="news-one__date-box">
                                <p>23 <br> Dec</p>
                            </div>
                        </div>
                        <div class="news-one__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                <li><span>/</span></li>
                                <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a>
                                </li>
                            </ul>
                            <div class="news-one__title">
                                <h3><a href="news-details.html">Leverage agile frameworks to provide a.</a></h3>
                            </div>
                            <a href="news-details.html" class="thm-btn news-one__btn">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--News One Single-->
                    <div class="news-one__single wow fadeInUp" data-wow-delay="300ms">
                        <div class="news-one__img">
                            <div class="news-one__img-box">
                                <img src="{{ asset('assets/front/asting/assets/images/blog/news_one_img_3.jpg') }}"
                                    alt="">
                                <a href="news-details.html"></a>
                            </div>
                            <div class="news-one__date-box">
                                <p>23 <br> Dec</p>
                            </div>
                        </div>
                        <div class="news-one__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                <li><span>/</span></li>
                                <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a>
                                </li>
                            </ul>
                            <div class="news-one__title">
                                <h3><a href="news-details.html">Bring to the table win-win survival strategies.</a>
                                </h3>
                            </div>
                            <a href="news-details.html" class="thm-btn news-one__btn">More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News One End-->

    <!--Gallery One Start-->
    <section class="gallery-one">
        <div class="gallery-one__container-box clearfix">
            <div class="thm-swiper__slider swiper-container gallery-one__content" data-swiper-options='{"spaceBetween": 20, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 10,
                        "slidesPerView": 1
                    },
                    "375": {
                        "spaceBetween": 20,
                        "slidesPerView": 1
                    },
                    "575": {
                        "spaceBetween": 20,
                        "slidesPerView": 2
                    },
                    "767": {
                        "spaceBetween": 20,
                        "slidesPerView": 3
                    },
                    "991": {
                        "spaceBetween": 20,
                        "slidesPerView": 4
                    },
                    "1199": {
                        "spaceBetween": 20,
                        "slidesPerView": 5
                    }
                }}'>
                <!-- swiper wrapper start -->
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="gallery-one__img-box">
                            <img src="{{ asset('assets/front/asting/assets/images/gallery/gallery_one_img_1.jpg') }}"
                                alt="">
                            <div class="gallery-one__iocn">
                                <a href="{{ asset('assets/front/asting/assets/images/gallery/gallery_one_img_1.jpg') }}"
                                    class="img-popup"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-one__img-box">
                            <img src="{{ asset('assets/front/asting/assets/images/gallery/gallery_one_img_2.jpg') }}"
                                alt="">
                            <div class="gallery-one__iocn">
                                <a href="{{ asset('assets/front/asting/assets/images/gallery/gallery_one_img_2.jpg') }}"
                                    class="img-popup"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-one__img-box">
                            <img src="{{ asset('assets/front/asting/assets/images/gallery/gallery_one_img_3.jpg') }}"
                                alt="">
                            <div class="gallery-one__iocn">
                                <a href="{{ asset('assets/front/asting/assets/images/gallery/gallery_one_img_3.jpg') }}"
                                    class="img-popup"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-one__img-box">
                            <img src="{{ asset('assets/front/asting/assets/images/gallery/gallery_one_img_4.jpg') }}"
                                alt="">
                            <div class="gallery-one__iocn">
                                <a href="{{ asset('assets/front/asting/assets/images/gallery/gallery_one_img_4.jpg') }}"
                                    class="img-popup"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-one__img-box">
                            <img src="{{ asset('assets/front/asting/assets/images/gallery/gallery_one_img_5.jpg') }}"
                                alt="">
                            <div class="gallery-one__iocn">
                                <a href="{{ asset('assets/front/asting/assets/images/gallery/gallery_one_img_5.jpg') }}"
                                    class="img-popup"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.swiper-wrapper -->
            </div>
            <!-- end .swiper-container -->
        </div>
    </section>
    <!--Gallery One End-->



@endsection
@push('after-script')
@endpush
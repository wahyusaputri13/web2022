<!--Brand One Start-->
<section class="brand-one">
    <div class="brand-one-bg"
        style="background-image: url('assets/front/asting/assets/images/backgrounds/brand-one-bg.png')">
    </div>
    <div class="brand-one__container">
        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"loop": true, "spaceBetween": 0, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "slidesPerView": 2
                    },
                    "375": {
                        "slidesPerView": 2
                    },
                    "575": {
                        "slidesPerView": 2
                    },
                    "767": {
                        "slidesPerView": 3
                    },
                    "991": {
                        "slidesPerView": 4
                    },
                    "1199": {
                        "slidesPerView": 5
                    }
                }}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="brand-one__img">
                        <img src="{{ asset('assets/front/asting/assets/images/brand/brand_1_img_1.png') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-one__img">
                        <img src="{{ asset('assets/front/asting/assets/images/brand/brand_1_img_2.png') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-one__img">
                        <img src="{{ asset('assets/front/asting/assets/images/brand/brand_1_img_3.png') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-one__img">
                        <img src="{{ asset('assets/front/asting/assets/images/brand/brand_1_img_4.png') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-one__img">
                        <img src="{{ asset('assets/front/asting/assets/images/brand/brand_1_img_5.png') }}" alt="">
                    </div>
                </div>
            </div><!-- /.swiper-wrapper -->
        </div>
    </div>
</section>
<!--Brand One End-->

<!--Site Footer One Start-->
<footer class="site-footer"
    style="background-image: url('assets/front/asting/assets/images/backgrounds/site_footer_bg.jpg')">
    <div class="container">
        <div class="site-footer__one-top">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__logo">
                            <a href="index.html"><img
                                    src="{{ asset('assets/front/asting/assets/images/resources/footer-logo.png') }}"
                                    alt="" hidden></a>
                        </div>
                        <p class="footer-widget__text"></p>
                        <div class="site-footer__social">
                            <a target="_blank" href="{{ $data_website->twitter }}"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="{{ $data_website->facebook }}" class="clr-fb"><i
                                    class="fab fa-facebook-square"></i></a>
                            <a target="_blank" href="{{ $data_website->youtube }}" class="clr-dri"><i
                                    class="fab fa-youtube"></i></a>
                            <a target="_blank" href="{{ $data_website->instagram }}" class="clr-ins"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__explore clearfix">
                        <h3 class="footer-widget__title">Explore</h3>
                        <ul class="footer-widget__explore-list list-unstyled">
                            <li><a href="#">Donate</a></li>
                            <li><a href="#">Campaigns</a></li>
                            <li><a href="#">Fundraise</a></li>
                            <li><a href="#">Volunteers</a></li>
                            <li><a href="#">Sponsors</a></li>
                        </ul>
                        <ul class="footer-widget__explore-list footer-widget__explore-list-two list-unstyled">
                            <li><a href="#">Fundraising</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Faqs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__column footer-widget__contact">
                        <h3 class="footer-widget__title">Contact</h3>
                        <ul class="list-unstyled footer-widget__contact-list">
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone-square-alt"></i>
                                </div>
                                <div class="text">
                                    <p><a href="tel:{{ $data_website->phone }}">{{ $data_website->phone }}</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:{{ $data_website->email }}">{{ $data_website->email }}</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="text">
                                    <p>{{ $data_website->address }}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="footer-widget__column footer-widget__support">
                        <h3 class="footer-widget__title">Support</h3>
                        <p class="footer-widget__support-text">Lorem ipsum dolor sit ame consect etur pisicing
                            elit sed do eiusmod tempor incididunt ut labore.</p>
                        <div class="footer-widget__support-btn">
                            <a href="campaigns.html"><i class="fas fa-heart"></i>Donate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer One End-->

<!--Site Footer Bottom Start-->
<div class="site-footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="site-footer-bottom__inner">
                    <div class="site-footer-bottom__left">
                        <p>&copy; Copyright 2022. Diskominfo Kab. Wonosobo by <a href="#"> Isa Maulana Tantra
                            </a></p>
                    </div>
                    <!-- <ul class="site-footer-bottom__menu list-unstyled">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><span>/</span></li>
                        <li><a href="#">Terms of Condition</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--Site Footer Bottom End-->

</div>
<!-- /.page-wrapper -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay side-menu__toggler mobile-nav__toggler"></div>
    <div class="mobile-nav__content">
        <span class="mobile-nav__close side-menu__toggler mobile-nav__toggler">
            <i class="fa fa-times"></i>
        </span>
        <div class="logo-box">
            <a href="index.html" aria-label="logo image">
                <img src="{{ asset('assets/front/asting/assets/images/resources/logo-2.png') }}" alt="" />
            </a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container clearfix"></div>
        <!-- /.mobile-nav__container -->
        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fas fa-envelope"></i>
                <a href="mailto:needhelp@asting.com">needhelp@asting.com</a>
            </li>
            <li>
                <i class="fas fa-phone-square-alt"></i>
                <a href="tel:666-888-0000">666 888 0000</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                <a href="#" aria-label="youtube"><i class="fab fa-youtube-p"></i></a>
                <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->
    </div>
</div>

<div class="search-popup">
    <div class="search-popup__overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.search-popup__overlay -->
    <div class="search-popup__inner">
        <form action="#" class="search-popup__form">
            <input type="text" name="search" placeholder="Type here to Search....">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>
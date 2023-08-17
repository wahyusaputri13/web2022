<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Boxass - Startup Landing Page Template">

    <!-- ========== Page Title ========== -->
    <title>Boxass - Startup Landing Page Template</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('assets/front/boxass/assets/img/favicon.png') }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('assets/front/boxass/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/front/boxass/assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/front/boxass/assets/css/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/front/boxass/assets/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/front/boxass/assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/front/boxass/assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/front/boxass/assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/front/boxass/assets/css/bootsnav.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/front/boxass/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/boxass/assets/css/responsive.css') }}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header
    ============================================= -->
    <header id="home">
        <div class="container">
            <div class="row">
                <!-- Start Navigation -->
                <nav id="mainNav"
                    class="navbar navbar-default navbar-fixed white bootsnav on no-full nav-box no-background">

                    <div class="container">
                        <!-- Start Atribute Navigation -->
                        <!-- <div class="attr-nav">
                            <ul>
                                <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                            </ul>
                        </div> -->
                        <!-- End Atribute Navigation -->

                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="index.html"><img
                                    src="{{ asset('assets/front/boxass/assets/img/logo.png') }}" class="logo"
                                    alt="Logo"></a>
                        </div>
                        <!-- End Header Navigation -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                                <li class="dropdown dropdown-right">
                                    <a href="#home" class="dropdown-toggle smooth-menu" data-toggle="dropdown">Home</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Home Version One</a></li>
                                        <li><a href="index-2.html">Home Version Two</a></li>
                                        <li><a href="index-3.html">Home Version Three</a></li>
                                        <li><a href="index-4.html">Home Version Four</a></li>
                                        <li><a href="index-5.html">Home Version Five</a></li>
                                        <li><a href="index-6.html">Home Version Six</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="smooth-menu" href="#about">About</a>
                                </li>
                                <li>
                                    <a class="smooth-menu" href="#features">Features</a>
                                </li>
                                <li>
                                    <a class="smooth-menu" href="#process">Work Process</a>
                                </li>
                                <li>
                                    <a class="smooth-menu" href="#pricing">Pricing</a>
                                </li>
                                <li>
                                    <a class="smooth-menu" href="#team">Team</a>
                                </li>
                                <li>
                                    <a class="smooth-menu" href="#blog">Blog</a>
                                </li>
                                <li>
                                    <a class="smooth-menu" href="#contact">contact</a>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>

                    <!-- Start Side Menu -->
                    <div class="side">
                        <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                        <div class="widget address">
                            <h4 class="title">Office Location</h4>
                            <ul>
                                <li>
                                    <i class="fas fa-phone"></i>
                                    +123 456 7890
                                </li>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    California, TX 70240
                                </li>
                                <li>
                                    <i class="fas fa-envelope-open"></i>
                                    info@yourdomain.com
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h4 class="title">Custom Pages</h4>
                            <ul class="link">
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Register</a></li>
                                <li><a href="#">Profile</a></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h4 class="title">Additional Links</h4>
                            <ul class="link">
                                <li><a href="#">Compnay History</a></li>
                                <li><a href="#">Management</a></li>
                                <li><a href="#">Leadership</a></li>
                                <li><a href="#">Shortcode Central</a></li>
                                <li><a href="#">Career</a></li>
                            </ul>
                        </div>
                        <div class="widget social">
                            <h4 class="title">Connect With Us</h4>
                            <ul class="link">
                                <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Side Menu -->
                </nav>
                <!-- End Navigation -->
                <div class="clearfix"></div>

            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Start Banner
    ============================================= -->
    <div class="banner-area content-double box-nav background-move bg-gray"
        style="background-image: url(assets/img/bg-2.png);">
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
                        <form action="assets/front/boxass/assets/mail/contact.php" method="POST" class="contact-form">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name"
                                            type="text">
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
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone"
                                            type="text">
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

    <!-- Start Footer
    ============================================= -->
    <footer class="default-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="f-items">
                    <div class="col-md-4 col-sm-6 equal-height item">
                        <div class="f-item">
                            <img src="{{ asset('assets/front/boxass/assets/img/logo.png') }}" alt="Logo">
                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke
                                happy for you are out. Fertile how old address.
                            </p>
                            <p>
                                <i>Please write your email and get our amazing updates, news and support</i>
                            </p>
                            <div class="newsletter">
                                <form action="#">
                                    <div class="input-group stylish-input-group">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Enter your e-mail here">
                                        <button type="submit">
                                            <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 equal-height item">
                        <div class="f-item link">
                            <h4>Quick LInk</h4>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">About us</a>
                                </li>
                                <li>
                                    <a href="#">Compnay History</a>
                                </li>
                                <li>
                                    <a href="#">Management </a>
                                </li>
                                <li>
                                    <a href="#">Features</a>
                                </li>
                                <li>
                                    <a href="#">Blog Page</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 equal-height item">
                        <div class="f-item link">
                            <h4>Community</h4>
                            <ul>
                                <li>
                                    <a href="#">Career</a>
                                </li>
                                <li>
                                    <a href="#">Leadership</a>
                                </li>
                                <li>
                                    <a href="#">Strategy</a>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="#">History</a>
                                </li>
                                <li>
                                    <a href="#">Jobs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 equal-height item">
                        <div class="f-item twitter-widget">
                            <h4>Contact Info</h4>
                            <p>
                                Queenslad Victoria Building. 60 california street california USA, 20, floor
                            </p>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Website:</h5>
                                            <span>www.validtheme.com</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Email:</h5>
                                            <span>support@validtheme.com</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Phone:</h5>
                                            <span>+44-20-7328-4499</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="col-lg-6 col-md-6 col-sm-7">
                            <p>&copy; Copyright 2018. All Rights Reserved by <a href="#">validthemes</a></p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-5 text-right social">
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Bottom -->
        </div>
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('assets/front/boxass/assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/front/boxass/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/front/boxass/assets/js/equal-height.min.js') }}"></script>
    <script src="{{ asset('assets/front/boxass/assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/front/boxass/assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/front/boxass/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/front/boxass/assets/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('assets/front/boxass/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/front/boxass/assets/js/count-to.js') }}"></script>
    <script src="{{ asset('assets/front/boxass/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/front/boxass/assets/js/jquery.backgroundMove.js') }}"></script>
    <script src="{{ asset('assets/front/boxass/assets/js/bootsnav.js') }}"></script>
    <script src="{{ asset('assets/front/boxass/assets/js/main.js') }}"></script>

</body>

</html>
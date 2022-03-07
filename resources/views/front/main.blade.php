<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $data_website->web_name }}</title>
    <meta content="" name="description">

    <meta content="" name="keywords">
    <!-- <meta name="_token" content="{{ csrf_token() }}"> -->
    <!-- Favicons -->
    <link href="{{ asset('assets/front/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/front/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/front/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/front/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    @yield('container')
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                            <!-- <img src="{{ asset('assets/front/assets/img/logo.png') }}" alt=""> -->
                            <span>{{ $data_website->web_name }}</span>
                        </a>
                        <!-- <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                            valies darta donna mare fermentum iaculis eu non diam phasellus.</p> -->
                        <div class="social-links mt-4">
                            <a href="{{ $data_website->twitter }}" target="_blank" class="twitter"><i
                                    class="bi bi-twitter"></i></a>
                            <a href="{{ $data_website->facebook }}" target="_blank" class="facebook"><i
                                    class="bi bi-facebook"></i></a>
                            <a href="{{ $data_website->instagram }}" target="_blank" class="instagram"><i
                                    class="bi bi-instagram"></i></a>
                            <a href="{{ $data_website->youtube }}" target="_blank" class="youtube"><i
                                    class="bi bi-youtube"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            {{ $data_website->address }} <br><br>
                            <strong>Phone:</strong> {{ $data_website->phone }}<br>
                            <strong>Email:</strong> {{ $data_website->email }}<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/front/assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/front/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/front/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/front/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/front/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/front/assets/vendor/php-email-form/validate.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/front/assets/js/main.js') }}"></script>

    <script src="{{  asset('assets/back/assets/js/jquery-3.1.1.min.js') }}"></script>
    <script>
        $('.btn-playstream').click(function () {
            currentvalue = document.getElementById('audio_1').value;
            if (currentvalue == "on") {
                document.getElementById('audio_1').pause();
                document.getElementById("audio_1").value = "off";
                console.log("off!");
            } else {
                document.getElementById('audio_1').play();
                document.getElementById("audio_1").value = "on";
                console.log("on!");
            }
            // function playmusik() {
            //     var song = new Audio();
            //     song.src = "http://i.klikhost.com:8234/stream";
            //     // song.autoplay = true;
            //     song.play;
            // }
            // window.addEventListener("load", playmusik);
        });
    </script>
    @stack('javascript')
</body>

</html>
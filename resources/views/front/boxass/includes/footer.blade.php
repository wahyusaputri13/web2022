<!-- Start Footer
    ============================================= -->
<footer class="default-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="f-items">
                <div class="col-md-4 col-sm-6 equal-height item">
                    <div class="f-item">
                        <!-- <img src="{{ asset('assets/front/boxass/assets/img/logo.png') }}" alt="Logo">
                        <p>
                            Excellence decisively nay man yet impression for contrasted remarkably. There spoke
                            happy for you are out. Fertile how old address.
                        </p>
                        <p>
                            <i>Please write your email and get our amazing updates, news and support</i>
                        </p> -->
                        <h3>Kontak Kami</h3>
                        <div class="address">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-home"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Alamat:</h4>
                                        <span>{{ $data_website->address }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Email:</h4>
                                        <span>{{ $data_website->email }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="info">
                                        <h4>Telepon:</h4>
                                        <span>{{ $data_website->phone }}</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="newsletter">
                            <form action="#">
                                <div class="input-group stylish-input-group">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Enter your e-mail here">
                                    <button type="submit">
                                        <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </form>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 equal-height item">
                    <div class="f-item link">
                        @if($related->count() > 0)
                        <h3>Link Terkait</h3>
                        <ul>
                            @foreach($related as $rr)
                            <li>
                                <a target="_blank" href="{{ $rr->url }}">{{ $rr->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 equal-height item">
                    <div class="map">
                        <iframe title="lokasi kami"
                            src="https://maps.google.com/maps?q={{ $data_website->latitude }},{{
                                                                                                $data_website->longitude }}&z=14&output=embed"
                            frameborder="0" allowfullscreen width="100%" height="100%"></iframe>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <br>
                            <h4 class="mb-0">Total Pengunjung {{ $counter_web }}</h4>
                        </div>
                    </div>
                    <!-- <div class="f-item link">
                        <h3>Community</h3>
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
                    </div> -->
                </div>
                <!-- <div class="col-md-4 col-sm-6 equal-height item">
                    <div class="f-item twitter-widget">

                    </div>
                </div> -->
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="col-lg-6 col-md-6 col-sm-7">
                        <p>&copy; Copyright 2023. Diskominfo
                            Kab.
                            Wonosobo by <a href="https://soulofjava.github.io/myportofolio/" target="_blank">Isa Maulana
                                Tantra</a></p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-5 text-right social">
                        <ul>
                            <li>
                                <a aria-label="Facebook" href="{{ $data_website->facebook }}"><i
                                        class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a aria-label="Twitter" href="{{ $data_website->twitter }}"><i
                                        class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a aria-label="Instagram" href="{{ $data_website->instagram }}"><i
                                        class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a aria-label="Youtube" href="{{ $data_website->youtube }}"><i
                                        class="fab fa-youtube"></i></a>
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
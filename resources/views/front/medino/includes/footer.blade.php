<!-- Footer Area Starts -->
<footer class="footer-area section-padding">
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-3">
                    <div class="single-widget-home mb-5 mb-lg-0">
                        @if($related->count() > 0)
                        <h3 class="mb-4">Link Terkait</h3>
                        <ul>
                            @foreach($related as $rr)
                            <li class="mb-2"><a href="{{ $rr->url }}" target="_blank">{{ $rr->name
                                    }}</a></li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6">
                    <div class="single-widget-home mb-5 mb-lg-0">
                        <h3 class="mb-4">Total Pengunjung : {{ $counter_web }}</h3>
                        <div class="map">
                            <iframe
                                src="https://maps.google.com/maps?q={{ $data_website->latitude }},{{
                                                                                                $data_website->longitude }}&z=14&output=embed"
                                frameborder="0" allowfullscreen width="100%"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 offset-xl-1 col-lg-3">
                    <div class="single-widge-home">
                        <!-- <h3 class="mb-4">instagram feed</h3>
                        <div class="feed">
                            <img src="{{ asset('assets/front/medino/images/feed1.jpg') }}" alt="feed">
                            <img src="{{ asset('assets/front/medino/images/feed2.jpg') }}" alt="feed">
                            <img src="{{ asset('assets/front/medino/images/feed3.jpg') }}" alt="feed">
                            <img src="{{ asset('assets/front/medino/images/feed4.jpg') }}" alt="feed">
                            <img src="{{ asset('assets/front/medino/images/feed5.jpg') }}" alt="feed">
                            <img src="{{ asset('assets/front/medino/images/feed6.jpg') }}" alt="feed">
                            <img src="{{ asset('assets/front/medino/images/feed7.jpg') }}" alt="feed">
                            <img src="{{ asset('assets/front/medino/images/feed8.jpg') }}" alt="feed">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <span>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> Diskominfo Wonosobo | by <a
                            href="https://soulofjava.github.io/myportofolio/" target="_blank">Isa Maulana Tantra</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </span>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="social-icons">
                        <ul>
                            <li><a target="_blank" href=" {{ $data_website->facebook }}"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href=" {{ $data_website->twitter }}"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href=" {{ $data_website->instagram }}"><i
                                        class="fa fa-instagram"></i></a></li>
                            <li><a target="_blank" href=" {{ $data_website->youtube }}"><i
                                        class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->
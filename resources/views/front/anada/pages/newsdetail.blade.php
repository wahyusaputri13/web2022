@extends('front.anada.layouts.app')
@section('content')
<!-- Start Blog
    ============================================= -->
<div class="blog-area single full-blog right-sidebar full-blog default-padding">
    <div class="container">
        <div class="blog-items">
            <div class="row">
                <div class="blog-content col-lg-8 col-md-12">
                    <div class="item">

                        <div class="blog-item-box">
                            <!-- Start Post Thumb -->
                            <div class="thumb">
                                <a href="#">
                                    @if(file_exists(public_path('storage/'.$data->path)))
                                    <img src="{{ asset('storage/') }}/{{ $data->path}}" class="card-img-top">
                                    @else
                                    <img src="{{ asset('img/soulofjava.jpg') }}" class="img-fluid">
                                    @endif
                                    <div class="date">
                                        <strong>{{
                                            \Carbon\Carbon::parse( $data->date )->format('l') }}</strong> {{
                                        \Carbon\Carbon::parse( $data->date
                                        )->toFormattedDateString() }}
                                    </div>
                                </a>
                            </div>
                            <!-- Start Post Thumb -->

                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">{{
                                                $data->upload_by }}</a>
                                        </li>
                                        <li>
                                            <i class="fas fa-eye"></i> {{
                                            views($data)->count(); }}</small>
                                        </li>
                                        <li>
                                            <a href="{{ Share::page('http://jorenvanhocht.be', 'Share title')->facebook()->getRawLinks(); }}"
                                                target="_blank">
                                                <i class="fab fa-facebook-square"></i>
                                            </a>
                                            <i class="fab fa-twitter-square"></i>
                                            <i class="fab fa-whatsapp-square"></i>
                                        </li>
                                        <li>
                                            {!! Share::currentPage()->facebook()->twitter()->whatsapp(); !!}
                                        </li>
                                    </ul>
                                </div>
                                <h4>{{ $data->title }}</h4>
                                <p>
                                    {!! $data->description !!}
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Start Sidebar -->
                <div class="sidebar col-lg-4 col-md-12">
                    <aside>
                        <div class="sidebar-item search">
                            <div class="sidebar-info">
                                <form>
                                    <input type="text" name="text" class="form-control">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-item recent-post">
                            <div class="title">
                                <h4>Recent Post</h4>
                            </div>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Participate in staff meetingness manage dedicated</a>
                                        <div class="meta-title">
                                            <span class="post-date"><i class="fas fa-clock"></i> 12 Feb, 2020</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Future Plan & Strategy for Consutruction </a>
                                        <div class="meta-title">
                                            <span class="post-date"><i class="fas fa-clock"></i> 05 Jul, 2019</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/800x800.png" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Melancholy particular devonshire alteration</a>
                                        <div class="meta-title">
                                            <span class="post-date"><i class="fas fa-clock"></i> 29 Aug, 2020</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <!-- End Start Sidebar -->
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->
@endsection
@push('after-script')
@endpush
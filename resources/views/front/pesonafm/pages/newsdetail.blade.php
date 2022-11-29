@extends('front.pesonafm.layouts.app')
@section('content')
<style>
  .card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
  }
</style>
<div class="container mx-auto py-1">

  <div class="flex justify-between m-1 sm:mx-2">
    <a href="{{url('/')}}">
      <h1 class="text-3xl font-bold text-center mx-10"> <span
          class="bg-gradient-to-r from-red-500 to-rose-400 bg-clip-text text-transparent"> 92.1 FM Radio
          Pesona</span> </h1>
    </a>
    <div class="flex space-x-4 font-medium sm:text-lg">
      <a href="{{url('/newsall')}}" class="hover:scale-125  text-red-500">News</a>
      <a href="{{url('/photos')}}" class="hover:scale-125 text-red-500">Tips & Trick</a>
      <a href="https://api.whatsapp.com/send?phone=6282323839996" class="hover:scale-125 text-red-500">Contact</a>
      <a href="{{ url('login') }}" class="hover:scale-125 text-red-500">Login</a>
    </div>
  </div>
  <a href="{{url('/')}}">
    <h1 class="text-8xl font-bold text-center my-10"> Recent posts <span
        class="bg-gradient-to-r from-blue-500 to-teal-400 bg-clip-text text-transparent">form our
        Blog</span> </h1>
  </a>

    <!-- ======= Blog Single Section ======= -->
    
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry entry-single">

                    <div class="w-full h-48 overflow-auto touch-auto">
                            <img src="{{ asset('storage/app/') }}/{{ $data->path}}" class="img-fluid" alt="">
                        </div>

                        <h2 class="entry-title">
                            <a href="#">{{ $data->title }}</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                        href="{{ url('/news-author', $data->upload_by) }}">{{
                                        $data->upload_by }}</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time>{{
                                            \Carbon\Carbon::parse( $data->date )->format('l') }}, {{
                                            \Carbon\Carbon::parse( $data->date
                                            )->toFormattedDateString() }}</time></a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            {!! $data->description !!}
                        </div>

                        <!-- <div class="entry-footer">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li><a href="#">Business</a></li>
                            </ul>

                            <i class="bi bi-tags"></i>
                            <ul class="tags">
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div> -->

                    </article>
                    <!-- End blog entry -->

                    <!-- <div class="blog-author d-flex align-items-center">
                        <img src="{{ asset('flexstart/assets/img/blog/blog-author.jpg') }}"
                            class="rounded-circle float-left" alt="">
                        <div>
                            <h4>Jane Smith</h4>
                            <div class="social-links">
                                <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                                <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                            </div>
                            <p>
                                Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium.
                                Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium
                                ut unde voluptas.
                            </p>
                        </div>
                    </div> -->
                    <!-- End blog author bio -->

                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-item search-form">
                            {{Form::open(['route' => 'news.search','method' => 'get', ''])}}
                            {{Form::text('kolomcari', null,['class' => 'form-control', 'placeholder' => 'Title Post'])}}
                            <button type="submit"><i class="bi bi-search"></i></button>
                            {{Form::close()}}
                        </div>
                        <!-- End sidebar search formn-->

                        <!-- <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <li><a href="#">General <span>(25)</span></a></li>
                                <li><a href="#">Lifestyle <span>(12)</span></a></li>
                                <li><a href="#">Travel <span>(5)</span></a></li>
                                <li><a href="#">Design <span>(22)</span></a></li>
                                <li><a href="#">Creative <span>(8)</span></a></li>
                                <li><a href="#">Educaion <span>(14)</span></a></li>
                            </ul>
                        </div> -->
                        <!-- End sidebar categories-->

                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="sidebar-item recent-posts">
                            @foreach($news as $n)
                            <div class="post-item clearfix">
                                <img src="{{ asset('storage/app/') }}/{{ $n->path}}" alt="">
                                <h4><a href="{{ url('/news-detail', $n->id) }}">{{ $n->title }}</a></h4>
                                <time datetime="2020-01-01">{{
                                    \Carbon\Carbon::parse( $n->date
                                    )->toFormattedDateString() }}</time>
                            </div>
                            @endforeach
                        </div><!-- End sidebar recent posts-->

                        <!-- <h3 class="sidebar-title">Tags</h3>
                        <div class="sidebar-item tags">
                            <ul>
                                <li><a href="#">App</a></li>
                                <li><a href="#">IT</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Mac</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Studio</a></li>
                                <li><a href="#">Smart</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div> -->
                        <!-- End sidebar tags-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
  <!-- End Blog Single Section -->

</main>
@endsection
@push('after-script')
@endpush
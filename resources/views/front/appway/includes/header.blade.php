<!-- preloader -->
<div class="preloader"></div>
<!-- preloader -->

<!-- main header -->
<header class="main-header home-1">
    <div class="outer-container">
        <div class="container">
            <div class="main-box clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="index.html"><img
                                src="{{ asset('assets/front/appway/images/logo.png') }}" alt=""></a></figure>
                </div>
                <div class="menu-area pull-right">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                @php
                                $queryMenu = DB::table('front_menus')
                                ->where('menu_parent', '=', '1')
                                ->where('deleted_at', '=', null)
                                ->orderBy('id', 'ASC')
                                ->get();
                                @endphp
                                @foreach($queryMenu as $menu)
                                @php
                                $menuId = $menu->id;
                                $subMenus = DB::table('front_menus')
                                ->where('menu_parent', '=' , $menuId)
                                ->where('deleted_at', '=', null)
                                ->orderBy('menu_parent', 'ASC')
                                ->get();
                                @endphp
                                @if(count($subMenus) == 0)
                                <li><a href="{{ url('/page', $menu->menu_url) }}">{{
                                        $menu->menu_name
                                        }}</a>
                                </li>
                                @else
                                <li class="dropdown"><a href="#">{{ $menu->menu_name }}</a>
                                    <ul>
                                        @foreach($subMenus as $sm)
                                        @php
                                        $menuId2 = $sm->id;
                                        $subMenus2 = DB::table('front_menus')
                                        ->where('menu_parent', '=' , $menuId2)
                                        ->where('deleted_at', '=', null)
                                        ->orderBy('menu_parent', 'ASC')
                                        ->get();
                                        @endphp
                                        @if(count($subMenus2) == 0)
                                        <li><a href="{{ url('page', $sm->menu_url) }}">{{ $sm->menu_name }}</a></li>
                                        @else
                                        <li class="dropdown"><a href="#">{{ $sm->menu_name }}</a>
                                            <ul>
                                                @foreach($subMenus2 as $sub3)

                                                @php
                                                $menuId3 = $sub3->id;
                                                $subMenus3 = DB::table('front_menus')
                                                ->where('menu_parent', '=' , $menuId3)
                                                ->where('deleted_at', '=', null)
                                                ->orderBy('menu_parent', 'ASC')
                                                ->get();
                                                @endphp

                                                @if(count($subMenus3) == 0)
                                                <li><a href="{{ url('page', $sub3->menu_url) }}">{{
                                                        $sub3->menu_name }}</a></li>
                                                @else
                                                <li class="dropdown"><a href="#">{{ $sub3->menu_name }} 333</a>
                                                    <ul>
                                                        @foreach($subMenus3 as $sub4)
                                                        <li><a href="{{ url('page', $sub4->menu_url) }}">{{
                                                                $sub4->menu_name
                                                                }} 444</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endif
                                        @endforeach
                                    </ul>
                                </li>
                                @endif
                                @endforeach
                                <!-- start looping component -->
                                @php
                                $component = DB::table('components')->where('active', '=', 1)->orderBy('name',
                                'ASC')->get();
                                @endphp
                                @foreach($component as $cp)
                                @if($cp->slug != 'complaints')
                                <li>
                                    <a class="nav-link scrollto" href="{{ url($cp->slug) }}">
                                        {{ $cp->name }}
                                    </a>
                                </li>
                                @endif
                                @if ($cp->slug == 'complaints')
                                <li class="dropdown">
                                    <a href="#"><span>{{ $cp->name }}</span> <i class="bi bi-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="https://laporbupati.wonosobokab.go.id/"
                                                target="_blank">LaporBup</a></li>
                                        <li><a href="tel:112" target="_blank">Call Center 112</a></li>
                                    </ul>
                                </li>
                                @endif
                                @endforeach
                                <!-- end looping component -->
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="container clearfix">
            <figure class="logo-box"><a href="index.html"><img
                        src="{{ asset('assets/front/appway/images/small-logo.png') }}" alt=""></a></figure>
            <div class="menu-area">
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo"><a href="index.html"><img src="{{ asset('assets/front/appway/images/logo.png') }}" alt=""
                    title=""></a></div>
        <div class="menu-outer">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        </div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div>
<!-- End Mobile Menu -->
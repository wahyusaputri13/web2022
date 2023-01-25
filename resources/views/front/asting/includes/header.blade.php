<div class="preloader">
    <img src="{{ asset('assets/front/asting/assets/images/loader.png') }}" class="preloader__image" alt="">
</div><!-- /.preloader -->

<div class="page-wrapper">

    <div class="site-header__header-one-wrap clearfix">
        <div class="container">

            <div class="site-header__logo-box float-left">
                <div class="site-header__logo">
                    <a href="index.html"><img src="{{ asset('assets/front/asting/assets/images/resources/logo.png') }}"
                            alt=""></a>
                </div>
            </div>

            <header class="main-nav__header-one">
                <div class="main-nav__header-one__top clearfix">
                    <div class="main-nav__header-one__top-left">
                        <ul class="list-unstyled">
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
                        </ul>
                    </div>
                    <div class="main-nav__header-one__top-right">
                        <div class="main-nav__header-one__top-social">
                            <a href="{{ $data_website->facebook }}" target="_blank"><i
                                    class="fab fa-facebook-square"></i></a>
                            <a href="{{ $data_website->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="{{ $data_website->instagram }}" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="{{ $data_website->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <nav class="header-navigation stricky">
                    <div class="container clearfix">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="main-nav__left main-nav__left-one float-left">
                            <a href="#" class="side-menu__toggler">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="main-nav__main-navigation clearfix">
                                <ul class=" main-nav__navigation-box float-left">
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
                                    <li>
                                        <a href="{{ url('/page', $menu->menu_url) }}">
                                            {{ $menu->menu_name }}
                                        </a>
                                    </li>
                                    @else
                                    <li class="dropdown">
                                        <a href="#">
                                            {{ $menu->menu_name }}
                                        </a>
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
                                            <li>
                                                <a href="{{ url('page', $sm->menu_url) }}">
                                                    {{ $sm->menu_name }}
                                                </a>
                                            </li>
                                            @else
                                            <li class="dropdown">
                                                <a href="#">
                                                    {{$sm->menu_name }}
                                                </a>
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
                                                    <li>
                                                        <a href="{{ url('page', $sub3->menu_url) }}">
                                                            {{ $sub3->menu_name }}
                                                        </a>
                                                    </li>
                                                    @else
                                                    <li class="dropdown">
                                                        <a href="#">
                                                            {{ $sub3->menu_name }}
                                                        </a>
                                                        <ul>
                                                            @foreach($subMenus3 as $sub4)
                                                            <li>
                                                                <a href="{{ url('page', $sub4->menu_url) }}">
                                                                    {{ $sub4->menu_name }}
                                                                </a>
                                                            </li>
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
                                        <a href="{{ url($cp->slug) }}">{{ $cp->name }}</a>
                                    </li>
                                    @endif
                                    @if ($cp->slug == 'complaints')
                                    <li class="dropdown">
                                        <a href="#">{{ $cp->name }}</a>
                                        <ul class="dropdown">
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
                            <!-- /.navbar-collapse -->
                        </div>
                        <div class="main-nav__right main-nav__right-one float-right">
                            <div class="main-nav__right__icon-search-box">
                                <a href="#" class="main-nav__search search-popup__toggler">
                                    <i class="icon-magnifying-glass"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
    </div>
<!-- ======= Header ======= -->
@if(Route::current()->getName() == 'root')
<header id="header" class="fixed-top">
    @else
    <header id="header" class="fixed-top header-inner-pages">
        @endif
        <div class="container d-flex align-items-center">
            @if(Route::current()->getName() != 'root')
            <h1 class="logo me-auto"><a href="{{ url('/') }}">{{ $data_website->web_name }}</a></h1>
            @else
            <h1 class="logo me-auto"><a href="{{ url('/') }}" hidden></h1>
            @endif
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    @php
                    $queryMenu = DB::table('front_menus')
                    ->orderBy('front_menus.position_order', 'ASC')
                    ->get();
                    @endphp

                    @foreach($queryMenu as $menu)

                    @php
                    $menuId = $menu->id;
                    $subMenus = DB::table('front_submenus')
                    ->join('front_menus', 'front_submenus.menu_id', '=', 'front_menus.id')
                    ->where('front_submenus.menu_id', '=' , $menuId)
                    ->orderBy('front_submenus.name', 'ASC')
                    ->get();
                    @endphp

                    @if($menu->menu_url)
                    <li><a class="nav-link scrollto" href="{{ $menu->menu_url }}">{{ $menu->menu }}</a></li>
                    @else
                    <li class="dropdown"><a href="#"><span>{{ $menu->menu }}</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            @foreach($subMenus as $submenu)
                            <li><a href="{{ $submenu->url }}">{{ $submenu->name }}</a></li>
                            @endforeach
                            <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </li>
                    @endif
                    @endforeach
                    <!-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
                    @auth
                    <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    @else
                    <li><a class="getstarted scrollto" href="{{ route('login') }}">Get Started</a></li>
                    @endauth
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->
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
                    @foreach($nav_menu as $menu)
                    @if($menu->submenu()->exists())
                    <li class="dropdown"><a href="#"><span>{{ $menu->menu }}</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            @foreach($menu->submenu as $sm)
                            <li><a href="{{ url('subpage', $sm->url) }}">{{ $sm->name }}</a></li>
                            @endforeach
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
                        </ul>
                    </li>
                    @else
                    <li><a class="nav-link scrollto" href="{{ url('/page', $menu->menu_url) }}">{{ $menu->menu }}</a>
                    </li>
                    @endif
                    @endforeach
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
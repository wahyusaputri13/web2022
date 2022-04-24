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
                    <li class="dropdown"><a href="#"><span>{{ $menu->menu_name }}</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            @foreach($menu->submenu as $sm)
                            @if($sm->submenu()->exists())
                            <li class="dropdown"><a href="#"><span>{{ $sm->menu_name }}</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    @foreach($sm->submenu as $sub3)
                                    <li><a href="{{ url('subpage', $sub3->menu_url) }}">{{ $sub3->menu_name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @else
                            <li><a href="{{ url('subpage', $sm->menu_url) }}">{{ $sm->menu_name }}</a></li>
                            @endif
                            @endforeach
                        </ul>
                    </li>
                    @elseif($menu->menu_parent == 'root')
                    <li><a class="nav-link scrollto" href="{{ url('/page', $menu->menu_url) }}">{{ $menu->menu_name
                            }}</a>
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
    @foreach($nav_menu as $menu)
    @foreach($menu->submenu as $abc)
    @foreach($abc->submenu as $bca)
    {{ $bca->menu_name }}
    @endforeach
    @endforeach
    @endforeach
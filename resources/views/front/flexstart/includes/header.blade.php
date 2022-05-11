<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <!-- <img src="{{ asset('assets/front/assets/img/logo.png') }}"> -->
            @if(Route::current()->getName() != 'root')
            <span>{{ $data_website->web_name }}</span>
            @endif
        </a>

        @if(Route::current()->getName() != 'root')
        <nav id="navbar" class="navbar">
            <ul>
                <!-- <li><a class="nav-link scrollto" href="{{ url('/') }}" style="color: black;">Home</a></li>
                <li class="dropdown"><a href="#" style="color: black;"><span>Profil</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
                        <li><a href="{{ route('latar-belakang') }}">Latar Belakang</a></li>
                        <li><a href="{{ route('tujuan') }}">Tujuan</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" target="_blank"
                        href="https://jatengprov.go.id/beritadaerah/desa-kapencar-menjadi-kampung-pancasila/"
                        style="color: black;">Berita</a>
                </li>
                <li><a class="nav-link scrollto" href="{{ route('kampung-pancasila') }}" style="color: black;">Kampung
                        Pancasila Wonosobo</a>
                </li> -->

                @if (Route::has('login'))
                @auth
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                @else
                {{-- <li><a class="getstarted scrollto" href="{{ route('login') }}">Get Started</a></li> --}}
                @endauth
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        @else
        <nav id="navbar" class="navbar">
            <ul>
                @php
                $queryMenu = DB::table('front_menus')
                ->where('menu_parent', '=', 'root')
                ->orderBy('id', 'ASC')
                ->get();
                @endphp
                @foreach($queryMenu as $menu)
                @php
                $menuId = $menu->id;
                $subMenus = DB::table('front_menus')
                ->where('menu_parent', '=' , $menuId)
                ->orderBy('menu_parent', 'ASC')
                ->get();
                @endphp
                @if(count($subMenus) == 0)
                <li><a class="nav-link scrollto" href="{{ url('/page', $menu->menu_url) }}">{{ $menu->menu_name
                        }}</a>
                </li>
                @else
                <li class="dropdown"><a href="#"><span>{{ $menu->menu_name }}</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        @foreach($subMenus as $sm)
                        @php
                        $menuId2 = $sm->id;
                        $subMenus2 = DB::table('front_menus')
                        ->where('menu_parent', '=' , $menuId2)
                        ->orderBy('menu_parent', 'ASC')
                        ->get();
                        @endphp
                        @if(count($subMenus2) == 0)
                        <li><a href="{{ url('page', $sm->menu_url) }}">{{ $sm->menu_name }}</a></li>
                        @else
                        <li class="dropdown"><a href="#"><span>{{ $sm->menu_name }}</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                @foreach($subMenus2 as $sub3)
                                <li><a href="{{ url('page', $sub3->menu_url) }}">{{ $sub3->menu_name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </li>
                @endif
                @endforeach
                <!--<li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
                        <li><a href="{{ route('latar-belakang') }}">Latar Belakang</a></li>
                        <li><a href="{{ route('tujuan') }}">Tujuan</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" target="_blank"
                        href="https://jatengprov.go.id/beritadaerah/desa-kapencar-menjadi-kampung-pancasila/">Berita</a>
                </li>
                <li><a class="nav-link scrollto" href="{{ route('kampung-pancasila') }}">Kampung Pancasila Wonosobo</a>
                </li> -->
                <!-- <li><a href="#recent-blog-posts">Blog</a></li>
                <li><a class="nav-link scrollto" href="{{ url('/photos') }}">Gallery</a></li> -->
                <!-- <li><a class="nav-link scrollto" href="#about">About</a></li> -->
                <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li> -->
                <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
                <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
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
                    </li> -->
                <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
                @if (Route::has('login'))
                @auth
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                @else
                <li><a class="getstarted scrollto" href="{{ route('login') }}">Get Started</a></li>
                @endauth
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        @endif
    </div>
</header>
<!-- End Header -->
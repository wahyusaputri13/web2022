<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <!-- <img src="{{ asset('assets/front/assets/img/logo.png') }}"> -->
            @if(Route::current()->getName() != 'root')
            <span>{{ $data_website->web_name }}</span>
            @endif
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <!-- start looping component -->
                @php
                $component = DB::table('components')->where('active', '=', 1)->orderBy('name', 'ASC')->get();
                @endphp
                @foreach($component as $cp)
                <li>
                    <a class="nav-link scrollto" href="{{ url('guestbook') }}">
                        {{ $cp->name }}
                    </a>
                </li>
                @endforeach
                <!-- end looping component -->
                <!-- start looping menu & submenu -->
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
                @if (Route::has('login'))
                @auth
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                @else
                <li><a class="getstarted scrollto" href="{{ route('login') }}">Get Started</a></li>
                @endauth
                @endif
                <!-- end looping menu & submenu -->
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
<!-- End Header -->
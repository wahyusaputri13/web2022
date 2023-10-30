<!-- ======= Header ======= -->
<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="{{ url('/') }}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            @if(Route::current()->getName() != 'root')
            <h1>{{ $data_website->web_name }}<span>.</span></h1>
            @endif
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                @foreach(App\Models\FrontMenu::where('menu_parent', '1')->orderBy('id',
                'ASC')->get() as $menu)

                @if(App\Models\FrontMenu::where('menu_parent', $menu->id)->orderBy('menu_parent',
                'ASC')->count() == 0)
                <li>
                    <a class="nav-link scrollto" href="{{ url('page', $menu->menu_url) }}">
                        {{ $menu->menu_name }}
                    </a>
                </li>
                @else
                <li class="dropdown">
                    <a href="{{ url('page', $menu->menu_url) }}">
                        <span>
                            {{ $menu->menu_name }}
                        </span>
                        <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        @foreach(App\Models\FrontMenu::where('menu_parent',
                        $menu->id)->orderBy('menu_parent',
                        'ASC')->get() as $sm)

                        @if(App\Models\FrontMenu::where('menu_parent',
                        $sm->id)->orderBy('menu_parent',
                        'ASC')->count() == 0)
                        <li>
                            <a href="{{ url('page', $sm->menu_url) }}">
                                {{ $sm->menu_name }}
                            </a>
                        </li>
                        @else
                        <li class="dropdown">
                            <a href="{{ url('page', $sm->menu_url) }}">
                                <span>
                                    {{ $sm->menu_name }}
                                </span>
                                <i class="bi bi-chevron-right dropdown-indicator"></i>
                            </a>
                            <ul>
                                @foreach(App\Models\FrontMenu::where('menu_parent',
                                $sm->id)->orderBy('menu_parent',
                                'ASC')->get() as $sub3)

                                @if(App\Models\FrontMenu::where('menu_parent',
                                $sub3->id)->orderBy('menu_parent',
                                'ASC')->count() == 0)
                                <li>
                                    <a href="{{ url('page', $sub3->menu_url) }}">
                                        {{ $sub3->menu_name }}
                                    </a>
                                </li>
                                @else
                                <li class="dropdown">
                                    <a href="#">
                                        <span>
                                            {{ $sub3->menu_name }}
                                        </span>
                                        <i class="bi bi-chevron-right dropdown-indicator"></i>
                                    </a>
                                    <ul>
                                        @foreach(App\Models\FrontMenu::where('menu_parent',
                                        $sub3->id)->orderBy('menu_parent',
                                        'ASC')->get() as $sub4)
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
                <x-komponen />
            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav>
        <!-- .navbar -->
        <!-- <a class="scrollto"></a> -->
    </div>
</header>
<!-- End Header -->
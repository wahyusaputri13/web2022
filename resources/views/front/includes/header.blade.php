<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>{{ $data_website->web_name }}<span>.</span></h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                @foreach (App\Models\FrontMenu::where('menu_parent', '1')->where('deleted_at', null)->orderBy('id',
                'ASC')->get() as $menu)

                @if (App\Models\FrontMenu::where('menu_parent', $menu->id)->where('deleted_at',
                null)->orderBy('menu_parent',
                'ASC')->count() == 0)
                <li>
                    @if ($menu->link)
                    <a target="_blank" href="{{ $menu->menu_url }}">
                        {{ $menu->menu_name }}
                    </a>
                    @else
                    <a href="{{ url('/page', $menu->menu_url) }}">
                        {{ $menu->menu_name }}
                    </a>
                    @endif
                </li>
                @else
                <li class="dropdown">
                    <a href="#">
                        {{ $menu->menu_name }}
                        <i class="bi bi-chevron-down dropdown-indicator"></i>
                    </a>
                    <ul>
                        @foreach (App\Models\FrontMenu::where('menu_parent', $menu->id)->where('deleted_at',
                        null)->orderBy('menu_parent',
                        'ASC')->get() as $sm)

                        @if (App\Models\FrontMenu::where('menu_parent', $sm->id)->where('deleted_at',
                        null)->orderBy('menu_parent',
                        'ASC')->count() == 0)
                        <li>
                            @if($sm->link)
                            <a target="_blank" href="{{ $sm->menu_url }}">
                                {{ $sm->menu_name }}
                            </a>
                            @else
                            <a href="{{ url('page', $sm->menu_url) }}">
                                {{ $sm->menu_name }}
                            </a>
                            @endif
                        </li>
                        @else
                        <li class="dropdown">
                            <a href="#">
                                {{ $sm->menu_name }}
                                <i class="bi bi-chevron-down dropdown-indicator"></i>
                            </a>
                            <ul>
                                @foreach (App\Models\FrontMenu::where('menu_parent', $sm->id)->where('deleted_at',
                                null)->orderBy('menu_parent',
                                'ASC')->get() as $sub3)

                                @if (App\Models\FrontMenu::where('menu_parent', $sub3->id)->where('deleted_at',
                                null)->orderBy('menu_parent',
                                'ASC')->count() == 0)
                                <li>
                                    @if ($sub3->link)
                                    <a href="{{ $sub3->menu_url }}" target="_blank">
                                        {{ $sub3->menu_name }}
                                    </a>
                                    @else
                                    <a href="{{ url('page', $sub3->menu_url) }}">
                                        {{ $sub3->menu_name }}
                                    </a>
                                    @endif
                                </li>
                                @else
                                <li class="dropdown">
                                    <a href="#">
                                        {{ $sub3->menu_name }}
                                        <i class="bi bi-chevron-down dropdown-indicator"></i>
                                    </a>
                                    <ul>
                                        @foreach (App\Models\FrontMenu::where('menu_parent',
                                        $sub3->id)->where('deleted_at',
                                        null)->orderBy('menu_parent',
                                        'ASC')->get() as $sub4)
                                        <li>
                                            @if ($sub4->link)
                                            <a href="{{ $sub4->menu_url }}" target="_blank">
                                                {{ $sub4->menu_name }}
                                            </a>
                                            @else
                                            <a href="{{ url('page', $sub4->menu_url) }}">
                                                {{ $sub4->menu_name }}
                                            </a>
                                            @endif
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
            </ul>
            <ul>
                <li style="color: rgba(255, 255, 255, 0.6);">
                    <a id="carikan">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- .navbar -->
    </div>
</header>
<!-- End Header -->
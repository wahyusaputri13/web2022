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
                @php
                $queryMenu = DB::table('front_menus')
                ->where('menu_parent', '=', '1')
                ->where('deleted_at', '=', null)
                ->orderBy('id', 'ASC')
                ->get();
                @endphp
                @foreach ($queryMenu as $menu)
                @php
                $menuId = $menu->id;
                $subMenus = DB::table('front_menus')
                ->where('menu_parent', '=', $menuId)
                ->where('deleted_at', '=', null)
                ->orderBy('menu_parent', 'ASC')
                ->get();
                @endphp
                @if (count($subMenus) == 0)
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
                        @foreach ($subMenus as $sm)
                        @php
                        $menuId2 = $sm->id;
                        $subMenus2 = DB::table('front_menus')
                        ->where('menu_parent', '=', $menuId2)
                        ->where('deleted_at', '=', null)
                        ->orderBy('menu_parent', 'ASC')
                        ->get();
                        @endphp
                        @if (count($subMenus2) == 0)
                        <li>
                            <a href="{{ url('page', $sm->menu_url) }}">
                                {{ $sm->menu_name }}
                            </a>
                        </li>
                        @else
                        <li class="dropdown">
                            <a href="#">
                                {{ $sm->menu_name }}
                                <i class="bi bi-chevron-down dropdown-indicator"></i>
                            </a>
                            <ul>
                                @foreach ($subMenus2 as $sub3)
                                @php
                                $menuId3 = $sub3->id;
                                $subMenus3 = DB::table('front_menus')
                                ->where('menu_parent', '=', $menuId3)
                                ->where('deleted_at', '=', null)
                                ->orderBy('menu_parent', 'ASC')
                                ->get();
                                @endphp

                                @if (count($subMenus3) == 0)
                                <li>
                                    @if ($sub3->menu_name == 'Permohonan Informasi Publik')
                                    <a href="https://website.wonosobokab.go.id/category/detail/Permohonan-Informasi-Publik"
                                        target="_blank">
                                        {{ $sub3->menu_name }}
                                    </a>
                                    @elseif ($sub3->menu_name == 'Pengajuan Keberatan Informasi Publik')
                                    <a href="https://website.wonosobokab.go.id/category/detail/Formulir-Keberatan-atas-Permohonan-Informasi-Publik-pada-PPID-Kabupaten-Wonosobo"
                                        target="_blank">
                                        {{ $sub3->menu_name }}
                                    </a>
                                    @elseif ($sub3->menu_name == 'JDIH Wonosobo')
                                    <a href="https://jdih.wonosobokab.go.id/" target="_blank">
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
                                        @foreach ($subMenus3 as $sub4)
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
            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
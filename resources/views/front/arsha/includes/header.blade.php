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
                            ->where('deleted_at', '=', null)
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
                                        @if ($sub3->menu_name == 'Permohonan Informasi Publik')
                                        <a href="https://website.wonosobokab.go.id/category/detail/Permohonan-Informasi-Publik"
                                            target="_blank">{{
                                            $sub3->menu_name }}
                                        </a>
                                        @elseif ($sub3->menu_name == 'Pengajuan Keberatan Informasi Publik')
                                        <a href="https://website.wonosobokab.go.id/category/detail/Formulir-Keberatan-atas-Permohonan-Informasi-Publik-pada-PPID-Kabupaten-Wonosobo"
                                            target="_blank">{{ $sub3->menu_name }}
                                        </a>
                                        @elseif ($sub3->menu_name == 'JDIH Wonosobo')
                                        <a href="https://jdih.wonosobokab.go.id/" target="_blank">{{ $sub3->menu_name }}
                                        </a>
                                        @else
                                        <a href="{{ url('page', $sub3->menu_url) }}">{{ $sub3->menu_name }}
                                        </a>
                                        @endif
                                    </li>
                                    @else
                                    <li class="dropdown"><a href="#"><span>{{ $sub3->menu_name }}</span>
                                            <i class="bi bi-chevron-right"></i></a>
                                        <ul>
                                            @foreach($subMenus3 as $sub4)
                                            <li><a href="{{ url('page', $sub4->menu_url) }}">{{ $sub4->menu_name
                                                    }}</a></li>
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
                    <x-komponen li='dropdown' i='bi bi-chevron-down' />
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->
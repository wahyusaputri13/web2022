<div class="wrapper">
    <div class="sidebar" data-active-color="green" data-background-color="black"
        data-image="{{ asset('assets/back/assets/img/sidebar-3.jpg') }}">
        <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
        <div class="logo">
            <a href="{{ url('/') }}" target="_blank" class="simple-text">
                {{ $data_website->web_name }}
            </a>
        </div>
        <div class="logo logo-mini">
            <a href="http://www.creative-tim.com/" class="simple-text">
                Ct
            </a>
        </div>
        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    @if(auth()->user()->profile_photo_path)
                    <img src="{{ asset('storage') }}/{{ auth()->user()->profile_photo_path }}" />
                    @else
                    <img src="{{ asset('assets/back/assets/img/image_placeholder.jpg') }}" alt="...">
                    @endif
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                        {{auth()->user()->name}}
                        <b class="caret"></b>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="{{ route('myprofile.edit', auth()->user()->id) }}">Edit Profile</a>
                            </li>
                            <li>
                                <a href="#">Settings</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                @php
                $role_id = auth()->user()->role_id;
                $queryMenu = DB::table('menus')
                ->join('user_access_menus', 'menus.id', '=', 'user_access_menus.menu_id')
                ->where('user_access_menus.role_id', '=' , $role_id)
                ->orderBy('menus.menu', 'ASC')
                ->get();
                @endphp

                @foreach($queryMenu as $menu)

                @php
                $menuId = $menu->menu_id;
                $subMenus = DB::table('submenus')
                ->join('menus', 'submenus.menu_id', '=', 'menus.id')
                ->where('submenus.menu_id', '=' , $menuId)
                ->where('submenus.is_active', '=' , 1)
                ->orderBy('submenus.title', 'ASC')
                ->get();
                @endphp

                @if($subMenus->isEmpty())
                <li class="{{ request()->is(strtolower($menu->menu.'*')) ? 'active' : '' }}">
                    <a href="{{ $menu->menu_url }}">
                        <i class="material-icons">{{ $menu->menu_icon }}</i>
                        <p>{{ $menu->menu }}</p>
                    </a>
                </li>
                @else
                <li>
                    <a data-toggle="collapse" href="#pagesExamples{{ $loop->iteration }}">
                        <i class="material-icons">{{ $menu->menu_icon }}</i>
                        <p>{{ $menu->menu }}
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="pagesExamples{{ $loop->iteration }}">
                        <ul class="nav">
                            @foreach($subMenus as $submenu)
                            <li class="{{ request()->is(strtolower($submenu->title.'*')) ? 'active' : '' }}">
                                <a href="{{ $submenu->url }}"><i class="material-icons">{{ $submenu->icon }}</i>{{
                                    $submenu->title
                                    }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                @endif

                @endforeach
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                        <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                        <i class="material-icons visible-on-sidebar-mini">view_list</i>
                    </button>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="#"> Dashboard </a> -->
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">dashboard</i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">notifications</i>
                                <span class="notification">5</span>
                                <p class="hidden-lg hidden-md">
                                    Notifications
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Mike John responded to your email</a>
                                </li>
                                <li>
                                    <a href="#">You have 5 new tasks</a>
                                </li>
                                <li>
                                    <a href="#">You're now friend with Andrew</a>
                                </li>
                                <li>
                                    <a href="#">Another Notification</a>
                                </li>
                                <li>
                                    <a href="#">Another One</a>
                                </li>
                            </ul>
                        </li> -->
                        <li>
                            <form id="myForm" method="POST" action="{{ route('logout') }}" hidden>
                                @csrf
                            </form>
                            <a href="#" onclick="logout()" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-sign-out"></i>
                                <p class="hidden-lg hidden-md">Logout</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                    <!-- <form class="navbar-form navbar-right" role="search">
                        <div class="form-group form-search is-empty">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="material-input"></span>
                        </div>
                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">search</i>
                            <div class="ripple-container"></div>
                        </button>
                    </form> -->
                </div>
            </div>
        </nav>
        <script>
            function logout() {
                swal({
                    title: 'Are you sure?',
                    text: "want to logout!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    confirmButtonText: 'Yes',
                    buttonsStyling: false
                }).then(function () {
                    document.getElementById("myForm").submit();
                });
            };
        </script>
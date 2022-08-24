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
            <a href="{{ url('/') }}" class="simple-text">
                <span class="material-icons">
                    language
                </span>
            </a>
        </div>
        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    @if(auth()->user()->profile_photo_path)
                    <img src="{{ asset('storage') }}/{{ auth()->user()->profile_photo_path }}" />
                    @else
                    <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}">
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
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li class="{{ (request()->is('dashboard')) ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a data-toggle="collapse" href="#pagesExamples">
                        <i class="material-icons">archive</i>
                        <p>Posts
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="pagesExamples">
                        <ul class="nav">
                            <li class="{{ (request()->is('gallery*')) ? 'active' : '' }}">
                                <a href="{{ url('/gallery') }}"> <i class="material-icons">collections</i>
                                    Gallery</a>
                            </li>
                            <li class="{{ (request()->is('news*')) ? 'active' : '' }}">
                                <a href="{{ url('/news') }}">
                                    <i class="material-icons">event_note</i>
                                    News</a>
                            </li>
                        </ul>
                    </div>
                </li>
                @if(Auth::user()->role_id == 1)
                <li>
                    <a data-toggle="collapse" href="#pagesExamples2">
                        <i class="material-icons">public</i>
                        <p>Website
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="pagesExamples2">
                        <ul class="nav">
                            <li class="{{ (request()->is('component*')) ? 'active' : '' }}">
                                <a href="{{ url('/component') }}"><i class="material-icons">apps</i>
                                    Components</a>
                            </li>
                            <li class="{{ (request()->is('frontmenu*')) ? 'active' : '' }}">
                                <a href="{{ url('/frontmenu') }}"> <i class="material-icons">menu</i>
                                    Menu</a>
                            </li>
                            <li class="{{ (request()->is('relatedlink*')) ? 'active' : '' }}">
                                <a href="{{ url('/relatedlink') }}"><i class="material-icons">link</i>
                                    Related Link</a>
                            </li>
                            <li class="{{ (request()->is('settings*')) ? 'active' : '' }}">
                                <a href="{{ url('/settings') }}">
                                    <i class="material-icons">settings</i>
                                    Settings</a>
                            </li>
                            <li class="{{ (request()->is('themes*')) ? 'active' : '' }}">
                                <a href="{{ url('/themes') }}"><i class="material-icons">brush</i>
                                    Themes</a>
                            </li>
                            <li class="{{ (request()->is('user*')) ? 'active' : '' }}">
                                <a href="{{ url('/user') }}">
                                    <i class="material-icons">person</i>
                                    Users</a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif
                <li class="{{ (request()->is('inbox')) ? 'active' : '' }}">
                    <a href="{{ url('inbox') }}">
                        <i class="material-icons">mail</i>
                        <p>Inbox</p>
                    </a>
                </li>
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
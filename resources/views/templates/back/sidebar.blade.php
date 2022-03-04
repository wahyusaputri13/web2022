<div class="wrapper">
    <div class="sidebar" data-active-color="green" data-background-color="white"
        data-image="{{ asset('assets/back/assets/img/sidebar-3.jpg') }}">
        <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
        <div class="logo">
            <a href="{{ url('/') }}" target="_blank" class="simple-text">
                Creative Tim
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
                    <img src="{{ asset('assets/back/assets/img/faces/avatar.jpg') }}" />
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                        {{auth()->user()->name}}
                        <b class="caret"></b>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#">My Profile</a>
                            </li>
                            <li>
                                <a href="{{ url('/user/profile') }}">Edit Profile</a>
                            </li>
                            <li>
                                <a href="#">Settings</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                    <a href="{{ url('dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <!-- <li class="{{ request()->is('menu*') ? 'active' : '' }}">
                    <a href="{{ url('menu') }}">
                        <i class="material-icons">menu</i>
                        <p>Menu</p>
                    </a>
                </li> -->
                <li class="{{ request()->is('website*') ? 'active' : '' }}">
                    <a href="{{ url('website') }}">
                        <i class="material-icons">web</i>
                        <p>Website</p>
                    </a>
                </li>
                <li class="{{ request()->is('news*') ? 'active' : '' }}">
                    <a href="{{ url('news') }}">
                        <i class="material-icons">event_note</i>
                        <p>News</p>
                    </a>
                </li>
                <li class="{{ request()->is('gallery*') ? 'active' : '' }}">
                    <a href="{{ url('gallery') }}">
                        <i class="material-icons">collections</i>
                        <p>Gallery</p>
                    </a>
                </li>
                <!-- <li>
                    <a data-toggle="collapse" href="#pagesExamples">
                        <i class="material-icons">image</i>
                        <p>Pages
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="pagesExamples">
                        <ul class="nav">
                            <li>
                                <a href="#">Pricing</a>
                            </li>
                            <li>
                                <a href="#">Timeline</a>
                            </li>
                            <li>
                                <a href="#">Login Page</a>
                            </li>
                            <li>
                                <a href="#">Register Page</a>
                            </li>
                            <li>
                                <a href="#">Lock Screen Page</a>
                            </li>
                            <li>
                                <a href="#">User Profile</a>
                            </li>
                        </ul>
                    </div>
                </li> -->
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
                    <a class="navbar-brand" href="#"> Dashboard </a>
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
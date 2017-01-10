<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('DataTables-1.10.13/media/css/jquery.dataTables.css') }}" rel="stylesheet">    
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">



    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <style>
        body {
            /*background: url("http://mdbootstrap.com/images/regular/nature/img%20(55).jpg")no-repeat center center fixed;*/
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>
<body class="fixed-sn red-skin" style="padding-top: 7%;">


    <!--Double Navigation-->
    <header>

        <!-- Sidebar navigation -->
        <ul id="slide-out" class="side-nav fixed custom-scrollbar">

            <!-- Logo -->
            <li>
                <div class="logo-wrapper waves-light sn-avatar-wrapper">
                    <a href="#">
                        <img src="http://mdbootstrap.com/images/avatars/img%20(2)" class="rounded-circle">
                    </a>
                </div>
            </li>
            <!--/. Logo -->

            <!--Social-->
            <li>
                <ul class="social">
                    <li><a class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
                    <li><a class="icons-sm ins-ic"><i class="fa fa-instagram"> </i></a></li>
                    <li><a class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a></li>
                    <li><a class="icons-sm"><i class="fa fa-snapchat-ghost"> </i></a></li>
                </ul>
            </li>
            <!--/Social-->

            <!--Search Form-->
            <li>
                <form class="search-form" role="search">
                    <div class="form-group waves-light">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
            </li>
            <!--/.Search Form-->

            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-user"></i> About me<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Introduction</a>
                                </li>
                                <li><a href="#" class="waves-effect">Passions</a>
                                </li>
                                <li><a href="#" class="waves-effect">My work</a>
                                </li>
                                <li><a href="#" class="waves-effect">Photography</a>
                                </li>
                                <li><a href="#" class="waves-effect">Collaboration</a>
                                </li>
                                <li><a href="#" class="waves-effect">For media</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-heart"></i> Followers<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Join the community</a>
                                </li>
                                <li><a href="#" class="waves-effect">Share with friends</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-camera"></i> Gallery<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Photo sessions</a>
                                </li>
                                <li><a href="#" class="waves-effect">Spain, Madrid</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-headphones"></i> Music<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Playlist</a>
                                </li>
                                <li><a href="#" class="waves-effect">My YT channel</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-comments"></i> Comments<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Most commented posts</a>
                                </li>
                                <li><a href="#" class="waves-effect">Write a comment</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-gears"></i> Setting<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="{{ route('kategori_barang.index') }}" class="waves-effect">Kategori Barang</a>
                                </li>
                                <li><a href="{{ route('satuan_barang.index') }}" class="waves-effect">Satuan Barang</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <!--/. Side navigation links -->

        </ul>
        <!--/. Sidebar navigation -->

        <!--Navbar-->
        <nav class="navbar navbar-fixed-top scrolling-navbar double-nav">

            <!-- SideNav slide-out button -->
            <div class="float-xs-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>

            <!-- Breadcrumb-->
            <div class="breadcrumb-dn">
                <p>{{ config('app.name', 'Laravel') }}</p>
            </div>


            <ul class="nav navbar-nav float-xs-right">

                <li class="nav-item ">
                    <a href="{{ url('/home') }}" class="nav-link"><i class="fa fa-home"></i> <span class="hidden-sm-down">Home</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link"><i class="fa fa-user"></i> <span class="hidden-sm-down">Account</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a>
                    <div class="dropdown-menu dropdown-primary dd-right" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                            </form>
                    </div>
                </li>
            </ul>

        </nav>
        <!--/.Navbar-->

    </header>
    <!--/Double Navigation-->


        @include('layouts._flash')
        @yield('content')
    

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.1.1.min.js')}}"></script>

    <script src="{{ asset('js/tether.min.js')}}"></script>

    <script src="{{ asset('js/bootstrap.min.js')}}"></script>

    <script src="{{ asset('js/mdb.min.js')}}"></script>

    <script src="{{ asset('DataTables-1.10.13/media/js/jquery.dataTables.js') }}"></script>

    <script>
        // SideNav init
        $(".button-collapse").sideNav();

        // Custom scrollbar init
        var el = document.querySelector('.custom-scrollbar');
        Ps.initialize(el);
    </script>
        @yield('scripts')
</body>
</html>

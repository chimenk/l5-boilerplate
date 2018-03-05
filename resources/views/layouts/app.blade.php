<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/node-waves/waves.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/animate-css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/themes/all-themes.css') }}" rel="stylesheet">
    @php $routeName =  \Illuminate\Support\Facades\Route::getFacadeRoot()->current()->getName() @endphp
</head>
<body class="{{ $routeName == 'login' ? 'login-page' : 'theme-blue'}}">
        @if(!url('/login'))
        
        @endif
        @if($routeName !== 'login')
            <div class="page-loader-wrapper" style="display: none;">
                <div class="loader">
                    <div class="preloader">
                        <div class="spinner-layer pl-red">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div>
                            <div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                        </div>
                    </div>
                    <p>Please wait...</p>
                </div>
            </div>
            <div class="overlay" style="display: none;"></div>
            <div class="search-bar">
                <div class="search-icon">
                    <i class="material-icons">search</i>
                </div>
                <input type="text" placeholder="START TYPING...">
                <div class="close-search">
                    <i class="material-icons">close</i>
                </div>
            </div>
            <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                        <a href="javascript:void(0);" class="bars"></a>
                        <a class="navbar-brand" href="{{ route('home') }}">Boilerplate</a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                                {{-- <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li> --}}
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->first_name.' '.Auth::user()->last_name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="#">User Management</a>
                                        </li>
                                        <li>
                                            <a href="#">Role Management</a>
                                        </li>
                                        <li>
                                            <a href="#">Log Report</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
            <section>
                <aside id="leftsidebar" class="sidebar">
                    <div class="user-info">
                        <div class="image">
                            
                        </div>
                        <div class="info-container">
                            
                        </div>
                    </div>
                    <div class="menu">
                        <ul class="list">
                            <li class="header">Main Navigation</li>
                            <li class="active">
                                <a href="{{ route('home') }}"><i class="material-icons">home</i><span>Home</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="legal">
                        <div class="copyright">
                            &copy; 2018 <a href="javascript:void(0);">Ace</a>.
                        </div>
                        <div class="version">
                            <b>Version: </b> 1.0.0
                        </div>
                    </div>
                </aside>
            </section>
            <section class="content">
                @yield('content')
            </section>
        @endif

    <!-- Scripts -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/plugins/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-countto/jquery.countTo.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset('assets/js/admin.js') }}"></script>
    <script src="{{ asset('assets/js/pages/examples/sign-in.js') }}"></script>
    <script src="{{ asset('assets/js/pages/index.js') }}"></script>
</body>
</html>

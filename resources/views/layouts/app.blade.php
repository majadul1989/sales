<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sales | {{ $page_title or 'Welcome' }}</title>

    <!-- Styles -->
    <!-- Jquery -->
    <script type="text/javascript" src="{{ asset('/css/bootstrap/js/jquery-2.2.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/css/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Scripts -->
    <!-- branch validation js -->
    <script src="{{ asset('js/branch.js') }}"></script>
    
    {{-- Dropdown Style script --}}
    <script src="{{ asset('js/bootstrap-select.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- Date picker --}}
    <link href="{{ asset('/css/bootstrap-datepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap-datepicker.standalone.css') }}" rel="stylesheet">


    {{-- custom style --}}
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <!-- font-Awesome -->
    <link href="{{ asset('/css/fontAwasme/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap/css/bootstrap-theme.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    {{-- Dropdown style css --}}
    <link href="{{ asset('/css/bootstrap/css/bootstrap-select.css') }}" rel="stylesheet">
</head>
<body class="success">
    <div id="app" class="warpper">
        <nav class="navbar navbar-default navbar-static-top padding margin">
            <div class="container-fluid">
                <div class="navbar-header">
                    <li> 
                    <span class="btn btn-success menu hidden-lg hidden-md visible-sm visible-xs"><i class="glyphicon glyphicon-list"></i>  <span class="menuType">Menu</span></span>

                    </li>
                    <li>
                    <a class="navbar-brand" href="{{url('/home')}}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    </li>    
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed glyphicon glyphicon-user" data-toggle="collapse" data-target="#app-navbar-collapse">
                       
                    </button>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                       <!-- Branding Image -->
                      
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{url('/register')}}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
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
        @yield('content')
    </div>
    <script type="text/javascript" src="{{ asset('/css/bootstrap/js/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/css/bootstrap/js/bootstrapValidator.js') }}"></script>

<script type="text/javascript">
    // Canvas Menu functions here Right
                $(document).ready(function(){
                        var menu = "close";
                    $(".menu").click(function(){            
                        if (menu == "close") {
                            $(".canvasMenuRight").css('transform','translate(0, 0)');
                            $(".warpper").css('transform','translate(70%, 0)');
                            $(".warpper").css('padding','0');
                            $(".funy").removeClass("row");
                            menu = "open";
                        }else{
                            $(".canvasMenuRight").css('transform','translate(100%, 0)');
                            $(".warpper").css('transform','translate(0, 0)');
                            $(".warpper").css('padding','0 15px');
                            $(".funy").addClass("row");
                            menu = "close";
                        }
                    });
                });
</script>


</body>
</html>

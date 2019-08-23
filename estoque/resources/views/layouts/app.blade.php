<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Controle de Estoque</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Numans" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style4.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    
    <!-- DataTables CSS -->
    <link href="{{ asset('plugins/datatables/datatables.min.css') }}" rel="stylesheet">

    <!-- SweetAlert CSS -->
    <link href="{{ asset('plugins/sweetalert/sweetalert2.min.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Controle de Estoque') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="wrapper" style="margin-top:-40px;">
            <!-- Sidebar  -->
            <nav id="sidebar" style="position: relative; float: left !important">
                <div class="sidebar-header">
                    <h3>Controle de Estoque <i class="fa fa-cubes" aria-hidden="true"></i></h3>
                    <strong>CE <i class="fa fa-cubes" aria-hidden="true"></i></i></strong>
                </div>

                <ul class="list-unstyled components">
        
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="fa fa-list-alt" aria-hidden="true"></i>
                            Estoque
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="{{ url('/criar/produtos') }}"><i class="fa fa-plus-square"></i>Cadastrar</a>
                            </li>

                            <li>
                                <a href="{{ url('/buscar/produtos') }}"><i class="fa fa-list"></i>Gerenciar</a>
                            </li>
                            
                        </ul>
                    </li>

                   
                </ul>
        </nav>

            <!-- Page Content  -->
            <div id="content">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="btn btn-info" style="background-color: #FFB88C !important;">
                            <i class="fa fa-bars"></i>
                            <span>Menu</span>
                        </button>
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-align-justify"></i>
                        </button>
                    </div>
                </nav>

                <main class="py-4">
                    @yield('content')
                </main>
                
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('bootstrap/js/jquery.js') }}" ></script>

    <script type="text/javascript" src="{{ asset('bootstrap/js/popper.min.js') }}" ></script>

    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}" ></script>

    <script type="text/javascript" src="{{ asset('plugins/datamask/jquery.mask.js') }}" ></script>

    <script type="text/javascript" src="{{ asset('plugins/sweetalert/sweetalert2.min.js') }}" ></script>

    <script type="text/javascript" src="{{ asset('plugins/datatables/datatables.min.js') }}" ></script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

        /* DataTables*/
        $(document).ready(function(){
            $("#myTable").DataTable();
        });

        /* Mascaras */
        $(document).ready(function(){
            $("#cpf").mask("000.000.000-00");
            $("#phone").mask("(00) 0000-0000");
            $("#cellphone").mask("(00) 00000-0000");
            $("#cep").mask("00.000-000");
            $("#date").mask("00-00-0000");
        });
    </script>
</body>
</html>

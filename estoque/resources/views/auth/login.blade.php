<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Controle de Estoque') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Numans" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- DataTables CSS -->
    <link href="{{ asset('plugins/datatables/datatables.min.css') }}" rel="stylesheet">

    <!-- SweetAlert CSS -->
    <link href="{{ asset('plugins/sweetalert/sweetalert2.min.css') }}" rel="stylesheet">

    <style type="text/css">
        .login-block{
            background: #DE6262;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to bottom, #FFB88C, #DE6262); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            float:left;
            width:100%;
            height: 100%;
            padding : 50px 0;
        }
        .banner-sec {
            background:url(http://localhost:8000/images/slide-2.jpg)  no-repeat left bottom;
            background-size:cover; 
            min-height:500px; 
            border-radius: 0 10px 10px 0; 
            padding:0;
        }
        .container {
            background:#fff; 
            border-radius: 10px; 
            box-shadow:15px 20px 0px rgba(0,0,0,0.1);
        }
        .carousel-inner {
            border-radius:0 10px 10px 0;
        }
        .carousel-caption {
            text-align:left; 
            left:5%;
        }
        .login-sec {
            padding: 50px 30px; 
            position:relative;
        }
        .login-sec .copy-text {
            position:absolute; 
            width:80%; 
            bottom:20px; 
            font-size:13px; 
            text-align:center;
        }
        .login-sec .copy-text i {
            color:#FEB58A;
        }
        .login-sec .copy-text a {
            color:#E36262;
        }
        .login-sec h2 {
            margin-bottom:30px; 
            font-weight:800; 
            font-size:30px; 
            color: #DE6262;
        }
        .login-sec h2:after {
            content:" "; 
            width:100px; 
            height:5px; 
            background:#FEB58A; 
            display:block; 
            margin-top:20px; 
            border-radius:3px; 
            margin-left:auto;
            margin-right:auto
        }
        .btn-login {
            background: #DE6262; 
            color:#fff; 
            font-weight:600;
        }
        .banner-text {
            width:70%;
             position:absolute; 
             bottom:40px; 
             padding-left:20px;
         }
        .banner-text h2 {
            color:#fff; 
            font-weight:600;}
        .banner-text h2:after {
            content:" "; 
            width:100px; 
            height:5px; 
            background:#FFF; 
            display:block; 
            margin-top:20px; 
            border-radius:3px;
        }
        .banner-text p {
            color:#fff;
        }
        .form-check {
            float: left;
        }
    </style>
</head>
<body>
    <section class="login-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 login-sec">
                    <img src="{{ asset('images/logo_estoque.png') }}" style="height: 188px;">
                    <form class="login-form" method="POST" action="{{ route('login') }}">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1" class="text-uppercase">Usuário: </label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email"  placeholder="Digite Seu Usuário">
                           
                            
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1" class="text-uppercase">Senha: </label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Digite Sua Senha">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      </div>
                      
                      
                        <div class="form-check">
                            <button type="submit" class="btn btn-login float-right">Entrar</button>
                        </div>
                      
                    </form>
                </div>
                <div class="col-md-8 banner-sec">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                         <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="{{ asset('images/slide-2.jpg') }}" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="banner-text">
                                        <h2>Controle de Estoque</h2>
                                        <p>Sistema de <strong>Controle de Estoque</strong> Foi Desenvolvimdo Para Facilidatar o Gerenciamento do Seu Estoque </p>
                                    </div>  
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="{{ asset('images/slide-1.jpg') }}" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="banner-text">
                                        <h2>Controle de Estoque</h2>
                                        <p>Sistema de <strong>Controle de Estoque</strong> Foi Desenvolvimdo Para Facilidatar o Gerenciamento do Seu Estoque </p>
                                    </div>  
                                </div>
                            </div>
                        </div>     
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Barco Tech</title>
    <link rel="stylesheet" href=" {{ asset('plugins/fontawesome-free/css/all.min.css')}} ">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Home</a>
                </li>     
                 
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-none d-sm-inline-block">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar Sesion') }}
                                </a>
                            @else
                                <a class="nav-item d-none d-sm-inline-block display-5" href="{{ route('login') }}">Login</a>
                                    @if (Route::has('register'))
                                        <a class="nav-item d-none d-sm-inline-block" href="{{ route('register') }}">Register</a>
                                    @endif
                            @endauth
                        </div>
                    @endif
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                </form>  
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">    
                    <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">BARCO TECH</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel -->
                @auth
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">{{ Auth::user()->name }} </a>            
                        </div>
                    </div>
                @endauth
                <!-- Sidebar Menu -->
                <nav class="mt-2 ">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">                                                    
                        <li class="nav-item has-treeview menu-close">
                            <a href="#" class="nav-link">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <p>Cliente<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/cliente" class="nav-link">
                                        <p>Lista de clientes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/cliente/create" class="nav-link">                                        
                                        <p>Crear Cliente</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview menu-close">
                            <a href="#" class="nav-link">
                                <i class="fa fa-archive" aria-hidden="true"></i>
                                <p>Equipos<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/equipo" class="nav-link">
                                        <p>Lista de equipos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/equipo/create" class="nav-link">                                        
                                        <p>Crear equipos</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview menu-close">
                            <a href="#" class="nav-link">
                                <i class="fa fa-archive" aria-hidden="true"></i>
                                <p>Propietario<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/propietario" class="nav-link">
                                        <p>Lista de propietarios</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/propietario/create" class="nav-link">                                        
                                        <p>Crear Propietario</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview menu-close">
                            <a href="#" class="nav-link">
                                <i class="fa fa-archive" aria-hidden="true"></i>
                                <p>Barcos<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/bote" class="nav-link">
                                        <p>Lista de Barco</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/bote/create" class="nav-link">                                        
                                        <p>Crear Barco</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>                    
                </nav>        
            </div>
            <!-- /.sidebar -->
        </aside>    
        <div class="content-wrapper">                
            @yield('content')    
        </div>
    </div>
    @include('sweetalert::alert')
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>
</html>

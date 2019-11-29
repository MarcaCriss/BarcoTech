<nav class="navbar navbar-expand-md shadow-sm">
        <div class="container">                
                <div class="text-white">
                    BarcoTech
                </div>                
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                            <a class="nav-link text-white" href="{{ route('login') }}">
                                Ingresar
                            </a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('register') }}">
                                    Registrarse
                                </a>
                            </li>   
                        @endif
                    @else                        
                        <li class="nav-link text-white">                                
                                {{ Auth::user()->name }}                                
                        </li>                            
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Cerrar Sesion
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>                                                    
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
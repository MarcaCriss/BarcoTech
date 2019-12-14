<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Barco Tech</title>        
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        body, html {        
            background-image: url("img/barco.jpg");
            background-repeat:no-repeat ;
          }
          
          .container-thing {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            height: 100%;
          }
          
          %circle {
            display: inline-block;
            width: 1em;
            height: 1em;
            font-size: 4em;
            border-radius: 50%;
            margin-right: 50px;
            
            &:last-child {
              margin-right: 0;
            }
          }
          
          .green {
            @extend %circle;            
            font-size: 25px;
            border-radius:40%;
          }
          
          .blue {
            @extend %circle;            
            font-size: 30px;
            border-radius:40%;
          }
          .yellow {
            @extend %circle;            
            font-size: 30px;
            border-radius:40%;
          }
              
    </style>
   
</head>
<body>    
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark ">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <p class="nav-link">
                    BarcoTech
                </p>         
                      
            </li>                      
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">                                    
                    <a class="nav-link" data-target="#exampleModalLong" data-toggle="modal" href="{{ route('login') }}">{{ __('Login') }}</a>                                        
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#exampleModalLong1" href="{{ route('register') }}">{{ __('Register') }}</a>
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
    </nav>
<!-- /.navbar -->
<div class="container mt-4">    
    @yield('content')       
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
    

        <div class="d-flex justify-content-center">
            <div class="container-thing">                 
                <div class="green">Empresa</div>
                <div class="blue"></div>            
                <div class="yellow">Viajes</div>            
            </div>
        </div>
<br><br><br><br>
    <p class="bg-white espacio">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam sequi excepturi consequuntur architecto culpa soluta eligendi nulla natus perspiciatis nam, veniam fugit autem quos ipsum perferendis sunt illo similique eaque!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia minus doloremque fugit quos odit doloribus, neque earum ex repellat deleniti cum esse illo ipsam exercitationem, delectus officia, nihil sequi eveniet!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus ipsum quasi velit assumenda, sit doloremque nisi error numquam maiores voluptatem neque eum, soluta obcaecati doloribus dicta totam. Modi, reprehenderit molestiae.
        </p> 
    <br><br> 
    <div id="carouselExampleIndicators" class="carousel slide border rounded" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/01.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/02.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/03.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div><br><br>
    <div class="card-deck">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title text-center">Velocidad</h5>                
            </div>
            <div class="card-body ">
                <img src="{{ asset('img/06.jpeg') }}" class="card-img-top" alt="100%">
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="card-title text-center">Elegancia</h5>                
            </div>            
            <div class="card-body ">
                <img src="{{ asset('img/05.jpg') }}" class="card-img-top" alt="100%">
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="card-title text-center">Comodidad</h5>                
            </div>            
            <div class="card-body ">
                <img src="{{ asset('img/06.jpeg') }}" class="card-img-top" alt="100%">
            </div>
        </div>
    </div>
    <br>
</div>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"><h2>Inicio de Sesion</h2></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="text-center text-dark">                             
                            </div>                
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Correo Electronico</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>                               
                                    </div>
                                </div>
                        
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">
                                        Contraseña
                                    </label>
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">                
                                    </div>
                                </div>
                        
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        
                                            <label class="form-check-label" for="remember">
                                                Recuerdame
                                            </label>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Ingresar
                                        </button>
                                        <a href="/login/facebook" class="btn btn-primary ml-2">Login con facebook</a>
                        
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                ¿Olvidaste tu contraseña?
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                </div>                
            </div>
        </div>
    </div>   <!-- Button trigger modal -->

    <!-- Modal -->
<div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">  
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><h2>{{ __('Register') }}</h2></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>        
            <div class="modal-body">                    
                    <form method="POST" action="{{ route('register') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
            </div>
          
        </div>
    </div>
</div>    

<div class="modal fade" id="exampleModalLong4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">  
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><h2>Contactos</h2></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>        
            <div class="modal-body">                    
                <form method="POST" action="/informacion">
                    <p class="display-5">Por favor rellene sus datos para poder comunicarnos con usted : </p>
                    @csrf		
                    <div class="form-group">
                        <label for="name">Ingrese su nombre : </label>
                        <input type="text" name="nombre" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="address">Ingrese su correo electronico : </label>
                        <input type="text" name="direccion" id="address" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>    
            </div>          
        </div>
    </div>
</div>    

<div class="card">
    <div class="card-footer bg-white">
        <div class="row">
            <div class="col">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi veritatis possimus porro maiores ex obcaecati, labore cum? Minima in corrupti facere, mollitia veniam doloremque omnis quidem ex exercitationem aperiam. Porro.
            </div>
            <div class="col">
                <div class="container">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi veritatis possimus porro maiores ex obcaecati, labore cum? Minima in corrupti facere, mollitia veniam doloremque omnis quidem ex exercitationem aperiam. Porro.
                    <a href="/contacto" data-toggle="modal" data-target="#exampleModalLong4"><p class="display-5">Contactanos para mas informacion</p></a>
                </div>        
            </div>
        </div>
    </div>
</div>
<script>var green = document.querySelector('.green');

    var animation = green.animate([
      { transform: 'translateY(-2em)' },
      { transform: 'translateY(2em)' }
    ], {
      duration: 1000,
      iterations: Infinity,
      direction: 'alternate',
      easing: 'ease-in-out'
    });
    
    var blue = document.querySelector('.blue');
    
    blue.animate([
      { transform: 'translateY(-2em)', opacity: 0 },
      { transform: 'translateY(2em)', opacity: 1}
    ], {
      duration: 1000,
      iterations: Infinity,
      direction: 'alternate',
      easing: 'ease',
      delay: 500
    });
    var yellow = document.querySelector('.yellow');
    
    yellow.animate([
      { transform: 'translateY(-2em)', opacity: 0 },
      { transform: 'translateY(2em)', opacity: 1}
    ], {
      duration: 1000,
      iterations: Infinity,
      direction: 'alternate',
      easing: 'ease',
      delay: 500
    });
    </script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

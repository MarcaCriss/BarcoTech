@extends('layouts.app')
@section('content')
    @auth
    <div class="container mt-2">                                    
        <div class="d-flex justify-content-between align-items-center">
            <p class="display-4">Lista de Clientes</p>
            <form action="/search" method="GET">
                @csrf
                <div class="input-group">
                    <input type="search" name="search" class="form-control">
                    <span class="input-group-prepend">
                        <button type="submit" class="btn btn-primary">
                                <i class="fas fa-search"></i> Search
                        </button>
                    </span>
                </div>
            </form>
        </div>
        <hr>
        <div class="row">                
            @foreach ($datos as $item)             
                <div class="col-sm-5 col-lg-3 col-md-4 mt-3">
                    <div class="card border-0">
                        <div class="card-header bg-dark text-white">
                            {{ $item->nombre }}                            
                        </div>
                        <div class="card-body bg-white">
                            {{ $item->direccion }} <br>
                            <hr>
                            {{ $item->telefono }} <br>
                            <hr>
                            {{ $item->experiencia }}
                            <hr>
                            <div class="d-flex justify-content-between">
                                <a href="/cliente/{{$item->id}}/edit" class="btn btn-success">
                                    <i class="fas fa-edit"></i> Editar
                                </a>
                                <form action="/cliente/{{$item->id}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger">
                                        <i class="fas fa-times"></i>  Eliminar
                                    </button> 
                                </form>                                
                            </div>
                        </div>
                    </div>
                </div>    
            @endforeach            
        </div>
        {{ $datos->links() }}
    </div>  
    @endauth    
@endsection

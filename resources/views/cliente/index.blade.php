@extends('layouts.app')
@section('content')
    @auth
    <div class="container">            
        <!-- Boton para activar el modal-->
        <button type="button" class="btn btn-primary border-dark" data-toggle="modal" data-target="#exampleModal">
            Nuevo Cliente
        </button>
        <!-- Modal -->
        <div class="modal fade rounded" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="exampleModalLabel">Crear Nuevo Cliente</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="/cliente">
                            @csrf		
                            <div class="form-group">
                                <label for="name">Ingrese el nombre del cliente</label>
                                <input type="text" name="nombre" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="address">Ingrese la direccion del cliente</label>
                                <input type="text" name="direccion" id="address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="cel">Ingrese el telefono del cliente</label>
                                <input type="text" name="telefono" id="cel" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exp">Ingrese la experiencia del cliente</label>
                                <input type="text" name="experiencia" id="exp" class="form-control">			
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Registrar Cliente</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- muestra las card -->                
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
                        </div>
                    </div>
                </div>    
            @endforeach            
        </div>
    </div>
    
    @endauth    
@endsection

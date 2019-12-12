@extends('layouts.app')

@section('content')
<br>
<div class="container">    
     <!-- Boton para activar el modal-->
    <button type="button" class="btn btn-primary border-dark" data-toggle="modal" data-target="#exampleModal">
        Nuevo Tripulante    
    </button>
    <div class="modal fade rounded" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Crear Nueva Tripulacion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/tripulacion" method="POST">
                        @csrf                        
                        <div class="form-group">
                            <label for="">Ingrese el nombre : </label>
                            <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Ingrese la direccion : </label>
                            <input type="text" class="form-control" name="direccion" value="{{ old('direccion') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Ingrese el telefono : </label>
                            <input type="text" class="form-control" name="telefono" value="{{ old('telefono') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Ingrese el numero de horas : </label>
                            <input type="text" class="form-control" name="numero_hora" value="{{ old('numero_hora') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Ingrese el valor en horas : </label>
                            <input type="text" class="form-control" name="valor_hora" value="{{ old('valor_hora') }}">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Registrar tripulante</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><br><br>
    <div class="row">
        @foreach ($datos as $item)
            <div class="col-md-4 col-sm-6 mt-3">
                <div class="card">
                    <div class="card-header">
                        {{ $item->nombre }}
                    </div>
                    <div class="card-body">
                        Direccion : {{ $item->direccion }}
                        <hr>
                        Telefono : {{ $item->telefono }}
                        <hr>
                        Por hora : {{ $item->num_horas }}
                        <hr>
                        Valor por Hora  : {{ $item->valor_horas }}
                    </div>
                    <div class="card-footer bg-info">
                        <div class="d-flex justify-content-between ">
                            <a href="/tripulacion/{{$item->id}}/edit" class="btn btn-success border border-dark">
                                <i class="fas fa-edit"></i> Editar
                            </a>
                            <form action="/tripulacion/{{$item->id}}" method="POST">
                                @method('delete')
                                @csrf
                                <button 
                                class="btn btn-danger border border-dark"
                                onclick="return confirm('Esta seguro de eliminar este registro?')"
                                >
                                    <i class="fas fa-times"></i>  Eliminar
                                </button> 
                            </form>                                
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
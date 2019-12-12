@extends('layouts.app')

@section('content')
<br>
<div class="container">    
    <form action="/tripulacion/{{$tripulacion->id}}" method="POST">
        @csrf                        
        @method('PUT')
        <p class="display-4">Actualizar Tripulante</p>
        <hr>
        <div class="form-group">
            <label for="">Ingrese el nombre : </label>
            <input type="text" class="form-control" name="nombre" value="{{ $tripulacion->nombre }}">
        </div>
        <div class="form-group">
            <label for="">Ingrese la direccion : </label>
            <input type="text" class="form-control" name="direccion" value="{{ $tripulacion->direccion }}">
        </div>
        <div class="form-group">
            <label for="">Ingrese el telefono : </label>
            <input type="text" class="form-control" name="telefono" value="{{ $tripulacion->telefono }}">
        </div>
        <div class="form-group">
            <label for="">Ingrese el numero de horas : </label>
            <input type="text" class="form-control" name="numero_hora" value="{{ $tripulacion->num_horas }}">
        </div>
        <div class="form-group">
            <label for="">Ingrese el valor en horas : </label>
            <input type="text" class="form-control" name="valor_hora" value="{{ $tripulacion->valor_horas }}">
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Actualizar tripulante</button>
        </div>
    </form>

  
</div>
@endsection
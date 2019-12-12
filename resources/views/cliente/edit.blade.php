@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Modificar cliente</h2>    
        <hr>
        <form method="POST" action="/cliente/{{$cliente->id}}">
            @method('PUT')
            @csrf		
            <div class="form-group">
                <label for="name">Ingrese el nombre del cliente</label>
                <input type="text" name="nombre" class="form-control" value="{{ $cliente->nombre }}">
            </div>
            <div class="form-group">
                <label for="address">Ingrese la direccion del cliente</label>
                <input type="text" name="direccion"  class="form-control" value="{{ $cliente->direccion }}">
            </div>
            <div class="form-group">
                <label for="cel">Ingrese el telefono del cliente</label>
                <input type="text" name="telefono" class="form-control" value="{{ $cliente->telefono }}">
            </div>
            <div class="form-group">
                <label for="exp">Ingrese la experiencia del cliente</label>
                <input type="text" name="experiencia" class="form-control" value="{{ $cliente->experiencia }}">			
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Actualizar Cliente</button>
            </div>
        </form> 
    </div>
@endsection
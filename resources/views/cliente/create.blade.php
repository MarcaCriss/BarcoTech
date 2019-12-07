@extends('layouts.app')

@section('content')
@auth
    <div class="container mt-2">
        <h2>Registro de cliente</h2>    
        <hr>
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
@endauth
@endsection
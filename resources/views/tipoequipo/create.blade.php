@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/tipoequipo" method="POST">
        @csrf    
        <div class="form-group">
            <label for="dueño">Nombre del dueño del equipo</label>
            <input type="text" name="nombre" id="dueño">
            <button type="submit">Registrar Dueño</button>
        </div>
    </form>
</div>
@endsection
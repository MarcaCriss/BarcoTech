@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/equipo" method="POST" class=" p-3 bg-white border border-dark shadow-lg mb-5 rounded text-dark">
        @csrf
        <div class="display-4 text-center">
            Registro de equipo del barco
        </div>
        <hr>
        <div class="form-group">
            <label for="">Nombre del dueño del equipo : </label>
            <input type="text" name="nombre_dueño" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nombre del equipo : </label>
            <input type="text" name="nombre_equipo" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Cantidad del equipo : </label>
            <input type="text" name="cantidad" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Guardar Registro</button>
        </div>
    </form>
</div>
@endsection
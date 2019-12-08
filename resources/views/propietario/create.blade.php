@extends('layouts.app')
@section('content')
<div class="container bg-primary shadow rounded mt-2 text-white p-5">
    <form action="/propietario" method="POST">
        <p class="display-4 text-white">Registro de Propietario</p>
        <hr>
        @csrf
        <div class="form-group">
            <label for="">Nombre del Propietario : </label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="form-group">
            <label for="">Valor del bote : </label>
            <input type="text" class="form-control" name="valor_bote">
        </div>
        <div class="form-group">
            <label for="">Tamaño : </label>
            <input type="text" class="form-control" name="tamaño">
        </div>
        <div class="form-group">
            <label for="">Telefono del Propietario : </label>
            <input type="text" class="form-control" name="telefono">
        </div><br>
        <button class="btn btn-success text-white">Guardar Registro</button>
    </form>
</div>
@endsection
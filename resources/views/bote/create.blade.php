@extends('layouts.app')

@section('content')
    <div class="container mt-3">        
        <form action="/bote" class="border rounded shadow bg-info text-dark p-5" method="POST">
            @csrf
            <p class="display-3">Registro de Barco</p>
            <hr>
            <div class="form-group">
                <label for="">Seleccione un equipo : </label>
                <select name="equipo" class="custom-select">
                    @foreach($equipo as $item)
                        <option value="{{ $item->id }}">{{ $item->tipoequipo->dueño }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Seleccione un propietario : </label>
                <select name="propietario" class="custom-select">
                    @foreach($propietario as $item)
                        <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                    @endforeach
                </select>
            </div><br>
            <button class="btn btn-success border border-dark">Guardar Barco</button>
        </form>
    </div>    
@endsection
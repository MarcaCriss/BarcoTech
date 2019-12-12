@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="/viaje" method="POST">
            @csrf
            <p class="display-4">Registro de Viaje</p>
            <div class="form-group">
                <label for="">Elija un cliente : </label>
                <select name="cliente" class="custom-select">
                    @foreach ($cliente as $item)
                        <option value="{{$item->id}}">{{ $item->nombre }}</option>                        
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Elija un tripulante : </label>
                <select name="tripulante" class="custom-select">
                    @foreach ($tripulacion as $item)
                        <option value="{{$item->id}}">{{ $item->nombre }}</option>                        
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Costo de viaje : </label>
                <input type="text" name="costo" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Salida : </label>
                <input type="text" name="salida" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Destino : </label>
                <input type="text" name="destino" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Guardar Registro</button>
            </div>
        </form>
    </div>
@endsection
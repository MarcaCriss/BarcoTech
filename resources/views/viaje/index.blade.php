@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <p class="display-4">Lista de Viaje</p>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Cliente</th>
                    <th>Tripulante</th>
                    <th>Costo del viaje</th>
                    <th>Salida</th>
                    <th>Destino</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viaje as $item)
                    <tr>
                        <th>{{ $item->id }}</th>
                        <th>{{ $item->cliente->nombre }}</th>
                        <th>{{ $item->tripulante->nombre }}</th>
                        <th>{{ $item->costo_viaje }}</th>
                        <th>{{ $item->salida }}</th>
                        <th>{{ $item->destino }}</th>
                    </tr>                    
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
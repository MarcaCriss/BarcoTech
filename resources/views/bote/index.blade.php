@extends('layouts.app')

@section('content')
    <div class="container bg-white shadow rounded border mt-5 m-5">
        <p class="display-4">Lista de Barcos</p>        
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Propietario</th>
                    <th>Equipo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $item)
                    <tr>
                        <th>{{ $item->id }}</th>
                        <th>{{ $item->propietario->nombre }}</th>
                        <th>{{ $item->equipo->nombre }}</th>
                    </tr>                    
                @endforeach
            </tbody>
        </table>
        {{ $datos->links() }}
    </div>
@endsection
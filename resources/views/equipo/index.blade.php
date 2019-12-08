@extends('layouts.app')

@section('content')
<div class="container">
    <p class="display-4 text-center">Lista de equipos</p>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Dueño</th>
                <th scope="col">Nombre del equipo</th>
                <th scope="col">Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->tipoequipo->dueño }}</td>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->cantidad }}</td>
                </tr>                            
            @endforeach
        </tbody>
    </table>
    {{$datos->links()}}
</div>
@endsection
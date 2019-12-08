@extends('layouts.app')
@section('content')
    <div class="container">
        <p class="display-4">Lista de Propietarios</p>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Tamaño</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $item)
                    <tr>
                        <th>{{ $item->id }}</th>
                        <th>{{ $item->nombre }}</th>
                        <th>{{ $item->tamaño }}</th>
                        <th>{{ $item->telefono }}</th>
                    </tr>                                        
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
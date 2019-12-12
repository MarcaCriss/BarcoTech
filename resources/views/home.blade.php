@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <h1 class="bg-white p-3 border rounded shadow">
        Bienvenido a la Administracion del Sistema Sr {{ Auth::user()->name }}
    </h1>
</div>
@endsection

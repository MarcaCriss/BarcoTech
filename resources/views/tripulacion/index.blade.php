@extends('layouts.app')

@section('content')
<div class="container">    
     <!-- Boton para activar el modal-->
    <button type="button" class="btn btn-primary border-dark" data-toggle="modal" data-target="#exampleModal">
        Nuevo Tripulante    
    </button>
    <div class="modal fade rounded" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Crear Nueva Tripulacion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/tripulacion" method="POST">
                        @csrf                        
                        <div class="form-group">
                            <label for="">Ingrese el nombre : </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Ingrese la direccion : </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group" class="form-control">
                            <label for="">Ingrese el telefono : </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group" class="form-control">
                            <label for="">Ingrese el numero de horas : </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Ingrese el valor en horas : </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Registrar tripulante</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
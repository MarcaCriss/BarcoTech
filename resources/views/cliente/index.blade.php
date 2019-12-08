@extends('layouts.app')
@section('content')
    @auth
        <div class="container mt-2">                                    
            <div class="row">                
                @foreach ($datos as $item)             
                    <div class="col-sm-5 col-lg-3 col-md-4 mt-3">
                        <div class="card border-0">
                            <div class="card-header bg-dark text-white">
                                {{ $item->nombre }}
                            </div>
                            <div class="card-body bg-white">
                                {{ $item->direccion }} <br>
                                <hr>
                                {{ $item->telefono }} <br>
                                <hr>
                                {{ $item->experiencia }}
                            </div>
                        </div>
                    </div>    
                @endforeach            
            </div>
            {{ $datos->links() }}
        </div>  
    @endauth    
@endsection

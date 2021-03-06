<?php

namespace App\Http\Controllers;

use App\viaje;
use App\cliente;
use App\tripulacion;
use Illuminate\Http\Request;

class ViajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viaje = viaje::all();
        return view('viaje.index', compact('viaje'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente = cliente::all();
        $tripulacion = tripulacion::all();
        return view('viaje.create', compact('cliente', 'tripulacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $viaje = new viaje();
        $viaje->id_cliente = $request->cliente;
        $viaje->id_tripulante = $request->tripulante;
        $viaje->costo_viaje = $request->costo;
        $viaje->salida = $request->salida;
        $viaje->destino = $request->destino;
        $viaje->save();
        return redirect('/viaje');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\viaje  $viaje
     * @return \Illuminate\Http\Response
     */
    public function show(viaje $viaje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\viaje  $viaje
     * @return \Illuminate\Http\Response
     */
    public function edit(viaje $viaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\viaje  $viaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, viaje $viaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\viaje  $viaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(viaje $viaje)
    {
        //
    }
}

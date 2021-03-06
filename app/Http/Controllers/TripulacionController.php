<?php

namespace App\Http\Controllers;

use App\tripulacion;
use Illuminate\Http\Request;
use App\Http\Requests\CreateRequestTripulacion;

class TripulacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = tripulacion::all();
        return view('tripulacion.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequestTripulacion $request)
    {
        $datos = new tripulacion();
        $datos->nombre = $request->nombre;
        $datos->direccion = $request->direccion;
        $datos->telefono = $request->telefono;
        $datos->num_horas = $request->numero_hora;
        $datos->valor_horas = $request->valor_hora;
        $datos->save();
        toast('Tripulante creado exitosamente','success'); 
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tripulacion  $tripulacion
     * @return \Illuminate\Http\Response
     */
    public function show(tripulacion $tripulacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tripulacion  $tripulacion
     * @return \Illuminate\Http\Response
     */
    public function edit(tripulacion $tripulacion)
    {
        return view('tripulacion.edit', compact('tripulacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tripulacion  $tripulacion
     * @return \Illuminate\Http\Response
     */
    public function update(CreateRequestTripulacion $request, tripulacion $tripulacion)
    {
        $tripulacion->nombre = $request->nombre;
        $tripulacion->direccion = $request->direccion;
        $tripulacion->telefono = $request->telefono;
        $tripulacion->num_horas = $request->numero_hora;
        $tripulacion->valor_horas = $request->valor_hora;
        $tripulacion->save();
        toast('Tripulante actualizado exitosamente','success');         
        return redirect('/tripulacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tripulacion  $tripulacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(tripulacion $tripulacion)
    {
        $tripulacion->delete();
        return redirect()->back();
    }
}

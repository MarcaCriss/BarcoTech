<?php

namespace App\Http\Controllers;

use App\tripulacion;
use Illuminate\Http\Request;

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
        return view('tripulacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = new tripulacion();
        $datos->nombre = $request->nombre;
        $datos->nombre = $request->nombre;
        $datos->nombre = $request->nombre;
        $datos->nombre = $request->nombre;
        $datos->nombre = $request->nombre;
        $datos->save();
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tripulacion  $tripulacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tripulacion $tripulacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tripulacion  $tripulacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(tripulacion $tripulacion)
    {
        //
    }
}

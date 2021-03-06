<?php

namespace App\Http\Controllers;

use App\propietario;
use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = propietario::paginate(10);
        return view('propietario.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('propietario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = new propietario();
        $datos->nombre = $request->nombre;
        $datos->valor_bote = $request->valor_bote;
        $datos->tamaño = $request->tamaño;
        $datos->telefono = $request->telefono;
        $datos->save();
        toast('Propietario creado exitosamente','success'); 
        return redirect('/propietario');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\propietario  $propietario
     * @return \Illuminate\Http\Response
     */
    public function show(propietario $propietario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\propietario  $propietario
     * @return \Illuminate\Http\Response
     */
    public function edit(propietario $propietario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\propietario  $propietario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, propietario $propietario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\propietario  $propietario
     * @return \Illuminate\Http\Response
     */
    public function destroy(propietario $propietario)
    {
        //
    }
}

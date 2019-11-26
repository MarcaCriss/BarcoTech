<?php

namespace App\Http\Controllers;

use App\tipoequipo;
use Illuminate\Http\Request;

class TipoequipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipoequipo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = new tipoequipo();
        $datos->dueño = $request->nombre;
        $datos->save();
        return "dueño barco";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tipoequipo  $tipoequipo
     * @return \Illuminate\Http\Response
     */
    public function show(tipoequipo $tipoequipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tipoequipo  $tipoequipo
     * @return \Illuminate\Http\Response
     */
    public function edit(tipoequipo $tipoequipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tipoequipo  $tipoequipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tipoequipo $tipoequipo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tipoequipo  $tipoequipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipoequipo $tipoequipo)
    {
        //
    }
}

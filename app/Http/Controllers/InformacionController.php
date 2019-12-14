<?php

namespace App\Http\Controllers;

use App\informacion;
use Illuminate\Http\Request;

class InformacionController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        Mail::to('marcacristian70@gmail.com')->send(new MessageReceived($request));
        $datos = new informacion();
        $datos->nombre  =$request->nombre;
        $datos->correo  =$request->direccion;
        $datos->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\informacion  $informacion
     * @return \Illuminate\Http\Response
     */
    public function show(informacion $informacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\informacion  $informacion
     * @return \Illuminate\Http\Response
     */
    public function edit(informacion $informacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\informacion  $informacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, informacion $informacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\informacion  $informacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(informacion $informacion)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\bote;
use App\equipo;
use App\propietario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipo = equipo::all();
        $propietario = propietario::all();
        return view('barco.create', compact('equipo','propietario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bote  $bote
     * @return \Illuminate\Http\Response
     */
    public function show(bote $bote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bote  $bote
     * @return \Illuminate\Http\Response
     */
    public function edit(bote $bote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bote  $bote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bote $bote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bote  $bote
     * @return \Illuminate\Http\Response
     */
    public function destroy(bote $bote)
    {
        //
    }
}

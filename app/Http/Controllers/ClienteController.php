<?php

namespace App\Http\Controllers;

use App\cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\CreateRequestCliente;
use Illuminate\Support\Facades\DB;



class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = cliente::paginate(8);                  
        return view('cliente.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
             
        return view('cliente.create');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $datos = DB::table('clientes')->where('nombre', 'like', '%'.$search.'%')->paginate(5);
        return view('cliente.index', compact('datos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequestCliente $request)
    {
        $datos = new cliente();
        $datos->nombre = $request->nombre;
        $datos->direccion = $request->direccion;
        $datos->telefono = $request->telefono;
        $datos->experiencia = $request->experiencia;
        $datos->save();                
        toast('Cliente creado exitosamente','primary'); 
        return redirect('/cliente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(cliente $cliente)
    {        
        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(CreateRequestCliente $request, cliente $cliente)
    {        
        $cliente->nombre = $request->nombre;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->experiencia = $request->experiencia;
        $cliente->save();
        toast('Cliente actualizado exitosamente','success'); 
        return redirect('/cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(cliente $cliente)
    {
        $cliente->delete();
        toast('Cliente eliminado exitosamente','danger'); 
        return redirect('/cliente');
    }
}

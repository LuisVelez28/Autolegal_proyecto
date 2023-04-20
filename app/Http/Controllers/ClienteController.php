<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.', compact('clientes'));//revisar que pagina se va usar para listar los clientes
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente= new Cliente();
        $cliente->nombre=$request->nombre;
        $cliente->cedula=$request->cedula;
        $cliente->telefono=$request->telefono;
        $cliente->save();
        return redirect()->route('clientes.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        $cliente= Cliente::find($cliente->id);
        return view('clientes.', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        $cliente= Cliente::find($cliente->id);
        return view('clientes.', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $cliente= Cliente::find($cliente->id);//revisar con documentacion actualizada
        $cliente->nombre=$request->nombre;
        $cliente->cedula=$request->cedula;
        $cliente->telefono=$request->telefono;
        $cliente->save();
        return redirect()->route('clientes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente= Cliente::find($cliente->id);//revisar con documentacion actualizada
        $cliente->delete();
        return redirect()->route('clientes.');

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Tipo_vehiculo;
use Illuminate\Http\Request;

class TipoVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos_vehiculo = Tipo_vehiculo::all();
        return view('tipo_vehiculo.', compact('tipos_vehiculo'));
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
        $tipo_vehiculo= new Tipo_vehiculo();
        $tipo_vehiculo->nombre=$request->nombre;
        $tipo_vehiculo->descripcion=$request->descripcion;
        $tipo_vehiculo->save();
        return redirect()->route('tipo_vehiculo.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tipo_vehiculo $tipo_vehiculo)
    {
        $tipo_vehiculo= Tipo_vehiculo::find($tipo_vehiculo->id);
        return view('tipo_vehiculo.', compact('tipo_vehiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tipo_vehiculo $tipo_vehiculo)
    {
        $tipo_vehiculo= Tipo_vehiculo::find($tipo_vehiculo->id);
        return view('tipo_vehiculo.', compact('tipo_vehiculo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tipo_vehiculo $tipo_vehiculo)
    {
        $tipo_vehiculo= Tipo_vehiculo::find($tipo_vehiculo->id);
        $tipo_vehiculo->nombre=$request->nombre;
        $tipo_vehiculo->descripcion=$request->descripcion;
        $tipo_vehiculo->save();
        return redirect()->route('tipo_vehiculo.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tipo_vehiculo $tipo_vehiculo)
    {
        $tipo_vehiculo= Tipo_vehiculo::find($tipo_vehiculo->id);
        $tipo_vehiculo->delete();
        return redirect()->route('tipo_vehiculo.');
    }
}

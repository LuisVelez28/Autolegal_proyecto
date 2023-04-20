<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculos= Vehiculo::all();
        return view('vehiculo.',compact('vehiculos'));
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
        $vehiculo= new Vehiculo();
        $vehiculo->placa=$request->placa;
        $vehiculo->modelo=$request->modelo;
        $vehiculo->marca=$request->marca;
        //es calculado
        // $vehiculo->capacidad=$request->capacidad;
        //es automatico
        //$vehiculo->estado=$request->estado;
        $vehiculo->id_tipo_vehiculo=$request->id_tipo_vehiculo;
        $vehiculo->save();
        return redirect()->route('vehiculo.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehiculo $vehiculo)
    {
        $vehiculo= Vehiculo::find($vehiculo->id);
        return view('vehiculo.',compact('vehiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehiculo $vehiculo)
    {
        $vehiculo= Vehiculo::find($vehiculo->id);
        return view('vehiculo.',compact('vehiculo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehiculo $vehiculo)
    {
        $vehiculo= Vehiculo::find($vehiculo->id);
        $vehiculo->placa=$request->placa;
        $vehiculo->modelo=$request->modelo;
        $vehiculo->marca=$request->marca;
        //es calculado
        // $vehiculo->capacidad=$request->capacidad;
        //es automatico
        //$vehiculo->estado=$request->estado;
        $vehiculo->id_tipo_vehiculo=$request->id_tipo_vehiculo;
        $vehiculo->save();
        return redirect()->route('vehiculo.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo= Vehiculo::find($vehiculo->id);
        $vehiculo->delete();
        return redirect()->route('vehiculo.');
    }
}

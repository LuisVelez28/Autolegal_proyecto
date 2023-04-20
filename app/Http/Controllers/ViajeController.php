<?php

namespace App\Http\Controllers;

use App\Models\Viaje;
use Illuminate\Http\Request;

class ViajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viajes= Viaje::all();
        return view('viajes.', compact('viajes'));
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
        $viaje= new Viaje();
        $viaje->id_ruta=$request->id_ruta;
        $viaje->id_conductor=$request->id_conductor;
        $viaje->id_vehiculo=$request->id_vehiculo;
        $viaje->fecha_salida=$request->fecha_salida;
        $viaje->fecha_llegada=$request->fecha_llegada;
        //no es un campo que se ingrese, mas bien seria calculado
        //$viaje->cupos_disponibles=$request->cupos_disponibles;
        $viaje->costo=$request->costo;
        $viaje->save();
        return redirect()->route('viajes.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Viaje $viaje)
    {
        $viaje= Viaje::find($viaje->id);
        return view('viajes.', compact('viaje'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Viaje $viaje)
    {
        $viaje= Viaje::find($viaje->id);
        return view('viajes.', compact('viaje'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Viaje $viaje)
    {
        $viaje= Viaje::find($viaje->id);
        $viaje->id_ruta=$request->id_ruta;
        $viaje->id_conductor=$request->id_conductor;
        $viaje->id_vehiculo=$request->id_vehiculo;
        $viaje->fecha_salida=$request->fecha_salida;
        $viaje->fecha_llegada=$request->fecha_llegada;
        //el cambio automatizado se haria por este metodo
        //$viaje->cupos_disponibles=$request->cupos_disponibles;
        $viaje->costo=$request->costo;
        $viaje->save();
        return redirect()->route('viajes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Viaje $viaje)
    {
        $viaje= Viaje::find($viaje->id);
        $viaje->delete();
        return redirect()->route('viajes.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Parada;
use Illuminate\Http\Request;

class ParadaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paradas=Parada::all();
        return view('paradas.',compact('paradas'));
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
        $parada= new Parada();
        $parada->id_ruta=$request->id_ruta;
        $parada->nombre=$request->nombre;
        $parada->posicion=$request->posicion;
        $parada->save();
        return redirect()->route('paradas.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Parada $parada)
    {
        $parada= Parada::find($parada->id);
        return view('paradas.',compact('parada'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Parada $parada)
    {
        $parada= Parada::find($parada->id);
        return view('paradas.',compact('parada'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Parada $parada)
    {
        $parada= Parada::find($parada->id);
        $parada->id_ruta=$request->id_ruta;
        $parada->nombre=$request->nombre;
        $parada->posicion=$request->posicion;
        $parada->save();
        return redirect()->route('paradas.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parada $parada)
    {
        $parada->delete();
        return redirect()->route('paradas.');
    }
}

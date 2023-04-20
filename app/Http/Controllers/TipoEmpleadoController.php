<?php

namespace App\Http\Controllers;

use App\Models\Tipo_empleado;
use Illuminate\Http\Request;

class TipoEmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos_empleado= Tipo_empleado::all();
        return view('tipo_empleado.', compact('tipos_empleado'));
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
        $tipo_empleado= new Tipo_empleado();
        $tipo_empleado->nombre=$request->nombre;
        $tipo_empleado->descripcion=$request->descripcion;
        $tipo_empleado->save();
        return redirect()->route('tipo_empleado.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tipo_empleado $tipo_empleado)
    {
        $tipo_empleado= Tipo_empleado::find($tipo_empleado->id);
        return view('tipo_empleado.', compact('tipo_empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tipo_empleado $tipo_empleado)
    {
        $tipo_empleado= Tipo_empleado::find($tipo_empleado->id);
        return view('tipo_empleado.', compact('tipo_empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tipo_empleado $tipo_empleado)
    {
        $tipo_empleado->nombre=$request->nombre;
        $tipo_empleado->descripcion=$request->descripcion;
        $tipo_empleado->save();
        return redirect()->route('tipo_empleado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tipo_empleado $tipo_empleado)
    {
        $tipo_empleado->delete();
        return redirect()->route('tipo_empleado.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios= User::all();
        return view('usuarios.', compact('usuarios'));
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
        $usuario=new User();
        $usuario->id_cliente=$request->id_cliente;
        $usuario->id_empleado=$request->id_empleado;
        $usuario->username=$request->username;
        //como se protege el de password
        $usuario->email=$request->email;
        $usuario->password=Hash::make($request->password);
        //esta campo es generado automaticamente
        $usuario->estado=$request->estado;
        $usuario->id_rol_usuario=$request->id_rol_usuario;
        $usuario->save();
        return redirect()->route('usuarios.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $usuario)
    {
        $usuario= User::find($usuario->id);
        return view('usuarios.', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $usuario)
    {
        $usuario= User::find($usuario->id);
        return view('usuarios.', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $usuario)
    {
        $usuario= User::find($usuario->id);
        $usuario->id_persona=$request->id_persona;
        $usuario->username=$request->username;
        //como se protege el de password
        $usuario->email=$request->email;
        $usuario->password=Hash::make($request->password);
        //esta campo es generado automaticamente
        //$usuario->estado=$request->estado;
        $usuario->id_rol_usuario=$request->id_rol_usuario;
        $usuario->save();
        return redirect()->route('usuarios.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $usuario)
    {
        $usuario= User::find($usuario->id);
        $usuario->delete();
        return redirect()->route('usuarios.');
    }
}

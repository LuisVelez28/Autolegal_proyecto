<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

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
        //$usuario->estado=$request->estado;
        $usuario->id_rol_usuario=$request->id_rol_usuario;
        $usuario->save();

        Auth::login($usuario);

    }

}

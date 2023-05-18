<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request){
        /*use a dd() to show email and password of request*/


        $credentials= $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        $credentials=$request->only('email', 'password');

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            //dd($request);
            if (auth()->user()->hasRole("Admin")) {
                return redirect()->intended('CuentaAdmin');
            } elseif (auth()->user()->hasRole("Cliente")) {
                return redirect()->intended('CuentaCliente');
            } else{
                echo("error");
                // return redirect()->intended('CuentaCliente');
            }
            
        }

        return back()->withErrors([
            'email' => 'Las credenciales ingresadas son incorrectas.',
        ])->onlyInput('email');

    }

    public function registro(Request $request){
        
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

        //genera errores
        // Auth::login($usuario);

        return redirect()->route('ingreso');

    }

    public function logout(Request $request){
        
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('ingreso');

    }

}

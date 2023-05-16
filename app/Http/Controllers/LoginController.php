<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request){
        /*use a dd() to show email and password of request*/
        dd($request->all());
        

        $credentials= $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        dd($credentials);
        /*
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('cuenta_admin.index');
        }

        return back()->withErrors([
            'email' => 'Las credenciales ingresadas son incorrectas.',
        ])->onlyInput('email');*/

    }

}

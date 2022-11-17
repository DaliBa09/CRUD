<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string']
        ]);
        if(!Auth::attempt($credentials, $request->boolean('remember'))){
            throw ValidationValidationException::withMessages([
                'email' => 'You Shal Not Pass!!!!!'
            ]);
        }
        $request->session()->regenerate();

        return redirect()->intended('inicio')->with('status', 'Inicio de sesion correcto');
    }

    public function destroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('login')->with('status', 'Bye bye');
    }
}

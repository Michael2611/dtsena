<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function inicioSesion(Request $request)
    {
        $credentials = request()->only('email', 'password');
        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            return redirect()->intended(route('canal'));
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
    }

    public function registro()
    {
        return view('auth.registro');
    }

    public function registroUsuario(Request $request)
    {

        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
            'confirm-pass' => ['required'],
        ]);

        $usuario = new User();
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');

        if ($request->input('password') == $request->input('confirm-pass')) {
            $pass = Hash::make($request->input('password'));
            $usuario->password = $pass;
            $usuario->save();
            Auth::login($usuario);
            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function cerrar_sesion(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/login');
    }
}

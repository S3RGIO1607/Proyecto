<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    /**
     * A dónde redirigir después de login exitoso
     */
    protected function redirectTo()
{
    $user = auth()->user();

    switch ($user->tipo_usuario) {
        case 'Administrador':
            return route('perfil'); // 👈 aquí va el perfil
        case 'Sup_Bodega':
            return route('sup-bodega');
        case 'Gerente':
            return route('gerente');
        case 'Cliente':
            return route('cliente');
        default:
            return '/';
    }
}

    /**
     * Campo personalizado para login (por defecto es email)
     */
    public function username()
    {
        return 'numero_documento';
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Mostrar formulario de login
     */
    public function showLoginForm()
    {
        return view('inicio'); // 👈 aquí va tu inicio.blade.php
    }

    /**
     * Procesar login
     */
    public function login(Request $request)
    {
        // Validación de campos
        $request->validate([
            'numero_documento' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('numero_documento', 'password');

            if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect($this->redirectTo()); // <- cambio aquí
        }

        return back()->withErrors([
            'numero_documento' => 'Credenciales incorrectas.',
        ])->withInput($request->only('numero_documento'));
    }

    /**
     * Cerrar sesión
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
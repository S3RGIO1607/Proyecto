<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistroClienteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'numero_documento' => 'required|numeric|unique:usuario,numero_documento',
            'nombre' => 'required|string|max:50',
            'correo' => 'required|email|unique:usuario,correo',
            'contrasena' => 'required|string|min:6',
            'direccion' => 'required|string|max:50',
            'telefono' => 'required|numeric',
        ]);

        Usuarios::create([
            'numero_documento' => $request->numero_documento,
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'contrasena' => Hash::make($request->contrasena),
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'tipo_usuario' => 'Cliente', // 🔹 siempre será Cliente
            'estado' => 'A', // activo por defecto
            'registrado_por' => null, // como se registró solo, no hay admin
        ]);

        return redirect('/inicio')->with('success', 'Registro exitoso, ahora puedes iniciar sesión');
    }
}
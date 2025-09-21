<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    /**
     * Mostrar todos los usuarios.
     */
    public function index()
    {
        $usuarios = Usuarios::with('registradoPor')->get(); // incluye relación
        return view('Usuarios.index', compact('usuarios'));
    }

    /**
     * Mostrar formulario de creación de usuario.
     */
    public function create()
    {
        return view('Usuarios.create');
    }

    /**
     * Guardar un nuevo usuario.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'correo' => 'required|email|unique:usuario,correo',
            'contrasena' => 'required|min:6',
            'tipo_usuario' => 'required|in:Administrador,Sup_Bodega,Gerente',
        ]);

        Usuarios::create([
            'numero_documento' => $request->numero_documento,
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'contrasena' => Hash::make($request->contrasena),
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'nivel_educativo' => $request->nivel_educativo,
            'referencia_personal' => $request->referencia_personal,
            'telefono_referencia_personal' => $request->telefono_referencia_personal,
            'eps' => $request->eps,
            'tipo_usuario' => $request->tipo_usuario,
            'estado' => $request->estado === 'activo' ? 'A' : 'I',
            'registrado_por' => Auth::id(),
        ]);

        return redirect()->route('Usuarios.index')->with('success', 'Usuario creado correctamente');
    }

    /**
     * Mostrar un usuario específico.
     */
    public function show($id)
    {
        $usuario = Usuarios::with('registradoPor')->findOrFail($id);
        return view('Usuarios.show', compact('usuario'));
    }

    /**
     * Mostrar formulario de edición de usuario.
     */
    public function edit($id)
    {
        $usuario = Usuarios::findOrFail($id);
        return view('Usuarios.edit', compact('usuario'));
    }

    /**
     * Actualizar un usuario.
     */
    public function update(Request $request, $id)
{
    $usuario = Usuarios::findOrFail($id);

    $request->validate([
        'nombre' => 'required|string|max:50',
        'correo' => 'required|email|unique:usuario,correo,' . $usuario->id_usuario . ',id_usuario',
        'tipo_usuario' => 'required|in:Administrador,Sup_Bodega,Gerente',
    ]);

    $data = $request->all();

    // Si el campo contraseña viene vacío, no lo actualizamos
    if ($request->filled('contrasena')) {
        $data['contrasena'] = Hash::make($request->contrasena);
    } else {
        unset($data['contrasena']);
    }

    // 🔹 Convertir "activo/inactivo" a "A/I"
    if (isset($data['estado'])) {
        $data['estado'] = $data['estado'] === 'activo' ? 'A' : 'I';
    }

    $usuario->update($data);

    return redirect()->route('Usuarios.index')->with('success', 'Usuario actualizado correctamente');
}

    /**
     * Eliminar un usuario.
     */
    public function destroy($id)
    {
        $usuario = Usuarios::findOrFail($id);
        $usuario->delete();

        return redirect()->route('Usuarios.index')->with('success', 'Usuario eliminado correctamente');
    }

    /**
     * Mostrar perfil del usuario autenticado (para Administrador)
     */
    public function perfil()
    {
        $usuario = auth()->user(); // obtiene el usuario logueado
        return view('perfil', compact('usuario'));
    }
}
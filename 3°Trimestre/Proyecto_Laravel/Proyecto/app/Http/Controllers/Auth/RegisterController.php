<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Usuarios; // 👈 Asegúrate que tu modelo se llame Usuarios
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Después del registro, redirige según el tipo de usuario.
     */
    protected function redirectTo()
    {
        $user = auth()->user();

        switch ($user->tipo_usuario) {
            case 'Administrador':
                return '/index'; 
            case 'Sup_Bodega':
                return '/'; 
            case 'Gerente':
                return '/';
            case 'Cliente':
                return '/'; 
            default:
                return '/'; // fallback
        }
    }

    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Validación de datos de registro
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'documento'   => ['required', 'numeric'],
            'nombre'      => ['required', 'string', 'max:50'],
            'correo'      => ['required', 'string', 'email', 'max:50', 'unique:usuarios,correo'],
            'contrasena'  => ['required', 'string', 'min:8', 'confirmed'],
            'direccion'   => ['nullable', 'string', 'max:50'],
            'telefono'    => ['nullable', 'numeric'],
            'tipo_usuario'=> ['nullable', 'string'], 
        ]);
    }

    /**
     * Crear usuario en la BD
     */
    protected function create(array $data)
    {
        return Usuarios::create([
            'numero_documento' => $data['documento'],
            'nombre'           => $data['nombre'],
            'correo'           => $data['correo'],
            'contrasena'       => Hash::make($data['contrasena']),
            'direccion'        => $data['direccion'] ?? null,
            'telefono'         => $data['telefono'] ?? null,
            'tipo_usuario'     => $data['tipo_usuario'] ?? 'cliente',
        ]);
    }
}
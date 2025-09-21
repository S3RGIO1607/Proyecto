@extends('layouts.app2')

@section('content')
<div class="container">
    <h2>Detalles del Usuario</h2>

    <ul>
        <li><strong>ID:</strong> {{ $usuario->id_usuario }}</li>
        <li><strong>Nombre:</strong> {{ $usuario->nombre }}</li>
        <li><strong>Correo:</strong> {{ $usuario->correo }}</li>
        <li><strong>Teléfono:</strong> {{ $usuario->telefono }}</li>
        <li><strong>Dirección:</strong> {{ $usuario->direccion }}</li>
        <li><strong>EPS:</strong> {{ $usuario->eps }}</li>
        <li><strong>Tipo de usuario:</strong> {{ $usuario->tipo_usuario }}</li>
        <li><strong>Estado:</strong> {{ $usuario->estado }}</li>
        <li><strong>Registrado por:</strong> {{ $usuario->registrado_por }}</li>
    </ul>

    <div class="mt-3">
        <!-- Botón de editar -->
        <a href="{{ route('Usuarios.edit', $usuario->id_usuario) }}" class="btn btn-warning">
            Editar
        </a>

        <!-- Botón de eliminar -->
        <form action="{{ route('Usuarios.destroy', $usuario->id_usuario) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"
                onclick="return confirm('¿Seguro que quieres eliminar este usuario?')">
                Eliminar
            </button>
        </form>
    </div>


    <a href="{{ route('Usuarios.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
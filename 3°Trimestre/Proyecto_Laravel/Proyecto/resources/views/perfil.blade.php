@extends('layouts.app2')
@section('content')
    <h1>Mi Perfil</h1>

    <table class="table">
        <tr>
            <th>ID:</th>
            <td>{{ $usuario->id_usuario }}</td>
        </tr>
        <tr>
            <th>Nombre:</th>
            <td>{{ $usuario->nombre }}</td>
        </tr>
        <tr>
            <th>Correo:</th>
            <td>{{ $usuario->correo }}</td>
        </tr>
        <tr>
            <th>Teléfono:</th>
            <td>{{ $usuario->telefono }}</td>
        </tr>
        <tr>
            <th>Tipo de Usuario:</th>
            <td>{{ $usuario->tipo_usuario }}</td>
        </tr>
    </table>

    <!-- Botón de Cerrar Sesión -->
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Cerrar Sesión</button>
    </form>
@endsection
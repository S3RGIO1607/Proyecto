@extends('layouts.app2')

@section('title', 'Detalles del Usuario')

@section('content')
    <div class="Perfil_Adm">
        <h1>Detalles del Usuario</h1>

        <div class="table-container_TC">
            <div class="table-responsive">
                <div class="table-header_TC">
                    <h2>Información del Usuario</h2>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <tbody>
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
                            <th>Dirección:</th>
                            <td>{{ $usuario->direccion }}</td>
                        </tr>
                        <tr>
                            <th>EPS:</th>
                            <td>{{ $usuario->eps }}</td>
                        </tr>
                        <tr>
                            <th>Tipo de usuario:</th>
                            <td>{{ $usuario->tipo_usuario }}</td>
                        </tr>
                        <tr>
                            <th>Estado:</th>
                            <td>{{ $usuario->estado }}</td>
                        </tr>
                        <tr>
                            <th>Registrado por:</th>
                            <td>{{ $usuario->registrado_por }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Botones de acción -->
         <form action="{{ route('Usuarios.destroy', $usuario->id_usuario) }}" method="POST" class="d-inline" style="display: inline-block;">
        <div class="action-buttons">
            <div class="mb-3">
                <a href="{{ route('Usuarios.edit', $usuario->id_usuario) }}" class="btn btn-warning">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que quieres eliminar este usuario?')">
                        Eliminar
                    </button>
                <a href="{{ route('Usuarios.index') }}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>
    </form>
@endsection
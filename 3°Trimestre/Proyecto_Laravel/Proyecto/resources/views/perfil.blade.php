@extends('layouts.app2')
@section('content')
    <div class="Perfil_Adm">
        <h1>Mi Perfil</h1>

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
                            <th>Tipo de Usuario:</th>
                            <td>{{ $usuario->tipo_usuario }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Botón de Cerrar Sesión -->
        <div class="action-buttons">
            <div class="mb-3">
                <a href="{{ route('logout') }}" class="btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Cerrar Sesión
                </a>
            </div>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
@endsection
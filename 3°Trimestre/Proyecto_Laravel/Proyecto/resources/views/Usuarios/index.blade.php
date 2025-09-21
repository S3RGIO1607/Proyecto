@extends('layouts.app2')

@section('content')
    <h1>Gestión de Usuarios</h1>

    <div class="mb-3">
        <a href="{{ route('Usuarios.create') }}" class="btn btn-success">Registrar</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id_usuario }}</td>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->correo }}</td>
                    <td>{{ $usuario->telefono }}</td>
                    <td>
                        <a href="{{ route('Usuarios.show', $usuario->id_usuario) }}" class="btn btn-info">
                            Consultar
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
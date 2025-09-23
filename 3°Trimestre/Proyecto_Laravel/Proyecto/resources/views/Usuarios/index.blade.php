@extends('layouts.app2')

@section('content')
   <div class="Perfil_Adm">
    <h1>Gestión de Usuarios</h1>

    <div class="action-buttons">
        <div class="mb-3">
            <a style="width: 100px;" href="{{ route('Usuarios.create') }}" class="btn">Registrar</a>
        </div>
    </div>

    <div class="table-container_TC"> 
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead class="table-header_TC">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->id_usuario }}</td>
                            <td>{{ $usuario->nombre }}</td>
                            <td>{{ $usuario->correo }}</td>
                            <td>{{ $usuario->telefono }}</td>
                            <td>
                                <a href="{{ route('Usuarios.show', $usuario->id_usuario) }}" class="btn">
                                    Consultar
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No hay usuarios registrados.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
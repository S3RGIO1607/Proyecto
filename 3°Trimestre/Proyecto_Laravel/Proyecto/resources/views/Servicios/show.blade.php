@extends('layouts.app2')
@section('title', 'Detalles del Servicio')

@section('content')
    <div class="Perfil_Adm">
        <h1>Detalles del Servicios</h1>

        <div class="table-container_TC">
            <div class="table-responsive">
                <div class="table-header_TC">
                    <h2>Información del Paquete</h2>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <tbody>
                        <tr>
                            <th>Nombre:</th>
                            <td>{{ $servicio->nombre }}</td>
                        </tr>
                        <tr>
                            <th>Descripción:</th>
                            <td>{{ $servicio->descripcion }}</td>
                        </tr>
                        <tr>
                            <th>Precio:</th>
                            <td>{{ $servicio->precio }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Botones de acción -->
        <form action="{{ route('Servicios.destroy', $servicio->id_servicio) }}" method="POST" class="d-inline">
            <div class="action-buttons">
                <div class="mb-3">
                    <a href="{{ route('Servicios.edit', $servicio->id_servicio) }}" class="btn btn-warning">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que quieres eliminar este paquete?')">
                        Eliminar
                    </button>
                    <a href="{{ route('Servicios.index') }}" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </form>
    </div>
@endsection

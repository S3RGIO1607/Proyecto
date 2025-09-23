 
@extends('layouts.app2')
@section('title', 'Detalles del Paquete')

@section('content')
    <div class="Perfil_Adm">
        <h1>Detalles del Paquete</h1>

        <div class="table-container_TC">
            <div class="table-responsive">
                <div class="table-header_TC">
                    <h2>Información del Paquete</h2>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <tbody>
                        <tr>
                            <th>Tipo de Evento:</th>
                            <td>{{ $paquete->tipo_evento }}</td>
                        </tr>
                        <tr>
                            <th>Nombre:</th>
                            <td>{{ $paquete->nombre }}</td>
                        </tr>
                        <tr>
                            <th>Descripción:</th>
                            <td>{{ $paquete->descripcion }}</td>
                        </tr>
                        <tr>
                            <th>Capacidad:</th>
                            <td>{{ $paquete->capacidad }}</td>
                        </tr>
                        <tr>
                            <th>Precio:</th>
                            <td>${{ number_format($paquete->precio, 2, ',', '.') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Botones de acción -->
        <form action="{{ route('Paquetes.destroy', $paquete->id_paquete) }}" method="POST" class="d-inline">
            <div class="action-buttons">
                <div class="mb-3">
                    <a href="{{ route('Paquetes.edit', $paquete->id_paquete) }}" class="btn btn-warning">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que quieres eliminar este paquete?')">
                        Eliminar
                    </button>
                    <a href="{{ route('Paquetes.index') }}" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </form>
    </div>
@endsection
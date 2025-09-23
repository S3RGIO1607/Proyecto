@extends('layouts.app2')

@section('content')
<div class="Perfil_Adm">
    <h1>Gestión de Paquetes</h1>

    <div class="action-buttons">
        <div class="mb-3">
            <a style="width: 100px;" href="{{ route('Paquetes.create') }}" class="btn">Registrar</a>
        </div>
    </div>

    <div class="table-container_TC"> 
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead class="table-header_TC">
                    <tr>
                        <th>Tipo de Evento</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Capacidad</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($paquetes as $paquete)
                        <tr>
                            <td>{{ $paquete->tipo_evento }}</td>
                            <td>{{ $paquete->nombre }}</td>
                            <td>{{ $paquete->descripcion }}</td>
                            <td>{{ $paquete->capacidad }}</td>
                            <td>${{ number_format($paquete->precio, 2, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('Paquetes.show', $paquete->id_paquete) }}" class="btn btn-info">Consultar</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">No hay paquetes registrados.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
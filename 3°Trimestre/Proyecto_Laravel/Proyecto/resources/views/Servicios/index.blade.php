@extends('layouts.app2')

@section('content')
<div class="Perfil_Adm">
    <h1>Gestión de Servicios</h1>

    <div class="action-buttons">
        <div class="mb-3">
            <a style="width: 100px;" href="{{ route('Servicios.create') }}" class="btn">Registrar</a>
        </div>
    </div>

    <div class="table-container_TC"> 
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead class="table-header_TC">
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($servicios as $servicio)
                        <tr>
                            <td>{{ $servicio->nombre }}</td>
                            <td>{{ $servicio->descripcion }}</td>
                            <td>{{ $servicio->precio }}</td>
                            <td>
                                <a href="{{ route('Servicios.show', $servicio->id_servicio) }}" class="btn btn-info">Consultar</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No hay servicios registrados.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
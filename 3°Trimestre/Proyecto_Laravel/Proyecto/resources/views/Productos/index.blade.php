@extends('layouts.app2')

@section('content')
<div class="Perfil_Adm">
    <h1>Gestión de Productos</h1>

    <div class="action-buttons">
        <div class="mb-3">
            <a style="width: 100px;" href="{{ route('Productos.create') }}" class="btn">Registrar</a>
        </div>
    </div>

    <div class="table-container_TC"> 
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead class="table-header_TC">
                    <tr>
                        <th>ID</th>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Existencia</th>
                        <th>Precio Alq.</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($productos as $producto)
                        <tr>
                            <td>{{ $producto->id_producto }}</td>
                            <td>
                                @if($producto->imagen_base64)
                                    <img src="{{ $producto->imagen_base64 }}" alt="img" style="width:60px;height:60px;object-fit:cover;">
                                @endif
                            </td>
                            <td>{{ $producto->nombre_producto }}</td>
                            <td>{{ $producto->existencia }}</td>
                            <td>${{ number_format($producto->precio_alquiler, 2, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('Productos.show', $producto->id_producto) }}" class="btn btn-info">Consultar</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">No hay productos registrados.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
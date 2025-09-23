@extends('layouts.app2')
@section('title', 'Detalles del Producto')

@section('content')
    <div class="Perfil_Adm">
        <h1>Detalles del Producto</h1>

        <div class="table-container_TC">
            <div class="table-responsive">
                <div class="table-header_TC">
                    <h2>Información del Producto</h2>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <tbody>
                        <tr>
                            <th>Existencia:</th>
                            <td>{{ $producto->existencia }}</td>
                        </tr>
                        <tr>
                            <th>Descripcion:</th>
                            <td>{{ $producto->descripcion }}</td>
                        </tr>
                        <tr>
                            <th>Precio Compra:</th>
                            <td>${{ number_format($producto->precio_compra,2,',','.') }}</td>
                        </tr>
                        <tr>
                            <th>Precio Alquiler:</th>
                            <td>${{ number_format($producto->precio_alquiler,2,',','.') }}</td>
                        </tr>
                        <tr>
                            <th>Fechas:</th>
                            <td>{{ $producto->fecha_entrada }} - {{ $producto->fecha_salida }}</td>
                        </tr>
                        <tr>
                            <th>Imagen:</th>
                            <td><img src="{{ $producto->imagen_base64 }}" style="max-width:300px;"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Botones de acción -->
         <form action="{{ route('Productos.destroy', $producto->id_producto) }}" method="POST" class="d-inline" style="display: inline-block;">
        <div class="action-buttons">
            <div class="mb-3">
                <a href="{{ route('Productos.edit', $producto->id_producto) }}" class="btn btn-warning">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que quieres eliminar este producto?')">
                        Eliminar
                    </button>
                <a href="{{ route('Productos.index') }}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>
    </form>
@endsection


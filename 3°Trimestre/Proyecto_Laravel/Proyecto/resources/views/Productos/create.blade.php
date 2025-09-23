@extends('layouts.app2')

@section('title', 'Registrar Producto')

@section('content')
<div class="Perfil_Adm">
    <h1>Registrar Producto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="table-container_TC">
            <div class="table-responsive">
                <div class="table-header_TC">
                    <h2>Información del Producto</h2>
                </div>
                <form action="{{ route('Productos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="nombre_producto" class="form-label">Nombre del producto</label><br>
            <input id="nombre_producto" type="text" name="nombre_producto" class="form-control" value="{{ old('nombre_producto') }}" required>
        </div>

        <div class="mb-3">
            <label for="existencia" class="form-label">Existencia</label><br>
            <input id="existencia" type="number" name="existencia" class="form-control" value="{{ old('existencia') }}" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label><br>
            <textarea id="descripcion" name="descripcion" class="form-control" rows="3" required>{{ old('descripcion') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="precio_compra" class="form-label">Precio de compra</label><br>
            <input id="precio_compra" type="number" step="0.01" name="precio_compra" class="form-control" value="{{ old('precio_compra') }}" required>
        </div>

        <div class="mb-3">
            <label for="precio_alquiler" class="form-label">Precio de alquiler</label><br>
            <input id="precio_alquiler" type="number" step="0.01" name="precio_alquiler" class="form-control" value="{{ old('precio_alquiler') }}" required>
        </div>

        <div class="mb-3">
            <label for="fecha_entrada" class="form-label">Fecha de entrada</label><br>
            <input id="fecha_entrada" type="date" name="fecha_entrada" class="form-control" value="{{ old('fecha_entrada') }}" required>
        </div>

        <div class="mb-3">
            <label for="fecha_salida" class="form-label">Fecha de salida</label><br>
            <input id="fecha_salida" type="date" name="fecha_salida" class="form-control" value="{{ old('fecha_salida') }}">
        </div>

        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen</label><br>
            <input id="imagen" type="file" name="imagen" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('Productos.index') }}" class="btn btn-secondary">Volver</a>
    </form>
    </div>
    </div>

    
</div>
@endsection
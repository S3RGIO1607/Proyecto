@extends('layouts.app2')

@section('title', 'Editar Producto')

@section('content')
<div class="Perfil_Adm">
    <h1 class="mb-4">Editar Producto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">...</div>
    @endif

    <form action="{{ route('Productos.update', $producto->id_producto) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- campos, usando old(...) o $producto->... como valor -->
        <input type="text" name="nombre_producto" value="{{ old('nombre_producto', $producto->nombre_producto) }}" required>
        <!-- resto de campos... -->

        <div class="mb-3">
            <label>Imagen actual</label><br>
            @if($producto->imagen_base64)
                <img src="{{ $producto->imagen_base64 }}" style="width:120px;height:120px;object-fit:cover;">
            @endif
        </div>

        <div class="mb-3">
            <label>Subir nueva imagen</label>
            <input type="file" name="imagen">
        </div>

        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('Productos.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
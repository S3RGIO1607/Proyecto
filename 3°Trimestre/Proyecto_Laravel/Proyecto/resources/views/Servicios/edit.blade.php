@extends('layouts.app2')

@section('content')
<div class="Perfil_Adm">
    <h1 class="mb-4">Editar Servicio</h1>   

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('Servicios.update', $servicio->id_servicio) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre"
                   value="{{ old('nombre', $servicio->nombre) }}"
                   class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" name="descripcion" id="descripcion"
                   value="{{ old('descripcion', $servicio->descripcion) }}"
                   class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" step="0.01" name="precio" id="precio"
                   value="{{ old('precio', $servicio->precio) }}"
                   class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('Servicios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
@extends('layouts.app2')

@section('title', 'Editar Paquete')

@section('content')
<div class="Perfil_Adm">
    <h1 class="mb-4">Editar Paquete</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('Paquetes.update', $paquete->id_paquete) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="tipo_evento" class="form-label">Tipo de Evento</label>
            <input type="text" id="tipo_evento" name="tipo_evento" 
                   class="form-control" 
                   value="{{ old('tipo_evento', $paquete->tipo_evento) }}" required>
        </div>

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" 
                   class="form-control" 
                   value="{{ old('nombre', $paquete->nombre) }}" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea id="descripcion" name="descripcion" 
                      class="form-control" rows="3" required>{{ old('descripcion', $paquete->descripcion) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="capacidad" class="form-label">Capacidad</label>
            <select id="capacidad" name="capacidad" class="form-control" required>
                <option value="">Seleccione...</option>
                <option value="20-40" {{ old('capacidad', $paquete->capacidad) == '20-40' ? 'selected' : '' }}>20-40</option>
                <option value="40-60" {{ old('capacidad', $paquete->capacidad) == '40-60' ? 'selected' : '' }}>40-60</option>
                <option value="60-80" {{ old('capacidad', $paquete->capacidad) == '60-80' ? 'selected' : '' }}>60-80</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" step="0.01" id="precio" name="precio" 
                   class="form-control" 
                   value="{{ old('precio', $paquete->precio) }}" required>
        </div>

        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('Paquetes.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection 

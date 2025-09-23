@extends('layouts.app2')

@section('title', 'Registrar Servicio')

@section('content')
<div class="Perfil_Adm">
    <h1>Registrar Paquete</h1>

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
                <h2>Información del Paquete</h2>
            </div>

            <form action="{{ route('Paquetes.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="tipo_evento" class="form-label">Tipo de Evento</label><br>
                    <input id="tipo_evento" type="text" name="tipo_evento" class="form-control" value="{{ old('tipo_evento') }}" required>
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label><br>
                    <input id="nombre" type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" required>
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label><br>
                    <textarea id="descripcion" name="descripcion" class="form-control" rows="3" required>{{ old('descripcion') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="capacidad" class="form-label">Capacidad</label><br>
                    <select id="capacidad" name="capacidad" class="form-control" required>
                        <option value="">Seleccione...</option>
                        <option value="20-40" {{ old('capacidad') == '20-40' ? 'selected' : '' }}>20-40</option>
                        <option value="40-60" {{ old('capacidad') == '40-60' ? 'selected' : '' }}>40-60</option>
                        <option value="60-80" {{ old('capacidad') == '60-80' ? 'selected' : '' }}>60-80</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label><br>
                    <input id="precio" type="number" step="0.01" name="precio" class="form-control" 
                           value="{{ old('precio') }}" required>
                </div>

                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{ route('Paquetes.index') }}" class="btn btn-secondary">Volver</a>
            </form>
        </div>
    </div>
</div>
@endsection 

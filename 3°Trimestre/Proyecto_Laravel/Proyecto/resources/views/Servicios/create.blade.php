@extends('layouts.app2')

@section('title', 'Registrar Servicio')

@section('content')
<div class="Perfil_Adm">
    <h1>Registrar Servicio</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('Servicios.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label><br>
            <input id="nombre" type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label><br>
            <input id="descripcion" type="text" name="descripcion" class="form-control" value="{{ old('descripcion') }}" required>
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label><br>
            <input id="precio" type="number" step="0.01" name="precio" class="form-control" value="{{ old('precio') }}" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('Servicios.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
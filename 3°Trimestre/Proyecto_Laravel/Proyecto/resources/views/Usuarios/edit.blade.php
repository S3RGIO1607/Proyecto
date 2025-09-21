@extends('layouts.app2')

@section('content')
<div class="container">
    <h2>Editar Usuario</h2>

    <!-- Formulario de edición -->
    <form action="{{ route('Usuarios.update', $usuario->id_usuario) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="numero_documento" class="form-label">Número de Documento</label>
            <input type="text" name="numero_documento" id="numero_documento"
                   value="{{ old('numero_documento', $usuario->numero_documento) }}"
                   class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre"
                   value="{{ old('nombre', $usuario->nombre) }}"
                   class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="correo" class="form-label">Correo</label>
            <input type="email" name="correo" id="correo"
                   value="{{ old('correo', $usuario->correo) }}"
                   class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" name="telefono" id="telefono"
                   value="{{ old('telefono', $usuario->telefono) }}"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" name="direccion" id="direccion"
                   value="{{ old('direccion', $usuario->direccion) }}"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label for="nivel_educativo" class="form-label">Nivel Educativo</label>
            <input type="text" name="nivel_educativo" id="nivel_educativo"
                   value="{{ old('nivel_educativo', $usuario->nivel_educativo) }}"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label for="referencia_personal" class="form-label">Referencia Personal</label>
            <input type="text" name="referencia_personal" id="referencia_personal"
                   value="{{ old('referencia_personal', $usuario->referencia_personal) }}"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label for="telefono_referencia_personal" class="form-label">Teléfono Referencia Personal</label>
            <input type="text" name="telefono_referencia_personal" id="telefono_referencia_personal"
                   value="{{ old('telefono_referencia_personal', $usuario->telefono_referencia_personal) }}"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label for="eps" class="form-label">EPS</label>
            <input type="text" name="eps" id="eps"
                   value="{{ old('eps', $usuario->eps) }}"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label for="tipo_usuario" class="form-label">Tipo de Usuario</label>
            <select name="tipo_usuario" id="tipo_usuario" class="form-select">
                <option value="Administrador" {{ old("tipo_usuario") == "Administrador" ? 'selected' : '' }}>Administrador</option>
<option value="Sup_Bodega" {{ old("tipo_usuario") == "Sup_Bodega" ? 'selected' : '' }}>Sup_Bodega</option>
<option value="Gerente" {{ old("tipo_usuario") == "Gerente" ? 'selected' : '' }}>Gerente</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" id="estado" class="form-select">
                <option value="activo" {{ old('estado', $usuario->estado) == 'A' ? 'selected' : '' }}>Activo</option>
                <option value="inactivo" {{ old('estado', $usuario->estado) == 'I' ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="registrado_por" class="form-label">Registrado por (ID usuario)</label>
            <input type="text" name="registrado_por" id="registrado_por"
                   value="{{ old('registrado_por', $usuario->registrado_por) }}"
                   class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('Usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
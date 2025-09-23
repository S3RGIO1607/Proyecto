@extends('layouts.app2')

@section('content')
 <div class="Perfil_Adm">
        <h1>Editar Usuario</h1>

        <div class="table-container_TC">
            <div class="table-responsive">
                <div class="table-header_TC">
                    <h2>Información del Usuario</h2>
                </div>
                <form action="{{ route('Usuarios.update', $usuario->id_usuario) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="numero_documento" class="form-label">Documento</label><br>
                        <input id="numero_documento" type="text" name="numero_documento" class="form-control" value="{{ old('numero_documento', $usuario->numero_documento) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label><br>
                        <input id="nombre" type="text" name="nombre" class="form-control" value="{{ old('nombre', $usuario->nombre) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label><br>
                        <input id="correo" type="email" name="correo" class="form-control" value="{{ old('correo', $usuario->correo) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección</label><br>
                        <input id="direccion" type="text" name="direccion" class="form-control" value="{{ old('direccion', $usuario->direccion) }}">
                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label><br>
                        <input id="telefono" type="text" name="telefono" class="form-control" value="{{ old('telefono', $usuario->telefono) }}">
                    </div>

                    <div class="mb-3">
                        <label for="nivel_educativo" class="form-label">Nivel educativo</label><br>
                        <input id="nivel_educativo" type="text" name="nivel_educativo" class="form-control" value="{{ old('nivel_educativo', $usuario->nivel_educativo) }}">
                    </div>

                    <div class="mb-3">
                        <label for="referencia_personal" class="form-label">Referencia personal</label><br>
                        <input id="referencia_personal" type="text" name="referencia_personal" class="form-control" value="{{ old('referencia_personal', $usuario->referencia_personal) }}">
                    </div>

                    <div class="mb-3">
                        <label for="telefono_referencia_personal" class="form-label">Teléfono referencia</label><br>
                        <input id="telefono_referencia_personal" type="text" name="telefono_referencia_personal" class="form-control" value="{{ old('telefono_referencia_personal', $usuario->telefono_referencia_personal) }}">
                    </div>

                    <div class="mb-3">
                        <label for="eps" class="form-label">EPS</label><br>
                        <input id="eps" type="text" name="eps" class="form-control" value="{{ old('eps', $usuario->eps) }}">
                    </div>

                    <div class="mb-3">
                        <label for="tipo_usuario" class="form-label">Tipo de usuario</label><br>
                        <select id="tipo_usuario" name="tipo_usuario" class="form-control" required>
                            <option value="">-- Seleccione --</option>
                            <option value="Administrador" {{ old("tipo_usuario", $usuario->tipo_usuario) == "Administrador" ? 'selected' : '' }}>Administrador</option>
                            <option value="Sup_Bodega" {{ old("tipo_usuario", $usuario->tipo_usuario) == "Sup_Bodega" ? 'selected' : '' }}>Sup_Bodega</option>
                            <option value="Gerente" {{ old("tipo_usuario", $usuario->tipo_usuario) == "Gerente" ? 'selected' : '' }}>Gerente</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label><br>
                        <select id="estado" name="estado" class="form-control">
                            <option value="A" {{ old('estado', $usuario->estado) == 'A' ? 'selected' : '' }}>Activo</option>
                            <option value="I" {{ old('estado', $usuario->estado) == 'I' ? 'selected' : '' }}>Inactivo</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="registrado_por" class="form-label">Registrado por (ID usuario)</label><br>
                        <input id="registrado_por" type="text" name="registrado_por" class="form-control" value="{{ old('registrado_por', $usuario->registrado_por) }}">
                    </div>

                    <div class="action-buttons">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Actualizar</button>
                            <a href="{{ route('Usuarios.index') }}" class="btn btn-secondary">Volver</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
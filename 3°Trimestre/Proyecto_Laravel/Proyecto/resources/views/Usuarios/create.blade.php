@extends('layouts.app2')

@section('title', 'Registrar Usuario')

@section('content')
    <div class="Perfil_Adm">
        <h1>Registrar Usuario</h1>
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
                    <h2>Información del Usuario</h2>
                </div>
                <form action="{{ route('Usuarios.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="numero_documento" class="form-label">Documento</label><br>
                        <input id="numero_documento" type="text" name="numero_documento" class="form-control" value="{{ old('numero_documento') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label><br>
                        <input id="nombre" type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label><br>
                        <input id="correo" type="email" name="correo" class="form-control" value="{{ old('correo') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="contrasena" class="form-label">Contraseña</label><br>
                        <input id="contrasena" type="password" name="contrasena" class="form-control" required><br>
                        <small class="form-text">Mínimo 6 caracteres.</small>
                    </div>

                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección</label><br>
                        <input id="direccion" type="text" name="direccion" class="form-control" value="{{ old('direccion') }}">
                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label><br>
                        <input id="telefono" type="text" name="telefono" class="form-control" value="{{ old('telefono') }}">
                    </div>

                    <div class="mb-3">
                        <label for="nivel_educativo" class="form-label">Nivel educativo</label><br>
                        <input id="nivel_educativo" type="text" name="nivel_educativo" class="form-control" value="{{ old('nivel_educativo') }}">
                    </div>

                    <div class="mb-3">
                        <label for="referencia_personal" class="form-label">Referencia personal</label><br>
                        <input id="referencia_personal" type="text" name="referencia_personal" class="form-control" value="{{ old('referencia_personal') }}">
                    </div>

                    <div class="mb-3">
                        <label for="telefono_referencia_personal" class="form-label">Teléfono referencia</label><br>
                        <input id="telefono_referencia_personal" type="text" name="telefono_referencia_personal" class="form-control" value="{{ old('telefono_referencia_personal') }}">
                    </div>

                    <div class="mb-3">
                        <label for="eps" class="form-label">EPS</label><br>
                        <input id="eps" type="text" name="eps" class="form-control" value="{{ old('eps') }}">
                    </div>

                    <div class="mb-3">
                        <label for="tipo_usuario" class="form-label">Tipo de usuario</label><br>
                        <select id="tipo_usuario" name="tipo_usuario" class="form-control" required>
                            <option value="">-- Seleccione --</option>
                            <option value="Administrador" {{ old("tipo_usuario") == "Administrador" ? 'selected' : '' }}>Administrador</option>
                            <option value="Sup_Bodega" {{ old("tipo_usuario") == "Sup_Bodega" ? 'selected' : '' }}>Sup_Bodega</option>
                            <option value="Gerente" {{ old("tipo_usuario") == "Gerente" ? 'selected' : '' }}>Gerente</option>
                        </select>
                    </div>

                    <div class="action-buttons">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Guardar</button>
                            <a href="{{ route('Usuarios.index') }}" class="btn btn-secondary">Volver</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
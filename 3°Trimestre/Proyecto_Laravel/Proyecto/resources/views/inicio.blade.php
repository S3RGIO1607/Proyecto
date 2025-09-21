@vite(['resources/css/app.css', 'resources/css/iniciosesion.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión - Distribuidora Ideal</title>
</head>
<body>
  <div class="fondo"></div>
  <main class="login-container">
    <section class="login-card">
      <div class="div_inicio">
        <h2>Iniciar Sesión</h2>

        <!-- Mensajes de error -->
        @if ($errors->any())
            <div style="background:#ffe6e6;padding:10px;margin-bottom:12px;border:1px solid #ffb3b3;color:#900;">
                <ul style="margin:0;padding-left:18px;">
                    @foreach ($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('status'))
            <div style="background:#e6f0ff;padding:10px;margin-bottom:12px;border:1px solid #99c2ff;">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
          @csrf
          <div class="input-group">
            <input type="text" name="numero_documento" required placeholder="Usuario" value="{{ old('numero_documento') }}">
          </div>
          <div class="input-group">
            <input type="password" name="password" required placeholder="Contraseña">
          </div>
          <input type="submit" value="Entrar">
        </form>
      </div>

      <div class="div_registrarse">
        <h1>¡Hola!</h1>
        <p>¿Aún no tienes una cuenta?</p>
        <button onclick="location.href='Registro'">Registrarse</button>
      </div>
    </section>
  </main>
</body>
</html>
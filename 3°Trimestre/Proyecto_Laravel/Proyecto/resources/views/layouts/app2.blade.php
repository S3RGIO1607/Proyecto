@vite(['resources/css/estilos.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Casa de Eventos Aaron')</title>
    <link rel="shortcut icon" href="https://img.icons8.com/?size=100&id=dxoYK8bxqiJr&format=png&color=000000" type="image/x-icon">
</head>
<body>
    <header class="a">
        <img src="{{ asset('img/logo2.png') }}" alt="Logo">
    </header>

    <div class="container">
        <!-- Menú lateral -->
        <nav class="b">
            <section class="c">
                <input class="d" type="search" placeholder="Filtrar Menu"/>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="e bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398l3.85 3.85a1 1 0 0 0 1.415-1.414z"/>
                </svg>
            </section>
            <ul class="f">
                <li class="g"><a class="h" href="{{ route('perfil') }}">👤 Perfil</a></li>
                <li class="g"><a class="h" href="{{ route('Usuarios.index') }}">👥 Usuarios</a></li>
                <li class="g"><a class="h" href="#">🛒 Producto</a></li>
                <li class="g"><a class="h" href="#">📄 Alquiler</a></li>
                <li class="g"><a class="h" href="#">📦 Paquetes</a></li>
                <li class="g"><a class="h" href="#">📝 Servicios</a></li>
            </ul>
        </nav>

        <!-- Aquí va cambiando el contenido dinámico -->
        <section class="bienvenida container mt-5">
            @yield('content')
        </section>
    </div>
</body>
</html>
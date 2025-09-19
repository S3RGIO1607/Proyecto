<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" href="../img/logo2.png" type="image/png" />
  <title>Error 404 - Página no encontrada</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet" />
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #333;
      color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }

    .container {
      background: rgb(0, 0, 0);
      border-radius: 12px;
      padding: 40px;
      max-width: 700px;
      width: 100%;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      text-align: center;
      animation: fadeIn 0.8s ease-in-out;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    h1 {
      font-size: 3.5em;
      color: #c4821f;
      margin-bottom: 15px;
    }

    p {
        color: white;
      font-size: 1.1em;
      margin-bottom: 20px;
    }

    .button-link {
      background-color: #541E12;
      color: white;
      padding: 12px 30px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 600;
      margin: 10px;
      display: inline-block;
      transition: background 0.3s ease, transform 0.2s;
    }

    .button-link:hover {
      background-color: #993620;
      transform: scale(1.05);
    }

    .search-box {
      margin-top: 30px;
    }

    .search-box input[type="text"] {
      padding: 12px;
      width: 70%;
      max-width: 350px;
      border: 1px solid #ccc;
      border-radius: 6px;
      margin-bottom: 10px;
    }

    .search-box button {
      padding: 12px 20px;
      background-color: #541E12;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
      transition: background 0.3s ease, transform 0.2s;
    }

    .search-box button:hover {
      background-color: #993620;
      transform: scale(1.05);
    }

    .nav-links {
      margin-top: 25px;
    }

    .nav-links a {
      color: #3498db;
      text-decoration: none;
      margin: 0 12px;
      font-weight: 500;
      transition: color 0.3s ease;
    }

    .nav-links a:hover {
      color: #2980b9;
    }

    @media (max-width: 600px) {
      h1 {
        font-size: 2.2em;
      }
      .search-box input[type="text"] {
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Error 404</h1>
    <p>La página que buscas no fue encontrada. Puede que la URL esté incorrecta o que la página haya sido eliminada.</p>
    <a href="../views/dashboard" class="button-link">Ir a la Página Principal</a>
    
    <div class="search-box">
      <p>Buscar algo más:</p>
      <form action="/buscar" method="get">
        <input type="text" name="q" placeholder="¿Qué estás buscando?" />
        <button type="submit">Buscar</button>
      </form>
    </div>

    <div class="nav-links">
      <p>O explora otras secciones:</p>
      <a href="/productos">Productos</a> |
      <a href="/nosotros">Nosotros</a> |
      <a href="/blog">Blog</a> |
      <a href="/contacto">Contacto</a>
    </div>

    <p style="margin-top: 30px;">¿Necesitas ayuda? Contáctanos:</p>
    <a href="/contacto" class="button-link">Soporte Técnico</a>
  </div>
</body>
</html>
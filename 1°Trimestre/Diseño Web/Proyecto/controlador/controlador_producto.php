<?php
session_start();

// Conectar a la base de datos
try {
    $conexion = new PDO("mysql:host=localhost;dbname=Proyecto", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $nombre_producto = $_POST['nombre_producto'];
    $descripcion = $_POST['descripcion'];
    $precio_compra = $_POST['precio_compra'];
    $precio_alquiler = $_POST['precio_alquiler'];
    $id_usuario = $_SESSION['id_usuario']; // Suponiendo que el ID del usuario está en la sesión

    // Manejar la carga de la imagen
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
        $imagen = file_get_contents($_FILES['imagen']['tmp_name']);
    } else {
        // Manejar el error de carga de la imagen
        die("Error al cargar la imagen.");
    }

    // Preparar la consulta SQL para insertar el producto
    $sql = "INSERT INTO producto (nombre_producto, descripcion, precio_compra, precio_alquiler, imagen, id_usuario) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);

    // Ejecutar la consulta
    if ($stmt->execute([$nombre_producto, $descripcion, $precio_compra, $precio_alquiler, $imagen, $id_usuario])) {
        // Redirigir a una página de éxito o mostrar un mensaje
        header("Location: ../vista/success.html"); // Cambia esta URL según sea necesario
        exit();
    } else {
        // Manejar el error de inserción
        die("Error al registrar el producto.");
    }
} else {
    // Redirigir si no se accede al script a través del formulario
    header("Location: ../vista/404.html");
    exit();
}

$conexion = null; // Cerrar la conexión
?>

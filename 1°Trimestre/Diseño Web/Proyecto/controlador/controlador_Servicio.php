<?php
session_start();

// Conectar a la base de datos
try {
    $conexion = new PDO("mysql:host=localhost;dbname=Proyecto", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

// Incluir el modelo
require_once 'ServicioModel.php';
$servicioModel = new ServicioModel($conexion);

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    // Validar los datos (puedes agregar más validaciones según sea necesario)
    if (empty($nombre) || empty($descripcion) || empty($precio)) {
        die("Todos los campos son obligatorios.");
    }

    // Insertar el servicio en la base de datos
    if ($servicioModel->insertarServicio($nombre, $descripcion, $precio)) {
        // Redirigir a una página de éxito o mostrar un mensaje
        header("Location: ../vista/success.html"); // Cambia esta URL según sea necesario
        exit();
    } else {
        // Manejar el error de inserción
        die("Error al registrar el servicio.");
    }
} else {
    // Redirigir si no se accede al script a través del formulario
    header("Location: ../vista/404.html");
    exit();
}

$conexion = null; // Cerrar la conexión
?>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluir el archivo que contiene la clase 'usuario'
include "../modelo/modelo_login.php";

// Crear objeto de la clase 'usuario' con los datos de login
$objeto = new usuario($_POST['documento'], null, null, $_POST['contrasena']);

// Llamar al método 'Login' para verificar los datos de login
$respuesta = $objeto->Login();

// Verificar si la respuesta no está vacía y si hay un ID de usuario
if (!empty($respuesta) && isset($respuesta[0]['id_usuario'])) { 
    // Iniciar sesión
    session_start();

    // Almacenar los datos del usuario en la sesión
    $_SESSION["documento"] = $respuesta[0]['numero_documento'];
    $_SESSION["tipo_usuario"] = $respuesta[0]['tipo_usuario']; 
    $_SESSION["id_usuario"] = $respuesta[0]['id_usuario']; // Almacena el ID del usuario

    // Redirige al usuario a una página diferente dependiendo del tipo de usuario
    switch ($_SESSION["tipo_usuario"]) {
        // Si el usuario es administrador, redirige a la página de prueba
        case 'Administrador':
            header("Location: ../vista/dashboard.html");
            break;
        // Si el usuario es sup_bodega, redirige a la página de sup_bodega
        case 'Sup_Bodega':
            header("Location: ../vista/dashboard_Sup_Bodega.html");
            break;
        // Si el usuario es gerente, redirige a la página de gerente
        case 'Gerente':
            header("Location: ..//vista/dashboard_Gerente.html");
            break;
        // Si el usuario es cliente, redirige a la página de cliente
        case 'Cliente':
            header("Location: ..//vista/dashboard_Cliente.html");
            break;
        // Si el tipo de usuario no es válido, muestra un mensaje de error
        default:
            echo "Tipo de usuario no válido.";
            exit;
    }
} else {
    // Mostrar un mensaje de error si los datos de login no coinciden utilizando sweetalert
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
    echo '<script>
        document.addEventListener("DOMContentLoaded", function() {
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "Vuelva a intentarlo, sus datos no coinciden.",
                confirmButtonText: "OK"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "' . $_SERVER["HTTP_REFERER"].'";
                }
            });
        });
    </script>';
}
?>
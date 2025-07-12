<?php
class ProductoModel {
    private $conexion;

    public function __construct($db) {
        $this->conexion = $db;
    }

    // Método para insertar un nuevo producto
    public function insertarProducto($nombre_producto, $descripcion, $precio_compra, $precio_alquiler, $imagen, $id_usuario) {
        $sql = "INSERT INTO producto (nombre_producto, descripcion, precio_compra, precio_alquiler, imagen, id_usuario) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute([$nombre_producto, $descripcion, $precio_compra, $precio_alquiler, $imagen, $id_usuario]);
    }

    // Método para obtener todos los productos
    public function obtenerProductos() {
        $sql = "SELECT * FROM producto";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para obtener un producto por ID
    public function obtenerProductoPorId($id_producto) {
        $sql = "SELECT * FROM producto WHERE id_producto = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute([$id_producto]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Método para actualizar un producto
    public function actualizarProducto($id_producto, $nombre_producto, $descripcion, $precio_compra, $precio_alquiler, $imagen) {
        $sql = "UPDATE producto SET nombre_producto = ?, descripcion = ?, precio_compra = ?, precio_alquiler = ?, imagen = ? WHERE id_producto = ?";
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute([$nombre_producto, $descripcion, $precio_compra, $precio_alquiler, $imagen, $id_producto]);
    }

    // Método para eliminar un producto
    public function eliminarProducto($id_producto) {
        $sql = "DELETE FROM producto WHERE id_producto = ?";
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute([$id_producto]);
    }
}
?>

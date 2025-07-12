<?php
class ServicioModel {
    private $conexion;

    public function __construct($db) {
        $this->conexion = $db;
    }

    // Método para insertar un nuevo servicio
    public function insertarServicio($nombre, $descripcion, $precio) {
        $sql = "INSERT INTO servicio (nombre, descripcion, precio) VALUES (?, ?, ?)";
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute([$nombre, $descripcion, $precio]);
    }

    // Método para obtener todos los servicios
    public function obtenerServicios() {
        $sql = "SELECT * FROM servicio";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para obtener un servicio por ID
    public function obtenerServicioPorId($id_servicio) {
        $sql = "SELECT * FROM servicio WHERE id_servicio = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute([$id_servicio]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Método para actualizar un servicio
    public function actualizarServicio($id_servicio, $nombre, $descripcion, $precio) {
        $sql = "UPDATE servicio SET nombre = ?, descripcion = ?, precio = ? WHERE id_servicio = ?";
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute([$nombre, $descripcion, $precio, $id_servicio]);
    }

    // Método para eliminar un servicio
    public function eliminarServicio($id_servicio) {
        $sql = "DELETE FROM servicio WHERE id_servicio = ?";
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute([$id_servicio]);
    }
}
?>

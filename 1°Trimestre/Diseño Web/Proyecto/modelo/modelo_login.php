<?php

class usuario {
    // Propiedades privadas de la clase 'usuario'
    private $documento;                     // Documento de identificación del usuario
    private $nombre;                        // Nombre del usuario
    private $correo;                        // Correo electrónico del usuario
    private $contrasena;                    // Contraseña del usuario
    private $direccion;                     // Dirección del usuario
    private $telefono;                      // Teléfono del usuario
    private $nivel_educativo;               // Nivel educativo del usuario
    private $referencia_personal;          // Referencia personal del usuario
    private $telefono_referencia_personal;  // Teléfono de la referencia personal
    private $eps;                           // Entidad Promotora de Salud del usuario
    private $tipo_usuario;                  // Tipo de usuario (por ejemplo, administrador, usuario regular)
    private $registrado_por;                // Usuario que registró a este usuario

    // Constructor de la clase, inicializa las propiedades
    public function __construct($d1=null, $d2=null, $d3=null, $d4=null, $d5=null, $d6=null, $d7=null, $d8=null, $d9=null, $d10=null, $d11=null, $d12=null) {
        // Asigna los parámetros a las propiedades correspondientes
        $this->documento = $d1;
        $this->nombre = $d2;
        $this->correo = $d3;
        $this->contrasena = $d4;
        $this->direccion = $d5;
        $this->telefono = $d6;
        $this->nivel_educativo = $d7;
        $this->referencia_personal = $d8;
        $this->telefono_referencia_personal = $d9;
        $this->eps = $d10;
        $this->tipo_usuario = $d11;
        $this->registrado_por = $d12;
    }

    // Método para iniciar sesión
    // Método para iniciar sesión
    public function Login() {
        // Conexión a la base de datos
        $conexion = new PDO("mysql:host=localhost;dbname=Proyecto", "root");
        
        // Prepara la sentencia SQL para llamar al procedimiento almacenado
        $sentencia = $conexion->prepare("call Login(?, ?)");
        
        // Vincula los parámetros de la sentencia a las propiedades de la clase
        $sentencia->bindParam(1, $this->documento);
        $sentencia->bindParam(2, $this->contrasena);
        
        // Ejecuta la sentencia
        $sentencia->execute();
        
        // Obtiene todos los resultados y los almacena en $res
        $res = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        
        // Devuelve los resultados
        return $res;
    }
}
?>
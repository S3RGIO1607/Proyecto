create database Proyecto;
use Proyecto;
drop database Proyecto;

/*TABLA DE USUARIO ------------------------------------------------------------------------------*/
create table usuario(
id_usuario bigint unsigned primary key auto_increment,
numero_documento bigint unsigned not null,
nombre varchar(255) not null,
correo varchar(255) not null,
contrasena varchar(255) not null,
direccion varchar(255) not null,
telefono bigint unsigned not null,
nivel_educativo enum ("Bachiller","Tecnico","Tecnologo","Profecional")null,
referencia_personal varchar (255) null,
telefono_referencia_personal bigint unsigned null,
eps varchar (255) null,
tipo_usuario enum ('Administrador', 'Cliente','Sup_Bodega','Gerente') not null,
estado enum ("A","I") default ("A") null,
registrado_por  bigint unsigned null,
foreign key(registrado_por) references usuario (id_usuario),
index (numero_documento)
);

/*TABLA DE ALQUILER ------------------------------------------------------------------------------*/
create table alquiler(
id_alquiler bigint unsigned primary key auto_increment,
fecha_evento date not null,
valor_producto bigint unsigned not null,
abono bigint not null,
fecha_devolucion date not null,
id_usuario bigint unsigned not null,
foreign key (id_usuario) references usuario (id_usuario)
);

/*TABLA DE FACTURA ------------------------------------------------------------------------------*/
create table  factura (
id_factura BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
fecha_factura DATE NOT NULL,
valor_total BIGINT UNSIGNED NOT NULL,
iva BIGINT UNSIGNED NOT NULL,
metodo_pago ENUM('Tarjeta de crédito', 'Tarjeta de débito', 'Transferencia bancaria', 'Efectivo') NOT NULL,
id_usuario BIGINT UNSIGNED NOT NULL,
FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario),
id_alquiler BIGINT UNSIGNED UNIQUE, -- relación 1:1,
FOREIGN KEY (id_alquiler) REFERENCES alquiler(id_alquiler)
);

/*TABLA DE PRODUCTO ------------------------------------------------------------------------------*/
create table producto(
id_producto bigint unsigned primary key auto_increment,
nombre_producto varchar(255) not null,
descripcion varchar(255) not null,
precio_compra bigint(255) unsigned not null,
precio_alquiler bigint(255) unsigned not null,
imagen longblob not null,
id_usuario bigint unsigned not null,
foreign key (id_usuario) references usuario (id_usuario),
index (nombre_producto)
);

/*TABLA DE DETALLES_CONTIENE ------------------------------------------------------------------------------*/
create table detalles_contiene (
id_alquiler bigint unsigned not null,
foreign key (id_alquiler) references alquiler (id_alquiler),
id_producto bigint unsigned not null,
foreign key (id_producto) references producto (id_producto),
cantidad_producto int unsigned not null,
valor_producto_alquiler bigint unsigned not null,
descripccion varchar (255) not null
);

/*TABLA DE PAQUETE ------------------------------------------------------------------------------*/
create table paquete(
id_paquete tinyint unsigned auto_increment primary key,
tipo_evento varchar(255) not null,
nombre varchar (255) not null,
descripcion varchar(255) not null,
precio bigint unsigned not null
);

/*TABLA DE SERVICIO ------------------------------------------------------------------------------*/
create table servicio(
id_servicio tinyint unsigned auto_increment primary key,
nombre varchar (255) not null,
descripcion varchar (255) not null,
precio bigint unsigned  not null
);

/*TABLA DE DETALLE_SERVICIO ------------------------------------------------------------------------------*/
create table detalle_servicio(
id_alquiler bigint unsigned not null,
foreign key (id_alquiler) references alquiler(id_alquiler),
id_servicio tinyint unsigned not null,
foreign key (id_servicio) references servicio (id_servicio),
cantidad tinyint unsigned not null,
valor_servicio tinyint not null
);

/*TABLA DE DETALLE_PAQUETE ------------------------------------------------------------------------------*/
create table detalle_paquete(
id_paquete tinyint unsigned not null,
foreign key (id_paquete) references paquete (id_paquete),
id_producto bigint unsigned not null,
foreign key (id_producto) references producto (id_producto),
cant_producto_paquete tinyint unsigned not null
);


/*CONSULTAS GENERALES ------------------------------------------------------------------------------*/
select*from usuario;
select*from alquiler;
select*from factura;
select*from producto;
select*from detalles_contiene;
select*from paquete;
select*from servicio;
select*from detalle_servicio;
select*from detalle_paquete;

/*PROCEDIMIENTOS ------------------------------------------------------------------------------*/
DELIMITER $$

/*PROCEDIMIENTO DE LOGIN ------------------------------------------------------------------------------*/
CREATE PROCEDURE Login
(
IN num_doc bigint unsigned,
IN contra varchar(255)
)
BEGIN
SELECT id_usuario, numero_documento, contrasena, estado, tipo_usuario from usuario WHERE numero_documento = num_doc and contrasena=contra and estado = "A";
END$$

/*PROCEDIMIENTO DE REGISTRAR USUARIOS ------------------------------------------------------------------------------*/
CREATE PROCEDURE Registrar_Usuarios
(
In num_doc bigint unsigned,
In nombre varchar(255),
In correo varchar(255),
In contrasena varchar(255),
In direccion varchar(255),
In telefono bigint unsigned,
In nivel_educativo enum("Bachiller","Tecnico","Tecnologo","Profecional"),
In referencia_personal varchar(255),
In telefono_referencia_personal bigint unsigned, 
In eps varchar(255),
In tipo_usuario enum('Administrador', 'Cliente','Sup_Bodega','Gerente'),
In registrado_por bigint unsigned
)
insert into usuario (numero_documento, nombre, correo, contrasena, direccion, telefono, nivel_educativo, referencia_personal, telefono_referencia_personal, eps, tipo_usuario, registrado_por)
values (num_doc, nombre, correo, contrasena, direccion, telefono, nivel_educativo, referencia_personal, telefono_referencia_personal, eps, tipo_usuario, registrado_por);

Call Registrar_Usuarios (1016020993, 'Sergio Torres', 'sergio_torres@gmail.com', 'S12345', 'Calle 1 # 2-3', '3118601464', 'Tecnico', 'María Gómez', 3101234567, 'Compensar', 'Administrador', '1');

/*TRIGGERS ------------------------------------------------------------------------------*/
DELIMITER $$

/*TRIGGER 1 (Validar que el abono no supere el valor_producto en alquiler) ------------------------------------------------------------------------------*/
CREATE TRIGGER validar_abono_alquiler
BEFORE INSERT ON alquiler
FOR EACH ROW
BEGIN
  IF NEW.abono > NEW.valor_producto THEN
    SIGNAL SQLSTATE '45000'
    SET MESSAGE_TEXT = 'El abono no puede ser mayor al valor del producto';
  END IF;
END$$

/*TRIGGER 2 (Evitar insertar productos con precio de compra 0) ------------------------------------------------------------------------------*/
CREATE TRIGGER validar_precio_compra_producto
BEFORE INSERT ON producto
FOR EACH ROW
BEGIN
  IF NEW.precio_compra <= 0 THEN
    SIGNAL SQLSTATE '45000'
    SET MESSAGE_TEXT = 'El precio de compra debe ser mayor que 0';
  END IF;
END$$

/*TRIGGER 3 (Validar que el precio de alquiler no sea menor al de compra) ------------------------------------------------------------------------------*/
CREATE TRIGGER trg_valida_precios
BEFORE INSERT ON producto
FOR EACH ROW
BEGIN
    IF NEW.precio_alquiler < NEW.precio_compra THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'El precio de alquiler no puede ser menor al de compra';
    END IF;
END $$

/*TRIGGER 4 (Calcular el total de la factura automáticamente) ------------------------------------------------------------------------------*/
CREATE TRIGGER trg_valor_total_factura
BEFORE INSERT ON factura
FOR EACH ROW
BEGIN
    DECLARE total_productos BIGINT DEFAULT 0;
    DECLARE total_servicios BIGINT DEFAULT 0;

    SELECT IFNULL(SUM(valor_producto_alquiler), 0)
    INTO total_productos
    FROM detalles_contiene
    WHERE id_alquiler = NEW.id_alquiler;

    SELECT IFNULL(SUM(valor_servicio), 0)
    INTO total_servicios
    FROM datelle_servicio
    WHERE id_alquiler = NEW.id_alquiler;

    SET NEW.valor_total = total_productos + total_servicios;
END $$

/*TRIGGER 5 (Bloquear eliminación de productos en uso) ------------------------------------------------------------------------------*/
CREATE TRIGGER trg_bloquea_eliminacion_producto
BEFORE DELETE ON producto
FOR EACH ROW
BEGIN
    IF EXISTS (SELECT 1 FROM detalles_contiene WHERE id_producto = OLD.id_producto) THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'No se puede eliminar un producto en uso';
    END IF;
END $$

/*TRIGGER 6 (Evitar eliminación de usuarios y sugerir cambio de estado) ------------------------------------------------------------------------------*/
CREATE TRIGGER trg_usuario_inactivo
BEFORE DELETE ON usuario
FOR EACH ROW
BEGIN
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'No se permite eliminar usuarios, debe cambiar estado a I';
END $$

/*TRIGGER 7 (Insertar automáticamente factura después de un alquiler) ------------------------------------------------------------------------------*/
CREATE TRIGGER crear_factura_despues_alquiler
AFTER INSERT ON alquiler
FOR EACH ROW
BEGIN
  INSERT INTO factura(fecha_factura, valor_total, iva, metodo_pago, id_usuario, id_alquiler)
  VALUES (CURDATE(), NEW.valor_producto, NEW.valor_producto * 0.19, 'Efectivo', NEW.id_usuario, NEW.id_alquiler);
END$$

/*TRIGGER 8 (Evitar que se inserte un número de teléfono duplicado en usuario) ------------------------------------------------------------------------------*/
CREATE TRIGGER validar_telefono_unico
BEFORE INSERT ON usuario
FOR EACH ROW
BEGIN
  IF EXISTS (SELECT 1 FROM usuario WHERE telefono = NEW.telefono) THEN
    SIGNAL SQLSTATE '45000'
    SET MESSAGE_TEXT = 'El número de teléfono ya está registrado';
  END IF;
END$$

/*TRIGGER 9 () ------------------------------------------------------------------------------*/


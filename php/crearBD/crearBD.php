<?php 

	$host = "localhost";
	$usuario = "root"; // Poner nombre de usuario de PhpMyAdmin.
	$db_pass = ""; // Poner contraseña de ese usuario de PhpMyadmin.
	$db_nombre = "prueba"; // Nombre de la base de datos.

	$conn = new mysqli($host, $usuario, $db_pass, $db_nombre);

	if ($conn->connect_error) {

		die("La conexión falló: " . $conn->connect_error);

	} else {

		//echo "conectado";

	}

	$sql_usuarios = "CREATE TABLE `usuarios` (`nombre` VARCHAR(50) NOT NULL , `correo` VARCHAR(60) NOT NULL , `usuario` VARCHAR(30) NOT NULL , `contra` VARCHAR(100) NOT NULL , PRIMARY KEY (`usuario`)) ENGINE = InnoDB;";

	$sql_experiencias = "CREATE TABLE `prueba`.`experiencias` ( `id` INT(10) NOT NULL AUTO_INCREMENT , `imagen` VARCHAR(150) NOT NULL , `titulo` VARCHAR(40) NOT NULL , `descripcion` VARCHAR(500) NOT NULL , `usuario` VARCHAR(30) NOT NULL , `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;";

	$sql_ofertas = "CREATE TABLE `ofertas` ( `id` INT(10) NOT NULL AUTO_INCREMENT , `imagen` VARCHAR(50) NOT NULL , `titulo` VARCHAR(20) NOT NULL , `precio` INT(20) NOT NULL , `oferta` VARCHAR(20) NOT NULL , `hotel` VARCHAR(40) NOT NULL , `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

	$sql_comentarios = "CREATE TABLE `comentarios` ( `id` INT NOT NULL AUTO_INCREMENT , `usuario` VARCHAR(30) NOT NULL , `experiencia` VARCHAR(150) NOT NULL , `nombrexp` VARCHAR(50) NOT NULL , `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

	$sql_foranea_experiencias = "ALTER TABLE experiencias ADD FOREIGN KEY (usuario) REFERENCES usuarios(usuario) ON DELETE CASCADE; ";

	$sql_foranea_comentarios = "ALTER TABLE comentarios ADD FOREIGN KEY (usuario) REFERENCES usuarios(usuario) ON DELETE CASCADE; ";

	$conn->query($sql_usuarios);
	$conn->query($sql_experiencias);
	$conn->query($sql_ofertas);
	$conn->query($sql_comentarios);
	$conn->query($sql_foranea_experiencias);
	$conn->query($sql_foranea_comentarios);
	if ($conn->query($sql_usuarios)) {
		
		echo "Tabla de usuarios creada correctamente.";

	}

	if ($conn->query($sql_experiencias)) {
		
		echo "Tabla de experiencias creada correctamente.";

	}

	if ($conn->query($sql_comentarios)) {
		
		echo "Tabla de comentarios creada correctamente.";

	}

	if ($conn->query($sql_ofertas)) {
		
		echo "Tabla de ofertas creada correctamente.";

	}

 ?>
<?php 

	session_start();

 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>JC FOTOGRAFIA</title>
		<!-- jQuery (primero) y otros archivos con funciones hechas en jQuery -->

		<script src="scripts/funciones.js"></script>

		<!-- Bootstrap CSS -->

	    <link rel="stylesheet" href="bootstrap/bootstrap.css">

	    <!-- Otros CSS -->

	    <link rel="stylesheet" href="css/plantilla.css">

	    <!-- Bootstrap JS -->

	    <script src="bootstrap/bootstrap.js"></script>
	</head>
	<body>
		<section class="container">
			<?php  include_once("php/include/nav.php"); ?>
			<button type="button" href ="principal.php" class="btn btn-warning"><a id="paginaPrincipal" href="principal.php">Vuelve a la página principal</a></button><br><br>
			<nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Site Map</li>
              </ol>
            </nav>
			<h3>Mapa del sitio</h3>
			<p>Barra navegación.</p>
			<dl>
				<dt><a href="principal.php">1.- Galería</a></dt>
					<dd><a href="#">1.1.- Imagen individual seleccionada.</a></dd>
			</dl>
			<dl>
				<dt><a href="Ofertas.php">2.- Artículos</a></dt>
					<dd><a href="#">2.2.- Artículo individual seleccionado.</a></dd>
			</dl>
			<dl>
				<dt><a href="#">3.- Perfil</a></dt>
			</dl>
			<p>Botón de control.</p>
			<dl>
				<dt><a href="#">4.- Cerrar sesión</a></dt>
			</dl>
				<dt><a href="#">5.- Subir una imagen (administrador)</a></dt>
			</dl>
			</dl>
				<dt><a href="#">6.- Crear un artículo (administrador)</a></dt>
			</dl>
			</dl>
				<dt><a href="#">7.- Usuarios (administrador)</a></dt>
			</dl>
		</section>
	</body>
</html>
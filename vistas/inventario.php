<?php
$cnx = mysqli_connect("localhost", "root", "", "sportfitDB");
mysqli_set_charset($cnx, "utf8");
$sql = "SELECT * FROM articulo";
$resultado = mysqli_query($cnx, $sql);
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Inventario | SportFIT</title>
	<link rel="shortcut icon" href="../imgs/favicon.png" type="image/x-icon" />
	<link rel="stylesheet" href="../css/styles.css" />
	<link rel="stylesheet" href="../css/inventario.css">
	<script src="../js/script-inventario.js" defer></script>
</head>

<body>
	<!-- Inicio navbar -->
	<nav class="navbar">
		<a href="../index.php" class="logo">
			<img src="../imgs/Mockup - deportfit.svg" alt="logo SportFit" />
		</a>
		<ul class="center-nav">
			<li><a href="../index.php">Inicio</a></li>
			<li><a href="#">Inventario</a></li>
			<li><a href="prestamo.php">Préstamos</a></li>
		</ul>
		<a href="logout.php" class="btn" id="iniciar-sesion">Cerrar sesión</a>
	</nav>
	<!-- Fin del navbar -->
	<!-- Main content -->
	<main>
		<h2>INVENTARIO DE OBJETOS</h2>
		<div class="container-info-table">
			<table>
				<thead>
					<tr>
						<th>ID del artículo</th>
						<th>Tipo de artículo</th>
						<th>Cantidad</th>
						<th>Estado del artículo</th>
						<th></th>
					</tr>
				</thead>
			</table>
		</div>
		<!-- Footer -->
		<footer>
			<ul class="footer-info">
				<li>
					<strong>¿Dónde estamos ubicados?</strong>
					<ul>
						<li><a href="https://goo.gl/maps/YQ8RRNZhMk4FwjLE9" target="_blank">Carrera 30A N° 77 - 04 Barrio: El Raizal | Medellín, Colombia.</a></li>
					</ul>
				</li>
				<li>
					<strong>Líneas de Atención</strong>
					<ul>
						<li>
							<strong><a href="tel:+572636985">263 69 85</a></strong> Ext 0
						</li>
						<li>
							Sede principal: <strong><a href="tel:+573004144867">+57 300 414 48 67</a></strong>
						</li>
						<li>
							Sede Alto de la Cruz: <strong><a href="tel:+573004147823">+57 300 414 7823</a></strong>
						</li>
					</ul>
				</li>
			</ul>
			<div class="separador"></div>
			<div class="copyright">© 2022 SportFIT - Todos los derechos reservados</div>
		</footer>
		<!-- Fin Footer -->
	</main>
</body>

</html>
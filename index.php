<?php
	session_start();

	require 'php/conexion.php';

	if (isset($_SESSION['user_id'])) {
		$records = $conn->prepare('SELECT id, nombre_completo, correo, contrasena FROM usuarios WHERE id = :id');
		$records->bindParam(':id', $_SESSION['user_id']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);

		$user = null;

		if (count($results) > 0) {
			$user = $results;
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>SportFIT</title>
		<link rel="shortcut icon" href="imgs/favicon.png" type="image/x-icon" />
		<link rel="stylesheet" href="css/styles.css" />
		<script src="js/app.js" defer></script>
	</head>
	<body>
		<div class="home" id="home">
		<!-- Inicio navbar -->
			<?php if(!empty($user)): ?>
				<nav class="navbar">
					<a href="index.php" class="logo" >
						<img src="imgs/Mockup - deportfit.svg" alt="logo SportFit" />
					</a>
					<ul class="center-nav">
						<li><a href="#home">Inicio</a></li>
						<li><a href="vistas/inventario.php">Inventario</a></li>
						<li><a href="vistas/prestamo.php">Préstamos</a></li>
					</ul>
					<div class="select">
						<a href="vistas/editar-usuario.php" class="btn" id="iniciar-sesion">Editar sesión</a>
						<a href="vistas/logout.php" class="btn" id="iniciar-sesion">Cerrar sesión</a>
						<p style="display: block; width: 15ch; text-transform: capitalize;">Bienvenid@ <?php echo $results["nombre_completo"]; ?></p>
					</div>
				</nav>
			<?php else: ?>
				<nav class="navbar">
					<a href="index.php" class="logo" >
						<img src="imgs/Mockup - deportfit.svg" alt="logo SportFit" />
					</a>
					<ul class="center-nav">
					</ul>
					<a href="vistas/login.php" class="btn" id="iniciar-sesion">Iniciar sesión</a>
				</nav>
			<?php endif; ?>
		<!-- Fin del navbar -->


			<!-- Inicio Section -->
			<section class="first-section">
                <div class="left-section">
                    <h2 class="eslogan">Tu lado más saludable aquí y ahora</h2>
                    <span>Qué hacemos?</span>
                    <p class="text">Nos encargamos de organizar el Inventario de la <strong>Institución Educativa Ramón Múnera Lopera</strong> y el sistema de préstamos de insumos deportivos.</p>
                    <a class="btn" href="#">Conoce más aquí</a>
                </div>
                <div class="right-section">
					<img src="imgs/BalonFutbol.jpg" alt="Imagen">
				</div>
			</section>
			<!-- Fin Section -->

			<!-- Segundo section -->
			<section class="second-section">
				<div class="container-cards">
					<div class="card">
						<h2>Inventario</h2>
						<p>El inventario, el lugar donde puedes mirar los diferentes objetos a prestar.</p>
						<a href="#">Hazlo allí</a>
					</div>
					<div class="card">
						<h2>Préstamos</h2>
						<p>Los préstamos, el lugar donde puedes pedir los objetos que desees</p>
						<a href="#">Hazlo aqui</a>
					</div>
					<div class="card">
						<h2>Devoluciones</h2>
						<p>¿Ya hiciste tu préstamo? Hazlo cuando sea hora de devolverlo</p>
						<a href="#">Hazlo aquí</a>
					</div>
				</div>
			</section>
			<!-- Fin Segundo section -->

			<!-- Footer -->
			<footer>
				<ul class="footer-info">
					<li><strong>¿Dónde estamos ubicados?</strong>
						<ul>
							<li><a href="https://goo.gl/maps/YQ8RRNZhMk4FwjLE9" target="_blank">Carrera 30A N° 77 - 04 Barrio: El Raizal | Medellín, Colombia.</a></li>
						</ul>
					</li>
					<li><strong>Líneas de Atención</strong>
						<ul>
							<li><strong><a href="tel:+572636985">263 69 85</a></strong> Ext 0</li>
							<li>Sede principal: <strong><a href="tel:+573004144867">+57 300 414 48 67</a></strong></li>
							<li>Sede Alto de la Cruz: <strong><a href="tel:+573004147823">+57 300 414 7823</a></strong></li>
						</ul>
					</li>
				</ul>
				<div class="separador"></div>
				<div class="copyright">
					© 2022 SportFIT - Todos los derechos reservados
				</div>
			</footer>
			<!-- Fin Footer -->
		</div>
	</body>
</html>

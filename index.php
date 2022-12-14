<?php
	session_start();

	require 'php/conexion.php';

	if (isset($_SESSION['user_id'])) {
		$records = $conn->prepare('SELECT id, nombre_completo, correo, contrasena FROM usuarios WHERE id = :id');
		$records->bindParam(':id', $_SESSION['user_id']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);

		$user = null;

		if (is_countable($results) > 0) {
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
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>
	<body>
		<div class="home" id="home">
		<!-- Inicio navbar -->
			<?php if(!empty($user)): ?>
				<nav class="navbar">
					<a href="index.php" class="logo" >
						<img src="imgs/sportfit.png" alt="logo SportFit" />
					</a>
					<ul class="center-nav">
						<li><a href="#home">Inicio</a></li>
						<li><a href="vistas/inventario.php">Inventario</a></li>
						<li><a href="vistas/tabla-prestamo.php">Préstamos</a></li>
					</ul>
					<div class="select">	
						<p>Bienvenid@&nbsp;<strong><?php echo $results["nombre_completo"]; ?></strong><a href="vistas/editar-usuario.php" class="edit">&nbsp;<i class="fa-solid fa-pen-to-square"></i></a></p>
						<a href="vistas/logout.php" class="btn" id="iniciar-sesion">Cerrar sesión</a>
					</div>
				</nav>
			<?php else: ?>
				<nav class="navbar">
					<a href="index.php" class="logo" >
						<img src="imgs/sportfit.png" alt="logo SportFit" />
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
                    <a class="btn" target="_blank" href="https://www.ieramonmuneralopera.edu.co">Nuestra institución</a>
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
						<p>Aquí podrás ver y editar la cantidad de objetos del inventario institucional.</p>
					</div>
					<div class="card">
						<h2>Préstamos</h2>
						<p>¿Deseas prestar un implemento deportivo? Este es el lugar indicado.</p>
					</div>
					<div class="card">
						<h2>Devoluciones</h2>
						<p>¿Ya hiciste tu préstamo? ¡Devuelve aquí el objeto prestado!</p>
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

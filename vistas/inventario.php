<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Inventario | SportFIT</title>
		<link rel="shortcut icon" href="../imgs/favicon.png" type="image/x-icon" />
		<link rel="stylesheet" href="../css/styles.css" />
		<link rel="stylesheet" href="../css/inventario.css" />
		<script src="../js/script-inventario.js" defer></script>
	</head>
	<body>
		<!-- Inicio navbar -->
		<nav class="navbar">
			<a href="../index.php" class="logo" >
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
			<div class="container-cards">
				<!-- TODO: Hacer que muestre la cantidad de productos -->
				<!--* Info Futbol -->
				<div class="card">
					<img src="../imgs/inventario-img/futbolIcon.png" alt="Imagen" />
					<h3>Balones de fútbol</h3>
					<button id="btn-info-futbol">Más información</button>
				</div>
				<!--* Info Card -->
				<div class="container-info-card">
					<div class="info-card">
						<div class="info-card-img">
						</div>
						<div class="info-card-text">
							<span class="quit-container">&times;</span>
							<h2></h2>
							<ul>
								<li><Strong>Descripción</Strong>: <span id="info-objeto"></span></li>
								<li><Strong>Cantidad de artículos</Strong>: <span id="info-cantidad"></span></li>
								<li><strong>Cantidad de préstamos</strong>: <span id="info-prestado"></span></li>
							</ul>
							<a href="#" id="prestar">Prestalo ahora</a>
						</div>
					</div>
				</div>
				<!--! Fin card -------------------------------------------->
				<!--* Info Colchoneta -->
				<div class="card">
					<img src="../imgs/inventario-img/ColchonetaIcon.png" alt="Imagen" />
					<h3>Colchonetas</h3>
					<button id="btn-info-colchoneta">Más información</button>
				</div>
				<!--! Fin card -------------------------------------------->
				<!--* Info Bastones-->
				<div class="card">
					<img src="../imgs/inventario-img/bastonIcon.png" alt="Imagen" />
					<h3>Bastones</h3>
					<button id="btn-info-baston">Más información</button>
				</div>
				<!--! Fin card -------------------------------------------->
				<!--* Info Balones volleyball-->
				<div class="card">
					<img src="../imgs/inventario-img/volleyballIcon.png" alt="Imagen" />
					<h3>Balones de volleyball</h3>
					<button id="btn-info-volleyball">Más información</button>
				</div>
				<!--! Fin card -------------------------------------------->
				<!--* Info Ula ula-->
				<div class="card">
					<img src="../imgs/inventario-img/hulahoopIcon.png" alt="Imagen" />
					<h3>Ula ula</h3>
					<button id="btn-info-ulaula">Más información</button>
				</div>
				<!--! Fin card -------------------------------------------->
				<!--* Info Conos-->
				<div class="card">
					<img src="../imgs/inventario-img/conoIcon.png" alt="Imagen" />
					<h3>Conos</h3>
					<button id="btn-info-cono">Más información</button>
				</div>
				<!--! Fin card -------------------------------------------->
				<!--* Info Platillos-->
				<div class="card">
					<img src="../imgs/inventario-img/platilloIcon.png" alt="Imagen" />
					<h3>Platillos</h3>
					<button id="btn-info-platillo">Más información</button>
				</div>
				<!--! Fin card -------------------------------------------->
				<!--* Info Lazos-->
				<div class="card">
					<img src="../imgs/inventario-img/lazoIcon.png" alt="Imagen" />
					<h3>Lazos</h3>
					<button id="btn-info-lazos">Más información</button>
				</div>
				<!--! Fin card -------------------------------------------->
				<!--* Info Pesa-->
				<div class="card">
					<img src="../imgs/inventario-img/pesaIcon.png" alt="Imagen" />
					<h3>Pesa</h3>
					<button id="btn-info-pesa">Más información</button>
				</div>
				<!--! Fin card -------------------------------------------->
				<!--* Info Cronometro-->
				<div class="card">
					<img src="../imgs/inventario-img/cronometroIcon.png" alt="Imagen" />
					<h3>Cronometro</h3>
					<button id="btn-info-cronometro">Más información</button>
				</div>
				<!--! Fin card -------------------------------------------->
				<!--* Info Pelotas de ping pong-->
				<div class="card">
					<img src="../imgs/inventario-img/pelotaPingPongIcon.png" alt="Imagen" />
					<h3>Pelota ping pong</h3>
					<button id="btn-info-pelota-pong">Más información</button>
				</div>
				<!--! Fin card -------------------------------------------->
				<!--* Info metro-->
				<div class="card">
					<img src="../imgs/inventario-img/metroIcon.png" alt="Imagen" />
					<h3>Metro</h3>
					<button id="btn-info-metro">Más información</button>
				</div>
				<!--! Fin card -------------------------------------------->
				<!--* Info Raqueta-->
				<div class="card">
					<img src="../imgs/inventario-img/pingpongIcon.png" alt="Imagen" />
					<h3>Raqueta</h3>
					<button id="btn-info-raqueta">Más información</button>
				</div>
				<!--! Fin card -------------------------------------------->
				<!--* Info pesas pequeñas-->
				<div class="card">
					<img src="../imgs/inventario-img/pesapequeñaIcon.png" alt="Imagen" />
					<h3>Pesas pequeñas</h3>
					<button id="btn-info-pesa-pequeña">Más información</button>
				</div>
				<!--! Fin card -------------------------------------------->
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

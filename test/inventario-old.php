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
							<?php while ($mostrar = mysqli_fetch_array($resultado)) { ?>
								<li><Strong>Descripción</Strong>: <?php echo $mostrar['descripcion']; ?></li>
								<li><Strong>Cantidad de artículos:</Strong> <?php echo $mostrar['cantidad'];?> </li>
								<li><strong>Cantidad de préstamos</strong>: <span id="info-prestado"></span></li>
							<?php } mysqli_free_result($resultado) ?>
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
<?php
	session_start();
    
    require 'session.php';
	require '../php/conexion.php';

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
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Préstamos | SportFIT</title>
        <link rel="shortcut icon" href="../imgs/favicon.png" type="image/x-icon" />
        <link rel="stylesheet" href="../css/prestamo.css">
        <link rel="stylesheet" href="../css/styles.css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="../js/script-prestamo.js" defer></script>
    </head>
    <body>
        <!-- Inicio navbar -->
        <nav class="navbar">
            <a href="../index.php" class="logo" >
                <img src="../imgs/sportfit.png" alt="logo SportFit" />
            </a>
            <ul class="center-nav">
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="inventario.php">Inventario</a></li>
                <li><a href="#">Préstamos</a></li>
            </ul>
            <div class="select">	
                <p>Bienvenid@&nbsp;<strong><?php echo $results["nombre_completo"]; ?></strong><a href="editar-usuario.php" class="edit">&nbsp;<i class="fa-solid fa-pen-to-square"></i></a></p>
                <a href="logout.php" class="btn" id="iniciar-sesion">Cerrar sesión</a>
            </div>
        </nav>
        <!-- Fin del navbar -->
        <!-- Main content -->
        <main>
            <h2>Préstamos</h2>
            <form method="POST" name="prestamo" id="prestamo">
                <label for="documento">Documento</label>
                <input type="text" placeholder="Escribe tus datos aquí" required>
                <label for="objeto">Objeto a prestar</label>
                <select name="objeto" required>
                    <option selected disabled>Seleccione una opción:</option>
                    <option name="">Balón de fútbol</option>
                    <option name="">Colchoneta</option>
                    <option name="">Bastón</option>
                    <option name="">Balón de volleyball</option>
                    <option name="">Ula ula</option>
                    <option name="">Cono</option>
                    <option name="">Platillo</option>
                    <option name="">Lazo</option>
                    <option name="">Pesa</option>
                    <option name="">Cronométro</option>
                    <option name="">Pelota de ping pong</option>
                    <option name="">Metro</option>
                    <option name="">Raqueta de ping pong</option>
                    <option name="">Pesas pequeñas</option>
                </select>
                <label for="fechaPrestamo">Fecha Préstamo</label>
                <input type="date" id="fecha" required>
                <label for="fechaDevolución">Fecha devolución</label>
                <input type="date" id="devolver" required>
                <button id="enviarPrestamo" class="btn">Solicitar Préstamo</button>
            </form>
        </main>
        <!-- Fin Main content -->
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
    </body>
</html>
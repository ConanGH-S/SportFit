<!DOCTYPE html>
<html lang="es">
<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Inicio de sesión | Registro | SportFIT</title>
		<link rel="stylesheet" href="../css/styles.css" />
        <link rel="stylesheet" href="../css/login.css">
		<link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Potta+One&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
	</head>

	<body>
		<!-- Inicio navbar -->
		<nav class="navbar">
			<a href="../index.php" class="logo" >
				<img src="../imgs/Mockup - deportfit.svg" alt="logo SportFit" />
			</a>
			<span></span>
			<span></span>
			<span></span>
		</nav>
		<!-- Fin del navbar -->

		<div class="contenedor__padre">
			<div class="contenedor__todo">
				<div class="caja__trasera">
					<div class="caja__trasera-login">
						<h3>¿Ya tienes una cuenta?</h3>
						<p>Inicia sesión para entrar en la página.</p>
						<button id="btn__iniciar-sesion">Iniciar Sesión</button>
					</div>
					<div class="caja__trasera-register">
						<h3>¿Aún no tienes una cuenta?</h3>
						<p>Regístrate para que puedas iniciar sesión.</p>
						<button id="btn__registrarse">Registrarse</button>
					</div>
				</div>

				<!-- Fomulario Login y Registro-->
				<div class="contenedor__login-register">
					<!-- Login -->
					<form method="POST" class="formulario__login">
						<h2>Iniciar Sesión</h2>
						<input minlength="3" maxlength="50" name="correo" id="correoLogin" type="email" placeholder="Correo Electrónico" />
						<input name="contrasena" minlength="4" maxlength="12" id="contrasenaLogin" type="password" placeholder="Contraseña" />
						<button>Entrar</button>
					</form>
					<!-- Regístro -->
					<form method="POST" class="formulario__register">
						<h2>Registrarse</h2>
						<input minlength="5" maxlength="10" id="documentoRegister" name="documento" type="number" placeholder="Nro. Documento" />
						<input minlength="2" maxlength="50" id="nombre_completoRegister" name="nombre_completo" type="text" placeholder="Nombre Completo" />
						<input minlength="3" maxlength="50" id="correoRegister" name="correo" type="email" placeholder="Correo Electrónico" />
						<input minlength="7" maxlength="11" id="contactoRegister" name="contacto" type="number" placeholder="Contacto" />
						<input id="contrasenaRegister" name="contrasena" minlength="4" maxlength="12" type="password" placeholder="Contraseña" />
						<button>Registrarse</button>
					</form>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="../js/script-login.js"></script>
	</body>
</html>

<!-- Validaciones para el inicio de sesión de usuarios -->
<?php
	session_start();

	if (isset($_SESSION['user_id'])) {
		header('Location: ../index.php');
	}
	require '../php/conexion.php';
	
	if (!empty($_POST['correo']) && !empty($_POST['contrasena'])) {
		$records = $conn->prepare('SELECT id, correo, contrasena FROM usuarios WHERE correo = :correo');
		$records->bindParam(':correo', $_POST['correo']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);
		
		if (is_countable($results) > 0 && password_verify($_POST['contrasena'], $results['contrasena'])) {
			$_SESSION['user_id'] = $results['id'];
			header("location: ../index.php");
		} else {
			echo "<script>Swal.fire({
				icon: 'error',
				title: 'Error...',
				text: 'El correo y/o la contraseña son incorrectos, intente nuevamente!',
			});</script>";
        }
	}
?>
<!-- Validaciones para el registro de usuarios -->
<?php
    require '../php/conexion.php';

    if (!empty($_POST['documento']) && !empty($_POST['nombre_completo']) && !empty($_POST['correo']) && !empty($_POST['contacto']) && !empty($_POST['contrasena'])) {
        $sql = "INSERT INTO usuarios (documento, nombre_completo, correo, contacto, contrasena) VALUES (:documento, :nombre_completo, :correo, :contacto, :contrasena)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':documento', $_POST['documento']);
        $stmt->bindParam(':nombre_completo', $_POST['nombre_completo']);
        $stmt->bindParam(':correo', $_POST['correo']);
        $stmt->bindParam(':contacto', $_POST['contacto']);
        $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
        $stmt->bindParam(':contrasena', $contrasena);

        if ($stmt->execute()) {
        header("location: login.php");
        } else {
			echo "<script>Swal.fire({
				icon: 'error',
				title: 'Error...',
				text: 'Hubo un error a la hora de crear al usuario!',
			});</script>";			 
        }
    }
?>
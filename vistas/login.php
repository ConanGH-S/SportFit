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
		
		$message = "";

		if (is_countable($results) > 0 && password_verify($_POST['contrasena'], $results['contrasena'])) {
			$_SESSION['user_id'] = $results['id'];
			header("location: ../index.php");
		} else {
			$message = "Lo sentimos, los datos no coinciden";
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Inicio de sesión</title>
		<link rel="stylesheet" href="../css/styles.css" />
        <link rel="stylesheet" href="../css/Estilos.css">
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
		<?php if(!empty($message)): ?>
			<div class="registered-user">
				<p><?= $message ?></p>
			</div>
		<?php endif; ?>
		<div class="contenedor__padre">
			<div class="contenedor__todo">
				<div class="caja__trasera">
					<div class="caja__trasera-register">
						<h3>¿Aún no tienes una cuenta?</h3>
						<p>Regístrate para que puedas iniciar sesión.</p>
						<a href="signup.php">Registrarse</a>
					</div>
				</div>

				<!-- Fomulario Login y Registro-->
				<div class="contenedor__login-register">
					<!-- Login -->
					<form method="POST" class="formulario__login">
						<h2>Iniciar Sesión</h2>
						<input type="text" name="correo" placeholder="Correo Electrónico" />
						<input type="password" name="contrasena" placeholder="Contraseña" />
						<button>Entrar</button>
					</form>
				</div>
			</div>
		</div>

	</body>
</html>

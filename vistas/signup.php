<?php
    require '../php/conexion.php';

    $message = '';

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
        $message = 'Successfully created new user';
        } else {
        $message = 'Sorry there must have been an issue creating your account';
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
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

		<div class="contenedor__padre">
			<div class="contenedor__todo">
				<div class="caja__trasera">
					<div class="caja__trasera-login">
						<h3>¿Ya tienes una cuenta?</h3>
						<p>Inicia sesión para entrar en la página.</p>
						<a href="login.php">Iniciar Sesión</a>
					</div>
				</div>

				<!-- Fomulario Login y Registro-->
				<div class="contenedor__login-register">
					<!-- Regístro -->
					<form method="POST" class="formulario__register">
						<h2>Registrarse</h2>
						<input type="number" name="documento" placeholder="Documento" />
						<input type="text" name="nombre_completo" placeholder="Nombre Completo" />
						<input type="text" name="correo" placeholder="Correo Electrónico" />
						<input type="number" name="contacto" placeholder="Número de Contacto" />
						<input type="password" name="contrasena" placeholder="Contraseña" />
						<button>Registrarse</button>
					</form>
				</div>
			</div>
		</div>
		<?php if(!empty($message)): ?>
			<div class="registered-user">
				<p><?= $message ?></p>
			</div>
		<?php endif; ?>
</body>
</html>
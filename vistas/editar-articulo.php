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
    $id_articulo = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edición de articulo | SportFIT</title>
    <link rel="shortcut icon" href="../imgs/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/edicion-usuario.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <li><a href="tabla-prestamo.php">Préstamos</a></li>
        </ul>
        <div class="select">	
            <p>Bienvenid@&nbsp;<strong><?php echo $results["nombre_completo"]; ?></strong><a href="editar-usuario.php" class="edit">&nbsp;<i class="fa-solid fa-pen-to-square"></i></a></p>
            <a href="logout.php" class="btn" id="iniciar-sesion">Cerrar sesión</a>
        </div>
    </nav>
    <!-- Fin del navbar -->

    <!-- Formulario Edición de Usuario -->
    <main>
        <h2>Edición de artículo</h2>
        <form action="actualizar-articulo.php" method="POST" id="edicion">
            <?php
            require '../php/conexionsqli.php';
            $result = mysqli_query($cnx,"SELECT * FROM articulo WHERE id_articulo = '$id_articulo'");
            while($row = mysqli_fetch_array($result)){
                echo "<input value='{$id_articulo}' type='hidden' name='id_articulo'>";
                echo "<label>Artículo</label>";
                echo "<input value='{$row['tipo_articulo']}' disabled placeholder='Articulo' type='text' name='articulo'>";
                echo "<label>Cantidad</label>";
                echo "<input required value='{$row['cantidad']}' placeholder='Cantidad' type='number' name='cantidad'>";
                echo "<label>Estado</label>";
                echo "<input required value='{$row['estado_articulo']}' placeholder='Estado' type='text' name='estado'>";
                echo "<button type='submit' class='btn'>Editar</button>";
                echo "<a href='inventario.php' class='btn'>Cancelar</a>";
            }?>
        </form>
    </main>
    <!-- Fin Formulario Edición de Usuario -->

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
</body>
</html>
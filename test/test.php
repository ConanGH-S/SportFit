<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a</title>
</head>
<body>
    <div class="container">
        <?php
        $conex = mysqli_connect('localhost', 'root', '', 'sportfit');
        $sql = "SELECT * FROM usuarios";
        $resultado = mysqli_query($conex, $sql);
        while($mostrar = mysqli_fetch_array($resultado)){
        ?>
        <ul>
            <li><?php echo '<span class="span">ID: </span>' . $mostrar['id'] ?></li>
            <li><?php echo 'Numero de documento: ' . $mostrar['documento'] ?></li>
            <li><?php echo 'Nombre completo: ' . $mostrar['nombre_completo'] ?></li>
            <li><?php echo 'Correo electrónico: ' . $mostrar['correo'] ?></li>
            <li><?php echo 'Contacto: ' . $mostrar['contacto'] ?></li>
        </ul>
        <?php
        }
        ?>
    </div>

    <style>
        .span {
            color: red;
        }
    </style>
</body>
</html>
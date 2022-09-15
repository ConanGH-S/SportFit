<?php 
    include('../php/conexion.php');
    $usuarios = "SELECT * FROM articulo";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <table border="1">
        <tr>
            <th>ID del artículo</th>
            <th>Tipo de articulo</th>
            <th>Cantidad</th>
            <th>Estado del artículo</th>
            <th>Descripción</th>
        </tr>
        <tr>
            <!-- Mostrar datos creados -->
            <?php $resultado = mysqli_query($cnx, $usuarios);
                while($row = mysqli_fetch_assoc($resultado)){
            ?>
            <td class="info"><?php echo $row["id_articulo"]; ?></td>
            <td class="info"><?php echo $row["tipo_articulo"]; ?></td>
            <td class="info"><?php echo $row["cantidad"]; ?></td>
            <td class="info"><?php echo $row["estado_articulo"]; ?></td>
            <td class="info"><?php echo $row["descripcion"]; ?></td>
            <?php } mysqli_free_result($resultado); ?>
        </tr>
    </table>
</body>
</html>
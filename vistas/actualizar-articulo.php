<?php
    include("../php/conexionsqli.php");
    include("session.php");

    $id_articulo = $_POST["id_articulo"];
    $cantidad = $_POST["cantidad"];
    $estado = $_POST["estado"];

    $sql = "UPDATE articulo SET cantidad='$cantidad', estado_articulo='$estado' WHERE id_articulo='$id_articulo'";
    if(mysqli_query($cnx, $sql)){
        echo '<script language="javascript">';
        echo 'window.location="inventario.php";';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Error en proceso de actualización de articulos!");';
        echo 'window.location="inventario.php";';
        echo '</script>';
    }
    header("Location: inventario.php");
?>
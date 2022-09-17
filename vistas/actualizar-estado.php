<?php
    session_start();
    include("../php/conexionsqli.php");
    include("session.php");

    $estado_articulo = $_GET["id"];
    $devuelto = 'Devuelto';


    $sql = "UPDATE prestamo SET estado = '$devuelto' WHERE id_prestamo = '$estado_articulo'";
    if(mysqli_query($cnx, $sql)){
        echo '<script language="javascript">';
        echo 'window.location="tabla-prestamo.php";';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Error en proceso de actualización de estado!");';
        echo 'window.location="tabla_prestamo.php";';
        echo '</script>';
    }
?>
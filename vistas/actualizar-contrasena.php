<?php
    include("../php/conexionsqli.php");
    include("session.php");
    require "editar-usuario.php";

    $id = $_SESSION['user_id'];
    $contrasena = $_POST['contrasena'];

    $sql = "UPDATE usuarios SET contrasena='$contrasena' WHERE id=$id";
    if(mysqli_query($cnx, $sql)){
        echo '<script language="javascript">';
        echo 'window.location="inventario.php";';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Error en proceso de actualización de contraseña!");';
        echo 'window.location="inventario.php";';
        echo '</script>';
    }
?>
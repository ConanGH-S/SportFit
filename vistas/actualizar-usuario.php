<?php
    include("../php/conexionsqli.php");
    include("session.php");
    require "editar-usuario.php";

    $id = $_SESSION['user_id'];
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $contacto = $_POST['contacto'];
    $contrasena = $_POST['contrasena'];

    $sql = "UPDATE usuarios SET nombre_completo='$nombre_completo', correo='$correo', contacto='$contacto', contrasena='$contrasena' WHERE id=$id";
    if(mysqli_query($cnx, $sql)){
        echo '<script language="javascript">';
        echo 'window.location="inventario.php";';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Error en proceso de actualización de registro!");';
        echo 'window.location="inventario.php";';
        echo '</script>';
    }
?>
<?php
    session_start();

    require 'session.php';
    require '../php/conexion.php';
    require '../php/conexionsqli.php';
    $id = $_SESSION["user_id"];

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

    $mysqli = mysqli_connect("localhost", "root", "", "sportfit");

    $documento = $_POST["documento"];
    $articulo = $_POST["option-object"];
    $fecha_prestamo = $_POST["fecha_prestamo"];
    $fecha_devolucion = $_POST["fecha_devolucion"];

    $sql = "SELECT * FROM prestamo WHERE documento='$documento'";
    // TODO: Verificar los datos del documento, además de que con el articulo sea comparado con el value que tiene, y si está en la base de datos que tome esa.
?>
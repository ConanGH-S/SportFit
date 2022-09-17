<?php
    session_start();

    require_once 'session.php';
    require '../php/conexion.php';
    require '../php/conexionsqli.php';

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

    //! Obtener documento y verificar que los documentos del usuario y el prestamo sean iguales, luego asignar esos datos a una variable en caso de que sean iguales
    $id = $_SESSION["user_id"];
    $sql_documento = mysqli_query($cnx, "SELECT documento FROM usuarios WHERE id='$id'");
    $row_documento = mysqli_fetch_assoc($sql_documento);
    $resultado_documento = $row_documento["documento"];
    //! FIN

    //! Valores del articulo
    $articulo = $_POST["select"];
    $query_articulo = mysqli_query($cnx, "SELECT * FROM articulo WHERE id_articulo='$articulo'");
    $row_articulo = mysqli_fetch_assoc($query_articulo);
    $resultado_articulo = $row_articulo["id_articulo"];
    //! FIN

    //! Valores de la fecha del prestamo
    $fecha_prestamo = $_POST["fecha_prestamo"];
    //! FIN

    //! Valores de la fecha de devolucion
    $fecha_devolucion = $_POST["fecha_devolucion"];
    //! FIN

    //! Valores de observaciones
    $cantidad = $_POST["cantidad"];
    //! FIN

    $estado = 'En proceso';

    $sql = "INSERT INTO prestamo(fecha_prestamo, id_articulo, documento, fecha_devolucion, cantidad, estado) VALUES ('$fecha_prestamo', '$resultado_articulo', '$resultado_documento', '$fecha_devolucion', '$cantidad', '$estado')";
    if(mysqli_query($cnx, $sql)){
        echo '<script language="javascript">';
        echo 'window.location="tabla-prestamo.php";';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Error!");';
        echo 'window.location="../index.php";';
        echo '</script>';
    }
?>
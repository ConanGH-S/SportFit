<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "sportfit";

    try {
        $conn = new PDO ("mysql:host=$server;dbname=$database;",$username, $password);
    } catch (PDOException $e) {
        die("Conection Failed: ".$e->getMessage());
    }
/*   $cnx = mysqli_connect("localhost", "root", "", "sportfitDB");
    mysqli_set_charset($cnx, "utf8"); */
?>


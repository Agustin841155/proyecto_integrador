<?php

    $id_farmacia = $_GET['id_farmacia'];
    $nombre = $_GET['nombre'];
    $domicilio = $_GET['domicilio'];
    $telefono = $_GET['telefono'];
    $servicio = $_GET['servicio'];

    $db = new SQLite3('../../sql/farmacias.db');
    $db->exec("UPDATE farmacias SET nombre='$nombre', domicilio='$domicilio', telefono='$telefono', servicio='$servicio' WHERE id_farmacia='$id_farmacia';");
    header("Location: ../index.php");

?>
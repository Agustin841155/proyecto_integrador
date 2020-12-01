<?php
    $nombre = $_GET['nombre'];
    $domicilio = $_GET['domicilio'];
    $telefono = $_GET['telefono'];
    $servicio = $_GET['servicio'];

    $db = new SQLite3('../../sql/farmacias.db');

    $db->exec("INSERT INTO farmacias (nombre,domicilio,telefono,servicio) VALUES ('$nombre', '$domicilio', '$telefono', '$servicio');");
    
    header("Location: ../index.php");

?>
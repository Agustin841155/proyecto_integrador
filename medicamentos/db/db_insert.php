<?php
    $nombre = $_GET['nombre'];
    $tipo = $_GET['tipo'];
    $lote = $_GET['lote'];
    $precio = $_GET['precio'];

    $db = new SQLite3('../../sql/farmacias.db');

    $db->exec("INSERT INTO medicamentos (nombre,tipo,lote,precio) VALUES ('$nombre', '$tipo', '$lote', '$precio');");
    
    header("Location: ../index.php");

?>
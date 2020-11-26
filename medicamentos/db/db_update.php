<?php

    $id_medicamento = $_GET['id_medicamento'];
    $nombre = $_GET['nombre'];
    $tipo = $_GET['tipo'];
    $lote = $_GET['lote'];
    $precio = $_GET['precio'];

    $db = new SQLite3('../../sql/farmacias.db');
    $db->exec("UPDATE medicamentos SET nombre='$nombre', tipo='$tipo', lote='$lote', precio='$precio' WHERE id_medicamento='$id_medicamento';");
    header("Location: ../index.php");

?>
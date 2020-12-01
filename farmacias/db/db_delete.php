<?php
    $id_farmacia = $_GET["id_farmacia"];

    $db = new SQLite3("../../sql/farmacias.db");

    $db->exec("DELETE FROM farmacias where id_farmacia='$id_farmacia';");

    header("Location: ../index.php");
?>
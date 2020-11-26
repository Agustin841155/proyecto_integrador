<?php
    $id_medicamento = $_GET["id_medicamento"];

    $db = new SQLite3("../../sql/farmacias.db");

    $db->exec("DELETE FROM medicamentos where id_medicamento='$id_medicamento';");

    header("Location: ../index.php");
?>
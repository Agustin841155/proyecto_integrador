<?php

    $id_medicamento = $_GET["id_medicamento"];

    $db = new SQLite3("../sql/farmacias.db");

    $resultado = $db->query("SELECT * from medicamentos where id_medicamento='$id_medicamento';");

    while ($row = $resultado->fetchArray()) {
        $id_medicamento = $row["id_medicamento"];
        $nombre = $row["nombre"];
        $tipo = $row["tipo"];
        $lote = $row["lote"];
        $precio = $row["precio"];
    }

    $form = "
        <div class='form-group'>
            <label for='id_medicamento'>id_medicamento</label>
            <input type='text' readonly class='form-control' id='id_medicamento' name='id_medicamento' aria-describedby='id_medicamento' value='$id_medicamento'>
        </div>
        <div class='form-group'>
            <label for='nombre'>nombre</label>
            <input type='text' class='form-control' id='nombre' name='nombre' aria-describedby='nombre' value='$nombre'>
        </div>
        <div class='form-group'>
            <label for='tipo'>tipo</label>
            <input type='text' class='form-control' id='tipo' name='tipo' aria-describedby='tipo' value='$tipo'>
        </div>
        <div class='form-group'>
            <label for='lote'>lote</label>
            <input type='text' class='form-control' id='lote' name='lote' aria-describedby='lote' value='$lote'>
        </div>
        <div class='form-group'>
            <label for='precio'>precio</label>
            <input type='text' class='form-control' id='precio' name='precio' aria-describedby='precio' value='$precio'>
        </div>
        ";

    print($form);
?>
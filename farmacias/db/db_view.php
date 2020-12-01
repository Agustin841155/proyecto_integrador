<?php

    $id_farmacia = $_GET["id_farmacia"];

    $db = new SQLite3("../sql/farmacias.db");

    $resultado = $db->query("SELECT * from farmacias where id_farmacia='$id_farmacia';");

    while ($row = $resultado->fetchArray()) {
        $id_farmacia = $row["id_farmacia"];
        $nombre = $row["nombre"];
        $domicilio = $row["domicilio"];
        $telefono = $row["telefono"];
        $servicio = $row["servicio"];
    }

    $form = "
        <div class='form-group'>
            <label for='id_farmacia'>id_farmacia</label>
            <input type='text' readonly class='form-control' id='id_farmacia' name='id_farmacia' aria-describedby='id_farmacia' value='$id_farmacia'>
        </div>
        <div class='form-group'>
            <label for='nombre'>Nombre</label>
            <input type='text' class='form-control' id='nombre' name='nombre' aria-describedby='nombre' value='$nombre'>
        </div>
        <div class='form-group'>
            <label for='domicilio'>Domicilio</label>
            <input type='text' class='form-control' id='domicilio' name='domicilio' aria-describedby='domicilio' value='$domicilio'>
        </div>
        <div class='form-group'>
            <label for='telefono'>Telefono</label>
            <input type='text' class='form-control' id='telefono' name='telefono' aria-describedby='telefono' value='$telefono'>
        </div>
        <div class='form-group'>
            <label for='servicio'>Servicio</label>
            <input type='text' class='form-control' id='servicio' name='servicio' aria-describedby='servicio' value='$servicio'>
        </div>
        ";

    print($form);
?>
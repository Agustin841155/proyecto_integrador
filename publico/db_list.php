<?php
    $db = new SQLite3("../sql/farmacias.db");

    $resultado = $db->query("SELECT * from farmacias;");

    $table = "
        <table class='table' border=3>
            <thead>
            <tr>
                <th>id_farmacia</th>
                <th>Nombre</th>
                <th>Domicilio</th>
                <th>Telefono</th>
                <th>Servicio</th>
                <th>consultar</th>
            </tr>
            </thead>
            ";

    print($table);

    while ($row = $resultado->fetchArray()) {

        $id_farmacia = $row['id_farmacia'];
        $nombre = $row['nombre'];
        $domicilio = $row['domicilio'];
        $telefono = $row['telefono'];
        $servicio = $row['servicio'];

        $table = "
            <tr>
                <td>$id_farmacia</td>
                <td>$nombre</td>
                <td>$domicilio</td>
                <td>$telefono</td>
                <td>$servicio</td>
                <td><a href='view.php?id_=$id_farmacia'>presiona aqui para consultar</a></td>
            </tr>
        ";

        print($table);
    }
 
    print("</table>");
?>
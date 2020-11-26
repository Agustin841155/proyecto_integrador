<?php
    $db = new SQLite3("../sql/farmacias.db");

    $resultado = $db->query("SELECT * from farmacias;");

    $table = "
        <table class='table'>
            <thead>
            <tr>
                <th>id_farmacia</th>
                <th>Nombre</th>
                <th>Domicilio</th>
                <th>Telefono</th>
                <th>Servicio</th>
                <th>View</th>
                <th>Update</th>
                <th>Delete</th>
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
                <td><a href='view.php?id_farmacia=$id_farmacia'>View</a></td>
                <td><a href='update.php?id_farmacia=$id_farmacia'>Update</a></td>
                <td><a href='delete.php?id_farmacia=$id_farmacia'>Delete</a></td>
            </tr>
        ";

        print($table);
    }
 
    print("</table>");
?>
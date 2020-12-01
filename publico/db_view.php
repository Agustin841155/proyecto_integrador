<?php
    $db = new SQLite3("../sql/farmacias.db");

    $resultado = $db->query("SELECT * from medicamentos;");

    $table = "
        <table class='table' border=3>
            <thead>
            <tr>
                <th>id_medicamento</th>
                <th>nombre</th>
                <th>tipo</th>
                <th>lote</th>
                <th>precio</th>
            </tr>
            </thead>
            ";

    print($table);

    while ($row = $resultado->fetchArray()) {

        $id_medicamento = $row['id_medicamento'];
        $nombre = $row['nombre'];
        $tipo = $row['tipo'];
        $lote = $row['lote'];
        $precio = $row['precio'];

        $table = "
            <tr>
                <td>$id_medicamento</td>
                <td>$nombre</td>
                <td>$tipo</td>
                <td>$lote</td>
                <td>$precio</td>
            </tr>
        ";

        print($table);
    }
 
    print("</table>");
?>
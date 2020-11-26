<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Farmacia</title>
</head>
<body>
    <div class="container-fluid">
        <h1>Insertar nuevo producto</h1>
        <a href="index.php">Lista de medicamentos</a>
        <form action="db/db_insert.php" method="GET">
            <div class="form-group">
                <label for="nombre">nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre" placeholder="Ingresa el nombre del medicamento">
            </div>
            <div class="form-group">
                <label for="tipo">tipo</label>
                <input type="text" class="form-control" id="tipo" name="tipo" aria-describedby="tipo" placeholder="Ingresa que tipo de medicamento es">
            </div>
            <div class="form-group">
                <label for="lote">lote</label>
                <input type="text" class="form-control" id="lote" name="lote" aria-describedby="lote" placeholder="Ingresa el numero de lote">
            </div>
            <div class="form-group">
                <label for="precio">precio</label>
                <input type="text" class="form-control" id="precio" name="precio" aria-describedby="precio" placeholder="Ingresa el precio del medicamento">
            </div>
            <button type="submit" class="btn btn-primary">Insertar</button>
        </form>
    </div>
</body>
</html>
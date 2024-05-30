
<!DOCTYPE html>
<html>
<head>
    <title>Agregar Proyección</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .bttn{
            block-size: auto;
            padding: 3px;
            box-shadow: 2px;
            top: 20px;
            left: 20px;
            margin-left: 20px;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <a class="bttn" href="./index.php">Volver</a>
    <div class="container">
        <h1 class="mt-4">Agregar Proyección</h1>
        <form action="../controller/update.php" method="POST">
            <div class="form-group">
                <label for="pelicula_id">Película ID:</label>
                <input type="number" name="pelicula_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="sala_id">Sala ID:</label>
                <input type="number" name="sala_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="hora">Hora:</label>
                <input type="time" name="hora" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <title>Editar Historial de Película</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Editar Historial de Película</h1>
        <form action="/historial_peliculas/update/<?php echo $historial['id']; ?>" method="POST">
            <div class="form-group">
                <label for="pelicula_id">Película ID:</label>
                <input type="number" name="pelicula_id" class="form-control" value="<?php echo $historial['pelicula_id']; ?>" required>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" class="form-control" value="<?php echo $historial['fecha']; ?>" required>
            </div>
            <div class="form-group">
                <label for="evento">Evento:</label>
                <input type="text" name="evento" class="form-control" value="<?php echo $historial['evento']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
</html>

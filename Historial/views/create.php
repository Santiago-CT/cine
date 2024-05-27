
<!DOCTYPE html>
<html>
<head>
    <title>Agregar Historial de Película</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Agregar Historial de Película</h1>
        <form action="/historial_peliculas/store" method="POST">
            <div class="form-group">
                <label for="pelicula_id">Película ID:</label>
                <input type="number" name="pelicula_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="evento">Evento:</label>
                <input type="text" name="evento" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
</html>

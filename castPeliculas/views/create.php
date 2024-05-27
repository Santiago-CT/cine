
<!DOCTYPE html>
<html>
<head>
    <title>Agregar Cast de Película</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Agregar Cast de Película</h1>
        <form action="/cast_peliculas/store" method="POST">
            <div class="form-group">
                <label for="pelicula_id">Película ID:</label>
                <input type="number" name="pelicula_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="actor_id">Actor ID:</label>
                <input type="number" name="actor_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="rol">Rol:</label>
                <input type="text" name="rol" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
</html>

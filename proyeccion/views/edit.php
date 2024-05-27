<!DOCTYPE html>
<html>
<head>
    <title>Editar Proyección</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Editar Proyección</h1>
        <form action="/proyecciones/update/<?php echo $proyeccion['id']; ?>" method="POST">
            <div class="form-group">
                <label for="pelicula_id">Película ID:</label>
                <input type="number" name="pelicula_id" class="form-control" value="<?php echo $proyeccion['pelicula_id']; ?>" required>
            </div>
            <div class="form-group">
                <label for="sala_id">Sala ID:</label>
                <input type="number" name="sala_id" class="form-control" value="<?php echo $proyeccion['sala_id']; ?>" required>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" class="form-control" value="<?php echo $proyeccion['fecha']; ?>" required>
            </div>
            <div class="form-group">
                <label for="hora">Hora:</label>
                <input type="time" name="hora" class="form-control" value="<?php echo $proyeccion['hora']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
</html>

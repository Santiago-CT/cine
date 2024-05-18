<!DOCTYPE html>
<html>
<head>
    <title>Editar Sala</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Editar Sala</h1>
        <form action="/salas/update/<?php echo $sala['id']; ?>" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="<?php echo $sala['nombre']; ?>" required>
            </div>
            <div class="form-group">
                <label for="capacidad">Capacidad:</label>
                <input type="number" name="capacidad" class="form-control" value="<?php echo $sala['capacidad']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
</html>

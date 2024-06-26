
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Sala</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="/var/www/html/cine/estilos/salas.css" rel="stylesheet">
    <style><?php  include('/var/www/html/cine/estilos/salas.css')  ?></style>
</head>
<body>
    <section class="main-container">        
        <div class="container mural text-white">
            <h1 class="my-4">Crear Nueva Sala</h1>
            <form action="../controller/store.php" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="capacidad">Capacidad</label>
                    <input type="number" name="capacidad" id="capacidad" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
                <a href="./index.php" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </section>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Género</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Detalles del Género</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: <?php echo $genero['id']; ?></h5>
                <p class="card-text">Nombre: <?php echo $genero['nombre']; ?></p>
            </div>
        </div>
        <a href="/generos" class="btn btn-secondary mt-3">Volver</a>
    </div>
</body>
</html>

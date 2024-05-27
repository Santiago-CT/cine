
<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Historial de Película</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Detalles del Historial de Película</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: <?php echo $historial['id']; ?></h5>
                <p class="card-text">Película ID: <?php echo $historial['pelicula_id']; ?></p>
                <p class="card-text">Fecha: <?php echo $historial['fecha']; ?></p>
                <p class="card-text">Evento: <?php echo $historial['evento']; ?></p>
            </div>
        </div>
        <a href="/historial_peliculas" class="btn btn-secondary mt-3">Volver</a>
    </div>
</body>
</html>

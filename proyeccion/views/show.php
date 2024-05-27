
<!DOCTYPE html>
<html>
<head>
    <title>Detalles de la Proyección</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Detalles de la Proyección</h1>
        <div class="card">
            <img class="card-img-top" src="https://via.placeholder.com/300x450" alt="Poster de la película">
            <div class="card-body">
                <h5 class="card-title">ID: <?php echo $proyeccion['id']; ?></h5>
                <p class="card-text">Película ID: <?php echo $proyeccion['pelicula_id']; ?></p>
                <p class="card-text">Sala ID: <?php echo $proyeccion['sala_id']; ?></p>
                <p class="card-text">Fecha: <?php echo $proyeccion['fecha']; ?></p>
                <p class="card-text">Hora: <?php echo $proyeccion['hora']; ?></p>
            </div>
        </div>
        <a href="/proyecciones" class="btn btn-secondary mt-3">Volver</a>
    </div>
</body>
</html>


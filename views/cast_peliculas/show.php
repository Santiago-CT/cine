
<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Cast de Película</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Detalles del Cast de Película</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: <?php echo $cast['id']; ?></h5>
                <p class="card-text">Película ID: <?php echo $cast['pelicula_id']; ?></p>
                <p class="card-text">Actor ID: <?php echo $cast['actor_id']; ?></p>
                <p class="card-text">Rol: <?php echo $cast['rol']; ?></p>
            </div>
        </div>
        <a href="/cast_peliculas" class="btn btn-secondary mt-3">Volver</a>
    </div>
</body>
</html>

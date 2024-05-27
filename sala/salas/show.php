
<!DOCTYPE html>
<html>
<head>
    <title>Detalles de la Sala</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Detalles de la Sala</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: <?php echo $sala['id']; ?></h5>
                <p class="card-text">Nombre: <?php echo $sala['nombre']; ?></p>
                <p class="card-text">Capacidad: <?php echo $sala['capacidad']; ?></p>
            </div>
        </div>
        <a href="./index.php" class="btn btn-secondary mt-3">Volver</a>
    </div>
</body>
</html>

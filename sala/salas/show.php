
<!DOCTYPE html>
<html>
<head>
    <title>Detalles de la Sala</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="/var/www/html/cine/estilos/salas.css" rel="stylesheet">
    <style><?php  include('/var/www/html/cine/estilos/salas.css')  ?></style>
</head>
<body>
    <section class="main-container">        
        <div class="container mural text-white">
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
    </section>
</body>
</html>

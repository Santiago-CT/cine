
<!DOCTYPE html>
<html>
<head>
    <title>Detalles de la Sala</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/index.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Cine Multiplex</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tarifas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Convenios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tarjeta Club</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                    <?php
                    // Mostrar el estado de la sesión
                    if (isset($_SESSION['rol'])) {
                        echo '<li class="nav-item"><a class="nav-link" href="./secciones.php?action=logout">Cerrar Sesión</a></li>';
                    } else {
                        echo '<li class="nav-item"><a class="nav-link" href="login.php">Iniciar Sesión</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <section class="container">
        <div class="container mural ">
            <h1 class="mt-4"><strong>Detalles de la Sala </strong></h1>
            <div class="card">
                <div class="card-body text-left">
                    <h5 class="card-text">ID: <?php echo $sala['id']; ?></h5>
                    <p class="card-text">Nombre: <?php echo $sala['nombre']; ?></p>
                    <p class="card-text">Capacidad: <?php echo $sala['capacidad']; ?></p>
                </div>
            </div>
            <a href="./index.php" class="btn btn-primary mt-3">Volver</a>
        </div>
    </section>
</body>
</html>

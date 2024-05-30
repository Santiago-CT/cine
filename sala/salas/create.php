
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Sala</title>
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
        <div class="container mural">
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

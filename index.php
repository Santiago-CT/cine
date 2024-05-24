<?php
#require_once 'controllers/SalaController.php';


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Cine Reyes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .jumbotron {
            background-color: #343a40;
            color: white;
        }
        .nav-link {
            color: white !important;
        }
        .container-main {
            padding-top: 20px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Cine Colombia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/proyecciones">Proyecciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/reservaciones">Reservaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/salas">Salas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/generos">Géneros</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1 class="display-4">Bienvenido a Reyes Colombia Villavicencio</h1>
        <p class="lead">Gestión de películas, salas, reservaciones y más.</p>
        <a class="btn btn-primary btn-lg" href="/reservaciones/create" role="button">Hacer una Reservación</a>
    </div>

    <div class="container container-main">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Proyecciones</h5>
                        <p class="card-text">Consulta y gestiona las proyecciones de las películas, incluyendo el reparto.</p>
                        <a href="/proyecciones" class="btn btn-primary">Ver Proyecciones</a>
                        <a href="/proyecciones/create" class="btn btn-secondary">Agregar Proyección</a>
                        <a href="/reparto" class="btn btn-info mt-2">Ver Reparto</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Reservaciones</h5>
                        <p class="card-text">Consulta y gestiona las reservaciones de entradas.</p>
                        <a href="./views/reservaciones/index.php" class="btn btn-primary">Ver Reservaciones</a>
                        <a href="./views/reservaciones/create.php" class="btn btn-secondary">Agregar Reservación</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Salas</h5>
                        <p class="card-text">Consulta y gestiona la información de las salas.</p>
                        <a href="./views/salas/" class="btn btn-primary">Ver Salas</a>
                        <a href="./views/salas/create.php" class="btn btn-secondary">Agregar Sala</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Géneros</h5>
                        <p class="card-text">Consulta y gestiona los géneros de las películas.</p>
                        <a href="/generos" class="btn btn-primary">Ver Géneros</a>
                        <a href="/generos/create" class="btn btn-secondary">Agregar Género</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



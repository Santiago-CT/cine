<?php

require_once './config/conexion.php';
    
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cine Multiplex</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="styke.css">
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
        <section class="ctn">
            
            <div class=" text-center text-white presentation">
                <h1 class="display-2 text-center"><strong>BIENVENIDO A CINE MULTIPLEX</strong></h1>
                <h2 class="display-5">Portal de Admministración</h2>
                <p class="lead">Gestión de películas, salas, reservaciones y más.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Estadisticas</a>
            </div>
        </section>                        
        <section class="utils">
            <div class="container text-center">
                <h2 class="mb-3 display-3"><strong> Tus Herramientas</strong></h2> 
                <div class="row">  
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Proyecciones</h5>
                                <p class="card-text">Consulta y gestiona las proyecciones de las películas, incluyendo el reparto.</p>
                                <a href="./proyeccion/views/index.php" class="btn btn-primary">Ver Proyecciones</a>
                                <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] !== 'cliente'): ?>
                                    <a href="./proyeccion/views/create.php" class="btn btn-secondary">Agregar Proyección</a>
                                <?php endif; ?>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Reservaciones</h5>
                                <p class="card-text">Consulta y gestiona las reservaciones de entradas.</p>
                                <a href="./reservaciones/views/index.php" class="btn btn-primary">Ver Reservaciones</a>
                                <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] !== 'cliente'): ?>
                                    <a href="./proyeccion/views/create.php" class="btn btn-secondary">Agregar Proyección</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Salas</h5>
                                <p class="card-text">Consulta y gestiona la información de las salas.</p>
                                <a href="./sala/salas/index.php" class="btn btn-primary">Ver Salas</a>
                                <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] !== 'cliente'): ?>
                                    <a href="./proyeccion/views/create.php" class="btn btn-secondary">Agregar Proyección</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Géneros</h5>
                                <p class="card-text">Consulta y gestiona los géneros de las películas.</p>
                                <a href="./genero/views/index.php" class="btn btn-primary">Ver Géneros</a>
                                <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] !== 'cliente'): ?>                                  
                                    <a href="./genero/views/create.php" class="btn btn-secondary">Agregar Género</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>    
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </body>
    </html>
            
       
